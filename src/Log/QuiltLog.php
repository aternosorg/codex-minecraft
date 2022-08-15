<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\QuiltAnalyser;
use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;

class QuiltLog extends VanillaLog
{
    public static function getDetectors(): array
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . 'Loading Minecraft '. VanillaVersionInformation::getVersionPattern() . ' with Quilt Loader/')
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
     * Get the name of the used server software
     *
     * @return string
     */
    public function getServerSoftware(): string
    {
        return "Quilt";
    }
}