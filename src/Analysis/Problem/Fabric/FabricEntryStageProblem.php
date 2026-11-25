<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Minecraft\Analysis\Solution\Mod\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * An entrypoint of a mod threw an exception or its class could not be loaded.
 *
 * Causes that only say that a client class was loaded on the server are not matched,
 * because FabricClientOnlyModProblem reports them.
 */
class FabricEntryStageProblem extends FabricModProblem
{
    /**
     * Excludes a client-only cause in the following stack trace, see FabricClientOnlyModProblem.
     */
    protected const string NOT_CLIENT_ONLY = "(?![^\n]*\n" . FabricClientOnlyModProblem::STACK_TRACE_LINES
        . "Caused by: " . FabricClientOnlyModProblem::CLIENT_ONLY_CAUSE . ")";

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-exception-problem", ["mod-name" => $this->getModName()]);
    }

    /**
     * Matches the mod that provides an entrypoint, while Fabric Loader runs an entrypoint stage:
     * java.lang.RuntimeException: Could not execute entrypoint stage 'main' due to errors, provided by 'bar' at 'bar.BarMod'!
     *
     * Mods also load the entrypoints of other mods themselves, e.g. Mod Menu, so the exception can appear without that line:
     * net.fabricmc.loader.api.EntrypointException: Exception while loading entries for entrypoint 'custom' provided by 'foo'
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            'stage' => "/java\.lang\.RuntimeException: Could not execute entrypoint stage '[^']+' due to errors, provided by '(?<mod>[^']+)'"
                . static::NOT_CLIENT_ONLY . "/",
            'entrypoint' => "/EntrypointException: Exception while loading entries for entrypoint '[^']+' provided by '(?<mod>[^']+)'"
                . static::NOT_CLIENT_ONLY . "/"
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->setModName($matches['mod']);
        $this->addSolution(new ModRemoveSolution($this->getModName()));
    }
}
