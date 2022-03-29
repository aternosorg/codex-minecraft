<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\DoNothingSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class WorldModVersionProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Forge
 */
class WorldModVersionProblem extends ModProblem
{
    /**
     * @var string
     */
    protected $currentVersion;

    /**
     * @var string
     */
    protected $expectedVersion;

    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("world-mod-version-problem", [
            "mod-name" => $this->getModName(),
            "mod-expected-version" => $this->getExpectedVersion(),
            "mod-current-version" => $this->getCurrentVersion()
        ]);
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
        return ['/This world was saved with mod (\w+) version (\S+) and it is now at version ([^,]+), things may not work well/'];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param $patternKey
     */
    public function setMatches(array $matches, $patternKey): void
    {
        $this->modName = $matches[1];
        $this->expectedVersion = $matches[2];
        $this->currentVersion = $matches[3];

        $this->addSolution((new ModInstallSolution())->setModName($this->getModName())->setModVersion($this->getExpectedVersion()));
        $this->addSolution((new DoNothingSolution()));
    }

    /**
     * @return string
     */
    public function getCurrentVersion(): string
    {
        return $this->currentVersion;
    }

    /**
     * @return string
     */
    public function getExpectedVersion(): string
    {
        return $this->expectedVersion;
    }
}