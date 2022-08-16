<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Spigot;

use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\CraftBukkit\OldCraftBukkitLog;

/**
 * Class OldSpigotLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Bukkit\Spigot
 */
abstract class OldSpigotLog extends OldCraftBukkitLog
{
    protected static string $logIdentifier = "CraftBukkit version git\-Spigot";

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Spigot";
    }
}