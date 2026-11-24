<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FilePathType;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * The fabric.mod.json of a mod file is not valid JSON or breaks the rules of the format,
 * e.g. an invalid or missing mod ID. Fabric Loader stops the mod discovery.
 * This mostly affects self-built or manually edited mods.
 *
 * A newer schema version shares the beginning of the message, but is not matched,
 * because the mod itself is fine there and Fabric Loader has to be updated instead.
 */
class FabricInvalidModMetadataProblem extends FabricProblem
{
    protected string $path;

    /**
     * @return string the absolute path of the mod file, for nested jars the outer mod file
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-metadata-invalid-problem", ["file-path" => $this->getPath()]);
    }

    /**
     * Matches the path of the mod file, followed by the reason:
     * Caused by: net.fabricmc.loader.impl.metadata.ParseMetadataException: Error reading fabric.mod.json file for mod at /srv/server/mods/badid.jar: Invalid mod id Foo: It starts with an invalid character 'F' ...
     *
     * For a nested jar the loader writes "/srv/server/mods/outer.jar -> inner.jar", and only the outer mod file is captured.
     * The path ends at the first ": ", which does not occur in Windows paths like "C:\server\mods\foo.jar".
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            "/Error reading fabric\.mod\.json file for mod at (?<path>[^\n]+?)(?: -> [^\n]+?)?: (?!This version of fabric-loader doesn't support the newer schema version)/"
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->path = $matches['path'];
        $this->addSolution(new FileDeleteSolution($this->getPath(), FilePathType::ABSOLUTE));
    }

    /**
     * @inheritDoc
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static && $this->getPath() === $insight->getPath();
    }
}
