<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\Pocketmine\PocketmineBedrockVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Information\Pocketmine\PocketmineVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine\PluginDependencyProblem;
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
        $this->addPossibleInsightClass(PocketmineBedrockVersionInformation::class);
        $this->addPossibleInsightClass(PocketmineVersionInformation::class);

        $this->addPossibleInsightClass(PluginIncompatibleProblem::class);
        $this->addPossibleInsightClass(PluginDependencyProblem::class);
    }
}