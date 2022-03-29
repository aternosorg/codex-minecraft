<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;

/**
 * Class PluginProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit
 */
abstract class PluginProblem extends BukkitProblem
{
    /**
     * @var string
     */
    protected $pluginName;

    /**
     * @return string
     */
    public function getPluginName(): string
    {
        return $this->pluginName;
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param $patternKey
     */
    public function setMatches(array $matches, $patternKey): void
    {
        $this->pluginName = $matches[1];

        $this->addSolution((new PluginInstallDifferentVersionSolution())->setPluginName($this->getPluginName()));
        $this->addSolution((new PluginRemoveSolution())->setPluginName($this->getPluginName()));
    }

    /**
     * @param static $insight
     * @return bool
     */
    public function isEqual($insight): bool
    {
        return $this->getPluginName() === $insight->getPluginName();
    }
}