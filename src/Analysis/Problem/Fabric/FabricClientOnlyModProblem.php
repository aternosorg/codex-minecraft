<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A mod failed to load on a dedicated server, because it tried to load a class
 * that is marked as client-only (Fabric's "Cannot load class ... in environment type SERVER").
 *
 * Only matched together with the mod that caused it:
 * - an entrypoint stage that failed with this cause
 * - a mixin of the mod that failed with this cause
 */
class FabricClientOnlyModProblem extends FabricModProblem
{
    /**
     * Matches the client-only cause, e.g. "java.lang.RuntimeException: Cannot load class X in environment type SERVER"
     */
    public const string CLIENT_ONLY_CAUSE = '(?:[\w.$]+:? )*Cannot load class (\S+) in environment type SERVER';

    /**
     * Matches the stack trace lines between an exception and its cause
     */
    public const string STACK_TRACE_LINES = '(?:(?:\s+at |\s+\.\.\. \d+ more|Caused by: )[^\n]*\n)*?';

    protected ?string $className = null;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("client-only-mod-problem", ["mod-name" => $this->getModName()]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            'entrypoint' => "/Could not execute entrypoint stage '[^']+' due to errors, provided by '" . static::$modIDPattern . "'[^\n]*\n"
                . static::STACK_TRACE_LINES . "Caused by: " . static::CLIENT_ONLY_CAUSE . "/",
            'mixin' => "/Mixin (?:prepare|apply) for mod " . static::$modIDPattern . " failed[^\n]*?" . static::CLIENT_ONLY_CAUSE . "/"
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->setModName($matches[1]);
        $this->className = $matches[2];
        $this->addSolution(new ModRemoveSolution($this->getModName()));
    }

    /**
     * @return string|null the client-only class the mod tried to load, e.g. "net.minecraft.client.Minecraft"
     */
    public function getClassName(): ?string
    {
        return $this->className;
    }
}
