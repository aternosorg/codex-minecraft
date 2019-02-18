<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

/**
 * Class PluginSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Bukkit
 */
abstract class PluginSolution extends BukkitSolution
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
     * @param string $pluginName
     * @return $this
     */
    public function setPluginName(string $pluginName)
    {
        $this->pluginName = $pluginName;
        return $this;
    }
}