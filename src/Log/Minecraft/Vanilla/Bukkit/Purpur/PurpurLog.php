<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Purpur;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Minecraft\Analyser\PaperAnalyser;
use Aternos\Codex\Minecraft\Analyser\PurpurAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Paper\PaperLog;

/**
 * Class PurpurServerLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Bukkit\Purpur
 */
abstract class PurpurLog extends PaperLog
{
    protected static string $logIdentifier = "(?:Purpur|CraftBukkit) version git\-Purpur";

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Purpur";
    }
}