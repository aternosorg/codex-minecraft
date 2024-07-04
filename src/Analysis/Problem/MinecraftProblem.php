<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Analysis\PatternInsightInterface;
use Aternos\Codex\Analysis\Problem;

/**
 * Class MinecraftProblem
 *
 * @author Matthias Neid
 * @package Aternos\Codex\Minecraft\Analysis\MinecraftProblem
 */
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
        return get_class($this) === get_class($insight);
    }
}