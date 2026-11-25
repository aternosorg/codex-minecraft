<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Minecraft\Analyser\BukkitAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaLog;

abstract class BukkitLog extends VanillaLog
{
    /**
     * Bukkit servers write the vanilla prefix to logs/latest.log, but a shorter one to the console,
     * and logs copied from the console are uploaded as well.
     *
     * Matches both prefixes:
     * [16:24:27] [Server thread/INFO]: Loading properties
     * [16:24:27 INFO]: Loading properties
     */
    protected static string $pattern = '/^(\[(?:[0-9]{2}:?){3}(?:\] \[[^\/]+\/| )(\w+)\]:).*$/';

    /**
     * Same prefixes as $pattern, including the space after the colon:
     * "[16:24:27] [Server thread/INFO]: " and "[16:24:27 INFO]: "
     */
    protected static string $prefixPattern = '\[(?:[0-9]{2}:?){3}(?:\] \[[^\/]+\/| )\w+\]: ';

    /**
     * @return AnalyserInterface
     */
    public static function getDefaultAnalyser(): AnalyserInterface
    {
        return new BukkitAnalyser();
    }
}