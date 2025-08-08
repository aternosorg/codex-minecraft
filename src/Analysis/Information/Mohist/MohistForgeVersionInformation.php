<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Mohist;

use Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVersionInformation;

/**
 * Class MohistForgeVersionInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Forge
 */
class MohistForgeVersionInformation extends ForgeVersionInformation
{
    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/MinecraftForge v([0-9\.]+) `?Initialized/'];
    }
}