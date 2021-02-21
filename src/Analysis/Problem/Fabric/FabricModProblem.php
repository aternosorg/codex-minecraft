<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

/**
 * Class FabricModProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Fabric
 */
abstract class FabricModProblem extends FabricProblem
{
    const MOD_NAME_REPLACEMENTS = ["fabric" => "FabricAPI"];

    /**
     * @var string
     */
    protected static $modNamePattern = "('([^\']+)' \(([^\)]+)\)|(\w+))";

    /**
     * @var string
     */
    protected static $modIDPattern = "([^ ,]+)";

    /**
     * @var string
     */
    protected $modName;

    /**
     * @return string
     */
    public function getModName(): string
    {
        return $this->modName;
    }

    /**
     * @param string $modName
     * @return static
     */
    protected function setModName(string $modName): FabricModProblem
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
     * @param static $insight
     * @return bool
     */
    public function isEqual($insight): bool
    {
        return parent::isEqual($insight) && $this->getModName() === $insight->getModName();
    }
}
