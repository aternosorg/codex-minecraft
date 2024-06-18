<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\Report\CrashReport\FabricCrashReportAnalyser;
use Aternos\Codex\Minecraft\Analyser\Report\CrashReport\MinecraftCrashReportAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportTrait;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

/**
 * Class FabricCrashReportLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric
 */
class FabricCrashReportLog extends FabricLog implements CrashReportLogTypeInterface
{
    use VanillaCrashReportTrait;

    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [
            (new SinglePatternDetector())->setPattern("/---- Minecraft Crash Report ----(\n.*)*\n\t(?:Known )?server brands?: fabric/im"),
            (new SinglePatternDetector())->setPattern("/---- Minecraft Crash Report ----(\n.*)*\n\tIs Modded: Definitely; Client brand changed to 'fabric'/im"),
            (new SinglePatternDetector())->setPattern("/---- Minecraft Crash Report ----(\n.*)*\n\tIs Modded: Definitely; Server brand changed to 'fabric'/im"),
        ];
    }

    /**
     * @return MinecraftCrashReportAnalyser
     */
    public static function getDefaultAnalyser(): MinecraftCrashReportAnalyser
    {
        return new FabricCrashReportAnalyser();
    }
}