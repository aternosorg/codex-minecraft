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
     * The pattern key is the variant used in getMessage():
     * Could not copy 'plugins/update/TestPlugin-1.1.jar' to 'plugins/TestPlugin.jar' in update plugin process
     * Could not rename 'plugins/update/TestPlugin-1.1.jar' to 'plugins/TestPlugin.jar' in update plugin process
     * Could not delete 'plugins/update/TestPlugin-1.1.jar' from update folder in update plugin process
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/Could not copy \'(?<source>[^\']+)\' to \'(?<target>[^\']+)\' in update plugin process/',
            '/Could not rename \'(?<source>[^\']+)\' to \'(?<target>[^\']+)\' in update plugin process/',
            '/Could not delete \'(?<source>[^\']+)\' from update folder in update plugin process/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->variant = $patternKey;
        $this->sourcePath = $matches["source"];
        $this->targetPath = $matches["target"] ?? "";

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
