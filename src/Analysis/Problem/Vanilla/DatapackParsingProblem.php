<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Vanilla;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class DatapackParsingProblem extends VanillaProblem
{
    protected string $datapack;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("datapack-parsing-problem", [
            "datapack" => $this->getDatapack()
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/java.lang.IllegalStateException: Failed to parse .+ from pack file\/(.*)/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->datapack = $matches[1];
        $this->addSolution(new FileDeleteSolution($this->datapack));
    }

    public function getDatapack(): string
    {
        return $this->datapack;
    }
}
