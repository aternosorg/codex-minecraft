<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Vanilla;

use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\AuthServerSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class AuthServerProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Vanilla
 */
class AuthServerProblem extends VanillaProblem
{
    /**
     * Get a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("auth-server-problem");
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['#Failed to read from https://api\.minecraftservices\.com/publickeys due to Connect#'];
    }


    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param mixed $patternKey
     * @return void
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution(new AuthServerSolution());
    }
}