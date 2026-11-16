<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\UpdateJavaSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A mod requires a different Java version.
 * The Fabric Loader provides Java as a built-in mod with the id "java" and the name of the running JVM,
 * so the loader reports it like any other missing mod dependency.
 */
class FabricModJavaVersionProblem extends FabricModProblem
{
    /**
     * The built-in Java mod, named after the running JVM
     * Example: 'Java HotSpot(TM) 64-Bit Server VM' (java)
     */
    public const string JAVA_MOD = "'[^']+' \(java\)";

    protected string $javaVersion;

    /**
     * @return string
     */
    public function getJavaVersion(): string
    {
        return $this->javaVersion;
    }

    /**
     * @param string $javaVersion
     * @return $this
     */
    protected function setJavaVersion(string $javaVersion): static
    {
        $this->javaVersion = $javaVersion;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-java-version-problem", [
            "mod-name" => $this->getModName(),
            "java-version" => $this->getJavaVersion()
        ]);
    }

    /**
     * Matches a Java version requirement in the dependency list of the loader, e.g.
     * - Mod 'Foo' (foo) 1.0.0 requires version 99 or later of 'Java HotSpot(TM) 64-Bit Server VM' (java), but only the wrong version is present: 25!
     * - Mod 'Foo' (foo) 1.0.0 requires version 99 of 'Java HotSpot(TM) 64-Bit Server VM' (java), but only the wrong version is present: 25!
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        $mod = "/- Mod " . static::getModNamePattern() . "(?: [^ ]+)? ";

        return [
            'minimum' => $mod . "requires version (?<version>[^ ]+) or later of " . static::JAVA_MOD . "/",
            'specific' => $mod . "requires version (?<version>[^ ]+) of " . static::JAVA_MOD . "/",
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->setModName($matches["mod"]);
        $this->setJavaVersion($matches["version"]);
        $this->addSolution(new UpdateJavaSolution($this->getJavaVersion()));
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && parent::isEqual($insight)
            && $this->getJavaVersion() === $insight->getJavaVersion();
    }
}
