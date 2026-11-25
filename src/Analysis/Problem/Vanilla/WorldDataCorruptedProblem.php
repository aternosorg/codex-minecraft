<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Vanilla;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\GenerateNewWorldSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * The server could not read the level.dat of the world, nor its backup level.dat_old, and shuts down.
 *
 * The message comes from Vanilla, so it is the same on all server software.
 * The exception below it names the file, but not in a stable format, so it is not part of the message.
 */
class WorldDataCorruptedProblem extends VanillaProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("world-data-corrupted-problem");
    }

    /**
     * Matches the error the server logs before it shuts down, for example:
     * Failed to load world data. World files may be corrupted. Shutting down.
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Failed to load world data\. World files may be corrupted\. Shutting down\./'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution(new GenerateNewWorldSolution());
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static;
    }
}
