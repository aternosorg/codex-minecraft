<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Paper;

use Aternos\Codex\Minecraft\Translator\Translator;

class VersionDowngradeSolution extends PaperSolution
{
    /**
     * Get the solution as a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("version-downgrade-solution");
    }
}