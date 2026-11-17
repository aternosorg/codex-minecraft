<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

/**
 * A solution for the plugin that contains a class, when the log only names the class and not the plugin.
 *
 * Use the solutions with the plugin name, like {@see PluginRemoveSolution}, whenever the log names the plugin.
 */
abstract class PluginWithClassSolution extends BukkitSolution
{
    /**
     * @param string $className The fully qualified name of the class, like com.example.plugin.MapRenderer
     */
    public function __construct(protected string $className)
    {
    }

    /**
     * @return string
     */
    public function getClassName(): string
    {
        return $this->className;
    }
}
