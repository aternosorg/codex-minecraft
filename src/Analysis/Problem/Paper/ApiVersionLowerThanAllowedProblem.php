<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginFileProblem;
use Aternos\Codex\Minecraft\Analysis\Solution\Paper\ChangeMinimumAllowedApiVersionSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class ApiVersionLowerThanAllowedProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Paper
 */
class ApiVersionLowerThanAllowedProblem extends PluginFileProblem
{
    protected ?string $pluginApiVersion = null;

    /**
     * @inheritDoc
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
            '/Could not load plugin \'((?!\.jar).*\.jar)\' in folder \'([^\']+)\''
            . '\norg.bukkit.plugin.InvalidPluginException: Plugin API version (\d+\.\d+) is lower than the minimum allowed version\. Please update or replace it\./'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        parent::setMatches($matches, $patternKey);

        $this->pluginApiVersion = $matches[3];
        $this->addSolution((new ChangeMinimumAllowedApiVersionSolution())->setApiVersion($this->getPluginApiVersion()));
    }

    /**
     * @return string|null
     */
    public function getPluginApiVersion(): ?string
    {
        return $this->pluginApiVersion;
    }
}