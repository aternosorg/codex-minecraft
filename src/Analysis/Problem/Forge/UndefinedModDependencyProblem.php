<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class UndefinedModDependencyProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Forge
 */
abstract class UndefinedModDependencyProblem extends ModProblem
{
    /**
     * Get a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("undefined-mod-dependency-problem", ["dependency-mod-name" => $this->getModName()]);
    }
}