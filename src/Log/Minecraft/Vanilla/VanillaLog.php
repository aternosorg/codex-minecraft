<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Minecraft\Analyser\VanillaAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\MinecraftLog;

/**
 * Class VanillaLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Vanilla
 */
abstract class VanillaLog extends MinecraftLog
{
    protected static string $pattern = '/^(\[(?:[0-9]{2}\:?){3}\] \[[^\/]+\/(\w+)\]\:).*$/';
    protected static string $prefixPattern = '(\[(?:[0-9]{2}\:?){3}\] \[[^\/]+\/(\w+)\]\:) ';

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Vanilla";
    }

    /**
     * @return AnalyserInterface
     */
    public static function getDefaultAnalyser(): AnalyserInterface
    {
        return new VanillaAnalyser();
    }

    public static function getPrefixPattern(): string
    {
        return static::$prefixPattern;
    }
}