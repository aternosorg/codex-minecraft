<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Log\Type\NetworkProtocolErrorReportLogTypeInterface;

class VanillaNetworkProtocolErrorReportLog extends VanillaReportLog implements NetworkProtocolErrorReportLogTypeInterface
{
    use VanillaNetworkProtocolErrorReportTrait;

    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [(new SinglePatternDetector())->setPattern("/---- Minecraft Network Protocol Error Report ----/")];
    }
}