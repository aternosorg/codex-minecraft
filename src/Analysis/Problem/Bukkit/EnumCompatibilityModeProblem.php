<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\BukkitYmlDisableSettingSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * The enum compatibility mode of Spigot is enabled in bukkit.yml.
 *
 * It lets plugins that were made before some enums became classes keep working, but it makes all plugins slower.
 * Paper ignores the setting, so this only happens on Spigot.
 */
class EnumCompatibilityModeProblem extends BukkitProblem
{
    protected const string SETTING = "settings.compatibility.enum-compatibility-mode";

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("enum-compatibility-mode-problem");
    }

    /**
     * Matches the warning Spigot logs when it loads the plugins, for example:
     * Loading plugins in enum compatibility mode. This will affect plugin performance. Use only as a transition period or when absolutely necessary.
     *
     * @inheritDoc
     */
    public static function getPatterns(): array
    {
        return ['/Loading plugins in enum compatibility mode\./'];
    }

    /**
     * @inheritDoc
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->addSolution(new BukkitYmlDisableSettingSolution(static::SETTING));
    }
}
