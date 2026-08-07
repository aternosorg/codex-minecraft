<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\NeoForge\NeoForgeJavaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\NeoForge\NeoForgeVanillaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\NeoForge\NeoForgeVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\InvalidDistDedicatedServerProblem;

class NeoForgeAnalyser extends VanillaAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(NeoForgeVersionInformation::class);
        $this->overridePossibleInsightClass(VanillaVersionInformation::class, NeoForgeVanillaVersionInformation::class);
        $this->addPossibleInsightClass(NeoForgeJavaVersionInformation::class);
        $this->addPossibleInsightClass(InvalidDistDedicatedServerProblem::class);
    }
}