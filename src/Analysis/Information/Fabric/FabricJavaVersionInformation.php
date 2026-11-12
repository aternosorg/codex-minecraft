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
     * Matches the Java version in the list of loaded mods, either inline or one mod per line:
     * [14:04:09] [main/INFO]: [FabricLoader] Loading 3 mods: minecraft@1.16.5, java@11, fabricloader@0.11.1
     * [11:47:03] [main/INFO] (FabricLoader) Loading 38 mods:
     *     - fabric 0.42.0+1.16
     *     - java 17
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/' . FabricLog::getPrefixPattern() . '[\[(]FabricLoader[\])] Loading [0-9]+ mods:[\s\n](?:\s*[^,]+, ?)*(?:\s+- )?java[ @](?<version>\d+)/',
            '/' . FabricLog::getPrefixPattern() . '(?:[\[(]FabricLoader[\])] )?Loading [0-9]+ mods:[\s\n](?:\s*- .+\n ?)*(?:\s+- )?java[ @](?<version>\d+)/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->value = $matches['version'];
    }
}
