<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\BukkitYmlWorldSettingSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * The generator or biome provider set for a default world in bukkit.yml cannot be used,
 * so the world is created with the normal generator or biomes instead.
 *
 * The plugin named in the setting is either not installed, not enabled before the worlds are loaded
 * (it needs load: STARTUP in its plugin.yml), or does not provide a default world generator or biome provider.
 */
class DefaultWorldProviderProblem extends BukkitProblem
{
    public const string PLUGIN_MISSING = "plugin-missing";
    public const string PLUGIN_NOT_ENABLED = "plugin-not-enabled";
    public const string NOT_PROVIDED = "not-provided";

    /**
     * Start of every message, with the setting and the world, for example:
     * Could not set generator for default world 'world': Plugin
     * Could not set biome provider for default world 'world': Plugin
     */
    protected const string PREFIX = "Could not set (?<setting>generator|biome provider) for default world '(?<world>[^']+)': Plugin ";

    protected string $variant;
    protected string $setting;
    protected string $worldName;
    protected string $pluginName;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        $key = match ($this->getVariant()) {
            self::PLUGIN_MISSING => "default-world-plugin-missing-problem",
            self::PLUGIN_NOT_ENABLED => "default-world-plugin-not-enabled-problem",
            self::NOT_PROVIDED => "default-world-plugin-not-provided-problem",
        };
        return Translator::getInstance()->getTranslation($key, [
            "setting" => $this->getSetting(),
            "world-name" => $this->getWorldName(),
            "plugin-name" => $this->getPluginName()
        ]);
    }

    /**
     * The pattern key is the variant used in getMessage().
     * Except for a missing plugin, the full name of the plugin with its version is logged, for example:
     * Could not set generator for default world 'world_the_end': Plugin 'MissingGen' does not exist
     * Could not set generator for default world 'world': Plugin 'LateGen v1.0' is not enabled yet (is it load:STARTUP?)
     * Could not set biome provider for default world 'world_nether': Plugin 'StartupGen v1.0' lacks a default world biome provider
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            self::PLUGIN_MISSING => "/" . static::PREFIX . "'(?<plugin>[^']+)' does not exist/",
            self::PLUGIN_NOT_ENABLED => "/" . static::PREFIX . "'(?<plugin>[^']+?) v[^']+' is not enabled yet/",
            self::NOT_PROVIDED => "/" . static::PREFIX . "'(?<plugin>[^']+?) v[^']+' lacks a default world (?:generator|biome provider)/",
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->variant = $patternKey;
        // the setting in bukkit.yml is "generator" or "biome-provider"
        $this->setting = str_replace(" ", "-", $matches["setting"]);
        $this->worldName = $matches["world"];
        $this->pluginName = $matches["plugin"];

        if ($this->variant === self::PLUGIN_MISSING) {
            $this->addSolution(new PluginInstallSolution($this->getPluginName()));
        } else {
            $this->addSolution(new PluginInstallDifferentVersionSolution($this->getPluginName()));
        }
        $this->addSolution(new BukkitYmlWorldSettingSolution($this->getSetting(), $this->getWorldName()));
    }

    /**
     * @return string
     */
    public function getVariant(): string
    {
        return $this->variant;
    }

    /**
     * @return string "generator" or "biome-provider"
     */
    public function getSetting(): string
    {
        return $this->setting;
    }

    /**
     * @return string
     */
    public function getWorldName(): string
    {
        return $this->worldName;
    }

    /**
     * @return string
     */
    public function getPluginName(): string
    {
        return $this->pluginName;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getVariant() === $insight->getVariant()
            && $this->getSetting() === $insight->getSetting()
            && $this->getWorldName() === $insight->getWorldName()
            && $this->getPluginName() === $insight->getPluginName();
    }
}
