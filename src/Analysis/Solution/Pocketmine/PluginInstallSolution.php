<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine;

use Aternos\Codex\Minecraft\Translator\Translator;

class PluginInstallSolution extends PluginSolution
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-install-solution", ["plugin-name" => $this->getPluginName()]);
    }
}