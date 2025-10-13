<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Analysis\InsightInterface;

abstract class ModProblem extends ForgeProblem
{
    protected string $modName;

    /**
     * @return string
     */
    public function getModName(): string
    {
        return $this->modName;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return parent::isEqual($insight)
            && $insight instanceof static
            && $this->getModName() === $insight->getModName();
    }
}