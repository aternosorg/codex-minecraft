<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class ModExceptionProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Forge
 */
class ModExceptionProblem extends ModProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-exception-problem", ["mod-name" => $this->getModName()]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/Caught exception from ([^\(\n]+)/',
            '/net.minecraftforge.fml.LoadingFailedException: Loading errors encountered: \[\s+([^\(\n]+) \([^\)]+\) encountered an error during/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->modName = trim($matches[1]);

        $this->addSolution((new ModInstallDifferentVersionSolution())->setModName($this->getModName()));
        $this->addSolution((new ModRemoveSolution())->setModName($this->getModName()));
    }
}