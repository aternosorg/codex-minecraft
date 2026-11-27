<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Forge;

class ForgeCrashReportVersionInformation extends ForgeVersionInformation
{
    public static function getPatterns(): array
    {
        return [
            '/FML: MCP (?:' . static::$versionPattern . ') Powered by Forge (' . static::$versionPattern . ')/',
            '/Forge: net\.minecraftforge:(' . static::$versionPattern . ')/',
        ];
    }
}