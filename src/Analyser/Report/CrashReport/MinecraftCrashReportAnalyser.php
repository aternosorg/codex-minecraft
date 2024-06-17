<?php

namespace Aternos\Codex\Minecraft\Analyser\Report\CrashReport;

use Aternos\Codex\Minecraft\Analyser\Report\MinecraftReportAnalyser;
use Aternos\Codex\Minecraft\Analysis\Problem\CrashReport\TickingBlockEntityProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\CrashReport\TickingEntityProblem;

/**
 * Class MinecraftCrashReportAnalyser
 *
 * @package Aternos\Codex\Minecraft\Analyser\Report\CrashReport
 */
class MinecraftCrashReportAnalyser extends MinecraftReportAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(TickingEntityProblem::class);
        $this->addPossibleInsightClass(TickingBlockEntityProblem::class);
    }
}