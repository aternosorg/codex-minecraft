<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Paper;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Back up and delete a Paper config file, so that Paper creates it again with default settings.
 * Deliberately not automatable, because deleting the file loses all settings in it.
 */
class PaperConfigResetSolution extends PaperSolution
{
    /**
     * @param string $filePath The path of the config file, relative to the server root
     */
    public function __construct(protected string $filePath)
    {
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("paper-config-reset-solution", [
            "file-path" => $this->filePath
        ]);
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }
}
