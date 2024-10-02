<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Analysis\InsightInterface;
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
    protected ?string $pluginPath = null;
    protected ?string $pluginName = null;

    /**
     * @var string[]
     */
    protected array $dependencyPluginNames = [];

    /**
     * @return string|null
     */
    public function getPluginPath(): ?string
    {
        return $this->pluginPath;
    }

    /**
     * @return string|null
     */
    public function getPluginName(): ?string
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
            $result[] = "'" . $name . "'";
        }
        return implode(", ", $result);
    }

    /**
     * Get a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        if (count($this->getDependencyPlugins()) === 1) {
            return Translator::getInstance()->getTranslation("plugin-dependency-problem", [
                "plugin-name" => $this->getPluginName(),
                "dependency-plugin-name" => $this->getDependencyPlugins()[0]
            ]);
        }

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
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return [
            '/Could not load \'(plugins[\/\\\]((?!\.jar).*)\.jar)\' in (?:folder )?\'[^\']+\''
            . '\norg\.bukkit\.plugin\.UnknownDependencyException\: Unknown\/missing dependency plugins: \[([\w ,]+)\]/'];
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
        $this->dependencyPluginNames = preg_split("/, ?/", $matches[3]);

        foreach ($this->dependencyPluginNames as $name) {
            $this->addSolution((new PluginInstallSolution())->setPluginName($name));
        }
        $this->addSolution((new FileDeleteSolution())->setRelativePath($this->getPluginPath()));
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        if (!($insight instanceof static)) {
            return false;
        }

        if ($this->getPluginName() !== $insight->getPluginName() || $this->getPluginPath() !== $insight->getPluginPath()) {
            return false;
        }

        $dependencies = $insight->getDependencyPlugins();
        sort($dependencies);
        $ownDependencies = $this->getDependencyPlugins();
        sort($ownDependencies);
        return $dependencies === $ownDependencies;
    }
}