<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricJavaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Problem\Fabric\FabricModDependencyProblem;

/**
 * Class FabricAnalyser
 *
 * @package Aternos\Codex\Minecraft\Analyser
 */
class FabricAnalyser extends VanillaAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(FabricVersionInformation::class);
        $this->addPossibleInsightClass(FabricJavaVersionInformation::class);
        $this->addPossibleInsightClass(FabricModDependencyProblem::class);
    }
}
