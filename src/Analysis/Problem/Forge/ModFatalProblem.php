<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class ModFatalProblem extends ModProblem
{
    protected string $modId;

    protected ?string $modFileName = null;
    protected ?string $modVersion = null;

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
            'mod-state' => '/\s*U[LCHIJAD]*E\s+(\w+)\{([^\}]+)\} \[([^\]]+)\] \(([^\)]+)\)/',
            // client-only causes are handled by ClientOnlyModProblem
            'failed-to-load' => '/^\s*([^\(\n]+) \(([^\)]+)\) has failed to load correctly(?!\n' . ClientOnlyModProblem::CLIENT_ONLY_CAUSE . ')/m'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        switch ($patternKey) {
            case 'mod-state':
                $this->modId = $matches[1];
                $this->modVersion = $matches[2];
                $this->modName = $matches[3];
                $this->modFileName = $matches[4];
                $this->addSolution(new FileDeleteSolution("mods/" . $this->getModFileName()));
                break;
            case 'failed-to-load':
                $this->modId = $matches[2];
                $this->modName = $matches[1];
                $this->addSolution(new ModRemoveSolution($this->getModName()));
                break;
        }

        $this->addSolution(new ModInstallDifferentVersionSolution($this->getModName()));
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
     * @return string
     */
    public function getModId(): string
    {
        return $this->modId;
    }
}
