<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla;

use Aternos\Codex\Minecraft\Analyser\Report\NetworkProtocolErrorReport\MinecraftNetworkProtocolErrorReportAnalyser;

trait VanillaNetworkProtocolErrorReportTrait
{
    use VanillaReportTrait;

    /**
     * @return MinecraftNetworkProtocolErrorReportAnalyser
     */
    public static function getDefaultAnalyser(): MinecraftNetworkProtocolErrorReportAnalyser
    {
        return new MinecraftNetworkProtocolErrorReportAnalyser();
    }
}