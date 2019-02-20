<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin;

use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginConfigureSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class PermissionsExConfigProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin
 */
class PermissionsExConfigProblem extends SpecificPluginProblem
{
    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("pex-config-problem");
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
        return ['/Your configuration must be fixed before PEX will enable/'];
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
        $this->addSolution((new PluginConfigureSolution())->setPluginName("PermissionsEx")->setSuggestedFile("plugins/PermissionsEx/permissions.yml"));
        $this->addSolution((new PluginRemoveSolution())->setPluginName("PermissionsEx"));
    }
}