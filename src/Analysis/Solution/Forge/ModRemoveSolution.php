<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Forge;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class ModRemoveSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Forge
 */
class ModRemoveSolution extends ModSolution
{
    /**
     * Get the solution as a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-remove-solution", ["mod-name" => $this->getModName()]);
    }
}