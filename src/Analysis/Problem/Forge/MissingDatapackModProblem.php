<?php


namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\General\DoNothingSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Mod\ModInstallSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class MissingDatapackModProblem extends ModProblem
{
    /**
     * @inheritDoc
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
        return ['/Missing data pack mod:([\w-]+)/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->modName = $matches[1];
        $this->addSolution(new ModInstallSolution($this->modName));
        $this->addSolution(new DoNothingSolution());
    }
}