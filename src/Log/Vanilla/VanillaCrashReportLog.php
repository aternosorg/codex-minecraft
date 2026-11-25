<?php

namespace Aternos\Codex\Minecraft\Log\Vanilla;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

class VanillaCrashReportLog extends VanillaReportLog implements CrashReportLogTypeInterface
{
    use VanillaCrashReportTrait;

    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [(new SinglePatternDetector())->setPattern(self::CRASH_REPORT_HEADER_PATTERN)];
    }
}