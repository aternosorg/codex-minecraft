<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FilePathType;
use Aternos\Codex\Minecraft\Translator\Translator;

class ModDuplicateProblem extends ModProblem
{
    protected ?string $firstModPath = null;
    protected ?string $secondModPath = null;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        $firstModPathParts = explode("/", $this->getFirstModPath());
        $firstModName = end($firstModPathParts);

        $secondModPathParts = explode("/", $this->getSecondModPath());
        $secondModName = end($secondModPathParts);

        return Translator::getInstance()->getTranslation("mod-duplicate-problem", [
            "mod-name" => $this->getModName(),
            "first-mod-path" => $firstModName,
            "second-mod-path" => $secondModName
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/Found a duplicate mod (.+) at \[([^,\n]+), ([^,\n]+)[,\]]/',
            '/^\s+Mod ID:(.+) from mod files: ([^,\n]+), ([^,\n]+)/m',
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->modName = $matches[1];
        $this->firstModPath = $matches[2];
        $this->secondModPath = $matches[3];

        $this->addSolution(new FileDeleteSolution($this->getFirstModPath(), FilePathType::ABSOLUTE));
        $this->addSolution(new FileDeleteSolution($this->getSecondModPath(), FilePathType::ABSOLUTE));
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return parent::isEqual($insight)
            && $insight instanceof static
            && $this->getFirstModPath() === $insight->getFirstModPath()
            && $this->getSecondModPath() === $insight->getSecondModPath();
    }

    /**
     * @return string|null
     */
    public function getFirstModPath(): ?string
    {
        return $this->firstModPath;
    }

    /**
     * @return string|null
     */
    public function getSecondModPath(): ?string
    {
        return $this->secondModPath;
    }
}
