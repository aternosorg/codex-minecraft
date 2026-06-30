<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Information\Fabric\FabricVanillaVersionInformation;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\ServerInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

class FabricModIncompatibleMinecraftVersionProblem extends FabricModProblem
{
    protected string $minecraftVersion;

    /**
     * @return string
     */
    public function getMinecraftVersion(): string
    {
        return $this->minecraftVersion;
    }

    /**
     * @param string $minecraftVersion
     * @return $this
     */
    protected function setMinecraftVersion(string $minecraftVersion): static
    {
        $this->minecraftVersion = $minecraftVersion;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-wrong-minecraft-version-problem", [
            "mod-name" => $this->getModName(),
            "minecraft-version" => $this->getMinecraftVersion()
        ]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            'any' => "/\s*- Mod " . static::$modNamePattern . "(?: [^ ]+)? requires any version of (?:mod )?'Minecraft' \(minecraft\), but only the wrong version is present: (" . FabricVanillaVersionInformation::getVersionPattern() . ")!/",
            'minimum' => "/\s*- Mod " . static::$modNamePattern . "(?: [^ ]+)? requires version ([^ ]+) or later of (?:mod )'Minecraft' \(minecraft\), but only the wrong version is present: (" . FabricVanillaVersionInformation::getVersionPattern() . ")!/",
            'any-after' => "/\s*- Mod " . static::$modNamePattern . "(?: [^ ]+)? requires any version after ([^ ]+) of (?:mod )?'Minecraft' \(minecraft\), but only the wrong version is present: (" . FabricVanillaVersionInformation::getVersionPattern() . ")!/",
            'any-before' => "/\s*- Mod " . static::$modNamePattern . "(?: [^ ]+)? requires any version before ([^ ]+) of (?:mod )?'Minecraft' \(minecraft\), but only the wrong version is present: (" . FabricVanillaVersionInformation::getVersionPattern() . ")!/",
            'specific' => "/\s*- Mod " . static::$modNamePattern . "(?: [^ ]+)? requires version ([^ ]+) of (?:mod )?'Minecraft' \(minecraft\), but only the wrong version is present: (" . FabricVanillaVersionInformation::getVersionPattern() . ")!/",
            'between' => "/\s*- Mod " . static::$modNamePattern . "(?: [^ ]+)? requires any version between ([^ ]+) \((inclusive|exclusive)\) and ([^ ]+) \((inclusive|exclusive)\) of (?:mod )?'Minecraft' \(minecraft\), but only the wrong version is present: (" . FabricVanillaVersionInformation::getVersionPattern() . ")!/",
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        switch ($patternKey) {
            case 'any':
                $wrongVersion = $matches[2];
                $this->setMinecraftVersion($wrongVersion);

                $this->setModName($matches[1]);
                $this->addSolution(new ModInstallDifferentVersionSolution($this->getModName()));
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
                $wrongVersion = $matches[7];
                $this->setMinecraftVersion($wrongVersion);

                $this->setModName($matches[1]);

                $firstSymbol = $matches[4] === "exclusive" ? ">" : ">=";
                $secondSymbol = $matches[6] === "exclusive" ? "<" : "<=";
                $version = $firstSymbol . $matches[3] . ", " . $secondSymbol . $matches[5];

                $this->addSolution(new ServerInstallDifferentVersionSolution($version));
                $this->addSolution(new ModInstallDifferentVersionSolution($this->getModName()));
                return;

            default:
                $symbol = "";
                break;
        }

        $wrongVersion = $matches[4];
        $this->setMinecraftVersion($wrongVersion);

        $this->setModName($matches[1]);
        $version = $symbol . $matches[3];

        $this->addSolution(new ServerInstallDifferentVersionSolution($version));
        $this->addSolution(new ModInstallDifferentVersionSolution($this->getModName()));
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && parent::isEqual($insight)
            && $this->getMinecraftVersion() === $insight->getMinecraftVersion();
    }
}
