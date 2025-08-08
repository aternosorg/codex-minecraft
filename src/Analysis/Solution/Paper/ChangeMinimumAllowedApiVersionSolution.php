<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Paper;

use Aternos\Codex\Minecraft\Translator\Translator;

class ChangeMinimumAllowedApiVersionSolution extends PaperSolution
{

    protected ?string $apiVersion = null;

    /**
     * @return string|null
     */
    public function getApiVersion(): ?string
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
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("change-minimum-api-version-solution", [
            "api-version" => $this->getApiVersion()
        ]);
    }
}