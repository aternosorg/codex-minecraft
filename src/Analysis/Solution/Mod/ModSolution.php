<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Mod;

use Aternos\Codex\Minecraft\Analysis\Solution\MinecraftSolution;

abstract class ModSolution extends MinecraftSolution
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