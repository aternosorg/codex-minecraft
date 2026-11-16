<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Paper\WorldDefaultsRestoreSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Paper could not create the configuration of a world, because config/paper-world-defaults.yml does not exist.
 *
 * Paper creates the file on startup and on /paper reload, so it is usually missing because it was
 * removed while the server was running, and a plugin then created a new world.
 */
class WorldDefaultsMissingProblem extends PaperProblem
{
    /**
     * Start of the exception Paper throws when the world defaults file is missing, for example:
     * java.lang.IllegalStateException: World defaults configuration file 'config/paper-world-defaults.yml' doesn't exist
     *
     * Used to keep generic plugin problems from reporting the plugin that created the world.
     */
    public const string EXCEPTION = "java\.lang\.IllegalStateException: World defaults configuration file '";

    protected string $path;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("paper-world-defaults-missing-problem", [
            "path" => $this->path
        ]);
    }

    /**
     * Matches the exception Paper throws when it creates a world configuration without the defaults file, for example:
     * java.lang.IllegalStateException: World defaults configuration file 'config/paper-world-defaults.yml' doesn't exist
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ["/World defaults configuration file '(?<path>[^'\n]+)' doesn't exist/"];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->path = $matches["path"];
        $this->addSolution(new WorldDefaultsRestoreSolution($this->path));
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getPath() === $insight->getPath();
    }
}
