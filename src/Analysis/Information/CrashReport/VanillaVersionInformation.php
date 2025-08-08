<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\CrashReport;

class VanillaVersionInformation extends \Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation
{
    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/^\s*Minecraft Version: (' . static::$vanillaVersionPattern . ')$/'];
    }
}