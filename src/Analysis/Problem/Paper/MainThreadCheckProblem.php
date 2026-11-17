<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Paper;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginProblem;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginWithClassInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginWithClassRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Something did an action that is only allowed on the main thread of the server from another thread,
 * like loading a chunk or changing a block, and Paper blocked it.
 *
 * This is almost always a plugin. Tasks of the Bukkit scheduler run in threads named after the plugin,
 * so the plugin is known for them. For other threads, the first class in the stack trace
 * that does not belong to the server or Java is used to point to the plugin.
 *
 * Folia logs the check in another format ("Thread failed main thread check: ..., context=thread=..."),
 * which is not matched yet, because there is no real log of it.
 */
class MainThreadCheckProblem extends PaperProblem
{
    /**
     * Name of a thread of the Bukkit scheduler, which ends with the name of the plugin, for example:
     * Craft Scheduler Thread - 3 - AsyncAccess
     */
    protected const string SCHEDULER_THREAD_PATTERN = '/^Craft Scheduler Thread - \d+ - (?<plugin>' . PluginProblem::PLUGIN_NAME . ')$/';

    /**
     * A frame of the stack trace in the server or in Java, which is skipped to find the plugin, for example:
     *     at org.bukkit.craftbukkit.CraftWorld.loadChunk(CraftWorld.java:546) ~[paper-26.3.jar:26.3-248-0727243]
     *     at java.base/java.lang.Thread.run(Thread.java:1474) ~[?:?]
     */
    protected const string SERVER_FRAME = '\n\tat (?:java\.base\/|org\.spigotmc\.|org\.bukkit\.|net\.minecraft\.|io\.papermc\.|com\.destroystokyo\.|ca\.spottedleaf\.)[^\n]*';

    protected string $threadName;
    protected string $action;
    protected ?string $pluginName = null;
    protected ?string $className = null;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        // the name of a scheduler thread already contains the plugin, and the solutions name it as well
        return Translator::getInstance()->getTranslation("main-thread-check-problem", [
            "action" => $this->getAction(),
            "thread-name" => $this->getThreadName()
        ]);
    }

    /**
     * Matches the error Paper logs before it throws "Asynchronous <action>!",
     * and the first class of the stack trace after the frames of the server, if there is one, for example:
     * Thread ChunkWorker failed main thread check: chunk load
     * java.lang.Throwable
     *     at org.spigotmc.AsyncCatcher.catchOp(AsyncCatcher.java:9) ~[paper-26.3.jar:26.3-248-0727243]
     *     at p32-own-thread-chunk.jar//com.repro.OwnThreadChunkPlugin.lambda$onEnable$0(OwnThreadChunkPlugin.java:15) ~[?:?]
     *
     * Paper adds the name of the jar file with "//" in front of classes from plugins.
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Thread (?<thread>[^\n]+?) failed main thread check: (?<action>[^\n]+)'
            . '(?:\njava\.lang\.Throwable(?:' . static::SERVER_FRAME . ')*'
            . '\n\tat (?:[^\s\/]+\/\/)?(?<class>[\w$.]+)\.[\w$<>]+\()?/'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->threadName = $matches["thread"];
        $this->action = $matches["action"];

        if (preg_match(static::SCHEDULER_THREAD_PATTERN, $this->threadName, $threadMatches)) {
            $this->pluginName = $threadMatches["plugin"];
            $this->addSolution(new PluginInstallDifferentVersionSolution($this->pluginName));
            $this->addSolution(new PluginRemoveSolution($this->pluginName));
        } elseif (($matches["class"] ?? "") !== "") {
            $this->className = $matches["class"];
            $this->addSolution(new PluginWithClassInstallDifferentVersionSolution($this->className));
            $this->addSolution(new PluginWithClassRemoveSolution($this->className));
        }
    }

    /**
     * @return string
     */
    public function getThreadName(): string
    {
        return $this->threadName;
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return string|null The plugin that owns the thread, null if the thread is not a scheduler thread
     */
    public function getPluginName(): ?string
    {
        return $this->pluginName;
    }

    /**
     * @return string|null The first class of the stack trace outside the server, null if the plugin is known or there is none
     */
    public function getClassName(): ?string
    {
        return $this->className;
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getAction() === $insight->getAction()
            && $this->getPluginName() === $insight->getPluginName()
            && $this->getClassName() === $insight->getClassName()
            && ($this->getPluginName() !== null || $this->getThreadName() === $insight->getThreadName());
    }
}
