<?php

namespace Aternos\Codex\Minecraft\Analyser\Report\CrashReport;

use Aternos\Codex\Minecraft\Analysis\Problem\Paper\ConfigurationParseProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\OutOfMemoryErrorProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginOutOfMemoryErrorProblem;

class PaperCrashReportAnalyser extends MinecraftCrashReportAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->overridePossibleInsightClass(OutOfMemoryErrorProblem::class, PluginOutOfMemoryErrorProblem::class);
        $this->addPossibleInsightClass(ConfigurationParseProblem::class);
    }
}
