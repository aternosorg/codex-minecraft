<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Folia;

use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\BukkitPluginFileProblem;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Folia\InstallNonRegionalTickingSoftwareSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class PluginRegionalTickingProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Folia
 */
class PluginRegionalTickingProblem extends BukkitPluginFileProblem
{

    /**
     * Get a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-regional-ticking-problem", [
            "plugin-name" => $this->getPluginName()
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/Could not load plugin \'((?!\.jar).*\.jar)\' in folder \'([^\']+)\''
            . '\norg.bukkit.plugin.InvalidPluginException: Plugin (\w+) v(?:[^\n]*) is not marked as supporting regionised multithreading/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        // worldedit-bukkit-7.3.4-beta-01.jar OR .paper-remapped/worldedit-bukkit-7.3.4-beta-01.jar
        $pluginFileName = $this->extractPluginFileName($matches[1]);
        // plugins OR plugins/.paper-remapped
        $folderPath = $this->correctPluginPath($matches[2]);

        $this->pluginFilePath = $folderPath . '/' . $pluginFileName;
        $this->pluginName = $matches[3];

        $this->addSolution((new PluginInstallDifferentVersionSolution())->setPluginName($this->getPluginName()));
        $this->addSolution((new FileDeleteSolution())->setRelativePath($this->getPluginFilePath()));
        $this->addSolution(new InstallNonRegionalTickingSoftwareSolution());
    }

}