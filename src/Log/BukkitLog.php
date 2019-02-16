<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Minecraft\Analyser\BukkitAnalyser;

/**
 * Class BukkitLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
abstract class BukkitLog extends VanillaLog
{
    /**
     * @return BukkitAnalyser
     */
    public static function getDefaultAnalyser()
    {
        return new BukkitAnalyser();
    }
}