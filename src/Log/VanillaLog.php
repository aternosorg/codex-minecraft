<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Minecraft\Analyser\VanillaAnalyser;

/**
 * Class VanillaLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class VanillaLog extends ServerLog
{
    /**
     * @var string
     */
    protected static $pattern = '/^(\[(?:[0-9]{2}\:?){3}\] \[[^\/]+\/(\w+)\](?: \[[^\]]+\])?\:).*$/';

    /**
     * @return VanillaAnalyser
     */
    public static function getDefaultAnalyser()
    {
        return new VanillaAnalyser();
    }
}