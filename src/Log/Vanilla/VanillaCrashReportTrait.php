<?php

namespace Aternos\Codex\Minecraft\Log\Vanilla;

use Aternos\Codex\Minecraft\Analyser\Report\CrashReport\MinecraftCrashReportAnalyser;

trait VanillaCrashReportTrait
{
    use VanillaReportTrait;

    /**
     * Matches the header of a crash report in the first line of the log, with or without a log prefix, e.g.
     * ---- Minecraft Crash Report ----
     * [14Jun2024 10:27:45.601] [Render thread/FATAL] [net.minecraftforge.common.ForgeMod/]:---- Minecraft Crash Report ----
     *
     * Servers and clients also print crash reports in the middle of their regular log.
     * Such a log is not a crash report, so a header after the first line is deliberately not matched.
     */
    protected const string CRASH_REPORT_HEADER_PATTERN = '/\A[^\n]*---- Minecraft Crash Report ----$/m';

    /**
     * @return MinecraftCrashReportAnalyser
     */
    public static function getDefaultAnalyser(): MinecraftCrashReportAnalyser
    {
        return new MinecraftCrashReportAnalyser();
    }
}