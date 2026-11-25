<?php

namespace Aternos\Codex\Minecraft\Log\Spigot;

use Aternos\Codex\Minecraft\Log\CraftBukkit\OldCraftBukkitLog;

abstract class OldSpigotLog extends OldCraftBukkitLog
{
    /**
     * @inheritDoc
     */
    protected static array $logIdentifiers = ["CraftBukkit version git-Spigot"];

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Spigot";
    }
}