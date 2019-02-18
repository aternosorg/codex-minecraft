<?php

namespace Aternos\Codex\Minecraft\Log;

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
    protected static $logIdentifier = "Paper version git\-Paper";

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