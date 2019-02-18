<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Forge;

/**
 * Class ModInstallDifferentVersionSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Forge
 */
class ModInstallDifferentVersionSolution extends ModSolution
{
    /**
     * Get the solution as a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return "Install a different version of the mod '" . $this->getModName() . "'.";
    }
}