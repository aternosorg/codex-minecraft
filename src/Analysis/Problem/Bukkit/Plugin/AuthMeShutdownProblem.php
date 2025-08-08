<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin;

use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\Plugin\AuthMeShutdownSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginConfigureSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class AuthMeShutdownProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin
 */
class AuthMeShutdownProblem extends SpecificPluginProblem
{
    /**
     * Get a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("authme-shutdown-problem");
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/\[AuthMe\] THE SERVER IS GOING TO SHUT DOWN AS DEFINED IN THE CONFIGURATION\!/'];
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
        $this->addSolution((new AuthMeShutdownSolution()));
        $this->addSolution((new PluginConfigureSolution())->setPluginName("AuthMe")->setSuggestedFile("plugins/AuthMe/config.yml"));
        $this->addSolution((new PluginInstallDifferentVersionSolution())->setPluginName("AuthMe"));
        $this->addSolution((new PluginRemoveSolution())->setPluginName("AuthMe"));
    }
}