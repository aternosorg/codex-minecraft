<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Paper\UseValidEnumValueSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A setting in a Paper configuration file has a value that is not one of the allowed values,
 * so Paper ignores it and uses the default.
 *
 * The log does not name the file or the setting, only the value and the allowed values.
 * Paper lists at most ten allowed values and adds ", ..." when there are more.
 */
class InvalidEnumValueProblem extends PaperProblem
{
    protected string $value;
    protected string $allowedValues;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("invalid-enum-value-problem", [
            "value" => $this->getValue(),
            "allowed-values" => $this->getAllowedValues()
        ]);
    }

    /**
     * Matches the error of Paper's EnumValueSerializer, for example:
     * Invalid enum constant provided, expected one of [KICK, DROP], but got MAYBE
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Invalid enum constant provided, expected one of \[(?<allowed>[^\]\n]+)\], but got (?<value>[^\n]+)/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->value = $matches["value"];
        $this->allowedValues = $matches["allowed"];
        $this->addSolution(new UseValidEnumValueSolution($this->getValue()));
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return string The allowed values as Paper logs them, like "KICK, DROP"
     */
    public function getAllowedValues(): string
    {
        return $this->allowedValues;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getValue() === $insight->getValue()
            && $this->getAllowedValues() === $insight->getAllowedValues();
    }
}
