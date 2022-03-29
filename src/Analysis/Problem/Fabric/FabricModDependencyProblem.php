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
     */
    public function setMatches(array $matches, $patternKey): void
    {
        switch ($patternKey) {
            case 'short-error':
                $this->setModName($matches[1]);
                $this->setDependency($matches[5]);
                $solution = (new ModInstallSolution())->setModName($this->getDependency());
                if ($matches[6] != '*') {
                    $solution->setModVersion($matches[6]);
                }
                $this->addSolution($solution);
                break;

            case 'any':
                $this->setModName($matches[2]);
                $this->setDependency($matches[5]);
                $this->addSolution((new ModInstallSolution())->setModName($this->getDependency()));
                break;

            case 'minimum':
                $this->setModName($matches[2]);
                $this->setDependency($matches[6]);
                $this->addSolution((new ModInstallSolution())->setModName($this->getDependency())->setModVersion(">=" . $matches[5]));
                break;

            case 'any-after':
                $this->setModName($matches[2]);
                $this->setDependency($matches[6]);
                $this->addSolution((new ModInstallSolution())->setModName($this->getDependency())->setModVersion(">" . $matches[5]));
                break;

            case 'any-before':
                $this->setModName($matches[2]);
                $this->setDependency($matches[6]);
                $this->addSolution((new ModInstallSolution())->setModName($this->getDependency())->setModVersion("<" . $matches[5]));
                break;

            case 'specific':
                $this->setModName($matches[2]);
                $this->setDependency($matches[6]);
                $this->addSolution((new ModInstallSolution())->setModName($this->getDependency())->setModVersion($matches[5]));
                break;

        }
    }

    /**
     * @return string
     */
    public function getDependency(): string
    {
        return $this->dependency;
    }

    /**
     * @param string $dependency
     * @return static
     */
    protected function setDependency(string $dependency): FabricModDependencyProblem
    {
        $this->dependency = $this->getReplacedModName($dependency);
        return $this;
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
