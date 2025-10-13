<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

class ServerInstallDifferentVersionSolution extends BukkitSolution
{
    /**
     * @param string $softwareVersion
     */
    public function __construct(protected string $softwareVersion)
    {
    }

    /**
     * Returns the suggested server software version that should be installed.
     *
     * @return string
     */
    public function getSoftwareVersion(): string
    {
        return $this->softwareVersion;
    }

    /**
     * Set the suggested server software version that should be installed.
     *
     * @param string $softwareVersion
     * @return $this
     */
    public function setSoftwareVersion(string $softwareVersion): static
    {
        $this->softwareVersion = $softwareVersion;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("server-install-different-version-solution", ["software-version" => $this->getSoftwareVersion()]);
    }
}