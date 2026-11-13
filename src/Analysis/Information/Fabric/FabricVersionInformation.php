<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Fabric;

use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaServerLog;
use Aternos\Codex\Minecraft\Translator\Translator;

class FabricVersionInformation extends FabricInformation
{
    protected static string $fabricVersionPattern = "[0-9.]+";

    /**
     * FabricVersionInformation constructor.
     */
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("fabric-version");
    }

    /**
     * Matches the Fabric Loader version in the list of loaded mods or in the "Loading Minecraft" line:
     * [14:04:09] [main/INFO]: [FabricLoader] Loading 3 mods: minecraft@1.16.5, java@11, fabricloader@0.11.1
     * [03:35:09] [main/INFO]: Loading Minecraft 1.19.4 with Fabric Loader 0.14.19
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/' . VanillaServerLog::getPrefixPattern() . '[\[(]FabricLoader[\])] Loading [0-9]+ mods: (?:\w{1,63}@[^, ]+, )*fabricloader@(?<version>' . static::$fabricVersionPattern . ')/',
            '/' . VanillaServerLog::getPrefixPattern() . '(?:\(FabricLoader\/GameProvider\) )?Loading Minecraft ' . VanillaVersionInformation::getVersionPattern() . ' with Fabric Loader (?<version>' . static::$fabricVersionPattern . ')/'
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
