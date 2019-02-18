<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

/**
 * Class PluginConfigureSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Bukkit
 */
class PluginConfigureSolution extends PluginSolution
{
    /**
     * @var string
     */
    protected $suggestedFile;

    /**
     * Get the solution as a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        $suggested = ($this->suggestedFile) ? " (" . $this->suggestedFile . ")" : "";
        return "Configure the plugin '" . $this->getPluginName() . "'" . $suggested . ".";
    }

    /**
     * @return string
     */
    public function getSuggestedFile(): string
    {
        return $this->suggestedFile;
    }

    /**
     * @param string $suggestedFile
     * @return PluginConfigureSolution
     */
    public function setSuggestedFile(string $suggestedFile)
    {
        $this->suggestedFile = $suggestedFile;
        return $this;
    }
}