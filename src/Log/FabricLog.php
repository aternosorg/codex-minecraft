<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\FabricAnalyser;
use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;

/**
 * Class FabricLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class FabricLog extends VanillaLog
{

    /**
     * @return array
     */
    public static function getDetectors(): array
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . 'Loading Minecraft '. VanillaVersionInformation::getVersionPattern() . ' with Fabric Loader/'),
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . '\[FabricLoader\] Loading \d+ mods:/m'),
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . 'A critical error occurred\nnet.fabricmc.loader/m'),
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . 'Found new data pack Fabric Mods, loading it automatically$/m'),
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . 'Reloading ResourceManager: Default, Fabric Mods \(Fabric Tool Attribute API/m')
        ]);
    }

    /**
     * @return FabricAnalyser
     */
    public static function getDefaultAnalyser(): FabricAnalyser
    {
        return new FabricAnalyser();
    }

    /**
     * Get the name of the used server software
     *
     * @return string
     */
    public function getServerSoftware(): string
    {
        return "Fabric";
    }
}
