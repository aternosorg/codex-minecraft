<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Vanilla;

use Aternos\Codex\Minecraft\Translator\Translator;

class WorldRepairSolution extends VanillaSolution
{
    protected ?string $worldName = null;

    /**
     * Get the solution as a human-readable message
     *
     * @return string
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
     * @return string|null
     */
    public function getWorldName(): ?string
    {
        return $this->worldName;
    }
}