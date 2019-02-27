<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\DoNothingSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class WorldMissingModProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Forge
 */
class WorldMissingModProblem extends ModProblem
{
    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("world-missing-mod-problem", ["mod-name" => $this->getModName()]);
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
        return ['/This world was saved with mod (?!forge)(?!minecraft)(\w+) which appears to be missing, things may not work well/'];
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

        $this->addSolution((new ModInstallSolution())->setModName($this->getModName()));
        $this->addSolution((new DoNothingSolution()));
    }
}