<?php

namespace Aternos\Codex\Minecraft\Parser;

use Aternos\Codex\Log\Entry;
use Aternos\Codex\Parser\PatternParser;

/**
 * Class Parser
 *
 * @package Aternos\Codex\Minecraft\Parser
 */
class Parser extends PatternParser
{
    const PREFIX = "prefix";

    /**
     * @var string
     */
    protected $entryClass = \Aternos\Codex\Minecraft\Log\Entry::class;

    /**
     * Parse an entry match
     *
     * @param Entry|\Aternos\Codex\Minecraft\Log\Entry $entry
     * @param string $matchType
     * @param string $matchString
     */
    protected function parseEntryMatch(Entry $entry, string $matchType, string $matchString)
    {
        switch ($matchType) {
            case static::PREFIX:
                $entry->setPrefix($matchString);
                break;
            default:
                parent::parseEntryMatch($entry, $matchType, $matchString);
        }
    }
}