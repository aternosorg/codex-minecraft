<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

/**
 * Class FabricModProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Fabric
 */
abstract class FabricModProblem extends FabricProblem
{
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
     * @param static $insight
     * @return bool
     */
    public function isEqual($insight): bool
    {
        return parent::isEqual($insight) && $this->getModName() === $insight->getModName();
    }
}
