<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric;

use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Minecraft\Log\Type\ClientLogTypeInterface;

class FabricClientLog extends FabricLog implements ClientLogTypeInterface
{
    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [
            (new MultiPatternDetector())
                ->addPattern('/' . static::getLoadingMinecraftPattern() . '/m')
                ->addPattern('#^\[[\d:]+\] \[(?:Render thread|main)\/INFO\](?::| \((?:net\.minecraft\.client\.)?Minecraft\)) Setting user: \w+#m'),
            // Modrinth App, logger in its own bracket:
            // [09:45:51] [Render thread] [net.minecraft.class_310/INFO]: Setting user: Player
            (new MultiPatternDetector())
                ->addPattern('/' . static::getLoadingMinecraftPattern() . '/m')
                ->addPattern('/^\[[\d:]+\] \[Render thread\] \[[^\]\/]+\/INFO\]: Setting user: \w+/m')
        ];
    }
}
