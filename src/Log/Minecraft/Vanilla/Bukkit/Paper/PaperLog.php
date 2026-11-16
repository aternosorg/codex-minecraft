<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Paper;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Minecraft\Analyser\PaperAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Spigot\SpigotLog;

abstract class PaperLog extends SpigotLog
{
    /**
     * PaperSpigot reported itself as CraftBukkit, later versions as Paper:
     * This server is running CraftBukkit version git-PaperSpigot-"4c7641d" (MC: 1.8.8)
     * This server is running Paper version git-Paper-794 (MC: 1.16.5)
     * This server is running Paper version 1.21.1-116-master@e7e1ab5 (2024-09-30T23:17:54Z)
     *
     * @inheritDoc
     */
    protected static array $logIdentifiers = [
        "CraftBukkit version git-Paper",
        "Paper version"
    ];

    /**
     * @return AnalyserInterface
     */
    public static function getDefaultAnalyser(): AnalyserInterface
    {
        return new PaperAnalyser();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Paper";
    }
}