<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution;

use Aternos\Codex\Analysis\AutomatableSolutionInterface;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class CommandRunSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution
 */
class CommandRunSolution extends MinecraftSolution implements AutomatableSolutionInterface
{
    protected ?string $command = null;

    /**
     * Get the solution as a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("command-run-solution", ["command" => $this->getCommand()]);
    }

    /**
     * @return string|null
     */
    public function getCommand(): ?string
    {
        return $this->command;
    }

    /**
     * @param string $command
     * @return $this
     */
    public function setCommand(string $command): static
    {
        $this->command = $command;
        return $this;
    }
}