<?php

namespace Aternos\Codex\Minecraft\Log;

/**
 * Class OldSpigotLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class OldSpigotLog extends OldCraftBukkitLog
{
    /**
     * @var string
     */
    protected static $logIdentifier = "CraftBukkit version git\-Spigot";

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