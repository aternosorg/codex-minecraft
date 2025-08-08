<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\CrashReport;

use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaInformation;
use Aternos\Codex\Minecraft\Translator\Translator;

class JavaVersionInformation extends VanillaInformation
{
    /**
     * JavaVersionInformation constructor.
     */
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("java-version");
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/\tJava Version: ([0-9\.]+(?:_\d+)?)/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->value = $matches[1];
    }
}