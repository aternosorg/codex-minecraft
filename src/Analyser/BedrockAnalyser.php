<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\Bedrock\BedrockVersionInformation;

/**
 * Class BedrockAnalyser
 *
 * @package Aternos\Codex\Minecraft\Analyser
 */
class BedrockAnalyser extends MinecraftAnalyser
{
    public function __construct()
    {
        $this->addPossibleInsightClass(BedrockVersionInformation::class);
    }
}