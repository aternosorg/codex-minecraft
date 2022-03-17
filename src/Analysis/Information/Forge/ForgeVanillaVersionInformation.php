<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Forge;

use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;

/**
 * Class ForgeVanillaVersionInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Forge
 */
class ForgeVanillaVersionInformation extends VanillaVersionInformation
{
    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return array_merge(parent::getPatterns(), [
            "/Received command line version data {0,2}: MC Version: '(". static::$vanillaVersionPattern .")'/",
            "/--fml\.mcVersion, (". static::$vanillaVersionPattern .")/"
        ]);
    }
}