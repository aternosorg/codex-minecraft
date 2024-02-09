<?php

namespace Aternos\Codex\Minecraft\Analyser\CrashReport;

use Aternos\Codex\Minecraft\Analysis\Information\NeoForge\NeoForgeVersionInformation;

class NeoForgeCrashReportAnalyser extends MinecraftCrashReportAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(NeoForgeVersionInformation::class);
    }
}