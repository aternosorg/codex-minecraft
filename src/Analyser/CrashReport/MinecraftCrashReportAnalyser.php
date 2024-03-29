<?php

namespace Aternos\Codex\Minecraft\Analyser\CrashReport;

use Aternos\Codex\Minecraft\Analyser\MinecraftAnalyser;
use Aternos\Codex\Minecraft\Analysis\Information\CrashReport\JavaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\CrashReport\VanillaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Problem\CrashReport\TickingBlockEntityProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\CrashReport\TickingEntityProblem;

/**
 * Class MinecraftCrashReportAnalyser
 *
 * @package Aternos\Codex\Minecraft\Analyser\CrashReport
 */
class MinecraftCrashReportAnalyser extends MinecraftAnalyser
{
    public function __construct()
    {
        $this->addPossibleInsightClass(VanillaVersionInformation::class);
        $this->addPossibleInsightClass(TickingEntityProblem::class);
        $this->addPossibleInsightClass(TickingBlockEntityProblem::class);
        $this->addPossibleInsightClass(JavaVersionInformation::class);
    }
}