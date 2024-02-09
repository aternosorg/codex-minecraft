<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\NeoForge;

use Aternos\Codex\Minecraft\Translator\Translator;

class NeoForgeVersionInformation extends NeoForgeInformation
{
    protected static string $versionPattern = "[0-9\.]+(-beta)?";

    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("neoforge-version");
    }

    public static function getPatterns(): array
    {
        return [
            '/NeoForge mod loading, version ('. static::$versionPattern .'),/',
            '/--fml\.neoForgeVersion, ('. static::$versionPattern .')/'
        ];
    }

    /**
     * Get the NeoForge version pattern
     * @return string
     */
    public static function getVersionPattern(): string
    {
        return static::$versionPattern;
    }
}