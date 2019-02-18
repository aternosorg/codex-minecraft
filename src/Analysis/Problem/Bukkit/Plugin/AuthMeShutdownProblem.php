<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin;

use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\Plugin\AuthMeShutdownSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginConfigureSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;

/**
 * Class AuthMeShutdownProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin
 */
class AuthMeShutdownProblem extends SpecificPluginProblem
{
    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return "The plugin 'AuthMe' fails to load and shuts the server down.";
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
        return ['/\[AuthMe\] THE SERVER IS GOING TO SHUT DOWN AS DEFINED IN THE CONFIGURATION\!/'];
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
        $this->addSolution((new AuthMeShutdownSolution()));
        $this->addSolution((new PluginConfigureSolution())->setPluginName("AuthMe")->setSuggestedFile("plugins/AuthMe/config.yml"));
        $this->addSolution((new PluginInstallDifferentVersionSolution())->setPluginName("AuthMe"));
        $this->addSolution((new PluginRemoveSolution())->setPluginName("AuthMe"));
    }
}