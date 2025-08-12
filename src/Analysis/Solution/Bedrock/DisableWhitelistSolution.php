<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bedrock;

use Aternos\Codex\Minecraft\Translator\Translator;

class DisableWhitelistSolution extends BedrockSolution
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("disable-whitelist-solution");
    }
}