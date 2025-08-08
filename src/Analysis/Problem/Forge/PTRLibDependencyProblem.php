<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution;

/**
 * Class PTRLibDependencyProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Forge
 */
class PTRLibDependencyProblem extends UndefinedModDependencyProblem
{
    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return [
            '/Encountered an unexpected exception\njava\.lang\.NoClassDefFoundError: com\/mia\/craftstudio\/IPackReaderCallback/'
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
        $this->modName = "PTRLib";
        $this->addSolution(new ModInstallSolution($this->modName));
    }
}