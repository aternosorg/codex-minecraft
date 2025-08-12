<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Forge;

use Aternos\Codex\Minecraft\Translator\Translator;

class ForgeVersionInformation extends ForgeInformation
{
    protected static string $versionPattern = "[0-9\.]+";

    /**
     * ForgeVersionInformation constructor.
     */
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("forge-version");
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/MinecraftForge v(' . static::$versionPattern . ') Initialized/',
            '/--fml\.forgeVersion, (' . static::$versionPattern . ')/'
        ];
    }

    public static function getVersionPattern(): string
    {
        return static::$versionPattern;
    }
}