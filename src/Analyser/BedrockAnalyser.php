<?php

namespace Aternos\Codex\Minecraft\Analyser;

use Aternos\Codex\Minecraft\Analysis\Information\Bedrock\BedrockVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Problem\Bedrock\BedrockAuthenticationAllowlistProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bedrock\BedrockAuthenticationWhitelistProblem;
use Aternos\Codex\Minecraft\Analysis\Problem\Bedrock\BedrockDBStorageChainProblem;

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
        $this->addPossibleInsightClass(BedrockAuthenticationWhitelistProblem::class);
        $this->addPossibleInsightClass(BedrockAuthenticationAllowlistProblem::class);
        $this->addPossibleInsightClass(BedrockDBStorageChainProblem::class);
    }
}