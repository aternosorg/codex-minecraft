<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\AquaticWorldOnOlderVersionProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\MalformedEncodingProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\OldPlayerDirectoryProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\OverworldSettingsMissingProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\TickingBlockEntityProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\AuthServerProblem;

/**
 * Class VanillaAnalyser
 *
 * @package Aternos\Codex\Minecraft\Analyser
 */
class VanillaAnalyser extends MinecraftAnalyser
{
    public function __construct()
    {
        $this->addPossibleInsightClass(VanillaVersionInformation::class);

        $this->addPossibleInsightClass(OldPlayerDirectoryProblem::class);
        $this->addPossibleInsightClass(AquaticWorldOnOlderVersionProblem::class);
        $this->addPossibleInsightClass(TickingBlockEntityProblem::class);
        $this->addPossibleInsightClass(MalformedEncodingProblem::class);
        $this->addPossibleInsightClass(AuthServerProblem::class);
        $this->addPossibleInsightClass(OverworldSettingsMissingProblem::class);
    }
}