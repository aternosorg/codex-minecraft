<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Folia;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportTrait;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

/**
 * Class FoliaCrashReportLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Folia
 */
class FoliaCrashReport extends FoliaLog implements CrashReportLogTypeInterface
{
    use VanillaCrashReportTrait;

    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [(new MultiPatternDetector())
            ->addPattern("/^---- Minecraft Crash Report ----$/")
            ->addPattern("/^\tRunning: Folia version git-Folia/m")
        ];
    }
}