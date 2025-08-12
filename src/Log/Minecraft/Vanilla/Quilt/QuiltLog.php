<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Quilt;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\QuiltAnalyser;
use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaLog;

abstract class QuiltLog extends VanillaLog
{
    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . 'Loading Minecraft ' . VanillaVersionInformation::getVersionPattern() . ' with Quilt Loader/m')
        ]);
    }

    /**
     * @return AnalyserInterface
     */
    public static function getDefaultAnalyser(): AnalyserInterface
    {
        return new QuiltAnalyser();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Quilt";
    }
}