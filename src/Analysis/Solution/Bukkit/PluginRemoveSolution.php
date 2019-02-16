<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

/**
 * Class PluginRemoveSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Bukkit
 */
class PluginRemoveSolution extends BukkitSolution
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
        return "Remove the plugin '" . $this->getPluginName() . "'.";
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
     * @return $this
     */
    public function setPluginName(string $pluginName)
    {
        $this->pluginName = $pluginName;
        return $this;
    }
}