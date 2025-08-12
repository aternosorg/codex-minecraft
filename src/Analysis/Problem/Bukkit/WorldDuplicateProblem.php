<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class WorldDuplicateProblem extends BukkitProblem
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
        return Translator::getInstance()->getTranslation("world-duplicate-problem", ["world-name" => $this->getWorldName()]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/World (.*) is a duplicate of another world and has been prevented from loading. Please delete the uid.dat file from .*\'s world directory if you want to be able to load the duplicate world./'];
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
}