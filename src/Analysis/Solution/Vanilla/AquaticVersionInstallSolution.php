<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Vanilla;

/**
 * Class AquaticVersionInstallSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Vanilla
 */
class AquaticVersionInstallSolution extends VanillaSolution
{
    /**
     * Get the solution as a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return 'Update the server software to 1.13 or newer.';
    }
}