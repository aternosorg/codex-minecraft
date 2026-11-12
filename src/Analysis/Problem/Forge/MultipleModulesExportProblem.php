<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class MultipleModulesExportProblem extends ModProblem
{
    protected string $secondModName;

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-incompatible-problem", [
            "first-mod-name" => $this->getModName(),
            "second-mod-name" => $this->getSecondModName()
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
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            "/Exception in thread \"main\" java\.lang\.module\.ResolutionException: Modules ([^ ]+) and ([^ ]+) export package/",
            "/Exception in thread \"main\" java\.lang\.module\.ResolutionException: Module ([^ ]+) contains package [^ ]+, module ([^ ]+) exports package/"
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->modName = $matches[1];
        $this->addSolution(new ModRemoveSolution($this->modName));

        $this->secondModName = $matches[2];
        $this->addSolution(new ModRemoveSolution($this->secondModName));
    }

    /**
     * The same mod can conflict with several other mods, so the second mod has to match too
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