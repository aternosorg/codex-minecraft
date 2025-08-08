<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Minecraft\Analysis\Solution\Paper\VersionDowngradeSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\GenerateNewWorldSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class VersionDowngradeProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Paper
 */
class VersionDowngradeProblem extends PaperProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("version-downgrade-problem");
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/java\.lang\.RuntimeException: Server attempted to load chunk saved with newer version of minecraft! \d+ > \d+/'];
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
        $this->addSolution(new VersionDowngradeSolution());
        $this->addSolution(new GenerateNewWorldSolution());
    }
}