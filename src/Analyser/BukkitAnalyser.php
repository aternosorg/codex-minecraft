<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\AmbiguousPluginNameProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginDependencyProblem;

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
    }
}