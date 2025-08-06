<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution;

use Aternos\Codex\Minecraft\Translator\Translator;

class DoNothingSolution extends MinecraftSolution
{
    /**
     * Get the solution as a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("do-nothing-solution");
    }
}