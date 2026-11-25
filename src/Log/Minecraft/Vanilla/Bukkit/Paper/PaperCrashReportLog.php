<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Paper;

use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Minecraft\Analyser\Report\CrashReport\MinecraftCrashReportAnalyser;
use Aternos\Codex\Minecraft\Analyser\Report\CrashReport\PaperCrashReportAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportTrait;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

class PaperCrashReportLog extends PaperLog implements CrashReportLogTypeInterface
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
                ->addPattern("/^\s+Running: Paper version git-Paper/m"),
            (new MultiPatternDetector())
                ->addPattern(self::CRASH_REPORT_HEADER_PATTERN)
                ->addPattern("/^\s+BrandInfo: Paper \(papermc:paper\) version/m"),
            (new MultiPatternDetector())
                ->addPattern(self::CRASH_REPORT_HEADER_PATTERN)
                ->addPattern("/^\s+Is Modded: Definitely; Server brand changed to 'Paper'$/m")
        ];
    }

    /**
     * @return MinecraftCrashReportAnalyser
     */
    public static function getDefaultAnalyser(): MinecraftCrashReportAnalyser
    {
        return new PaperCrashReportAnalyser();
    }
}