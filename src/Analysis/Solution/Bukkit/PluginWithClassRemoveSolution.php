<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Remove the plugin that contains a class, like {@see PluginRemoveSolution}.
 */
class PluginWithClassRemoveSolution extends PluginWithClassSolution
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-with-class-remove-solution", [
            "class-name" => $this->getClassName()
        ]);
    }
}
