<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

/**
 * Class ModRuntimeProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Forge
 */
class ModRuntimeProblem extends ModProblem
{
    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return "The mod '" . $this->getModName() . "' has a problem while running.";
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
        return [
            '/\n\s*UCE (\w+)\{[^\}]+\} \[[^\]]+\] \([^\)]+\)/',
            '/Caught exception from (\w+)/'
        ];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param $patternKey
     * @return mixed
     */
    public function setMatches(array $matches, $patternKey)
    {
        $this->modName = $matches[1];
    }
}