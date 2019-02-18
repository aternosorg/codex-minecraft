<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

/**
 * Class PluginRemoveSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Bukkit
 */
class PluginRemoveSolution extends PluginSolution
{
    /**
     * Get the solution as a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return "Remove the plugin '" . $this->getPluginName() . "'.";
    }
}