<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine;

use Aternos\Codex\Analysis\InsightInterface;

abstract class PluginProblem extends PocketmineProblem
{
    protected string $pluginName;

    /**
     * @return string
     */
    public function getPluginName(): string
    {
        return $this->pluginName;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static && $this->getPluginName() === $insight->getPluginName();
    }
}