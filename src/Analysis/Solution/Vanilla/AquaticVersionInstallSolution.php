<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Vanilla;

use Aternos\Codex\Minecraft\Translator\Translator;

class AquaticVersionInstallSolution extends VanillaSolution
{
    /**
     * Get the solution as a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("aquatic-version-install-solution");
    }
}