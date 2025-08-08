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
     * @param string $modName
     * @param string|null $modVersion
     */
    public function __construct(string $modName, protected ?string $modVersion = null)
    {
        parent::__construct($modName);
    }

    /**
     * Get the solution as a human-readable message
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
    public function getModVersion(): ?string
    {
        return $this->modVersion;
    }

    /**
     * @param string $modVersion
     * @return $this
     */
    public function setModVersion(string $modVersion): static
    {
        $this->modVersion = $modVersion;
        return $this;
    }
}