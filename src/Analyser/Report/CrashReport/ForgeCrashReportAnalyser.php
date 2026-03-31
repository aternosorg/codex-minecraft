<?php

namespace Aternos\Codex\Minecraft\Analyser\Report\CrashReport;

use Aternos\Codex\Minecraft\Analysis\Information\Forge\CrashReport\ForgeVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\InvalidDistDedicatedServerProblem;

class ForgeCrashReportAnalyser extends MinecraftCrashReportAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(ForgeVersionInformation::class);
        $this->addPossibleInsightClass(InvalidDistDedicatedServerProblem::class);
    }
}