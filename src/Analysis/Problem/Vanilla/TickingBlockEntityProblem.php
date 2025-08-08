<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Vanilla;

use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\BlockRemoveSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\GenerateNewWorldSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class TickingBlockEntityProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Vanilla
 */
class TickingBlockEntityProblem extends VanillaProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("ticking-block-entity-problem");
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Encountered an unexpected exception\n\s?net\.minecraft\.(?:util|crash)\.ReportedException\: Ticking block entity/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution((new GenerateNewWorldSolution()));
        $this->addSolution((new BlockRemoveSolution()));
    }
}