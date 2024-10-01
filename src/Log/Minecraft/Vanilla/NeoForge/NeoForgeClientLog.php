<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\NeoForge;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Minecraft\Log\Type\ClientLogTypeInterface;

class NeoForgeClientLog extends NeoForgeLog implements ClientLogTypeInterface
{
    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [
            (new MultiPatternDetector())
                ->addPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: ModLauncher running: .*--fml.neoForgeVersion/m')
                ->addPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: Launching target \'(fml|forge)client\' with arguments/m'),
        ];
    }
}