<?php

namespace Aternos\Codex\Minecraft\Detective;

use Aternos\Codex\Minecraft\Log\BedrockContentLog;
use Aternos\Codex\Minecraft\Log\BedrockLog;
use Aternos\Codex\Minecraft\Log\BungeeCordLog;
use Aternos\Codex\Minecraft\Log\CraftBukkitLog;
use Aternos\Codex\Minecraft\Log\CrashReport\ForgeCrashReportLog;
use Aternos\Codex\Minecraft\Log\CrashReport\MinecraftCrashReportLog;
use Aternos\Codex\Minecraft\Log\CrashReport\PaperCrashReportLog;
use Aternos\Codex\Minecraft\Log\FabricLog;
use Aternos\Codex\Minecraft\Log\ForgeLog;
use Aternos\Codex\Minecraft\Log\GeyserLog;
use Aternos\Codex\Minecraft\Log\GlowstoneLog;
use Aternos\Codex\Minecraft\Log\MagmaLog;
use Aternos\Codex\Minecraft\Log\MohistLog;
use Aternos\Codex\Minecraft\Log\OldCraftBukkitLog;
use Aternos\Codex\Minecraft\Log\OldSpigotLog;
use Aternos\Codex\Minecraft\Log\OldVanillaLog;
use Aternos\Codex\Minecraft\Log\PaperLog;
use Aternos\Codex\Minecraft\Log\PocketmineLog;
use Aternos\Codex\Minecraft\Log\QuiltLog;
use Aternos\Codex\Minecraft\Log\SpigotLog;
use Aternos\Codex\Minecraft\Log\VanillaLog;
use Aternos\Codex\Minecraft\Log\VelocityLog;
use Aternos\Codex\Minecraft\Log\WaterfallLog;

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
        OldCraftBukkitLog::class,
        OldSpigotLog::class,
        CraftBukkitLog::class,
        SpigotLog::class,
        PaperLog::class,
        MohistLog::class,
        MagmaLog::class,
        ForgeLog::class,
        PocketmineLog::class,
        BedrockLog::class,
        BedrockContentLog::class,
        FabricLog::class,
        BungeeCordLog::class,
        WaterfallLog::class,
        VelocityLog::class,
        GeyserLog::class,
        GlowstoneLog::class,
        QuiltLog::class,

        PaperCrashReportLog::class,
        ForgeCrashReportLog::class,
        MinecraftCrashReportLog::class
    ];
}
