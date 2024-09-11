<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Paper;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportTrait;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

/**
 * Class PaperCrashReportLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Paper
 */
class PaperCrashReportLog extends PaperLog implements CrashReportLogTypeInterface
{
    use VanillaCrashReportTrait;

    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [(new MultiPatternDetector())
            ->addPattern("/^---- Minecraft Crash Report ----$/m")
            ->addPattern("/^\s+Running: Paper version git-Paper/m")
        ];
    }
}