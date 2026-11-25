<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A plugin threw an exception while it was disabled, either in its own onDisable()
 * or while the plugin loader cleaned up what the plugin had registered.
 */
class PluginDisablingProblem extends PluginProblem
{
    /**
     * The cleanup steps of the plugin loader while disabling a plugin, as they appear in the log line, for example:
     * Error occurred (in the plugin loader) while unregistering events for BrokenHandlerList v1.0 (Is it up to date?)
     */
    protected const array PLUGIN_LOADER_STEPS = [
        'disabling',
        'cancelling tasks for',
        'cancelling global tasks for',
        'cancelling async tasks for',
        'unregistering services for',
        'unregistering events for',
        'unregistering lifecycle event handlers for',
        'unregistering plugin channels for',
        'removing chunk tickets for',
    ];

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-disabling-problem", ["plugin-name" => $this->getPluginName()]);
    }

    /**
     * The first pattern matches exceptions in onDisable() of the plugin, for example:
     * Error occurred while disabling DisableBoom v1.0
     *
     * The other patterns match exceptions while the plugin loader cleans up after the plugin,
     * one for each step in {@see PluginDisablingProblem::PLUGIN_LOADER_STEPS}, for example:
     * Error occurred (in the plugin loader) while cancelling tasks for Multiverse-Core v4.3.1 (Is it up to date?)
     *
     * The plugin is logged with its name and its version with a "v" in front.
     * The plugin name is the first group, so {@see PluginProblem::setMatches()} reads it as `$matches[1]`.
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        $patterns = ['/Error occurred while disabling (' . static::PLUGIN_NAME . ')/'];
        foreach (static::PLUGIN_LOADER_STEPS as $step) {
            $patterns[] = '/Error occurred \(in the plugin loader\) while ' . $step . ' (?<plugin>' . static::PLUGIN_NAME . ') v[^(\n]+\(Is it up to date\?\)/';
        }
        return $patterns;
    }
}