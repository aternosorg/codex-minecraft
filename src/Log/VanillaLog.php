<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Minecraft\Analyser\VanillaAnalyser;

/**
 * Class VanillaLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class VanillaLog extends MinecraftServerLog
{
    protected static string $pattern = '/^(\[(?:[0-9]{2}\:?){3}\] \[[^\/]+\/(\w+)\]\:).*$/';
    protected static string $prefixPattern = '(\[(?:[0-9]{2}\:?){3}\] \[[^\/]+\/(\w+)\]\:) ';

    /**
     * @return VanillaAnalyser
     */
    public static function getDefaultAnalyser(): VanillaAnalyser
    {
        return new VanillaAnalyser();
    }

    /**
     * Get the name of the used server software
     *
     * @return string
     */
    public function getServerSoftware(): string
    {
        return "Vanilla";
    }

    public static function getPrefixPattern(): string
    {
        return static::$prefixPattern;
    }
}