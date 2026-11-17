<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FilePathType;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A file in the mods folder is not a valid jar (zip) file, e.g. after an aborted download or upload,
 * or because an HTML error page was saved as a jar.
 * Fabric Loader stops the mod discovery when it cannot read a mod file.
 *
 * Other errors while analysing a mod file, like an invalid fabric.mod.json, are not matched,
 * because the file itself can be read and the mod has to be fixed instead.
 */
class FabricCorruptModFileProblem extends FabricProblem
{
    protected string $path;

    /**
     * @return string the absolute path of the corrupt mod file, for nested jars the outer mod file
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
        return Translator::getInstance()->getTranslation("mod-file-corrupt-problem", ["file-path" => $this->getPath()]);
    }

    /**
     * Matches a mod file or a jar nested in a mod file that cannot be read as a zip file:
     * Caused by: java.lang.RuntimeException: Error analyzing [/srv/server/mods/html.jar]: java.util.zip.ZipException: zip END header not found
     * Caused by: java.lang.RuntimeException: Error analyzing nested jar META-INF/jars/lib.jar from [/srv/server/mods/nested.jar]: java.io.EOFException
     *
     * For a nested jar, the path in brackets is the outer mod file, which is the file to replace.
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/Error analyzing (?:nested jar \S+ from )?\[(?<path>[^\]\n]+)\]: (?:java\.util\.zip\.ZipException|java\.io\.EOFException)/'
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
     * The loader repeats the error in several "Caused by" lines, so the same file is reported once.
     *
     * @inheritDoc
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static && $this->getPath() === $insight->getPath();
    }
}
