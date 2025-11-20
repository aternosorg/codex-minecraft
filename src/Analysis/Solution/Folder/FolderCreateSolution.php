<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Folder;

use Aternos\Codex\Analysis\AutomatableSolutionInterface;
use Aternos\Codex\Minecraft\Translator\Translator;

class FolderCreateSolution extends FolderSolution implements AutomatableSolutionInterface
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("folder-create-solution", ["folder-path" => $this->getPath()]);
    }
}
