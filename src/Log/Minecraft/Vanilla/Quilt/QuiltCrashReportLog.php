<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Quilt;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\CrashReport\MinecraftCrashReportAnalyser;
use Aternos\Codex\Minecraft\Analyser\CrashReport\QuiltCrashReportAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Quilt\QuiltLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportTrait;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

class QuiltCrashReportLog extends QuiltLog implements CrashReportLogTypeInterface
{
    use VanillaCrashReportTrait;

    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [
            (new SinglePatternDetector())->setPattern("/---- Minecraft Crash Report ----(\n.*)*\n\t(?:Known )?server brands?: quilt/im"),
            (new SinglePatternDetector())->setPattern("/---- Minecraft Crash Report ----(\n.*)*\n\tIs Modded: Definitely; Client brand changed to 'quilt'/im"),
        ];
    }

    /**
     * @return MinecraftCrashReportAnalyser
     */
    public static function getDefaultAnalyser(): MinecraftCrashReportAnalyser
    {
        return new QuiltCrashReportAnalyser();
    }
}