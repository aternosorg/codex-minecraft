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
     * Matches the duplicate mod and the path of one of its files:
     * [16:33:50] [main/FATAL]: A critical error occurred
     * net.fabricmc.loader.discovery.ModResolutionException: Duplicate versions for mod ID 'fabric': [0.30.3+1.16 at /server/mods/fabric-api-0.30.3+1.16.jar]
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            "/" . VanillaServerLog::getPrefixPattern() . "A critical error occurred\nnet\.fabricmc\.loader\.discovery\.ModResolutionException: Duplicate versions for mod ID '(?<mod>[^']+)': \[[^ ]+ at (?<path>[^\]]+)\]/"
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->setModName($matches['mod']);
        $this->addSolution(new FileDeleteSolution($matches['path'], FilePathType::ABSOLUTE));
    }
}
