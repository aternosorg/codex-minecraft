<?php

namespace Aternos\Codex\Minecraft\Log;

/**
 * Class Entry
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class Entry extends \Aternos\Codex\Log\Entry
{
    /**
     * @var string
     */
    protected $prefix;

    /**
     * Set the prefix
     *
     * @param string $prefix
     * @return $this
     */
    public function setPrefix(string $prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * Get the prefix
     *
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->prefix;
    }
}