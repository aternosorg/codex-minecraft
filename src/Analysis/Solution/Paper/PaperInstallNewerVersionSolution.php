<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Paper;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Install the newer Paper version that a config file was created with.
 */
class PaperInstallNewerVersionSolution extends PaperSolution
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("paper-install-newer-version-solution");
    }
}
