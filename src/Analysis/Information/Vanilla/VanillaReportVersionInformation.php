<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Vanilla;

class VanillaReportVersionInformation extends VanillaVersionInformation
{
    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/^\s*Minecraft Version: (' . static::$vanillaVersionPattern . ')$/'];
    }
}