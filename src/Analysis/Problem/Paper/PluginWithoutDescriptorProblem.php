<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FilePathType;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A file that should be loaded as a plugin contains neither a plugin.yml nor a paper-plugin.yml,
 * e.g. a mod or library jar placed in the plugins folder.
 */
class PluginWithoutDescriptorProblem extends PaperProblem
{
    protected string $filePath;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-without-descriptor-problem", [
            "file-path" => $this->getFilePath()
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            // Directory 'plugins/foo.jar' does not contain a paper-plugin.yml or plugin.yml! ...
            // File 'foo.jar' specified through 'add-plugin' argument does not contain a paper-plugin.yml or plugin.yml! ...
            '/(?:Directory|File) \'([^\'\n]+)\'(?: specified through \'add-plugin\' argument)? does not contain a '
            . '(?:paper-plugin\.yml or plugin\.yml|plugin\.yml or paper-plugin\.yml)! Could not determine plugin type/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->filePath = $matches[1];

        $this->addSolution(new FileDeleteSolution($this->getFilePath(), $this->getFilePathType()));
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }

    /**
     * @return FilePathType
     */
    protected function getFilePathType(): FilePathType
    {
        if (str_starts_with($this->filePath, "/") || preg_match('/^[a-zA-Z]:[\/\\\\]/', $this->filePath)) {
            return FilePathType::ABSOLUTE;
        }
        return FilePathType::RELATIVE;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getFilePath() === $insight->getFilePath();
    }
}
