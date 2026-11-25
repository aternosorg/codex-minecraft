<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Paper;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Back up and delete the 'paper-world.yml' of a single world, so that Paper creates it again with default settings.
 * Names the world instead of a path, because the location of the file depends on the Paper version.
 */
class PaperWorldConfigResetSolution extends PaperSolution
{
    /**
     * @param string $worldName The name or key of the world, like 'world_nether' or 'minecraft:the_nether'
     */
    public function __construct(protected string $worldName)
    {
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("paper-world-config-reset-solution", [
            "world-name" => $this->worldName
        ]);
    }

    /**
     * @return string
     */
    public function getWorldName(): string
    {
        return $this->worldName;
    }
}
