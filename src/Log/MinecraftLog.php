<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\LinePatternDetector;
use Aternos\Codex\Log\DetectableLogInterface;
use Aternos\Codex\Minecraft\Analyser\MinecraftAnalyser;
use Aternos\Codex\Minecraft\Parser\Parser;
use Aternos\Codex\Parser\ParserInterface;

/**
 * Class MinecraftLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
abstract class MinecraftLog extends \Aternos\Codex\Log\AnalysableLog implements DetectableLogInterface
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
     * @return MinecraftAnalyser
     */
    public static function getDefaultAnalyser()
    {
        return new MinecraftAnalyser();
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