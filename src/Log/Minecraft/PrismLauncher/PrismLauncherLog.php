<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\PrismLauncher;

use Aternos\Codex\Detective\DetectorInterface;
use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Parser\Parser;

/**
 * Class PrismLauncherLog
 *
 * @package Aternos\Codex\Minecraft\Log\Minecraft\PrismLauncherLog
 */
abstract class PrismLauncherLog extends \Aternos\Codex\Minecraft\Log\Minecraft\MinecraftLog
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
        return [(new SinglePatternDetector())->setPattern("/^Prism Launcher version: [\d\.]+$/m")];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Prism Launcher";
    }
}