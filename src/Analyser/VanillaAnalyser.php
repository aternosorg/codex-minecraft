<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\OldPlayerDirectoryProblem;

/**
 * Class VanillaAnalyser
 *
 * @package Aternos\Codex\Minecraft\Analyser
 */
class VanillaAnalyser extends MinecraftAnalyser
{
    protected $possibleInsightClasses = [
        OldPlayerDirectoryProblem::class
    ];
}