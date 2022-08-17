<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\CrashReport;

class VanillaVersionInformation extends \Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation
{
    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return ['/^\s*Minecraft Version: (' . static::$vanillaVersionPattern . ')$/'];
    }
}