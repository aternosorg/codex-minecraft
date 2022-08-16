<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Minecraft\Parser\Parser;
use Aternos\Codex\Parser\ParserInterface;

/**
 * Class GlowstoneLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class GlowstoneLog extends BukkitLog
{
    protected static string $pattern = '/^(((?:(?:[0-9]{2,4}\/?){3} )?(?:[0-9]{2}\:?){3}) \[(\w+)\]).*$/';

    /**
     * @return ParserInterface
     */
    public static function getDefaultParser(): ParserInterface
    {
        return (new Parser())
            ->setPattern(static::$pattern)
            ->setTimeFormat('Y/m/d H:i:s')
            ->setMatches([Parser::PREFIX, Parser::TIME, Parser::LEVEL]);
    }

    /**
     * Get the name of the used server software
     *
     * @return string
     */
    public function getServerSoftware(): string
    {
        return "Glowstone";
    }
}