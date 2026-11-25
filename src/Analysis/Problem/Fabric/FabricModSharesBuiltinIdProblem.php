<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Fabric\FabricBuiltinModFileRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A jar in the mods folder uses the ID of a mod that Fabric Loader provides itself,
 * like "minecraft" or "java", e.g. because a copy of the Minecraft server jar was put into the mods folder.
 * Fabric Loader stops before loading any mod.
 *
 * The message does not contain the file name, only the ID, so the solution names the ID.
 */
class FabricModSharesBuiltinIdProblem extends FabricProblem
{
    protected string $modId;

    /**
     * @return string the ID of the built-in mod, e.g. "minecraft"
     */
    public function getModId(): string
    {
        return $this->modId;
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("fabric-mod-shares-builtin-id-problem", ["mod-id" => $this->getModId()]);
    }

    /**
     * Matches the ID and version of the built-in mod, followed by the conflicting mods in brackets:
     * net.fabricmc.loader.impl.FormattedException: Mods share ID with builtin mod minecraft 26.3: [minecraft 26.3]
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/Mods share ID with builtin mod (?<id>[a-z0-9_-]+) [^:\s]+: \[/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->modId = $matches['id'];
        $this->addSolution(new FabricBuiltinModFileRemoveSolution($this->getModId()));
    }

    /**
     * @inheritDoc
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static && $this->getModId() === $insight->getModId();
    }
}
