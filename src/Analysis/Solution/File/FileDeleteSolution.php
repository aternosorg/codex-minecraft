<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\File;

use Aternos\Codex\Analysis\AutomatableSolutionInterface;

/**
 * Class FileDeleteSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\File
 */
class FileDeleteSolution extends FileSolution implements AutomatableSolutionInterface
{
    /**
     * Get the solution as a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return "Delete '" . $this->getPath() . "' in the server directory.";
    }
}