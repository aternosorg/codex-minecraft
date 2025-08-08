<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

class PluginEnablingProblem extends PluginProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-enabling-problem", ["plugin-name" => $this->getPluginName()]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Error occurred while enabling (\S+) [^\(]*\(Is it up to date\?\)/'];
    }
}