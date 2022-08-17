<?php

namespace Aternos\Codex\Minecraft\Parser;

use Aternos\Codex\Log\Entry;
use Aternos\Codex\Log\Level;

/**
 * Class ForgeParser
 *
 * @package Aternos\Codex\Minecraft\Parser
 */
class ForgeParser extends Parser
{
    const CHANNEL = "channel";

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
            case static::CHANNEL:
                if (strtolower(explode("/", $matchString)[0]) === "stderr") {
                    $entry->setLevel(Level::ERROR);
                }
                break;
            default:
                parent::parseEntryMatch($entry, $matchType, $matchString);
        }
    }
}