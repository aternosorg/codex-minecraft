<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Paper\VelocitySecretSetSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Velocity forwarding is enabled in the Paper configuration, but no secret is set.
 *
 * Since Paper 1.19, the setting is proxies.velocity in config/paper-global.yml,
 * and the secret can also come from the environment variable PAPER_VELOCITY_SECRET.
 * Paper turns Velocity forwarding off and starts, so players cannot join through a Velocity proxy that uses modern forwarding.
 *
 * Before Paper 1.19, the setting is settings.velocity-support in paper.yml,
 * and the server does not start at all.
 */
class VelocitySecretMissingProblem extends PaperProblem
{
    protected const int PATTERN_GLOBAL_CONFIG = 0;
    protected const int PATTERN_PAPER_YML = 1;

    protected string $filePath;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("paper-velocity-secret-missing-problem", [
            "file-path" => $this->filePath
        ]);
    }

    /**
     * The first pattern matches the error since Paper 1.19, for example:
     * [22:56:09 ERROR]: [io.papermc.paper.configuration.GlobalConfiguration] Velocity is enabled, but no secret key was specified. A secret key is required. Disabling velocity...
     *
     * The second pattern matches the exception before Paper 1.19, for example:
     * java.lang.RuntimeException: Fatal paper.yml config error: Velocity support is enabled, but no secret key was specified. A secret key is required!
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            static::PATTERN_GLOBAL_CONFIG => '/Velocity is enabled, but no secret key was specified\. A secret key is required\./',
            static::PATTERN_PAPER_YML => '/Fatal paper\.yml config error: Velocity support is enabled, but no secret key was specified\. A secret key is required!/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        if ($patternKey === static::PATTERN_PAPER_YML) {
            $this->filePath = "paper.yml";
            $this->addSolution(new VelocitySecretSetSolution($this->filePath, "settings.velocity-support.secret"));
            return;
        }
        $this->filePath = "config/paper-global.yml";
        $this->addSolution(new VelocitySecretSetSolution($this->filePath, "proxies.velocity.secret"));
    }

    /**
     * @return string The config file that enables Velocity forwarding, relative to the server root
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getFilePath() === $insight->getFilePath();
    }
}