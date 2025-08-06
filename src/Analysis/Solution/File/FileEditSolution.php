<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\File;

use Aternos\Codex\Analysis\AutomatableSolutionInterface;
use Aternos\Codex\Minecraft\Translator\Translator;

class FileEditSolution extends FileSolution implements AutomatableSolutionInterface
{
    protected ?string $pattern = null;
    protected ?string $replacement = null;

    /**
     * Get the solution as a human-readable message
     *
     * @return string
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