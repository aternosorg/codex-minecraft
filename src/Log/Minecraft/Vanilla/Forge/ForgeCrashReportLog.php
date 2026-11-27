<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge;

use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Minecraft\Analyser\ForgeCrashReportAnalyser;
use Aternos\Codex\Minecraft\Analyser\VanillaCrashReportAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportTrait;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

class ForgeCrashReportLog extends ForgeLog implements CrashReportLogTypeInterface
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
                ->addPattern("/^\s*Is Modded: Definitely; Client brand changed to '(?:fml,)?forge'/im"),
            (new MultiPatternDetector())
                ->addPattern(self::CRASH_REPORT_HEADER_PATTERN)
                ->addPattern("/^\s*Is Modded: Definitely; Server brand changed to '(?:fml,)?forge'/im"),
        ];
    }


    /**
     * @return VanillaCrashReportAnalyser
     */
    public static function getDefaultAnalyser(): VanillaCrashReportAnalyser
    {
        return new ForgeCrashReportAnalyser();
    }
}
