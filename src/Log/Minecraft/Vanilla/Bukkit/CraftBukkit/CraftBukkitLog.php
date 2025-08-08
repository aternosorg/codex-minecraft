<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\CraftBukkit;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\BukkitLog;

/**
 * Class CraftBukkitServerLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Bukkit\CraftBukkit
 */
abstract class CraftBukkitLog extends BukkitLog
{
    protected static string $logIdentifier = "CraftBukkit version git\-Bukkit";

    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/' . static::$prefixPattern . 'This server is running ' . static::$logIdentifier . '/')
        ]);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "CraftBukkit";
    }
}