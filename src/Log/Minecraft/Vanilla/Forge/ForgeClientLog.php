<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Log\Type\ClientLogTypeInterface;

/**
 * Class ForgeClientLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge
 */
class ForgeClientLog extends ForgeLog implements ClientLogTypeInterface
{
    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [
            (new SinglePatternDetector())->setPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: ModLauncher running: .*--fml.forgeVersion.*(\n.*)*\n\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: Launching target \'(fml|forge)client\' with arguments.*$/m'),
            (new SinglePatternDetector())->setPattern('/^\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: Forge Mod Loader version.*(\n.*)*\n\[[^\]]+\] \[main\/INFO\]( \[[^\]]+\])?: Launching wrapped minecraft \{net\.minecraft\.client/m')
        ];
    }
}