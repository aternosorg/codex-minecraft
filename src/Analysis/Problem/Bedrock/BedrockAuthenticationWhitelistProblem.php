<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bedrock;

use Aternos\Codex\Minecraft\Analysis\Solution\Bedrock\DisableWhitelistSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bedrock\EnableAuthenticationSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class BedrockAuthenticationWhitelistProblem extends BedrockProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("bedrock-authentication-whitelist-problem");
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/ ERROR\] Using a whitelist but without online authentication can be dangerous and is not allowed\./'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution(new EnableAuthenticationSolution());
        $this->addSolution(new DisableWhitelistSolution());
    }
}