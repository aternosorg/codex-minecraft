<?php

namespace Aternos\Codex\Minecraft\Log\CrashReport;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;

/**
 * Class PaperCrashReportLog
 *
 * @package Aternos\Codex\Minecraft\Log\CrashReport
 */
class PaperCrashReportLog extends MinecraftCrashReportLog
{
    /**
     * @return string
     */
    public function getSoftware(): string
    {
        return "Paper";
    }

    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [(new SinglePatternDetector())->setPattern("/^---- Minecraft Crash Report ----(\n.*)*\n\s+Running: Paper version git-Paper/")];
    }
}