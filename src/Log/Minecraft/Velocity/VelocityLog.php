<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Velocity;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\VelocityAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\MinecraftLog;

/**
 * Class VelocityLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Velocity
 */
abstract class VelocityLog extends MinecraftLog
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
    public function getName(): string
    {
        return "Velocity";
    }

}