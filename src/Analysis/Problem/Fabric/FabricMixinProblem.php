<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Fabric;

use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Mixin hit a critical error while transforming a class, caused by a mixin of a mod, and the game crashed.
 *
 * Only the direct cause of the MixinTransformerError is checked.
 * When that cause is a MixinApplyError, the crash is reported by FabricMixinApplyProblem instead,
 * which reads the mod ID from the MixinApplyError line.
 */
class FabricMixinProblem extends FabricModProblem
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("mod-fatal-problem", ["mod-name" => $this->getModName()]);
    }

    /**
     * Matches a MixinTransformerError and the stack trace below it up to its direct cause, if that cause names a mod, e.g.
     * "Caused by: org.spongepowered.asm.mixin.transformer.throwables.MixinTransformerError: An unexpected critical error was encountered
     *     at org.spongepowered.asm.mixin.transformer.MixinProcessor.applyMixins(MixinProcessor.java:392) ~[sponge-mixin-0.15.4+mixin.0.8.7.jar:0.15.4+mixin.0.8.7]
     *     ... 10 more
     * Caused by: org.spongepowered.asm.mixin.injection.throwables.InjectionError: Critical injection failure: Callback method setInWater(Z)Z in expandability-common.mixins.json:swimming.EntityMixin from mod expandability failed injection check, (3/4) succeeded."
     *
     * Mixin can write more context directly after the mod ID, like "from mod enhanced_storage->@Inject::...",
     * so the mod ID ends at the first character that cannot be part of it.
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            "/MixinTransformerError: An unexpected critical error was encountered\n(?:\t[^\n]*\n)*+Caused by: (?!org\.spongepowered\.asm\.mixin\.throwables\.MixinApplyError:)[^\n]* from mod (?<modId>[\w-]+)/"
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->setModName($matches['modId']);
        $this->addSolution(new ModRemoveSolution($this->getModName()));
    }
}
