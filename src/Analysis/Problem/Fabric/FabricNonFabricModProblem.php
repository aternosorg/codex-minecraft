<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Mod\ModInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A jar in the mods folder has no fabric.mod.json, e.g. a Forge or NeoForge mod, a Bukkit plugin or a Quilt-only mod.
 * Fabric Loader starts anyway, but silently ignores the file.
 */
class FabricNonFabricModProblem extends FabricProblem
{
    protected string $fileName;

    /**
     * @return string the name of the file in the mods folder, e.g. "jei-1.21.1-neoforge-19.21.0.247.jar"
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("non-fabric-mod-problem", ["file-name" => $this->getFileName()]);
    }

    /**
     * Matches every file in the list of non-Fabric mods:
     * [19:03:25] [main/WARN]: Found 3 non-fabric mods:
     *     - plainlib-1.0.jar
     *     - EssentialsX-2.21.0.jar
     *     - jei-1.21.1-neoforge-19.21.0.247.jar
     *
     * A single file is listed after "Found 1 non-fabric mod:".
     *
     * Each match is one file, so that every file gets its own problem and solutions.
     * The first file must directly follow the header line.
     * Every further file must directly follow the previous match, which `\G` (end of the previous match) ensures,
     * and `(?!^)` keeps `\G` from matching at the start of an entry that is not this list.
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/(?:Found \d+ non-fabric mods?:|(?!^)\G)\n\t- (?<file>[^\n]+)/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->fileName = $matches['file'];
        $this->addSolution(new FileDeleteSolution("mods/" . $this->getFileName()));
        $this->addSolution(new ModInstallDifferentVersionSolution($this->getFileName()));
    }

    /**
     * @inheritDoc
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static && $this->getFileName() === $insight->getFileName();
    }
}
