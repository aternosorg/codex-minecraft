<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

/**
 * Class PluginSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Bukkit
 */
abstract class PluginSolution extends BukkitSolution
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
     * @param string $pluginName
     * @return $this
     */
    public function setPluginName(string $pluginName): static
    {
        $this->pluginName = $pluginName;
        return $this;
    }
}