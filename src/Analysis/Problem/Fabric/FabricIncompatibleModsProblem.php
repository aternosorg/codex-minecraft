<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class FabricIncompatibleModsProblem extends FabricModProblem
{
    protected string $secondModName;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-incompatible-problem", [
            "first-mod-name" => $this->getModName(),
            "second-mod-name" => $this->getSecondModName(),
        ]);
    }

    /**
     * @return string
     */
    public function getSecondModName(): string
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

    /**
     * Matches both wordings:
     *  - Mod 'Mod A' (mod-a) 1.0.0 is incompatible with any version of mod 'Mod B' (mod-b), but a matching version is present: 2.0.0!
     *  - Mod mod-a 1.0.0 conflicts with any version of mod mod-b, which is present with the following versions: 2.0.0!
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            "/\s*- Mod " . static::getModNamePattern() . " [^\\n]+ (?:is incompatible|conflicts) with [^\\n]+ of (?:mod )?" . static::getModNamePattern("secondMod") . ",/"
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->setModName($matches["mod"]);
        $this->setSecondModName($matches["secondMod"]);
        $this->addSolution(new ModRemoveSolution($this->getModName()));
        $this->addSolution(new ModRemoveSolution($this->getSecondModName()));
    }

    /**
     * The same mod can be incompatible with several other mods, so the second mod has to match too
     *
     * @inheritDoc
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return parent::isEqual($insight)
            && $insight instanceof static
            && $this->getSecondModName() === $insight->getSecondModName();
    }
}