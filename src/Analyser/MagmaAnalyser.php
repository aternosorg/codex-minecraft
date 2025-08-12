<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\Magma\MagmaVersionInformation;

class MagmaAnalyser extends ForgeBukkitHybridAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(MagmaVersionInformation::class);
    }
}