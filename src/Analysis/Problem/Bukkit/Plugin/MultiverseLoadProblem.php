<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\WorldRepairSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class MultiverseLoadProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin
 */
class MultiverseLoadProblem extends SpecificPluginProblem
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
        return Translator::getInstance()->getTranslation("multiverse-load-problem", ["world-name", $this->getWorldName()]);
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
        return ['/The world \'([^\']+)\' could NOT be loaded because it contains errors and is probably corrupt\!/'];
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
        $this->worldName = $matches[1];

        $this->addSolution((new WorldRepairSolution())->setWorldName($this->getWorldName()));
        $this->addSolution((new FileDeleteSolution())->setRelativePath($this->getWorldName()));
    }
}