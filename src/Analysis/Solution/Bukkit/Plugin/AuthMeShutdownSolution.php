<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\Plugin;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileEditSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\File\PathType;
use Aternos\Codex\Minecraft\Translator\Translator;

class AuthMeShutdownSolution extends FileEditSolution
{
    public function __construct(
        string   $path = 'plugins/AuthMe/config.yml',
        PathType $type = PathType::RELATIVE,
        string   $pattern = '/^(\s+)stopServer\: true$/',
        string   $replacement = '$1stopServer: false'
    )
    {
        parent::__construct($path, $type, $pattern, $replacement);
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return parent::getMessage() . " " . Translator::getInstance()->getTranslation("authme-shutdown-solution");
    }
}
