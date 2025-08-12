<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution;

use Aternos\Codex\Analysis\AutomatableSolutionInterface;
use Aternos\Codex\Minecraft\Translator\Translator;

class CommandRunSolution extends MinecraftSolution implements AutomatableSolutionInterface
{
    /**
     * @param string $command
     */
    public function __construct(protected string $command)
    {
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("command-run-solution", ["command" => $this->getCommand()]);
    }

    /**
     * @return string
     */
    public function getCommand(): string
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