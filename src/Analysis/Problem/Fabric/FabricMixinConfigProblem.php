<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * The mixin config of a mod could not be loaded, e.g. because the file is missing or not valid JSON,
 * or because it requires a newer Mixin version. Fabric Loader stops before the game starts.
 */
class FabricMixinConfigProblem extends FabricModProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-fatal-problem", ["mod-name" => $this->getModName()]);
    }

    /**
     * Matches the mixin config and the ID of the mod it belongs to:
     * Caused by: java.lang.RuntimeException: Error parsing or using Mixin config foo.mixins.json for mod foo
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            "/Error parsing or using Mixin config \S+ for mod (?<mod>[\w-]+)/"
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->setModName($matches['mod']);
        $this->addSolution(new ModInstallDifferentVersionSolution($this->getModName()));
        $this->addSolution(new ModRemoveSolution($this->getModName()));
    }
}
