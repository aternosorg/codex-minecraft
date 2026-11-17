<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Find the plugin that blocks the server in the thread dump of the "Server thread" that the watchdog logs.
 */
class WatchdogThreadDumpSolution extends BukkitSolution
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("watchdog-thread-dump-solution");
    }
}
