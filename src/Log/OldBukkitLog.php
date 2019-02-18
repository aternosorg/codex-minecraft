<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\BukkitAnalyser;

/**
 * Class OldBukkitLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class OldBukkitLog extends OldVanillaLog
{
    /**
     * @return BukkitAnalyser
     */
    public static function getDefaultAnalyser()
    {
        return new BukkitAnalyser();
    }

    /**
     * @return array
     */
    public static function getDetectors()
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/' . static::$prefixPattern . 'This server is running CraftBukkit version/')
        ]);
    }
}