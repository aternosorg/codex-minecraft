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
     * Matches a mod that ended in the errored state in the old Forge mod state table:
     * UCE Techguns{0.1.2_alphatest4.1} [Techguns] (Techguns.beta.1.2_alphatest4.1.jar)
     *
     * or a mod that failed to load on newer Forge versions:
     * Oculus (oculus) has failed to load correctly
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            'mod-state' => '/\s*U[LCHIJAD]*E\s+(?<modId>\w+)\{(?<modVersion>[^\}]+)\} \[(?<modName>[^\]]+)\] \((?<modFileName>[^\)]+)\)/',
            // client-only causes are handled by ClientOnlyModProblem
            'failed-to-load' => '/^\s*(?<modName>[^\(\n]+) \((?<modId>[^\)]+)\) has failed to load correctly(?!\n' . ClientOnlyModProblem::CLIENT_ONLY_CAUSE . ')/m'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->modId = $matches['modId'];
        $this->modName = $matches['modName'];

        switch ($patternKey) {
            case 'mod-state':
                $this->modVersion = $matches['modVersion'];
                $this->modFileName = $matches['modFileName'];
                $this->addSolution(new FileDeleteSolution("mods/" . $this->getModFileName()));
                break;
            case 'failed-to-load':
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
