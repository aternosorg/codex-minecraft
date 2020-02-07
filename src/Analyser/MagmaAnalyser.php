<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\Magma\MagmaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\AmbiguousPluginNameProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\ChunkLoadExceptionProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin\AuthMeShutdownProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin\MultiverseLoadProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin\PermissionsExConfigProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginCommandExceptionProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginDependencyProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginDisablingProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginEnablingProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginLoadProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginRuntimeProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\WorldDuplicateProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\FmlConfirmProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDuplicateProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModExceptionProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModFatalProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModWrongMinecraftVersionProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\PTRLibDependencyProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\WorldMissingModProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Forge\WorldModVersionProblem;

/**
 * Class MagmaAnalyser
 *
 * @package Aternos\Codex\Minecraft\Analyser
 */
class MagmaAnalyser extends VanillaAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(ForgeVersionInformation::class);
        $this->addPossibleInsightClass(MagmaVersionInformation::class);

        $this->addPossibleInsightClass(FmlConfirmProblem::class);
        $this->addPossibleInsightClass(WorldMissingModProblem::class);
        $this->addPossibleInsightClass(WorldModVersionProblem::class);
        $this->addPossibleInsightClass(ModDependencyProblem::class);
        $this->addPossibleInsightClass(ModDuplicateProblem::class);
        $this->addPossibleInsightClass(ModFatalProblem::class);
        $this->addPossibleInsightClass(ModExceptionProblem::class);
        $this->addPossibleInsightClass(ModWrongMinecraftVersionProblem::class);
        $this->addPossibleInsightClass(PTRLibDependencyProblem::class);

        $this->addPossibleInsightClass(PluginDependencyProblem::class);
        $this->addPossibleInsightClass(AmbiguousPluginNameProblem::class);
        $this->addPossibleInsightClass(PluginLoadProblem::class);
        $this->addPossibleInsightClass(PluginEnablingProblem::class);
        $this->addPossibleInsightClass(PluginRuntimeProblem::class);
        $this->addPossibleInsightClass(PluginDisablingProblem::class);
        $this->addPossibleInsightClass(PluginCommandExceptionProblem::class);
        $this->addPossibleInsightClass(ChunkLoadExceptionProblem::class);
        $this->addPossibleInsightClass(WorldDuplicateProblem::class);

        $this->addPossibleInsightClass(AuthMeShutdownProblem::class);
        $this->addPossibleInsightClass(PermissionsExConfigProblem::class);
        $this->addPossibleInsightClass(MultiverseLoadProblem::class);
    }
}