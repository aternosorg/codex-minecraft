<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Fabric;

use Aternos\Codex\Minecraft\Analysis\Solution\MinecraftSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Provide the official Minecraft server jar where Fabric's server launcher expects it,
 * or point the launcher to the jar through "serverJar" in fabric-server-launcher.properties.
 */
class FabricServerJarProvideSolution extends MinecraftSolution
{
    /**
     * @param string $path the path where the launcher expects the server jar
     */
    public function __construct(protected string $path)
    {
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("fabric-server-jar-provide-solution", ["file-path" => $this->getPath()]);
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     * @return $this
     */
    public function setPath(string $path): static
    {
        $this->path = $path;
        return $this;
    }
}
