<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\File;

use Aternos\Codex\Minecraft\Analysis\Solution\MinecraftSolution;

/**
 * Class FileSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\File
 */
abstract class FileSolution extends MinecraftSolution
{
    /**
     * @var string
     */
    protected $path;

    /**
     * Set the path
     *
     * The path is relative to the Minecraft server root directory without a starting slash
     *
     * @param string $path
     * @return $this
     */
    public function setPath(string $path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Get the path
     *
     * The path is relative to the Minecraft server root directory without a starting slash
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
}