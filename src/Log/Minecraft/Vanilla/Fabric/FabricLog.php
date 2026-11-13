<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\FabricAnalyser;
use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaLog;

abstract class FabricLog extends VanillaLog
{
    /**
     * Everything between the time and the slash before the level.
     * Usually that's only the thread:
     *   [12:00:00] [main/INFO]:
     * The Modrinth App writes the thread and the logger in separate brackets, and the logger can contain slashes:
     *   [09:45:19] [main] [FabricLoader/GameProvider/INFO]:
     */
    protected const string THREAD_PATTERN = '(?:\[[^\]\/]+\] \[[^\]]+|\[[^\/]+)';

    protected static string $pattern = '/^(\[(?:[0-9]{2}:?){3}\] ' . self::THREAD_PATTERN . '\/(\w+)\]:?).*$/';
    protected static string $prefixPattern = '\[(?:[0-9]{2}:?){3}\] ' . self::THREAD_PATTERN . '\/\w+\]:? ';

    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/' . static::getLoadingMinecraftPattern() . '/m'),
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . '[[(]FabricLoader[\])] Loading \d+ mods:/m'),
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . 'A critical error occurred\nnet\.fabricmc\.loader/m'),
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . 'Found new data pack Fabric Mods, loading it automatically$/m'),
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . 'Reloading ResourceManager: Default, Fabric Mods \(Fabric Tool Attribute API/m')
        ]);
    }

    protected static function getLoadingMinecraftPattern(): string
    {
        return '^' . static::$prefixPattern . '(?:\(FabricLoader\/GameProvider\) )?Loading Minecraft '
            . VanillaVersionInformation::getVersionPattern() . ' with Fabric Loader(?: [^ \n]+)?';
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
