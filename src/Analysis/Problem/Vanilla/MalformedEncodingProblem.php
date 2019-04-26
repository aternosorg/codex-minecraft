<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Vanilla;

use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\ChangeMOTDSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class MalformedEncodingProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Vanilla
 */
class MalformedEncodingProblem extends VanillaProblem
{
    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("malformed-encoding-problem");
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
        return ['/Failed to start the minecraft server\njava\.lang\.IllegalArgumentException\: Malformed \\\\uxxxx encoding\./'];
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
        $this->addSolution((new ChangeMOTDSolution()));
    }
}