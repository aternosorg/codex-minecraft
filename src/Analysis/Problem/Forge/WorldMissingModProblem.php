<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Minecraft\Analysis\Solution\DoNothingSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class WorldMissingModProblem extends ModProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("world-missing-mod-problem", ["mod-name" => $this->getModName()]);
    }

    /**
     * Matches e.g.:
     * This world was saved with mod lucraftcore which appears to be missing, things may not work well
     *
     * The mod IDs "forge" and "minecraft" are skipped, because they are not mods the user could install.
     * Mods whose ID only starts with these names, like "forgemultipartcbe", are still matched.
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/This world was saved with mod (?!(?:forge|minecraft) )(?<mod>\w+) which appears to be missing, things may not work well/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->modName = $matches["mod"];

        $this->addSolution(new ModInstallSolution($this->getModName()));
        $this->addSolution(new DoNothingSolution());
    }
}