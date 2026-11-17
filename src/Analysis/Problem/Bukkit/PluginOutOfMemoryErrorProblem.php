<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\OutOfMemoryErrorProblem;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginMemoryUsageSolution;

/**
 * {@see OutOfMemoryErrorProblem} on server software with plugins, which also suggests removing plugins.
 */
class PluginOutOfMemoryErrorProblem extends OutOfMemoryErrorProblem
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
