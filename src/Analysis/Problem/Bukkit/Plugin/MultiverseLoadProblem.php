<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\WorldRepairSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class MultiverseLoadProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin
 */
class MultiverseLoadProblem extends SpecificPluginProblem
{
    protected ?string $worldName = null;

    /**
     * @return string|null
     */
    public function getWorldName(): ?string
    {
        return $this->worldName;
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("multiverse-load-problem", ["world-name" => $this->getWorldName()]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/The world \'([^\']+)\' could NOT be loaded because it contains errors and is probably corrupt\!/'];
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
        $this->worldName = $matches[1];

        $this->addSolution((new WorldRepairSolution())->setWorldName($this->getWorldName()));
        $this->addSolution((new FileDeleteSolution())->setRelativePath($this->getWorldName()));
    }
}