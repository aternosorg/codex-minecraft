<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\ChunkRemoveSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\WorldRepairSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class ChunkLoadExceptionProblem extends BukkitProblem
{
    /**
     * The start of the error and the lines after it, up to the start of the line that shows the cause.
     * Whole lines are skipped possessively, so a long stack trace doesn't exhaust the backtrack limit.
     *
     * Example: "Encountered an unexpected exception\njava.lang.NullPointerException\n"
     */
    protected const string UNEXPECTED_EXCEPTION = 'Encountered an unexpected exception\n(?:.*+\n)*?';

    /**
     * The start of a stack trace line up to the simple class name
     *
     * Example: "\tat net.minecraft.server.v1_8_R3."
     */
    protected const string STACK_TRACE_PACKAGE = '\h*at (?:[\w$]++\.)*';

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("chunk-load-exception-problem");
    }

    /**
     * Examples below UNEXPECTED_EXCEPTION:
     * "at net.minecraft.server.v1_8_R3.ChunkRegionLoader.loadChunk(ChunkRegionLoader.java:70)"
     * "at net.minecraft.server.v1_8_R3.ChunkRegionLoader.loadEntities(ChunkRegionLoader.java:433)"
     * "net.minecraft.server.v1_13_R1.ReportedException: Exception generating new chunk"
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/' . static::UNEXPECTED_EXCEPTION . static::STACK_TRACE_PACKAGE . 'ChunkRegionLoader\.loadChunk/',
            '/' . static::UNEXPECTED_EXCEPTION . static::STACK_TRACE_PACKAGE . 'ChunkRegionLoader\.loadEntities/',
            '/' . static::UNEXPECTED_EXCEPTION . '(?:[\w.$]++: )*Exception generating new chunk/',
            '/Couldn\'t load chunk\n/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution(new WorldRepairSolution("world"));
        $this->addSolution(new FileDeleteSolution("world"));
        $this->addSolution(new ChunkRemoveSolution());
    }
}