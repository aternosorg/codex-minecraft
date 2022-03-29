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
    /**
     * @var string
     */
    protected $minecraftVersion;

    /**
     * @return string
     */
    public function getMinecraftVersion(): string
    {
        return $this->minecraftVersion;
    }

    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-wrong-minecraft-version-problem", [
            "mod-name" => $this->getModName(),
            "minecraft-version" => $this->getMinecraftVersion()
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
        return ['/The mod (\S+) does not wish to run in Minecraft version Minecraft ([0-9\.]+)\. You will have to remove it to play\./'];
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
        $this->minecraftVersion = $matches[2];

        $this->addSolution((new ModRemoveSolution())->setModName($this->getModName()));
        $this->addSolution((new ForgeInstallDifferentVersionSolution()));
    }
}