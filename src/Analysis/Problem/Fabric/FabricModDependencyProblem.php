<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class FabricModDependencyProblem extends FabricModProblem
{
    protected ?string $dependency = null;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        $mods = "'" . $this->getDependency() . "'";

        return Translator::getInstance()->getTranslation("mod-dependency-problem", ["mod-name" => $this->getModName(), "dependency-mod-name" => $mods]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            'short-error' => '/net\.fabricmc\.loader\.discovery\.ModResolutionException: Could not find required mod: ' . static::$modNamePattern . ' requires {' . static::$modNamePattern . ' @ \[([^\]]+)\]}/',
            'any' => "/- Mod " . static::$modNamePattern . "(?: [^ ]+)? requires any version of (?:mod )?" . static::$modNamePattern . ",/",
            'minimum' => "/- Mod " . static::$modNamePattern . "(?: [^ ]+)? requires version ([^ ]+) or later of (?:mod )?" . static::$modNamePattern . ",/",
            'any-after' => "/- Mod " . static::$modNamePattern . "(?: [^ ]+)? requires any version after ([^ ]+) of (?:mod )?" . static::$modNamePattern . ",/",
            'any-before' => "/- Mod " . static::$modNamePattern . "(?: [^ ]+)? requires any version before ([^ ]+) of (?:mod )?" . static::$modNamePattern . ",/",
            'specific' => "/- Mod " . static::$modNamePattern . "(?: [^ ]+)? requires version ([^ ]+) of (?:mod )?" . static::$modNamePattern . ",/",
            'between' => "/- Mod " . static::$modNamePattern . "(?: [^ ]+)? requires any version between ([^ ]+) \((inclusive|exclusive)\) and ([^ ]+) \((inclusive|exclusive)\) of (?:mod )?" . static::$modNamePattern . ",/"
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        switch ($patternKey) {
            case 'short-error':
                $this->setModName($matches[1]);
                $this->setDependency($matches[2]);
                $solution = (new ModInstallSolution($this->getDependency()));
                if ($matches[3] !== '*') {
                    $solution->setModVersion($matches[3]);
                }
                $this->addSolution($solution);
                return;

            case 'any':
                $this->setModName($matches[1]);
                $this->setDependency($matches[2]);
                $this->addSolution(new ModInstallSolution($this->getDependency()));
                return;

            case 'minimum':
                $symbol = ">=";
                break;

            case 'any-after':
                $symbol = ">";
                break;

            case 'any-before':
                $symbol = "<";
                break;

            case 'between':
                $this->setModName($matches[1]);
                $this->setDependency($matches[6]);

                $firstSymbol = $matches[3] === "exclusive" ? ">" : ">=";
                $secondSymbol = $matches[5] === "exclusive" ? "<" : "<=";
                $modVersion = $firstSymbol . $matches[2] . ", " . $secondSymbol . $matches[4];

                $this->addSolution(new ModInstallSolution($this->getDependency(), $modVersion));
                return;

            default:
                $symbol = "";
                break;
        }

        $this->setModName($matches[1]);
        $this->setDependency($matches[3]);
        $modVersion = $symbol . $matches[2];
        $this->addSolution(new ModInstallSolution($this->getDependency(), $modVersion));
    }

    /**
     * @return string|null
     */
    public function getDependency(): ?string
    {
        return $this->dependency;
    }

    /**
     * @param string $dependency
     * @return $this
     */
    protected function setDependency(string $dependency): static
    {
        $this->dependency = $this->getReplacedModName($dependency);
        return $this;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static && parent::isEqual($insight) && $this->getDependency() == $insight->getDependency();
    }
}
