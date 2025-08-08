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
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->value = $matches[1];
    }
}