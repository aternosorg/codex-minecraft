<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
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
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [
            (new SinglePatternDetector())->setPattern("/---- Minecraft Crash Report ----(\n.*)*\n\tFML:/m"),
            (new SinglePatternDetector())->setPattern("/---- Minecraft Crash Report ----(\n.*)*\n\tIs Modded: Definitely; Client brand changed to '(?:fml,)?forge'/im"),
            (new SinglePatternDetector())->setPattern("/---- Minecraft Crash Report ----(\n.*)*\n\tIs Modded: Definitely; Server brand changed to '(?:fml,)?forge'/im"),

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