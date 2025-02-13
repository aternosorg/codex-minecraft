<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;

/**
 * Class PluginProblem
 *
 * Represents a problem with a Bukkit plugin and provides:
 *  - The plugin name {@see PluginProblem::getPluginName()}
 *  - {@link PluginInstallDifferentVersionSolution} and {@link PluginRemoveSolution}
 *  - Utility function to correct the plugin path {@see PluginProblem::correctPluginPath()}
 *  - Utility function to extract the plugin name (without the file extension) from a plugin path {@see PluginProblem::extractPluginName()}
 *  - Utility function to extract the file name (with the file extension) from a plugin path {@see PluginProblem::extractPluginFileName()}
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit
 */
abstract class PluginProblem extends BukkitProblem
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
        $this->pluginName = $this->extractPluginName($matches[1]);

        $this->addSolution((new PluginInstallDifferentVersionSolution())->setPluginName($this->getPluginName()));
        $this->addSolution((new PluginRemoveSolution())->setPluginName($this->getPluginName()));
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getPluginName() === $insight->getPluginName();
    }

    /**
     * Corrects the plugin path by removing the ".paper-remapped" part
     *
     * @param string $pluginPath
     * @return string
     */
    protected function correctPluginPath(string $pluginPath): string
    {
        return str_replace("plugins/.paper-remapped", "plugins", $pluginPath);
    }

    /**
     * Extracts the plugin name without the .jar file extension from a plugin path
     *
     * @param string $pluginPath Can be a path to a plugin file or a plugin name
     * @return string
     */
    protected function extractPluginName(string $pluginPath): string
    {
        $fileName = $this->extractPluginFileName($pluginPath);
        // plugin names can contain a . (dot)
        // when using pathinfo($pluginPath, PATHINFO_FILENAME) on a plugin name with a ., the wrong plugin name would be returned.
        // since the file extension of a plugin is always .jar, we can simply remove it to get the plugin name from the file name.
        if (str_ends_with($fileName, ".jar")) {
            $fileName = substr($fileName, 0, -4);
        }
        return $fileName;
    }

    /**
     * Extracts the plugin file name including the file extension (usually .jar) from a plugin path
     *
     * @param string $pluginPath
     * @return string
     */
    protected function extractPluginFileName(string $pluginPath): string
    {
        return pathinfo($pluginPath, PATHINFO_BASENAME);
    }
}