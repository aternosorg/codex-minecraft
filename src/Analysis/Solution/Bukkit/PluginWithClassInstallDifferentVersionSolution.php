<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Install a different version of the plugin that contains a class, like {@see PluginInstallDifferentVersionSolution}.
 */
class PluginWithClassInstallDifferentVersionSolution extends PluginWithClassSolution
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-with-class-install-different-version-solution", [
            "class-name" => $this->getClassName()
        ]);
    }
}
