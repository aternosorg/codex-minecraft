<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Vanilla;

use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\AquaticVersionInstallSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\GenerateNewWorldSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class AquaticWorldOnOlderVersionProblem extends VanillaProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("aquatic-world-on-older-version-problem");
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Encountered an unexpected exception\njava\.lang\.IllegalArgumentException\: ChunkNibbleArrays should be 2048 bytes not\: 0/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution(new GenerateNewWorldSolution());
        $this->addSolution(new AquaticVersionInstallSolution());
    }
}