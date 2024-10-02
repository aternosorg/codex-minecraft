<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\ServerInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class UnsupportedApiVersionProblem extends BukkitPluginProblem
{
    protected ?string $pluginPath = null;

    protected ?string $apiVersion = null;

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
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }

    /**
     * Get a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-api-version-problem", [
            "plugin-name" => $this->getPluginName(),
            "software-version" => $this->getApiVersion()
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
        $folderName = str_replace("plugins/.paper-remapped", "plugins", $matches[3]); // plugins or plugins/.paper-remapped

        $this->pluginPath = $folderName . '/' . $pluginFileName;
        $this->pluginName = $pluginName;
        $this->apiVersion = $matches[4];

        $this->addSolution((new PluginInstallDifferentVersionSolution())->setPluginName($this->getPluginName()));
        $this->addSolution((new FileDeleteSolution())->setRelativePath($this->getPluginPath()));
        $this->addSolution((new ServerInstallDifferentVersionSolution())->setSoftwareVersion($this->getApiVersion()));
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
            // < 1.20
            '/Could not load \'plugins[\/\\\](((?!\.jar).*)\.jar)\' in folder \'([^\']+)\''
            . '\norg\.bukkit\.plugin\.InvalidPluginException\: Unsupported API version ([0-9]+\.[0-9]+)/',
            // >= 1.20
            '/Could not load plugin \'(((?!\.jar).*)\.jar)\' in folder \'([^\']+)\''
            . '\norg\.bukkit\.plugin\.InvalidPluginException\: Unsupported API version ([0-9]+\.[0-9]+)/',
        ];
    }
}