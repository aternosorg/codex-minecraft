<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Bedrock;

use Aternos\Codex\Minecraft\Analyser\BedrockContentAnalyser;
use Aternos\Codex\Minecraft\Log\Type\ContentLogTypeInterface;
use Aternos\Codex\Minecraft\Parser\Parser;
use Aternos\Codex\Parser\ParserInterface;

/**
 * Class BedrockContentLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Bedrock
 */
class BedrockContentLog extends BedrockLog implements ContentLogTypeInterface
{
    protected static string $pattern = '/^((?:\d{2}:){2}(?:\d{2})\[\w+\]\[(\w+)\]).*$/';

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
     * @inheritDoc
     */
    public static function getDefaultAnalyser(): BedrockContentAnalyser
    {
        return new BedrockContentAnalyser();
    }
}
