<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Arclight;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportTrait;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

/**
 * Class MohistCrashReportLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Mohist
 */
class ArclightCrashReportLog extends ArclightLog implements CrashReportLogTypeInterface
{
    use VanillaCrashReportTrait;

    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [(new SinglePatternDetector())->setPattern("/^---- Minecraft Crash Report ----(\n.*)*\n\tKnown server brands:( [a-zA-Z])* arclight/")];
    }
}