<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Forge;

use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;

class ForgeVanillaVersionInformation extends VanillaVersionInformation
{
    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return array_merge(parent::getPatterns(), [
            "/Received command line version data {0,2}: MC Version: '(" . static::$vanillaVersionPattern . ")'/",
            "/--fml\.mcVersion, (" . static::$vanillaVersionPattern . ")/",
            "/Forge Mod Loader version " . ForgeVersionInformation::getVersionPattern() . " for Minecraft (" . static::$vanillaVersionPattern . ") loading/",
            "/Forge mod loading, version " . ForgeVersionInformation::getVersionPattern() . ", for MC (" . static::$vanillaVersionPattern . ")/",
        ]);
    }
}