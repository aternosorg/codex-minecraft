<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\File;

use Aternos\Codex\Analysis\AutomatableSolutionInterface;
use Aternos\Codex\Minecraft\Translator\Translator;

class FileDeleteSolution extends FileSolution implements AutomatableSolutionInterface
{
    /**
     * Get the solution as a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("file-delete-solution", ["file-path" => $this->getPath()]);
    }
}