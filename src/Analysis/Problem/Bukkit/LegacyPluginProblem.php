<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A plugin does not specify an api-version in its plugin.yml, so the server treats it as a plugin
 * for Minecraft versions before 1.13 and loads it with the legacy material support.
 *
 * Such plugins often only partly work. The legacy material support logs its own warning
 * ("Initializing Legacy Material Support"), which is not reported separately, because it is caused by these plugins.
 */
class LegacyPluginProblem extends PluginProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("legacy-plugin-problem", [
            "plugin-name" => $this->getPluginName()
        ]);
    }

    /**
     * Matches the warning with the full name of the plugin, for example:
     * Legacy plugin LegacyNoApi v1.0 does not specify an api-version.
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Legacy plugin (?<plugin>' . static::PLUGIN_NAME . ') v\S+ does not specify an api-version\./'];
    }
}
