<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Problem\Forge\HybridOutOfMemoryErrorProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\ModOutOfMemoryErrorProblem;

abstract class ForgeBukkitHybridAnalyser extends ForgeAnalyser
{
    public function __construct()
    {
        parent::__construct();

        foreach (BukkitAnalyser::getInsightClasses() as $insightClass) {
            $this->addPossibleInsightClass($insightClass);
        }
        $this->overridePossibleInsightClass(ModOutOfMemoryErrorProblem::class, HybridOutOfMemoryErrorProblem::class);
    }
}