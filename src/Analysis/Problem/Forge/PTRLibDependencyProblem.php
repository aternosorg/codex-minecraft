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
     * @return array
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
     * @param $patternKey
     * @return mixed
     */
    public function setMatches(array $matches, $patternKey)
    {
        $this->modName = "PTRLib";
        $this->addSolution((new ModInstallSolution())->setModName($this->modName));
    }
}