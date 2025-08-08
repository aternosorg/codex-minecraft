<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Fabric;

use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric\FabricLog;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class FabricJavaVersionInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Forge
 */
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
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/' . FabricLog::getPrefixPattern() . '[\[(]FabricLoader[\])] Loading [0-9]+ mods:[\s\n](?:\s*[^,]+, ?)*(?:\s+- )?java[ @](\d+)/',
            '/' . FabricLog::getPrefixPattern() . '(?:[\[(]FabricLoader[\])] )?Loading [0-9]+ mods:[\s\n](?:\s*- .+\n ?)*(?:\s+- )?java[ @](\d+)/'
        ];
    }

    /**
     * @param array $matches
     * @param mixed $patternKey
     * @return void
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->value = $matches[3];
    }
}
