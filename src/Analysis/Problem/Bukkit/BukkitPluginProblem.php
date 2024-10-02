<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;

/**
 * Class PluginProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit
 */
abstract class BukkitPluginProblem extends BukkitProblem
{
    protected ?string $pluginName = null;

    /**
     * @return string|null
     */
    public function getPluginName(): ?string
    {
        return $this->pluginName;
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
        $this->pluginName = $matches[1];

        $this->addSolution((new PluginInstallDifferentVersionSolution())->setPluginName($this->getPluginName()));
        $this->addSolution((new PluginRemoveSolution())->setPluginName($this->getPluginName()));
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static && $this->getPluginName() === $insight->getPluginName();
    }

    /**
     * Corrects the plugin path by removing the ".paper-remapped/" part
     *
     * @param string $pluginPath
     * @return string
     */
    protected function correctPluginPath(string $pluginPath): string
    {
        return str_replace("plugins/.paper-remapped/", "plugins/", $pluginPath);
    }

    /**
     * Extracts the plugin name from a plugin path
     *
     * @param string $pluginPath
     * @return string
     */
    protected function extractPluginName(string $pluginPath): string
    {
        return pathinfo($pluginPath, PATHINFO_FILENAME);
    }
}