<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\BungeeCord\Waterfall;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Log\Minecraft\BungeeCord\BungeeCordLog;

abstract class WaterfallLog extends BungeeCordLog
{
    protected static string $pattern = '/^(\[(?:[0-9]{2}\:?){3}\] \[[^\/]+\/(\w+)\]\:).*$/';
    protected static string $prefixPattern = '(\[(?:[0-9]{2}\:?){3}\] \[[^\/]+\/(\w+)\]\:) ';

    /**
     * @inheritDoc
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
    public function getName(): string
    {
        return "Waterfall";
    }
}