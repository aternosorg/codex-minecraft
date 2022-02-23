<?php

namespace Aternos\Codex\Minecraft\Analyser\CrashReport;

use Aternos\Codex\Minecraft\Analyser\MinecraftAnalyser;
use Aternos\Codex\Minecraft\Analysis\Information\CrashReport\VanillaVersionInformation;

class MinecraftCrashReportAnalyser extends MinecraftAnalyser
{
    public function __construct()
    {
        $this->addPossibleInsightClass(VanillaVersionInformation::class);
    }
}