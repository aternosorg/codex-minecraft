<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\CrashReport;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\CrashReport\RemoveEntitySolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class TickingEntityProblem extends CrashReportProblem
{
    const PATTERN_DESCRIPTION = "description";
    const PATTERN_ENTITY_TYPE = "type";
    const PATTERN_ENTITY_NAME = "name";
    const PATTERN_ENTITY_LOCATION = "location";

    protected ?string $matchedPattern = null;

    protected ?string $type = null;
    protected ?string $name = null;
    protected ?float $locationX = null;
    protected ?float $locationY = null;
    protected ?float $locationZ = null;

    /**
     * @var RemoveEntitySolution[]
     */
    protected array $solutions = [];

    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("ticking-entity-problem", [
            "name" => $this->getName(),
            "location" => $this->getLocationX() . ", " . $this->getLocationY() . ", " . $this->getLocationZ()
        ]);
    }

    /**
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return [
            static::PATTERN_DESCRIPTION => "/^Description: Ticking entity$/",
            static::PATTERN_ENTITY_TYPE => "/Entity Type: ([\w:_]+)/",
            static::PATTERN_ENTITY_NAME => "/Entity Name: (.+)/",
            static::PATTERN_ENTITY_LOCATION => "/Entity's Exact location: (-?[\d.]+), (-?[\d.]+), (-?[\d.]+)/"
        ];
    }

    /**
     * @param array $matches
     * @param mixed $patternKey
     * @return void
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->matchedPattern = $patternKey;
        switch ($patternKey) {
            case static::PATTERN_ENTITY_TYPE:
                $this->type = $matches[1];
                break;
            case static::PATTERN_ENTITY_NAME:
                $this->name = $matches[1];
                break;
            case static::PATTERN_ENTITY_LOCATION:
                $this->locationX = (float)$matches[1];
                $this->locationY = (float)$matches[2];
                $this->locationZ = (float)$matches[3];
                break;
        }

        $this->addSolution(new RemoveEntitySolution());
        $this->updateSolution();
    }

    /**
     * @return void
     */
    protected function updateSolution(): void
    {
        $this->solutions[0]->setName($this->getName());
        $this->solutions[0]->setType($this->getType());
        $this->solutions[0]->setLocationX($this->getLocationX());
        $this->solutions[0]->setLocationY($this->getLocationY());
        $this->solutions[0]->setLocationZ($this->getLocationZ());
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        if ($insight instanceof TickingEntityProblem) {
            $this->addInformationFromProblem($insight);
            return true;
        }
        return parent::isEqual($insight);
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
     * @param static $problem
     * @return void
     */
    public function addInformationFromProblem(TickingEntityProblem $problem): void
    {
        if ($problem->getName() !== null) {
            $this->name = $problem->getName();
        }
        if ($problem->getType() !== null) {
            $this->type = $problem->getType();
        }
        if ($problem->getLocationX() !== null) {
            $this->locationX = $problem->getLocationX();
        }
        if ($problem->getLocationY() !== null) {
            $this->locationY = $problem->getLocationY();
        }
        if ($problem->getLocationZ() !== null) {
            $this->locationZ = $problem->getLocationZ();
        }
        $this->updateSolution();
    }

}