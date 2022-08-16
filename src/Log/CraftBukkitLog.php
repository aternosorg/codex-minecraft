<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;

/**
 * Class CraftBukkitLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class CraftBukkitLog extends BukkitLog
{
    protected static string $logIdentifier = "CraftBukkit version git\-Bukkit";

    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
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