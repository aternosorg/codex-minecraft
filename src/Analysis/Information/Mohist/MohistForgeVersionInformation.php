<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Mohist;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class ForgeVersionInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Forge
 */
class MohistForgeVersionInformation extends MohistInformation
{
    /**
     * ForgeVersionInformation constructor.
     */
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("forge-version");
    }

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return array
     */
    public static function getPatterns(): array
    {
        return ['/MinecraftForge v([0-9\.]+) `?Initialized/'];
    }
}