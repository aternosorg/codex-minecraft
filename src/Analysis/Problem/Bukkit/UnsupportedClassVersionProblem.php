<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\ServerInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\UpdateJavaSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class UnsupportedClassVersionProblem extends PluginProblem
{
    protected ?string $pluginPath = null;

    protected ?string $classFileVersion = null;

    /**
     * @return string|null
     */
    public function getPluginPath(): ?string
    {
        return $this->pluginPath;
    }

    /**
     * @return string|null
     */
    public function getJavaVersion(): ?string
    {
        return (int)$this->classFileVersion - 44;
    }

    /**
     * Get a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-java-version-problem", [
            "plugin-name" => $this->getPluginName(),
            "java-version" => $this->getJavaVersion()
        ]);

    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param mixed $patternKey
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->pluginPath = $matches[1];
        $this->pluginName = $matches[2];
        $this->classFileVersion = $matches[3];

        $this->addSolution((new FileDeleteSolution())->setRelativePath($this->getPluginPath()));
        $this->addSolution((new UpdateJavaSolution())->setVersion($this->getJavaVersion()));
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
            '/Could not load \'(plugins[\/\\\]((?!\.jar).*)\.jar)\' in folder \'[^\']+\''
            . '\norg\.bukkit\.plugin\.InvalidPluginException\: java.lang.UnsupportedClassVersionError: .+ \(class file version (\d+)\.\d+\)/'
        ];
    }
}