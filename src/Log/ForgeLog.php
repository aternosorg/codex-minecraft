<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\WeightedSinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\ForgeAnalyser;

/**
 * Class ForgeLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class ForgeLog extends VanillaLog
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
     * @return ForgeAnalyser
     */
    public static function getDefaultAnalyser(): ForgeAnalyser
    {
        return new ForgeAnalyser();
    }

    /**
     * Get the name of the used server software
     *
     * @return string
     */
    public function getServerSoftware(): string
    {
        return "Forge";
    }
}