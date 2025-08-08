<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Analysis\Solution\UpdateJavaSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class UnsupportedClassVersionProblem extends PluginFileProblem
{
    protected ?int $classFileVersion = null;

    /**
     * @return int|null
     */
    public function getJavaVersion(): ?int
    {
        if ($this->classFileVersion === null) {
            return null;
        }

        return $this->classFileVersion - 44;
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-java-version-problem", [
            "plugin-name" => $this->getPluginName(),
            "java-version" => $this->getJavaVersion()
        ]);

    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        parent::setMatches($matches, $patternKey);

        if ($matches[3] && is_numeric($matches[3])) {
            $this->classFileVersion = intval($matches[3]);
        }

        $this->addSolution((new UpdateJavaSolution())->setVersion($this->getJavaVersion()));
    }


    /**
     * @inheritDoc
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