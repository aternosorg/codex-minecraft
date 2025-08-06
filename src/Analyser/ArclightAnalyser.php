<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\Arclight\ArclightVersionInformation;

class ArclightAnalyser extends ForgeBukkitHybridAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(ArclightVersionInformation::class);
    }
}