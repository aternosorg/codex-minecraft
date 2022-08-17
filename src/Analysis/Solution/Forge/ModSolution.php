<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Forge;

/**
 * Class ModSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Forge
 */
abstract class ModSolution extends ForgeSolution
{
    protected ?string $modName = null;

    /**
     * @return string|null
     */
    public function getModName(): ?string
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