<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Quilt;

use Aternos\Codex\Detective\MultiPatternDetector;
use Aternos\Codex\Minecraft\Log\Type\ClientLogTypeInterface;

/**
 * Class QuiltClientLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Quilt
 */
class QuiltClientLog extends QuiltLog implements ClientLogTypeInterface
{
    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [
            (new MultiPatternDetector())
                ->addPattern('/^\[[\d:]+\] \[main\/INFO\]: Loading Minecraft [^ \n]+ with Quilt Loader [^ \n]+/')
                ->addPattern('/^\[[\d:]+\] \[(?:Render thread|main)\/INFO\]: Setting user: \w+/m')
        ];
    }
}