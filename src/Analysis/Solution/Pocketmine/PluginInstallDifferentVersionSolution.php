<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine;

/**
 * Class PluginInstallDifferentVersionSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine
 */
class PluginInstallDifferentVersionSolution extends PluginSolution
{
    /**
     * Get the solution as a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return "Install a different version of the plugin '" . $this->getPluginName() . "'.";
    }
}