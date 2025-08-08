<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge;

use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Minecraft\Analyser\Report\CrashReport\ForgeCrashReportAnalyser;
use Aternos\Codex\Minecraft\Analyser\Report\CrashReport\MinecraftCrashReportAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportTrait;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

/**
 * Class ForgeCrashReportLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge
 */
class ForgeCrashReportLog extends ForgeLog implements CrashReportLogTypeInterface
{
    use VanillaCrashReportTrait;

    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [
            (new MultiPatternDetector())
                ->addPattern("/---- Minecraft Crash Report ----$/m")
                ->addPattern("/^\tIs Modded: Definitely; Client brand changed to '(?:fml,)?forge'/im"),
            (new MultiPatternDetector())
                ->addPattern("/---- Minecraft Crash Report ----$/m")
                ->addPattern("/^\tIs Modded: Definitely; Server brand changed to '(?:fml,)?forge'/im"),
        ];
    }


    /**
     * @return MinecraftCrashReportAnalyser
     */
    public static function getDefaultAnalyser(): MinecraftCrashReportAnalyser
    {
        return new ForgeCrashReportAnalyser();
    }
}