<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Fabric\FabricLoaderUpdateSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A mod requires a different version of the Fabric Loader.
 * The loader is a built-in mod with the id "fabricloader", so it is reported like any other mod dependency
 * but cannot be installed into the mods folder.
 */
class FabricLoaderVersionProblem extends FabricModProblem
{
    /**
     * The built-in loader mod
     * Example: mod 'Fabric Loader' (fabricloader)
     */
    public const string LOADER_MOD = "mod '[^']+' \(fabricloader\)";

    protected string $loaderVersion;
    protected string $installedVersion;

    /**
     * @return string
     */
    public function getLoaderVersion(): string
    {
        return $this->loaderVersion;
    }

    /**
     * @param string $loaderVersion
     * @return $this
     */
    protected function setLoaderVersion(string $loaderVersion): static
    {
        $this->loaderVersion = $loaderVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getInstalledVersion(): string
    {
        return $this->installedVersion;
    }

    /**
     * @param string $installedVersion
     * @return $this
     */
    protected function setInstalledVersion(string $installedVersion): static
    {
        $this->installedVersion = $installedVersion;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-fabric-loader-version-problem", [
            "mod-name" => $this->getModName(),
            "loader-version" => $this->getLoaderVersion(),
            "installed-version" => $this->getInstalledVersion()
        ]);
    }

    /**
     * Matches a Fabric Loader version requirement in the dependency list of the loader, e.g.
     * - Mod 'Foo' (foo) 1.0.0 requires version 99.0.0 or later of mod 'Fabric Loader' (fabricloader), but only the wrong version is present: 0.20.1!
     * - Mod 'Foo' (foo) 1.0.0 requires version 99.0.0 of mod 'Fabric Loader' (fabricloader), but only the wrong version is present: 0.20.1!
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        $mod = "/- Mod " . static::getModNamePattern() . "(?: [^ ]+)? ";
        $loader = " of " . static::LOADER_MOD . ", but only the wrong version is present: (?<installed>[^ !]+)!/";

        return [
            'minimum' => $mod . "requires version (?<required>[^ ]+) or later" . $loader,
            'specific' => $mod . "requires version (?<required>[^ ]+)" . $loader,
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->setModName($matches["mod"]);
        $this->setLoaderVersion($matches["required"]);
        $this->setInstalledVersion($matches["installed"]);
        $this->addSolution(new FabricLoaderUpdateSolution($this->getLoaderVersion()));
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && parent::isEqual($insight)
            && $this->getLoaderVersion() === $insight->getLoaderVersion();
    }
}
