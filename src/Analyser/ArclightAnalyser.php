<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\Arclight\ArclightVersionInformation;

/**
 * Class ArclightAnalyser
 *
 * @package Aternos\Codex\Minecraft\Analyser
 */
class ArclightAnalyser extends ForgeBukkitHybridAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(ArclightVersionInformation::class);
    }
}