<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Folia;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Minecraft\Analyser\FoliaAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Paper\PaperLog;

/**
 * Class FoliaLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Bukkit\Folia
 */
abstract class FoliaLog extends PaperLog
{
    protected static string $logIdentifier = "(?:Folia|CraftBukkit) version git\-Folia"
    . "|This server is running Folia version";

    /**
     * @return AnalyserInterface
     */
    public static function getDefaultAnalyser(): AnalyserInterface
    {
        return new FoliaAnalyser();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Folia";
    }
}