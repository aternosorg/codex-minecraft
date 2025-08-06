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
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return ['/Version ([0-9\.]+)/'];
    }
}