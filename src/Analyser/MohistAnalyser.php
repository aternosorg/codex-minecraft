<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\Mohist\MohistForgeVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\Mohist\MohistVersionInformation;

/**
 * Class MohistAnalyser
 *
 * @package Aternos\Codex\Minecraft\Analyser
 */
class MohistAnalyser extends ForgeBukkitHybridAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(MohistVersionInformation::class);
        $this->addPossibleInsightClass(MohistForgeVersionInformation::class);
    }
}