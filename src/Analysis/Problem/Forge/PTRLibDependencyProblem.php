<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution;

class PTRLibDependencyProblem extends UndefinedModDependencyProblem
{
    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/Encountered an unexpected exception\njava\.lang\.NoClassDefFoundError: com\/mia\/craftstudio\/IPackReaderCallback/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->modName = "PTRLib";
        $this->addSolution((new ModInstallSolution())->setModName($this->modName));
    }
}