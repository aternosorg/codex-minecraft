<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Paper\PaperCheckPermissionsSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Paper cannot use its cache folder .paper in the server folder, and the server crashes during startup.
 *
 * Either .paper exists, but is a file, or Paper cannot create the folder, for example because of missing permissions.
 * Both have the same message, the variant only decides the solution.
 */
class CacheDirInvalidProblem extends PaperProblem
{
    public const string NOT_DIRECTORY = "not-directory";
    public const string CREATE_FAILED = "create-failed";
    protected const string PATH = ".paper";

    protected string $variant;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("paper-cache-dir-problem", [
            "path" => static::PATH
        ]);
    }

    /**
     * The pattern key is the variant used in setMatches(). The exceptions are logged as a cause, for example:
     * Caused by: java.lang.ExceptionInInitializerError: Exception java.lang.RuntimeException: .paper cache dir is not a directory [in thread "Server thread"]
     * Caused by: java.lang.ExceptionInInitializerError: Exception java.lang.RuntimeException: Error creating .paper cache dir [in thread "Server thread"]
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            self::NOT_DIRECTORY => '/java\.lang\.RuntimeException: \.paper cache dir is not a directory/',
            self::CREATE_FAILED => '/java\.lang\.RuntimeException: Error creating \.paper cache dir/',
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->variant = $patternKey;

        if ($this->variant === self::NOT_DIRECTORY) {
            $this->addSolution(new FileDeleteSolution(static::PATH));
        } else {
            $this->addSolution(new PaperCheckPermissionsSolution(static::PATH));
        }
    }

    /**
     * @return string
     */
    public function getVariant(): string
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
            && $this->getVariant() === $insight->getVariant();
    }
}
