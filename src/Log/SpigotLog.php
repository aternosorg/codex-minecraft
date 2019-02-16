<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\SinglePatternDetector;

/**
 * Class SpigotLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class SpigotLog extends BukkitLog
{
    /**
     * @return array
     */
    public static function getDetectors()
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/This server is running CraftBukkit version git\-Spigot/')
        ]);
    }
}