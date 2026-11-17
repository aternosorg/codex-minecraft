<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginWithClassInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginWithClassRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * The map renderer of a plugin threw an exception while a map was rendered, so the map is not drawn correctly.
 *
 * The log only names the class of the renderer, not the plugin, but the package of the class usually shows the plugin.
 * The error repeats for every player that holds the map.
 */
class MapRendererProblem extends BukkitProblem
{
    protected string $rendererClass;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("map-renderer-problem", [
            "class-name" => $this->getRendererClass()
        ]);
    }

    /**
     * Matches the error CraftBukkit logs before the exception of the renderer, for example:
     * Could not render map using renderer com.repro.MapRendererPlugin$1
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Could not render map using renderer (?<class>\S+)/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->rendererClass = $matches["class"];
        $this->addSolution(new PluginWithClassInstallDifferentVersionSolution($this->getRendererClass()));
        $this->addSolution(new PluginWithClassRemoveSolution($this->getRendererClass()));
    }

    /**
     * @return string
     */
    public function getRendererClass(): string
    {
        return $this->rendererClass;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getRendererClass() === $insight->getRendererClass();
    }
}
