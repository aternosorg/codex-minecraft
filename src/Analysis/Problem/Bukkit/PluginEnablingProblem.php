<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

class PluginEnablingProblem extends PluginProblem
{
    /**
     * Get a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-enabling-problem", ["plugin-name" => $this->getPluginName()]);
    }

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return ['/Error occurred while enabling (\S+) [^\(]*\(Is it up to date\?\)/'];
    }
}