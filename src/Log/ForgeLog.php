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
     * @var string
     */
    protected static $pattern = '/^(\[(?:\S+ )?(?:[0-9]{2}\:?){3}(?:\.[0-9]+)?\] \[[^\]]+\/(\w+)\](?: \[[^\]]+\])?\:).*$/';

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