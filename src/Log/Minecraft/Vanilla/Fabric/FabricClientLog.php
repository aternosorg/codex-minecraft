<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Log\Type\ClientLogTypeInterface;

/**
 * Class FabricClientLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric
 */
class FabricClientLog extends FabricLog implements ClientLogTypeInterface
{
    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [
            (new SinglePatternDetector())->setPattern('/\[[\d:]+\] \[main\/INFO\]: Loading Minecraft [^ \n]+ with Fabric Loader [^ \n]+(.|\n)+\[[\d:]+\] \[Render thread\/INFO\]: Setting user: \w+/'),
        ];
    }
}