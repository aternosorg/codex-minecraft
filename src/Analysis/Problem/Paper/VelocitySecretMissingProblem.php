<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Paper\VelocitySecretSetSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Velocity forwarding is enabled in config/paper-global.yml, but no secret is set,
 * neither in proxies.velocity.secret nor in the environment variable PAPER_VELOCITY_SECRET.
 * Paper turns Velocity forwarding off, so players cannot join through a Velocity proxy that uses modern forwarding.
 */
class VelocitySecretMissingProblem extends PaperProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("paper-velocity-secret-missing-problem");
    }

    /**
     * Matches the error Paper logs when it loads the global configuration, for example:
     * [22:56:09 ERROR]: [io.papermc.paper.configuration.GlobalConfiguration] Velocity is enabled, but no secret key was specified. A secret key is required. Disabling velocity...
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Velocity is enabled, but no secret key was specified\. A secret key is required\./'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution(new VelocitySecretSetSolution());
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static;
    }
}