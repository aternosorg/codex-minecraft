<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\OutOfMemoryErrorProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\VanillaCrashReportTickingBlockEntityProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\VanillaCrashReportTickingEntityProblem;

class VanillaCrashReportAnalyser extends VanillaReportAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(VanillaCrashReportTickingEntityProblem::class);
        $this->addPossibleInsightClass(VanillaCrashReportTickingBlockEntityProblem::class);
        $this->addPossibleInsightClass(OutOfMemoryErrorProblem::class);
    }
}