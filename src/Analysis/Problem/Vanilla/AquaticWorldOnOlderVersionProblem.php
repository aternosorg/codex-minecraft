<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Vanilla;

use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\AquaticVersionInstallSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\GenerateNewWorldSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class AquaticWorldOnOlderVersionProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Vanilla
 */
class AquaticWorldOnOlderVersionProblem extends VanillaProblem
{

    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("aquatic-world-on-older-version-problem");
    }

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return array
     */
    public static function getPatterns(): array
    {
        return ['/Encountered an unexpected exception\njava\.lang\.IllegalArgumentException\: ChunkNibbleArrays should be 2048 bytes not\: 0/'];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param $patternKey
     */
    public function setMatches(array $matches, $patternKey): void
    {
        $this->addSolution(new GenerateNewWorldSolution());
        $this->addSolution(new AquaticVersionInstallSolution());
    }
}