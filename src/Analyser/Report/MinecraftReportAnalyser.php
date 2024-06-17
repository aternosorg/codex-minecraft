<?php

namespace Aternos\Codex\Minecraft\Analyser\Report;

use Aternos\Codex\Minecraft\Analyser\MinecraftAnalyser;
use Aternos\Codex\Minecraft\Analysis\Information\CrashReport\JavaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\CrashReport\VanillaVersionInformation;

class MinecraftReportAnalyser extends MinecraftAnalyser
{
    public function __construct()
    {
        $this->addPossibleInsightClass(VanillaVersionInformation::class);
        $this->addPossibleInsightClass(JavaVersionInformation::class);
    }
}