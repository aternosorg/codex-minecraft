<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Forge;

/**
 * Class ModRemoveSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Forge
 */
class ModRemoveSolution extends ModSolution
{
    /**
     * Get the solution as a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return "Remove the mod '" . $this->getModName() . "'.";
    }
}