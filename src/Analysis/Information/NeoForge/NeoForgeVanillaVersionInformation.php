<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\NeoForge;

use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;

class NeoForgeVanillaVersionInformation extends VanillaVersionInformation
{
    public static function getPatterns(): array
    {
        return array_merge(parent::getPatterns(), [
            '/NeoForge mod loading, version ' . NeoForgeVersionInformation::getVersionPattern() . ', for MC (' . static::$vanillaVersionPattern . ')/',
            "/--fml\.mcVersion, (" . static::$vanillaVersionPattern . ")/"
        ]);
    }
}