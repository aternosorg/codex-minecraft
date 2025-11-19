<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Folder;

use Aternos\Codex\Minecraft\Analysis\Solution\File\PathType;
use Aternos\Codex\Minecraft\Analysis\Solution\MinecraftSolution;

abstract class FolderSolution extends MinecraftSolution
{
    /**
     * @param string $path The relative path (without a starting slash) or absolute path to the folder.
     *                     If the path is relative, it will be treated as relative to the Minecraft server root directory.
     * @param PathType $type Is the path relative or absolute?
     */
    public function __construct(
        protected string   $path,
        protected PathType $type = PathType::RELATIVE
    )
    {
    }

    /**
     * Set the relative path
     * The path is relative to the Minecraft server root directory without a starting slash
     *
     * @param string $path
     * @return $this
     */
    public function setRelativePath(string $path): static
    {
        $this->path = $path;
        $this->type = PathType::RELATIVE;
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
        $this->type = PathType::ABSOLUTE;
        return $this;
    }

    /**
     * Get the path
     * If isRelative() the path is relative to the Minecraft server root directory without a starting slash
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Get the type of the path (absolute or relative)
     *
     * @return PathType
     */
    public function getType(): PathType
    {
        return $this->type;
    }

    /**
     * Check if the path is relative
     * The path is relative to the Minecraft server root directory without a starting slash
     *
     * @return bool
     */
    public function isRelative(): bool
    {
        return $this->getType() === PathType::RELATIVE;
    }

    /**
     * Check if the path is absolute
     *
     * @return bool
     */
    public function isAbsolutePath(): bool
    {
        return $this->getType() === PathType::ABSOLUTE;
    }
}
