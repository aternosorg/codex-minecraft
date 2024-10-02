<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

/**
 * Class PluginFileSolution
 *
 * Represents a solution that involves a plugin file and provides the file path.
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Bukkit
 */
abstract class PluginFileSolution extends PluginSolution
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
     * @param string $pluginFilePath
     * @return $this
     */
    public function setPluginFilePath(string $pluginFilePath): static
    {
        $this->pluginFilePath = $pluginFilePath;
        return $this;
    }
}