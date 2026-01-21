<?php

namespace Aternos\Codex\Minecraft\Parser;

use Aternos\Codex\Parser\PatternParser;

class Parser extends PatternParser
{
    protected string $entryClass = \Aternos\Codex\Minecraft\Log\Entry::class;
}