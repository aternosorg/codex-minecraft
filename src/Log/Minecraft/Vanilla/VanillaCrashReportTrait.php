<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla;

use Aternos\Codex\Minecraft\Analyser\CrashReport\MinecraftCrashReportAnalyser;
use Aternos\Codex\Minecraft\Parser\CrashReportParser;

trait VanillaCrashReportTrait
{
    /**
     * @return CrashReportParser
     */
    public static function getDefaultParser(): CrashReportParser
    {
        return new CrashReportParser();
    }

    /**
     * @return MinecraftCrashReportAnalyser
     */
    public static function getDefaultAnalyser(): MinecraftCrashReportAnalyser
    {
        return new MinecraftCrashReportAnalyser();
    }
}