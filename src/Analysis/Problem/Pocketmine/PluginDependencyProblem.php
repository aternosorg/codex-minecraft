<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine;

use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginInstallSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class PluginDependencyProblem extends PluginProblem
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
        return ["/Could not load plugin \'(.+)\'\: Unknown dependency\: (.+)/"];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->pluginName = $matches[1];
        $this->dependencyPluginName = $matches[2];

        $this->addSolution(new PluginInstallSolution($this->getDependencyPluginName()));
        $this->addSolution(new PluginRemoveSolution($this->getPluginName()));
    }
}