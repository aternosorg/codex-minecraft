<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\CommandRunSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class FmlConfirmProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Forge
 */
class FmlConfirmProblem extends ForgeProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("forge-confirm-problem");
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Run the command \/fml confirm or or \/fml cancel to proceed\./'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution((new CommandRunSolution())->setCommand('/fml confirm'));
    }
}