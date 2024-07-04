<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class PluginRemoveSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Bukkit
 */
class PluginRemoveSolution extends PluginSolution
{
    /**
     * Get the solution as a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-remove-solution", ["plugin-name" => $this->getPluginName()]);
    }
}