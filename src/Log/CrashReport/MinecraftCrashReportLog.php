<?php

namespace Aternos\Codex\Minecraft\Log\CrashReport;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Log\DetectableLogInterface;
use Aternos\Codex\Minecraft\Analyser\CrashReport\MinecraftCrashReportAnalyser;
use Aternos\Codex\Minecraft\Log\MinecraftLog;
use Aternos\Codex\Minecraft\Parser\CrashReportParser;

/**
 * Class MinecraftCrashReportLog
 *
 * @package Aternos\Codex\Minecraft\Log\CrashReport
 */
class MinecraftCrashReportLog extends MinecraftLog implements DetectableLogInterface
{
    protected static string $pattern = "/.*/";

    /**
     * @return MinecraftCrashReportAnalyser
     */
    public static function getDefaultAnalyser(): MinecraftCrashReportAnalyser
    {
        return new MinecraftCrashReportAnalyser();
    }

    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [(new SinglePatternDetector())->setPattern("/---- Minecraft Crash Report ----/")];
    }

    /**
     * @return CrashReportParser
     */
    public static function getDefaultParser(): CrashReportParser
    {
        return new CrashReportParser();
    }

    /**
     * @return string
     */
    public function getSoftware(): string
    {
        return "Minecraft";
    }
}