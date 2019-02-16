<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\AmbiguousPluginNameProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginDependencyProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginEnablingProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginLoadProblem;

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
    }
}