# Upgrade guide

## 7.0.0

### Log classes: one namespace per software

The log classes no longer mirror the inheritance tree in their namespace, and the
`Log\Minecraft` level was removed. Every software now has its own namespace directly
below `Aternos\Codex\Minecraft\Log`. Class names did not change, only namespaces.

| Old namespace | New namespace |
|---|---|
| `Log\Minecraft` (`MinecraftLog`) | `Log` |
| `Log\Minecraft\Vanilla` | `Log\Vanilla` |
| `Log\Minecraft\Vanilla\Bukkit` | `Log\Bukkit` |
| `Log\Minecraft\Vanilla\Bukkit\{CraftBukkit,Folia,Glowstone,Paper,Purpur,Spigot}` | `Log\{CraftBukkit,Folia,Glowstone,Paper,Purpur,Spigot}` |
| `Log\Minecraft\Vanilla\{Fabric,Forge,NeoForge,Quilt}` | `Log\{Fabric,Forge,NeoForge,Quilt}` |
| `Log\Minecraft\Vanilla\Forge\{Arclight,Magma,Mohist}` | `Log\{Arclight,Magma,Mohist}` |
| `Log\Minecraft\BungeeCord` | `Log\BungeeCord` |
| `Log\Minecraft\BungeeCord\Waterfall` | `Log\Waterfall` |
| `Log\Minecraft\{Bedrock,CustomSkinLoader,Geyser,MinecraftLauncher,Pocketmine,PrismLauncher,Velocity}` | `Log\{Bedrock,CustomSkinLoader,Geyser,MinecraftLauncher,Pocketmine,PrismLauncher,Velocity}` |

`Log\Entry` and the interfaces in `Log\Type` did not move.

All namespaces are relative to `Aternos\Codex\Minecraft`. Full list of moved classes:

<details>
<summary>Old → new class names</summary>

