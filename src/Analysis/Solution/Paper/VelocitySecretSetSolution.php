<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Paper;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Set the forwarding secret of the Velocity proxy in the Paper configuration.
 * Deliberately not automatable, because the secret is only known to the proxy.
 */
class VelocitySecretSetSolution extends PaperSolution
{
    /**
     * @param string $filePath The path of the config file, relative to the server root, like `config/paper-global.yml`
     * @param string $setting The path of the setting in the config file, like `proxies.velocity.secret`
     */
    public function __construct(protected string $filePath, protected string $setting)
    {
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("paper-velocity-secret-set-solution", [
            "file-path" => $this->filePath,
            "setting" => $this->setting
        ]);
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }

    /**
     * @return string
     */
    public function getSetting(): string
    {
        return $this->setting;
    }
}