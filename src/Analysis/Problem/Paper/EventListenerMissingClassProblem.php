<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A listener of a plugin references an event parameter class that does not exist at runtime
 * (for example because an API dependency is missing or the plugin was built against a different API version).
 * Paper skips the listener and continues with the plugin.
 */
class EventListenerMissingClassProblem extends PaperProblem
{
    protected string $listener;
    protected string $missingClass;
    protected ?string $pluginName = null;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("event-listener-missing-class-problem", [
            "listener" => $this->listener,
            "missing-class" => $this->missingClass,
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/(?:\[(\S+)\] )?Failed to register events for (?:class )?(\S+) because (\S+) does not exist\./',
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->pluginName = ($matches[1] ?? '') !== '' ? $matches[1] : null;
        $this->listener = $matches[2];
        $this->missingClass = $matches[3];

        if ($this->pluginName !== null) {
            $this->addSolution(new PluginInstallDifferentVersionSolution($this->pluginName));
            $this->addSolution(new PluginRemoveSolution($this->pluginName));
        }
    }

    /**
     * @return string
     */
    public function getListener(): string
    {
        return $this->listener;
    }

    /**
     * @return string
     */
    public function getMissingClass(): string
    {
        return $this->missingClass;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getListener() === $insight->getListener()
            && $this->getMissingClass() === $insight->getMissingClass();
    }
}
