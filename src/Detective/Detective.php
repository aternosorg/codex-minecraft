<?php

namespace Aternos\Codex\Minecraft\Detective;

use Aternos\Codex\Minecraft\Log\BedrockLog;
use Aternos\Codex\Minecraft\Log\CraftBukkitLog;
use Aternos\Codex\Minecraft\Log\ForgeLog;
use Aternos\Codex\Minecraft\Log\GlowstoneLog;
use Aternos\Codex\Minecraft\Log\OldBukkitLog;
use Aternos\Codex\Minecraft\Log\OldVanillaLog;
use Aternos\Codex\Minecraft\Log\PaperLog;
use Aternos\Codex\Minecraft\Log\PocketmineLog;
use Aternos\Codex\Minecraft\Log\SpigotLog;
use Aternos\Codex\Minecraft\Log\VanillaLog;

/**
 * Class Detective
 *
 * @package Aternos\Codex\Minecraft\Detective
 */
class Detective extends \Aternos\Codex\Detective\Detective
{
    /**
     * @var array
     */
    protected $possibleLogClasses = [
        VanillaLog::class,
        OldVanillaLog::class,
        OldBukkitLog::class,
        CraftBukkitLog::class,
        SpigotLog::class,
        PaperLog::class,
        GlowstoneLog::class,
        ForgeLog::class,
        PocketmineLog::class,
        BedrockLog::class
    ];
}