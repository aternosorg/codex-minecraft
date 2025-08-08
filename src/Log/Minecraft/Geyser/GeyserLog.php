<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Geyser;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\GeyserAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\MinecraftLog;

/**
 * Class GeyserLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Geyser
 */
abstract class GeyserLog extends MinecraftLog
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
     * @inheritDoc
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
    public function getName(): string
    {
        return "Geyser";
    }

}