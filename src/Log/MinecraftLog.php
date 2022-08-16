<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\LinePatternDetector;
use Aternos\Codex\Log\DetectableLogInterface;
use Aternos\Codex\Minecraft\Parser\Parser;
use Aternos\Codex\Parser\ParserInterface;
use Aternos\Codex\Parser\PatternParser;

/**
 * Class MinecraftLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
abstract class MinecraftLog extends \Aternos\Codex\Log\AnalysableLog implements DetectableLogInterface
{
    protected static string $pattern;

    /**
     * @return ParserInterface
     */
    public static function getDefaultParser(): ParserInterface
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
    public static function getDetectors(): array
    {
        return [
            (new LinePatternDetector())->setPattern(static::$pattern)
        ];
    }
}