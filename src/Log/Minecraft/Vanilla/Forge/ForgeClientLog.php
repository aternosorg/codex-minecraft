<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge;

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
                ->addPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: ModLauncher running: .*--fml\.forgeVersion/m')
                ->addPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: Launching target \'(fml|forge)client\' with arguments/m'),
            // Forge 1.20.2 and newer, independent of the version name the launcher passes
            // [17:55:07] [main/INFO]: Launching target 'forge_client' with arguments [--version, 26.3, ...
            new SinglePatternDetector()
                ->setPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: Launching target \'forge_client\' with arguments/m'),
            (new MultiPatternDetector())
                ->addPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: Forge Mod Loader version/m')
                ->addPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: Launching wrapped minecraft \{net\.minecraft\.client/m')
        ];
    }
}
