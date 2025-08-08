<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\Plugin;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileEditSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FilePathType;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class AuthMeShutdownSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\Plugin
 */
class AuthMeShutdownSolution extends FileEditSolution
{
    public function __construct(
        protected string       $path = 'plugins/AuthMe/config.yml',
        protected FilePathType $type = FilePathType::RELATIVE,
        protected string       $pattern = '/^(\s+)stopServer\: true$/',
        protected string       $replacement = '$1stopServer: false'
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