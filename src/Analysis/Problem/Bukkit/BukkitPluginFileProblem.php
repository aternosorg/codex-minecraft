<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveFileSolution;

/**
 * Class BukkitPluginFileProblem
 *
 * Represents a problem with a Bukkit plugin file and provides:
 *  - The file path
 *  - PluginInstallDifferentVersionSolution and PluginRemoveFileSolution
 * and extends the BukkitPluginProblem.
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit
 */
abstract class BukkitPluginFileProblem extends BukkitPluginProblem
{
    protected ?string $pluginFilePath = null;

    /**
     * @return string|null
     */
    public function getPluginFilePath(): ?string
    {
        return $this->pluginFilePath;
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
        // worldedit-bukkit-7.3.4-beta-01.jar OR .paper-remapped/worldedit-bukkit-7.3.4-beta-01.jar
        $pluginFileName = $this->extractPluginFileName($matches[1]);
        // plugins OR plugins/.paper-remapped
        $folderPath = $this->correctPluginPath($matches[2]);

        $this->pluginFilePath = $folderPath . '/' . $pluginFileName;
        $this->pluginName = $this->extractPluginName($matches[1]);

        $this->addSolution((new PluginInstallDifferentVersionSolution())->setPluginName($this->getPluginName()));
        $this->addSolution((new PluginRemoveFileSolution())->setPluginFilePath($this->getPluginFilePath())->setPluginName($this->getPluginName()));
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return parent::isEqual($insight)
            && $insight instanceof static
            && $this->getPluginFilePath() === $insight->getPluginFilePath();
    }

}