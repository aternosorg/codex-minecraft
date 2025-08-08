<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ForgeInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class ModWrongMinecraftVersionProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Forge
 */
class ModWrongMinecraftVersionProblem extends ModProblem
{
    protected ?string $minecraftVersion = null;

    /**
     * @return string
     */
    public function getMinecraftVersion(): string
    {
        return $this->minecraftVersion;
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-wrong-minecraft-version-problem", [
            "mod-name" => $this->getModName(),
            "minecraft-version" => $this->getMinecraftVersion()
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/The mod (\S+) does not wish to run in Minecraft version Minecraft ([0-9\.]+)\. You will have to remove it to play\./'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->modName = $matches[1];
        $this->minecraftVersion = $matches[2];

        $this->addSolution((new ModRemoveSolution())->setModName($this->getModName()));
        $this->addSolution((new ForgeInstallDifferentVersionSolution()));
    }
}