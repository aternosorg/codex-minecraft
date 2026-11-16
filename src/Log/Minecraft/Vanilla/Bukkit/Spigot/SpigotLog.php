<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Spigot;

use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\CraftBukkit\CraftBukkitLog;

abstract class SpigotLog extends CraftBukkitLog
{
    /**
     * @inheritDoc
     */
    protected static array $logIdentifiers = ["(?:CraftBukkit|Spigot) version (?:git|\d+(?:-[a-zA-Z]+)?)-Spigot"];

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Spigot";
    }
}
