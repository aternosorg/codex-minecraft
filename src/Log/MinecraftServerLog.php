<?php

namespace Aternos\Codex\Minecraft\Log;

/**
 * Class MinecraftServerLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
abstract class MinecraftServerLog extends MinecraftLog
{
    /**
     * Get the name of the used server software
     *
     * @return string
     */
    abstract public function getServerSoftware(): string;
}