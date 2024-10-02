<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Folia;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Folia\InstallNonRegionalTickingSoftwareSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class PluginRegionalTickingProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Folia
 */
class PluginRegionalTickingProblem extends FoliaProblem
{
    protected ?string $pluginName = null;
    protected ?string $pluginPath = null;

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
            '/Could not load plugin \'(.*\.jar)\' in folder \'[^\']+\'\norg.bukkit.plugin.InvalidPluginException: Plugin (\w+) v(?:[^\n]*) is not marked as supporting regionised multithreading/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->pluginPath = str_replace("plugins/.paper-remapped/", "plugins/", $matches[1]);
        $this->pluginName = $matches[2];

        $this->addSolution((new FileDeleteSolution())->setRelativePath($this->getPluginPath()));
        $this->addSolution(new InstallNonRegionalTickingSoftwareSolution());
    }

    /**
     * @return string|null
     */
    public function getPluginName(): ?string
    {
        return $this->pluginName;
    }

    /**
     * @return string|null
     */
    public function getPluginPath(): ?string
    {
        return $this->pluginPath;
    }
}