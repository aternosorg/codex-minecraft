<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\WorldRepairSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class MultiverseLoadProblem extends SpecificPluginProblem
{
    protected ?string $worldName = null;

    /**
     * @return string|null
     */
    public function getWorldName(): ?string
    {
        return $this->worldName;
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("multiverse-load-problem", ["world-name" => $this->getWorldName()]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/The world \'([^\']+)\' could NOT be loaded because it contains errors and is probably corrupt!/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->worldName = $matches[1];

        $this->addSolution(new WorldRepairSolution($this->getWorldName()));
        $this->addSolution(new FileDeleteSolution($this->getWorldName()));
    }

    /**
     * Corrupt worlds with different names are different problems with different solutions
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