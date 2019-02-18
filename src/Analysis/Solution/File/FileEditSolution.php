<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\File;

use Aternos\Codex\Analysis\AutomatableSolutionInterface;

/**
 * Class FileEditSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\File
 */
class FileEditSolution extends FileSolution implements AutomatableSolutionInterface
{
    /**
     * @var string
     */
    protected $pattern;

    /**
     * @var string
     */
    protected $replacement;

    /**
     * Get the solution as a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return "Edit the file '" . $this->getPath() . "'.";
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
    public function setPattern(string $pattern)
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
    public function setReplacement(string $replacement)
    {
        $this->replacement = $replacement;
        return $this;
    }

    /**
     * Process the edit on a file string
     *
     * @param string $fileContent
     * @return string|string[]|null
     */
    public function processEdit(string $fileContent)
    {
        return preg_replace($this->getPattern(), $this->getReplacement(), $fileContent);
    }
}