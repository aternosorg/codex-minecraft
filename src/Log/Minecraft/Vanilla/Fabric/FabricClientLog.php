<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\MultiPatternDetector;
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
            (new MultiPatternDetector())
                ->addPattern('#^\[[\d:]+\] \[main\/INFO\](?:\:| \(FabricLoader/GameProvider\)) Loading Minecraft [^ \n]+ with Fabric Loader [^ \n]+#')
                ->addPattern('#^\[[\d:]+\] \[(?:Render thread|main)\/INFO\](?:\:| \(Minecraft\)) Setting user: \w+#m')
        ];
    }
}