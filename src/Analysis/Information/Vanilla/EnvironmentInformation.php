<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Vanilla;

use Aternos\Codex\Minecraft\Log\VanillaLog;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class EnvironmentInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Vanilla
 */
class EnvironmentInformation extends VanillaInformation
{

    /**
     * VanillaVersionInformation constructor.
     */
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("environment");
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            "client-thread" => "/^\[(?:[0-9]{2}\:?){3}\] \[Render thread/",
            "server-thread" => "/^\[(?:[0-9]{2}\:?){3}\] \[Server thread/",
            "server-failed-to-start" => "/" . VanillaLog::getPrefixPattern() . "Failed to start the minecraft server/",
        ];
    }

    public function setMatches(array $matches, $patternKey): void
    {
        switch (substr($patternKey, 0, 6)) {
            case "server":
                $this->value = Translator::getInstance()->getTranslation("environment-server");
                break;

            case "client":
                $this->value = Translator::getInstance()->getTranslation("environment-client");
                break;
        }
    }

    public function isEqual($insight): bool
    {
        return true;
    }
}