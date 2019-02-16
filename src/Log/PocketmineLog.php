<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Parser\Parser;
use Aternos\Codex\Parser\ParserInterface;

/**
 * Class PocketmineLog
 *
 * @author Matthias Neid
 * @package Aternos\Codex\Minecraft\Log
 */
class PocketmineLog extends Log
{
    /**
     * @var string
     */
    protected static $pattern = '/^(((?:[0-9]{2,4}-?){3} \[(?:[0-9]{2}\:?){3}\]) \[[^\/]+\/(\w+)\]\:).*$/';

    /**
     * @return ParserInterface
     */
    public static function getDefaultParser()
    {
        return (new Parser())
            ->setPattern(static::$pattern)
            ->setTimeFormat('Y-m-d [H:i:s]')
            ->setMatches([Parser::PREFIX, Parser::TIME, Parser::LEVEL]);
    }

    /**
     * @return array
     */
    public static function getDetectors()
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/This server is running PocketMine-MP version/')
        ]);
    }
}