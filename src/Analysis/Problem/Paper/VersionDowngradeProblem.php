<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Minecraft\Analysis\Solution\Paper\VersionDowngradeSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class VersionDowngradeProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Vanilla
 */
class VersionDowngradeProblem extends PaperProblem
{

    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("version-downgrade-problem");
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
        return ['/java\.lang\.RuntimeException: Server attempted to load chunk saved with newer version of minecraft! \d+ > \d+/'];
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
        $this->addSolution(new VersionDowngradeSolution());
    }
}