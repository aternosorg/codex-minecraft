<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class FabricEntryStageProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Fabric
 */
class FabricEntryStageProblem extends FabricModProblem
{
    /**
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-exception-problem", ["mod-name" => $this->getModName()]);
    }

    /**
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return [
            "/java.lang.RuntimeException: Could not execute entrypoint stage '[^']+' due to errors, provided by '(" . static::$modIDPattern . ")'!/"
        ];
    }

    /**
     * @param array $matches
     * @param mixed $patternKey
     * @return void
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->setModName($matches[1]);
        $this->addSolution((new ModRemoveSolution())->setModName($this->getModName()));
    }
}