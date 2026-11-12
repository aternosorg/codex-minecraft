<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Paper\PaperCheckPermissionsSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Paper failed to copy, rename or delete a plugin while applying an update.
 */
class PluginUpdateProblem extends PaperProblem
{
    protected string $sourcePath;
    protected string $targetPath = "";
    protected int $variant = 0;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return match ($this->variant) {
            0 => Translator::getInstance()->getTranslation("plugin-update-copy-problem", [
                "source-path" => $this->sourcePath,
                "target-path" => $this->targetPath
            ]),
            1 => Translator::getInstance()->getTranslation("plugin-update-rename-problem", [
                "source-path" => $this->sourcePath,
                "target-path" => $this->targetPath
            ]),
            default => Translator::getInstance()->getTranslation("plugin-update-delete-problem", [
                "source-path" => $this->sourcePath
            ]),
        };
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/Could not copy \'([^\']+)\' to \'([^\']+)\' in update plugin process/',
            '/Could not rename \'([^\']+)\' to \'([^\']+)\' in update plugin process/',
            '/Could not delete \'([^\']+)\' from update folder in update plugin process/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->variant = $patternKey;
        $this->sourcePath = $matches[1];

        if ($patternKey !== 2) {
            $this->targetPath = $matches[2];
        }

        $this->addSolution(new PaperCheckPermissionsSolution("plugins"));
    }

    /**
     * @return string
     */
    public function getSourcePath(): string
    {
        return $this->sourcePath;
    }

    /**
     * @return string
     */
    public function getTargetPath(): string
    {
        return $this->targetPath;
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
            && $this->getSourcePath() === $insight->getSourcePath()
            && $this->getTargetPath() === $insight->getTargetPath();
    }
}
