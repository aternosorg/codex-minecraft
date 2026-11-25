<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class WorldDuplicateProblem extends BukkitProblem
{
    protected string $worldName;

    /**
     * @return string
     */
    public function getWorldName(): string
    {
        return $this->worldName;
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("world-duplicate-problem", ["world-name" => $this->getWorldName()]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/World (.*) is a duplicate of another world and has been prevented from loading\./'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->worldName = $matches[1];

        $this->addSolution(new FileDeleteSolution($this->worldName . "/uid.dat"));
        $this->addSolution(new FileDeleteSolution($this->worldName));
    }

    /**
     * Duplicate worlds with different names are different problems with different solutions
     *
     * @inheritDoc
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return parent::isEqual($insight)
            && $insight instanceof static
            && $this->getWorldName() === $insight->getWorldName();
    }
}