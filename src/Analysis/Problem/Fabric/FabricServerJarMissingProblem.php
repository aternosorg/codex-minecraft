<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Fabric\FabricServerJarProvideSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Fabric's classic server launcher (fabric-server-launch.jar) cannot find the official Minecraft server jar,
 * which is configured as "serverJar" in fabric-server-launcher.properties (default: server.jar).
 *
 * The current launcher of the Fabric installer downloads the server jar itself and does not log this.
 */
class FabricServerJarMissingProblem extends FabricProblem
{
    protected string $path;

    /**
     * @return string the path where the launcher expects the server jar
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("fabric-server-jar-missing-problem", ["file-path" => $this->getPath()]);
    }

    /**
     * Matches the first line of the launcher's message:
     * The Minecraft server .JAR is missing (/srv/server/server.jar)!
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/The Minecraft server \.JAR is missing \((?<path>[^\n]+)\)!/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->path = $matches['path'];
        $this->addSolution(new FabricServerJarProvideSolution($this->getPath()));
    }

    /**
     * @inheritDoc
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static && $this->getPath() === $insight->getPath();
    }
}
