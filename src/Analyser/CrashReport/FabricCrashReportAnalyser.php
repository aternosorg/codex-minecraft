<?php

namespace Aternos\Codex\Minecraft\Analyser\CrashReport;

use Aternos\Codex\Minecraft\Analysis\Information\Fabric\CrashReport\FabricVersionInformation;

/**
 * Class FabricCrashReportAnalyser
 *
 * @package Aternos\Codex\Minecraft\Analyser\CrashReport
 */
class FabricCrashReportAnalyser extends MinecraftCrashReportAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(FabricVersionInformation::class);
    }
}