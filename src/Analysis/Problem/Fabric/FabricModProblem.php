<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Analysis\InsightInterface;

abstract class FabricModProblem extends FabricProblem
{
    /**
     * @var array<string, string> Mod name replacements (e.g. "fabric" to "FabricAPI")
     */
    protected const array MOD_NAME_REPLACEMENTS = ["fabric" => "FabricAPI"];

    protected static string $modNamePattern = "(?:'([^\']+)' \((?:[^\)]+)\)|([\w-]+))";
    protected static string $modIDPattern = "([^ ,]+)";

    protected string $modName;

    /**
     * @return string
     */
    public function getModName(): string
    {
        return $this->modName;
    }

    /**
     * @param string $modName
     * @return $this
     */
    protected function setModName(string $modName): static
    {
        $this->modName = $this->getReplacedModName($modName);
        return $this;
    }

    /**
     * @param string $modName
     * @return string
     */
    protected function getReplacedModName(string $modName): string
    {
        return static::MOD_NAME_REPLACEMENTS[$modName] ?? $modName;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return parent::isEqual($insight)
            && $insight instanceof static
            && $this->getModName() === $insight->getModName();
    }
}
