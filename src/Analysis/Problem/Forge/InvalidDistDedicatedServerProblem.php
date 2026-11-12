<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class InvalidDistDedicatedServerProblem extends ModProblem
{
    protected ?string $modFileName = null;
    protected ?string $modVersion = null;
    protected ?string $modId = null;

    /**
     * Get a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-invalid-dist-dedicated-server-problem", ["mod-name" => $this->getModName()]);
    }

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return [
            '/^\s*Mod file: (.*)'
            . '\n\s*Failure message: ([^\(\n]+) \(([^\)]+)\) has failed to load correctly'
            . '\n\s*java\.lang\.BootstrapMethodError: java\.lang\.RuntimeException: '
            . 'Attempted to load class [\w\/]+ for invalid dist DEDICATED_SERVER'
            . '\n\s*Mod version: (.*)/'
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
        $this->modFileName = $matches[1];
        $this->modName = $matches[2];
        $this->modId = $matches[3];
        $this->modVersion = $matches[4];

        $this->addSolution((new FileDeleteSolution())->setRelativePath("mods/" . $this->getModFileName()));
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
