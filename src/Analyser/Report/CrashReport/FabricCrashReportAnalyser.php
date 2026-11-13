<?php

namespace Aternos\Codex\Minecraft\Analyser\Report\CrashReport;

use Aternos\Codex\Minecraft\Analysis\Information\Fabric\CrashReport\FabricVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Problem\Fabric\FabricEntryStageProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Fabric\FabricMixinApplyProblem;

/**
 * Analyses Fabric crash reports, including client logs that end in a crash report.
 *
 * The report parser makes one entry per line, so only problems whose pattern fits on a single line are added here.
 * Patterns that need the stack trace below an exception, like FabricMixinProblem and FabricClientOnlyModProblem,
 * cannot match in a crash report.
 */
class FabricCrashReportAnalyser extends MinecraftCrashReportAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(FabricVersionInformation::class);
        $this->addPossibleInsightClass(FabricMixinApplyProblem::class);
        $this->addPossibleInsightClass(FabricEntryStageProblem::class);
    }
}