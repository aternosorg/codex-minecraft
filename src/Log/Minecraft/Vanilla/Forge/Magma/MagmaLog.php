<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Magma;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\MagmaAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\ForgeLog;

/**
 * Class MagmaLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Magma
 */
abstract class MagmaLog extends ForgeLog
{
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
     * @return string
     */
    public function getName(): string
    {
        return "Magma";
    }
}