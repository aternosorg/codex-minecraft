<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Paper;

use Aternos\Codex\Minecraft\Translator\Translator;

class PaperRenamePluginSolution extends PaperSolution
{
    /**
     * @param string|null $pluginName
     */
    public function __construct(protected ?string $pluginName)
    {
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        if ($this->pluginName === null) {
            return Translator::getInstance()->getTranslation("rename-plugin-unknown-solution");
        }

        return Translator::getInstance()->getTranslation("rename-plugin-solution", [
            "plugin-name" => $this->pluginName
        ]);
    }

    /**
     * @return string|null
     */
    public function getPluginName(): ?string
    {
        return $this->pluginName;
    }
}
