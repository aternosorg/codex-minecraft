<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Problem\Paper\ConfigurationParseProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\OutOfMemoryErrorProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginOutOfMemoryErrorProblem;

class PaperCrashReportAnalyser extends VanillaCrashReportAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->overridePossibleInsightClass(OutOfMemoryErrorProblem::class, PluginOutOfMemoryErrorProblem::class);
        $this->addPossibleInsightClass(ConfigurationParseProblem::class);
    }
}
