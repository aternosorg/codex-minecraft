<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Fabric;

use Aternos\Codex\Minecraft\Analysis\Solution\MinecraftSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Update the Fabric Loader itself, which is part of the installation and not a file in the mods folder.
 */
class FabricLoaderUpdateSolution extends MinecraftSolution
{
    /**
     * @param string $version
     */
    public function __construct(protected string $version)
    {
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("fabric-loader-update-solution", ["loader-version" => $this->getVersion()]);
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return $this
     */
    public function setVersion(string $version): static
    {
        $this->version = $version;
        return $this;
    }
}
