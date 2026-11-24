<?php

namespace Aternos\Codex\Minecraft\Analysis\Solution\Fabric;

use Aternos\Codex\Minecraft\Analysis\Solution\MinecraftSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Install Fabric Loader, Fabric API and the mods of the server on the client of a player.
 */
class FabricClientInstallSolution extends MinecraftSolution
{
    /**
     * @inheritDoc
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("fabric-client-install-solution");
    }
}
