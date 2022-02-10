<?php

namespace Aternos\Codex\Minecraft\Log\CrashReport;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Log\DetectableLogInterface;
use Aternos\Codex\Minecraft\Analyser\CrashReport\MinecraftCrashReportAnalyser;
use Aternos\Codex\Minecraft\Log\MinecraftLog;
use Aternos\Codex\Minecraft\Parser\CrashReportParser;

class MinecraftCrashReportLog extends MinecraftLog implements DetectableLogInterface
{
    protected static $pattern = "/.*/";

    public static function getDefaultAnalyser()
    {
        return new MinecraftCrashReportAnalyser();
    }

    public static function getDetectors()
    {
        return [(new SinglePatternDetector())->setPattern("/---- Minecraft Crash Report ----/")];
    }

    public static function getDefaultParser()
    {
        return (new CrashReportParser());
    }
}