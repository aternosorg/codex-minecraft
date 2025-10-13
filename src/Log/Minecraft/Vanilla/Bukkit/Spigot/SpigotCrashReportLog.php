<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Spigot;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportTrait;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

class SpigotCrashReportLog extends SpigotLog implements CrashReportLogTypeInterface
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
                ->addPattern("/^\s+Known server brands: Spigot$/m"),
            (new MultiPatternDetector())
                ->addPattern("/^---- Minecraft Crash Report ----$/m")
                ->addPattern("/^\s+Is Modded: Definitely; Server brand changed to 'Spigot'$/m")
        ];
    }
}