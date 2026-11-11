<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Paper;

use Aternos\Codex\Minecraft\Translator\Translator;

class PaperRemoveDependencySolution extends PaperSolution
{
    /**
     * @param string $cycle
     */
    public function __construct(protected string $cycle)
    {
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("remove-dependency-solution", [
            "cycle" => $this->cycle
        ]);
    }

    /**
     * @return string
     */
    public function getCycle(): string
    {
        return $this->cycle;
    }
}
