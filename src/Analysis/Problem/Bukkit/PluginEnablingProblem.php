<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

/**
 * Class PluginEnablingProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit
 */
class PluginEnablingProblem extends PluginProblem
{
    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return "The plugin '" . $this->getPluginName() . "'  could not be enabled.";
    }

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return array
     */
    public static function getPatterns(): array
    {
        return ['/Error occurred while enabling (\w+) [^\(]*\(Is it up to date\?\)/'];
    }
}