<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bedrock;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class EnableAuthenticationSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Bedrock
 */
class EnableAuthenticationSolution extends BedrockSolution
{
    /**
     * Get the solution as a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("enable-authentication-solution");
    }
}