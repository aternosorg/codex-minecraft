<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\ModOutOfMemoryErrorProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\OutOfMemoryErrorProblem;

class QuiltCrashReportAnalyser extends VanillaCrashReportAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->overridePossibleInsightClass(OutOfMemoryErrorProblem::class, ModOutOfMemoryErrorProblem::class);
    }
}
