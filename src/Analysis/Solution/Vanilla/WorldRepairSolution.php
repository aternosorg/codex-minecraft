<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Vanilla;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class WorldRepairSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Vanilla
 */
class WorldRepairSolution extends VanillaSolution
{
    /**
     * @var string
     */
    protected $worldName;

    /**
     * Get the solution as a human readable message
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
    public function setWorldName(string $worldName)
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