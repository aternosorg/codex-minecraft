<?php

namespace Aternos\Codex\Minecraft\Detective;

use Aternos\Codex\Minecraft\Log\Bedrock\BedrockContentLog;
use Aternos\Codex\Minecraft\Log\Bedrock\BedrockServerLog;
use Aternos\Codex\Minecraft\Log\BungeeCord\BungeeCordProxyLog;
use Aternos\Codex\Minecraft\Log\Waterfall\WaterFallProxyLog;
use Aternos\Codex\Minecraft\Log\CustomSkinLoader\CustomSkinLoaderClientLog;
use Aternos\Codex\Minecraft\Log\Geyser\GeyserProxyLog;
use Aternos\Codex\Minecraft\Log\MinecraftLauncher\MinecraftLauncherClientLog;
use Aternos\Codex\Minecraft\Log\MinecraftLog;
use Aternos\Codex\Minecraft\Log\Pocketmine\PocketmineServerLog;
use Aternos\Codex\Minecraft\Log\PrismLauncher\PrismLauncherClientLog;
use Aternos\Codex\Minecraft\Log\CraftBukkit\CraftBukkitServerLog;
use Aternos\Codex\Minecraft\Log\CraftBukkit\OldCraftBukkitServerLog;
use Aternos\Codex\Minecraft\Log\Folia\FoliaCrashReport;
use Aternos\Codex\Minecraft\Log\Folia\FoliaServerLog;
use Aternos\Codex\Minecraft\Log\Glowstone\GlowstoneServerLog;
use Aternos\Codex\Minecraft\Log\Paper\PaperCrashReportLog;
use Aternos\Codex\Minecraft\Log\Paper\PaperServerLog;
use Aternos\Codex\Minecraft\Log\Purpur\PurpurCrashReportLog;
use Aternos\Codex\Minecraft\Log\Purpur\PurpurServerLog;
use Aternos\Codex\Minecraft\Log\Spigot\OldSpigotServerLog;
use Aternos\Codex\Minecraft\Log\Spigot\SpigotCrashReportLog;
use Aternos\Codex\Minecraft\Log\Spigot\SpigotServerLog;
use Aternos\Codex\Minecraft\Log\Fabric\FabricClientLog;
use Aternos\Codex\Minecraft\Log\Fabric\FabricCrashReportLog;
use Aternos\Codex\Minecraft\Log\Fabric\FabricServerLog;
use Aternos\Codex\Minecraft\Log\Arclight\ArclightCrashReportLog;
use Aternos\Codex\Minecraft\Log\Arclight\ArclightServerLog;
use Aternos\Codex\Minecraft\Log\Forge\ForgeClientLog;
use Aternos\Codex\Minecraft\Log\Forge\ForgeCrashReportLog;
use Aternos\Codex\Minecraft\Log\Forge\ForgeServerLog;
use Aternos\Codex\Minecraft\Log\Magma\MagmaServerLog;
use Aternos\Codex\Minecraft\Log\Mohist\MohistCrashReportLog;
use Aternos\Codex\Minecraft\Log\Mohist\MohistServerLog;
use Aternos\Codex\Minecraft\Log\NeoForge\NeoForgeClientLog;
use Aternos\Codex\Minecraft\Log\NeoForge\NeoForgeCrashReportLog;
use Aternos\Codex\Minecraft\Log\NeoForge\NeoForgeServerLog;
use Aternos\Codex\Minecraft\Log\Vanilla\OldVanillaServerLog;
use Aternos\Codex\Minecraft\Log\Quilt\QuiltClientLog;
use Aternos\Codex\Minecraft\Log\Quilt\QuiltCrashReportLog;
use Aternos\Codex\Minecraft\Log\Quilt\QuiltServerLog;
use Aternos\Codex\Minecraft\Log\Vanilla\VanillaClientLog;
use Aternos\Codex\Minecraft\Log\Vanilla\VanillaCrashReportLog;
use Aternos\Codex\Minecraft\Log\Vanilla\VanillaNetworkProtocolErrorReportLog;
use Aternos\Codex\Minecraft\Log\Vanilla\VanillaServerLog;
use Aternos\Codex\Minecraft\Log\Velocity\VelocityProxyLog;

class Detective extends \Aternos\Codex\Detective\Detective
{
    protected string $defaultLogClass = MinecraftLog::class;
    protected array $possibleLogClasses = [
        FabricClientLog::class,
        QuiltClientLog::class,
        ForgeClientLog::class,
        NeoForgeClientLog::class,
        VanillaClientLog::class,

        VanillaServerLog::class,
        OldVanillaServerLog::class,
        OldCraftBukkitServerLog::class,
        OldSpigotServerLog::class,
        CraftBukkitServerLog::class,
        SpigotServerLog::class,
        PaperServerLog::class,
        PurpurServerLog::class,
        FoliaServerLog::class,
        MohistServerLog::class,
        ArclightServerLog::class,
        MagmaServerLog::class,
        ForgeServerLog::class,
        NeoForgeServerLog::class,
        PocketmineServerLog::class,
        BedrockServerLog::class,
        BedrockContentLog::class,
        FabricServerLog::class,
        BungeeCordProxyLog::class,
        WaterFallProxyLog::class,
        VelocityProxyLog::class,
        GeyserProxyLog::class,
        GlowstoneServerLog::class,
        QuiltServerLog::class,

        SpigotCrashReportLog::class,
        PaperCrashReportLog::class,
        PurpurCrashReportLog::class,
        FoliaCrashReport::class,
        FabricCrashReportLog::class,
        QuiltCrashReportLog::class,
        NeoForgeCrashReportLog::class,
        ForgeCrashReportLog::class,
        ArclightCrashReportLog::class,
        VanillaCrashReportLog::class,
        MohistCrashReportLog::class,

        VanillaNetworkProtocolErrorReportLog::class,

        PrismLauncherClientLog::class,
        MinecraftLauncherClientLog::class,
        CustomSkinLoaderClientLog::class,
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
