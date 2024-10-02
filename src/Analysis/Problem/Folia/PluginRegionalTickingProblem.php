<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Folia;

use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\BukkitPluginFileProblem;
use Aternos\Codex\Minecraft\Analysis\Solution\Folia\InstallNonRegionalTickingSoftwareSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class PluginRegionalTickingProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Folia
 */
class PluginRegionalTickingProblem extends BukkitPluginFileProblem
{

    /**
     * Get a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-regional-ticking-problem", [
            "plugin-name" => $this->getPluginName()
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/Could not load plugin \'((?!\.jar).*\.jar)\' in folder \'([^\']+)\''
            . '\norg.bukkit.plugin.InvalidPluginException: Plugin (\w+) v(?:[^\n]*) is not marked as supporting regionised multithreading/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        parent::setMatches($matches, $patternKey);

        $this->addSolution(new InstallNonRegionalTickingSoftwareSolution());
    }

}