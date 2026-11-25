<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Vanilla;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\IncreaseMemorySolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Java ran out of memory, either in the heap or in the Metaspace, where the classes are stored.
 *
 * This is a Java error, so it can happen on all server software and is also detected in crash reports.
 * The memory area is passed to the message as Java logs it, because it is a technical term that is not translated.
 * Other kinds of OutOfMemoryError, like "unable to create native thread", have other causes and are not matched.
 *
 * On Vanilla, the only solution is more memory. The analysers of server software with plugins or mods
 * replace this class with a child class that also suggests removing them, see addSolutions().
 */
class OutOfMemoryErrorProblem extends VanillaProblem
{
    protected string $memoryArea;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("out-of-memory-error-problem", [
            "memory-area" => $this->getMemoryArea()
        ]);
    }

    /**
     * Matches the error with the memory area, also as the cause of another exception, for example:
     * java.lang.OutOfMemoryError: Java heap space
     * java.util.concurrent.CompletionException: java.lang.OutOfMemoryError: Metaspace
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/java\.lang\.OutOfMemoryError: (?<area>Java heap space|Metaspace)/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->memoryArea = $matches["area"];
        $this->addSolutions();
    }

    /**
     * Adds the solutions that fit the server software, child classes add their own after these.
     *
     * @return void
     */
    protected function addSolutions(): void
    {
        $this->addSolution(new IncreaseMemorySolution());
    }

    /**
     * @return string "Java heap space" or "Metaspace"
     */
    public function getMemoryArea(): string
    {
        return $this->memoryArea;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getMemoryArea() === $insight->getMemoryArea();
    }
}
