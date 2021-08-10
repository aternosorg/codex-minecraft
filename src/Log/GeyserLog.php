<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\GeyserAnalyser;

/**
 * Class GeyserLog
 * @package Aternos\Codex\Minecraft\Log
 */
class GeyserLog extends MinecraftProxyLog
{
    /**
     * @var string
     */
    protected static $pattern = '/^(\[(?:[0-9]{2}\:?){3}\.[0-9]{3} [^\/]+\/(\w+)\]).*$/';

    /**
     * @var string
     */
    protected static $prefixPattern = '(\[(?:[0-9]{2}\:?){3}\.[0-9]{3} [^\/]+\/(\w+)\]) ';

    /**
     * @return GeyserAnalyser
     */
    public static function getDefaultAnalyser()
    {
        return new GeyserAnalyser();
    }

    /**
     * @return array
     */
    public static function getDetectors()
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