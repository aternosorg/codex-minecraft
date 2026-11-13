<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A plugin declared a method annotated with @EventHandler that does not match the required signature
 * (for example because it takes a non-event parameter or is not public). Paper ignores the method.
 */
class InvalidEventHandlerSignatureProblem extends PaperProblem
{
    protected string $pluginName;
    protected string $signature;
    protected string $className;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("invalid-event-handler-signature-problem", [
            "plugin-name" => $this->pluginName,
            "signature" => $this->signature,
            "class-name" => $this->className,
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/(\S+)(?: v?\S+)? attempted to register an invalid EventHandler method signature "(.+)" in (?:class )?(\S+)/',
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->pluginName = $matches[1];
        $this->signature = $matches[2];
        $this->className = $matches[3];

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
     * @return string
     */
    public function getSignature(): string
    {
        return $this->signature;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getPluginName() === $insight->getPluginName()
            && $this->getSignature() === $insight->getSignature();
    }
}
