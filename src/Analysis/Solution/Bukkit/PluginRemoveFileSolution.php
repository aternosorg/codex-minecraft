<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

use Aternos\Codex\Analysis\AutomatableSolutionInterface;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class PluginRemoveFileSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Bukkit
 */
class PluginRemoveFileSolution extends PluginFileSolution implements AutomatableSolutionInterface
{
    /**
     * Get the solution as a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("file-delete-solution", ["file-path" => $this->getPluginFilePath()]);
    }
}