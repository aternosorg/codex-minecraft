<?php

namespace Aternos\Codex\Minecraft\Analyser;

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

/**
 * Class BukkitAnalyser
 *
 * @package Aternos\Codex\Minecraft\Analyser
 */
class BukkitAnalyser extends VanillaAnalyser
{
    public function __construct()
    {
        parent::__construct();
        $this->addPossibleInsightClass(PluginDependencyProblem::class);
        $this->addPossibleInsightClass(AmbiguousPluginNameProblem::class);
        $this->addPossibleInsightClass(PluginLoadProblem::class);
        $this->addPossibleInsightClass(PluginEnablingProblem::class);
        $this->addPossibleInsightClass(PluginRuntimeProblem::class);
        $this->addPossibleInsightClass(PluginDisablingProblem::class);
        $this->addPossibleInsightClass(PluginCommandExceptionProblem::class);
        $this->addPossibleInsightClass(ChunkLoadExceptionProblem::class);

        $this->addPossibleInsightClass(AuthMeShutdownProblem::class);
        $this->addPossibleInsightClass(PermissionsExConfigProblem::class);
        $this->addPossibleInsightClass(MultiverseLoadProblem::class);
    }
}