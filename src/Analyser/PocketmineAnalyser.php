<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine\PluginIncompatibleProblem;

/**
 * Class PocketmineAnalyser
 *
 * @package Aternos\Codex\Minecraft\Analyser
 */
class PocketmineAnalyser extends MinecraftAnalyser
{
    public function __construct()
    {
        $this->addPossibleInsightClass(PluginIncompatibleProblem::class);
    }
}