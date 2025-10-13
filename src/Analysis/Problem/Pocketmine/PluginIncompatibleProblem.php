<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine;

use Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class PluginIncompatibleProblem extends PluginProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-incompatible-problem", ["plugin-name" => $this->getPluginName()]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            "/Could not load plugin \'([^\']+)\'\: Incompatible API version/",
            "/Could not load plugin \'([^\']+)\'\: Incompatible network protocol version/"
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->pluginName = $matches[1];

        $this->addSolution(new PluginInstallDifferentVersionSolution($this->getPluginName()));
        $this->addSolution(new PluginRemoveSolution($this->getPluginName()));
    }
}