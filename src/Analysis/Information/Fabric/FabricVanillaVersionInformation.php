<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Fabric;

use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;

/**
 * Class FabricVanillaVersionInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Forge
 */
class FabricVanillaVersionInformation extends VanillaVersionInformation
{
    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return array_merge(parent::getPatterns(), ["/Loading for game Minecraft ([0-9\.wa]+)/","/ minecraft@([0-9\.wa]+)/"]);
    }
}