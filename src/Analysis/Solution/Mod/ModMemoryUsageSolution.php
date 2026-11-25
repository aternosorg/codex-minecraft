<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Mod;

use Aternos\Codex\Minecraft\Analysis\Solution\MinecraftSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Remove mods that use a lot of memory, when the log does not show which one it is.
 */
class ModMemoryUsageSolution extends MinecraftSolution
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-memory-usage-solution");
    }
}
