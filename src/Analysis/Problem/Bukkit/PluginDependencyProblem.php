<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class PluginDependencyProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit
 */
class PluginDependencyProblem extends PluginFileProblem
{
    protected ?string $dependencyPluginName = null;

    /**
     * @return string|null
     */
    public function getDependencyPluginName(): ?string
    {
        return $this->dependencyPluginName;
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-dependency-problem", [
            "plugin-name" => $this->getPluginName(),
            "dependency-plugin-name" => $this->getDependencyPluginName()
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/Could not load \'(plugins[\/\\\][^\']+\.jar)\' in (?:folder )?\'([^\']+)\''
            . '\norg\.bukkit\.plugin\.UnknownDependencyException\: (?:(\w+)\n|Unknown dependency (\w+)\.)/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        parent::setMatches($matches, $patternKey);

        $this->dependencyPluginName = $matches[3] ?: $matches[4];
        $this->addSolution((new PluginInstallSolution())->setPluginName($this->getDependencyPluginName()));
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getPluginName() === $insight->getPluginName()
            && $this->getDependencyPluginName() === $insight->getDependencyPluginName();
    }
}