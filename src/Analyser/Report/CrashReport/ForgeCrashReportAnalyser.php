<?php

namespace Aternos\Codex\Minecraft\Analyser\Report\CrashReport;

use Aternos\Codex\Minecraft\Analysis\Information\Forge\CrashReport\ForgeVersionInformation;

class ForgeCrashReportAnalyser extends MinecraftCrashReportAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(ForgeVersionInformation::class);
    }
}