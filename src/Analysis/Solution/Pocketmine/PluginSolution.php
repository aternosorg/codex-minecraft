<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine;

/**
 * Class PluginSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine
 */
abstract class PluginSolution extends PocketmineSolution
{
    /**
     * @var string
     */
    protected $pluginName;

    /**
     * @param string $pluginName
     * @return $this
     */
    public function setPluginName(string $pluginName)
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