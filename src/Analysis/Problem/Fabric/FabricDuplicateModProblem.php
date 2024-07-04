<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;


use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaServerLog;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class FabricDuplicateModProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Fabric
 */
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
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return [
            "/". VanillaServerLog::getPrefixPattern() . "A critical error occurred\nnet\.fabricmc\.loader\.discovery\.ModResolutionException: Duplicate versions for mod ID '([^']+)': \[[^ ]+ at ([^\]]+)\]/"
        ];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param mixed $patternKey
     * @return void
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->setModName($matches[3]);
        $this->addSolution((new FileDeleteSolution())->setAbsolutePath($matches[4]));
    }
}