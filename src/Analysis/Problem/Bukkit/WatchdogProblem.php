<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\WatchdogThreadDumpSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * The main thread of the server hangs, so the watchdog logs a thread dump.
 *
 * Paper logs an early warning with a thread dump every few seconds while the server is still waiting,
 * and after timeout-time in spigot.yml the watchdog stops the server.
 * Both have the same cause, so they are reported as one problem.
 * The thread dump of the "Server thread" usually shows which plugin is blocking the server.
 */
class WatchdogProblem extends BukkitProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("watchdog-problem");
    }

    /**
     * The early warning of Paper and the message when the watchdog stops the server, for example:
     * The server has not responded for 10 seconds! Creating thread dump
     * The server has stopped responding! This is (probably) not a Paper bug.
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/The server has not responded for \d+ seconds! Creating thread dump/',
            '/The server has stopped responding!/',
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution(new WatchdogThreadDumpSolution());
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
