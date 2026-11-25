<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Minecraft\Analysis\Problem\Forge\MixinApplyProblem;

/**
 * A mixin of a mod could not be applied and the game crashed, like MixinApplyProblem on Forge and NeoForge.
 *
 * Not matched when the mixin failed because it loaded a client-only class on a dedicated server,
 * because FabricClientOnlyModProblem already reports that mod as client-only.
 */
class FabricMixinApplyProblem extends MixinApplyProblem
{
    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/' . static::MIXIN_APPLY_ERROR
            . '(?![^\n]*\n' . FabricClientOnlyModProblem::STACK_TRACE_LINES . 'Caused by: ' . FabricClientOnlyModProblem::CLIENT_ONLY_CAUSE . ')/'
        ];
    }
}
