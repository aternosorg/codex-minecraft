<?php

namespace Aternos\Codex\Minecraft\Analysis\Information;

use Aternos\Codex\Analysis\Information;
use Aternos\Codex\Analysis\PatternInsightInterface;

/**
 * Class MinecraftInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information
 */
abstract class MinecraftInformation extends Information implements PatternInsightInterface
{
    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param $patternKey
     */
    public function setMatches(array $matches, $patternKey): void
    {
        $this->value = $matches[1];
    }
}