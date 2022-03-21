<?php

class MagmaStart1122Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/magma/magma-start-1122.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\MagmaLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:23] [main/ERROR] [FML]: FML appears to be missing any signature data. This is not a good thing
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:23] [main/ERROR] [FML]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:23] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:23] [main/INFO] [LaunchWrapper]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:23] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:23] [main/INFO] [LaunchWrapper]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:25] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:25] [main/INFO] [LaunchWrapper]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:25] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:25] [main/INFO] [LaunchWrapper]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:26] [main/INFO] [LaunchWrapper]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:26] [main/INFO] [LaunchWrapper]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:41] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:41] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:42] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2847 Initialized
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:42] [Server thread/INFO] [FML]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:42] [Server thread/INFO] [FML]: Starts to replace vanilla recipe ingredients with ore ingredients.
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:42] [Server thread/INFO] [FML]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:43] [Server thread/INFO] [FML]: Invalid recipe found with multiple oredict ingredients in the same ingredient...
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:43] [Server thread/INFO] [FML]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:44] [Server thread/INFO] [FML]: Replaced 1227 ore ingredients
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:44] [Server thread/INFO] [FML]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:44] [Server thread/INFO] [FML]: Config directory created successfully
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:44] [Server thread/INFO] [FML]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:45] [Server thread/INFO] [FML]: Searching /aternos/server/./mods for mods
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:45] [Server thread/INFO] [FML]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:48] [Server thread/INFO] [FML]: Forge Mod Loader has identified 4 mods to load
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:48] [Server thread/INFO] [FML]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:49] [Server thread/WARN] [FML]: Missing English translation for FML: assets/fml/lang/en_us.lang
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:49] [Server thread/WARN] [FML]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:50] [Server thread/INFO] [FML]: Attempting connection with missing mods [minecraft, mcp, FML, forge] at CLIENT
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:50] [Server thread/INFO] [FML]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:50] [Server thread/INFO] [FML]: Attempting connection with missing mods [minecraft, mcp, FML, forge] at SERVER
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:50] [Server thread/INFO] [FML]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:51] [Server thread/INFO] [FML]: Processing ObjectHolder annotations
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:51] [Server thread/INFO] [FML]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:51] [Server thread/INFO] [FML]: Found 1168 ObjectHolder annotations
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:51] [Server thread/INFO] [FML]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:51] [Server thread/INFO] [FML]: Identifying ItemStackHolder annotations
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:51] [Server thread/INFO] [FML]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:51] [Server thread/INFO] [FML]: Found 0 ItemStackHolder annotations
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:51] [Server thread/INFO] [FML]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:51] [Server thread/INFO] [FML]: Configured a dormant chunk cache size of 0
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:51] [Server thread/INFO] [FML]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:52] [Forge Version Check/INFO] [forge.VersionCheck]: [forge] Starting version check at http://files.minecraftforge.net/maven/net/minecraftforge/forge/promotions_slim.json
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:52] [Forge Version Check/INFO] [forge.VersionCheck]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:52] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:52] [Server thread/INFO] [FML]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:52] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:52] [Server thread/INFO] [FML]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:52] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:52] [Server thread/INFO] [FML]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:52] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:52] [Server thread/INFO] [FML]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:52] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:52] [Server thread/INFO] [FML]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:52] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:52] [Server thread/INFO] [FML]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:52] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:52] [Server thread/INFO] [FML]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:52] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:52] [Server thread/INFO] [FML]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:52] [Server thread/INFO] [FML]: Injecting itemstacks
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:52] [Server thread/INFO] [FML]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:52] [Server thread/INFO] [FML]: Itemstack injection complete
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:52] [Server thread/INFO] [FML]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:52] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Loading properties
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:52] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:52] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Default game type: SURVIVAL
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:52] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:52] [Forge Version Check/INFO] [forge.VersionCheck]: [forge] Found status: AHEAD Target: null
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:52] [Forge Version Check/INFO] [forge.VersionCheck]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:53] [Server thread/INFO] [Minecraft]: This server is running Magma version e2b9ab6 (MC: 1.12.2) (Implementing API version 1.12.2-R0.1-SNAPSHOT)
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:53] [Server thread/INFO] [Minecraft]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:53] [Server thread/INFO] [Minecraft]: Using 4 threads for Netty based IO
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:53] [Server thread/INFO] [Minecraft]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:53] [Server thread/INFO] [Spigot]: Server Ping Player Sample Count: 12
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:53] [Server thread/INFO] [Spigot]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:53] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Generating keypair
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:53] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:54] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting Minecraft server on **.**.**.**:10149
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:54] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:54] [Server thread/INFO] [net.minecraft.network.NetworkSystem]: Using epoll channel type
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:54] [Server thread/INFO] [net.minecraft.network.NetworkSystem]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:55] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:55] [Server thread/INFO] [FML]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:55] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:55] [Server thread/INFO] [FML]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:55] [Server thread/INFO] [FML]: Injecting itemstacks
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:55] [Server thread/INFO] [FML]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:55] [Server thread/INFO] [FML]: Itemstack injection complete
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:55] [Server thread/INFO] [FML]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [FML]: Forge Mod Loader has successfully loaded 4 mods
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [FML]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Preparing level "world"
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command time with permission node commandtime.time
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command gamemode with permission node commandgamemode.gamemode
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command difficulty with permission node commanddifficulty.difficulty
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command defaultgamemode with permission node commanddefaultgamemode.defaultgamemode
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command kill with permission node commandkill.kill
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command toggledownfall with permission node commandtoggledownfall.toggledownfall
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command weather with permission node commandweather.weather
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command xp with permission node commandxp.xp
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command tp with permission node commandtp.tp
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command teleport with permission node commandteleport.teleport
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command give with permission node commandgive.give
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command replaceitem with permission node commandreplaceitem.replaceitem
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command stats with permission node commandstats.stats
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command effect with permission node commandeffect.effect
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command enchant with permission node commandenchant.enchant
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command particle with permission node commandparticle.particle
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command me with permission node commandemote.me
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command seed with permission node commandshowseed.seed
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command help with permission node commandhelp.help
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command debug with permission node commanddebug.debug
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command tell with permission node commandmessage.tell
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command say with permission node commandbroadcast.say
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command spawnpoint with permission node commandsetspawnpoint.spawnpoint
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command setworldspawn with permission node commandsetdefaultspawnpoint.setworldspawn
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command gamerule with permission node commandgamerule.gamerule
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command clear with permission node commandclearinventory.clear
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command testfor with permission node commandtestfor.testfor
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command spreadplayers with permission node commandspreadplayers.spreadplayers
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command playsound with permission node commandplaysound.playsound
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command scoreboard with permission node commandscoreboard.scoreboard
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command execute with permission node commandexecuteat.execute
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command trigger with permission node commandtrigger.trigger
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command advancement with permission node advancementcommand.advancement
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command recipe with permission node recipecommand.recipe
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command summon with permission node commandsummon.summon
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command setblock with permission node commandsetblock.setblock
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command fill with permission node commandfill.fill
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command clone with permission node commandclone.clone
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command testforblocks with permission node commandcompare.testforblocks
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command blockdata with permission node commandblockdata.blockdata
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command testforblock with permission node commandtestforblock.testforblock
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command tellraw with permission node commandmessageraw.tellraw
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command worldborder with permission node commandworldborder.worldborder
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command title with permission node commandtitle.title
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command entitydata with permission node commandentitydata.entitydata
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command stopsound with permission node commandstopsound.stopsound
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command locate with permission node commandlocate.locate
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command reload with permission node commandreload.reload
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command function with permission node commandfunction.function
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command op with permission node commandop.op
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command deop with permission node commanddeop.deop
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command stop with permission node commandstop.stop
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command save-all with permission node commandsaveall.save-all
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command save-off with permission node commandsaveoff.save-off
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command save-on with permission node commandsaveon.save-on
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command ban-ip with permission node commandbanip.ban-ip
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command pardon-ip with permission node commandpardonip.pardon-ip
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command ban with permission node commandbanplayer.ban
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command banlist with permission node commandlistbans.banlist
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command pardon with permission node commandpardonplayer.pardon
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command kick with permission node commandserverkick.kick
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command list with permission node commandlistplayers.list
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command whitelist with permission node commandwhitelist.whitelist
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command setidletimeout with permission node commandsetplayertimeout.setidletimeout
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: -------- World Settings For [world] --------
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Cactus Growth Modifier: 100%
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Cane Growth Modifier: 100%
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Melon Growth Modifier: 100%
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Sapling Growth Modifier: 100%
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Wheat Growth Modifier: 100%
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Vine Growth Modifier: 100%
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Mob Spawn Range: 4
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Random Lighting Updates: false
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Structure Info Saving: true
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Custom Map Seeds: Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Max TNT Explosions: 100
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Item Despawn Rate: 6000
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Experience Merge Radius: 3.0
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Item Merge Radius: 2.5
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Arrow Despawn Rate: 1200
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [Minecraft]: View Distance: 10
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [Minecraft]:
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:02:58] [Server thread/INFO] [FML]: Loading dimension 0 (world) (net.minecraft.server.dedicated.DedicatedServer@42667fb1)
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:02:58] [Server thread/INFO] [FML]:
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:00] [Server thread/INFO] [net.minecraft.advancements.AdvancementList]: Loaded 488 advancements
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:00] [Server thread/INFO] [net.minecraft.advancements.AdvancementList]:
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: -------- World Settings For [DIM-1] --------
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Cactus Growth Modifier: 100%
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Cane Growth Modifier: 100%
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Melon Growth Modifier: 100%
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Sapling Growth Modifier: 100%
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Wheat Growth Modifier: 100%
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Vine Growth Modifier: 100%
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Mob Spawn Range: 4
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Random Lighting Updates: false
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Structure Info Saving: true
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Custom Map Seeds: Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Max TNT Explosions: 100
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Item Despawn Rate: 6000
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Experience Merge Radius: 3.0
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Item Merge Radius: 2.5
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 165
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Arrow Despawn Rate: 1200
                                    [number:protected] => 166
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 167
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: View Distance: 10
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [FML]: Loading dimension -1 (DIM-1) (net.minecraft.server.dedicated.DedicatedServer@42667fb1)
                                    [number:protected] => 171
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [FML]:
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: -------- World Settings For [DIM1] --------
                                    [number:protected] => 172
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Cactus Growth Modifier: 100%
                                    [number:protected] => 173
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Cane Growth Modifier: 100%
                                    [number:protected] => 174
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Melon Growth Modifier: 100%
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Sapling Growth Modifier: 100%
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Wheat Growth Modifier: 100%
                                    [number:protected] => 179
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [179] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 180
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [180] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Vine Growth Modifier: 100%
                                    [number:protected] => 181
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [181] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 182
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [182] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Mob Spawn Range: 4
                                    [number:protected] => 183
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [183] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
                                    [number:protected] => 184
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [184] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 185
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [185] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Random Lighting Updates: false
                                    [number:protected] => 186
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [186] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Structure Info Saving: true
                                    [number:protected] => 187
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [187] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Custom Map Seeds: Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
                                    [number:protected] => 188
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [188] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Max TNT Explosions: 100
                                    [number:protected] => 189
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [189] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 190
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [190] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Item Despawn Rate: 6000
                                    [number:protected] => 191
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [191] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Experience Merge Radius: 3.0
                                    [number:protected] => 192
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [192] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Item Merge Radius: 2.5
                                    [number:protected] => 193
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [193] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 194
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [194] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Arrow Despawn Rate: 1200
                                    [number:protected] => 195
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [195] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 196
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [196] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 197
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [197] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 198
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [198] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [Minecraft]: View Distance: 10
                                    [number:protected] => 199
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [Minecraft]:
                )

            [199] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [FML]: Loading dimension 1 (DIM1) (net.minecraft.server.dedicated.DedicatedServer@42667fb1)
                                    [number:protected] => 200
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [FML]:
                )

            [200] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:03] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing start region for level 0 (Seed: 3374806643051400431)
                                    [number:protected] => 201
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:03] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [201] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:04] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 1%
                                    [number:protected] => 202
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:04] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [202] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:06] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 4%
                                    [number:protected] => 203
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:06] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [203] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:07] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 4%
                                    [number:protected] => 204
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:07] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [204] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:08] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 5%
                                    [number:protected] => 205
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:08] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [205] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:09] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 5%
                                    [number:protected] => 206
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:09] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [206] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:11] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 7%
                                    [number:protected] => 207
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:11] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [207] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:12] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 9%
                                    [number:protected] => 208
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:12] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [208] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:13] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 9%
                                    [number:protected] => 209
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:13] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [209] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:14] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 10%
                                    [number:protected] => 210
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:14] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [210] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:15] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 11%
                                    [number:protected] => 211
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:15] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [211] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 12%
                                    [number:protected] => 212
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [212] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:17] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 13%
                                    [number:protected] => 213
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:17] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [213] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:18] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 14%
                                    [number:protected] => 214
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:18] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [214] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:19] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 15%
                                    [number:protected] => 215
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:19] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [215] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:20] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 15%
                                    [number:protected] => 216
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:20] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [216] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:22] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 16%
                                    [number:protected] => 217
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:22] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [217] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 17%
                                    [number:protected] => 218
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [218] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:24] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 18%
                                    [number:protected] => 219
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:24] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [219] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:25] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 18%
                                    [number:protected] => 220
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:25] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [220] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:26] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 19%
                                    [number:protected] => 221
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:26] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [221] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:27] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 20%
                                    [number:protected] => 222
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:27] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [222] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:29] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 21%
                                    [number:protected] => 223
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:29] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [223] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:30] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 23%
                                    [number:protected] => 224
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:30] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [224] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:31] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 25%
                                    [number:protected] => 225
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:31] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [225] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:32] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 26%
                                    [number:protected] => 226
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:32] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [226] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:33] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 28%
                                    [number:protected] => 227
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:33] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [227] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:34] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 30%
                                    [number:protected] => 228
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:34] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [228] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:35] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 32%
                                    [number:protected] => 229
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:35] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [229] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:36] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 34%
                                    [number:protected] => 230
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:36] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [230] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:37] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 36%
                                    [number:protected] => 231
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:37] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [231] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:38] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 39%
                                    [number:protected] => 232
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:38] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [232] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:39] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 43%
                                    [number:protected] => 233
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:39] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [233] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:40] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 46%
                                    [number:protected] => 234
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:40] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [234] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:42] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 47%
                                    [number:protected] => 235
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:42] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [235] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:43] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 49%
                                    [number:protected] => 236
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:43] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [236] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:44] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 52%
                                    [number:protected] => 237
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:44] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [237] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:45] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 55%
                                    [number:protected] => 238
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:45] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [238] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:46] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 58%
                                    [number:protected] => 239
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:46] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [239] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:47] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 60%
                                    [number:protected] => 240
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:47] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [240] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:48] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 64%
                                    [number:protected] => 241
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:48] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [241] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:49] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 66%
                                    [number:protected] => 242
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:49] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [242] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:50] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 67%
                                    [number:protected] => 243
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:50] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [243] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:51] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 70%
                                    [number:protected] => 244
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:51] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [244] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:52] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 72%
                                    [number:protected] => 245
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:52] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [245] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:53] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 76%
                                    [number:protected] => 246
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:53] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [246] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:54] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 79%
                                    [number:protected] => 247
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:54] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [247] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:55] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 83%
                                    [number:protected] => 248
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:55] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [248] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:56] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 85%
                                    [number:protected] => 249
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:56] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [249] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:57] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 88%
                                    [number:protected] => 250
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:57] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [250] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:58] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 91%
                                    [number:protected] => 251
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:58] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [251] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:03:59] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 94%
                                    [number:protected] => 252
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:03:59] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [252] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:00] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 96%
                                    [number:protected] => 253
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:00] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [253] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:01] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 98%
                                    [number:protected] => 254
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:01] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [254] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing start region for level 1 (Seed: 3374806643051400431)
                                    [number:protected] => 255
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [255] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:03] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 2%
                                    [number:protected] => 256
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:03] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [256] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:04] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 6%
                                    [number:protected] => 257
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:04] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [257] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:05] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 9%
                                    [number:protected] => 258
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:05] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [258] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:06] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 14%
                                    [number:protected] => 259
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:06] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [259] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:07] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 16%
                                    [number:protected] => 260
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:07] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [260] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:08] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 23%
                                    [number:protected] => 261
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:08] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [261] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:09] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 30%
                                    [number:protected] => 262
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:09] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [262] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:10] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 37%
                                    [number:protected] => 263
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:10] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [263] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:11] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 41%
                                    [number:protected] => 264
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:11] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [264] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:12] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 48%
                                    [number:protected] => 265
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:12] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [265] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:13] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 51%
                                    [number:protected] => 266
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:13] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [266] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:14] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 54%
                                    [number:protected] => 267
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:14] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [267] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 60%
                                    [number:protected] => 268
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [268] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:17] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 70%
                                    [number:protected] => 269
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:17] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [269] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:18] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 79%
                                    [number:protected] => 270
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:18] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [270] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:19] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 81%
                                    [number:protected] => 271
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:19] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [271] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:20] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 84%
                                    [number:protected] => 272
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:20] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [272] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:21] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 89%
                                    [number:protected] => 273
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:21] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [273] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:22] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 94%
                                    [number:protected] => 274
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:22] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [274] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 95%
                                    [number:protected] => 275
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [275] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:24] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 99%
                                    [number:protected] => 276
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:24] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [276] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:24] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing start region for level 2 (Seed: 3374806643051400431)
                                    [number:protected] => 277
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:24] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [277] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:25] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 16%
                                    [number:protected] => 278
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:25] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [278] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:26] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 34%
                                    [number:protected] => 279
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:26] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [279] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:27] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 49%
                                    [number:protected] => 280
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:27] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [280] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:28] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 61%
                                    [number:protected] => 281
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:28] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [281] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:29] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 78%
                                    [number:protected] => 282
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:29] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [282] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:30] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 90%
                                    [number:protected] => 283
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:30] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [283] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:31] [Server thread/INFO] [Minecraft]: Server permissions file permissions.yml is empty, ignoring it
                                    [number:protected] => 284
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:31] [Server thread/INFO] [Minecraft]:
                )

            [284] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:31] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Done (95.058s)! For help, type "help" or "?"
                                    [number:protected] => 285
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:31] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [285] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:31] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting Minecraft server on **.**.**.**:10149
                                    [number:protected] => 286
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:31] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [286] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:31] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting GS4 status listener
                                    [number:protected] => 287
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:31] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [287] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:31] [Query Listener #1/INFO] [net.minecraft.server.MinecraftServer]: Query running on **.**.**.**:10149
                                    [number:protected] => 288
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:31] [Query Listener #1/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [288] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:31] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command forge with permission node forgecommand.forge
                                    [number:protected] => 289
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:31] [Server thread/INFO] [net.minecraft.command.CommandHandler]:
                )

            [289] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:43] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Stopping the server
                                    [number:protected] => 290
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:43] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [290] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:44] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
                                    [number:protected] => 291
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:44] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [291] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:44] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving players
                                    [number:protected] => 292
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:44] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [292] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:44] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving worlds
                                    [number:protected] => 293
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:44] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [293] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:44] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving chunks for level \'world\'/overworld
                                    [number:protected] => 294
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:44] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [294] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:45] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving chunks for level \'DIM-1\'/the_nether
                                    [number:protected] => 295
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:45] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [295] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:45] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving chunks for level \'DIM1\'/the_end
                                    [number:protected] => 296
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:45] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [296] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:49] [Server thread/INFO] [FML]: Unloading dimension 0
                                    [number:protected] => 297
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:49] [Server thread/INFO] [FML]:
                )

            [297] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:49] [Server thread/INFO] [FML]: Unloading dimension -1
                                    [number:protected] => 298
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:49] [Server thread/INFO] [FML]:
                )

            [298] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:04:49] [Server thread/INFO] [FML]: Unloading dimension 1
                                    [number:protected] => 299
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:04:49] [Server thread/INFO] [FML]:
                )

        )

    [iterator:protected] => 299
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [15:02:23] [main/ERROR] [FML]: FML appears to be missing any signature data. This is not a good thing
[15:02:23] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
[15:02:23] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
[15:02:25] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.TerminalTweaker
[15:02:25] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.TerminalTweaker
[15:02:26] [main/INFO] [LaunchWrapper]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
[15:02:41] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
[15:02:42] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2847 Initialized
[15:02:42] [Server thread/INFO] [FML]: Starts to replace vanilla recipe ingredients with ore ingredients.
[15:02:43] [Server thread/INFO] [FML]: Invalid recipe found with multiple oredict ingredients in the same ingredient...
[15:02:44] [Server thread/INFO] [FML]: Replaced 1227 ore ingredients
[15:02:44] [Server thread/INFO] [FML]: Config directory created successfully
[15:02:45] [Server thread/INFO] [FML]: Searching /aternos/server/./mods for mods
[15:02:48] [Server thread/INFO] [FML]: Forge Mod Loader has identified 4 mods to load
[15:02:49] [Server thread/WARN] [FML]: Missing English translation for FML: assets/fml/lang/en_us.lang
[15:02:50] [Server thread/INFO] [FML]: Attempting connection with missing mods [minecraft, mcp, FML, forge] at CLIENT
[15:02:50] [Server thread/INFO] [FML]: Attempting connection with missing mods [minecraft, mcp, FML, forge] at SERVER
[15:02:51] [Server thread/INFO] [FML]: Processing ObjectHolder annotations
[15:02:51] [Server thread/INFO] [FML]: Found 1168 ObjectHolder annotations
[15:02:51] [Server thread/INFO] [FML]: Identifying ItemStackHolder annotations
[15:02:51] [Server thread/INFO] [FML]: Found 0 ItemStackHolder annotations
[15:02:51] [Server thread/INFO] [FML]: Configured a dormant chunk cache size of 0
[15:02:52] [Forge Version Check/INFO] [forge.VersionCheck]: [forge] Starting version check at http://files.minecraftforge.net/maven/net/minecraftforge/forge/promotions_slim.json
[15:02:52] [Server thread/INFO] [FML]: Applying holder lookups
[15:02:52] [Server thread/INFO] [FML]: Holder lookups applied
[15:02:52] [Server thread/INFO] [FML]: Applying holder lookups
[15:02:52] [Server thread/INFO] [FML]: Holder lookups applied
[15:02:52] [Server thread/INFO] [FML]: Applying holder lookups
[15:02:52] [Server thread/INFO] [FML]: Holder lookups applied
[15:02:52] [Server thread/INFO] [FML]: Applying holder lookups
[15:02:52] [Server thread/INFO] [FML]: Holder lookups applied
[15:02:52] [Server thread/INFO] [FML]: Injecting itemstacks
[15:02:52] [Server thread/INFO] [FML]: Itemstack injection complete
[15:02:52] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Loading properties
[15:02:52] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Default game type: SURVIVAL
[15:02:52] [Forge Version Check/INFO] [forge.VersionCheck]: [forge] Found status: AHEAD Target: null
[15:02:53] [Server thread/INFO] [Minecraft]: This server is running Magma version e2b9ab6 (MC: 1.12.2) (Implementing API version 1.12.2-R0.1-SNAPSHOT)
[15:02:53] [Server thread/INFO] [Minecraft]: Using 4 threads for Netty based IO
[15:02:53] [Server thread/INFO] [Spigot]: Server Ping Player Sample Count: 12
[15:02:53] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Generating keypair
[15:02:54] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting Minecraft server on **.**.**.**:10149
[15:02:54] [Server thread/INFO] [net.minecraft.network.NetworkSystem]: Using epoll channel type
[15:02:55] [Server thread/INFO] [FML]: Applying holder lookups
[15:02:55] [Server thread/INFO] [FML]: Holder lookups applied
[15:02:55] [Server thread/INFO] [FML]: Injecting itemstacks
[15:02:55] [Server thread/INFO] [FML]: Itemstack injection complete
[15:02:56] [Server thread/INFO] [FML]: Forge Mod Loader has successfully loaded 4 mods
[15:02:56] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Preparing level "world"
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command time with permission node commandtime.time
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command gamemode with permission node commandgamemode.gamemode
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command difficulty with permission node commanddifficulty.difficulty
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command defaultgamemode with permission node commanddefaultgamemode.defaultgamemode
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command kill with permission node commandkill.kill
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command toggledownfall with permission node commandtoggledownfall.toggledownfall
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command weather with permission node commandweather.weather
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command xp with permission node commandxp.xp
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command tp with permission node commandtp.tp
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command teleport with permission node commandteleport.teleport
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command give with permission node commandgive.give
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command replaceitem with permission node commandreplaceitem.replaceitem
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command stats with permission node commandstats.stats
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command effect with permission node commandeffect.effect
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command enchant with permission node commandenchant.enchant
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command particle with permission node commandparticle.particle
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command me with permission node commandemote.me
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command seed with permission node commandshowseed.seed
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command help with permission node commandhelp.help
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command debug with permission node commanddebug.debug
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command tell with permission node commandmessage.tell
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command say with permission node commandbroadcast.say
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command spawnpoint with permission node commandsetspawnpoint.spawnpoint
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command setworldspawn with permission node commandsetdefaultspawnpoint.setworldspawn
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command gamerule with permission node commandgamerule.gamerule
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command clear with permission node commandclearinventory.clear
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command testfor with permission node commandtestfor.testfor
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command spreadplayers with permission node commandspreadplayers.spreadplayers
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command playsound with permission node commandplaysound.playsound
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command scoreboard with permission node commandscoreboard.scoreboard
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command execute with permission node commandexecuteat.execute
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command trigger with permission node commandtrigger.trigger
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command advancement with permission node advancementcommand.advancement
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command recipe with permission node recipecommand.recipe
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command summon with permission node commandsummon.summon
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command setblock with permission node commandsetblock.setblock
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command fill with permission node commandfill.fill
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command clone with permission node commandclone.clone
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command testforblocks with permission node commandcompare.testforblocks
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command blockdata with permission node commandblockdata.blockdata
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command testforblock with permission node commandtestforblock.testforblock
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command tellraw with permission node commandmessageraw.tellraw
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command worldborder with permission node commandworldborder.worldborder
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command title with permission node commandtitle.title
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command entitydata with permission node commandentitydata.entitydata
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command stopsound with permission node commandstopsound.stopsound
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command locate with permission node commandlocate.locate
[15:02:56] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command reload with permission node commandreload.reload
[15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command function with permission node commandfunction.function
[15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command op with permission node commandop.op
[15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command deop with permission node commanddeop.deop
[15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command stop with permission node commandstop.stop
[15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command save-all with permission node commandsaveall.save-all
[15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command save-off with permission node commandsaveoff.save-off
[15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command save-on with permission node commandsaveon.save-on
[15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command ban-ip with permission node commandbanip.ban-ip
[15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command pardon-ip with permission node commandpardonip.pardon-ip
[15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command ban with permission node commandbanplayer.ban
[15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command banlist with permission node commandlistbans.banlist
[15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command pardon with permission node commandpardonplayer.pardon
[15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command kick with permission node commandserverkick.kick
[15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command list with permission node commandlistplayers.list
[15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command whitelist with permission node commandwhitelist.whitelist
[15:02:57] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command setidletimeout with permission node commandsetplayertimeout.setidletimeout
[15:02:58] [Server thread/INFO] [Minecraft]: -------- World Settings For [world] --------
[15:02:58] [Server thread/INFO] [Minecraft]: Cactus Growth Modifier: 100%
[15:02:58] [Server thread/INFO] [Minecraft]: Cane Growth Modifier: 100%
[15:02:58] [Server thread/INFO] [Minecraft]: Melon Growth Modifier: 100%
[15:02:58] [Server thread/INFO] [Minecraft]: Mushroom Growth Modifier: 100%
[15:02:58] [Server thread/INFO] [Minecraft]: Pumpkin Growth Modifier: 100%
[15:02:58] [Server thread/INFO] [Minecraft]: Sapling Growth Modifier: 100%
[15:02:58] [Server thread/INFO] [Minecraft]: Wheat Growth Modifier: 100%
[15:02:58] [Server thread/INFO] [Minecraft]: NetherWart Growth Modifier: 100%
[15:02:58] [Server thread/INFO] [Minecraft]: Vine Growth Modifier: 100%
[15:02:58] [Server thread/INFO] [Minecraft]: Cocoa Growth Modifier: 100%
[15:02:58] [Server thread/INFO] [Minecraft]: Mob Spawn Range: 4
[15:02:58] [Server thread/INFO] [Minecraft]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
[15:02:58] [Server thread/INFO] [Minecraft]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[15:02:58] [Server thread/INFO] [Minecraft]: Random Lighting Updates: false
[15:02:58] [Server thread/INFO] [Minecraft]: Structure Info Saving: true
[15:02:58] [Server thread/INFO] [Minecraft]: Custom Map Seeds: Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
[15:02:58] [Server thread/INFO] [Minecraft]: Max TNT Explosions: 100
[15:02:58] [Server thread/INFO] [Minecraft]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[15:02:58] [Server thread/INFO] [Minecraft]: Item Despawn Rate: 6000
[15:02:58] [Server thread/INFO] [Minecraft]: Experience Merge Radius: 3.0
[15:02:58] [Server thread/INFO] [Minecraft]: Item Merge Radius: 2.5
[15:02:58] [Server thread/INFO] [Minecraft]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[15:02:58] [Server thread/INFO] [Minecraft]: Arrow Despawn Rate: 1200
[15:02:58] [Server thread/INFO] [Minecraft]: Zombie Aggressive Towards Villager: true
[15:02:58] [Server thread/INFO] [Minecraft]: Nerfing mobs spawned from spawners: false
[15:02:58] [Server thread/INFO] [Minecraft]: Allow Zombie Pigmen to spawn from portal blocks: true
[15:02:58] [Server thread/INFO] [Minecraft]: View Distance: 10
[15:02:58] [Server thread/INFO] [FML]: Loading dimension 0 (world) (net.minecraft.server.dedicated.DedicatedServer@42667fb1)
[15:03:00] [Server thread/INFO] [net.minecraft.advancements.AdvancementList]: Loaded 488 advancements
[15:03:03] [Server thread/INFO] [Minecraft]: -------- World Settings For [DIM-1] --------
[15:03:03] [Server thread/INFO] [Minecraft]: Cactus Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: Cane Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: Melon Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: Mushroom Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: Pumpkin Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: Sapling Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: Wheat Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: NetherWart Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: Vine Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: Cocoa Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: Mob Spawn Range: 4
[15:03:03] [Server thread/INFO] [Minecraft]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
[15:03:03] [Server thread/INFO] [Minecraft]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[15:03:03] [Server thread/INFO] [Minecraft]: Random Lighting Updates: false
[15:03:03] [Server thread/INFO] [Minecraft]: Structure Info Saving: true
[15:03:03] [Server thread/INFO] [Minecraft]: Custom Map Seeds: Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
[15:03:03] [Server thread/INFO] [Minecraft]: Max TNT Explosions: 100
[15:03:03] [Server thread/INFO] [Minecraft]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[15:03:03] [Server thread/INFO] [Minecraft]: Item Despawn Rate: 6000
[15:03:03] [Server thread/INFO] [Minecraft]: Experience Merge Radius: 3.0
[15:03:03] [Server thread/INFO] [Minecraft]: Item Merge Radius: 2.5
[15:03:03] [Server thread/INFO] [Minecraft]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[15:03:03] [Server thread/INFO] [Minecraft]: Arrow Despawn Rate: 1200
[15:03:03] [Server thread/INFO] [Minecraft]: Zombie Aggressive Towards Villager: true
[15:03:03] [Server thread/INFO] [Minecraft]: Nerfing mobs spawned from spawners: false
[15:03:03] [Server thread/INFO] [Minecraft]: Allow Zombie Pigmen to spawn from portal blocks: true
[15:03:03] [Server thread/INFO] [Minecraft]: View Distance: 10
[15:03:03] [Server thread/INFO] [FML]: Loading dimension -1 (DIM-1) (net.minecraft.server.dedicated.DedicatedServer@42667fb1)
[15:03:03] [Server thread/INFO] [Minecraft]: -------- World Settings For [DIM1] --------
[15:03:03] [Server thread/INFO] [Minecraft]: Cactus Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: Cane Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: Melon Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: Mushroom Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: Pumpkin Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: Sapling Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: Wheat Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: NetherWart Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: Vine Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: Cocoa Growth Modifier: 100%
[15:03:03] [Server thread/INFO] [Minecraft]: Mob Spawn Range: 4
[15:03:03] [Server thread/INFO] [Minecraft]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
[15:03:03] [Server thread/INFO] [Minecraft]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[15:03:03] [Server thread/INFO] [Minecraft]: Random Lighting Updates: false
[15:03:03] [Server thread/INFO] [Minecraft]: Structure Info Saving: true
[15:03:03] [Server thread/INFO] [Minecraft]: Custom Map Seeds: Village: 10387312 Feature: 14357617 Monument: 10387313 Slime: 987234911
[15:03:03] [Server thread/INFO] [Minecraft]: Max TNT Explosions: 100
[15:03:03] [Server thread/INFO] [Minecraft]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[15:03:03] [Server thread/INFO] [Minecraft]: Item Despawn Rate: 6000
[15:03:03] [Server thread/INFO] [Minecraft]: Experience Merge Radius: 3.0
[15:03:03] [Server thread/INFO] [Minecraft]: Item Merge Radius: 2.5
[15:03:03] [Server thread/INFO] [Minecraft]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[15:03:03] [Server thread/INFO] [Minecraft]: Arrow Despawn Rate: 1200
[15:03:03] [Server thread/INFO] [Minecraft]: Zombie Aggressive Towards Villager: true
[15:03:03] [Server thread/INFO] [Minecraft]: Nerfing mobs spawned from spawners: false
[15:03:03] [Server thread/INFO] [Minecraft]: Allow Zombie Pigmen to spawn from portal blocks: true
[15:03:03] [Server thread/INFO] [Minecraft]: View Distance: 10
[15:03:03] [Server thread/INFO] [FML]: Loading dimension 1 (DIM1) (net.minecraft.server.dedicated.DedicatedServer@42667fb1)
[15:03:03] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing start region for level 0 (Seed: 3374806643051400431)
[15:03:04] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 1%
[15:03:06] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 4%
[15:03:07] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 4%
[15:03:08] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 5%
[15:03:09] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 5%
[15:03:11] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 7%
[15:03:12] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 9%
[15:03:13] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 9%
[15:03:14] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 10%
[15:03:15] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 11%
[15:03:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 12%
[15:03:17] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 13%
[15:03:18] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 14%
[15:03:19] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 15%
[15:03:20] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 15%
[15:03:22] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 16%
[15:03:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 17%
[15:03:24] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 18%
[15:03:25] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 18%
[15:03:26] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 19%
[15:03:27] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 20%
[15:03:29] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 21%
[15:03:30] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 23%
[15:03:31] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 25%
[15:03:32] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 26%
[15:03:33] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 28%
[15:03:34] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 30%
[15:03:35] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 32%
[15:03:36] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 34%
[15:03:37] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 36%
[15:03:38] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 39%
[15:03:39] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 43%
[15:03:40] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 46%
[15:03:42] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 47%
[15:03:43] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 49%
[15:03:44] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 52%
[15:03:45] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 55%
[15:03:46] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 58%
[15:03:47] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 60%
[15:03:48] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 64%
[15:03:49] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 66%
[15:03:50] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 67%
[15:03:51] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 70%
[15:03:52] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 72%
[15:03:53] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 76%
[15:03:54] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 79%
[15:03:55] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 83%
[15:03:56] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 85%
[15:03:57] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 88%
[15:03:58] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 91%
[15:03:59] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 94%
[15:04:00] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 96%
[15:04:01] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 98%
[15:04:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing start region for level 1 (Seed: 3374806643051400431)
[15:04:03] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 2%
[15:04:04] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 6%
[15:04:05] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 9%
[15:04:06] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 14%
[15:04:07] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 16%
[15:04:08] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 23%
[15:04:09] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 30%
[15:04:10] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 37%
[15:04:11] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 41%
[15:04:12] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 48%
[15:04:13] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 51%
[15:04:14] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 54%
[15:04:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 60%
[15:04:17] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 70%
[15:04:18] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 79%
[15:04:19] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 81%
[15:04:20] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 84%
[15:04:21] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 89%
[15:04:22] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 94%
[15:04:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 95%
[15:04:24] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 99%
[15:04:24] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing start region for level 2 (Seed: 3374806643051400431)
[15:04:25] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 16%
[15:04:26] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 34%
[15:04:27] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 49%
[15:04:28] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 61%
[15:04:29] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 78%
[15:04:30] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 90%
[15:04:31] [Server thread/INFO] [Minecraft]: Server permissions file permissions.yml is empty, ignoring it
[15:04:31] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Done (95.058s)! For help, type "help" or "?"
[15:04:31] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting Minecraft server on **.**.**.**:10149
[15:04:31] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting GS4 status listener
[15:04:31] [Query Listener #1/INFO] [net.minecraft.server.MinecraftServer]: Query running on **.**.**.**:10149
[15:04:31] [Server thread/INFO] [net.minecraft.command.CommandHandler]: Registered command forge with permission node forgecommand.forge
[15:04:43] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Stopping the server
[15:04:44] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
[15:04:44] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving players
[15:04:44] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving worlds
[15:04:44] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving chunks for level \'world\'/overworld
[15:04:45] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving chunks for level \'DIM-1\'/the_nether
[15:04:45] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving chunks for level \'DIM1\'/the_end
[15:04:49] [Server thread/INFO] [FML]: Unloading dimension 0
[15:04:49] [Server thread/INFO] [FML]: Unloading dimension -1
[15:04:49] [Server thread/INFO] [FML]: Unloading dimension 1
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVanillaVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [15:02:41] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
                                            [number:protected] => 7
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [15:02:41] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.12.2
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [15:02:42] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2847 Initialized
                                            [number:protected] => 8
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [15:02:42] [Server thread/INFO] [FML]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Forge version
                    [value:protected] => 14.23.5.2847
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Information\Magma\MagmaVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [15:02:53] [Server thread/INFO] [Minecraft]: This server is running Magma version e2b9ab6 (MC: 1.12.2) (Implementing API version 1.12.2-R0.1-SNAPSHOT)
                                            [number:protected] => 37
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [15:02:53] [Server thread/INFO] [Minecraft]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Magma version
                    [value:protected] => e2b9ab6
                )

        )

    [iterator:protected] => 2
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.12.2", $analysis[0]->getMessage());

        $this->assertEquals("Forge version: 14.23.5.2847", $analysis[1]->getMessage());

        $this->assertEquals("Magma version: e2b9ab6", $analysis[2]->getMessage());

    }
}