<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

class ServerInstallDifferentVersionSolution extends BukkitSolution
{

    /**
     * @var string
     */
    protected $softwareVersion;

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
    public function setSoftwareVersion(string $softwareVersion)
    {
        $this->softwareVersion = $softwareVersion;
        return $this;
    }

    /**
     * Get the solution as a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("server-install-different-version-solution", ["software-version" => $this->getSoftwareVersion()]);
    }
}