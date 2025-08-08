<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Paper;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class ChangeMinimumAllowedApiVersionSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Paper
 */
class ChangeMinimumAllowedApiVersionSolution extends PaperSolution
{

    /**
     * @param string $apiVersion
     */
    public function __construct(protected string $apiVersion)
    {
    }

    /**
     * @return string
     */
    public function getApiVersion(): string
    {
        return $this->apiVersion;
    }

    /**
     * @param string $apiVersion
     * @return $this
     */
    public function setApiVersion(string $apiVersion): static
    {
        $this->apiVersion = $apiVersion;
        return $this;
    }

    /**
     * Get the solution as a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("change-minimum-api-version-solution", [
            "api-version" => $this->getApiVersion()
        ]);
    }
}