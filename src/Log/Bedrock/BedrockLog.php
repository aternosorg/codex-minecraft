<?php

namespace Aternos\Codex\Minecraft\Log\Bedrock;

use Aternos\Codex\Minecraft\Log\MinecraftLog;

abstract class BedrockLog extends MinecraftLog
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return "Bedrock";
    }
}