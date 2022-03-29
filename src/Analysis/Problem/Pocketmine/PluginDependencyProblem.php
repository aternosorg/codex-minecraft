<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine;

use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginInstallSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class PluginDependencyProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine
 */
class PluginDependencyProblem extends PluginProblem
{
    /**
     * @var string
     */
    protected $dependencyPluginName;

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
        return ["/Could not load plugin \'(.+)\'\: Unknown dependency\: (.+)/"];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param $patternKey
     */
    public function setMatches(array $matches, $patternKey): void
    {
        $this->pluginName = $matches[1];
        $this->dependencyPluginName = $matches[2];

        $this->addSolution((new PluginInstallSolution())->setPluginName($this->getDependencyPluginName()));
        $this->addSolution((new PluginRemoveSolution())->setPluginName($this->getPluginName()));
    }
}