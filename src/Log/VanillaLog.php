<?php

namespace Aternos\Codex\Minecraft\Log;

/**
 * Class VanillaLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class VanillaLog extends ServerLog
{
    /**
     * @var string
     */
    protected static $pattern = '/^(\[(?:[0-9]{2}\:?){3}\] \[[^\/]+\/(\w+)\](?: \[[^\]]+\])?\:).*$/';
}