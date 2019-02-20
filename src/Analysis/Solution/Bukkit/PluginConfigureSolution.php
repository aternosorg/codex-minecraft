<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

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
        if ($this->suggestedFile) {
            return Translator::getInstance()->getTranslation("configure-plugin-with-file", [
                "plugin-name" => $this->getPluginName(),
                "suggested-file" => $this->getSuggestedFile()
            ]);
        } else {
            return Translator::getInstance()->getTranslation("configure-plugin", [
                "plugin-name" => $this->getPluginName(),
            ]);
        }
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