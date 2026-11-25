<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Bukkit;

use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Check a setting of a world in the "worlds" section of bukkit.yml, like its generator.
 */
class BukkitYmlWorldSettingSolution extends BukkitSolution
{
    /**
     * @param string $setting The name of the setting in bukkit.yml, like "generator"
     * @param string $worldName
     */
    public function __construct(protected string $setting, protected string $worldName)
    {
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("bukkit-yml-world-setting-solution", [
            "setting" => $this->setting,
            "world-name" => $this->worldName
        ]);
    }

    /**
     * @return string
     */
    public function getSetting(): string
    {
        return $this->setting;
    }

    /**
     * @return string
     */
    public function getWorldName(): string
    {
        return $this->worldName;
    }
}
