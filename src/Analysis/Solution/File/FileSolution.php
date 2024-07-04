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
    protected ?string $path = null;
    protected bool $relativePath = true;

    /**
     * Set the relative path
     *
     * The path is relative to the Minecraft server root directory without a starting slash
     *
     * @param string $path
     * @return $this
     */
    public function setRelativePath(string $path): static
    {
        $this->path = $path;
        $this->relativePath = true;
        return $this;
    }

    /**
     * Set the absolute path
     *
     * @param string $path
     * @return $this
     */
    public function setAbsolutePath(string $path): static
    {
        $this->path = $path;
        $this->relativePath = false;
        return $this;
    }

    /**
     * Get the path
     *
     * If isRelative() the path is relative to the Minecraft server root directory without a starting slash
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Check if the path is relative
     *
     * The path is relative to the Minecraft server root directory without a starting slash
     *
     * @return bool
     */
    public function isRelativePath(): bool
    {
        return $this->relativePath;
    }

    /**
     * Check if the path is absolute
     *
     * @return bool
     */
    public function isAbsolutePath(): bool
    {
        return !$this->relativePath;
    }
}