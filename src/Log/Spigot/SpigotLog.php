<?php

namespace Aternos\Codex\Minecraft\Log\Spigot;

use Aternos\Codex\Minecraft\Log\CraftBukkit\CraftBukkitLog;

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
