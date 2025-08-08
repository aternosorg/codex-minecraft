<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Mohist;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\MohistAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\ForgeLog;

/**
 * Class MohistLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Mohist
 */
abstract class MohistLog extends ForgeLog
{
    protected static string $prefixPattern = '(\[(?:[0-9]{2}[a-zA-Z]+[0-9]+ )?(?:[0-9]{2}\:?){3}(?:\.[0-9]+)?\] \[[^\/]+\/(\w+)\](?: \[[^\]]+\])?\:) ';

    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [
            (new SinglePatternDetector())->setPattern('/' . static::$prefixPattern . 'Injecting coremod MohistCorePlugin/'),
            (new SinglePatternDetector())->setPattern('/' . static::$prefixPattern . 'This server is running ?Mohist ?version/')
        ];
    }

    /**
     * @return AnalyserInterface
     */
    public static function getDefaultAnalyser(): AnalyserInterface
    {
        return new MohistAnalyser();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Mohist";
    }
}