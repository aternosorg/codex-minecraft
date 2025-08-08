<?php


namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\DoNothingSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class MissingDatapackModProblem extends ModProblem
{
    /**
     * Get a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("missing-datapack-mod-problem", ["mod-name" => $this->getModName()]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Missing data pack mod:([\w\d\-]+)/'];
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
        $this->modName = $matches[1];
        $this->addSolution((new ModInstallSolution())->setModName($this->modName));
        $this->addSolution(new DoNothingSolution());
    }
}