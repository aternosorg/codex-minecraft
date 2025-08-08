<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

class PluginConfigureSolution extends PluginSolution
{
    protected ?string $suggestedFile = null;

    /**
     * @inheritDoc
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
     * @return string|null
     */
    public function getSuggestedFile(): ?string
    {
        return $this->suggestedFile;
    }

    /**
     * @param string $suggestedFile
     * @return $this
     */
    public function setSuggestedFile(string $suggestedFile): static
    {
        $this->suggestedFile = $suggestedFile;
        return $this;
    }
}