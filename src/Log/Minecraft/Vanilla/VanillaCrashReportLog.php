<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

class VanillaCrashReportLog extends VanillaReportLog implements CrashReportLogTypeInterface
{
    use VanillaCrashReportTrait;

    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [(new SinglePatternDetector())->setPattern("/---- Minecraft Crash Report ----/")];
    }
}