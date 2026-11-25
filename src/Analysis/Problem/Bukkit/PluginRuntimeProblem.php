<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Analysis\Problem\Paper\WorldDefaultsMissingProblem;
use Aternos\Codex\Minecraft\Translator\Translator;

class PluginRuntimeProblem extends PluginProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-runtime-problem", ["plugin-name" => $this->getPluginName()]);
    }

    /**
     * Matches exceptions in event handlers and scheduled tasks of a plugin, for example:
     * Task #15 for Multiverse-Core v4.3.1 generated an exception
     *
     * Tasks that fail because Paper's world defaults file is missing are skipped,
     * because {@see WorldDefaultsMissingProblem} reports the actual cause.
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/Could not pass event \w+ to (' . static::PLUGIN_NAME . ') .*/',
            '/Task \S+ for (' . static::PLUGIN_NAME . ') \S+ generated an exception(?!\n' . WorldDefaultsMissingProblem::EXCEPTION . ')/'
        ];
    }
}