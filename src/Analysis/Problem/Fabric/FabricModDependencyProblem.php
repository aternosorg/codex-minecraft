<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class ModDependencyProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Fabric
 */
class FabricModDependencyProblem extends FabricModProblem
{
    /**
     * @var string
     */
    protected $dependency;

    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        $mods = "'" . $this->getDependency() . "'";

        return Translator::getInstance()->getTranslation("mod-dependency-problem", ["mod-name" => $this->getModName(), "dependency-mod-name" => $mods]);
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
            'short-error' => '/net\.fabricmc\.loader\.discovery\.ModResolutionException: Could not find required mod: '. static::$modNamePattern .' requires {'. static::$modIDPattern .' @ \[([^\]]+)\]}/',
            'any' => "/\s- Mod ". static::$modNamePattern ." requires any version of mod ". static::$modIDPattern .", which is missing!\n/",
            'minimum' => "/\s- Mod ". static::$modNamePattern ." requires version ([^ ]+) or later of mod ". static::$modIDPattern .", which is missing!\n/",
            'any-after' => "/\s- Mod ". static::$modNamePattern ." requires any version after ([^ ]+) of mod ". static::$modIDPattern .", which is missing!\n/",
            'any-before' => "/\s- Mod ". static::$modNamePattern ." requires any version before ([^ ]+) of mod ". static::$modIDPattern .", which is missing!\n/",
            'specific' => "/\s- Mod ". static::$modNamePattern ." requires version ([^ ]+) of mod ". static::$modIDPattern .", which is missing!\n/"
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
            case 'short-error':
                $this->modName = $matches[1];
                $this->dependency = $matches[5];
                $solution = (new ModInstallSolution())->setModName($matches[5]);
                if ($matches[6] != '*') {
                    $solution->setModVersion($matches[6]);
                }
                $this->addSolution($solution);
                break;

            case 'any':
                $this->modName = $matches[2];
                $this->dependency = $matches[5];
                $this->addSolution((new ModInstallSolution())->setModName($matches[5]));
                break;

            case 'minimum':
                $this->modName = $matches[2];
                $this->dependency = $matches[6];
                $this->addSolution((new ModInstallSolution())->setModName($matches[6])->setModVersion(">=" . $matches[5]));
                break;

            case 'any-after':
                $this->modName = $matches[2];
                $this->dependency = $matches[6];
                $this->addSolution((new ModInstallSolution())->setModName($matches[6])->setModVersion(">" . $matches[5]));
                break;

            case 'any-before':
                $this->modName = $matches[2];
                $this->dependency = $matches[6];
                $this->addSolution((new ModInstallSolution())->setModName($matches[6])->setModVersion("<" . $matches[5]));
                break;

            case 'specific':
                $this->modName = $matches[2];
                $this->dependency = $matches[6];
                $this->addSolution((new ModInstallSolution())->setModName($matches[6])->setModVersion($matches[5]));
                break;

        }
    }

    /**
     * @return string
     */
    public function getDependency(): String
    {
        return $this->dependency;
    }

    /**
     * @param static $insight
     * @return bool
     */
    public function isEqual($insight): bool
    {
        return parent::isEqual($insight) && $this->getDependency() == $insight->getDependency();
    }
}
