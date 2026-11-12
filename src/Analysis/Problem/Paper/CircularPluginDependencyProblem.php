<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Paper detected a cycle in the plugin dependency graph.
 */
class CircularPluginDependencyProblem extends PaperProblem
{
    protected string $cycle = "";

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("circular-plugin-dependency-problem", [
            "cycle" => $this->cycle
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/\[LoadOrderTree\] \d+\) (\S+(?: -> \S+)+)/',
            '/Circular load order:\n\s*(\S+(?: -> \S+)+)/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->cycle = $matches[1];

        // "A -> B -> A" contains the first plugin twice
        $pluginNames = array_unique(explode(" -> ", $this->cycle));
        foreach ($pluginNames as $pluginName) {
            $this->addSolution(new PluginRemoveSolution($pluginName));
        }
    }

    /**
     * @return string
     */
    public function getCycle(): string
    {
        return $this->cycle;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getCycle() === $insight->getCycle();
    }
}
