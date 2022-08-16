<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;

/**
 * Class VanillaClientLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Vanilla
 */
class VanillaClientLog extends VanillaLog implements \Aternos\Codex\Minecraft\Log\Type\ClientLogTypeInterface
{
    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [
            (new SinglePatternDetector())->setPattern('/^(\[(?:[0-9]{2}\:?){3}\] \[Render thread\/INFO]:) Setting user: \w+$/m'),
        ];
    }
}