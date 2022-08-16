<?php

namespace Aternos\Codex\Minecraft\Log\CrashReport;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;

/**
 * Class ForgeCrashReportLog
 *
 * @package Aternos\Codex\Minecraft\Log\CrashReport
 */
class ForgeCrashReportLog extends MinecraftCrashReportLog
{
    /**
     * @return string
     */
    public function getSoftware(): string
    {
        return "Forge";
    }

    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [(new SinglePatternDetector())->setPattern("/^---- Minecraft Crash Report ----(\n.*)*\n\tFML:/")];
    }
}