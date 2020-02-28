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
    /**
     * @var string
     */
    protected $modFileName;

    /**
     * @var string
     */
    protected $modVersion;

    /**
     * @var string
     */
    protected $modId;

    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-fatal-problem", ["mod-name" => $this->getModName()]);
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
        return [
            '/\s*U[LCHIJAD]*E\s+(\w+)\{([^\}]+)\} \[([^\]]+)\] \(([^\)]+)\)/',
            '/Loading errors encountered: \[\n([^\(]+) \(([^\)]+)\) has failed to load correctly/'
        ];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param $patternKey
     * @return mixed
     */
    public function setMatches(array $matches, $patternKey)
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
     * @return string
     */
    public function getModFileName(): string
    {
        return $this->modFileName;
    }

    /**
     * @return string
     */
    public function getModVersion(): string
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