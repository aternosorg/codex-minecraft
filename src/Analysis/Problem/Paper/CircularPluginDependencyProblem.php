<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Paper\PaperRemoveDependencySolution;
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
        if ($this->cycle === "") {
            return Translator::getInstance()->getTranslation("circular-plugin-dependency-unknown-problem");
        }

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
            '/Circular load order:\n\s*(\S+(?: -> \S+)+)/',
            '/Cannot import plugin that causes cyclic dependencies!/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->cycle = $matches[1] ?? "";

        $this->addSolution(new PaperRemoveDependencySolution($this->cycle));
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
