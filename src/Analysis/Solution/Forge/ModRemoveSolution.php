<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Forge;

use Aternos\Codex\Minecraft\Translator\Translator;

class ModRemoveSolution extends ModSolution
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-remove-solution", ["mod-name" => $this->getModName()]);
    }
}