<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Minecraft\Analyser\BukkitAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaLog;

/**
 * Class BukkitLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Bukkit
 */
abstract class BukkitLog extends VanillaLog
{
    /**
     * @return AnalyserInterface
     */
    public static function getDefaultAnalyser(): AnalyserInterface
    {
        return new BukkitAnalyser();
    }
}