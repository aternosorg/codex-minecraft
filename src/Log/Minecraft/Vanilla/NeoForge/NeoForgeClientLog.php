<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\NeoForge;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Log\Type\ClientLogTypeInterface;

class NeoForgeClientLog extends NeoForgeLog implements ClientLogTypeInterface
{
    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [
            (new SinglePatternDetector())->setPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: ModLauncher running: .*--fml.neoForgeVersion.*(\n.*)*\n\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: Launching target \'(fml|forge)client\' with arguments.*$/m')
        ];
    }
}