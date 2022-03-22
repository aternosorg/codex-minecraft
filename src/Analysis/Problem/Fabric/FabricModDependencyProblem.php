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
            'any' => "/\s*- Mod ". static::$modNamePattern ."(?: [^ ]+)? requires any version of (?:mod )?". static::$modIDPattern .", which is missing!/",
            'minimum' => "/\s*- Mod ". static::$modNamePattern ."(?: [^ ]+)? requires version ([^ ]+) or later of (?:mod )?". static::$modIDPattern .", which is missing!/",
            'any-after' => "/\s*- Mod ". static::$modNamePattern ."(?: [^ ]+)? requires any version after ([^ ]+) of (?:mod )?". static::$modIDPattern .", which is missing!/",
            'any-before' => "/\s*- Mod ". static::$modNamePattern ."(?: [^ ]+)? requires any version before ([^ ]+) of (?:mod )?". static::$modIDPattern .", which is missing!/",
            'specific' => "/\s*- Mod ". static::$modNamePattern ."(?: [^ ]+)? requires version ([^ ]+) of (?:mod )?". static::$modIDPattern .", which is missing!/"
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
                $this->setModName($matches[2]);
                $this->setDependency($matches[3]);
                $solution = (new ModInstallSolution())->setModName($this->getDependency());
                if ($matches[4] != '*') {
                    $solution->setModVersion($matches[4]);
                }
                $this->addSolution($solution);
                return;

            case 'any':
                $this->setModName($matches[1]);
                $this->setDependency($matches[3]);
                $this->addSolution((new ModInstallSolution())->setModName($this->getDependency()));
                return;

            case 'minimum':
                $symbol = ">=";
                break;

            case 'any-after':
                $symbol = ">";
                break;

            case 'any-before':
                $symbol = "<";
                break;

            default:
                $symbol = "";
                break;
        }

        $this->setModName($matches[1]);
        $this->setDependency($matches[4]);
        $this->addSolution((new ModInstallSolution())->setModName($this->getDependency())->setModVersion($symbol . $matches[3]));
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
