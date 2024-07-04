<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\CustomSkinLoader;

use Aternos\Codex\Minecraft\Log\Minecraft\CustomSkinLoader\CustomSkinLoaderLog;
use Aternos\Codex\Minecraft\Translator\Translator;

class CustomSkinLoaderVersionInformation extends CustomSkinLoaderInformation
{
    protected static string $versionPattern = "[\w.]+(?:-SNAPSHOT(?:-\d+)?)?";

    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("custom-skin-loader-version");
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
        return [ '/^' . CustomSkinLoaderLog::getPrefixPattern() . 'CustomSkinLoader ('. static::$versionPattern .')$/'];
    }

    /**
     * @return string
     */
    public static function getVersionPattern(): string
    {
        return static::$versionPattern;
    }
}