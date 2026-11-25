<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PermissionRemoveSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * The server could not load the custom permissions from permissions.yml (or the file set as permissions-file in bukkit.yml).
 *
 * Either the file is not valid YAML, so all custom permissions are ignored,
 * or it defines a permission that the server or a plugin already registered.
 * The second only happens when the file is loaded after the plugins, which is the default on Spigot,
 * but not on Paper (load-permissions-yml-before-plugins in paper-global.yml).
 */
class PermissionsFileProblem extends BukkitProblem
{
    public const string INVALID_YAML = "invalid-yaml";
    public const string ALREADY_DEFINED = "already-defined";

    protected string $variant;
    protected string $filePath;
    protected ?string $permission = null;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return match ($this->variant) {
            self::INVALID_YAML => Translator::getInstance()->getTranslation("permissions-file-invalid-problem", [
                "file-path" => $this->getFilePath()
            ]),
            self::ALREADY_DEFINED => Translator::getInstance()->getTranslation("permissions-file-already-defined-problem", [
                "file-path" => $this->getFilePath(),
                "permission" => $this->getPermission()
            ]),
        };
    }

    /**
     * The pattern key is the variant used in getMessage(), for example:
     * Server permissions file permissions.yml is not valid YAML: while parsing a flow sequence
     * Server permissions file permissions.yml is not valid YAML.
     *
     * Permission in permissions.yml was already defined
     * java.lang.IllegalArgumentException: The permission bukkit.command.plugins is already defined!
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            self::INVALID_YAML => '/Server permissions file (?<file>[^\n]+?) is not valid YAML/',
            self::ALREADY_DEFINED => '/Permission in (?<file>[^\n]+) was already defined'
                . '\njava\.lang\.IllegalArgumentException: The permission (?<permission>\S+) is already defined!/',
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->variant = $patternKey;
        $this->filePath = $matches["file"];

        if ($this->variant === self::INVALID_YAML) {
            $this->addSolution(new FileDeleteSolution($this->getFilePath()));
        } else {
            $this->permission = $matches["permission"];
            $this->addSolution(new PermissionRemoveSolution($this->getPermission(), $this->getFilePath()));
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
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }

    /**
     * @return string|null The permission that was already defined, null if the file is not valid YAML
     */
    public function getPermission(): ?string
    {
        return $this->permission;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getVariant() === $insight->getVariant()
            && $this->getFilePath() === $insight->getFilePath()
            && $this->getPermission() === $insight->getPermission();
    }
}
