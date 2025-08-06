<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Pocketmine;

use Aternos\Codex\Minecraft\Analysis\Information\Bedrock\BedrockVersionInformationInterface;
use Aternos\Codex\Minecraft\Translator\Translator;

class PocketmineBedrockVersionInformation extends PocketmineInformation implements BedrockVersionInformationInterface
{
    /**
     * PocketmineBedrockVersionInformation constructor.
     */
    public function __construct()
    {
        $this->label = Translator::getInstance()->getTranslation("bedrock-version");
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
        return ['/Starting Minecraft: Bedrock Edition server version v([0-9\.]+)/'];
    }
}