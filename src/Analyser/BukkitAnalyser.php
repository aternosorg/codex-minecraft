<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Analysis\PatternInsightInterface;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\AmbiguousPluginNameProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\ChunkLoadExceptionProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin\AuthMeShutdownProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin\MultiverseLoadProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin\PermissionsExConfigProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginCommandExceptionProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginDependenciesProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginDependencyProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginDisablingProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginEnablingProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginLoadProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginRuntimeProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\UnsupportedApiVersionProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\UnsupportedClassVersionProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\WorldDuplicateProblem;

class BukkitAnalyser extends VanillaAnalyser
{
    /**
     * @return class-string<PatternInsightInterface>[]
     */
    public static function getInsightClasses(): array
    {
        return [
            PluginDependencyProblem::class,
            AmbiguousPluginNameProblem::class,
            PluginLoadProblem::class,
            PluginEnablingProblem::class,
            PluginRuntimeProblem::class,
            PluginDisablingProblem::class,
            PluginCommandExceptionProblem::class,
            ChunkLoadExceptionProblem::class,
            WorldDuplicateProblem::class,
            AuthMeShutdownProblem::class,
            PermissionsExConfigProblem::class,
            MultiverseLoadProblem::class,
            PluginDependenciesProblem::class,
            UnsupportedApiVersionProblem::class,
            UnsupportedClassVersionProblem::class,
        ];
    }

    public function __construct()
    {
        parent::__construct();

        foreach (static::getInsightClasses() as $insightClass) {
            $this->addPossibleInsightClass($insightClass);
        }
    }
}