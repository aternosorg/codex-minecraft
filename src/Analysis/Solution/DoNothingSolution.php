<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class DoNothingSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution
 */
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