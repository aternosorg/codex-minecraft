<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bedrock;

use Aternos\Codex\Minecraft\Analysis\Solution\Bedrock\DisableAllowlistSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bedrock\EnableAuthenticationSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class BedrockAuthenticationAllowlistProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bedrock
 */
class BedrockAuthenticationAllowlistProblem extends BedrockProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("bedrock-authentication-allowlist-problem");
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/ ERROR\] Using an allowlist but without online authentication can be dangerous and is not allowed\./'];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param mixed $patternKey
     * @return void
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution(new EnableAuthenticationSolution());
        $this->addSolution(new DisableAllowlistSolution());
    }
}