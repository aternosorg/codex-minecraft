<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\Plugin;

use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginConfigureSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class PermissionsExConfigProblem extends SpecificPluginProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("pex-config-problem");
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Your configuration must be fixed before PEX will enable/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution(new PluginConfigureSolution("PermissionsEx", "plugins/PermissionsEx/permissions.yml"));
        $this->addSolution(new PluginRemoveSolution("PermissionsEx"));
    }
}