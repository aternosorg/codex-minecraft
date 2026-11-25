<?php

namespace Aternos\Codex\Minecraft\Log\Forge;

use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Log\Type\ClientLogTypeInterface;

class ForgeClientLog extends ForgeLog implements ClientLogTypeInterface
{
    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [
            (new MultiPatternDetector())
                ->addPattern('/' . static::MAIN_INFO_PREFIX . 'ModLauncher running: .*--fml\.forgeVersion/m')
                ->addPattern('/' . static::MAIN_INFO_PREFIX . 'Launching target \'(fml|forge)client\' with arguments/m'),
            // Forge 1.20.2 and newer, independent of the version name the launcher passes and of the Modrinth App's line format
            // [17:55:07] [main/INFO]: Launching target 'forge_client' with arguments [--version, 26.3, ...
            // [23:18:07] [main] [cpw.mods.modlauncher.LaunchServiceHandler/INFO]: Launching target 'forge_client' with arguments [--version, 26.3, ...
            new SinglePatternDetector()
                ->setPattern('/' . static::MAIN_INFO_PREFIX . 'Launching target \'forge_client\' with arguments/m'),
            (new MultiPatternDetector())
                ->addPattern('/' . static::MAIN_INFO_PREFIX . 'Forge Mod Loader version/m')
                ->addPattern('/' . static::MAIN_INFO_PREFIX . 'Launching wrapped minecraft \{net\.minecraft\.client/m'),
        ];
    }
}
