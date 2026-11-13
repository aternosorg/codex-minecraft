<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileEditSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FilePathType;
use Aternos\Codex\Minecraft\Analysis\Solution\Paper\PaperCheckPermissionsSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * The update folder configured in bukkit.yml is unusable.
 */
class MisconfiguredUpdateDirectoryProblem extends PaperProblem
{
    protected string $path = "";
    protected string $pluginPath = "";
    protected int $variant = 0;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return match ($this->variant) {
            0 => Translator::getInstance()->getTranslation("misconfigured-update-directory-non-directory-problem", [
                "path" => $this->path
            ]),
            1 => Translator::getInstance()->getTranslation("misconfigured-update-directory-same-problem", [
                "path" => $this->path,
                "plugin-path" => $this->pluginPath
            ]),
            default => Translator::getInstance()->getTranslation("misconfigured-update-directory-access-problem"),
        };
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/Your configured update directory \((.+)\) in bukkit\.yml is pointing to a non-directory path\./',
            '/Your configured update directory \((.+)\) in bukkit\.yml is pointing to the same location as the plugin directory \((.+)\)\./',
            '/Failed to compare update\/plugin directory/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->variant = $patternKey;

        if ($patternKey === 0) {
            $this->path = $matches[1];
        } elseif ($patternKey === 1) {
            $this->path = $matches[1];
            $this->pluginPath = $matches[2];
        }

        if ($patternKey === 2) {
            $this->addSolution(new PaperCheckPermissionsSolution("plugins"));
            return;
        }

        $this->addSolution(new FileEditSolution(
            "bukkit.yml",
            FilePathType::RELATIVE,
            '/(^\s*update-folder:\s*).*$/m',
            '${1}update'
        ));
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getPluginPath(): string
    {
        return $this->pluginPath;
    }

    /**
     * @return int
     */
    public function getVariant(): int
    {
        return $this->variant;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getVariant() === $insight->getVariant()
            && $this->getPath() === $insight->getPath();
    }
}
