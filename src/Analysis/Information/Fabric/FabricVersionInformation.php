<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Fabric;

use Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaServerLog;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class FabricVersionInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Forge
 */
class FabricVersionInformation extends FabricInformation
{
    protected static string $fabricVersionPattern = "[0-9\.]+";

    /**
     * FabricVersionInformation constructor.
     */
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("fabric-version");
    }

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return [
            '/'. VanillaServerLog::getPrefixPattern() .'\[FabricLoader\] Loading [0-9]+ mods: (?:\w{1,63}@[^, ]+, )*fabricloader@('. static::$fabricVersionPattern .')/',
            '/'. VanillaServerLog::getPrefixPattern() .'Loading Minecraft '. VanillaVersionInformation::getVersionPattern() .' with Fabric Loader ('. static::$fabricVersionPattern .')/'
        ];
    }

    /**
     * @param string[] $matches
     * @param mixed $patternKey
     * @return void
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->value = $matches[3];
    }
}