| Old class | New class |
|---|---|
| `Aternos\Codex\Minecraft\Log\Minecraft\Bedrock\BedrockContentLog` | `Aternos\Codex\Minecraft\Log\Bedrock\BedrockContentLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Bedrock\BedrockLog` | `Aternos\Codex\Minecraft\Log\Bedrock\BedrockLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Bedrock\BedrockServerLog` | `Aternos\Codex\Minecraft\Log\Bedrock\BedrockServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\BungeeCord\BungeeCordLog` | `Aternos\Codex\Minecraft\Log\BungeeCord\BungeeCordLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\BungeeCord\BungeeCordProxyLog` | `Aternos\Codex\Minecraft\Log\BungeeCord\BungeeCordProxyLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\BungeeCord\Waterfall\WaterFallProxyLog` | `Aternos\Codex\Minecraft\Log\Waterfall\WaterFallProxyLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\BungeeCord\Waterfall\WaterfallLog` | `Aternos\Codex\Minecraft\Log\Waterfall\WaterfallLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\CustomSkinLoader\CustomSkinLoaderClientLog` | `Aternos\Codex\Minecraft\Log\CustomSkinLoader\CustomSkinLoaderClientLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\CustomSkinLoader\CustomSkinLoaderLog` | `Aternos\Codex\Minecraft\Log\CustomSkinLoader\CustomSkinLoaderLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Geyser\GeyserLog` | `Aternos\Codex\Minecraft\Log\Geyser\GeyserLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Geyser\GeyserProxyLog` | `Aternos\Codex\Minecraft\Log\Geyser\GeyserProxyLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\MinecraftLauncher\MinecraftLauncherClientLog` | `Aternos\Codex\Minecraft\Log\MinecraftLauncher\MinecraftLauncherClientLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\MinecraftLauncher\MinecraftLauncherLog` | `Aternos\Codex\Minecraft\Log\MinecraftLauncher\MinecraftLauncherLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\MinecraftLog` | `Aternos\Codex\Minecraft\Log\MinecraftLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Pocketmine\PocketmineLog` | `Aternos\Codex\Minecraft\Log\Pocketmine\PocketmineLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Pocketmine\PocketmineServerLog` | `Aternos\Codex\Minecraft\Log\Pocketmine\PocketmineServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\PrismLauncher\PrismLauncherClientLog` | `Aternos\Codex\Minecraft\Log\PrismLauncher\PrismLauncherClientLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\PrismLauncher\PrismLauncherLog` | `Aternos\Codex\Minecraft\Log\PrismLauncher\PrismLauncherLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\BukkitLog` | `Aternos\Codex\Minecraft\Log\Bukkit\BukkitLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\CraftBukkit\CraftBukkitLog` | `Aternos\Codex\Minecraft\Log\CraftBukkit\CraftBukkitLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\CraftBukkit\CraftBukkitServerLog` | `Aternos\Codex\Minecraft\Log\CraftBukkit\CraftBukkitServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\CraftBukkit\OldCraftBukkitLog` | `Aternos\Codex\Minecraft\Log\CraftBukkit\OldCraftBukkitLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\CraftBukkit\OldCraftBukkitServerLog` | `Aternos\Codex\Minecraft\Log\CraftBukkit\OldCraftBukkitServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Folia\FoliaCrashReport` | `Aternos\Codex\Minecraft\Log\Folia\FoliaCrashReport` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Folia\FoliaLog` | `Aternos\Codex\Minecraft\Log\Folia\FoliaLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Folia\FoliaServerLog` | `Aternos\Codex\Minecraft\Log\Folia\FoliaServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Glowstone\GlowstoneLog` | `Aternos\Codex\Minecraft\Log\Glowstone\GlowstoneLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Glowstone\GlowstoneServerLog` | `Aternos\Codex\Minecraft\Log\Glowstone\GlowstoneServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Paper\PaperCrashReportLog` | `Aternos\Codex\Minecraft\Log\Paper\PaperCrashReportLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Paper\PaperLog` | `Aternos\Codex\Minecraft\Log\Paper\PaperLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Paper\PaperServerLog` | `Aternos\Codex\Minecraft\Log\Paper\PaperServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Purpur\PurpurCrashReportLog` | `Aternos\Codex\Minecraft\Log\Purpur\PurpurCrashReportLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Purpur\PurpurLog` | `Aternos\Codex\Minecraft\Log\Purpur\PurpurLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Purpur\PurpurServerLog` | `Aternos\Codex\Minecraft\Log\Purpur\PurpurServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Spigot\OldSpigotLog` | `Aternos\Codex\Minecraft\Log\Spigot\OldSpigotLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Spigot\OldSpigotServerLog` | `Aternos\Codex\Minecraft\Log\Spigot\OldSpigotServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Spigot\SpigotCrashReportLog` | `Aternos\Codex\Minecraft\Log\Spigot\SpigotCrashReportLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Spigot\SpigotLog` | `Aternos\Codex\Minecraft\Log\Spigot\SpigotLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\Spigot\SpigotServerLog` | `Aternos\Codex\Minecraft\Log\Spigot\SpigotServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Bukkit\VersionLineDetectorTrait` | `Aternos\Codex\Minecraft\Log\Bukkit\VersionLineDetectorTrait` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric\FabricClientLog` | `Aternos\Codex\Minecraft\Log\Fabric\FabricClientLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric\FabricCrashReportLog` | `Aternos\Codex\Minecraft\Log\Fabric\FabricCrashReportLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric\FabricLog` | `Aternos\Codex\Minecraft\Log\Fabric\FabricLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Fabric\FabricServerLog` | `Aternos\Codex\Minecraft\Log\Fabric\FabricServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Arclight\ArclightCrashReportLog` | `Aternos\Codex\Minecraft\Log\Arclight\ArclightCrashReportLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Arclight\ArclightLog` | `Aternos\Codex\Minecraft\Log\Arclight\ArclightLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Arclight\ArclightServerLog` | `Aternos\Codex\Minecraft\Log\Arclight\ArclightServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\ForgeClientLog` | `Aternos\Codex\Minecraft\Log\Forge\ForgeClientLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\ForgeCrashReportLog` | `Aternos\Codex\Minecraft\Log\Forge\ForgeCrashReportLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\ForgeLog` | `Aternos\Codex\Minecraft\Log\Forge\ForgeLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\ForgeServerLog` | `Aternos\Codex\Minecraft\Log\Forge\ForgeServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Magma\MagmaLog` | `Aternos\Codex\Minecraft\Log\Magma\MagmaLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Magma\MagmaServerLog` | `Aternos\Codex\Minecraft\Log\Magma\MagmaServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Mohist\MohistCrashReportLog` | `Aternos\Codex\Minecraft\Log\Mohist\MohistCrashReportLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Mohist\MohistLog` | `Aternos\Codex\Minecraft\Log\Mohist\MohistLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Forge\Mohist\MohistServerLog` | `Aternos\Codex\Minecraft\Log\Mohist\MohistServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\NeoForge\NeoForgeClientLog` | `Aternos\Codex\Minecraft\Log\NeoForge\NeoForgeClientLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\NeoForge\NeoForgeCrashReportLog` | `Aternos\Codex\Minecraft\Log\NeoForge\NeoForgeCrashReportLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\NeoForge\NeoForgeLog` | `Aternos\Codex\Minecraft\Log\NeoForge\NeoForgeLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\NeoForge\NeoForgeServerLog` | `Aternos\Codex\Minecraft\Log\NeoForge\NeoForgeServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\OldVanillaLog` | `Aternos\Codex\Minecraft\Log\Vanilla\OldVanillaLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\OldVanillaServerLog` | `Aternos\Codex\Minecraft\Log\Vanilla\OldVanillaServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Quilt\QuiltClientLog` | `Aternos\Codex\Minecraft\Log\Quilt\QuiltClientLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Quilt\QuiltCrashReportLog` | `Aternos\Codex\Minecraft\Log\Quilt\QuiltCrashReportLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Quilt\QuiltLog` | `Aternos\Codex\Minecraft\Log\Quilt\QuiltLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\Quilt\QuiltServerLog` | `Aternos\Codex\Minecraft\Log\Quilt\QuiltServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaClientLog` | `Aternos\Codex\Minecraft\Log\Vanilla\VanillaClientLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportLog` | `Aternos\Codex\Minecraft\Log\Vanilla\VanillaCrashReportLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaCrashReportTrait` | `Aternos\Codex\Minecraft\Log\Vanilla\VanillaCrashReportTrait` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaLog` | `Aternos\Codex\Minecraft\Log\Vanilla\VanillaLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaNetworkProtocolErrorReportLog` | `Aternos\Codex\Minecraft\Log\Vanilla\VanillaNetworkProtocolErrorReportLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaNetworkProtocolErrorReportTrait` | `Aternos\Codex\Minecraft\Log\Vanilla\VanillaNetworkProtocolErrorReportTrait` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaReportLog` | `Aternos\Codex\Minecraft\Log\Vanilla\VanillaReportLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaReportTrait` | `Aternos\Codex\Minecraft\Log\Vanilla\VanillaReportTrait` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Vanilla\VanillaServerLog` | `Aternos\Codex\Minecraft\Log\Vanilla\VanillaServerLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Velocity\VelocityLog` | `Aternos\Codex\Minecraft\Log\Velocity\VelocityLog` |
| `Aternos\Codex\Minecraft\Log\Minecraft\Velocity\VelocityProxyLog` | `Aternos\Codex\Minecraft\Log\Velocity\VelocityProxyLog` |

</details>
