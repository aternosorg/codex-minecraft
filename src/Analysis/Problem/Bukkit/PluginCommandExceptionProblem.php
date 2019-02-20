<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class PluginCommandExceptionProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit
 */
class PluginCommandExceptionProblem extends PluginProblem
{
    /**
     * @var string
     */
    protected $command;

    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-command-exception-problem", [
            "plugin-name" => $this->getPluginName(),
            "command" => "/" . $this->getCommand()
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
        return ['/org\.bukkit\.command\.CommandException\: Cannot execute command \'([^\']+)\' in plugin (\w+)/'];
    }

    /**
     * @param array $matches
     * @param $patternKey
     * @return mixed|void
     */
    public function setMatches(array $matches, $patternKey)
    {
        $this->command = $matches[1];
        $this->pluginName = $matches[2];

        $this->addSolution((new PluginInstallDifferentVersionSolution())->setPluginName($this->getPluginName()));
        $this->addSolution((new PluginRemoveSolution())->setPluginName($this->getPluginName()));
    }

    /**
     * @param static $insight
     * @return bool
     */
    public function isEqual($insight): bool
    {
        return parent::isEqual($insight) && $this->getCommand() === $insight->getCommand();
    }

    /**
     * @return string
     */
    public function getCommand(): string
    {
        return $this->command;
    }
}