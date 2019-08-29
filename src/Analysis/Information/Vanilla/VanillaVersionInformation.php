<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Vanilla;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class VanillaVersionInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Vanilla
 */
class VanillaVersionInformation extends VanillaInformation
{
    /**
     * VanillaVersionInformation constructor.
     */
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("minecraft-version");
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
        return ['/Starting minecraft server version ([0-9\.wa]+)/'];
    }
}