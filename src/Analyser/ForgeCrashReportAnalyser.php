<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeCrashReportVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\OutOfMemoryErrorProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\ModOutOfMemoryErrorProblem;

class ForgeCrashReportAnalyser extends VanillaCrashReportAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->overridePossibleInsightClass(OutOfMemoryErrorProblem::class, ModOutOfMemoryErrorProblem::class);
        $this->addPossibleInsightClass(ForgeCrashReportVersionInformation::class);
    }
}