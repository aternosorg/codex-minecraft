<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class PluginDependencyProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit
 */
class PluginDependencyProblem extends BukkitProblem
{
    /**
     * @var string
     */
    protected $pluginPath;

    /**
     * @var string
     */
    protected $pluginName;

    /**
     * @var string
     */
    protected $dependencyPluginName;

    /**
     * @return string
     */
    public function getPluginPath(): string
    {
        return $this->pluginPath;
    }

    /**
     * @return string
     */
    public function getPluginName()
    {
        return $this->pluginName;
    }

    /**
     * @return string
     */
    public function getDependencyPluginName(): string
    {
        return $this->dependencyPluginName;
    }

    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-dependency-problem", [
            "plugin-name" => $this->getPluginName(),
            "dependency-plugin-name" => $this->getDependencyPluginName()
        ]);
    }

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return array
     */
    public static function getPatterns(): array
    {
        return ['/Could not load \'(plugins[\/\\\]((?!\.jar).*)\.jar)\' in folder \'[^\']+\'\norg\.bukkit\.plugin\.UnknownDependencyException\: (\w+)/'];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param $patternKey
     * @return mixed
     */
    public function setMatches(array $matches, $patternKey)
    {
        $this->pluginPath = $matches[1];
        $this->pluginName = $matches[2];
        $this->dependencyPluginName = $matches[3];

        $this->addSolution((new PluginInstallSolution())->setPluginName($this->getDependencyPluginName()));
        $this->addSolution((new FileDeleteSolution())->setRelativePath($this->getPluginPath()));
    }

    /**
     * @param static $insight
     * @return bool
     */
    public function isEqual($insight): bool
    {
        return $this->getPluginName() === $insight->getPluginName()
            && $this->getPluginPath() === $insight->getPluginPath()
            && $this->getDependencyPluginName() === $insight->getDependencyPluginName();
    }
}