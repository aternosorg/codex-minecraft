<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine;

use Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class PluginIncompatibleProblem extends PluginProblem
{
    /**
     * Get a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-incompatible-problem", ["plugin-name" => $this->getPluginName()]);
    }

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return [
            "/Could not load plugin \'([^\']+)\'\: Incompatible API version/",
            "/Could not load plugin \'([^\']+)\'\: Incompatible network protocol version/"
        ];
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
        $this->pluginName = $matches[1];

        $this->addSolution((new PluginInstallDifferentVersionSolution())->setPluginName($this->getPluginName()));
        $this->addSolution((new PluginRemoveSolution())->setPluginName($this->getPluginName()));
    }
}