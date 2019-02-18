<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Forge;

/**
 * Class ModSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Forge
 */
abstract class ModSolution extends ForgeSolution
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
     * @param string $modName
     * @return $this
     */
    public function setModName(string $modName)
    {
        $this->modName = $modName;
        return $this;
    }
}