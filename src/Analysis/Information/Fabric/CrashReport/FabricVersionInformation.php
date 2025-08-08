<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Fabric\CrashReport;

class FabricVersionInformation extends \Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricVersionInformation
{
    public static function getPatterns(): array
    {
        return [
            '/\t\tfabricloader: Fabric Loader (' . static::$fabricVersionPattern . ')/'
        ];
    }

    /**
     * @param string[] $matches
     * @param mixed $patternKey
     * @return void
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->value = $matches[1];
    }
}