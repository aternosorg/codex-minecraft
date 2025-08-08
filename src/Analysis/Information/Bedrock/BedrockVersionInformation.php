<?php

namespace Aternos\Codex\Minecraft\Analysis\Information\Bedrock;

use Aternos\Codex\Minecraft\Translator\Translator;

class BedrockVersionInformation extends BedrockInformation
{
    /**
     * BedrockVersionInformation constructor.
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
        return ['/Version ([0-9\.]+)/'];
    }
}