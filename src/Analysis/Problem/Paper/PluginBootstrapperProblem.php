<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A Paper plugin bootstrapper threw an exception and the plugin was skipped.
 */
class PluginBootstrapperProblem extends PaperProblem
{
    protected string $pluginPath;
    protected string $pluginName;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-bootstrapper-problem", [
            "plugin-path" => $this->pluginPath
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Failed to run bootstrapper for (.+)\. This plugin will not be loaded\./'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->pluginPath = $matches[1];
        $this->pluginName = basename($this->pluginPath, ".jar");

        $this->addSolution(new PluginInstallDifferentVersionSolution($this->pluginName));
        $this->addSolution(new PluginRemoveSolution($this->pluginName));
    }

    /**
     * @return string
     */
    public function getPluginPath(): string
    {
        return $this->pluginPath;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getPluginPath() === $insight->getPluginPath();
    }
}
