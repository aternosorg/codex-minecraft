<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallDifferentVersionSolution;
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
        $this->modId = $matches[1];
        $this->modVersion = $matches[2];
        $this->modName = $matches[3];
        $this->modFileName = $matches[4];

        $this->addSolution((new FileDeleteSolution())->setRelativePath("mods/" . $this->getModFileName()));
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