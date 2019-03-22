<?php

class ForgeWorldModVersionTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-world-mod-version.log");
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
                    [prefix:protected] => [16:48:17] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:17] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLServerTweaker
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:17] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:17] [main/INFO] [LaunchWrapper]: Using primary tweak class name net.minecraftforge.fml.common.launcher.FMLServerTweaker
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:17] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:17] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLServerTweaker
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:17] [main/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:17] [main/INFO] [FML]: Forge Mod Loader version 14.23.5.2811 for Minecraft 1.12.2 loading
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:17] [main/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:17] [main/INFO] [FML]: Java is Java HotSpot(TM) 64-Bit Server VM, version 1.8.0_144, running on Linux:amd64:4.4.0-140-generic, installed at /aternos/bin/jdk1.8.0_144/jre
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:17] [main/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:17] [main/INFO] [FML]: Searching /aternos/server/./mods for mods
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:17] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:17] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:17] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:17] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:17] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:17] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:17] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:17] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:17] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:17] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:24] [main/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:24] [main/INFO] [FML]: Found valid fingerprint for Minecraft Forge. Certificate fingerprint e3c3d50c7c986df74c645c0ac54639741c90a557
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:24] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:24] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:24] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:24] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:28] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:28] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:29] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:29] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:32] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:32] [main/INFO] [LaunchWrapper]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:56] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:56] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:57] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:57] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2811 Initialized
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:57] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:57] [Server thread/INFO] [FML]: Starts to replace vanilla recipe ingredients with ore ingredients.
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:48:58] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:48:58] [Server thread/INFO] [FML]: Replaced 1036 ore ingredients
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:00] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:00] [Server thread/INFO] [FML]: Searching /aternos/server/./mods for mods
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:03] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:03] [Server thread/WARN] [FML]: Mod betterbuilderswands is missing the required element \'version\' and a version.properties file could not be found. Falling back to metadata version 0.11.1
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:03] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:03] [Server thread/WARN] [FML]: Mod ironchest is missing the required element \'version\' and a version.properties file could not be found. Falling back to metadata version 1.12.2-7.0.54.838
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:04] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:04] [Server thread/INFO] [FML]: Disabling mod jeresources it is client side only.
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:04] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:04] [Server thread/INFO] [FML]: Forge Mod Loader has identified 11 mods to load
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:04] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:04] [Server thread/WARN] [FML]: Missing English translation for FML: assets/fml/lang/en_us.lang
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:04] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:04] [Server thread/WARN] [FML]: Missing English translation for morpheus: assets/morpheus/lang/en_us.lang
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:04] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:04] [Server thread/WARN] [FML]: Missing English translation for thutperms: assets/thutperms/lang/en_us.lang
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:04] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:04] [Server thread/INFO] [FML]: FML has found a non-mod file JustEnoughResources-1.12.2-0.8.10.50.jar in your mods directory. It will now be injected into your classpath. This could severe stability issues, it should be removed if possible.
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:05] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:05] [Server thread/INFO] [FML]: Attempting connection with missing mods [minecraft, mcp, FML, forge, betterbuilderswands, ironbackpacks, ironchest, jei, morpheus, sparkshammers, thutperms] at CLIENT
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:05] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:05] [Server thread/INFO] [FML]: Attempting connection with missing mods [minecraft, mcp, FML, forge, betterbuilderswands, ironbackpacks, ironchest, jei, morpheus, sparkshammers, thutperms] at SERVER
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:11] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:11] [Server thread/INFO] [FML]: Processing ObjectHolder annotations
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:11] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:11] [Server thread/INFO] [FML]: Found 1217 ObjectHolder annotations
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:11] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:11] [Server thread/INFO] [FML]: Identifying ItemStackHolder annotations
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:11] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:11] [Server thread/INFO] [FML]: Found 0 ItemStackHolder annotations
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:11] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:11] [Server thread/INFO] [FML]: Configured a dormant chunk cache size of 0
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:11] [Forge Version Check/INFO] [forge.VersionCheck]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:11] [Forge Version Check/INFO] [forge.VersionCheck]: [forge] Starting version check at http://files.minecraftforge.net/maven/net/minecraftforge/forge/promotions_slim.json
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:11] [Server thread/INFO] [betterbuilderswands]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:11] [Server thread/INFO] [betterbuilderswands]: Access transform success createStackedBlock (func_180643_i).
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Forge Version Check/INFO] [forge.VersionCheck]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Forge Version Check/INFO] [forge.VersionCheck]: [forge] Found status: AHEAD Target: null
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/INFO] [morpheus]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/INFO] [morpheus]: Loading configuration
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/WARN] [FML]: Replacing net.minecraftforge.server.permission.DefaultPermissionHandler with thut.permissions.PermissionsManager
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironchest.iron`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironchest.gold`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironchest.diamond`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironchest.copper`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironchest.silver`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironchest.crystal`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironchest.obsidian`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironchest.dirtchest9000`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironshulkerbox.iron`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironshulkerbox.gold`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironshulkerbox.diamond`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironshulkerbox.copper`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironshulkerbox.silver`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironshulkerbox.crystal`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironshulkerbox.obsidian`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `hammer_block`, expected `sparkshammers`. This could be a intended override, but in most cases indicates a broken mod.
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/INFO] [Spark\'s Hammers]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/INFO] [Spark\'s Hammers]: Spark\'s Hammers: Reading custom tools from json file...
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/INFO] [Spark\'s Hammers]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/INFO] [Spark\'s Hammers]: Spark\'s Hammers: Finished reading custom tools
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/INFO] [Spark\'s Hammers]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/INFO] [Spark\'s Hammers]: Spark\'s Hammers: Added 36 tools
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:12] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:12] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:13] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:13] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:13] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:13] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:13] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:13] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:13] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:13] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:13] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:13] [Server thread/INFO] [FML]: Injecting itemstacks
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:13] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:13] [Server thread/INFO] [FML]: Itemstack injection complete
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:13] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:13] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Loading properties
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:13] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:13] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Default game type: SURVIVAL
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:13] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:13] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Generating keypair
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:13] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:13] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting Minecraft server on *:10956
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:13] [Server thread/INFO] [net.minecraft.network.NetworkSystem]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:13] [Server thread/INFO] [net.minecraft.network.NetworkSystem]: Using epoll channel type
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:14] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:14] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:14] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:14] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer]: The server will make no attempt to authenticate usernames. Beware.
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:14] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:14] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:14] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:14] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer]: To change this, set "online-mode" to "true" in the server.properties file.
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [FML]: Injecting itemstacks
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [FML]: Itemstack injection complete
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:grass/0=&gt;1*minecraft:grass/0=&gt;minecraft:grass/0\' to mapping
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:grass/0=&gt;1*minecraft:dirt/0=&gt;minecraft:dirt/0\' to mapping
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:lapis_ore/0=&gt;1*minecraft:lapis_ore/4=&gt;minecraft:lapis_ore/0\' to mapping
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:lit_redstone_ore/0=&gt;1*minecraft:redstone_ore/0=&gt;minecraft:lit_redstone_ore/0\' to mapping
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:grass/0=&gt;1*minecraft:grass/0=&gt;minecraft:grass/0\' to mapping
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:grass/0=&gt;1*minecraft:dirt/0=&gt;minecraft:dirt/0\' to mapping
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:dirt/1=&gt;1*minecraft:dirt/1=&gt;minecraft:dirt/1\' to mapping
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:dirt/1=&gt;1*minecraft:dirt/0=&gt;minecraft:dirt/0\' to mapping
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:dirt/2=&gt;1*minecraft:dirt/2=&gt;minecraft:dirt/2\' to mapping
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:dirt/2=&gt;1*minecraft:dirt/0=&gt;minecraft:dirt/0\' to mapping
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [Spark\'s Hammers]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [Spark\'s Hammers]: Spark\'s Hammers: Removed 50 tools from creative menu due to missing ingredients
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [FML]: Forge Mod Loader has successfully loaded 11 mods
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Preparing level "world"
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [FML.ModTracker]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [FML.ModTracker]: This world was saved with mod betterbuilderswands version 0.13.0 and it is now at version 0.11.1, things may not work well
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:15] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:15] [Server thread/INFO] [FML]: Injecting existing registry data into this server instance
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:17] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:17] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:17] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:17] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:18] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:18] [Server thread/INFO] [FML]: Loading dimension 0 (world) (net.minecraft.server.dedicated.DedicatedServer@18761a76)
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:19] [Server thread/INFO] [net.minecraft.advancements.AdvancementList]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:19] [Server thread/INFO] [net.minecraft.advancements.AdvancementList]: Loaded 494 advancements
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:19] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:19] [Server thread/INFO] [FML]: Loading dimension -1 (world) (net.minecraft.server.dedicated.DedicatedServer@18761a76)
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:20] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:20] [Server thread/INFO] [FML]: Loading dimension 1 (world) (net.minecraft.server.dedicated.DedicatedServer@18761a76)
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:20] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:20] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing start region for level 0
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:22] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:22] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 0%
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 8%
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:24] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:24] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 29%
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:25] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:25] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 52%
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:26] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:26] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 77%
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:27] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:27] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Done (11.595s)! For help, type "help" or "?"
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:27] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:27] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting GS4 status listener
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:27] [Query Listener #1/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:27] [Query Listener #1/INFO] [net.minecraft.server.MinecraftServer]: Query running on **.**.**.**:10956
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:28] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:28] [Server thread/INFO] [FML]: Unloading dimension -1
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [16:49:28] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:49:28] [Server thread/INFO] [FML]: Unloading dimension 1
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving players
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving worlds
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving chunks for level \'world\'/overworld
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:24] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:24] [Server thread/INFO] [FML]: Unloading dimension 0
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:24] [Server Shutdown Thread/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:24] [Server Shutdown Thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:24] [Server Shutdown Thread/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:24] [Server Shutdown Thread/INFO] [net.minecraft.server.MinecraftServer]: Saving players
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 123
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [16:48:17] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLServerTweaker
[16:48:17] [main/INFO] [LaunchWrapper]: Using primary tweak class name net.minecraftforge.fml.common.launcher.FMLServerTweaker
[16:48:17] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLServerTweaker
[16:48:17] [main/INFO] [FML]: Forge Mod Loader version 14.23.5.2811 for Minecraft 1.12.2 loading
[16:48:17] [main/INFO] [FML]: Java is Java HotSpot(TM) 64-Bit Server VM, version 1.8.0_144, running on Linux:amd64:4.4.0-140-generic, installed at /aternos/bin/jdk1.8.0_144/jre
[16:48:17] [main/INFO] [FML]: Searching /aternos/server/./mods for mods
[16:48:17] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
[16:48:17] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
[16:48:17] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
[16:48:17] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
[16:48:17] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
[16:48:24] [main/INFO] [FML]: Found valid fingerprint for Minecraft Forge. Certificate fingerprint e3c3d50c7c986df74c645c0ac54639741c90a557
[16:48:24] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
[16:48:24] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
[16:48:28] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.TerminalTweaker
[16:48:29] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.TerminalTweaker
[16:48:32] [main/INFO] [LaunchWrapper]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
[16:48:56] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
[16:48:57] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2811 Initialized
[16:48:57] [Server thread/INFO] [FML]: Starts to replace vanilla recipe ingredients with ore ingredients.
[16:48:58] [Server thread/INFO] [FML]: Replaced 1036 ore ingredients
[16:49:00] [Server thread/INFO] [FML]: Searching /aternos/server/./mods for mods
[16:49:03] [Server thread/WARN] [FML]: Mod betterbuilderswands is missing the required element \'version\' and a version.properties file could not be found. Falling back to metadata version 0.11.1
[16:49:03] [Server thread/WARN] [FML]: Mod ironchest is missing the required element \'version\' and a version.properties file could not be found. Falling back to metadata version 1.12.2-7.0.54.838
[16:49:04] [Server thread/INFO] [FML]: Disabling mod jeresources it is client side only.
[16:49:04] [Server thread/INFO] [FML]: Forge Mod Loader has identified 11 mods to load
[16:49:04] [Server thread/WARN] [FML]: Missing English translation for FML: assets/fml/lang/en_us.lang
[16:49:04] [Server thread/WARN] [FML]: Missing English translation for morpheus: assets/morpheus/lang/en_us.lang
[16:49:04] [Server thread/WARN] [FML]: Missing English translation for thutperms: assets/thutperms/lang/en_us.lang
[16:49:04] [Server thread/INFO] [FML]: FML has found a non-mod file JustEnoughResources-1.12.2-0.8.10.50.jar in your mods directory. It will now be injected into your classpath. This could severe stability issues, it should be removed if possible.
[16:49:05] [Server thread/INFO] [FML]: Attempting connection with missing mods [minecraft, mcp, FML, forge, betterbuilderswands, ironbackpacks, ironchest, jei, morpheus, sparkshammers, thutperms] at CLIENT
[16:49:05] [Server thread/INFO] [FML]: Attempting connection with missing mods [minecraft, mcp, FML, forge, betterbuilderswands, ironbackpacks, ironchest, jei, morpheus, sparkshammers, thutperms] at SERVER
[16:49:11] [Server thread/INFO] [FML]: Processing ObjectHolder annotations
[16:49:11] [Server thread/INFO] [FML]: Found 1217 ObjectHolder annotations
[16:49:11] [Server thread/INFO] [FML]: Identifying ItemStackHolder annotations
[16:49:11] [Server thread/INFO] [FML]: Found 0 ItemStackHolder annotations
[16:49:11] [Server thread/INFO] [FML]: Configured a dormant chunk cache size of 0
[16:49:11] [Forge Version Check/INFO] [forge.VersionCheck]: [forge] Starting version check at http://files.minecraftforge.net/maven/net/minecraftforge/forge/promotions_slim.json
[16:49:11] [Server thread/INFO] [betterbuilderswands]: Access transform success createStackedBlock (func_180643_i).
[16:49:12] [Forge Version Check/INFO] [forge.VersionCheck]: [forge] Found status: AHEAD Target: null
[16:49:12] [Server thread/INFO] [morpheus]: Loading configuration
[16:49:12] [Server thread/WARN] [FML]: Replacing net.minecraftforge.server.permission.DefaultPermissionHandler with thut.permissions.PermissionsManager
[16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironchest.iron`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
[16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironchest.gold`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
[16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironchest.diamond`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
[16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironchest.copper`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
[16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironchest.silver`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
[16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironchest.crystal`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
[16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironchest.obsidian`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
[16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironchest.dirtchest9000`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
[16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironshulkerbox.iron`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
[16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironshulkerbox.gold`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
[16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironshulkerbox.diamond`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
[16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironshulkerbox.copper`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
[16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironshulkerbox.silver`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
[16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironshulkerbox.crystal`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
[16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `ironshulkerbox.obsidian`, expected `ironchest`. This could be a intended override, but in most cases indicates a broken mod.
[16:49:12] [Server thread/WARN] [FML]: Potentially Dangerous alternative prefix `minecraft` for name `hammer_block`, expected `sparkshammers`. This could be a intended override, but in most cases indicates a broken mod.
[16:49:12] [Server thread/INFO] [FML]: Applying holder lookups
[16:49:12] [Server thread/INFO] [FML]: Holder lookups applied
[16:49:12] [Server thread/INFO] [Spark\'s Hammers]: Spark\'s Hammers: Reading custom tools from json file...
[16:49:12] [Server thread/INFO] [Spark\'s Hammers]: Spark\'s Hammers: Finished reading custom tools
[16:49:12] [Server thread/INFO] [Spark\'s Hammers]: Spark\'s Hammers: Added 36 tools
[16:49:12] [Server thread/INFO] [FML]: Applying holder lookups
[16:49:12] [Server thread/INFO] [FML]: Holder lookups applied
[16:49:13] [Server thread/INFO] [FML]: Applying holder lookups
[16:49:13] [Server thread/INFO] [FML]: Holder lookups applied
[16:49:13] [Server thread/INFO] [FML]: Applying holder lookups
[16:49:13] [Server thread/INFO] [FML]: Holder lookups applied
[16:49:13] [Server thread/INFO] [FML]: Injecting itemstacks
[16:49:13] [Server thread/INFO] [FML]: Itemstack injection complete
[16:49:13] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Loading properties
[16:49:13] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Default game type: SURVIVAL
[16:49:13] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Generating keypair
[16:49:13] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting Minecraft server on *:10956
[16:49:13] [Server thread/INFO] [net.minecraft.network.NetworkSystem]: Using epoll channel type
[16:49:14] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
[16:49:14] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer]: The server will make no attempt to authenticate usernames. Beware.
[16:49:14] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
[16:49:14] [Server thread/WARN] [net.minecraft.server.dedicated.DedicatedServer]: To change this, set "online-mode" to "true" in the server.properties file.
[16:49:15] [Server thread/INFO] [FML]: Applying holder lookups
[16:49:15] [Server thread/INFO] [FML]: Holder lookups applied
[16:49:15] [Server thread/INFO] [FML]: Injecting itemstacks
[16:49:15] [Server thread/INFO] [FML]: Itemstack injection complete
[16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:grass/0=&gt;1*minecraft:grass/0=&gt;minecraft:grass/0\' to mapping
[16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:grass/0=&gt;1*minecraft:dirt/0=&gt;minecraft:dirt/0\' to mapping
[16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:lapis_ore/0=&gt;1*minecraft:lapis_ore/4=&gt;minecraft:lapis_ore/0\' to mapping
[16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:lit_redstone_ore/0=&gt;1*minecraft:redstone_ore/0=&gt;minecraft:lit_redstone_ore/0\' to mapping
[16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:grass/0=&gt;1*minecraft:grass/0=&gt;minecraft:grass/0\' to mapping
[16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:grass/0=&gt;1*minecraft:dirt/0=&gt;minecraft:dirt/0\' to mapping
[16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:dirt/1=&gt;1*minecraft:dirt/1=&gt;minecraft:dirt/1\' to mapping
[16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:dirt/1=&gt;1*minecraft:dirt/0=&gt;minecraft:dirt/0\' to mapping
[16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:dirt/2=&gt;1*minecraft:dirt/2=&gt;minecraft:dirt/2\' to mapping
[16:49:15] [Server thread/INFO] [betterbuilderswands]: Added \'minecraft:dirt/2=&gt;1*minecraft:dirt/0=&gt;minecraft:dirt/0\' to mapping
[16:49:15] [Server thread/INFO] [Spark\'s Hammers]: Spark\'s Hammers: Removed 50 tools from creative menu due to missing ingredients
[16:49:15] [Server thread/INFO] [FML]: Forge Mod Loader has successfully loaded 11 mods
[16:49:15] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Preparing level "world"
[16:49:15] [Server thread/INFO] [FML.ModTracker]: This world was saved with mod betterbuilderswands version 0.13.0 and it is now at version 0.11.1, things may not work well
[16:49:15] [Server thread/INFO] [FML]: Injecting existing registry data into this server instance
[16:49:17] [Server thread/INFO] [FML]: Applying holder lookups
[16:49:17] [Server thread/INFO] [FML]: Holder lookups applied
[16:49:18] [Server thread/INFO] [FML]: Loading dimension 0 (world) (net.minecraft.server.dedicated.DedicatedServer@18761a76)
[16:49:19] [Server thread/INFO] [net.minecraft.advancements.AdvancementList]: Loaded 494 advancements
[16:49:19] [Server thread/INFO] [FML]: Loading dimension -1 (world) (net.minecraft.server.dedicated.DedicatedServer@18761a76)
[16:49:20] [Server thread/INFO] [FML]: Loading dimension 1 (world) (net.minecraft.server.dedicated.DedicatedServer@18761a76)
[16:49:20] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing start region for level 0
[16:49:22] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 0%
[16:49:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 8%
[16:49:24] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 29%
[16:49:25] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 52%
[16:49:26] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 77%
[16:49:27] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Done (11.595s)! For help, type "help" or "?"
[16:49:27] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting GS4 status listener
[16:49:27] [Query Listener #1/INFO] [net.minecraft.server.MinecraftServer]: Query running on **.**.**.**:10956
[16:49:28] [Server thread/INFO] [FML]: Unloading dimension -1
[16:49:28] [Server thread/INFO] [FML]: Unloading dimension 1
[17:04:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
[17:04:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving players
[17:04:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving worlds
[17:04:23] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving chunks for level \'world\'/overworld
[17:04:24] [Server thread/INFO] [FML]: Unloading dimension 0
[17:04:24] [Server Shutdown Thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
[17:04:24] [Server Shutdown Thread/INFO] [net.minecraft.server.MinecraftServer]: Saving players
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation Object
                (
                    [label:protected] => Minecraft version
                    [value:protected] => 1.12.2
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [16:48:56] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [16:48:56] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
                                            [number:protected] => 18
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVersionInformation Object
                (
                    [label:protected] => Forge version
                    [value:protected] => 14.23.5.2811
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [16:48:57] [Server thread/INFO] [FML]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [16:48:57] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2811 Initialized
                                            [number:protected] => 19
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\WorldModVersionProblem Object
                (
                    [currentVersion:protected] => 0.11.1
                    [expectedVersion:protected] => 0.13.0
                    [modName:protected] => betterbuilderswands
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 0.13.0
                                    [modName:protected] => betterbuilderswands
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\DoNothingSolution Object
                                (
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [16:49:15] [Server thread/INFO] [FML.ModTracker]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [16:49:15] [Server thread/INFO] [FML.ModTracker]: This world was saved with mod betterbuilderswands version 0.13.0 and it is now at version 0.11.1, things may not work well
                                            [number:protected] => 98
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

        $this->assertEquals("Minecraft version: 1.12.2", $analysis[0]->getMessage());

        $this->assertEquals("Forge version: 14.23.5.2811", $analysis[1]->getMessage());

        $this->assertEquals("This world was saved with mod 'betterbuilderswands' version 0.13.0 and it is now at version 0.11.1.", $analysis[2]->getMessage());
        $this->assertEquals("Install the mod 'betterbuilderswands' with version 0.13.0.", $analysis[2][0]->getMessage());
        $this->assertEquals("Do nothing. This problem might fix itself.", $analysis[2][1]->getMessage());

    }
}