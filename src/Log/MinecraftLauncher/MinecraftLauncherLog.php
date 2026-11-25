<?php

namespace Aternos\Codex\Minecraft\Log\MinecraftLauncher;

use Aternos\Codex\Minecraft\Log\MinecraftLog;

abstract class MinecraftLauncherLog extends MinecraftLog
{
    protected static string $pattern = "/^(\[(\w+): \d{4}(?:-\d{2}){2} (?:\d{2}:?)*\.\d+: [^\]]+\]).*$/";

    public function getName(): ?string
    {
        return "Minecraft Launcher";
    }
}
