<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\PrismLauncher;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Log\Minecraft\MinecraftLog;
use Aternos\Codex\Minecraft\Parser\Parser;

abstract class PrismLauncherLog extends MinecraftLog
{
    /**
     * @return Parser
     */
    public static function getDefaultParser(): Parser
    {
        return (new Parser())->setPattern('/^.*$/');
    }

    /**
     * @inheritDoc
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