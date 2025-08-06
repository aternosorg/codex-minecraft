<?php

namespace Aternos\Codex\Minecraft\Analysis\Information;

use Aternos\Codex\Analysis\Information;
use Aternos\Codex\Analysis\PatternInsightInterface;

abstract class MinecraftInformation extends Information implements PatternInsightInterface
{
    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param mixed $patternKey
     * @return void
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->value = $matches[1];
    }
}