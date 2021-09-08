<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Minecraft\Analyser\PaperAnalyser;

/**
 * Class PaperLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class PaperLog extends SpigotLog
{
    /**
     * @var string
     */
    protected static $logIdentifier = "(Paper|CraftBukkit) version git\-Paper";

    /**
     * @return PaperAnalyser
     */
    public static function getDefaultAnalyser()
    {
        return new PaperAnalyser();
    }

    /**
     * Get the name of the used server software
     *
     * @return string
     */
    public function getServerSoftware(): string
    {
        return "Paper";
    }
}