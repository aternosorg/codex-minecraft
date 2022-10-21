<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Magma;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class MagmaVersionInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Magma
 */
class MagmaVersionInformation extends MagmaInformation
{
    /**
     * MagmaVersionInformation constructor.
     */
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("magma-version");
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
        return ['/This server is running Magma version (?:git-Magma-[0-9\.a-zA-Z]+-)?([0-9a-f]+)/'];
    }
}