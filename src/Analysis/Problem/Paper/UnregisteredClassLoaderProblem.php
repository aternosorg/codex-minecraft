<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginProblem;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A plugin was enabled through a classloader that Paper does not know about.
 * This usually means that the plugin loads other plugins on its own, which bypasses Paper's plugin management.
 */
class UnregisteredClassLoaderProblem extends PaperProblem
{
    protected string $pluginName;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("unregistered-classloader-problem", [
            "plugin-name" => $this->pluginName
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Enabled plugin with unregistered ConfiguredPluginClassLoader (' . PluginProblem::PLUGIN_NAME . ')/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->pluginName = $matches[1];

        $this->addSolution(new PluginInstallDifferentVersionSolution($this->pluginName));
        $this->addSolution(new PluginRemoveSolution($this->pluginName));
    }

    /**
     * @return string
     */
    public function getPluginName(): string
    {
        return $this->pluginName;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getPluginName() === $insight->getPluginName();
    }
}
