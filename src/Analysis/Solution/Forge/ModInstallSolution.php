<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Forge;

use Aternos\Codex\Minecraft\Translator\Translator;

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
        if ($this->getModVersion() === null) {
            return Translator::getInstance()->getTranslation("mod-install-solution", ["mod-name" => $this->getModName()]);
        } else {
            return Translator::getInstance()->getTranslation("mod-install-solution-with-version", [
                "mod-name" => $this->getModName(),
                "mod-version" => $this->getModVersion()
            ]);
        }
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