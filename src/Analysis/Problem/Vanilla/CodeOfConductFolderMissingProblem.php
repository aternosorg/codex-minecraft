<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Vanilla;

use Aternos\Codex\Minecraft\Analysis\Solution\Folder\FolderCreateSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class CodeOfConductFolderMissingProblem extends VanillaProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("code-of-conduct-folder-missing-problem");
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/Failed to start the minecraft server\njava\.lang\.IllegalArgumentException\: Code of Conduct folder does not exist: (.*)/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        // usually "codeofconduct"
        $folder = $matches[1];
        $this->addSolution(new FolderCreateSolution($folder));
    }
}
