<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class AmbiguousPluginNameProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit
 */
class AmbiguousPluginNameProblem extends BukkitProblem
{
    /**
     * @var string
     */
    protected $firstPluginPath;

    /**
     * @var string
     */
    protected $secondPluginPath;

    /**
     * @var string
     */
    protected $pluginName;

    /**
     * Get a human readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        $first = end($pathParts = explode("/", $this->getFirstPluginPath()));
        $second = end($pathParts = explode("/", $this->getSecondPluginPath()));
        return Translator::getInstance()->getTranslation("ambiguous-plugin-name-problem", [
            "plugin-name" => $this->getPluginName(),
            "first-plugin-path" => $first,
            "second-plugin-path" => $second
        ]);
    }

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return array
     */
    public static function getPatterns(): array
    {
        return ['/Ambiguous plugin name `(\w+)\' for files `(plugins\/[^\']+)\' and `(plugins\/[^\']+)\' in `plugins\'/'];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param $patternKey
     * @return mixed
     */
    public function setMatches(array $matches, $patternKey)
    {
        $this->pluginName = $matches[1];
        $this->firstPluginPath = $matches[2];
        $this->secondPluginPath = $matches[3];

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
     * @param static $insight
     * @return bool
     */
    public function isEqual($insight): bool
    {
        return $this->getFirstPluginPath() === $insight->getFirstPluginPath()
            && $this->getSecondPluginPath() === $insight->getSecondPluginPath()
            && $this->getPluginName() === $insight->getPluginName();
    }
}