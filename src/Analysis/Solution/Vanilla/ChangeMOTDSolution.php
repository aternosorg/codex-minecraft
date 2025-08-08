<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Vanilla;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class ChangeMOTDSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Vanilla
 */
class ChangeMOTDSolution extends VanillaSolution
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("change-motd-solution");
    }
}