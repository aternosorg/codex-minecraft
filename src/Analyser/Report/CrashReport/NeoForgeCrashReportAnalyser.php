<?php

namespace Aternos\Codex\Minecraft\Analyser\Report\CrashReport;

use Aternos\Codex\Minecraft\Analysis\Information\NeoForge\NeoForgeVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\InvalidDistDedicatedServerProblem;

class NeoForgeCrashReportAnalyser extends MinecraftCrashReportAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(NeoForgeVersionInformation::class);
        $this->addPossibleInsightClass(InvalidDistDedicatedServerProblem::class);
    }
}