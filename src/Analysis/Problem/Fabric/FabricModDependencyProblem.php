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
    protected static $modNamePattern = "('([^\']+)' \(([^\)]+)\)|(\w+))";

    /**
     * @var string
     */
    protected static $modIDPattern = "([^ ,]+)";

    /**
     * @var array
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
            '/net\.fabricmc\.loader\.discovery\.ModResolutionException: Could not find required mod: '. static::$modNamePattern .' requires {'. static::$modIDPattern .' @ \[([0-9*\.]+)\]}/',
            "/\s- Mod ". static::$modNamePattern ." requires any version of mod ". static::$modIDPattern .", which is missing!\n/",
            "/\s- Mod ". static::$modNamePattern ." requires version ([0-9\.]+) or later of mod ". static::$modIDPattern .", which is missing!\n/",
            "/\s- Mod ". static::$modNamePattern ." requires any version after ([0-9\.]+) of mod ". static::$modIDPattern .", which is missing!\n/",
            "/\s- Mod ". static::$modNamePattern ." requires any version before ([0-9\.]+) of mod ". static::$modIDPattern .", which is missing!\n/",
            "/\s- Mod ". static::$modNamePattern ." requires version ([0-9\.]+) of mod ". static::$modIDPattern .", which is missing!\n/"
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
                $this->modName = $matches[1];
                $this->dependency[] = $matches[5];
                $solution = (new ModInstallSolution())->setModName($matches[5]);
                if ($matches[6] != '*') {
                    $solution->setModVersion($matches[6]);
                }
                $this->addSolution($solution);
                break;
            case 1:
                $this->modName = $matches[2];
                $this->dependency[] = $matches[5];
                $this->addSolution((new ModInstallSolution())->setModName($matches[5]));
                break;

            case 2:
                $this->modName = $matches[2];
                $this->dependency[] = $matches[6];
                $this->addSolution((new ModInstallSolution())->setModName($matches[6])->setModVersion(">=" . $matches[5]));
                break;

            case 3:
                $this->modName = $matches[2];
                $this->dependency[] = $matches[6];
                $this->addSolution((new ModInstallSolution())->setModName($matches[6])->setModVersion(">" . $matches[5]));
                break;

            case 4:
                $this->modName = $matches[2];
                $this->dependency[] = $matches[6];
                $this->addSolution((new ModInstallSolution())->setModName($matches[6])->setModVersion("<" . $matches[5]));
                break;

            case 5:
                $this->modName = $matches[2];
                $this->dependency[] = $matches[6];
                $this->addSolution((new ModInstallSolution())->setModName($matches[6])->setModVersion($matches[5]));
                break;

        }
    }

    /**
     * @return array
     */
    public function getDependency(): array
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
