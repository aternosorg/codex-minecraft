<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\CrashReport;

use Aternos\Codex\Analysis\AnalysisInterface;
use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\CrashReport\RemoveEntitySolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class TickingEntityProblem extends CrashReportProblem
{
    const PATTERN_ENTITY_TYPE = "/Entity Type: ([\w:_]+)/";
    const PATTERN_ENTITY_NAME = "/Entity Name: (.+)/";
    const PATTERN_ENTITY_LOCATION = "/Entity's Exact location: (-?[\d.]+), (-?[\d.]+), (-?[\d.]+)/";
    const PATTERN_DIMENSION = "/Level dimension: ([\w:-]+)/";
    const PATTERN_LEVEL_NAME = "/Level name: (.+)/";

    protected ?string $type = null;
    protected ?string $name = null;
    protected ?float $locationX = null;
    protected ?float $locationY = null;
    protected ?float $locationZ = null;
    protected ?string $dimension = null;
    protected ?string $levelName = null;

    /**
     * @var RemoveEntitySolution[]
     */
    protected array $solutions = [];

    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("ticking-entity-problem", [
            "name" => $this->getName(),
            "location" => sprintf("%s, %s, %s", $this->getLocationX(), $this->getLocationY(), $this->getLocationZ())
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            "/^Description: Ticking entity$/",
            "/^-- Entity being ticked --$/"
        ];
    }

    /**
     * @param AnalysisInterface $analysis
     * @return $this
     */
    public function setAnalysis(AnalysisInterface $analysis): static
    {
        parent::setAnalysis($analysis);
        $content = $this->getLogContent();
        if (preg_match(static::PATTERN_ENTITY_TYPE, $content, $matches)) {
            $this->type = $matches[1];
        }

        if (preg_match(static::PATTERN_ENTITY_NAME, $content, $matches)) {
            $this->name = $matches[1];
        }

        if (preg_match(static::PATTERN_ENTITY_LOCATION, $content, $matches)) {
            $this->locationX = (float)$matches[1];
            $this->locationY = (float)$matches[2];
            $this->locationZ = (float)$matches[3];
        }

        if (preg_match(static::PATTERN_DIMENSION, $content, $matches)) {
            $this->dimension = $matches[1];
        }

        if (preg_match(static::PATTERN_LEVEL_NAME, $content, $matches)) {
            $this->levelName = $matches[1];
        }

        $solution = $this->createSolution();
        $solution->setType($this->getType());
        $solution->setName($this->getName());
        $solution->setLocationX($this->getLocationX());
        $solution->setLocationY($this->getLocationY());
        $solution->setLocationZ($this->getLocationZ());
        $solution->setDimension($this->getDimension());
        $solution->setLevelName($this->getLevelName());

        $this->addSolution($solution);
        return $this;
    }

    /**
     * @return RemoveEntitySolution
     */
    protected function createSolution(): RemoveEntitySolution
    {
        return new RemoveEntitySolution();
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return parent::isEqual($insight) &&
            $insight instanceof TickingEntityProblem &&
            $insight->getType() === $this->getType() &&
            $insight->getName() === $this->getName() &&
            $insight->getLocationX() === $this->getLocationX() &&
            $insight->getLocationY() === $this->getLocationY() &&
            $insight->getLocationZ() === $this->getLocationZ();
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return float|null
     */
    public function getLocationX(): ?float
    {
        return $this->locationX;
    }

    /**
     * @return float|null
     */
    public function getLocationY(): ?float
    {
        return $this->locationY;
    }

    /**
     * @return float|null
     */
    public function getLocationZ(): ?float
    {
        return $this->locationZ;
    }

    /**
     * @return string|null
     */
    public function getDimension(): ?string
    {
        return $this->dimension;
    }

    /**
     * @return string|null
     */
    public function getLevelName(): ?string
    {
        return $this->levelName;
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
    }
}