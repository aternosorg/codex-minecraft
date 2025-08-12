<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine;

abstract class PluginSolution extends PocketmineSolution
{
    /**
     * @param string $pluginName
     */
    public function __construct(protected string $pluginName)
    {
    }

    /**
     * @param string $pluginName
     * @return $this
     */
    public function setPluginName(string $pluginName): static
    {
        $this->pluginName = $pluginName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPluginName(): string
    {
        return $this->pluginName;
    }
}