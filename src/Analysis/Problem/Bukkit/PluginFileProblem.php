<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;

/**
 * Class PluginFileProblem
 *
 * Represents a problem with a Bukkit plugin file and provides:
 *  - The plugins' file path {@see PluginFileProblem::getPluginFilePath()}
 *  - {@link PluginInstallDifferentVersionSolution} and {@link FileDeleteSolution}
 *  - All features from {@link PluginProblem} (extends {@link PluginProblem})
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit
 */
abstract class PluginFileProblem extends PluginProblem
{
    protected string $pluginFilePath;

    /**
     * @return string
     */
    public function getPluginFilePath(): string
    {
        return $this->pluginFilePath;
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        // worldedit-bukkit-7.3.4-beta-01.jar OR .paper-remapped/worldedit-bukkit-7.3.4-beta-01.jar
        $pluginFileName = $this->extractPluginFileName($matches[1]);
        // plugins OR plugins/.paper-remapped
        $folderPath = $this->correctPluginPath($matches[2]);

        $this->pluginFilePath = $folderPath . '/' . $pluginFileName;
        $this->pluginName = $this->extractPluginName($matches[1]);

        $this->addSolution(new PluginInstallDifferentVersionSolution($this->getPluginName()));
        $this->addSolution(new FileDeleteSolution($this->getPluginFilePath()));
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