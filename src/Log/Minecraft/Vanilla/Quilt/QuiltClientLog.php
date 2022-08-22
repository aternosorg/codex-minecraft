<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Quilt;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Log\Type\ClientLogTypeInterface;

/**
 * Class QuiltClientLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Quilt
 */
class QuiltClientLog extends QuiltLog implements ClientLogTypeInterface
{
    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [
            (new SinglePatternDetector())->setPattern('/\[[\d:]+\] \[main\/INFO\]: Loading Minecraft [^ \n]+ with Quilt Loader [^ \n]+(\n.*)*\n\[[\d:]+\] \[Render thread\/INFO\]: Setting user: \w+/'),
        ];
    }
}