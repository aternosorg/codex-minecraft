<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Forge;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallDifferentVersionSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * A mixin of a mod could not be applied and the game crashed, usually because the mod
 * does not fit the installed Minecraft version or the version of the mod it changes.
 *
 * Only the fatal case is detected, where Mixin throws a MixinApplyError.
 * The "Mixin apply for mod X failed" line is not matched on its own, because Mixin also logs it as a warning
 * for optional mixins that it skips, and the game keeps running then.
 */
class MixinApplyProblem extends ModProblem
{
    /**
     * Mixin uses this instead of a mod ID when it cannot tell which mod a mixin config belongs to.
     */
    protected const string UNKNOWN_MOD_ID = "(unknown)";

    /**
     * Matches the error Mixin throws when a mixin fails to apply, e.g.
     * "Caused by: org.spongepowered.asm.mixin.throwables.MixinApplyError: Mixin [fabric-resource-loader-v0.mixins.json:ReloadableResourceManagerImplMixin from mod fabric_resource_loader_v0] from phase [DEFAULT] in config [fabric-resource-loader-v0.mixins.json] FAILED during APPLY"
     */
    protected const string MIXIN_APPLY_ERROR = 'MixinApplyError: Mixin \[(?<mixinConfig>[^:\]\n]+):[^ \]\n]+ from mod (?<modId>[^\]\n]+)\] from phase';

    protected string $mixinConfig;

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        if ($this->isModUnknown()) {
            return Translator::getInstance()->getTranslation("mixin-config-fatal-problem", ["mixin-config" => $this->getMixinConfig()]);
        }
        return Translator::getInstance()->getTranslation("mod-fatal-problem", ["mod-name" => $this->getModName()]);
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return [
            '/' . static::MIXIN_APPLY_ERROR . '/'
        ];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->mixinConfig = $matches['mixinConfig'];
        $this->modName = $matches['modId'];

        if ($this->isModUnknown()) {
            return;
        }

        $this->addSolution(new ModRemoveSolution($this->getModName()));
        $this->addSolution(new ModInstallDifferentVersionSolution($this->getModName()));
    }

    /**
     * @return string the mixin config file of the failed mixin, like "fabric-resource-loader-v0.mixins.json"
     */
    public function getMixinConfig(): string
    {
        return $this->mixinConfig;
    }

    /**
     * @return bool true if Mixin could not tell which mod the failed mixin belongs to
     */
    public function isModUnknown(): bool
    {
        return $this->getModName() === static::UNKNOWN_MOD_ID;
    }

    /**
     * Failed mixins of the same mod are one problem.
     * Without a mod ID, the mixin config is what tells the problems apart.
     *
     * @inheritDoc
     */
    public function isEqual(InsightInterface $insight): bool
    {
        if (!parent::isEqual($insight) || !$insight instanceof static) {
            return false;
        }
        if ($this->isModUnknown()) {
            return $this->getMixinConfig() === $insight->getMixinConfig();
        }
        return true;
    }
}
