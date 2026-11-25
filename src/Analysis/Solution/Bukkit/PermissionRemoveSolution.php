<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Remove a permission from the permissions file of the server, because it is already defined elsewhere.
 */
class PermissionRemoveSolution extends BukkitSolution
{
    /**
     * @param string $permission
     * @param string $filePath
     */
    public function __construct(protected string $permission, protected string $filePath)
    {
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("permission-remove-solution", [
            "permission" => $this->permission,
            "file-path" => $this->filePath
        ]);
    }

    /**
     * @return string
     */
    public function getPermission(): string
    {
        return $this->permission;
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }
}
