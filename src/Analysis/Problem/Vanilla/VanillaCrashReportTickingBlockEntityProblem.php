<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Vanilla;

use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\VanillaCrashReportRemoveBlockEntitySolution;

class VanillaCrashReportTickingBlockEntityProblem extends VanillaCrashReportTickingEntityProblem
{
    protected const string PATTERN_ENTITY_NAME = "/-- Block entity being ticked --\nDetails:(?:\n\t.*)*\n\s+Name: ((?:[\w.]+:)?[\w.]+)/";
    protected const string PATTERN_ENTITY_TYPE = "/-- Block entity being ticked --\nDetails:(?:\n\s.*)*\n\s+Block[\s\w]*: .*?([\w.]+:[\w.]+)/";
    protected const string PATTERN_ENTITY_LOCATION = "/-- Block entity being ticked --\nDetails:(?:\n\s.*)*\n\s+Block location: World: \(([\d-]+),([\d-]+),([\d-]+)\)/";

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ["/^Description: Ticking block entity$/"];
    }

    /**
     * @return VanillaCrashReportRemoveBlockEntitySolution
     */
    protected function createSolution(): VanillaCrashReportRemoveBlockEntitySolution
    {
        return new VanillaCrashReportRemoveBlockEntitySolution();
    }
}
