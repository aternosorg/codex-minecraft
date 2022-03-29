<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class WorldDuplicateProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit
 */
class WorldDuplicateProblem extends BukkitProblem
{
    /**
     * @var string
     */
    protected $worldName;

    /**
     * @return string
     */
    public function getWorldName(): string
    {
        return $this->worldName;
    }

    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("world-duplicate-problem", ["world-name" => $this->getWorldName()]);
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
        return ['/World (.*) is a duplicate of another world and has been prevented from loading. Please delete the uid.dat file from .*\'s world directory if you want to be able to load the duplicate world./'];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param $patternKey
     */
    public function setMatches(array $matches, $patternKey): void
    {
        $this->worldName = $matches[1];

        $this->addSolution((new FileDeleteSolution())->setRelativePath($this->worldName . "/uid.dat"));
        $this->addSolution((new FileDeleteSolution())->setRelativePath($this->worldName));
    }
}