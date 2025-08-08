<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\ChunkRemoveSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\WorldRepairSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class ChunkLoadExceptionProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit
 */
class ChunkLoadExceptionProblem extends BukkitProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("chunk-load-exception-problem");
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/Encountered an unexpected exception(\n.*)*at.*ChunkRegionLoader\.loadChunk/',
            '/Encountered an unexpected exception(\n.*)*at.*ChunkRegionLoader\.loadEntities/',
            '/Encountered an unexpected exception(\n.*)*Exception generating new chunk/',
            '/Couldn\'t load chunk\n/'
        ];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param mixed $patternKey
     * @return void
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution((new WorldRepairSolution())->setWorldName("world"));
        $this->addSolution((new FileDeleteSolution())->setRelativePath("world"));
        $this->addSolution((new ChunkRemoveSolution()));
    }
}