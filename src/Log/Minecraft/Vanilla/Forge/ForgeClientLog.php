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
            (new SinglePatternDetector())->setPattern('/^(\[(?:\S+ )?(?:[0-9]{2}\:?){3}(?:\.[0-9]+)?\] \[Render thread\/INFO] \[net\.minecraft\.client\.Minecraft\/\]:) Setting user: \w+$/m'),
            (new SinglePatternDetector())->setPattern('/\[[\d:]+\] \[main\/INFO\]: Launching target \'fmlclient\' with arguments .*(.|\n)+\[[\d:]+\] \[Render thread\/INFO\]: Setting user: \w+/')
        ];
    }
}