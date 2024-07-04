<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

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
        $pluginFileName = $matches[1]; // worldedit-bukkit-7.3.4-beta-01.jar
        $pluginName = $matches[2]; // worldedit-bukkit-7.3.4-beta-01
        $folderName = $matches[3]; // plugins

        $this->pluginPath = $folderName . '/' . $pluginFileName;
        $this->pluginName = $pluginName;
        $this->classFileVersion = $matches[4];

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
            '/Could not load \'plugins[\/\\\](((?!\.jar).*)\.jar)\' in folder \'([^\']+)\''
            . '\norg\.bukkit\.plugin\.InvalidPluginException\: java\.lang\.UnsupportedClassVersionError: .+ \(class file version (\d+)\.\d+\)/',
            '/Could not load plugin \'(((?!\.jar).*)\.jar)\' in folder \'([^\']+)\''
            . '\norg\.bukkit\.plugin\.InvalidPluginException\: java\.lang\.UnsupportedClassVersionError: .+ \(class file version (\d+)\.\d+\)/'
        ];
    }
}