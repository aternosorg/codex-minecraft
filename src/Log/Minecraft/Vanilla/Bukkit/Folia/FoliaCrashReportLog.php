<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Folia;

use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportTrait;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

class FoliaCrashReportLog extends FoliaLog implements CrashReportLogTypeInterface
{
    use VanillaCrashReportTrait;

    /**
     * Matches a crash report at the start of the log together with one of the Folia lines
     * from its system details, e.g.
     *    Running: Folia version 1.21.4-212-bb1beda (MC: 1.21.4) (Implementing API version 1.21.4-R0.1-SNAPSHOT) false
     *    BrandInfo: Folia (papermc:folia) version 1.21.4-212-main@bb1beda (2025-03-17T10:10:58Z)
     *    Is Modded: Definitely; Server brand changed to 'Folia'
     *
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [
            (new MultiPatternDetector())
                ->addPattern(self::CRASH_REPORT_HEADER_PATTERN)
                ->addPattern("/^\s+Running: Folia version /m"),
            (new MultiPatternDetector())
                ->addPattern(self::CRASH_REPORT_HEADER_PATTERN)
                ->addPattern("/^\s+BrandInfo: Folia \(papermc:folia\) version/m"),
            (new MultiPatternDetector())
                ->addPattern(self::CRASH_REPORT_HEADER_PATTERN)
                ->addPattern("/^\s+Is Modded: Definitely; Server brand changed to 'Folia'$/m")
        ];
    }
}