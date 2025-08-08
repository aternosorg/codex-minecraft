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
     * @param string $path The relative path (without a starting slash) or absolute path to the file.
     *                     If the path is relative, it will be treated as relative to the Minecraft server root directory.
     * @param FilePathType $type Is the path relative or absolute?
     */
    public function __construct(
        protected string       $path,
        protected FilePathType $type = FilePathType::RELATIVE
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
        $this->type = FilePathType::RELATIVE;
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
        $this->type = FilePathType::ABSOLUTE;
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
     * @return FilePathType
     */
    public function getType(): FilePathType
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
        return $this->getType() === FilePathType::RELATIVE;
    }

    /**
     * Check if the path is absolute
     *
     * @return bool
     */
    public function isAbsolutePath(): bool
    {
        return $this->getType() === FilePathType::ABSOLUTE;
    }
}