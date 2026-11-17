<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\ModOutOfMemoryErrorProblem;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginMemoryUsageSolution;

/**
 * {@see ModOutOfMemoryErrorProblem} on Forge servers that also load Bukkit plugins, like Arclight or Mohist,
 * which suggests removing mods and plugins.
 */
class HybridOutOfMemoryErrorProblem extends ModOutOfMemoryErrorProblem
{
    /**
     * @inheritDoc
     */
    protected function addSolutions(): void
    {
        parent::addSolutions();
        $this->addSolution(new PluginMemoryUsageSolution());
    }
}
