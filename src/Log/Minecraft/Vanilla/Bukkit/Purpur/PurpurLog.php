<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Purpur;

use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Paper\PaperLog;

abstract class PurpurLog extends PaperLog
{
    /**
     * Matches the CraftBukkit name used by old versions as well as the Purpur name, e.g.
     * This server is running Purpur version git-Purpur-1857 (MC: 1.19.2)
     * This server is running Purpur version 1.20.6-2233-ver/1.20.6@0d6766e (2024-06-18T04:01:10Z)
     *
     * @inheritDoc
     */
    protected static array $logIdentifiers = [
        "CraftBukkit version git-Purpur",
        "Purpur version"
    ];

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Purpur";
    }
}