<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Quilt;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\QuiltAnalyser;
use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaLog;

/**
 * Class QuiltLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Quilt
 */
abstract class QuiltLog extends VanillaLog
{
    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . 'Loading Minecraft '. VanillaVersionInformation::getVersionPattern() . ' with Quilt Loader/m')
        ]);
    }

    /**
     * @return QuiltAnalyser
     */
    public static function getDefaultAnalyser(): QuiltAnalyser
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