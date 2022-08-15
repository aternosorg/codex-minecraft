<?php

namespace Aternos\Codex\Minecraft\Log\CrashReport;

use Aternos\Codex\Detective\SinglePatternDetector;

class PaperCrashReportLog extends MinecraftCrashReportLog
{
    public function getSoftware(): string
    {
        return "Paper";
    }

    public static function getDetectors(): array
    {
        return [(new SinglePatternDetector())->setPattern("/^---- Minecraft Crash Report ----(\n.*)*\n\s+Running: Paper version git-Paper/")];
    }
}