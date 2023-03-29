<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Folia;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class InstallNonRegionalTickingSoftwareSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Folia
 */
class InstallNonRegionalTickingSoftwareSolution extends FoliaSolution
{
    /**
     * Get the solution as a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("install-non-regional-ticking-software-solution", [
            "software-name" => "Paper"
        ]);
    }
}