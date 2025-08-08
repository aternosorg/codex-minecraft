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
     * @param string $modName
     */
    public function __construct(protected string $modName)
    {
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
    public function setModName(string $modName): static
    {
        $this->modName = $modName;
        return $this;
    }
}