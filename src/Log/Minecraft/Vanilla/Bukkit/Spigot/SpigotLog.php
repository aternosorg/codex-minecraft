<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Spigot;

use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\CraftBukkit\CraftBukkitLog;

abstract class SpigotLog extends CraftBukkitLog
{
    protected static string $logIdentifier = "CraftBukkit version (?:git|\d+(?:-[a-zA-Z]+)?)\-Spigot";

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Spigot";
    }
}