<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class FabricEntryStageProblem extends FabricModProblem
{

    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-exception-problem", ["mod-name" => $this->getModName()]);
    }

    public static function getPatterns(): array
    {
        return [
            "/java.lang.RuntimeException: Could not execute entrypoint stage '[^']+' due to errors, provided by '(".static::$modIDPattern.")'!/"
        ];
    }

    public function setMatches(array $matches, $patternKey): void
    {
        $this->setModName($matches[1]);
        $this->addSolution((new ModRemoveSolution())->setModName($this->getModName()));
    }
}