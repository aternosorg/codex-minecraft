<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\PocketmineAnalyser;
use Aternos\Codex\Minecraft\Parser\Parser;
use Aternos\Codex\Parser\ParserInterface;

/**
 * Class PocketmineLog
 *
 * @author Matthias Neid
 * @package Aternos\Codex\Minecraft\Log
 */
class PocketmineLog extends MinecraftServerLog
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

    /**
     * @return PocketmineAnalyser
     */
    public static function getDefaultAnalyser()
    {
        return new PocketmineAnalyser();
    }

    /**
     * Get the name of the used server software
     *
     * @return string
     */
    public function getServerSoftware(): string
    {
        return "Pocketmine";
    }
}