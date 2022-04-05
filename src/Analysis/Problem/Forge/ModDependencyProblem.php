<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class ModDependencyProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Forge
 */
class ModDependencyProblem extends ModProblem
{
    /**
     * @var array
     */
    protected $dependencyMods = [];

    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        $mods = "'" . implode("', '", $this->getDependencyMods()) . "'";

        if (count($this->getDependencyMods()) === 1) {
            return Translator::getInstance()->getTranslation("mod-dependency-problem", ["mod-name" => $this->getModName(), "dependency-mod-name" => $mods]);
        } else {
            return Translator::getInstance()->getTranslation("mod-dependency-problem-plural", ["mod-name" => $this->getModName(), "dependency-mod-list" => $mods]);
        }
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
            '/The mod \S+ \(([^\)]+)\) requires mods \[([^\]]+)\] to be available/',
            '/net\.minecraftforge\.fml\.common\.MissingModsException: Mod \S+ \((.+)\) requires (.+)/',
            '/net\.minecraftforge\.fml\.ModLoadingException: Mod \§.([^\§]+)\§. requires \§.([^\§]+)\§. \§.([^ \§]+)[^\§]*\§./',
            '/net\.minecraftforge\.fml\.LoadingFailedException: Loading errors encountered: \[\n(?:.*\n)*Mod \§.([^\§]+)§. requires \§.([^\§]+)\§. \§.([^ \§]+)[^\§]*\§./'
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
        $this->modName = $matches[1];

        switch ($patternKey) {
            case 0:
                $this->dependencyMods[] = $matches[2];
                $this->addSolution((new ModInstallSolution())->setModName($matches[2]));
                break;
            case 1:
                $count = preg_match_all('/(\w+)@\[([0-9\.]+)/', $matches[2], $dependencyMatches);
                if (!$count) {
                    if (preg_match('/\[(\S+)\]/', $matches[2], $dependencyMatches)) {
                        $this->dependencyMods[] = $dependencyMatches[1];
                        $this->addSolution((new ModInstallSolution())->setModName($dependencyMatches[1]));
                    }
                    return;
                }

                for ($i = 0; $i < $count; $i++) {
                    $name = $dependencyMatches[1][$i];
                    $version = $dependencyMatches[2][$i];
                    $this->dependencyMods[] = $name;
                    $this->addSolution((new ModInstallSolution())->setModName($name)->setModVersion($version));
                }
                break;
            case 2:
            case 3:
                $this->dependencyMods[] = $matches[2];
                $this->addSolution((new ModInstallSolution())->setModName($matches[2])->setModVersion($matches[3]));
                break;
        }
    }

    /**
     * @return array
     */
    public function getDependencyMods(): array
    {
        return $this->dependencyMods;
    }

    /**
     * @param static $insight
     * @return bool
     */
    public function isEqual($insight): bool
    {
        return parent::isEqual($insight) && $this->getDependencyMods() == $insight->getDependencyMods();
    }
}