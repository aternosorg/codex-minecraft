<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Arclight;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class ArclightVersionInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Arclight
 */
class ArclightVersionInformation extends ArclightInformation
{

    /**
     * MohistVersionInformation constructor.
     */
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("arclight-version");
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
        return [
            '/This server is running Arclight version arclight-[0-9\.wa]+-[\.0-9]+(?:-SNAPSHOT)?-([0-9a-f]+) /'
        ];
    }
}