<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Bedrock;

use Aternos\Codex\Minecraft\Log\Minecraft\MinecraftLog;

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