<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Mohist;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class MohistVersionInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Mohist
 */
class MohistVersionInformation extends MohistInformation
{
    /**
     * MohistVersionInformation constructor.
     */
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("mohist-version");
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
            '/This server is running ?Mohist ?version git-Mohist-(?:[0-9\.wa]+)-([0-9]+)/',
            '/This server is running Mohist version ([0-9\.wa]+(?:-([0-9]+))?) /'
        ];
    }
}