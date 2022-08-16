<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\SinglePatternDetector;

/**
 * Class WaterfallLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class WaterfallLog extends BungeeCordLog
{
    protected static string $pattern = '/^(\[(?:[0-9]{2}\:?){3}\] \[[^\/]+\/(\w+)\]\:).*$/';
    protected static string $prefixPattern = '(\[(?:[0-9]{2}\:?){3}\] \[[^\/]+\/(\w+)\]\:) ';

    /**
     * @return array
     */
    public static function getDetectors(): array
    {
        return [
            (new SinglePatternDetector())->setPattern('/^' . static::$prefixPattern . 'Enabled Waterfall version [^ ]+$/m')
        ];
    }

    /**
     * @return string
     */
    public function getServerSoftware(): string
    {
        return "Waterfall";
    }
}