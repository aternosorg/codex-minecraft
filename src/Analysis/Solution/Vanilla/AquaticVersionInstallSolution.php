<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Vanilla;

use Aternos\Codex\Minecraft\Translator\Translator;

class AquaticVersionInstallSolution extends VanillaSolution
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("aquatic-version-install-solution");
    }
}