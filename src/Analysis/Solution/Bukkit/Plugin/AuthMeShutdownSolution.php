<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\Plugin;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileEditSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class AuthMeShutdownSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\Plugin
 */
class AuthMeShutdownSolution extends FileEditSolution
{
    /**
     * @var string
     */
    protected $path = 'plugins/AuthMe/config.yml';

    /**
     * @var bool
     */
    protected $relativePath = true;

    /**
     * @var string
     */
    protected $pattern = '/^(\s+)stopServer\: true$/';

    /**
     * @var string
     */
    protected $replacement = '$1stopServer: false';

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return parent::getMessage() . " " . Translator::getInstance()->getTranslation("authme-shutdown-solution");
    }
}