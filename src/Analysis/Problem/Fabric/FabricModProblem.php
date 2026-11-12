<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Analysis\InsightInterface;

abstract class FabricModProblem extends FabricProblem
{
    /**
     * @var array<string, string> Mod name replacements (e.g. "fabric" to "FabricAPI")
     */
    protected const array MOD_NAME_REPLACEMENTS = ["fabric" => "FabricAPI"];

    protected static string $modIDPattern = "([^ ,]+)";

    protected string $modName;

    /**
     * Matches a mod as "'Name' (id)" or as a plain id and captures the name or id in the named group:
     * 'Fabric API' (fabric)
     * fabric
     *
     * The branch reset group `(?|...)` makes both alternatives capture into the same group,
     * and the group name is a parameter, so that one pattern can contain several mod names.
     *
     * @param string $group name of the capturing group
     * @return string
     */
    protected static function getModNamePattern(string $group = "mod"): string
    {
        return "(?|'(?!Minecraft')(?<" . $group . ">[^']+)' \\([^)]+\\)|(?<" . $group . ">[\\w-]+))";
    }

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
