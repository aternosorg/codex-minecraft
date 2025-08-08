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
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("world-missing-mod-problem", ["mod-name" => $this->getModName()]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/This world was saved with mod (?!forge)(?!minecraft)(\w+) which appears to be missing, things may not work well/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->modName = $matches[1];

        $this->addSolution((new ModInstallSolution())->setModName($this->getModName()));
        $this->addSolution((new DoNothingSolution()));
    }
}