<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Remove plugins that use a lot of memory, when the log does not show which one it is.
 */
class PluginMemoryUsageSolution extends BukkitSolution
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-memory-usage-solution");
    }
}
