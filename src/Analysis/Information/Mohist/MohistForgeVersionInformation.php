<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Mohist;

use Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVersionInformation;

class MohistForgeVersionInformation extends ForgeVersionInformation
{
    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return array
     */
    public static function getPatterns(): array
    {
        return ['/MinecraftForge v([0-9\.]+) `?Initialized/'];
    }
}