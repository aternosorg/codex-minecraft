<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Paper\PaperRenamePluginSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Paper refused a plugin because its name is reserved or contains a space.
 */
class RestrictedPluginNameProblem extends PaperProblem
{
    protected ?string $pluginName = null;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        if ($this->pluginName === null) {
            return Translator::getInstance()->getTranslation("restricted-plugin-name-unknown-problem");
        }

        return Translator::getInstance()->getTranslation("restricted-plugin-name-problem", [
            "plugin-name" => $this->pluginName
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Restricted name, cannot use (.+?) as a plugin name\./'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $name = trim($matches[1], "'");

        // Paper 26.3 formats the annotation instead of the actual name for reserved
        // Paper plugin names, and the space message never contains the name at all.
        if (str_contains($name, '@io.papermc') || str_starts_with($name, '0x20')) {
            $name = null;
        }

        $this->pluginName = $name;
        $this->addSolution(new PaperRenamePluginSolution($this->pluginName));
    }

    /**
     * @return string|null
     */
    public function getPluginName(): ?string
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
