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
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/' . VanillaServerLog::getPrefixPattern() . '[\[(]FabricLoader[\])] Loading [0-9]+ mods: (?:\w{1,63}@[^, ]+, )*fabricloader@(' . static::$fabricVersionPattern . ')/',
            '/' . VanillaServerLog::getPrefixPattern() . '(?:\(FabricLoader\/GameProvider\) )?Loading Minecraft ' . VanillaVersionInformation::getVersionPattern() . ' with Fabric Loader (' . static::$fabricVersionPattern . ')/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->value = $matches[3];
    }
}
