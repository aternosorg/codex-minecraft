<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\CraftBukkit;

use Aternos\Codex\Minecraft\Analyser\BukkitAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\VersionLineDetectorTrait;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\OldVanillaLog;

abstract class OldCraftBukkitLog extends OldVanillaLog
{
    use VersionLineDetectorTrait;

    /**
     * Patterns for the server version that follows "This server is running " in the startup line,
     * each one gets its own detector, e.g.
     * 2019-02-08 23:33:20 [INFO] This server is running CraftBukkit version git-Bukkit-1.1-R6-b1988jnks (MC: 1.1)
     *
     * @var string[]
     */
    protected static array $logIdentifiers = ["CraftBukkit version git-Bukkit"];

    /**
     * @return BukkitAnalyser
     */
    public static function getDefaultAnalyser(): BukkitAnalyser
    {
        return new BukkitAnalyser();
    }

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