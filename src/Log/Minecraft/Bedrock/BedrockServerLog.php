<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Bedrock;

use Aternos\Codex\Minecraft\Analyser\BedrockAnalyser;
use Aternos\Codex\Minecraft\Analysis\Information\Bedrock\BedrockVersionInformation;
use Aternos\Codex\Minecraft\Log\Type\ServerLogTypeInterface;
use Aternos\Codex\Minecraft\Parser\Parser;
use Aternos\Codex\Parser\ParserInterface;

/**
 * Class BedrockServerLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Bedrock
 */
class BedrockServerLog extends BedrockLog implements ServerLogTypeInterface
{
    protected static string $pattern = '/^(\[((?:[0-9]{2,4}-?){3} (?:[0-9]{2,3}\:?){3,4}) (\w+)\]).*$/';
    protected static ?string $versionInformationClass = BedrockVersionInformation::class;

    /**
     * @return ParserInterface
     */
    public static function getDefaultParser(): ParserInterface
    {
        return (new Parser())
            ->setPattern(static::$pattern)
            ->setTimeFormat('Y-m-d H:i:s')
            ->setMatches([Parser::PREFIX, Parser::TIME, Parser::LEVEL]);
    }

    /**
     * @return BedrockAnalyser
     */
    public static function getDefaultAnalyser(): BedrockAnalyser
    {
        return new BedrockAnalyser();
    }
}