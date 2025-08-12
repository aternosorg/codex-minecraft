<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

class PluginInstallDifferentVersionSolution extends PluginInstallSolution
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-install-different-version-solution", ["plugin-name" => $this->getPluginName()]);
    }
}