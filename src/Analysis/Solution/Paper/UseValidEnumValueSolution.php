<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Paper;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Find the invalid value in the Paper configuration files and replace it with an allowed one.
 */
class UseValidEnumValueSolution extends PaperSolution
{
    /**
     * @param string $value The invalid value as it is written in the configuration file
     */
    public function __construct(protected string $value)
    {
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("use-valid-enum-value-solution", [
            "value" => $this->value
        ]);
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}
