<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Pocketmine;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class PocketmineVersionInformation
 *
 * @package Aternos\Codex\Minecraft\Analysis\Information\Pocketmine
 */
class PocketmineVersionInformation extends PocketmineInformation
{
    /**
     * PocketmineVersionInformation constructor.
     */
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("pocketmine-version");
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
        return ['/This server is running PocketMine-MP version ([0-9\.]+)/'];
    }
}