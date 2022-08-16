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
    protected string $entryClass = \Aternos\Codex\Minecraft\Log\Entry::class;

    /**
     * Parse an entry match
     *
     * @param Entry $entry
     * @param string $matchType
     * @param string $matchString
     */
    protected function parseEntryMatch(Entry $entry, string $matchType, string $matchString): void
    {
        /** @var \Aternos\Codex\Minecraft\Log\Entry $entry */
        switch ($matchType) {
            case static::PREFIX:
                $entry->setPrefix($matchString);
                break;
            default:
                parent::parseEntryMatch($entry, $matchType, $matchString);
        }
    }
}