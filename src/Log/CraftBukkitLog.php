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
     * @var string
     */
    protected static $logIdentifier = "CraftBukkit version git\-Bukkit";

    /**
     * @return array
     */
    public static function getDetectors()
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/' . static::$prefixPattern . 'This server is running ' . static::$logIdentifier . '/')
        ]);
    }

    /**
     * Get the name of the used server software
     *
     * @return string
     */
    public function getServerSoftware(): string
    {
        return "CraftBukkit";
    }
}