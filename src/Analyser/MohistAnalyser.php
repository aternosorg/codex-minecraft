<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\Mohist\MohistForgeVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\Mohist\MohistVersionInformation;

class MohistAnalyser extends ForgeBukkitHybridAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(MohistVersionInformation::class);
        $this->overridePossibleInsightClass(ForgeVersionInformation::class, MohistForgeVersionInformation::class);
    }
}