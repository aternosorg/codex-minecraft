<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\VelocityAnalyser;

/**
 * Class VelocityLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class VelocityLog extends MinecraftProxyLog
{
    protected static string $pattern = '/^(\[(?:[0-9]{2}\:?){3}\] \[[^\/]+\/(\w+)\]\:).*$/';
    protected static string $prefixPattern = '(\[(?:[0-9]{2}\:?){3}\] \[[^\/]+\/(\w+)\]\:) ';

    /**
     * @return VelocityAnalyser
     */
    public static function getDefaultAnalyser(): VelocityAnalyser
    {
        return new VelocityAnalyser();
    }

    /**
     * @return array
     */
    public static function getDetectors(): array
    {
        return [
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . 'Booting up Velocity [0-9\.]+$/m')
        ];
    }

    /**
     * @return string
     */
    public function getServerSoftware(): string
    {
        return "Velocity";
    }

}