<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\AquaticWorldOnOlderVersionProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\OldPlayerDirectoryProblem;

/**
 * Class VanillaAnalyser
 *
 * @package Aternos\Codex\Minecraft\Analyser
 */
class VanillaAnalyser extends MinecraftAnalyser
{
    public function __construct()
    {
        $this->addPossibleInsightClass(OldPlayerDirectoryProblem::class);
        $this->addPossibleInsightClass(AquaticWorldOnOlderVersionProblem::class);
    }
}