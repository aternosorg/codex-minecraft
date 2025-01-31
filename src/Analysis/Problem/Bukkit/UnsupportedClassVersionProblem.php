<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Analysis\Solution\UpdateJavaSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class UnsupportedClassVersionProblem extends PluginFileProblem
{
    protected ?string $classFileVersion = null;

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
        parent::setMatches($matches, $patternKey);

        $this->classFileVersion = $matches[3];
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
            // < 1.20
            '/Could not load \'plugins[\/\\\]([^\']+\.jar)\' in (?:folder )?\'([^\']+)\''
            . '\norg\.bukkit\.plugin\.InvalidPluginException\: java\.lang\.UnsupportedClassVersionError: .+ \(class file version (\d+)\.\d+\)/',
            // >= 1.20
            '/Could not load plugin \'((?!\.jar).*\.jar)\' in folder \'([^\']+)\''
            . '\norg\.bukkit\.plugin\.InvalidPluginException\: java\.lang\.UnsupportedClassVersionError: .+ \(class file version (\d+)\.\d+\)/'
        ];
    }
}