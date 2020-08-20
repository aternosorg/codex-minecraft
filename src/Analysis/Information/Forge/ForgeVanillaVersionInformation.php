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
        return array_merge(parent::getPatterns(), ["/Received command line version data : MC Version: '([0-9\.wa]+)'/"]);
    }
}