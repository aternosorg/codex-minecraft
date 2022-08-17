<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Quilt;

use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;

/**
 * Class QuiltVanillaVersionInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Quilt
 */
class QuiltVanillaVersionInformation extends VanillaVersionInformation
{
    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return array_merge(parent::getPatterns(), [
            "/Loading Minecraft (" . static::$vanillaVersionPattern . ")/",
            "/- minecraft (" . static::$vanillaVersionPattern . ")/"
        ]);
    }
}