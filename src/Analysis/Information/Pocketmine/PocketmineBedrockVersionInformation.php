<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Pocketmine;

use Aternos\Codex\Minecraft\Analysis\Information\Bedrock\BedrockVersionInformationInterface;

/**
 * Class PocketmineBedrockVersionInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Pocketmine
 */
class PocketmineBedrockVersionInformation extends PocketmineInformation implements BedrockVersionInformationInterface
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
        return ['/Starting Minecraft: Bedrock Edition server version v([0-9\.]+)/'];
    }
}