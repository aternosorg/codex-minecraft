<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine;

use Aternos\Codex\Minecraft\Translator\Translator;

class PluginInstallDifferentVersionSolution extends PluginSolution
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-install-different-version-solution", ["plugin-name" => $this->getPluginName()]);
    }
}