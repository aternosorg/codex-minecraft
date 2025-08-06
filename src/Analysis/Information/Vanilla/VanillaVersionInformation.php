<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Vanilla;

use Aternos\Codex\Minecraft\Translator\Translator;

class VanillaVersionInformation extends VanillaInformation
{
    protected static string $vanillaVersionPattern = '[0-9\.w]+(?:[a-z]|-(?:pre|rc)\d+)?';

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return ['/Starting minecraft server version (' . static::$vanillaVersionPattern . ')/'];
    }

    /**
     * Get the pattern used to match Minecraft versions
     *
     * @return string
     */
    public static function getVersionPattern(): string
    {
        return self::$vanillaVersionPattern;
    }

    /**
     * VanillaVersionInformation constructor.
     */
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("minecraft-version");
    }
}