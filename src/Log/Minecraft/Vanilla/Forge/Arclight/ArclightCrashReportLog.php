<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Arclight;

use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportTrait;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

class ArclightCrashReportLog extends ArclightLog implements CrashReportLogTypeInterface
{
    use VanillaCrashReportTrait;

    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [
            (new MultiPatternDetector())
                ->addPattern("/^---- Minecraft Crash Report ----$/m")
                ->addPattern("/^\t(?:Known )?server brands?: arclight/im"),
            (new MultiPatternDetector())
                ->addPattern("/^---- Minecraft Crash Report ----$/m")
                ->addPattern("/^\tIs Modded: Definitely; Client brand changed to 'arclight'$/im"),
            (new MultiPatternDetector())
                ->addPattern("/^---- Minecraft Crash Report ----$/m")
                ->addPattern("/^\tIs Modded: Definitely; Server brand changed to 'arclight'$/im"),
        ];
    }
}