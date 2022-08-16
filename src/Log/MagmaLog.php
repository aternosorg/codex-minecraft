<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\MagmaAnalyser;

/**
 * Class MagmaLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class MagmaLog extends VanillaLog
{
    protected static string $pattern = '/^(\[(?:\S+ )?(?:[0-9]{2}\:?){3}(?:\.[0-9]+)?\] \[[^\]]+\/(\w+)\](?: \[[^\]]+\])?\:).*$/';
    protected static string $prefixPattern = '(\[(?:[0-9]{2}\:?){3}\] \[[^\/]+\/(\w+)\](?: \[[^\]]+\])?\:) ';

    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [
            (new SinglePatternDetector())->setPattern('/' . static::$prefixPattern . 'This server is running Magma version/')
        ];
    }

    /**
     * @return MagmaAnalyser
     */
    public static function getDefaultAnalyser(): MagmaAnalyser
    {
        return new MagmaAnalyser();
    }

    /**
     * Get the name of the used server software
     *
     * @return string
     */
    public function getServerSoftware(): string
    {
        return "Magma";
    }
}