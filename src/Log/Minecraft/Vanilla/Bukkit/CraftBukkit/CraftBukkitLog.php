<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\CraftBukkit;

use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\BukkitLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\VersionLineDetectorTrait;

abstract class CraftBukkitLog extends BukkitLog
{
    use VersionLineDetectorTrait;

    /**
     * Patterns for the server version that follows "This server is running " in the startup line,
     * each one gets its own detector, e.g.
     * [18:14:48] [Server thread/INFO]: This server is running CraftBukkit version git-Bukkit-8b1588e (MC: 1.13.2)
     *
     * @var string[]
     */
    protected static array $logIdentifiers = ["CraftBukkit version git-Bukkit"];

    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [...parent::getDetectors(), ...static::getVersionLineDetectors()];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "CraftBukkit";
    }
}