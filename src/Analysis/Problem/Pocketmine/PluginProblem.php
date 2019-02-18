<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine;

/**
 * Class PluginProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine
 */
abstract class PluginProblem extends PocketmineProblem
{
    /**
     * @var string
     */
    protected $pluginName;

    /**
     * @return string
     */
    public function getPluginName(): string
    {
        return $this->pluginName;
    }

    /**
     * @param static $insight
     * @return bool
     */
    public function isEqual($insight): bool
    {
        return $this->getPluginName() === $insight->getPluginName();
    }
}