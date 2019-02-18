<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

/**
 * Class ModProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Forge
 */
abstract class ModProblem extends ForgeProblem
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