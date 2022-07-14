<?php

namespace Aternos\Codex\Minecraft\Log\CrashReport;

use Aternos\Codex\Detective\SinglePatternDetector;

class ForgeCrashReportLog extends MinecraftCrashReportLog
{

    public function getSoftware(): string
    {
        return "Forge";
    }

    public static function getDetectors()
    {
        return [(new SinglePatternDetector())->setPattern("/^---- Minecraft Crash Report ----(\n.*)*\n\tFML:/")];
    }
}