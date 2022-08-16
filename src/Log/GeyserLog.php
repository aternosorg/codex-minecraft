<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\GeyserAnalyser;

/**
 * Class GeyserLog
 * @package Aternos\Codex\Minecraft\Log
 */
class GeyserLog extends MinecraftProxyLog
{
    protected static string $pattern = '/^(\[(?:[0-9]{2}\:?){3}\.[0-9]{3} [^\/]+\/(\w+)\]).*$/';
    protected static string $prefixPattern = '(\[(?:[0-9]{2}\:?){3}\.[0-9]{3} [^\/]+\/(\w+)\]) ';

    /**
     * @return GeyserAnalyser
     */
    public static function getDefaultAnalyser(): GeyserAnalyser
    {
        return new GeyserAnalyser();
    }

    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . 'Loading Geyser version .*$/m')
        ]);
    }

    /**
     * @return string
     */
    public function getServerSoftware(): string
    {
        return "Geyser";
    }

}