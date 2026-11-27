<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric;

use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Minecraft\Analyser\FabricCrashReportAnalyser;
use Aternos\Codex\Minecraft\Analyser\VanillaCrashReportAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportTrait;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

class FabricCrashReportLog extends FabricLog implements CrashReportLogTypeInterface
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
                ->addPattern("/^\t(?:Known )?server brands?: fabric$/im"),
            (new MultiPatternDetector())
                ->addPattern(self::CRASH_REPORT_HEADER_PATTERN)
                ->addPattern("/^\tIs Modded: Definitely; Client brand changed to 'fabric'$/im"),
            (new MultiPatternDetector())
                ->addPattern(self::CRASH_REPORT_HEADER_PATTERN)
                ->addPattern("/^\tIs Modded: Definitely; Server brand changed to 'fabric'$/im"),
        ];
    }

    /**
     * @return VanillaCrashReportAnalyser
     */
    public static function getDefaultAnalyser(): VanillaCrashReportAnalyser
    {
        return new FabricCrashReportAnalyser();
    }
}