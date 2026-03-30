<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\NeoForge;

use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Log\Type\ClientLogTypeInterface;

class NeoForgeClientLog extends NeoForgeLog implements ClientLogTypeInterface
{
    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [
            new MultiPatternDetector()
                ->addPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: ModLauncher running: .*--fml.neoForgeVersion/m')
                ->addPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: Launching target \'(fml|forge)client\' with arguments/m'),
            new SinglePatternDetector()->setPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: Starting FancyModLoader version [0-9.]+ \(CLIENT/m'),
        ];
    }
}
