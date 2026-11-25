<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Vanilla;

use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\ModMemoryUsageSolution;

/**
 * {@see OutOfMemoryErrorProblem} on mod loaders, which also suggests removing mods.
 *
 * It is in the Vanilla namespace, because Forge, NeoForge, Fabric and Quilt share it and have no common parent.
 */
class ModOutOfMemoryErrorProblem extends OutOfMemoryErrorProblem
{
    /**
     * @inheritDoc
     */
    protected function addSolutions(): void
    {
        parent::addSolutions();
        $this->addSolution(new ModMemoryUsageSolution());
    }
}
