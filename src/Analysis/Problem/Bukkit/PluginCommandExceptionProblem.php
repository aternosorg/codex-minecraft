<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class PluginCommandExceptionProblem extends PluginProblem
{
    protected ?string $command = null;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-command-exception-problem", [
            "plugin-name" => $this->getPluginName(),
            "command" => "/" . $this->getCommand()
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/org\.bukkit\.command\.CommandException\: Cannot execute command \'([^\']+)\' in plugin (\w+)/'];
    }

    /**
     * @inheritDoc
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