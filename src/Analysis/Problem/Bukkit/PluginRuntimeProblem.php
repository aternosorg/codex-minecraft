<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class PluginRuntimeProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit
 */
class PluginRuntimeProblem extends PluginProblem
{
    /**
     * Get a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-runtime-problem", ["plugin-name" => $this->getPluginName()]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/Could not pass event \w+ to (\w+) .*/',
            '/Task \S+ for (\w+) \S+ generated an exception/'
        ];
    }
}