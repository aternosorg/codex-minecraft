<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\BungeeCord;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\BungeeCordAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\MinecraftLog;
use Aternos\Codex\Minecraft\Log\Type\ProxyLogTypeInterface;

/**
 * Class BungeeCordLog
 * @package Aternos\Codex\Minecraft\Log
 */
abstract class BungeeCordLog extends MinecraftLog implements ProxyLogTypeInterface
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
     * @inheritDoc
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
    public function getName(): string
    {
        return "BungeeCord";
    }
}