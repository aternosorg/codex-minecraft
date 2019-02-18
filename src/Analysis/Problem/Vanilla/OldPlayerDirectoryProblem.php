<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Vanilla;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;

/**
 * Class OldPlayerDirectoryProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\MinecraftProblem\Vanilla
 */
class OldPlayerDirectoryProblem extends VanillaProblem
{
    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return "The server has detected an old player directory in the world save.";
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
        return ['/\*\*\*\* DETECTED OLD PLAYER DIRECTORY IN THE WORLD SAVE/'];
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
        $this->addSolution((new FileDeleteSolution())->setRelativePath('world/players'));
    }
}