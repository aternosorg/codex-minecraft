<?php

namespace Aternos\Codex\Minecraft\Detective;

use Aternos\Codex\Minecraft\Log\Minecraft\Bedrock\BedrockContentLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Bedrock\BedrockServerLog;
use Aternos\Codex\Minecraft\Log\Minecraft\BungeeCord\BungeeCordProxyLog;
use Aternos\Codex\Minecraft\Log\Minecraft\BungeeCord\Waterfall\WaterFallProxyLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Geyser\GeyserProxyLog;
use Aternos\Codex\Minecraft\Log\Minecraft\MinecraftLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Pocketmine\PocketmineServerLog;
use Aternos\Codex\Minecraft\Log\Minecraft\PrismLauncher\PrismLauncherClientLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\CraftBukkit\CraftBukkitServerLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\CraftBukkit\OldCraftBukkitServerLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Glowstone\GlowstoneServerLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Paper\PaperCrashReportLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Paper\PaperServerLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Purpur\PurpurCrashReportLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Purpur\PurpurServerLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Spigot\OldSpigotServerLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Spigot\SpigotServerLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric\FabricClientLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric\FabricCrashReportLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric\FabricServerLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\ForgeClientLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\ForgeCrashReportLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\ForgeServerLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Magma\MagmaServerLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Mohist\MohistCrashReportLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Mohist\MohistServerLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\OldVanillaServerLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Quilt\QuiltClientLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Quilt\QuiltServerLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaClientLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaServerLog;
use Aternos\Codex\Minecraft\Log\Minecraft\Velocity\VelocityProxyLog;

/**
 * Class Detective
 *
 * @package Aternos\Codex\Minecraft\Detective
 */
class Detective extends \Aternos\Codex\Detective\Detective
{
    protected string $defaultLogClass = MinecraftLog::class;
    protected array $possibleLogClasses = [
        FabricClientLog::class,
        QuiltClientLog::class,
        ForgeClientLog::class,
        VanillaClientLog::class,

        VanillaServerLog::class,
        OldVanillaServerLog::class,
        OldCraftBukkitServerLog::class,
        OldSpigotServerLog::class,
        CraftBukkitServerLog::class,
        SpigotServerLog::class,
        PaperServerLog::class,
        PurpurServerLog::class,
        MohistServerLog::class,
        MagmaServerLog::class,
        ForgeServerLog::class,
        PocketmineServerLog::class,
        BedrockServerLog::class,
        BedrockContentLog::class,
        FabricServerLog::class,
        BungeeCordProxyLog::class,
        WaterfallProxyLog::class,
        VelocityProxyLog::class,
        GeyserProxyLog::class,
        GlowstoneServerLog::class,
        QuiltServerLog::class,

        PaperCrashReportLog::class,
        PurpurCrashReportLog::class,
        FabricCrashReportLog::class,
        ForgeCrashReportLog::class,
        VanillaCrashReportLog::class,
        MohistCrashReportLog::class,

        PrismLauncherClientLog::class
    ];

    /**
     * @return MinecraftLog
     */
    public function detect(): MinecraftLog
    {
        /** @var MinecraftLog */
        return parent::detect();
    }
}
