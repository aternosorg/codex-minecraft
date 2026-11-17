<?php

namespace Aternos\Codex\Minecraft\Analyser\Report\CrashReport;

use Aternos\Codex\Minecraft\Analysis\Problem\Paper\ConfigurationParseProblem;

class PaperCrashReportAnalyser extends MinecraftCrashReportAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(ConfigurationParseProblem::class);
    }
}
