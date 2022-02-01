<?php

class Mohist1165Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/mohist/mohist-1-16-5.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\MohistLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:42] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:42] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--gameDir, ., --launchTarget, fmlserver, --fml.mohistVersion, 934, --fml.forgeVersion, 36.2.23, --fml.mcpVersion, 20210115.111550, --fml.mcVersion, 1.16.5, --fml.forgeGroup, com.mohistmc, nogui]
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:42] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:42] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher 8.1.3+8.1.3+main-8.1.x.c94d18ec starting: java version 11.0.10 by Oracle Corporation
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:42] [main/INFO] [net.minecraftforge.fml.loading.FixSSL/CORE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:42] [main/INFO] [net.minecraftforge.fml.loading.FixSSL/CORE]: Added Lets Encrypt root certificates as additional trust
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:42] [main/INFO] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:42] [main/INFO] [mixin/]: SpongePowered MIXIN Subsystem Version=0.8.4 Source=file:/server/libraries/org/spongepowered/mixin/0.8.4/mixin-0.8.4.jar Service=ModLauncher Env=SERVER
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:43] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:43] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Launching target \'fmlserver\' with arguments [--gameDir, ., nogui]
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:47] [modloading-worker-2/INFO] [net.minecraftforge.common.ForgeMod/FORGEMOD]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:47] [modloading-worker-2/INFO] [net.minecraftforge.common.ForgeMod/FORGEMOD]: Forge mod loading, version 36.2.23, for MC 1.16.5 with MCP 20210115.111550
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:47] [modloading-worker-2/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:47] [modloading-worker-2/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]: MinecraftForge v36.2.23 Initialized
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:47] [modloading-worker-2/INFO] [com.mohistmc.MohistMC/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:47] [modloading-worker-2/INFO] [com.mohistmc.MohistMC/]: EventDispatcherRegistry initialized
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:49] [main/INFO] [com.mojang.authlib.yggdrasil.YggdrasilAuthenticationService/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:49] [main/INFO] [com.mojang.authlib.yggdrasil.YggdrasilAuthenticationService/]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:49] [main/INFO] [net.minecraft.server.MinecraftServer/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:49] [main/INFO] [net.minecraft.server.MinecraftServer/]: Found new data pack file/bukkit, loading it automatically
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:49] [main/INFO] [net.minecraft.resources.SimpleReloadableResourceManager/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:49] [main/INFO] [net.minecraft.resources.SimpleReloadableResourceManager/]: Reloading ResourceManager: Default, mohist-1.16.5-934-universal.jar, bukkit
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:50] [Worker-Main-5/INFO] [net.minecraft.advancements.AdvancementList/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:50] [Worker-Main-5/INFO] [net.minecraft.advancements.AdvancementList/]: Loaded 927 recipes
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:51] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:51] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting minecraft server version 1.16.5
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:51] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:51] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Loading properties
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:51] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:51] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Default game type: SURVIVAL
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:51] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:51] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Generating keypair
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:52] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:52] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting Minecraft server on *:17,650
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:52] [Server thread/INFO] [net.minecraft.network.NetworkSystem/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:52] [Server thread/INFO] [net.minecraft.network.NetworkSystem/]: Using epoll channel type
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:52] [Server thread/INFO] [Minecraft/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:52] [Server thread/INFO] [Minecraft/]: This server is running Mohist version 1.16.5-934 (MC: 1.16.5) (Implementing API version 1.16.5-R0.1-SNAPSHOT, Forge version 36.2.23)
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:52] [Server thread/INFO] [Minecraft/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:52] [Server thread/INFO] [Minecraft/]: Debug logging is enabled
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:52] [Server thread/INFO] [/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:52] [Server thread/INFO] [/]: Server Ping Player Sample Count: 12
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:52] [Server thread/INFO] [Minecraft/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:52] [Server thread/INFO] [Minecraft/]: Using 4 threads for Netty based IO
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:53] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:53] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Preparing level "world"
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:53] [Server thread/INFO] [Minecraft/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:53] [Server thread/INFO] [Minecraft/]: Server permissions file permissions.yml is empty, ignoring it
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:41:53] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:41:53] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing start region for dimension minecraft:overworld
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:42:17] [Server thread/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:42:17] [Server thread/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]: Preparing spawn area: 0%
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:42:21] [Worker-Main-4/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:42:21] [Worker-Main-4/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]: Preparing spawn area: 3%
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:42:21] [Worker-Main-6/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:42:21] [Worker-Main-6/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]: Preparing spawn area: 35%
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:42:26] [Server thread/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:42:26] [Server thread/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]: Preparing spawn area: 83%
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:42:26] [Server thread/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:42:26] [Server thread/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]: Preparing spawn area: 87%
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:42:28] [Server thread/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:42:28] [Server thread/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]: Preparing spawn area: 93%
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:42:28] [Server thread/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:42:28] [Server thread/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]: Time elapsed: 34,774 ms
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:42:28] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:42:28] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Done (35.083s)! For help, type "help"
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:42:28] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:42:28] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting GS4 status listener
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:42:28] [Server thread/INFO] [net.minecraft.network.rcon.RConThread/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:42:28] [Server thread/INFO] [net.minecraft.network.rcon.RConThread/]: Thread Query Listener started
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:42:28] [Query Listener #1/INFO] [net.minecraft.network.rcon.QueryThread/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:42:28] [Query Listener #1/INFO] [net.minecraft.network.rcon.QueryThread/]: Query running on 0.0.0.0:9898
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:42:28] [Server thread/INFO] [Minecraft/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:42:28] [Server thread/INFO] [Minecraft/]: Timings Reset
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 37
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [17:41:42] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher running: args [--gameDir, ., --launchTarget, fmlserver, --fml.mohistVersion, 934, --fml.forgeVersion, 36.2.23, --fml.mcpVersion, 20210115.111550, --fml.mcVersion, 1.16.5, --fml.forgeGroup, com.mohistmc, nogui]
[17:41:42] [main/INFO] [cpw.mods.modlauncher.Launcher/MODLAUNCHER]: ModLauncher 8.1.3+8.1.3+main-8.1.x.c94d18ec starting: java version 11.0.10 by Oracle Corporation
[17:41:42] [main/INFO] [net.minecraftforge.fml.loading.FixSSL/CORE]: Added Lets Encrypt root certificates as additional trust
[17:41:42] [main/INFO] [mixin/]: SpongePowered MIXIN Subsystem Version=0.8.4 Source=file:/server/libraries/org/spongepowered/mixin/0.8.4/mixin-0.8.4.jar Service=ModLauncher Env=SERVER
[17:41:43] [main/INFO] [cpw.mods.modlauncher.LaunchServiceHandler/MODLAUNCHER]: Launching target \'fmlserver\' with arguments [--gameDir, ., nogui]
[17:41:47] [modloading-worker-2/INFO] [net.minecraftforge.common.ForgeMod/FORGEMOD]: Forge mod loading, version 36.2.23, for MC 1.16.5 with MCP 20210115.111550
[17:41:47] [modloading-worker-2/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]: MinecraftForge v36.2.23 Initialized
[17:41:47] [modloading-worker-2/INFO] [com.mohistmc.MohistMC/]: EventDispatcherRegistry initialized
[17:41:49] [main/INFO] [com.mojang.authlib.yggdrasil.YggdrasilAuthenticationService/]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
[17:41:49] [main/INFO] [net.minecraft.server.MinecraftServer/]: Found new data pack file/bukkit, loading it automatically
[17:41:49] [main/INFO] [net.minecraft.resources.SimpleReloadableResourceManager/]: Reloading ResourceManager: Default, mohist-1.16.5-934-universal.jar, bukkit
[17:41:50] [Worker-Main-5/INFO] [net.minecraft.advancements.AdvancementList/]: Loaded 927 recipes
[17:41:51] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting minecraft server version 1.16.5
[17:41:51] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Loading properties
[17:41:51] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Default game type: SURVIVAL
[17:41:51] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Generating keypair
[17:41:52] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting Minecraft server on *:17,650
[17:41:52] [Server thread/INFO] [net.minecraft.network.NetworkSystem/]: Using epoll channel type
[17:41:52] [Server thread/INFO] [Minecraft/]: This server is running Mohist version 1.16.5-934 (MC: 1.16.5) (Implementing API version 1.16.5-R0.1-SNAPSHOT, Forge version 36.2.23)
[17:41:52] [Server thread/INFO] [Minecraft/]: Debug logging is enabled
[17:41:52] [Server thread/INFO] [/]: Server Ping Player Sample Count: 12
[17:41:52] [Server thread/INFO] [Minecraft/]: Using 4 threads for Netty based IO
[17:41:53] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Preparing level "world"
[17:41:53] [Server thread/INFO] [Minecraft/]: Server permissions file permissions.yml is empty, ignoring it
[17:41:53] [Server thread/INFO] [net.minecraft.server.MinecraftServer/]: Preparing start region for dimension minecraft:overworld
[17:42:17] [Server thread/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]: Preparing spawn area: 0%
[17:42:21] [Worker-Main-4/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]: Preparing spawn area: 3%
[17:42:21] [Worker-Main-6/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]: Preparing spawn area: 35%
[17:42:26] [Server thread/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]: Preparing spawn area: 83%
[17:42:26] [Server thread/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]: Preparing spawn area: 87%
[17:42:28] [Server thread/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]: Preparing spawn area: 93%
[17:42:28] [Server thread/INFO] [net.minecraft.world.chunk.listener.LoggingChunkStatusListener/]: Time elapsed: 34,774 ms
[17:42:28] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Done (35.083s)! For help, type "help"
[17:42:28] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting GS4 status listener
[17:42:28] [Server thread/INFO] [net.minecraft.network.rcon.RConThread/]: Thread Query Listener started
[17:42:28] [Query Listener #1/INFO] [net.minecraft.network.rcon.QueryThread/]: Query running on 0.0.0.0:9898
[17:42:28] [Server thread/INFO] [Minecraft/]: Timings Reset
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Mohist\MohistForgeVersionInformation Object
                (
                    [label:protected] => Forge version
                    [value:protected] => 36.2.23
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [17:41:47] [modloading-worker-2/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [17:41:47] [modloading-worker-2/INFO] [net.minecraftforge.common.MinecraftForge/FORGE]: MinecraftForge v36.2.23 Initialized
                                            [number:protected] => 7
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation Object
                (
                    [label:protected] => Minecraft version
                    [value:protected] => 1.16.5
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [17:41:51] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [17:41:51] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer/]: Starting minecraft server version 1.16.5
                                            [number:protected] => 13
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Information\Mohist\MohistVersionInformation Object
                (
                    [label:protected] => Mohist version
                    [value:protected] => 934
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [17:41:52] [Server thread/INFO] [Minecraft/]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [17:41:52] [Server thread/INFO] [Minecraft/]: This server is running Mohist version 1.16.5-934 (MC: 1.16.5) (Implementing API version 1.16.5-R0.1-SNAPSHOT, Forge version 36.2.23)
                                            [number:protected] => 19
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

        )

    [iterator:protected] => 2
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Forge version: 36.2.23", $analysis[0]->getMessage());

        $this->assertEquals("Minecraft version: 1.16.5", $analysis[1]->getMessage());

        $this->assertEquals("Mohist version: 934", $analysis[2]->getMessage());

    }
}