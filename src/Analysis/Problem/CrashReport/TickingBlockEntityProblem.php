<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\CrashReport;

use Aternos\Codex\Minecraft\Analysis\Solution\CrashReport\RemoveBlockEntitySolution;

/**
 * Class TickingBlockEntityProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\CrashReport
 */
class TickingBlockEntityProblem extends TickingEntityProblem
{
    const PATTERN_ENTITY_NAME = "/-- Block entity being ticked --\nDetails:(?:\n\t.*)*\n\s+Name: ([\w:]+)/";
    const PATTERN_ENTITY_TYPE = "/-- Block entity being ticked --\nDetails:(?:\n\t.*)*\n\s+Block: Block{([\w:]+)}/";
    const PATTERN_ENTITY_LOCATION = "/-- Block entity being ticked --\nDetails:(?:\n\t.*)*\n\s+Block location: World: \(([\d-]+),([\d-]+),([\d-]+)\)/";

    /**
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return ["/^Description: Ticking block entity$/"];
    }

    /**
     * @return RemoveBlockEntitySolution
     */
    protected function createSolution(): RemoveBlockEntitySolution
    {
        return new RemoveBlockEntitySolution();
    }
}