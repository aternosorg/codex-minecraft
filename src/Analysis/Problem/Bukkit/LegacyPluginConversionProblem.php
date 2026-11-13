<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * CraftBukkit could not convert a class of a legacy plugin (a plugin without an api-version in its plugin.yml).
 *
 * The server rewrites the classes of legacy plugins while loading them, so they work with the current API.
 * When that fails, the class is loaded unchanged and the plugin usually breaks as soon as it uses it.
 * Only a version of the plugin that is made for the current server version helps.
 * The problem is reported once per plugin, even if several of its classes fail.
 */
class LegacyPluginConversionProblem extends PluginProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("legacy-plugin-conversion-problem", [
            "plugin-name" => $this->getPluginName()
        ]);
    }

    /**
     * The plugin is logged with its full name, that is the name and the version with a "v" in front,
     * followed by the path of the class in the plugin jar.
     * Example: `Fatal error trying to convert LegacyBrokenClass v1.0:com/repro/BrokenClass.class`
     *
     * The plugin name is the first group, so {@see PluginProblem::setMatches()} reads it as `$matches[1]`.
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Fatal error trying to convert (?<plugin>' . PluginProblem::PLUGIN_NAME . ') v[^:\n]+:\S+\.class/'];
    }
}
