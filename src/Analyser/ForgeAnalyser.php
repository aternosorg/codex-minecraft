<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeJavaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVanillaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\FmlConfirmProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\LanguageProviderVersionProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDuplicateProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModExceptionProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModFatalProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModWrongMinecraftVersionProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\MultipleModulesExportProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\PTRLibDependencyProblem;
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
        $this->addPossibleInsightClass(ForgeVersionInformation::class);
        $this->overridePossibleInsightClass(VanillaVersionInformation::class, ForgeVanillaVersionInformation::class);
        $this->addPossibleInsightClass(ForgeJavaVersionInformation::class);

        $this->addPossibleInsightClass(FmlConfirmProblem::class);
        $this->addPossibleInsightClass(WorldMissingModProblem::class);
        $this->addPossibleInsightClass(WorldModVersionProblem::class);
        $this->addPossibleInsightClass(ModDependencyProblem::class);
        $this->addPossibleInsightClass(ModDuplicateProblem::class);
        $this->addPossibleInsightClass(ModFatalProblem::class);
        $this->addPossibleInsightClass(ModExceptionProblem::class);
        $this->addPossibleInsightClass(ModWrongMinecraftVersionProblem::class);
        $this->addPossibleInsightClass(PTRLibDependencyProblem::class);
        $this->addPossibleInsightClass(MultipleModulesExportProblem::class);
        $this->addPossibleInsightClass(LanguageProviderVersionProblem::class);
    }
}
