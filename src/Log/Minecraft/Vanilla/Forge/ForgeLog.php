<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\WeightedSinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\ForgeAnalyser;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaLog;

/**
 * Class ForgeLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
abstract class ForgeLog extends VanillaLog
{
    protected static string $pattern = '/^(\[(?:\S+ )?(?:[0-9]{2}\:?){3}(?:\.[0-9]+)?\] \[[^\]]+\/(\w+)\](?: \[[^\]]+\])?\:).*$/';

    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return array_merge(parent::getDetectors(), [
            (new WeightedSinglePatternDetector())->setPattern('/MinecraftForge v[0-9\.]+ Initialized/')->setWeight(1)
        ]);
    }

    /**
     * @return AnalyserInterface
     */
    public static function getDefaultAnalyser(): AnalyserInterface
    {
        return new ForgeAnalyser();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Forge";
    }
}