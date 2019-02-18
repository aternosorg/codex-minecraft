<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Problem\Forge\FmlConfirmProblem;

/**
 * Class ForgeAnalyser
 *
 * @package Aternos\Codex\Minecraft\Analyser
 */
class ForgeAnalyser extends VanillaAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(FmlConfirmProblem::class);
    }
}