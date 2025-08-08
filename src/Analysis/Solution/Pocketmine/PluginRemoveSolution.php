<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class PluginRemoveSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine
 */
class PluginRemoveSolution extends PluginSolution
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-remove-solution", ["plugin-name" => $this->getPluginName()]);
    }
}