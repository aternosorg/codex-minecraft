<?php

namespace Aternos\Codex\Minecraft\Log\Mohist;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Log\Vanilla\VanillaCrashReportTrait;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

class MohistCrashReportLog extends MohistLog implements CrashReportLogTypeInterface
{
    use VanillaCrashReportTrait;

    /**
     * Matches the header of a Mohist crash report in the first line of the log, e.g.
     * ---- Mohist Crash Report ----
     *
     * See VanillaCrashReportTrait::CRASH_REPORT_HEADER_PATTERN for why only the first line is matched.
     */
    protected const string MOHIST_CRASH_REPORT_HEADER_PATTERN = '/\A[^\n]*---- Mohist Crash Report ----$/m';

    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [(new SinglePatternDetector())->setPattern(self::MOHIST_CRASH_REPORT_HEADER_PATTERN)];
    }
}