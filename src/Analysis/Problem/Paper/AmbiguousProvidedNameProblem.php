<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Two plugins use the same provided plugin name.
 */
class AmbiguousProvidedNameProblem extends PaperProblem
{
    protected string $name;
    protected string $firstPlugin;
    protected string $secondPlugin;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("ambiguous-provided-name-problem", [
            "name" => $this->name,
            "first-plugin" => $this->firstPlugin,
            "second-plugin" => $this->secondPlugin
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/`([^\']+)\' is provided by both `([^\']+)\' and `([^\']+)\'/',
            '/([^ ]+) provides `([^\']+)\' while this is also the name of `([^\']+)\' in `([^\']+)\'/',
            '/Ambiguous plugin name `([^\']+)\'\. It is also provided by `([^\']+)\'/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        if ($patternKey === 0) {
            $this->name = $matches[1];
            $this->firstPlugin = $matches[2];
            $this->secondPlugin = $matches[3];
        } elseif ($patternKey === 1) {
            $this->firstPlugin = $matches[1];
            $this->name = $matches[2];
            $this->secondPlugin = $matches[3];
        } else {
            $this->name = $matches[1];
            $this->firstPlugin = "another plugin";
            $this->secondPlugin = $matches[2];
        }

        $this->addSolution(new PluginRemoveSolution($this->firstPlugin));
        $this->addSolution(new PluginRemoveSolution($this->secondPlugin));
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getFirstPlugin(): string
    {
        return $this->firstPlugin;
    }

    /**
     * @return string
     */
    public function getSecondPlugin(): string
    {
        return $this->secondPlugin;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getName() === $insight->getName()
            && $this->getFirstPlugin() === $insight->getFirstPlugin()
            && $this->getSecondPlugin() === $insight->getSecondPlugin();
    }
}
