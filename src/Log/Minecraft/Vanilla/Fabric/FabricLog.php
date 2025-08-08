<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\FabricAnalyser;
use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaLog;

/**
 * Class FabricLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Fabric
 */
abstract class FabricLog extends VanillaLog
{
    protected static string $pattern = '/^(\[(?:[0-9]{2}\:?){3}\] \[[^\/]+\/(\w+)\]\:?).*$/';
    protected static string $prefixPattern = '(\[(?:[0-9]{2}\:?){3}\] \[[^\/]+\/(\w+)\]\:?) ';

    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . '(?:\(FabricLoader\/GameProvider\) )?Loading Minecraft ' . VanillaVersionInformation::getVersionPattern() . ' with Fabric Loader/m'),
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . '[[(]FabricLoader[\])] Loading \d+ mods:/m'),
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . 'A critical error occurred\nnet.fabricmc.loader/m'),
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . 'Found new data pack Fabric Mods, loading it automatically$/m'),
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . 'Reloading ResourceManager: Default, Fabric Mods \(Fabric Tool Attribute API/m')
        ]);
    }

    /**
     * @return AnalyserInterface
     */
    public static function getDefaultAnalyser(): AnalyserInterface
    {
        return new FabricAnalyser();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Fabric";
    }
}
