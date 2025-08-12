<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FilePathType;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaServerLog;
use Aternos\Codex\Minecraft\Translator\Translator;

class FabricDuplicateModProblem extends FabricModProblem
{
    /**
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-duplicate-problem-no-path", ["mod-name" => $this->getModName()]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            "/" . VanillaServerLog::getPrefixPattern() . "A critical error occurred\nnet\.fabricmc\.loader\.discovery\.ModResolutionException: Duplicate versions for mod ID '([^']+)': \[[^ ]+ at ([^\]]+)\]/"
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->setModName($matches[3]);
        $this->addSolution(new FileDeleteSolution($matches[4], FilePathType::ABSOLUTE));
    }
}