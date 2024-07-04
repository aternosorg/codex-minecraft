<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bedrock;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class DisableWhitelistSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Bedrock
 */
class DisableWhitelistSolution extends BedrockSolution
{
    /**
     * Get the solution as a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("disable-whitelist-solution");
    }
}