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
     * Matches the Java version in the mod list that Quilt Loader logs on startup,
     * one mod per line, with nested mods indented below their parent:
     * [19:33:44] [main/INFO]: Loading 3 mods:
     *     - java 17
     *     - minecraft 1.18.2
     *     - quilt_loader 0.16.1-beta.3
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/' . VanillaServerLog::getPrefixPattern() . 'Loading \d+ mods:(?:\R\h.*+)*?\R\h+- java (?<version>\d+)/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->value = $matches["version"];
    }
}
