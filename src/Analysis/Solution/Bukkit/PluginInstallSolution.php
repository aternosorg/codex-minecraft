<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

/**
 * Class PluginInstallSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Bukkit
 */
class PluginInstallSolution extends PluginSolution
{
    /**
     * Get the solution as a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return "Install the plugin '" . $this->pluginName . "'.";
    }
}