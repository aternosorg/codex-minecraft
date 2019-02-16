<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

/**
 * Class PluginInstallSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Bukkit
 */
class PluginInstallSolution extends BukkitSolution
{
    /**
     * @var string
     */
    protected $pluginName;

    /**
     * Get the solution as a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return "Install the plugin '" . $this->pluginName . "'.";
    }

    /**
     * @return string
     */
    public function getPluginName(): string
    {
        return $this->pluginName;
    }

    /**
     * @param string $pluginName
     * @return PluginInstallSolution
     */
    public function setPluginName(string $pluginName)
    {
        $this->pluginName = $pluginName;
        return $this;
    }
}