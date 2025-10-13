<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Vanilla;

use Aternos\Codex\Minecraft\Translator\Translator;

class WorldRepairSolution extends VanillaSolution
{
    /**
     * @param string $worldName
     */
    public function __construct(protected string $worldName)
    {
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("world-repair-solution", ["world-name" => $this->getWorldName()]);
    }

    /**
     * @param string $worldName
     * @return static
     */
    public function setWorldName(string $worldName): static
    {
        $this->worldName = $worldName;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorldName(): string
    {
        return $this->worldName;
    }
}