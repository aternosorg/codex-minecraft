<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric;

use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Minecraft\Analyser\Report\CrashReport\FabricCrashReportAnalyser;
use Aternos\Codex\Minecraft\Analyser\Report\CrashReport\MinecraftCrashReportAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportTrait;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

class FabricCrashReportLog extends FabricLog implements CrashReportLogTypeInterface
{
    use VanillaCrashReportTrait;

    /**
     * The last detector catches a client log that ends in a crash report without its system details,
     * like a launcher console cut off after the stack trace. Then only the loader line names Fabric:
     * [02:24:31] [main/INFO]: Loading Minecraft 26.1.2 with Fabric Loader 0.19.3
     *
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [
            (new MultiPatternDetector())
                ->addPattern("/^---- Minecraft Crash Report ----$/m")
                ->addPattern("/^\t(?:Known )?server brands?: fabric$/im"),
            (new MultiPatternDetector())
                ->addPattern("/^---- Minecraft Crash Report ----$/m")
                ->addPattern("/^\tIs Modded: Definitely; Client brand changed to 'fabric'$/im"),
            (new MultiPatternDetector())
                ->addPattern("/^---- Minecraft Crash Report ----$/m")
                ->addPattern("/^\tIs Modded: Definitely; Server brand changed to 'fabric'$/im"),
            (new MultiPatternDetector())
                ->addPattern("/^---- Minecraft Crash Report ----$/m")
                ->addPattern('/' . static::getLoadingMinecraftPattern() . '/m'),
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