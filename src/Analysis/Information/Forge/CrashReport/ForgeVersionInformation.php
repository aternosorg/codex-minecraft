<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Forge\CrashReport;

class ForgeVersionInformation extends \Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVersionInformation
{
    public static function getPatterns(): array
    {
        return [
            '/FML: MCP (?:' . static::$versionPattern . ') Powered by Forge (' . static::$versionPattern . ')/',
            '/Forge: net.minecraftforge:(' . static::$versionPattern . ')/',
        ];
    }
}