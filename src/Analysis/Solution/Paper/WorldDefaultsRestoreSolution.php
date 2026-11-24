<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Paper;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Restore the missing world defaults file, either from a backup or by restarting the server,
 * which creates it again with default values.
 */
class WorldDefaultsRestoreSolution extends PaperSolution
{
    /**
     * @param string $path
     */
    public function __construct(protected string $path)
    {
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("paper-world-defaults-restore-solution", [
            "path" => $this->path
        ]);
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
}
