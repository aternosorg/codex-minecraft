<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Bedrock;

/**
 * Class BedrockVersionInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Bedrock
 */
class BedrockVersionInformation extends BedrockInformation
{
    protected $label = "Bedrock version";

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return array
     */
    public static function getPatterns(): array
    {
        return ['/Version ([0-9\.]+)/'];
    }
}