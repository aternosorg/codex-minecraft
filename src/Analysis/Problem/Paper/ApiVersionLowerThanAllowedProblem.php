<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Paper\ChangeMinimumAllowedApiVersionSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class ApiVersionLowerThanAllowedProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Paper
 */
class ApiVersionLowerThanAllowedProblem extends PaperProblem
{
    protected ?string $pluginName = null;
    protected ?string $pluginApiVersion = null;

    /**
     * Get a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-api-version-lower-than-allowed-problem", [
            "plugin-name" => $this->getPluginName()
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/Could not load plugin \'((?!\.jar).*)\.jar\' in folder \'[^\']+\''
            . '\norg.bukkit.plugin.InvalidPluginException: Plugin API version (\d+\.\d+) is lower than the minimum allowed version\. Please update or replace it\./'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->pluginName = $matches[1];
        $this->pluginApiVersion = $matches[2];

        $this->addSolution((new PluginRemoveSolution())->setPluginName($this->getPluginName()));
        $this->addSolution((new PluginInstallDifferentVersionSolution())->setPluginName($this->getPluginName()));
        $this->addSolution((new ChangeMinimumAllowedApiVersionSolution())->setApiVersion($this->getPluginApiVersion()));
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
    public function getPluginApiVersion(): ?string
    {
        return $this->pluginApiVersion;
    }
}