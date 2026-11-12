<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Quilt;

use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaServerLog;
use Aternos\Codex\Minecraft\Translator\Translator;

class QuiltJavaVersionInformation extends QuiltInformation
{
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("java-version");
    }

    /**
     * Matches the Java version in the list of loaded mods:
     * [19:33:44] [main/INFO]: Loading 3 mods:
     *     - java 17
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/' . VanillaServerLog::getPrefixPattern() . 'Loading [0-9]+ mods:[\s\n](?:\s*- .+\n ?)*(?:\s+- )?java[ @](?<version>\d+)/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->value = $matches['version'];
    }
}