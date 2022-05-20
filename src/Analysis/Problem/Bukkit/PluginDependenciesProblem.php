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
class PluginDependenciesProblem extends BukkitProblem
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
     * @var string[]
     */
    protected $dependencyPluginNames;

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
     * get a list of missing dependencies
     * @return string[]
     */
    public function getDependencyPlugins(): array
    {
        return $this->dependencyPluginNames;
    }

    /**
     * @return string
     */
    public function getDependencyPluginNames(): string
    {
        $result = [];
        foreach ($this->dependencyPluginNames as $name) {
            $result[] = "'". $name ."'";
        }
        return implode(", ", $result);
    }

    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-dependencies-problem", [
            "plugin-name" => $this->getPluginName(),
            "dependency-plugin-names" => $this->getDependencyPluginNames()
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
        return ['/Could not load \'(plugins[\/\\\]((?!\.jar).*)\.jar)\' in folder \'[^\']+\'\norg\.bukkit\.plugin\.UnknownDependencyException\: Unknown\/missing dependency plugins: \[([\w ,]+)\]/'];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param $patternKey
     */
    public function setMatches(array $matches, $patternKey): void
    {
        $this->pluginPath = $matches[1];
        $this->pluginName = $matches[2];
        $this->dependencyPluginNames = preg_split("/, ?/", $matches[3]);

        foreach ($this->dependencyPluginNames as $name) {
            $this->addSolution((new PluginInstallSolution())->setPluginName($name));
        }
        $this->addSolution((new FileDeleteSolution())->setRelativePath($this->getPluginPath()));
    }

    /**
     * @param static $insight
     * @return bool
     */
    public function isEqual($insight): bool
    {
        if ($this->getPluginName() !== $insight->getPluginName() || $this->getPluginPath() !== $insight->getPluginPath()) {
            return false;
        }

        $dependencies = $insight->getDependencyPluginNames();
        foreach ($this->getDependencyPlugins() as $plugin) {
            if (!in_array($plugin, $dependencies)) {
                return false;
            }
            $dependencies = array_filter($dependencies, function ($value) use ($plugin) {
                return $value !== $plugin;
            });
        }

        return sizeof($dependencies) === 0;
    }
}