<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Paper\PaperCheckPermissionsSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Paper could not save one of its configuration files because access was denied.
 * Settings that are missing from the file only exist in memory with their default values.
 *
 * Paper only logs this message for an AccessDeniedException, other save errors are thrown instead.
 */
class ConfigNotWritableProblem extends PaperProblem
{
    protected string $path;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("paper-config-not-writable-problem", [
            "path" => $this->path
        ]);
    }

    /**
     * Matches the warning Paper logs when saving a configuration file fails, for example:
     * [16:52:55 WARN]: [Configurations] Could not save config/paper-global.yml: Paper could not persist the full set of configuration settings in the configuration file.
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Could not save (?<path>[^:\n]+): Paper could not persist the full set of configuration settings/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->path = $matches["path"];
        // Configurate saves atomically through a temporary file next to the configuration file,
        // so the file and its folder both need to be writable.
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
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getPath() === $insight->getPath();
    }
}
