<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;


use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Log\VanillaLog;
use Aternos\Codex\Minecraft\Translator\Translator;

class FabricDuplicateModProblem extends FabricModProblem
{
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-duplicate-problem-no-path", ["mod-name" => $this->getModName()]);
    }

    public static function getPatterns(): array
    {
        return [
            "/". VanillaLog::getPrefixPattern() . "A critical error occurred\nnet\.fabricmc\.loader\.discovery\.ModResolutionException: Duplicate versions for mod ID '([^']+)': \[[^ ]+ at ([^\]]+)\]/"
        ];
    }

    public function setMatches(array $matches, $patternKey)
    {
        $this->setModName($matches[3]);
        $this->addSolution((new FileDeleteSolution())->setAbsolutePath($matches[4]));
    }
}