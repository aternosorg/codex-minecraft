<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A mod is written in another JVM language like Kotlin or Scala and needs a language adapter mod,
 * but does not declare it as a dependency, and the adapter mod is not installed.
 * Fabric Loader stops when it sets up the entrypoints of the mod.
 */
class FabricLanguageAdapterProblem extends FabricModProblem
{
    /**
     * @var array<string, string> Names of the mods that provide a language adapter, by adapter name
     */
    protected const array ADAPTER_MOD_NAMES = [
        "kotlin" => "Fabric Language Kotlin",
        "scala" => "Fabric Language Scala"
    ];

    protected string $adapter;

    /**
     * @return string the name of the language adapter, e.g. "kotlin"
     */
    public function getAdapter(): string
    {
        return $this->adapter;
    }

    /**
     * @return string the name of the mod that provides the adapter, or the adapter name if it is unknown
     */
    public function getAdapterModName(): string
    {
        return static::ADAPTER_MOD_NAMES[$this->getAdapter()] ?? $this->getAdapter();
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-language-adapter-problem", [
            "mod-name" => $this->getModName(),
            "adapter" => $this->getAdapter()
        ]);
    }

    /**
     * Matches the adapter and the ID of the mod that uses it:
     * Caused by: java.lang.Exception: Could not find adapter 'kotlin' (mod foo!)
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            "/Could not find adapter '(?<adapter>[^']+)' \(mod (?<mod>[^!\s]+)!\)/"
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->setModName($matches['mod']);
        $this->adapter = $matches['adapter'];
        $this->addSolution(new ModInstallSolution($this->getAdapterModName()));
    }

    /**
     * @inheritDoc
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return parent::isEqual($insight) && $this->getAdapter() === $insight->getAdapter();
    }
}
