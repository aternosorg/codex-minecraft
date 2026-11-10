<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Analysis\PatternInsightInterface;
use Aternos\Codex\Analysis\Problem;

abstract class MinecraftProblem extends Problem implements PatternInsightInterface
{
    /**
     * Check if the $insight object is equal with the current object
     *
     * @param static $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static;
    }
}