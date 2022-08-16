<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine;

/**
 * Class PluginSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine
 */
abstract class PluginSolution extends PocketmineSolution
{
    protected ?string $pluginName = null;

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
     * @return string|null
     */
    public function getPluginName(): ?string
    {
        return $this->pluginName;
    }
}