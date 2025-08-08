<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Pocketmine\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class PluginRuntimeProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Pocketmine
 */
class PluginRuntimeProblem extends PluginProblem
{
    protected ?string $pluginPath = null;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-runtime-problem", ["plugin-name" => $this->getPluginName()]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Error: \"[^\"]+\" \(EXCEPTION\) in \"(plugins\/([^\.]+)\.phar)(?:\/[^\/\"]+)+\" at line [0-9]+/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, $patternKey): void
    {
        $this->pluginPath = $matches[1];
        $this->pluginName = $matches[2];

        $this->addSolution((new FileDeleteSolution())->setRelativePath($this->getPluginPath()));
        $this->addSolution((new PluginInstallDifferentVersionSolution())->setPluginName($this->getPluginName()));
    }

    /**
     * @return string|null
     */
    public function getPluginPath(): ?string
    {
        return $this->pluginPath;
    }
}