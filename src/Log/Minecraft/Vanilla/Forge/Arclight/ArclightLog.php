<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Arclight;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\ArclightAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\ForgeLog;

abstract class ArclightLog extends ForgeLog
{
    protected static string $prefixPattern = '(\[(?:[0-9]{2}[a-zA-Z]+[0-9]+ )?(?:[0-9]{2}\:?){3}(?:\.[0-9]+)?\] \[[^\/]+\/(\w+)\](?: \[[^\]]+\])?\:) ';

    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [
            (new SinglePatternDetector())->setPattern('/' . static::$prefixPattern . 'Arclight [a-zA-Z]+ mixin added./'),
            (new SinglePatternDetector())->setPattern('/' . static::$prefixPattern . 'This server is running Arclight version/')
        ];
    }

    /**
     * @return AnalyserInterface
     */
    public static function getDefaultAnalyser(): AnalyserInterface
    {
        return new ArclightAnalyser();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Arclight";
    }
}