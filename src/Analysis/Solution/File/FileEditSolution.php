<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\File;

use Aternos\Codex\Analysis\AutomatableSolutionInterface;
use Aternos\Codex\Minecraft\Translator\Translator;

class FileEditSolution extends FileSolution implements AutomatableSolutionInterface
{

    /**
     * @param string $path The relative path (without a starting slash) or absolute path to the file.
     *                     If the path is relative, it will be treated as relative to the Minecraft server root directory.
     * @param PathType $type Is the path relative or absolute?
     * @param string $pattern The regex pattern to search for in the file content.
     * @param string $replacement The replacement string for the matched pattern.
     */
    public function __construct(
        string           $path,
        PathType         $type = PathType::RELATIVE,
        protected string $pattern,
        protected string $replacement
    )
    {
        parent::__construct($path, $type);
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("file-edit-solution", ["file-path" => $this->getPath()]);
    }

    /**
     * @return string
     */
    public function getPattern(): string
    {
        return $this->pattern;
    }

    /**
     * @param string $pattern
     * @return $this
     */
    public function setPattern(string $pattern): static
    {
        $this->pattern = $pattern;
        return $this;
    }

    /**
     * @return string
     */
    public function getReplacement(): string
    {
        return $this->replacement;
    }

    /**
     * @param string $replacement
     * @return $this
     */
    public function setReplacement(string $replacement): static
    {
        $this->replacement = $replacement;
        return $this;
    }

    /**
     * Process the edit on a file string
     *
     * @param string $fileContent
     * @return string|null
     */
    public function processEdit(string $fileContent): ?string
    {
        return preg_replace($this->getPattern(), $this->getReplacement(), $fileContent);
    }
}
