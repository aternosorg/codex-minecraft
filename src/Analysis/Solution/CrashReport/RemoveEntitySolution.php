<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\CrashReport;

use Aternos\Codex\Minecraft\Translator\Translator;

class RemoveEntitySolution extends CrashReportSolution
{
    /**
     * @param string|null $name
     * @param string|null $type
     * @param float|null $locationX
     * @param float|null $locationY
     * @param float|null $locationZ
     * @param string|null $dimension
     * @param string|null $levelName
     */
    public function __construct(
        protected ?string $name = null,
        protected ?string $type = null,
        protected ?float  $locationX = null,
        protected ?float  $locationY = null,
        protected ?float  $locationZ = null,
        protected ?string $dimension = null,
        protected ?string $levelName = null
    )
    {
    }


    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("remove-entity-solution", [
            "name" => $this->getName(),
            "location" => sprintf("%s, %s, %s", $this->getLocationX(), $this->getLocationY(), $this->getLocationZ())
        ]);
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return $this
     */
    public function setName(?string $name): RemoveEntitySolution
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return float|null
     */
    public function getLocationX(): ?float
    {
        return $this->locationX;
    }

    /**
     * @param float|null $locationX
     * @return $this
     */
    public function setLocationX(?float $locationX): RemoveEntitySolution
    {
        $this->locationX = $locationX;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getLocationY(): ?float
    {
        return $this->locationY;
    }

    /**
     * @param float|null $locationY
     * @return $this
     */
    public function setLocationY(?float $locationY): RemoveEntitySolution
    {
        $this->locationY = $locationY;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getLocationZ(): ?float
    {
        return $this->locationZ;
    }

    /**
     * @param float|null $locationZ
     * @return $this
     */
    public function setLocationZ(?float $locationZ): RemoveEntitySolution
    {
        $this->locationZ = $locationZ;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDimension(): ?string
    {
        return $this->dimension;
    }

    /**
     * @param string|null $dimension
     * @return $this
     */
    public function setDimension(?string $dimension): static
    {
        $this->dimension = $dimension;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLevelName(): ?string
    {
        return $this->levelName;
    }

    /**
     * @param string|null $levelName
     * @return $this
     */
    public function setLevelName(?string $levelName): static
    {
        $this->levelName = $levelName;
        return $this;
    }
}