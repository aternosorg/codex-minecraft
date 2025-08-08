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
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/This server is running PocketMine-MP version ([0-9\.]+)/'];
    }
}