<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Quilt;

use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Minecraft\Analyser\QuiltCrashReportAnalyser;
use Aternos\Codex\Minecraft\Analyser\VanillaCrashReportAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportTrait;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

class QuiltCrashReportLog extends QuiltLog implements CrashReportLogTypeInterface
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
                ->addPattern("/^\t(?:Known )?server brands?: quilt/im"),
            (new MultiPatternDetector())
                ->addPattern(self::CRASH_REPORT_HEADER_PATTERN)
                ->addPattern("/^\tIs Modded: Definitely; Client brand changed to 'quilt'$/im"),
            (new MultiPatternDetector())
                ->addPattern(self::CRASH_REPORT_HEADER_PATTERN)
                ->addPattern("/^\tIs Modded: Definitely; Server brand changed to 'quilt'$/im"),
        ];
    }

    /**
     * @return VanillaCrashReportAnalyser
     */
    public static function getDefaultAnalyser(): VanillaCrashReportAnalyser
    {
        return new QuiltCrashReportAnalyser();
    }
}