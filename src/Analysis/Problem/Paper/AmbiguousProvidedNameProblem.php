<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Multiple plugins use the same plugin name, e.g. through the "provides" field.
 */
class AmbiguousProvidedNameProblem extends PaperProblem
{
    protected string $name;

    /**
     * @var string[]
     */
    protected array $plugins = [];

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-name-conflict-problem", [
            "name" => $this->name
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/`(?<name>[^\']+)\' is provided by both `(?<plugin>[^\']+)\' and `(?<otherPlugin>[^\']+)\'/',
            '/(?<plugin>[^ ]+) provides `(?<name>[^\']+)\' while this is also the name of `(?<otherPlugin>[^\']+)\' in `[^\']+\'/',
            '/Ambiguous plugin name `(?<name>[^\']+)\'\. It is also provided by `(?<plugin>[^\']+)\'/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->name = $matches["name"];
        $this->plugins = [$matches["plugin"]];
        if (isset($matches["otherPlugin"])) {
            $this->plugins[] = $matches["otherPlugin"];
        }

        foreach ($this->plugins as $plugin) {
            $this->addSolution(new PluginRemoveSolution($plugin));
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string[]
     */
    public function getPlugins(): array
    {
        return $this->plugins;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getName() === $insight->getName()
            && $this->getPlugins() === $insight->getPlugins();
    }
}
