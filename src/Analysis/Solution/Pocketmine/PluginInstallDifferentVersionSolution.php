<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class PluginInstallDifferentVersionSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine
 */
class PluginInstallDifferentVersionSolution extends PluginSolution
{
    /**
     * Get the solution as a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-install-different-version-solution", ["plugin-name" => $this->getPluginName()]);
    }
}