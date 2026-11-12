<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class AmbiguousPluginNameProblem extends PluginProblem
{
    protected string $firstPluginPath;
    protected string $secondPluginPath;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        $firstPluginPathParts = explode("/", $this->getFirstPluginPath());
        $firstPluginName = end($firstPluginPathParts);

        $secondPluginPathParts = explode("/", $this->getSecondPluginPath());
        $secondPluginName = end($secondPluginPathParts);

        return Translator::getInstance()->getTranslation("ambiguous-plugin-name-problem", [
            "plugin-name" => $this->getPluginName(),
            "first-plugin-path" => $firstPluginName,
            "second-plugin-path" => $secondPluginName
        ]);
    }

    /**
     * Bukkit/Spigot quote with a backtick and a quote, Paper's ModernPluginLoadingStrategy with quotes only:
     * Ambiguous plugin name `WorldEdit' for files `plugins/worldedit-bukkit-7.0.0-beta-05.jar' and `plugins/worldedit-bukkit-7.0.0-beta-01.jar' in `plugins'
     * Ambiguous plugin name 'WorldEdit' for files 'plugins/.paper-remapped/worldedit-bukkit-7.3.6.jar' and 'plugins/.paper-remapped/worldedit-bukkit-7.3.4.jar' in 'plugins/.paper-remapped'
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/Ambiguous plugin name `(?<plugin>' . static::PLUGIN_NAME . ')\' for files `(?<first>plugins\/[^\']+)\' and `(?<second>plugins\/[^\']+)\' in `plugins\'/',
            '/Ambiguous plugin name \'(?<plugin>' . static::PLUGIN_NAME . ')\' for files \'(?<first>plugins\/[^\']+)\' and \'(?<second>plugins\/[^\']+)\' in \'plugins[^\']*\'/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->pluginName = $matches["plugin"];
        $this->firstPluginPath = $this->correctPluginPath($matches["first"]);
        $this->secondPluginPath = $this->correctPluginPath($matches["second"]);

        $this->addSolution(new FileDeleteSolution($this->getFirstPluginPath()));
        $this->addSolution(new FileDeleteSolution($this->getSecondPluginPath()));
    }

    /**
     * @return string
     */
    public function getFirstPluginPath(): string
    {
        return $this->firstPluginPath;
    }

    /**
     * @return string
     */
    public function getSecondPluginPath(): string
    {
        return $this->secondPluginPath;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getFirstPluginPath() === $insight->getFirstPluginPath()
            && $this->getSecondPluginPath() === $insight->getSecondPluginPath()
            && $this->getPluginName() === $insight->getPluginName();
    }
}