<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FilePathType;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A server jar was placed in the plugins folder.
 * Paper refuses to load it as a plugin and logs the path of the file.
 */
class ServerJarInPluginFolderProblem extends PaperProblem
{
    protected string $filePath;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("server-jar-in-plugin-folder-problem", [
            "file-path" => $this->getFilePath()
        ]);
    }

    /**
     * Example: "Error loading plugin: plugins/server.jar appears to be a server jar! Server jars do not belong in the plugin folder."
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            // the path is either relative (plugins/server.jar) or absolute (/srv/plugins/server.jar, C:\server\plugins\server.jar)
            // it always follows ": ", starting it anywhere else makes the pattern scan the rest of the line from every position
            '/(?<=: )((?:[a-zA-Z]:)?[^\s:][^\n:]*?\.jar) appears to be a server jar! Server jars do not belong in the plugin folder\./'
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
