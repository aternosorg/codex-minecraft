<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Forge;

use Aternos\Codex\Minecraft\Translator\Translator;

class ForgeInstallDifferentVersionSolution extends ForgeSolution
{
    /**
     * Get the solution as a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("forge-install-different-version-solution");
    }
}