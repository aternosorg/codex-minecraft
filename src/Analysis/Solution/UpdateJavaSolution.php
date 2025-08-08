<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class UpdateJavaSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution
 */
class UpdateJavaSolution extends MinecraftSolution
{
    /**
     * @param string $version
     */
    public function __construct(protected string $version)
    {
    }

    /**
     * Get the solution as a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("change-java-version-solution", ["java-version" => $this->getVersion()]);
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