<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricJavaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricVanillaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricVersionInformation;

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
        $this->addPossibleInsightClass(FabricVanillaVersionInformation::class);
        $this->addPossibleInsightClass(FabricJavaVersionInformation::class);
    }
}