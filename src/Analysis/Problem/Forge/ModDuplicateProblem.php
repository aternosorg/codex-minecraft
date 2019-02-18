<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;

/**
 * Class ModDuplicateProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Forge
 */
class ModDuplicateProblem extends ModProblem
{
    /**
     * @var string
     */
    protected $firstModPath;

    /**
     * @var string
     */
    protected $secondModPath;

    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        $first = end($pathParts = explode("/", $this->getFirstModPath()));
        $second = end($pathParts = explode("/", $this->getSecondModPath()));

        return "There are multiple mod files for the mod name '" . $this->getModName() . "': '" . $first . "' and '" . $second . "'.";
    }

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return array
     */
    public static function getPatterns(): array
    {
        return ['/Found a duplicate mod (.+) at \[([^,\n]+), ([^,\n]+)\]/'];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param $patternKey
     * @return mixed
     */
    public function setMatches(array $matches, $patternKey)
    {
        $this->modName = $matches[1];
        $this->firstModPath = $matches[2];
        $this->secondModPath = $matches[3];

        $this->addSolution((new FileDeleteSolution())->setAbsolutePath($this->getFirstModPath()));
        $this->addSolution((new FileDeleteSolution())->setAbsolutePath($this->getSecondModPath()));
    }

    /**
     * @param static $insight
     * @return bool
     */
    public function isEqual($insight): bool
    {
        return parent::isEqual($insight)
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