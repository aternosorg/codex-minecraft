<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

/**
 * Class VanillaCrashReportLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Vanilla
 */
class VanillaCrashReportLog extends VanillaReportLog implements CrashReportLogTypeInterface
{
    use VanillaCrashReportTrait;

    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [(new SinglePatternDetector())->setPattern("/---- Minecraft Crash Report ----/")];
    }
}