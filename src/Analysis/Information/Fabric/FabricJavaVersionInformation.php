<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Fabric;

use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric\FabricLog;
use Aternos\Codex\Minecraft\Translator\Translator;

class FabricJavaVersionInformation extends FabricInformation
{
    /**
     * FabricJavaVersionInformation constructor.
     */
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("java-version");
    }

    /**
     * Matches the Java version in the mod list that Fabric Loader logs on startup.
     *
     * Older loaders log the mods on one line:
     * [14:04:09] [main/INFO]: [FabricLoader] Loading 3 mods: minecraft@1.16.5, java@11, fabricloader@0.11.1
     *
     * Newer loaders log one mod per line, with nested mods indented below their parent:
     * [18:57:39] [main/INFO]: Loading 5 mods:
     *     - fabricloader 0.20.1
     *        \-- mixinextras 0.5.5
     *     - java 25
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/' . FabricLog::getPrefixPattern() . '\[FabricLoader\] Loading \d+ mods: (?:[^,\s]+, )*java@(?<version>\d+)/',
            '/' . FabricLog::getPrefixPattern() . '(?:\(FabricLoader\) )?Loading \d+ mods:(?:\R\h.*+)*?\R\h+- java (?<version>\d+)/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->value = $matches["version"];
    }
}
