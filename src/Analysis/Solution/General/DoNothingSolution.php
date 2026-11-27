<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\General;

use Aternos\Codex\Minecraft\Analysis\Solution\MinecraftSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class DoNothingSolution extends MinecraftSolution
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("do-nothing-solution");
    }
}