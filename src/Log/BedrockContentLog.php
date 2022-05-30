<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Analyser\AnalyserInterface;
use Aternos\Codex\Minecraft\Analyser\BedrockAnalyser;
use Aternos\Codex\Minecraft\Analyser\BedrockContentAnalyser;
use Aternos\Codex\Minecraft\Parser\Parser;
use Aternos\Codex\Parser\ParserInterface;

class BedrockContentLog extends MinecraftServerLog
{
    protected static $pattern = '/^((?:\d{2}:){2}(?:\d{2})\[\w+\]\[(\w+)\]).*$/';

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
     * @inheritDoc
     */
    public static function getDefaultAnalyser()
    {
        return new BedrockContentAnalyser();
    }

    /**
     * @inheritDoc
     */
    public function getServerSoftware(): string
    {
        return "Bedrock";
    }
}
