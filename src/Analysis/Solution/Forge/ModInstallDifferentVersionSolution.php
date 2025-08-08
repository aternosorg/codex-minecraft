<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Forge;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class ModInstallDifferentVersionSolution
 *
 * @package Aternos\Codex\Minecraft\Analysis\Solution\Forge
 */
class ModInstallDifferentVersionSolution extends ModSolution
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-install-different-version-solution", ["mod-name" => $this->getModName()]);
    }
}