<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Spigot;

use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\CraftBukkit\CraftBukkitLog;

/**
 * Class SpigotLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Bukkit\Spigot
 */
abstract class SpigotLog extends CraftBukkitLog
{
    protected static string $logIdentifier = "CraftBukkit version (?:git|\d+)\-Spigot";

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Spigot";
    }
}