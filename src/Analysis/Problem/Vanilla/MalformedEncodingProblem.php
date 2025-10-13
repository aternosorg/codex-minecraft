<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Vanilla;

use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\ChangeMOTDSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class MalformedEncodingProblem extends VanillaProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("malformed-encoding-problem");
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Failed to start the minecraft server\njava\.lang\.IllegalArgumentException\: Malformed \\\\uxxxx encoding\./'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution(new ChangeMOTDSolution());
    }
}