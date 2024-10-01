<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Quilt;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Minecraft\Analyser\Report\CrashReport\MinecraftCrashReportAnalyser;
use Aternos\Codex\Minecraft\Analyser\Report\CrashReport\QuiltCrashReportAnalyser;
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
            (new MultiPatternDetector())
                ->addPattern("/^---- Minecraft Crash Report ----$/m")
                ->addPattern("/^\t(?:Known )?server brands?: quilt/im"),
            (new MultiPatternDetector())
                ->addPattern("/^---- Minecraft Crash Report ----$/m")
                ->addPattern("/^\tIs Modded: Definitely; Client brand changed to 'quilt'$/im"),
            (new MultiPatternDetector())
                ->addPattern("/^---- Minecraft Crash Report ----$/m")
                ->addPattern("/^\tIs Modded: Definitely; Server brand changed to 'quilt'$/im"),
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