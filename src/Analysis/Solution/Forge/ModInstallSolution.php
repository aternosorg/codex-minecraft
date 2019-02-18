<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Forge;

/**
 * Class ModInstallSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Forge
 */
class ModInstallSolution extends ModSolution
{
    /**
     * @var string
     */
    protected $modVersion;

    /**
     * Get the solution as a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return "Install the mod '" . $this->getModName() . "'" . (($this->getModVersion() !== null) ? " with version '" . $this->getModVersion() . "'" : "") . ".";
    }

    /**
     * @return string|null
     */
    public function getModVersion()
    {
        return $this->modVersion;
    }

    /**
     * @param string $modVersion
     * @return $this
     */
    public function setModVersion(string $modVersion)
    {
        $this->modVersion = $modVersion;
        return $this;
    }
}