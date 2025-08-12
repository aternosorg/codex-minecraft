<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge;

use Aternos\Codex\Detective\MultiPatternDetector;
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
                ->addPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: ModLauncher running: .*--fml.forgeVersion/m')
                ->addPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: Launching target \'(fml|forge)client\' with arguments/m'),
            (new MultiPatternDetector())
                ->addPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: ModLauncher running: .*--version, forge-/m')
                ->addPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: Launching target \'forge_client\' with arguments/m'),
            (new MultiPatternDetector())
                ->addPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: Forge Mod Loader version/m')
                ->addPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: Launching wrapped minecraft \{net\.minecraft\.client/m')
        ];
    }
}