<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Problem\Forge\FmlConfirmProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDuplicateProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModExceptionProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModFatalProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\WorldMissingModProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\WorldModVersionProblem;

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
        $this->addPossibleInsightClass(WorldMissingModProblem::class);
        $this->addPossibleInsightClass(WorldModVersionProblem::class);
        $this->addPossibleInsightClass(ModDependencyProblem::class);
        $this->addPossibleInsightClass(ModDuplicateProblem::class);
        $this->addPossibleInsightClass(ModFatalProblem::class);
        $this->addPossibleInsightClass(ModExceptionProblem::class);
    }
}