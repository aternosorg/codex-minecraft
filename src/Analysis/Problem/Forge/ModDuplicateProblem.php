<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class ModDuplicateProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Forge
 */
class ModDuplicateProblem extends ModProblem
{
    protected string $firstModPath;
    protected string $secondModPath;

    /**
     * Get a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        $firstModPathParts = explode("/", $this->getFirstModPath());
        $firstModName = end($firstModPathParts);

        $secondModPathParts = explode("/", $this->getSecondModPath());
        $secondModName = end($secondModPathParts);

        return Translator::getInstance()->getTranslation("mod-duplicate-problem", [
            "mod-name" => $this->getModName(),
            "first-mod-path" => $firstModName,
            "second-mod-path" => $secondModName
        ]);
    }

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return ['/Found a duplicate mod (.+) at \[([^,\n]+), ([^,\n]+)\]/'];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param mixed $patternKey
     * @return void
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->modName = $matches[1];
        $this->firstModPath = $matches[2];
        $this->secondModPath = $matches[3];

        $this->addSolution((new FileDeleteSolution())->setAbsolutePath($this->getFirstModPath()));
        $this->addSolution((new FileDeleteSolution())->setAbsolutePath($this->getSecondModPath()));
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return parent::isEqual($insight)
            && $insight instanceof static
            && $this->getFirstModPath() === $insight->getFirstModPath()
            && $this->getSecondModPath() === $insight->getSecondModPath();
    }

    /**
     * @return string
     */
    public function getFirstModPath(): string
    {
        return $this->firstModPath;
    }

    /**
     * @return string
     */
    public function getSecondModPath(): string
    {
        return $this->secondModPath;
    }
}