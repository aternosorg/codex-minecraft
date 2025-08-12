<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Minecraft\Analysis\Solution\Paper\VersionDowngradeSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\GenerateNewWorldSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

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
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution(new VersionDowngradeSolution());
        $this->addSolution(new GenerateNewWorldSolution());
    }
}