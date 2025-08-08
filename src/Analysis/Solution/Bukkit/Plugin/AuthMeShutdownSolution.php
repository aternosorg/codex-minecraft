<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\Plugin;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileEditSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class AuthMeShutdownSolution extends FileEditSolution
{
    protected ?string $path = 'plugins/AuthMe/config.yml';
    protected bool $relativePath = true;
    protected ?string $pattern = '/^(\s+)stopServer\: true$/';
    protected ?string $replacement = '$1stopServer: false';

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return parent::getMessage() . " " . Translator::getInstance()->getTranslation("authme-shutdown-solution");
    }
}