<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\SinglePatternDetector;

/**
 * Class PaperLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class PaperLog extends BukkitLog
{
    /**
     * @return array
     */
    public static function getDetectors()
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/This server is running Paper version git\-Paper/')
        ]);
    }
}