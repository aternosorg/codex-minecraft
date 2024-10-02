<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class AmbiguousPluginNameProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit
 */
class AmbiguousPluginNameProblem extends BukkitProblem
{
    protected ?string $firstPluginPath = null;
    protected ?string $secondPluginPath = null;
    protected ?string $pluginName = null;

    /**
     * Get a human-readable message
     *
     * @return string
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
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return [
            '/Ambiguous plugin name `(\S+)\' for files `(plugins\/[^\']+)\' and `(plugins\/[^\']+)\' in `plugins\'/',
            '/Ambiguous plugin name \'(\S+)\' for files \'(plugins\/[^\']+)\' and \'(plugins\/[^\']+)\' in \'(plugins[^\']*)\'/'
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
        $this->firstPluginPath = str_replace("plugins/.paper-remapped/", "plugins/", $matches[2]);
        $this->secondPluginPath = str_replace("plugins/.paper-remapped/", "plugins/", $matches[3]);

        $this->addSolution((new FileDeleteSolution())->setRelativePath($this->getFirstPluginPath()));
        $this->addSolution((new FileDeleteSolution())->setRelativePath($this->getSecondPluginPath()));
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
     * @return string
     */
    public function getPluginName(): string
    {
        return $this->pluginName;
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