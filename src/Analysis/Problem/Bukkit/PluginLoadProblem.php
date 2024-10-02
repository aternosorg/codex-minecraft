<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class PluginLoadProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit
 */
class PluginLoadProblem extends BukkitPluginProblem
{
    protected ?string $pluginPath = null;

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
            '/Could not load \'(plugins[\/\\\]((?!\.jar).*)\.jar)\' in folder \'[^\']+\''
            . '(?!\n(org.bukkit.plugin.UnknownDependencyException|org.bukkit.plugin.InvalidPluginException\: (Unsupported API version|java\.lang\.UnsupportedClassVersionError)))/'
        ];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param mixed $patternKey
     * @return void
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->pluginPath = str_replace("plugins/.paper-remapped/", "plugins/", $matches[1]);
        $this->pluginName = $matches[2];

        $this->addSolution((new PluginInstallDifferentVersionSolution())->setPluginName($this->getPluginName()));
        $this->addSolution((new FileDeleteSolution())->setRelativePath($this->getPluginPath()));
    }

    /**
     * @return string|null
     */
    public function getPluginPath(): ?string
    {
        return $this->pluginPath;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getPluginPath() === $insight->getPluginPath()
            && parent::isEqual($insight);
    }
}