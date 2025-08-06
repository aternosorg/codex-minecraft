<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

class PluginLoadProblem extends PluginFileProblem
{
    /**
     * Get a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-load-problem", ["plugin-name" => $this->getPluginName()]);
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
        return [
            '/Could not load \'(plugins[\/\\\][^\']+\.jar)\' in (?:folder )?\'([^\']+)\''
            . '(?!\n(org.bukkit.plugin.UnknownDependencyException|org.bukkit.plugin.InvalidPluginException\: (Unsupported API version|java\.lang\.UnsupportedClassVersionError)))/'
        ];
    }
}