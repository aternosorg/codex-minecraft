<?php

namespace Aternos\Codex\Minecraft\Log;

/**
 * Class SpigotLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class SpigotLog extends CraftBukkitLog
{
    protected static string $logIdentifier = "CraftBukkit version (?:git|\d+)\-Spigot";

    /**
     * Get the name of the used server software
     *
     * @return string
     */
    public function getServerSoftware(): string
    {
        return "Spigot";
    }
}