<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\PolyMC;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Parser\Parser;

/**
 * Class PolyMCLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\PolyMC
 */
abstract class PolyMCLog extends \Aternos\Codex\Minecraft\Log\Minecraft\MinecraftLog
{
    /**
     * @return Parser
     */
    public static function getDefaultParser(): Parser
    {
        return (new Parser())->setPattern('/^.*$/');
    }

    /**
     * @return DetectorInterface[]
     */
    public static function getDetectors(): array
    {
        return [(new SinglePatternDetector())->setPattern("/^PolyMC version: [\d\.]+$/m")];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "PolyMC";
    }
}