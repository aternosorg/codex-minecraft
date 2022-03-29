<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\CommandRunSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class FmlConfirmProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Forge
 */
class FmlConfirmProblem extends ForgeProblem
{
    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("forge-confirm-problem");
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
        return ['/Run the command \/fml confirm or or \/fml cancel to proceed\./'];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param $patternKey
     */
    public function setMatches(array $matches, $patternKey): void
    {
        $this->addSolution((new CommandRunSolution())->setCommand('/fml confirm'));
    }
}