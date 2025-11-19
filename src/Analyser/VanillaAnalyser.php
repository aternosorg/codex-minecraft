<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\AquaticWorldOnOlderVersionProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\AuthServerProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\CodeOfConductFolderMissingProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\MalformedEncodingProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\OldPlayerDirectoryProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\OverworldSettingsMissingProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\TickingBlockEntityProblem;

class VanillaAnalyser extends MinecraftAnalyser
{
    public function __construct()
    {
        $this->addPossibleInsightClass(AquaticWorldOnOlderVersionProblem::class);
        $this->addPossibleInsightClass(AuthServerProblem::class);
        $this->addPossibleInsightClass(CodeOfConductFolderMissingProblem::class);
        $this->addPossibleInsightClass(MalformedEncodingProblem::class);
        $this->addPossibleInsightClass(OldPlayerDirectoryProblem::class);
        $this->addPossibleInsightClass(OverworldSettingsMissingProblem::class);
        $this->addPossibleInsightClass(TickingBlockEntityProblem::class);
        $this->addPossibleInsightClass(VanillaVersionInformation::class);
    }
}
