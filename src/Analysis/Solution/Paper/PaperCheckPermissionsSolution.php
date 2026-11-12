<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Paper;

use Aternos\Codex\Minecraft\Translator\Translator;

class PaperCheckPermissionsSolution extends PaperSolution
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
        return Translator::getInstance()->getTranslation("check-permissions-solution", [
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
