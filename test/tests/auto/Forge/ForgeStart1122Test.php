<?php

class ForgeStart1122Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-start-1122.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\ForgeLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:36:52] [main/INFO] [FML]: Found valid fingerprint for Minecraft Forge. Certificate fingerprint e3c3d50c7c986df74c645c0ac54639741c90a557
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:36:52] [main/INFO] [FML]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:36:52] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:36:52] [main/INFO] [LaunchWrapper]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:36:52] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:36:52] [main/INFO] [LaunchWrapper]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:36:53] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:36:53] [main/INFO] [LaunchWrapper]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:36:53] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:36:53] [main/INFO] [LaunchWrapper]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:36:54] [main/INFO] [LaunchWrapper]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:36:54] [main/INFO] [LaunchWrapper]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:06] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:06] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:06] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2814 Initialized
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:06] [Server thread/INFO] [FML]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:06] [Server thread/INFO] [FML]: Starts to replace vanilla recipe ingredients with ore ingredients.
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:06] [Server thread/INFO] [FML]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:06] [Server thread/INFO] [FML]: Replaced 1036 ore ingredients
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:06] [Server thread/INFO] [FML]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:07] [Server thread/INFO] [FML]: Config directory created successfully
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:07] [Server thread/INFO] [FML]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:07] [Server thread/INFO] [FML]: Searching /aternos/server/./mods for mods
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:07] [Server thread/INFO] [FML]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:08] [Server thread/INFO] [FML]: Forge Mod Loader has identified 4 mods to load
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:08] [Server thread/INFO] [FML]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:08] [Server thread/WARN] [FML]: Missing English translation for FML: assets/fml/lang/en_us.lang
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:08] [Server thread/WARN] [FML]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:09] [Server thread/INFO] [FML]: Attempting connection with missing mods [minecraft, mcp, FML, forge] at CLIENT
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:09] [Server thread/INFO] [FML]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:09] [Server thread/INFO] [FML]: Attempting connection with missing mods [minecraft, mcp, FML, forge] at SERVER
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:09] [Server thread/INFO] [FML]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Server thread/INFO] [FML]: Processing ObjectHolder annotations
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Server thread/INFO] [FML]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Server thread/INFO] [FML]: Found 1169 ObjectHolder annotations
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Server thread/INFO] [FML]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Server thread/INFO] [FML]: Identifying ItemStackHolder annotations
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Server thread/INFO] [FML]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Server thread/INFO] [FML]: Found 0 ItemStackHolder annotations
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Server thread/INFO] [FML]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Server thread/INFO] [FML]: Configured a dormant chunk cache size of 0
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Server thread/INFO] [FML]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Forge Version Check/INFO] [forge.VersionCheck]: [forge] Starting version check at http://files.minecraftforge.net/maven/net/minecraftforge/forge/promotions_slim.json
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Forge Version Check/INFO] [forge.VersionCheck]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Server thread/INFO] [FML]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Server thread/INFO] [FML]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Server thread/INFO] [FML]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Server thread/INFO] [FML]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Server thread/INFO] [FML]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Server thread/INFO] [FML]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Server thread/INFO] [FML]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Server thread/INFO] [FML]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Server thread/INFO] [FML]: Injecting itemstacks
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Server thread/INFO] [FML]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Server thread/INFO] [FML]: Itemstack injection complete
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Server thread/INFO] [FML]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Loading properties
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Default game type: SURVIVAL
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:11] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Generating keypair
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:11] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:12] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting Minecraft server on *:10184
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:12] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:12] [Forge Version Check/INFO] [forge.VersionCheck]: [forge] Found status: AHEAD Target: null
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:12] [Forge Version Check/INFO] [forge.VersionCheck]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:12] [Server thread/INFO] [net.minecraft.network.NetworkSystem]: Using epoll channel type
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:12] [Server thread/INFO] [net.minecraft.network.NetworkSystem]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:12] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:12] [Server thread/INFO] [FML]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:12] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:12] [Server thread/INFO] [FML]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:12] [Server thread/INFO] [FML]: Injecting itemstacks
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:12] [Server thread/INFO] [FML]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:12] [Server thread/INFO] [FML]: Itemstack injection complete
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:12] [Server thread/INFO] [FML]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:13] [Server thread/INFO] [FML]: Forge Mod Loader has successfully loaded 4 mods
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:13] [Server thread/INFO] [FML]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:13] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Preparing level "world"
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:13] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:13] [Server thread/INFO] [FML]: Loading dimension 0 (world) (net.minecraft.server.dedicated.DedicatedServer@45e9a457)
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:13] [Server thread/INFO] [FML]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:14] [Server thread/INFO] [net.minecraft.advancements.AdvancementList]: Loaded 488 advancements
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:14] [Server thread/INFO] [net.minecraft.advancements.AdvancementList]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:14] [Server thread/WARN] [net.minecraft.world.WorldServer]: Unable to find spawn biome
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:14] [Server thread/WARN] [net.minecraft.world.WorldServer]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:16] [Server thread/INFO] [FML]: Loading dimension -1 (world) (net.minecraft.server.dedicated.DedicatedServer@45e9a457)
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:16] [Server thread/INFO] [FML]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:16] [Server thread/INFO] [FML]: Loading dimension 1 (world) (net.minecraft.server.dedicated.DedicatedServer@45e9a457)
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:16] [Server thread/INFO] [FML]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing start region for level 0
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:17] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 3%
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:17] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:18] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 4%
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:18] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:19] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 6%
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:19] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:20] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 9%
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:20] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:21] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 11%
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:21] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:22] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 14%
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:22] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 19%
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:24] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 22%
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:24] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:25] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 26%
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:25] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:26] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 30%
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:26] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:27] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 35%
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:27] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:28] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 40%
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:28] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:29] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 45%
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:29] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:30] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 51%
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:30] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:31] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 56%
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:31] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:32] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 62%
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:32] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:33] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 68%
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:33] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:34] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 74%
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:34] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:35] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 81%
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:35] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:36] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 88%
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:36] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:37] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 96%
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:37] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:38] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Done (25.405s)! For help, type "help" or "?"
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:38] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:38] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting GS4 status listener
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:38] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:38] [Query Listener #1/INFO] [net.minecraft.server.MinecraftServer]: Query running on 0.0.0.0:10184
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:38] [Query Listener #1/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:39] [Server thread/INFO] [FML]: Unloading dimension -1
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:39] [Server thread/INFO] [FML]:
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:39] [Server thread/INFO] [FML]: Unloading dimension 1
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:39] [Server thread/INFO] [FML]:
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [00:37:41] [Server thread/WARN] [net.minecraft.server.MinecraftServer]: Can\'t keep up! Did the system time change, or is the server overloaded? Running 2897ms behind, skipping 57 tick(s)
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [00:37:41] [Server thread/WARN] [net.minecraft.server.MinecraftServer]:
                )

        )

    [iterator:protected] => 77
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [00:36:52] [main/INFO] [FML]: Found valid fingerprint for Minecraft Forge. Certificate fingerprint e3c3d50c7c986df74c645c0ac54639741c90a557
[00:36:52] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
[00:36:52] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
[00:36:53] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.TerminalTweaker
[00:36:53] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.TerminalTweaker
[00:36:54] [main/INFO] [LaunchWrapper]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
[00:37:06] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
[00:37:06] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2814 Initialized
[00:37:06] [Server thread/INFO] [FML]: Starts to replace vanilla recipe ingredients with ore ingredients.
[00:37:06] [Server thread/INFO] [FML]: Replaced 1036 ore ingredients
[00:37:07] [Server thread/INFO] [FML]: Config directory created successfully
[00:37:07] [Server thread/INFO] [FML]: Searching /aternos/server/./mods for mods
[00:37:08] [Server thread/INFO] [FML]: Forge Mod Loader has identified 4 mods to load
[00:37:08] [Server thread/WARN] [FML]: Missing English translation for FML: assets/fml/lang/en_us.lang
[00:37:09] [Server thread/INFO] [FML]: Attempting connection with missing mods [minecraft, mcp, FML, forge] at CLIENT
[00:37:09] [Server thread/INFO] [FML]: Attempting connection with missing mods [minecraft, mcp, FML, forge] at SERVER
[00:37:11] [Server thread/INFO] [FML]: Processing ObjectHolder annotations
[00:37:11] [Server thread/INFO] [FML]: Found 1169 ObjectHolder annotations
[00:37:11] [Server thread/INFO] [FML]: Identifying ItemStackHolder annotations
[00:37:11] [Server thread/INFO] [FML]: Found 0 ItemStackHolder annotations
[00:37:11] [Server thread/INFO] [FML]: Configured a dormant chunk cache size of 0
[00:37:11] [Forge Version Check/INFO] [forge.VersionCheck]: [forge] Starting version check at http://files.minecraftforge.net/maven/net/minecraftforge/forge/promotions_slim.json
[00:37:11] [Server thread/INFO] [FML]: Applying holder lookups
[00:37:11] [Server thread/INFO] [FML]: Holder lookups applied
[00:37:11] [Server thread/INFO] [FML]: Applying holder lookups
[00:37:11] [Server thread/INFO] [FML]: Holder lookups applied
[00:37:11] [Server thread/INFO] [FML]: Applying holder lookups
[00:37:11] [Server thread/INFO] [FML]: Holder lookups applied
[00:37:11] [Server thread/INFO] [FML]: Applying holder lookups
[00:37:11] [Server thread/INFO] [FML]: Holder lookups applied
[00:37:11] [Server thread/INFO] [FML]: Injecting itemstacks
[00:37:11] [Server thread/INFO] [FML]: Itemstack injection complete
[00:37:11] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Loading properties
[00:37:11] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Default game type: SURVIVAL
[00:37:11] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Generating keypair
[00:37:12] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting Minecraft server on *:10184
[00:37:12] [Forge Version Check/INFO] [forge.VersionCheck]: [forge] Found status: AHEAD Target: null
[00:37:12] [Server thread/INFO] [net.minecraft.network.NetworkSystem]: Using epoll channel type
[00:37:12] [Server thread/INFO] [FML]: Applying holder lookups
[00:37:12] [Server thread/INFO] [FML]: Holder lookups applied
[00:37:12] [Server thread/INFO] [FML]: Injecting itemstacks
[00:37:12] [Server thread/INFO] [FML]: Itemstack injection complete
[00:37:13] [Server thread/INFO] [FML]: Forge Mod Loader has successfully loaded 4 mods
[00:37:13] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Preparing level "world"
[00:37:13] [Server thread/INFO] [FML]: Loading dimension 0 (world) (net.minecraft.server.dedicated.DedicatedServer@45e9a457)
[00:37:14] [Server thread/INFO] [net.minecraft.advancements.AdvancementList]: Loaded 488 advancements
[00:37:14] [Server thread/WARN] [net.minecraft.world.WorldServer]: Unable to find spawn biome
[00:37:16] [Server thread/INFO] [FML]: Loading dimension -1 (world) (net.minecraft.server.dedicated.DedicatedServer@45e9a457)
[00:37:16] [Server thread/INFO] [FML]: Loading dimension 1 (world) (net.minecraft.server.dedicated.DedicatedServer@45e9a457)
[00:37:16] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing start region for level 0
[00:37:17] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 3%
[00:37:18] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 4%
[00:37:19] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 6%
[00:37:20] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 9%
[00:37:21] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 11%
[00:37:22] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 14%
[00:37:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 19%
[00:37:24] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 22%
[00:37:25] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 26%
[00:37:26] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 30%
[00:37:27] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 35%
[00:37:28] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 40%
[00:37:29] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 45%
[00:37:30] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 51%
[00:37:31] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 56%
[00:37:32] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 62%
[00:37:33] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 68%
[00:37:34] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 74%
[00:37:35] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 81%
[00:37:36] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 88%
[00:37:37] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 96%
[00:37:38] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Done (25.405s)! For help, type "help" or "?"
[00:37:38] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting GS4 status listener
[00:37:38] [Query Listener #1/INFO] [net.minecraft.server.MinecraftServer]: Query running on 0.0.0.0:10184
[00:37:39] [Server thread/INFO] [FML]: Unloading dimension -1
[00:37:39] [Server thread/INFO] [FML]: Unloading dimension 1
[00:37:41] [Server thread/WARN] [net.minecraft.server.MinecraftServer]: Can\'t keep up! Did the system time change, or is the server overloaded? Running 2897ms behind, skipping 57 tick(s)
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
                                            [text:protected] => [00:37:06] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
                                            [number:protected] => 7
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [00:37:06] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
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
                                            [text:protected] => [00:37:06] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2814 Initialized
                                            [number:protected] => 8
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [00:37:06] [Server thread/INFO] [FML]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Forge version
                    [value:protected] => 14.23.5.2814
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.12.2", $analysis[0]->getMessage());

        $this->assertEquals("Forge version: 14.23.5.2814", $analysis[1]->getMessage());

    }
}