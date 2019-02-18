<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\ForgeAnalyser;

/**
 * Class ForgeLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class ForgeLog extends VanillaLog
{
    /**
     * @return array
     */
    public static function getDetectors()
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/MinecraftForge v[0-9\.]+ Initialized/')
        ]);
    }

    /**
     * @return ForgeAnalyser
     */
    public static function getDefaultAnalyser()
    {
        return new ForgeAnalyser();
    }
}