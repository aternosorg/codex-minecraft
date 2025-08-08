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
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Starting Minecraft: Bedrock Edition server version v([0-9\.]+)/'];
    }
}