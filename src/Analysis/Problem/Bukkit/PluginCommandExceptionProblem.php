<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Analysis\InsightInterface;
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
    protected ?string $command = null;

    /**
     * Get a human-readable message
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
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return ['/org\.bukkit\.command\.CommandException\: Cannot execute command \'([^\']+)\' in plugin (\w+)/'];
    }

    /**
     * @param array $matches
     * @param mixed $patternKey
     * @return void
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->command = $matches[1];
        $this->pluginName = $matches[2];

        $this->addSolution(new PluginInstallDifferentVersionSolution($this->getPluginName()));
        $this->addSolution(new PluginRemoveSolution($this->getPluginName()));
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static && parent::isEqual($insight) && $this->getCommand() === $insight->getCommand();
    }

    /**
     * @return string
     */
    public function getCommand(): string
    {
        return $this->command;
    }
}