<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class FabricIncompatibleModsProblem extends FabricModProblem
{
    protected ?string $secondModName = null;

    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-incompatible-problem", [
            "first-mod-name" => $this->getModName(),
            "second-mod-name" => $this->getSecondModName(),
        ]);
    }

    /**
     * @return string|null
     */
    public function getSecondModName(): ?string
    {
        return $this->secondModName;
    }

    /**
     * @param string $modName
     * @return $this
     */
    protected function setSecondModName(string $modName): static
    {
        $this->secondModName = $this->getReplacedModName($modName);
        return $this;
    }

    public static function getPatterns(): array
    {
        return [
            "/\s*- Mod ". static::$modNamePattern ." [^\\n]+ (?:is incompatible|conflicts) with [^\\n]+ of (?:mod )?". static::$modNamePattern .",/"
        ];
    }

    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->setModName($matches[1]);
        $this->setSecondModName($matches[3]);
        $this->addSolution((new ModRemoveSolution())->setModName($this->getModName()));
        $this->addSolution((new ModRemoveSolution())->setModName($this->getSecondModName()));
    }
}