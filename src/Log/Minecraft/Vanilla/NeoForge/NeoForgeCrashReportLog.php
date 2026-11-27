<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\NeoForge;

use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Minecraft\Analyser\NeoForgeCrashReportAnalyser;
use Aternos\Codex\Minecraft\Analyser\VanillaCrashReportAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportTrait;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

class NeoForgeCrashReportLog extends NeoForgeLog implements CrashReportLogTypeInterface
{
    use VanillaCrashReportTrait;

    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [
            (new MultiPatternDetector())
                ->addPattern(self::CRASH_REPORT_HEADER_PATTERN)
                ->addPattern("/^\tNeoForge: net\.neoforged:/m"),
            (new MultiPatternDetector())
                ->addPattern(self::CRASH_REPORT_HEADER_PATTERN)
                ->addPattern("/^\t\t[^|]*\|[^|]*\|\s*neoforge\s*\|/m"),
        ];
    }


    /**
     * @return VanillaCrashReportAnalyser
     */
    public static function getDefaultAnalyser(): VanillaCrashReportAnalyser
    {
        return new NeoForgeCrashReportAnalyser();
    }

}