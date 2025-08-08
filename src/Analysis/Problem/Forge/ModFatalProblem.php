<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class ModFatalProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Forge
 */
class ModFatalProblem extends ModProblem
{
    protected ?string $modFileName = null;
    protected ?string $modVersion = null;
    protected ?string $modId = null;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-fatal-problem", ["mod-name" => $this->getModName()]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/\s*U[LCHIJAD]*E\s+(\w+)\{([^\}]+)\} \[([^\]]+)\] \(([^\)]+)\)/',
            '/^\s*([^\(\n]+) \(([^\)]+)\) has failed to load correctly/m'
        ];
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
        switch ($patternKey) {
            case 0:
                $this->modId = $matches[1];
                $this->modVersion = $matches[2];
                $this->modName = $matches[3];
                $this->modFileName = $matches[4];
                $this->addSolution((new FileDeleteSolution())->setRelativePath("mods/" . $this->getModFileName()));
                break;
            case 1:
                $this->modId = $matches[2];
                $this->modName = $matches[1];
                $this->addSolution((new ModRemoveSolution())->setModName($this->getModName()));
                break;
        }

        $this->addSolution((new ModInstallDifferentVersionSolution())->setModName($this->getModName()));
    }

    /**
     * @return string|null
     */
    public function getModFileName(): ?string
    {
        return $this->modFileName;
    }

    /**
     * @return string|null
     */
    public function getModVersion(): ?string
    {
        return $this->modVersion;
    }

    /**
     * @return string|null
     */
    public function getModId(): ?string
    {
        return $this->modId;
    }
}
