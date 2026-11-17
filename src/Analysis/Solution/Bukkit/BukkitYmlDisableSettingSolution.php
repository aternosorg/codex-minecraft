<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Disable a setting in bukkit.yml that is only meant for a transition period, once the plugins no longer need it.
 */
class BukkitYmlDisableSettingSolution extends BukkitSolution
{
    /**
     * @param string $setting The path of the setting in bukkit.yml, like "settings.compatibility.enum-compatibility-mode"
     */
    public function __construct(protected string $setting)
    {
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("bukkit-yml-disable-setting-solution", [
            "setting" => $this->setting
        ]);
    }

    /**
     * @return string
     */
    public function getSetting(): string
    {
        return $this->setting;
    }
}
