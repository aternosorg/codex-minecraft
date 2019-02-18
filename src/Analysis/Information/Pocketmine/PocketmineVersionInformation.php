<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Pocketmine;

/**
 * Class PocketmineVersionInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Pocketmine
 */
class PocketmineVersionInformation extends PocketmineInformation
{
    protected $label = "Pocketmine version";

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return array
     */
    public static function getPatterns(): array
    {
        return ['/This server is running PocketMine-MP version ([0-9\.]+)/'];
    }
}