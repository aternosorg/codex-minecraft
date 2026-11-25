<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Fabric;

use Aternos\Codex\Minecraft\Analysis\Solution\MinecraftSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Remove the jar that uses the ID of a built-in mod (e.g. "minecraft") from the mods folder.
 */
class FabricBuiltinModFileRemoveSolution extends MinecraftSolution
{
    /**
     * @param string $modId the ID of the built-in mod, e.g. "minecraft"
     */
    public function __construct(protected string $modId)
    {
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("fabric-builtin-mod-file-remove-solution", ["mod-id" => $this->getModId()]);
    }

    /**
     * @return string
     */
    public function getModId(): string
    {
        return $this->modId;
    }
}
