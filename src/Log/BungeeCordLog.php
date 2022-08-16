<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\BungeeCordAnalyser;

/**
 * Class BungeeCordLog
 * @package Aternos\Codex\Minecraft\Log
 */
class BungeeCordLog extends MinecraftProxyLog
{
    protected static string $pattern = '/^((?:[0-9]{2}\:?){3} \[(\w+)\]).*$/';
    protected static string $prefixPattern = '((?:[0-9]{2}\:?){3} \[(\w+)\]) ';

    /**
     * @return BungeeCordAnalyser
     */
    public static function getDefaultAnalyser(): BungeeCordAnalyser
    {
        return new BungeeCordAnalyser();
    }

    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . 'Enabled BungeeCord version [^ ]+$/m')
        ];
    }

    /**
     * @return string
     */
    public function getServerSoftware(): string
    {
        return "BungeeCord";
    }
}