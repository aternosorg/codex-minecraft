<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin;

use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\Plugin\AuthMeShutdownSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginConfigureSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class AuthMeShutdownProblem extends SpecificPluginProblem
{
    /**
     * @inheritDoc
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
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution(new AuthMeShutdownSolution());
        $this->addSolution(new PluginConfigureSolution("AuthMe", "plugins/AuthMe/config.yml"));
        $this->addSolution(new PluginInstallDifferentVersionSolution("AuthMe"));
        $this->addSolution(new PluginRemoveSolution("AuthMe"));
    }
}