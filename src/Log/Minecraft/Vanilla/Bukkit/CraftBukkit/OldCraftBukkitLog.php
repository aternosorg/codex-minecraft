<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\CraftBukkit;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\BukkitAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\OldVanillaLog;

/**
 * Class OldCraftBukkitLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Bukkit\CraftBukkit
 */
abstract class OldCraftBukkitLog extends OldVanillaLog
{
    protected static string $logIdentifier = "CraftBukkit version git\-Bukkit";

    /**
     * @return BukkitAnalyser
     */
    public static function getDefaultAnalyser(): BukkitAnalyser
    {
        return new BukkitAnalyser();
    }

    /**
     * @return array
     */
    public static function getDetectors(): array
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/' . static::$prefixPattern . 'This server is running ' . static::$logIdentifier . '/')
        ]);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "CraftBukkit";
    }
}