<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Minecraft\Analyser\BedrockAnalyser;
use Aternos\Codex\Minecraft\Parser\Parser;
use Aternos\Codex\Parser\ParserInterface;

/**
 * Class BedrockLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class BedrockLog extends MinecraftServerLog
{
    protected static $pattern = '/^(\[((?:[0-9]{2,4}-?){3} (?:[0-9]{2,3}\:?){3,4}) (\w+)\]).*$/';

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

    /**
     * Get the name of the used server software
     *
     * @return string
     */
    public function getServerSoftware(): string
    {
        return "Bedrock";
    }
}