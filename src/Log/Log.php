<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\LinePatternDetector;
use Aternos\Codex\Log\DetectableLogInterface;
use Aternos\Codex\Minecraft\Parser\Parser;
use Aternos\Codex\Parser\ParserInterface;

/**
 * Class Log
 *
 * @package Aternos\Codex\Minecraft\Log
 */
abstract class Log extends \Aternos\Codex\Log\Log implements DetectableLogInterface
{
    /**
     * @var string
     */
    protected static $pattern;

    /**
     * @return ParserInterface
     */
    public static function getDefaultParser()
    {
        return (new Parser())
            ->setPattern(static::$pattern)
            ->setMatches([Parser::PREFIX, Parser::LEVEL]);
    }

    /**
     * Get an array of detectors matching DetectorInterface
     *
     * @return array
     */
    public static function getDetectors()
    {
        return [
            (new LinePatternDetector())->setPattern(static::$pattern)
        ];
    }
}