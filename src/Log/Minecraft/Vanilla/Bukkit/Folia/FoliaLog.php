<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Folia;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Minecraft\Analyser\FoliaAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Paper\PaperLog;

abstract class FoliaLog extends PaperLog
{
    /**
     * Matches the CraftBukkit name used by old versions as well as the Folia name, e.g.
     * This server is running Folia version git-Folia-"d113346" (MC: 1.19.4)
     * This server is running Folia version 1.20.6-5-master@d797082 (2024-06-19T22:19:29Z)
     *
     * @inheritDoc
     */
    protected static array $logIdentifiers = [
        "CraftBukkit version git-Folia",
        "Folia version"
    ];

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