<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

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
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            // client-only causes are handled by FabricClientOnlyModProblem
            "/java\.lang\.RuntimeException: Could not execute entrypoint stage '[^']+' due to errors, provided by '(" . static::$modIDPattern . ")'"
                . "(?![^\n]*\n" . FabricClientOnlyModProblem::STACK_TRACE_LINES . "Caused by: " . FabricClientOnlyModProblem::CLIENT_ONLY_CAUSE . ")/"
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->setModName($matches[1]);
        $this->addSolution(new ModRemoveSolution($this->getModName()));
    }
}
