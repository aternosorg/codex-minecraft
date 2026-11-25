<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Purpur;

use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportTrait;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

class PurpurCrashReportLog extends PurpurLog implements CrashReportLogTypeInterface
{
    use VanillaCrashReportTrait;

    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [(new MultiPatternDetector())
            ->addPattern(self::CRASH_REPORT_HEADER_PATTERN)
            ->addPattern("/^\tRunning: Purpur version git-Purpur/m")
        ];
    }
}