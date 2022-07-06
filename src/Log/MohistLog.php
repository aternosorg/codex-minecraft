<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\MohistAnalyser;

/**
 * Class MohistLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class MohistLog extends VanillaLog
{
    /**
     * @var string
     */
    protected static $pattern = '/^(\[(?:\S+ )?(?:[0-9]{2}\:?){3}(?:\.[0-9]+)?\] \[[^\]]+\/(\w+)\](?: \[[^\]]+\])?\:).*$/';

    /**
     * @var string
     */
    protected static $prefixPattern = '(\[(?:[0-9]{2}[a-zA-Z]+[0-9]+ )?(?:[0-9]{2}\:?){3}(?:\.[0-9]+)?\] \[[^\/]+\/(\w+)\](?: \[[^\]]+\])?\:) ';

    /**
     * @return array
     */
    public static function getDetectors()
    {
        return [
            (new SinglePatternDetector())->setPattern('/' . static::$prefixPattern . 'Injecting coremod MohistCorePlugin/'),
            (new SinglePatternDetector())->setPattern('/' . static::$prefixPattern . 'This server is running ?Mohist ?version/')
        ];
    }

    /**
     * @return MohistAnalyser
     */
    public static function getDefaultAnalyser()
    {
        return new MohistAnalyser();
    }

    /**
     * Get the name of the used server software
     *
     * @return string
     */
    public function getServerSoftware(): string
    {
        return "Mohist";
    }
}