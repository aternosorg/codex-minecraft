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
     * Examples, in the order of the patterns:
     * net.fabricmc.loader.discovery.ModResolutionException: Could not find required mod: advanced-xray-fabric requires {minecraft @ [1.17.x]}
     *  - Mod 'Example Mod' (modid) requires any version of mod fabric, which is missing!
     *  - Mod 'Extra Origins' (extraorigins) requires version 0.4.6 or later of mod origins, which is missing!
     *  - Mod 'Example Mod' (modid) requires any version after 0.3.5 of mod yet-another-mod, which is missing!
     *  - Mod 'Example Mod' (modid) requires any version before 0.73 of mod other-mod, which is missing!
     *  - Mod 'Indium' (indium) 1.0.27+mc1.20.1 requires version 0.5.3 of mod 'Sodium' (sodium), but only the wrong version is present: 0.4.10+build.27!
     *  - Mod 'Example Mod' (modid) requires any version between 1.0 (inclusive) and 2.0 (exclusive) of mod other-mod, which is missing!
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        $mod = "/- Mod " . static::getModNamePattern() . "(?: [^ ]+)? ";
        $dependency = " of (?:mod )?" . static::getModNamePattern("dependency") . ",/";

        return [
            'short-error' => '/net\.fabricmc\.loader\.discovery\.ModResolutionException: Could not find required mod: ' . static::getModNamePattern()
                . ' requires {' . static::getModNamePattern("dependency") . ' @ \[(?<version>[^\]]+)\]}/',
            'any' => $mod . "requires any version" . $dependency,
            'minimum' => $mod . "requires version (?<version>[^ ]+) or later" . $dependency,
            'any-after' => $mod . "requires any version after (?<version>[^ ]+)" . $dependency,
            'any-before' => $mod . "requires any version before (?<version>[^ ]+)" . $dependency,
            'specific' => $mod . "requires version (?<version>[^ ]+)" . $dependency,
            'between' => $mod . "requires any version between (?<min>[^ ]+) \\((?<minBound>inclusive|exclusive)\\)"
                . " and (?<max>[^ ]+) \\((?<maxBound>inclusive|exclusive)\\)" . $dependency
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->setModName($matches["mod"]);
        $this->setDependency($matches["dependency"]);

        switch ($patternKey) {
            case 'short-error':
                $modVersion = $matches["version"] !== '*' ? $matches["version"] : null;
                break;

            case 'any':
                $modVersion = null;
                break;

            case 'minimum':
                $modVersion = ">=" . $matches["version"];
                break;

            case 'any-after':
                $modVersion = ">" . $matches["version"];
                break;

            case 'any-before':
                $modVersion = "<" . $matches["version"];
                break;

            case 'between':
                $minSymbol = $matches["minBound"] === "exclusive" ? ">" : ">=";
                $maxSymbol = $matches["maxBound"] === "exclusive" ? "<" : "<=";
                $modVersion = $minSymbol . $matches["min"] . ", " . $maxSymbol . $matches["max"];
                break;

            default:
                $modVersion = $matches["version"];
                break;
        }

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
