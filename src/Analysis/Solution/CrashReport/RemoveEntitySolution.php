<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\CrashReport;

use Aternos\Codex\Minecraft\Translator\Translator;

class RemoveEntitySolution extends CrashReportSolution
{
    protected ?string $name;
    protected ?string $type;
    protected ?float $locationX;
    protected ?float $locationY;
    protected ?float $locationZ;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("remove-entity-solution", [
            "name" => $this->getName(),
            "location" => $this->getLocationX() . ", " . $this->getLocationY() . ", " . $this->getLocationZ()
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
}