<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Log\Type\CrashReportLogTypeInterface;

class VanillaCrashReportLog extends VanillaReportLog implements CrashReportLogTypeInterface
{
    use VanillaCrashReportTrait;

    /**
     * Matches the header only at the start of a line:
     * ---- Minecraft Crash Report ----
     *
     * Crash reports are detected before client logs, so a header inside a log line must not count.
     * Forge 1.7.10 prints a system report with this header on every start
     * (`[STDOUT/]: [cpw.mods.fml.client.SplashProgress:start:188]: ---- Minecraft Crash Report ----`),
     * although the game did not crash.
     * A real Forge crash logged with a prefix is still detected by ForgeCrashReportLog.
     *
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [(new SinglePatternDetector())->setPattern("/^---- Minecraft Crash Report ----/m")];
    }
}