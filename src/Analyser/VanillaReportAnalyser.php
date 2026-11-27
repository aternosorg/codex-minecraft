<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaReportJavaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaReportVersionInformation;

class VanillaReportAnalyser extends MinecraftAnalyser
{
    public function __construct()
    {
        $this->addPossibleInsightClass(VanillaReportVersionInformation::class);
        $this->addPossibleInsightClass(VanillaReportJavaVersionInformation::class);
    }
}