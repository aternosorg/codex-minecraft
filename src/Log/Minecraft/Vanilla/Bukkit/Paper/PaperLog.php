<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Paper;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Minecraft\Analyser\PaperAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Spigot\SpigotLog;

/**
 * Class PaperLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Bukkit\Paper
 */
abstract class PaperLog extends SpigotLog
{
    protected static string $logIdentifier = "(?:Paper|CraftBukkit) version git\-Paper";

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