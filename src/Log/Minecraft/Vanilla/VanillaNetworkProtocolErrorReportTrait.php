<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla;

use Aternos\Codex\Minecraft\Analyser\VanillaNetworkProtocolErrorReportAnalyser;

trait VanillaNetworkProtocolErrorReportTrait
{
    use VanillaReportTrait;

    /**
     * @return VanillaNetworkProtocolErrorReportAnalyser
     */
    public static function getDefaultAnalyser(): VanillaNetworkProtocolErrorReportAnalyser
    {
        return new VanillaNetworkProtocolErrorReportAnalyser();
    }
}