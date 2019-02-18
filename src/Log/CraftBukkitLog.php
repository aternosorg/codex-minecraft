<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\SinglePatternDetector;

/**
 * Class CraftBukkitLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class CraftBukkitLog extends BukkitLog
{
    /**
     * @return array
     */
    public static function getDetectors()
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/'. static::$prefixPattern .'This server is running CraftBukkit version git\-Bukkit/')
        ]);
    }
}