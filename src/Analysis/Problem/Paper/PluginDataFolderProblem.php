<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginProblem;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Paper\PaperCheckPermissionsSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Paper expected a plugin data folder but found a regular file, or could not rename an old data folder.
 */
class PluginDataFolderProblem extends PaperProblem
{
    protected string $path;
    protected ?string $newPath = null;
    protected ?string $pluginName = null;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        if ($this->newPath !== null) {
            return Translator::getInstance()->getTranslation("plugin-data-folder-rename-problem", [
                "path" => $this->path,
                "new-path" => $this->newPath
            ]);
        }

        return Translator::getInstance()->getTranslation("plugin-data-folder-not-directory-problem", [
            "path" => $this->path,
            "plugin-name" => $this->pluginName ?? "unknown"
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/Projected datafolder: `([^\']+)\' for (' . PluginProblem::PLUGIN_NAME . ') [^(]+ \(([^)]+)\) exists and is not a directory/',
            '/Unable to rename old data folder: `([^\']+)\' to: `([^\']+)\'/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        if ($patternKey === 0) {
            $this->path = $matches[1];
            $this->pluginName = $matches[2];
            $this->addSolution(new FileDeleteSolution($this->path));
            return;
        }

        $this->path = $matches[1];
        $this->newPath = $matches[2];
        $this->addSolution(new PaperCheckPermissionsSolution($this->path));
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return string|null
     */
    public function getNewPath(): ?string
    {
        return $this->newPath;
    }

    /**
     * @return string|null
     */
    public function getPluginName(): ?string
    {
        return $this->pluginName;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getPath() === $insight->getPath()
            && $this->getNewPath() === $insight->getNewPath();
    }
}
