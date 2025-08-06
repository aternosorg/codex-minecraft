<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Paper;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Minecraft\Analyser\PaperAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Spigot\SpigotLog;

abstract class PaperLog extends SpigotLog
{
    protected static string $logIdentifier = "(?:Paper|CraftBukkit) version git\-Paper"
    . "|This server is running Paper version";

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