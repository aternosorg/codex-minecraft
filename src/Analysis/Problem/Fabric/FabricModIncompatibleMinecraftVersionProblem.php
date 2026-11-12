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
     * Examples, in the order of the patterns:
     *  - Mod 'Example Mod' (modid) requires any version of 'Minecraft' (minecraft), but only the wrong version is present: 1.16.5!
     *  - Mod 'Fabric Convention Tags' (fabric-convention-tags-v1) 2.1.55+7f945d5b3e requires version 1.18.2 or later of 'Minecraft' (minecraft), but only the wrong version is present: 1.16.5!
     *  - Mod 'Fabric Command API (v2)' (fabric-command-api-v2) 2.4.7+6b42a6003e requires any version after 1.19-alpha.22.11.a of 'Minecraft' (minecraft), but only the wrong version is present: 1.16.5!
     *  - Mod 'Example Mod' (modid) requires any version before 1.17 of 'Minecraft' (minecraft), but only the wrong version is present: 1.18.2!
     *  - Mod 'Example Mod' (modid) requires version 1.18.2 of 'Minecraft' (minecraft), but only the wrong version is present: 1.16.5!
     *  - Mod 'Fabric API' (fabric) 0.53.4+1.19 requires any version between 1.19-alpha.22.18.a (inclusive) and 1.20- (exclusive) of 'Minecraft' (minecraft), but only the wrong version is present: 1.18.2!
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        $mod = "/\s*- Mod " . static::getModNamePattern() . "(?: [^ ]+)? ";
        $minecraft = " of (?:mod )?'Minecraft' \(minecraft\), but only the wrong version is present: (?<present>" . FabricVanillaVersionInformation::getVersionPattern() . ")!/";

        return [
            'any' => $mod . "requires any version" . $minecraft,
            'minimum' => $mod . "requires version (?<version>[^ ]+) or later" . $minecraft,
            'any-after' => $mod . "requires any version after (?<version>[^ ]+)" . $minecraft,
            'any-before' => $mod . "requires any version before (?<version>[^ ]+)" . $minecraft,
            'specific' => $mod . "requires version (?<version>[^ ]+)" . $minecraft,
            'between' => $mod . "requires any version between (?<min>[^ ]+) \((?<minBound>inclusive|exclusive)\)"
                . " and (?<max>[^ ]+) \((?<maxBound>inclusive|exclusive)\)" . $minecraft,
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->setModName($matches["mod"]);
        $this->setMinecraftVersion($matches["present"]);

        switch ($patternKey) {
            case 'any':
                $version = null;
                break;

            case 'minimum':
                $version = ">=" . $matches["version"];
                break;

            case 'any-after':
                $version = ">" . $matches["version"];
                break;

            case 'any-before':
                $version = "<" . $matches["version"];
                break;

            case 'between':
                $minSymbol = $matches["minBound"] === "exclusive" ? ">" : ">=";
                $maxSymbol = $matches["maxBound"] === "exclusive" ? "<" : "<=";
                $version = $minSymbol . $matches["min"] . ", " . $maxSymbol . $matches["max"];
                break;

            default:
                $version = $matches["version"];
                break;
        }

        if ($version !== null) {
            $this->addSolution(new ServerInstallDifferentVersionSolution($version));
        }
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
