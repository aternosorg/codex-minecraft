<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

class PluginDisablingProblem extends PluginProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-disabling-problem", ["plugin-name" => $this->getPluginName()]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Error occurred while disabling (\w+) [^\(]*\(Is it up to date\?\)/'];
    }
}