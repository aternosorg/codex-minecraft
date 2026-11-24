<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\Quilt\QuiltJavaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\Quilt\QuiltVanillaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\Quilt\QuiltVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\OutOfMemoryErrorProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\ModOutOfMemoryErrorProblem;

class QuiltAnalyser extends VanillaAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->overridePossibleInsightClass(OutOfMemoryErrorProblem::class, ModOutOfMemoryErrorProblem::class);
        $this->addPossibleInsightClass(QuiltVersionInformation::class);
        $this->overridePossibleInsightClass(VanillaVersionInformation::class, QuiltVanillaVersionInformation::class);
        $this->addPossibleInsightClass(QuiltJavaVersionInformation::class);
    }
}