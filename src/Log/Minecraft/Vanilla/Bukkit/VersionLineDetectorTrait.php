<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit;

use Aternos\Codex\Detective\SinglePatternDetector;

/**
 * Detects Bukkit servers by the version line they log on startup.
 * The using class defines static::$logIdentifiers and static::$prefixPattern.
 */
trait VersionLineDetectorTrait
{
    /**
     * One detector per log identifier, each matching a line like
     * [18:14:48] [Server thread/INFO]: This server is running CraftBukkit version git-Bukkit-8b1588e (MC: 1.13.2)
     *
     * @return SinglePatternDetector[]
     */
    protected static function getVersionLineDetectors(): array
    {
        $detectors = [];
        foreach (static::$logIdentifiers as $logIdentifier) {
            $pattern = '/' . static::$prefixPattern . 'This server is running ' . $logIdentifier . '/';
            $detectors[] = (new SinglePatternDetector())->setPattern($pattern);
        }
        return $detectors;
    }
}
