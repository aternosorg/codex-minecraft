<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Paper;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Set the forwarding secret of the Velocity proxy in config/paper-global.yml.
 * Deliberately not automatable, because the secret is only known to the proxy.
 */
class VelocitySecretSetSolution extends PaperSolution
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("paper-velocity-secret-set-solution");
    }
}