<?php

class Mohist1122Test extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/mohist/mohist-1-12-2.log");
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
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/DEBUG] [FML]: Read 1450 binary patches
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/DEBUG] [FML]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/DEBUG] [FML]: Loading deobfuscation resource /deobfuscation_data-1.12.2.lzma with 36076 records
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/DEBUG] [FML]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/DEBUG] [FML]: Coremod plugin class FMLCorePlugin run successfully
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/DEBUG] [FML]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/INFO] [LaunchWrapper]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/DEBUG] [FML]: Injecting coremod FMLForgePlugin \{net.minecraftforge.classloading.FMLForgePlugin\} class transformers
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/DEBUG] [FML]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/DEBUG] [FML]: Injection complete
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/DEBUG] [FML]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/DEBUG] [FML]: Running coremod plugin for FMLForgePlugin \{net.minecraftforge.classloading.FMLForgePlugin\}
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/DEBUG] [FML]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/DEBUG] [FML]: Running coremod plugin FMLForgePlugin
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/DEBUG] [FML]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/DEBUG] [FML]: Coremod plugin class FMLForgePlugin run successfully
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/DEBUG] [FML]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/INFO] [LaunchWrapper]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/DEBUG] [FML]: Injecting coremod MohistCorePlugin \{com.mohistmc.forge.MohistCorePlugin\} class transformers
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/DEBUG] [FML]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/TRACE] [FML]: Registering transformer com.mohistmc.forge.SendPacketTransformer
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/TRACE] [FML]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/TRACE] [FML]: Registering transformer com.mohistmc.bukkit.pluginfix.MyPetTransformer
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/TRACE] [FML]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/DEBUG] [FML]: Injection complete
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/DEBUG] [FML]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/DEBUG] [FML]: Running coremod plugin for MohistCorePlugin \{com.mohistmc.forge.MohistCorePlugin\}
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/DEBUG] [FML]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/DEBUG] [FML]: Running coremod plugin MohistCorePlugin
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/DEBUG] [FML]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/DEBUG] [FML]: Coremod plugin class MohistCorePlugin run successfully
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/DEBUG] [FML]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/INFO] [LaunchWrapper]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/DEBUG] [FML]: Loaded 233 rules from AccessTransformer config file forge_at.cfg
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/DEBUG] [FML]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:43] [main/DEBUG] [FML]: Validating minecraft
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:43] [main/DEBUG] [FML]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:44] [main/DEBUG] [FML]: Minecraft validated, launching...
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:44] [main/DEBUG] [FML]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:44] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:44] [main/INFO] [LaunchWrapper]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:44] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:44] [main/INFO] [LaunchWrapper]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:44] [main/INFO] [LaunchWrapper]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:44] [main/INFO] [LaunchWrapper]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:46] [main/DEBUG] [FML]: Creating vanilla freeze snapshot
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:46] [main/DEBUG] [FML]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:46] [main/DEBUG] [FML]: Vanilla freeze snapshot created
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:46] [main/DEBUG] [FML]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:46] [Server thread/INFO] [Mohist]: Starting minecraft server version 1.12.2
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:46] [Server thread/INFO] [Mohist]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:46] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2860 `Initialized
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:46] [Server thread/INFO] [FML]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:46] [Server thread/INFO] [FML]: Starts to replace vanilla recipe ingredients with ore ingredients
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:46] [Server thread/INFO] [FML]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/INFO] [FML]: Replaced 1,227 ore ingredients
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/INFO] [FML]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: File /server/config/injectedDependencies.json not found. No dependencies injected
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Building injected Mod Containers [net.minecraftforge.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer]
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Attempting to load mods contained in the minecraft jar file and associated classes
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Found a minecraft related file at /server/mohist.jar, examining for mod candidates
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Found a minecraft related file at /jolokia/jolokia.jar, examining for mod candidates
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Found a minecraft related file at /server/libraries/com/googlecode/json-simple/json-simple/1.1.1/json-simple-1.1.1.jar, examining for mod candidates
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/com/typesafe/akka/akka-actor_2.11/2.3.3/akka-actor_2.11-2.3.3.jar
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/com/typesafe/config/1.3.1/config-1.3.1.jar
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Found a minecraft related file at /server/libraries/commons-lang/commons-lang/2.6/commons-lang-2.6.jar, examining for mod candidates
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/java3d/vecmath/1.5.2/vecmath-1.5.2.jar
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/jline/jline/2.13/jline-2.13.jar
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/lzma/lzma/0.0.1/lzma-0.0.1.jar
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/mysql/mysql-connector-java/5.1.46/mysql-connector-java-5.1.46.jar
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/net/java/dev/jna/jna/4.4.0/jna-4.4.0.jar
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/net/md-5/bungeecord-chat/1.12-SNAPSHOT/bungeecord-chat-1.12-SNAPSHOT.jar
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/net/md-5/SpecialSource/1.8.5/SpecialSource-1.8.5.jar
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/net/minecraft/launchwrapper/1.12/launchwrapper-1.12.jar
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/net/sf/jopt-simple/jopt-simple/5.0.3/jopt-simple-5.0.3.jar
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/net/sf/trove4j/trove4j/3.0.3/trove4j-3.0.3.jar
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/apache/commons/commons-lang3/3.5/commons-lang3-3.5.jar
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Found a minecraft related file at /server/libraries/org/apache/maven/maven-artifact/3.5.3/maven-artifact-3.5.3.jar, examining for mod candidates
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/jline/jline/3.5.1/jline-3.5.1.jar
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Found a minecraft related file at /server/libraries/org/ow2/asm/asm-debug-all/5.2/asm-debug-all-5.2.jar, examining for mod candidates
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/plugins/scala-continuations-library_2.11/1.0.2/scala-continuations-library_2.11-1.0.2.jar
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/plugins/scala-continuations-plugin_2.11.1/1.0.2/scala-continuations-plugin_2.11.1-1.0.2.jar
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/scala-actors-migration_2.11/1.1.0/scala-actors-migration_2.11-1.1.0.jar
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/scala-compiler/2.11.1/scala-compiler-2.11.1.jar
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/scala-library/2.11.1/scala-library-2.11.1.jar
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/scala-parser-combinators_2.11/1.0.1/scala-parser-combinators_2.11-1.0.1.jar
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/scala-reflect/2.11.1/scala-reflect-2.11.1.jar
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/scala-swing_2.11/1.0.1/scala-swing_2.11-1.0.1.jar
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/scala-xml_2.11/1.0.2/scala-xml_2.11-1.0.2.jar
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/xerial/sqlite-jdbc/**.**.**.**/sqlite-jdbc-3.21.0.1.jar
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/yaml/snakeyaml/1.19/snakeyaml-1.19.jar
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Found a minecraft related file at /server/libraries/org/slf4j/slf4j-api/1.7.30/slf4j-api-1.7.30.jar, examining for mod candidates
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Found a minecraft related file at /server/libraries/org/slf4j/slf4j-nop/1.7.30/slf4j-nop-1.7.30.jar, examining for mod candidates
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/plugins/scala-continuations-library_2.11/1.0.2_mc/scala-continuations-library_2.11-1.0.2_mc.jar
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/plugins/scala-continuations-plugin_2.11.1/1.0.2_mc/scala-continuations-plugin_2.11.1-1.0.2_mc.jar
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/io/netty/netty-all/4.1.24.Final/netty-all-4.1.24.Final.jar
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/apache/logging/log4j/log4j-api/2.17.1/log4j-api-2.17.1.jar
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/apache/logging/log4j/log4j-core/2.17.1/log4j-core-2.17.1.jar
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/TRACE] [FML]:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Found a minecraft related file at /server/libraries/net/minecraft/1.12.2/minecraft_server.1.12.2.jar, examining for mod candidates
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Minecraft jar mods loaded successfully
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/INFO] [FML]: Searching /server/./mods for mods
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/INFO] [FML]:
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Examining file mohist.jar for potential mods
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: The mod container mohist.jar appears to be missing an mcmod.info file
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Examining file jolokia.jar for potential mods
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: The mod container jolokia.jar appears to be missing an mcmod.info file
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Examining file json-simple-1.1.1.jar for potential mods
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: The mod container json-simple-1.1.1.jar appears to be missing an mcmod.info file
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Examining file commons-lang-2.6.jar for potential mods
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: The mod container commons-lang-2.6.jar appears to be missing an mcmod.info file
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Examining file maven-artifact-3.5.3.jar for potential mods
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: The mod container maven-artifact-3.5.3.jar appears to be missing an mcmod.info file
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Examining file asm-debug-all-5.2.jar for potential mods
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: The mod container asm-debug-all-5.2.jar appears to be missing an mcmod.info file
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Examining file slf4j-api-1.7.30.jar for potential mods
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: The mod container slf4j-api-1.7.30.jar appears to be missing an mcmod.info file
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Examining file slf4j-nop-1.7.30.jar for potential mods
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: The mod container slf4j-nop-1.7.30.jar appears to be missing an mcmod.info file
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: Examining file minecraft_server.1.12.2.jar for potential mods
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:47] [Server thread/DEBUG] [FML]: The mod container minecraft_server.1.12.2.jar appears to be missing an mcmod.info file
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:47] [Server thread/DEBUG] [FML]:
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Forge Mod Loader has identified 5 mods to load
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Received a system property request {0}
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: System property request managing the state of 0 mods
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: After merging, found state information for 0 mods
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: Missing English translation for mohist: assets/mohist/lang/.lang
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: Missing English translation for FML: assets/fml/lang/.lang
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Verifying mod requirements are satisfied
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: The mod {0} does not wish to run in Minecraft version {1}
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: All mod requirements are satisfied
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Mod sorting completed successfully
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: Mod sorting data
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: No user mods found to sort
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: Loading @Config anotation data
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod minecraft
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod minecraft
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: Bar Step: Construction - Minecraft took 0.003s
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod mcp
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod mcp
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: Bar Step: Construction - Minecraft Coder Pack took 0.001s
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod mohist
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod mohist
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: Bar Step: Construction - Mohist took 0.000s
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod FML
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Mod FML is using network checker : Invoking method checkModLists
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Testing mod FML to verify it accepts its own version in a remote connection
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: The mod FML accepts its own version (**.**.**.**)
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Forge Mod Loader has successfully loaded [minecraft, mcp, mohist, FML, forge] modCLIENT
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Forge Mod Loader has successfully loaded [minecraft, mcp, mohist, FML, forge] modSERVER
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod FML
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: Bar Step: Construction - Forge Mod Loader took 0.140s
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod forge
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [forge]: Loading Vanilla annotations: null
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [forge]:
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [forge]: Preloading CrashReport Classes
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [forge]:
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [forge]: 	net/minecraftforge/common/util/TextTable
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [forge]:
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [forge]: 	net/minecraftforge/common/util/TextTable$Alignment
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [forge]:
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [forge]: 	net/minecraftforge/common/util/TextTable$Column
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [forge]:
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [forge]: 	net/minecraftforge/common/util/TextTable$Row
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [forge]:
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [forge]: 	net/minecraftforge/fml/client/SplashProgress$1
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [forge]:
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [forge]: 	net/minecraftforge/fml/common/FMLCommonHandler$1
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [forge]:
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [forge]: 	net/minecraftforge/fml/common/Loader$1
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [forge]:
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Mod forge is using network checker : No network checking performed
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Testing mod forge to verify it accepts its own version in a remote connection
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: The mod forge accepts its own version (14.23.5.2860)
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: Attempting to inject @Config classes into forge for type INSTANCE
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod forge
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: Bar Step: Construction - Minecraft Forge took 0.016s
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: Bar Finished: Construction took 0.160s
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: Mod signature data
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]:  	Valid Signatures:
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]:  	 Missing Signatures:
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: 		minecraft	(Minecraft	1.12.2)	minecraft.jar
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: 		mcp	(Minecraft Coder Pack	9.42)	minecraft.jar
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: 		mohist	(Mohist	1.12.2-304)	mohist.jar
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: 		FML	(Forge Mod Loader	**.**.**.**)	mohist.jar
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: 		forge	(Minecraft Forge	14.23.5.2860)	mohist.jar
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Processing Object Holder annotations
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Found 1168 ObjectHolder annotations
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Identifying ItemStackHolder annotations
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Found 0 ItemStackHolder annotations
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sending event FMLPreInitializationEvent to mod minecraft
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sent event FMLPreInitializationEvent to mod minecraft
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: Bar Step: PreInitialization - Minecraft took 0.000s
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sending event FMLPreInitializationEvent to mod mcp
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sent event FMLPreInitializationEvent to mod mcp
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: Bar Step: PreInitialization - Minecraft Coder Pack took 0.000s
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sending event FMLPreInitializationEvent to mod mohist
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sent event FMLPreInitializationEvent to mod mohist
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: Bar Step: PreInitialization - Mohist took 0.000s
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sending event FMLPreInitializationEvent to mod FML
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sent event FMLPreInitializationEvent to mod FML
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: Bar Step: PreInitialization - Forge Mod Loader took 0.000s
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sending event FMLPreInitializationEvent to mod forge
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Configured a dormant chunk cache size of 0
                                    [number:protected] => 165
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/TRACE] [FML]: Sent event FMLPreInitializationEvent to mod forge
                                    [number:protected] => 166
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/TRACE] [FML]:
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: Bar Step: PreInitialization - Minecraft Forge took 0.037s
                                    [number:protected] => 167
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/DEBUG] [FML]: Bar Finished: PreInitialization took 0.038s
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/DEBUG] [FML]:
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 171
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 172
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 173
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 174
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Injecting itemstacks
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Injecting injection complete
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Replacing net.minecraftforge.server.permission.DefaultPermissionHandler with com.mohistmc.forge.BukkitPermissionsHandler
                                    [number:protected] => 179
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [179] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [FML]: Registered Forge API Permission Handler(Bukkit)
                                    [number:protected] => 180
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [FML]:
                )

            [180] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Loading configuration file(server.properties)
                                    [number:protected] => 181
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [181] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [Mohist]: Default gamemode type:SURVIVAL
                                    [number:protected] => 182
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [Mohist]:
                )

            [182] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [Mohist]: This server is runningMohistversion git-Mohist-1.12.2-304 (MC: 1.12.2)(Implementing API version1.12.2-R0.1-SNAPSHOT)
                                    [number:protected] => 183
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [Mohist]:
                )

            [183] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [Spigot]: Server Player Sample Count:12
                                    [number:protected] => 184
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [Spigot]:
                )

            [184] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:49] [Server thread/INFO] [Mohist]: Using 4 threads for Netty based IO
                                    [number:protected] => 185
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:49] [Server thread/INFO] [Mohist]:
                )

            [185] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Generating keypair
                                    [number:protected] => 186
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [186] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/INFO] [Mohist]: Starting Minecraft server on 0.0.0.0:17650
                                    [number:protected] => 187
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/INFO] [Mohist]:
                )

            [187] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/INFO] [net.minecraft.network.NetworkSystem]: Using epoll channel type
                                    [number:protected] => 188
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/INFO] [net.minecraft.network.NetworkSystem]:
                )

            [188] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/INFO] [FML]: Applying holder lookups
                                    [number:protected] => 189
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/INFO] [FML]:
                )

            [189] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/INFO] [FML]: Holder lookups applied
                                    [number:protected] => 190
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/INFO] [FML]:
                )

            [190] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLInitializationEvent to mod minecraft
                                    [number:protected] => 191
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [191] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLInitializationEvent to mod minecraft
                                    [number:protected] => 192
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [192] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: Initialization - Minecraft took 0.000s
                                    [number:protected] => 193
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [193] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLInitializationEvent to mod mcp
                                    [number:protected] => 194
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [194] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLInitializationEvent to mod mcp
                                    [number:protected] => 195
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [195] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: Initialization - Minecraft Coder Pack took 0.000s
                                    [number:protected] => 196
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [196] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLInitializationEvent to mod mohist
                                    [number:protected] => 197
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [197] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLInitializationEvent to mod mohist
                                    [number:protected] => 198
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [198] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: Initialization - Mohist took 0.000s
                                    [number:protected] => 199
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [199] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLInitializationEvent to mod FML
                                    [number:protected] => 200
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [200] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLInitializationEvent to mod FML
                                    [number:protected] => 201
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [201] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: Initialization - Forge Mod Loader took 0.000s
                                    [number:protected] => 202
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [202] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLInitializationEvent to mod forge
                                    [number:protected] => 203
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [203] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLInitializationEvent to mod forge
                                    [number:protected] => 204
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [204] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: Initialization - Minecraft Forge took 0.000s
                                    [number:protected] => 205
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [205] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Finished: Initialization took 0.002s
                                    [number:protected] => 206
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [206] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Attempting to deliver 0 IMC messages to mod minecraft
                                    [number:protected] => 207
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [207] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event IMCEvent to mod minecraft
                                    [number:protected] => 208
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [208] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event IMCEvent to mod minecraft
                                    [number:protected] => 209
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [209] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: InterModComms$IMC - Minecraft took 0.002s
                                    [number:protected] => 210
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [210] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Attempting to deliver 0 IMC messages to mod mcp
                                    [number:protected] => 211
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [211] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event IMCEvent to mod mcp
                                    [number:protected] => 212
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [212] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event IMCEvent to mod mcp
                                    [number:protected] => 213
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [213] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: InterModComms$IMC - Minecraft Coder Pack took 0.000s
                                    [number:protected] => 214
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [214] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Attempting to deliver 0 IMC messages to mod mohist
                                    [number:protected] => 215
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [215] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event IMCEvent to mod mohist
                                    [number:protected] => 216
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [216] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event IMCEvent to mod mohist
                                    [number:protected] => 217
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [217] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: InterModComms$IMC - Mohist took 0.000s
                                    [number:protected] => 218
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [218] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Attempting to deliver 0 IMC messages to mod FML
                                    [number:protected] => 219
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [219] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event IMCEvent to mod FML
                                    [number:protected] => 220
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [220] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event IMCEvent to mod FML
                                    [number:protected] => 221
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [221] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: InterModComms$IMC - Forge Mod Loader took 0.000s
                                    [number:protected] => 222
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [222] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Attempting to deliver 0 IMC messages to mod forge
                                    [number:protected] => 223
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [223] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event IMCEvent to mod forge
                                    [number:protected] => 224
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [224] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event IMCEvent to mod forge
                                    [number:protected] => 225
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [225] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: InterModComms$IMC - Minecraft Forge took 0.000s
                                    [number:protected] => 226
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [226] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Finished: InterModComms$IMC took 0.003s
                                    [number:protected] => 227
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [227] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/INFO] [FML]: Injecting itemstacks
                                    [number:protected] => 228
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/INFO] [FML]:
                )

            [228] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/INFO] [FML]: Injecting injection complete
                                    [number:protected] => 229
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/INFO] [FML]:
                )

            [229] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLPostInitializationEvent to mod minecraft
                                    [number:protected] => 230
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [230] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLPostInitializationEvent to mod minecraft
                                    [number:protected] => 231
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [231] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: PostInitialization - Minecraft took 0.000s
                                    [number:protected] => 232
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [232] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLPostInitializationEvent to mod mcp
                                    [number:protected] => 233
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [233] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLPostInitializationEvent to mod mcp
                                    [number:protected] => 234
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [234] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: PostInitialization - Minecraft Coder Pack took 0.000s
                                    [number:protected] => 235
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [235] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLPostInitializationEvent to mod mohist
                                    [number:protected] => 236
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [236] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLPostInitializationEvent to mod mohist
                                    [number:protected] => 237
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [237] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: PostInitialization - Mohist took 0.000s
                                    [number:protected] => 238
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [238] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLPostInitializationEvent to mod FML
                                    [number:protected] => 239
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [239] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLPostInitializationEvent to mod FML
                                    [number:protected] => 240
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [240] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: PostInitialization - Forge Mod Loader took 0.000s
                                    [number:protected] => 241
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [241] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLPostInitializationEvent to mod forge
                                    [number:protected] => 242
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [242] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLPostInitializationEvent to mod forge
                                    [number:protected] => 243
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [243] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: PostInitialization - Minecraft Forge took 0.008s
                                    [number:protected] => 244
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [244] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Finished: PostInitialization took 0.009s
                                    [number:protected] => 245
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [245] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLLoadCompleteEvent to mod minecraft
                                    [number:protected] => 246
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [246] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLLoadCompleteEvent to mod minecraft
                                    [number:protected] => 247
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [247] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: LoadComplete - Minecraft took 0.000s
                                    [number:protected] => 248
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [248] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLLoadCompleteEvent to mod mcp
                                    [number:protected] => 249
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [249] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLLoadCompleteEvent to mod mcp
                                    [number:protected] => 250
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [250] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: LoadComplete - Minecraft Coder Pack took 0.000s
                                    [number:protected] => 251
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [251] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLLoadCompleteEvent to mod mohist
                                    [number:protected] => 252
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [252] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLLoadCompleteEvent to mod mohist
                                    [number:protected] => 253
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [253] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: LoadComplete - Mohist took 0.000s
                                    [number:protected] => 254
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [254] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLLoadCompleteEvent to mod FML
                                    [number:protected] => 255
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [255] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLLoadCompleteEvent to mod FML
                                    [number:protected] => 256
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [256] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: LoadComplete - Forge Mod Loader took 0.000s
                                    [number:protected] => 257
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [257] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLLoadCompleteEvent to mod forge
                                    [number:protected] => 258
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [258] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Forge RecipeSorter Baking:
                                    [number:protected] => 259
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [259] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]:   16: RecipeEntry("Before", UNKNOWN, )
                                    [number:protected] => 260
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [260] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]:   15: RecipeEntry("minecraft:shaped", SHAPED, net.minecraft.item.crafting.ShapedRecipes) Before: minecraft:shapeless
                                    [number:protected] => 261
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [261] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]:   14: RecipeEntry("forge:shapedore", SHAPED, net.minecraftforge.oredict.ShapedOreRecipe) Before: minecraft:shapeless After: minecraft:shaped
                                    [number:protected] => 262
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [262] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]:   13: RecipeEntry("minecraft:mapextending", SHAPED, net.minecraft.item.crafting.RecipesMapExtending) Before: minecraft:shapeless After: minecraft:shaped
                                    [number:protected] => 263
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [263] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]:   12: RecipeEntry("minecraft:shapeless", SHAPELESS, net.minecraft.item.crafting.ShapelessRecipes) After: minecraft:shaped
                                    [number:protected] => 264
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [264] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]:   11: RecipeEntry("minecraft:repair", SHAPELESS, net.minecraft.item.crafting.RecipeRepairItem) After: minecraft:shapeless
                                    [number:protected] => 265
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [265] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]:   10: RecipeEntry("minecraft:shield_deco", SHAPELESS, net.minecraft.item.crafting.ShieldRecipes$Decoration) After: minecraft:shapeless
                                    [number:protected] => 266
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [266] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]:   9: RecipeEntry("minecraft:armordyes", SHAPELESS, net.minecraft.item.crafting.RecipesArmorDyes) After: minecraft:shapeless
                                    [number:protected] => 267
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [267] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]:   8: RecipeEntry("minecraft:fireworks", SHAPELESS, net.minecraft.item.crafting.RecipeFireworks) After: minecraft:shapeless
                                    [number:protected] => 268
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [268] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]:   7: RecipeEntry("minecraft:pattern_dupe", SHAPELESS, net.minecraft.item.crafting.RecipesBanners$RecipeDuplicatePattern) After: minecraft:shapeless
                                    [number:protected] => 269
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [269] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]:   6: RecipeEntry("minecraft:tippedarrow", SHAPELESS, net.minecraft.item.crafting.RecipeTippedArrow) After: minecraft:shapeless
                                    [number:protected] => 270
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [270] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]:   5: RecipeEntry("minecraft:mapcloning", SHAPELESS, net.minecraft.item.crafting.RecipesMapCloning) After: minecraft:shapeless
                                    [number:protected] => 271
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [271] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]:   4: RecipeEntry("forge:shapelessore", SHAPELESS, net.minecraftforge.oredict.ShapelessOreRecipe) After: minecraft:shapeless
                                    [number:protected] => 272
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [272] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]:   3: RecipeEntry("minecraft:pattern_add", SHAPELESS, net.minecraft.item.crafting.RecipesBanners$RecipeAddPattern) After: minecraft:shapeless
                                    [number:protected] => 273
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [273] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]:   2: RecipeEntry("minecraft:bookcloning", SHAPELESS, net.minecraft.item.crafting.RecipeBookCloning) After: minecraft:shapeless
                                    [number:protected] => 274
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [274] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]:   1: RecipeEntry("After", UNKNOWN, )
                                    [number:protected] => 275
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [275] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Sorting recipes
                                    [number:protected] => 276
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [276] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLLoadCompleteEvent to mod forge
                                    [number:protected] => 277
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [277] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: LoadComplete - Minecraft Forge took 0.006s
                                    [number:protected] => 278
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [278] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Finished: LoadComplete took 0.007s
                                    [number:protected] => 279
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [279] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Freezing registries
                                    [number:protected] => 280
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [280] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLModIdMappingEvent to mod minecraft
                                    [number:protected] => 281
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [281] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLModIdMappingEvent to mod minecraft
                                    [number:protected] => 282
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [282] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ModIdMapping - Minecraft took 0.000s
                                    [number:protected] => 283
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [283] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLModIdMappingEvent to mod mcp
                                    [number:protected] => 284
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [284] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLModIdMappingEvent to mod mcp
                                    [number:protected] => 285
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [285] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ModIdMapping - Minecraft Coder Pack took 0.000s
                                    [number:protected] => 286
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [286] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLModIdMappingEvent to mod mohist
                                    [number:protected] => 287
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [287] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLModIdMappingEvent to mod mohist
                                    [number:protected] => 288
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [288] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ModIdMapping - Mohist took 0.000s
                                    [number:protected] => 289
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [289] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLModIdMappingEvent to mod FML
                                    [number:protected] => 290
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [290] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLModIdMappingEvent to mod FML
                                    [number:protected] => 291
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [291] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ModIdMapping - Forge Mod Loader took 0.000s
                                    [number:protected] => 292
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [292] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLModIdMappingEvent to mod forge
                                    [number:protected] => 293
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [293] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLModIdMappingEvent to mod forge
                                    [number:protected] => 294
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [294] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ModIdMapping - Minecraft Forge took 0.026s
                                    [number:protected] => 295
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [295] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Finished: ModIdMapping took 0.027s
                                    [number:protected] => 296
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [296] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: All registries frozen
                                    [number:protected] => 297
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [297] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/INFO] [FML]: Forge Mod Loader has successfully loaded 5 mods
                                    [number:protected] => 298
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/INFO] [FML]:
                )

            [298] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLServerAboutToStartEvent to mod minecraft
                                    [number:protected] => 299
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [299] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLServerAboutToStartEvent to mod minecraft
                                    [number:protected] => 300
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [300] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ServerAboutToStart - Minecraft took 0.000s
                                    [number:protected] => 301
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [301] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLServerAboutToStartEvent to mod mcp
                                    [number:protected] => 302
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [302] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLServerAboutToStartEvent to mod mcp
                                    [number:protected] => 303
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [303] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ServerAboutToStart - Minecraft Coder Pack took 0.000s
                                    [number:protected] => 304
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [304] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLServerAboutToStartEvent to mod mohist
                                    [number:protected] => 305
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [305] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLServerAboutToStartEvent to mod mohist
                                    [number:protected] => 306
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [306] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ServerAboutToStart - Mohist took 0.000s
                                    [number:protected] => 307
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [307] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLServerAboutToStartEvent to mod FML
                                    [number:protected] => 308
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [308] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLServerAboutToStartEvent to mod FML
                                    [number:protected] => 309
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [309] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ServerAboutToStart - Forge Mod Loader took 0.000s
                                    [number:protected] => 310
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [310] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sending event FMLServerAboutToStartEvent to mod forge
                                    [number:protected] => 311
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [311] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/TRACE] [FML]: Sent event FMLServerAboutToStartEvent to mod forge
                                    [number:protected] => 312
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/TRACE] [FML]:
                )

            [312] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ServerAboutToStart - Minecraft Forge took 0.000s
                                    [number:protected] => 313
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [313] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/DEBUG] [FML]: Bar Finished: ServerAboutToStart took 0.001s
                                    [number:protected] => 314
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/DEBUG] [FML]:
                )

            [314] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:50] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: "Preparing level "world""
                                    [number:protected] => 315
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:50] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [315] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:51] [Server thread/INFO] [FML]: Loading dimension 0 (world)
                                    [number:protected] => 316
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:51] [Server thread/INFO] [FML]:
                )

            [316] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:51] [Server thread/INFO] [FML]: Loading dimension -1 (DIM-1)
                                    [number:protected] => 317
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:51] [Server thread/INFO] [FML]:
                )

            [317] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:51] [Server thread/INFO] [FML]: Loading dimension 1 (DIM1)
                                    [number:protected] => 318
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:51] [Server thread/INFO] [FML]:
                )

            [318] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:51] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing start region for level 0 (Seed:-1911769020504177725 )
                                    [number:protected] => 319
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:51] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [319] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:52] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 6%
                                    [number:protected] => 320
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:52] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [320] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:53] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 13%
                                    [number:protected] => 321
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:53] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [321] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:54] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 21%
                                    [number:protected] => 322
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:54] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [322] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:55] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 29%
                                    [number:protected] => 323
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:55] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [323] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:56] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 37%
                                    [number:protected] => 324
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:56] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [324] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:57] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 43%
                                    [number:protected] => 325
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:57] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [325] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:58] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 52%
                                    [number:protected] => 326
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:58] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [326] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:25:59] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 60%
                                    [number:protected] => 327
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:25:59] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [327] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:00] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 70%
                                    [number:protected] => 328
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:00] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [328] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:01] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 82%
                                    [number:protected] => 329
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:01] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [329] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 93%
                                    [number:protected] => 330
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [330] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/DEBUG] [Mohist]: Server permissions file permissions.yml is empty, ignoring it
                                    [number:protected] => 331
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/DEBUG] [Mohist]:
                )

            [331] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/INFO] [Mohist]: Done (13.203s)! For help, type "help" or "?"
                                    [number:protected] => 332
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/INFO] [Mohist]:
                )

            [332] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/INFO] [Mohist]: Starting Minecraft server on 0.0.0.0:17650
                                    [number:protected] => 333
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/INFO] [Mohist]:
                )

            [333] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting GS4 status listener
                                    [number:protected] => 334
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [334] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Query Listener #1/INFO] [net.minecraft.server.MinecraftServer]: Query running on 0.0.0.0:9898
                                    [number:protected] => 335
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Query Listener #1/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [335] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartingEvent to mod minecraft
                                    [number:protected] => 336
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [336] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartingEvent to mod minecraft
                                    [number:protected] => 337
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [337] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarting - Minecraft took 0.000s
                                    [number:protected] => 338
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/DEBUG] [FML]:
                )

            [338] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartingEvent to mod mcp
                                    [number:protected] => 339
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [339] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartingEvent to mod mcp
                                    [number:protected] => 340
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [340] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarting - Minecraft Coder Pack took 0.001s
                                    [number:protected] => 341
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/DEBUG] [FML]:
                )

            [341] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartingEvent to mod mohist
                                    [number:protected] => 342
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [342] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartingEvent to mod mohist
                                    [number:protected] => 343
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [343] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarting - Mohist took 0.000s
                                    [number:protected] => 344
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/DEBUG] [FML]:
                )

            [344] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartingEvent to mod FML
                                    [number:protected] => 345
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [345] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartingEvent to mod FML
                                    [number:protected] => 346
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [346] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarting - Forge Mod Loader took 0.000s
                                    [number:protected] => 347
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/DEBUG] [FML]:
                )

            [347] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartingEvent to mod forge
                                    [number:protected] => 348
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [348] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartingEvent to mod forge
                                    [number:protected] => 349
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [349] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarting - Minecraft Forge took 0.015s
                                    [number:protected] => 350
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/DEBUG] [FML]:
                )

            [350] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/DEBUG] [FML]: Bar Finished: ServerStarting took 0.017s
                                    [number:protected] => 351
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/DEBUG] [FML]:
                )

            [351] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartedEvent to mod minecraft
                                    [number:protected] => 352
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [352] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartedEvent to mod minecraft
                                    [number:protected] => 353
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [353] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarted - Minecraft took 0.000s
                                    [number:protected] => 354
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/DEBUG] [FML]:
                )

            [354] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartedEvent to mod mcp
                                    [number:protected] => 355
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [355] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartedEvent to mod mcp
                                    [number:protected] => 356
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [356] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarted - Minecraft Coder Pack took 0.000s
                                    [number:protected] => 357
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/DEBUG] [FML]:
                )

            [357] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartedEvent to mod mohist
                                    [number:protected] => 358
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [358] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartedEvent to mod mohist
                                    [number:protected] => 359
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [359] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarted - Mohist took 0.000s
                                    [number:protected] => 360
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/DEBUG] [FML]:
                )

            [360] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartedEvent to mod FML
                                    [number:protected] => 361
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [361] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartedEvent to mod FML
                                    [number:protected] => 362
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [362] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarted - Forge Mod Loader took 0.000s
                                    [number:protected] => 363
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/DEBUG] [FML]:
                )

            [363] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartedEvent to mod forge
                                    [number:protected] => 364
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [364] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartedEvent to mod forge
                                    [number:protected] => 365
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/TRACE] [FML]:
                )

            [365] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarted - Minecraft Forge took 0.000s
                                    [number:protected] => 366
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/DEBUG] [FML]:
                )

            [366] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/DEBUG] [FML]: Bar Finished: ServerStarted took 0.001s
                                    [number:protected] => 367
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/DEBUG] [FML]:
                )

            [367] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:26:03] [Server thread/INFO] [Mohist]: Timings Reset
                                    [number:protected] => 368
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:26:03] [Server thread/INFO] [Mohist]:
                )

            [368] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:31:04] [Server thread/DEBUG] [FML]: Gathering id map for writing to world save world
                                    [number:protected] => 369
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [17:31:04] [Server thread/DEBUG] [FML]:
                )

        )

    [iterator:protected] => 369
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [17:25:43] [main/DEBUG] [FML]: Read 1450 binary patches
[17:25:43] [main/DEBUG] [FML]: Loading deobfuscation resource /deobfuscation_data-1.12.2.lzma with 36076 records
[17:25:43] [main/DEBUG] [FML]: Coremod plugin class FMLCorePlugin run successfully
[17:25:43] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
[17:25:43] [main/DEBUG] [FML]: Injecting coremod FMLForgePlugin \{net.minecraftforge.classloading.FMLForgePlugin\} class transformers
[17:25:43] [main/DEBUG] [FML]: Injection complete
[17:25:43] [main/DEBUG] [FML]: Running coremod plugin for FMLForgePlugin \{net.minecraftforge.classloading.FMLForgePlugin\}
[17:25:43] [main/DEBUG] [FML]: Running coremod plugin FMLForgePlugin
[17:25:43] [main/DEBUG] [FML]: Coremod plugin class FMLForgePlugin run successfully
[17:25:43] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
[17:25:43] [main/DEBUG] [FML]: Injecting coremod MohistCorePlugin \{com.mohistmc.forge.MohistCorePlugin\} class transformers
[17:25:43] [main/TRACE] [FML]: Registering transformer com.mohistmc.forge.SendPacketTransformer
[17:25:43] [main/TRACE] [FML]: Registering transformer com.mohistmc.bukkit.pluginfix.MyPetTransformer
[17:25:43] [main/DEBUG] [FML]: Injection complete
[17:25:43] [main/DEBUG] [FML]: Running coremod plugin for MohistCorePlugin \{com.mohistmc.forge.MohistCorePlugin\}
[17:25:43] [main/DEBUG] [FML]: Running coremod plugin MohistCorePlugin
[17:25:43] [main/DEBUG] [FML]: Coremod plugin class MohistCorePlugin run successfully
[17:25:43] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
[17:25:43] [main/DEBUG] [FML]: Loaded 233 rules from AccessTransformer config file forge_at.cfg
[17:25:43] [main/DEBUG] [FML]: Validating minecraft
[17:25:44] [main/DEBUG] [FML]: Minecraft validated, launching...
[17:25:44] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.TerminalTweaker
[17:25:44] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.TerminalTweaker
[17:25:44] [main/INFO] [LaunchWrapper]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
[17:25:46] [main/DEBUG] [FML]: Creating vanilla freeze snapshot
[17:25:46] [main/DEBUG] [FML]: Vanilla freeze snapshot created
[17:25:46] [Server thread/INFO] [Mohist]: Starting minecraft server version 1.12.2
[17:25:46] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2860 `Initialized
[17:25:46] [Server thread/INFO] [FML]: Starts to replace vanilla recipe ingredients with ore ingredients
[17:25:47] [Server thread/INFO] [FML]: Replaced 1,227 ore ingredients
[17:25:47] [Server thread/DEBUG] [FML]: File /server/config/injectedDependencies.json not found. No dependencies injected
[17:25:47] [Server thread/DEBUG] [FML]: Building injected Mod Containers [net.minecraftforge.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer]
[17:25:47] [Server thread/DEBUG] [FML]: Attempting to load mods contained in the minecraft jar file and associated classes
[17:25:47] [Server thread/DEBUG] [FML]: Found a minecraft related file at /server/mohist.jar, examining for mod candidates
[17:25:47] [Server thread/DEBUG] [FML]: Found a minecraft related file at /jolokia/jolokia.jar, examining for mod candidates
[17:25:47] [Server thread/DEBUG] [FML]: Found a minecraft related file at /server/libraries/com/googlecode/json-simple/json-simple/1.1.1/json-simple-1.1.1.jar, examining for mod candidates
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/com/typesafe/akka/akka-actor_2.11/2.3.3/akka-actor_2.11-2.3.3.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/com/typesafe/config/1.3.1/config-1.3.1.jar
[17:25:47] [Server thread/DEBUG] [FML]: Found a minecraft related file at /server/libraries/commons-lang/commons-lang/2.6/commons-lang-2.6.jar, examining for mod candidates
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/java3d/vecmath/1.5.2/vecmath-1.5.2.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/jline/jline/2.13/jline-2.13.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/lzma/lzma/0.0.1/lzma-0.0.1.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/mysql/mysql-connector-java/5.1.46/mysql-connector-java-5.1.46.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/net/java/dev/jna/jna/4.4.0/jna-4.4.0.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/net/md-5/bungeecord-chat/1.12-SNAPSHOT/bungeecord-chat-1.12-SNAPSHOT.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/net/md-5/SpecialSource/1.8.5/SpecialSource-1.8.5.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/net/minecraft/launchwrapper/1.12/launchwrapper-1.12.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/net/sf/jopt-simple/jopt-simple/5.0.3/jopt-simple-5.0.3.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/net/sf/trove4j/trove4j/3.0.3/trove4j-3.0.3.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/apache/commons/commons-lang3/3.5/commons-lang3-3.5.jar
[17:25:47] [Server thread/DEBUG] [FML]: Found a minecraft related file at /server/libraries/org/apache/maven/maven-artifact/3.5.3/maven-artifact-3.5.3.jar, examining for mod candidates
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/jline/jline/3.5.1/jline-3.5.1.jar
[17:25:47] [Server thread/DEBUG] [FML]: Found a minecraft related file at /server/libraries/org/ow2/asm/asm-debug-all/5.2/asm-debug-all-5.2.jar, examining for mod candidates
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/plugins/scala-continuations-library_2.11/1.0.2/scala-continuations-library_2.11-1.0.2.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/plugins/scala-continuations-plugin_2.11.1/1.0.2/scala-continuations-plugin_2.11.1-1.0.2.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/scala-actors-migration_2.11/1.1.0/scala-actors-migration_2.11-1.1.0.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/scala-compiler/2.11.1/scala-compiler-2.11.1.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/scala-library/2.11.1/scala-library-2.11.1.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/scala-parser-combinators_2.11/1.0.1/scala-parser-combinators_2.11-1.0.1.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/scala-reflect/2.11.1/scala-reflect-2.11.1.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/scala-swing_2.11/1.0.1/scala-swing_2.11-1.0.1.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/scala-xml_2.11/1.0.2/scala-xml_2.11-1.0.2.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/xerial/sqlite-jdbc/**.**.**.**/sqlite-jdbc-3.21.0.1.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/yaml/snakeyaml/1.19/snakeyaml-1.19.jar
[17:25:47] [Server thread/DEBUG] [FML]: Found a minecraft related file at /server/libraries/org/slf4j/slf4j-api/1.7.30/slf4j-api-1.7.30.jar, examining for mod candidates
[17:25:47] [Server thread/DEBUG] [FML]: Found a minecraft related file at /server/libraries/org/slf4j/slf4j-nop/1.7.30/slf4j-nop-1.7.30.jar, examining for mod candidates
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/plugins/scala-continuations-library_2.11/1.0.2_mc/scala-continuations-library_2.11-1.0.2_mc.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/scala-lang/plugins/scala-continuations-plugin_2.11.1/1.0.2_mc/scala-continuations-plugin_2.11.1-1.0.2_mc.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/io/netty/netty-all/4.1.24.Final/netty-all-4.1.24.Final.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/apache/logging/log4j/log4j-api/2.17.1/log4j-api-2.17.1.jar
[17:25:47] [Server thread/TRACE] [FML]: Skipping known library file /server/libraries/org/apache/logging/log4j/log4j-core/2.17.1/log4j-core-2.17.1.jar
[17:25:47] [Server thread/DEBUG] [FML]: Found a minecraft related file at /server/libraries/net/minecraft/1.12.2/minecraft_server.1.12.2.jar, examining for mod candidates
[17:25:47] [Server thread/DEBUG] [FML]: Minecraft jar mods loaded successfully
[17:25:47] [Server thread/INFO] [FML]: Searching /server/./mods for mods
[17:25:47] [Server thread/DEBUG] [FML]: Examining file mohist.jar for potential mods
[17:25:47] [Server thread/DEBUG] [FML]: The mod container mohist.jar appears to be missing an mcmod.info file
[17:25:47] [Server thread/DEBUG] [FML]: Examining file jolokia.jar for potential mods
[17:25:47] [Server thread/DEBUG] [FML]: The mod container jolokia.jar appears to be missing an mcmod.info file
[17:25:47] [Server thread/DEBUG] [FML]: Examining file json-simple-1.1.1.jar for potential mods
[17:25:47] [Server thread/DEBUG] [FML]: The mod container json-simple-1.1.1.jar appears to be missing an mcmod.info file
[17:25:47] [Server thread/DEBUG] [FML]: Examining file commons-lang-2.6.jar for potential mods
[17:25:47] [Server thread/DEBUG] [FML]: The mod container commons-lang-2.6.jar appears to be missing an mcmod.info file
[17:25:47] [Server thread/DEBUG] [FML]: Examining file maven-artifact-3.5.3.jar for potential mods
[17:25:47] [Server thread/DEBUG] [FML]: The mod container maven-artifact-3.5.3.jar appears to be missing an mcmod.info file
[17:25:47] [Server thread/DEBUG] [FML]: Examining file asm-debug-all-5.2.jar for potential mods
[17:25:47] [Server thread/DEBUG] [FML]: The mod container asm-debug-all-5.2.jar appears to be missing an mcmod.info file
[17:25:47] [Server thread/DEBUG] [FML]: Examining file slf4j-api-1.7.30.jar for potential mods
[17:25:47] [Server thread/DEBUG] [FML]: The mod container slf4j-api-1.7.30.jar appears to be missing an mcmod.info file
[17:25:47] [Server thread/DEBUG] [FML]: Examining file slf4j-nop-1.7.30.jar for potential mods
[17:25:47] [Server thread/DEBUG] [FML]: The mod container slf4j-nop-1.7.30.jar appears to be missing an mcmod.info file
[17:25:47] [Server thread/DEBUG] [FML]: Examining file minecraft_server.1.12.2.jar for potential mods
[17:25:47] [Server thread/DEBUG] [FML]: The mod container minecraft_server.1.12.2.jar appears to be missing an mcmod.info file
[17:25:49] [Server thread/INFO] [FML]: Forge Mod Loader has identified 5 mods to load
[17:25:49] [Server thread/TRACE] [FML]: Received a system property request {0}
[17:25:49] [Server thread/TRACE] [FML]: System property request managing the state of 0 mods
[17:25:49] [Server thread/DEBUG] [FML]: After merging, found state information for 0 mods
[17:25:49] [Server thread/DEBUG] [FML]: Missing English translation for mohist: assets/mohist/lang/.lang
[17:25:49] [Server thread/DEBUG] [FML]: Missing English translation for FML: assets/fml/lang/.lang
[17:25:49] [Server thread/TRACE] [FML]: Verifying mod requirements are satisfied
[17:25:49] [Server thread/TRACE] [FML]: The mod {0} does not wish to run in Minecraft version {1}
[17:25:49] [Server thread/TRACE] [FML]: All mod requirements are satisfied
[17:25:49] [Server thread/TRACE] [FML]: Mod sorting completed successfully
[17:25:49] [Server thread/DEBUG] [FML]: Mod sorting data
[17:25:49] [Server thread/DEBUG] [FML]: No user mods found to sort
[17:25:49] [Server thread/DEBUG] [FML]: Loading @Config anotation data
[17:25:49] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod minecraft
[17:25:49] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod minecraft
[17:25:49] [Server thread/DEBUG] [FML]: Bar Step: Construction - Minecraft took 0.003s
[17:25:49] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod mcp
[17:25:49] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod mcp
[17:25:49] [Server thread/DEBUG] [FML]: Bar Step: Construction - Minecraft Coder Pack took 0.001s
[17:25:49] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod mohist
[17:25:49] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod mohist
[17:25:49] [Server thread/DEBUG] [FML]: Bar Step: Construction - Mohist took 0.000s
[17:25:49] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod FML
[17:25:49] [Server thread/TRACE] [FML]: Mod FML is using network checker : Invoking method checkModLists
[17:25:49] [Server thread/TRACE] [FML]: Testing mod FML to verify it accepts its own version in a remote connection
[17:25:49] [Server thread/TRACE] [FML]: The mod FML accepts its own version (**.**.**.**)
[17:25:49] [Server thread/INFO] [FML]: Forge Mod Loader has successfully loaded [minecraft, mcp, mohist, FML, forge] modCLIENT
[17:25:49] [Server thread/INFO] [FML]: Forge Mod Loader has successfully loaded [minecraft, mcp, mohist, FML, forge] modSERVER
[17:25:49] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod FML
[17:25:49] [Server thread/DEBUG] [FML]: Bar Step: Construction - Forge Mod Loader took 0.140s
[17:25:49] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod forge
[17:25:49] [Server thread/DEBUG] [forge]: Loading Vanilla annotations: null
[17:25:49] [Server thread/DEBUG] [forge]: Preloading CrashReport Classes
[17:25:49] [Server thread/DEBUG] [forge]: 	net/minecraftforge/common/util/TextTable
[17:25:49] [Server thread/DEBUG] [forge]: 	net/minecraftforge/common/util/TextTable$Alignment
[17:25:49] [Server thread/DEBUG] [forge]: 	net/minecraftforge/common/util/TextTable$Column
[17:25:49] [Server thread/DEBUG] [forge]: 	net/minecraftforge/common/util/TextTable$Row
[17:25:49] [Server thread/DEBUG] [forge]: 	net/minecraftforge/fml/client/SplashProgress$1
[17:25:49] [Server thread/DEBUG] [forge]: 	net/minecraftforge/fml/common/FMLCommonHandler$1
[17:25:49] [Server thread/DEBUG] [forge]: 	net/minecraftforge/fml/common/Loader$1
[17:25:49] [Server thread/TRACE] [FML]: Mod forge is using network checker : No network checking performed
[17:25:49] [Server thread/TRACE] [FML]: Testing mod forge to verify it accepts its own version in a remote connection
[17:25:49] [Server thread/TRACE] [FML]: The mod forge accepts its own version (14.23.5.2860)
[17:25:49] [Server thread/DEBUG] [FML]: Attempting to inject @Config classes into forge for type INSTANCE
[17:25:49] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod forge
[17:25:49] [Server thread/DEBUG] [FML]: Bar Step: Construction - Minecraft Forge took 0.016s
[17:25:49] [Server thread/DEBUG] [FML]: Bar Finished: Construction took 0.160s
[17:25:49] [Server thread/DEBUG] [FML]: Mod signature data
[17:25:49] [Server thread/DEBUG] [FML]:  	Valid Signatures:
[17:25:49] [Server thread/DEBUG] [FML]:  	 Missing Signatures:
[17:25:49] [Server thread/DEBUG] [FML]: 		minecraft	(Minecraft	1.12.2)	minecraft.jar
[17:25:49] [Server thread/DEBUG] [FML]: 		mcp	(Minecraft Coder Pack	9.42)	minecraft.jar
[17:25:49] [Server thread/DEBUG] [FML]: 		mohist	(Mohist	1.12.2-304)	mohist.jar
[17:25:49] [Server thread/DEBUG] [FML]: 		FML	(Forge Mod Loader	**.**.**.**)	mohist.jar
[17:25:49] [Server thread/DEBUG] [FML]: 		forge	(Minecraft Forge	14.23.5.2860)	mohist.jar
[17:25:49] [Server thread/INFO] [FML]: Processing Object Holder annotations
[17:25:49] [Server thread/INFO] [FML]: Found 1168 ObjectHolder annotations
[17:25:49] [Server thread/INFO] [FML]: Identifying ItemStackHolder annotations
[17:25:49] [Server thread/INFO] [FML]: Found 0 ItemStackHolder annotations
[17:25:49] [Server thread/TRACE] [FML]: Sending event FMLPreInitializationEvent to mod minecraft
[17:25:49] [Server thread/TRACE] [FML]: Sent event FMLPreInitializationEvent to mod minecraft
[17:25:49] [Server thread/DEBUG] [FML]: Bar Step: PreInitialization - Minecraft took 0.000s
[17:25:49] [Server thread/TRACE] [FML]: Sending event FMLPreInitializationEvent to mod mcp
[17:25:49] [Server thread/TRACE] [FML]: Sent event FMLPreInitializationEvent to mod mcp
[17:25:49] [Server thread/DEBUG] [FML]: Bar Step: PreInitialization - Minecraft Coder Pack took 0.000s
[17:25:49] [Server thread/TRACE] [FML]: Sending event FMLPreInitializationEvent to mod mohist
[17:25:49] [Server thread/TRACE] [FML]: Sent event FMLPreInitializationEvent to mod mohist
[17:25:49] [Server thread/DEBUG] [FML]: Bar Step: PreInitialization - Mohist took 0.000s
[17:25:49] [Server thread/TRACE] [FML]: Sending event FMLPreInitializationEvent to mod FML
[17:25:49] [Server thread/TRACE] [FML]: Sent event FMLPreInitializationEvent to mod FML
[17:25:49] [Server thread/DEBUG] [FML]: Bar Step: PreInitialization - Forge Mod Loader took 0.000s
[17:25:49] [Server thread/TRACE] [FML]: Sending event FMLPreInitializationEvent to mod forge
[17:25:49] [Server thread/INFO] [FML]: Configured a dormant chunk cache size of 0
[17:25:49] [Server thread/TRACE] [FML]: Sent event FMLPreInitializationEvent to mod forge
[17:25:49] [Server thread/DEBUG] [FML]: Bar Step: PreInitialization - Minecraft Forge took 0.037s
[17:25:49] [Server thread/DEBUG] [FML]: Bar Finished: PreInitialization took 0.038s
[17:25:49] [Server thread/INFO] [FML]: Applying holder lookups
[17:25:49] [Server thread/INFO] [FML]: Holder lookups applied
[17:25:49] [Server thread/INFO] [FML]: Applying holder lookups
[17:25:49] [Server thread/INFO] [FML]: Holder lookups applied
[17:25:49] [Server thread/INFO] [FML]: Applying holder lookups
[17:25:49] [Server thread/INFO] [FML]: Holder lookups applied
[17:25:49] [Server thread/INFO] [FML]: Applying holder lookups
[17:25:49] [Server thread/INFO] [FML]: Holder lookups applied
[17:25:49] [Server thread/INFO] [FML]: Injecting itemstacks
[17:25:49] [Server thread/INFO] [FML]: Injecting injection complete
[17:25:49] [Server thread/INFO] [FML]: Replacing net.minecraftforge.server.permission.DefaultPermissionHandler with com.mohistmc.forge.BukkitPermissionsHandler
[17:25:49] [Server thread/INFO] [FML]: Registered Forge API Permission Handler(Bukkit)
[17:25:49] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Loading configuration file(server.properties)
[17:25:49] [Server thread/INFO] [Mohist]: Default gamemode type:SURVIVAL
[17:25:49] [Server thread/INFO] [Mohist]: This server is runningMohistversion git-Mohist-1.12.2-304 (MC: 1.12.2)(Implementing API version1.12.2-R0.1-SNAPSHOT)
[17:25:49] [Server thread/INFO] [Spigot]: Server Player Sample Count:12
[17:25:49] [Server thread/INFO] [Mohist]: Using 4 threads for Netty based IO
[17:25:50] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Generating keypair
[17:25:50] [Server thread/INFO] [Mohist]: Starting Minecraft server on 0.0.0.0:17650
[17:25:50] [Server thread/INFO] [net.minecraft.network.NetworkSystem]: Using epoll channel type
[17:25:50] [Server thread/INFO] [FML]: Applying holder lookups
[17:25:50] [Server thread/INFO] [FML]: Holder lookups applied
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLInitializationEvent to mod minecraft
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLInitializationEvent to mod minecraft
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: Initialization - Minecraft took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLInitializationEvent to mod mcp
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLInitializationEvent to mod mcp
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: Initialization - Minecraft Coder Pack took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLInitializationEvent to mod mohist
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLInitializationEvent to mod mohist
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: Initialization - Mohist took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLInitializationEvent to mod FML
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLInitializationEvent to mod FML
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: Initialization - Forge Mod Loader took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLInitializationEvent to mod forge
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLInitializationEvent to mod forge
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: Initialization - Minecraft Forge took 0.000s
[17:25:50] [Server thread/DEBUG] [FML]: Bar Finished: Initialization took 0.002s
[17:25:50] [Server thread/TRACE] [FML]: Attempting to deliver 0 IMC messages to mod minecraft
[17:25:50] [Server thread/TRACE] [FML]: Sending event IMCEvent to mod minecraft
[17:25:50] [Server thread/TRACE] [FML]: Sent event IMCEvent to mod minecraft
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: InterModComms$IMC - Minecraft took 0.002s
[17:25:50] [Server thread/TRACE] [FML]: Attempting to deliver 0 IMC messages to mod mcp
[17:25:50] [Server thread/TRACE] [FML]: Sending event IMCEvent to mod mcp
[17:25:50] [Server thread/TRACE] [FML]: Sent event IMCEvent to mod mcp
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: InterModComms$IMC - Minecraft Coder Pack took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Attempting to deliver 0 IMC messages to mod mohist
[17:25:50] [Server thread/TRACE] [FML]: Sending event IMCEvent to mod mohist
[17:25:50] [Server thread/TRACE] [FML]: Sent event IMCEvent to mod mohist
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: InterModComms$IMC - Mohist took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Attempting to deliver 0 IMC messages to mod FML
[17:25:50] [Server thread/TRACE] [FML]: Sending event IMCEvent to mod FML
[17:25:50] [Server thread/TRACE] [FML]: Sent event IMCEvent to mod FML
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: InterModComms$IMC - Forge Mod Loader took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Attempting to deliver 0 IMC messages to mod forge
[17:25:50] [Server thread/TRACE] [FML]: Sending event IMCEvent to mod forge
[17:25:50] [Server thread/TRACE] [FML]: Sent event IMCEvent to mod forge
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: InterModComms$IMC - Minecraft Forge took 0.000s
[17:25:50] [Server thread/DEBUG] [FML]: Bar Finished: InterModComms$IMC took 0.003s
[17:25:50] [Server thread/INFO] [FML]: Injecting itemstacks
[17:25:50] [Server thread/INFO] [FML]: Injecting injection complete
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLPostInitializationEvent to mod minecraft
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLPostInitializationEvent to mod minecraft
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: PostInitialization - Minecraft took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLPostInitializationEvent to mod mcp
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLPostInitializationEvent to mod mcp
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: PostInitialization - Minecraft Coder Pack took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLPostInitializationEvent to mod mohist
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLPostInitializationEvent to mod mohist
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: PostInitialization - Mohist took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLPostInitializationEvent to mod FML
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLPostInitializationEvent to mod FML
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: PostInitialization - Forge Mod Loader took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLPostInitializationEvent to mod forge
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLPostInitializationEvent to mod forge
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: PostInitialization - Minecraft Forge took 0.008s
[17:25:50] [Server thread/DEBUG] [FML]: Bar Finished: PostInitialization took 0.009s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLLoadCompleteEvent to mod minecraft
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLLoadCompleteEvent to mod minecraft
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: LoadComplete - Minecraft took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLLoadCompleteEvent to mod mcp
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLLoadCompleteEvent to mod mcp
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: LoadComplete - Minecraft Coder Pack took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLLoadCompleteEvent to mod mohist
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLLoadCompleteEvent to mod mohist
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: LoadComplete - Mohist took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLLoadCompleteEvent to mod FML
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLLoadCompleteEvent to mod FML
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: LoadComplete - Forge Mod Loader took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLLoadCompleteEvent to mod forge
[17:25:50] [Server thread/DEBUG] [FML]: Forge RecipeSorter Baking:
[17:25:50] [Server thread/DEBUG] [FML]:   16: RecipeEntry("Before", UNKNOWN, )
[17:25:50] [Server thread/DEBUG] [FML]:   15: RecipeEntry("minecraft:shaped", SHAPED, net.minecraft.item.crafting.ShapedRecipes) Before: minecraft:shapeless
[17:25:50] [Server thread/DEBUG] [FML]:   14: RecipeEntry("forge:shapedore", SHAPED, net.minecraftforge.oredict.ShapedOreRecipe) Before: minecraft:shapeless After: minecraft:shaped
[17:25:50] [Server thread/DEBUG] [FML]:   13: RecipeEntry("minecraft:mapextending", SHAPED, net.minecraft.item.crafting.RecipesMapExtending) Before: minecraft:shapeless After: minecraft:shaped
[17:25:50] [Server thread/DEBUG] [FML]:   12: RecipeEntry("minecraft:shapeless", SHAPELESS, net.minecraft.item.crafting.ShapelessRecipes) After: minecraft:shaped
[17:25:50] [Server thread/DEBUG] [FML]:   11: RecipeEntry("minecraft:repair", SHAPELESS, net.minecraft.item.crafting.RecipeRepairItem) After: minecraft:shapeless
[17:25:50] [Server thread/DEBUG] [FML]:   10: RecipeEntry("minecraft:shield_deco", SHAPELESS, net.minecraft.item.crafting.ShieldRecipes$Decoration) After: minecraft:shapeless
[17:25:50] [Server thread/DEBUG] [FML]:   9: RecipeEntry("minecraft:armordyes", SHAPELESS, net.minecraft.item.crafting.RecipesArmorDyes) After: minecraft:shapeless
[17:25:50] [Server thread/DEBUG] [FML]:   8: RecipeEntry("minecraft:fireworks", SHAPELESS, net.minecraft.item.crafting.RecipeFireworks) After: minecraft:shapeless
[17:25:50] [Server thread/DEBUG] [FML]:   7: RecipeEntry("minecraft:pattern_dupe", SHAPELESS, net.minecraft.item.crafting.RecipesBanners$RecipeDuplicatePattern) After: minecraft:shapeless
[17:25:50] [Server thread/DEBUG] [FML]:   6: RecipeEntry("minecraft:tippedarrow", SHAPELESS, net.minecraft.item.crafting.RecipeTippedArrow) After: minecraft:shapeless
[17:25:50] [Server thread/DEBUG] [FML]:   5: RecipeEntry("minecraft:mapcloning", SHAPELESS, net.minecraft.item.crafting.RecipesMapCloning) After: minecraft:shapeless
[17:25:50] [Server thread/DEBUG] [FML]:   4: RecipeEntry("forge:shapelessore", SHAPELESS, net.minecraftforge.oredict.ShapelessOreRecipe) After: minecraft:shapeless
[17:25:50] [Server thread/DEBUG] [FML]:   3: RecipeEntry("minecraft:pattern_add", SHAPELESS, net.minecraft.item.crafting.RecipesBanners$RecipeAddPattern) After: minecraft:shapeless
[17:25:50] [Server thread/DEBUG] [FML]:   2: RecipeEntry("minecraft:bookcloning", SHAPELESS, net.minecraft.item.crafting.RecipeBookCloning) After: minecraft:shapeless
[17:25:50] [Server thread/DEBUG] [FML]:   1: RecipeEntry("After", UNKNOWN, )
[17:25:50] [Server thread/DEBUG] [FML]: Sorting recipes
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLLoadCompleteEvent to mod forge
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: LoadComplete - Minecraft Forge took 0.006s
[17:25:50] [Server thread/DEBUG] [FML]: Bar Finished: LoadComplete took 0.007s
[17:25:50] [Server thread/DEBUG] [FML]: Freezing registries
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLModIdMappingEvent to mod minecraft
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLModIdMappingEvent to mod minecraft
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ModIdMapping - Minecraft took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLModIdMappingEvent to mod mcp
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLModIdMappingEvent to mod mcp
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ModIdMapping - Minecraft Coder Pack took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLModIdMappingEvent to mod mohist
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLModIdMappingEvent to mod mohist
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ModIdMapping - Mohist took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLModIdMappingEvent to mod FML
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLModIdMappingEvent to mod FML
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ModIdMapping - Forge Mod Loader took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLModIdMappingEvent to mod forge
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLModIdMappingEvent to mod forge
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ModIdMapping - Minecraft Forge took 0.026s
[17:25:50] [Server thread/DEBUG] [FML]: Bar Finished: ModIdMapping took 0.027s
[17:25:50] [Server thread/DEBUG] [FML]: All registries frozen
[17:25:50] [Server thread/INFO] [FML]: Forge Mod Loader has successfully loaded 5 mods
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLServerAboutToStartEvent to mod minecraft
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLServerAboutToStartEvent to mod minecraft
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ServerAboutToStart - Minecraft took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLServerAboutToStartEvent to mod mcp
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLServerAboutToStartEvent to mod mcp
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ServerAboutToStart - Minecraft Coder Pack took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLServerAboutToStartEvent to mod mohist
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLServerAboutToStartEvent to mod mohist
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ServerAboutToStart - Mohist took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLServerAboutToStartEvent to mod FML
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLServerAboutToStartEvent to mod FML
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ServerAboutToStart - Forge Mod Loader took 0.000s
[17:25:50] [Server thread/TRACE] [FML]: Sending event FMLServerAboutToStartEvent to mod forge
[17:25:50] [Server thread/TRACE] [FML]: Sent event FMLServerAboutToStartEvent to mod forge
[17:25:50] [Server thread/DEBUG] [FML]: Bar Step: ServerAboutToStart - Minecraft Forge took 0.000s
[17:25:50] [Server thread/DEBUG] [FML]: Bar Finished: ServerAboutToStart took 0.001s
[17:25:50] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: "Preparing level "world""
[17:25:51] [Server thread/INFO] [FML]: Loading dimension 0 (world)
[17:25:51] [Server thread/INFO] [FML]: Loading dimension -1 (DIM-1)
[17:25:51] [Server thread/INFO] [FML]: Loading dimension 1 (DIM1)
[17:25:51] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing start region for level 0 (Seed:-1911769020504177725 )
[17:25:52] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 6%
[17:25:53] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 13%
[17:25:54] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 21%
[17:25:55] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 29%
[17:25:56] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 37%
[17:25:57] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 43%
[17:25:58] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 52%
[17:25:59] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 60%
[17:26:00] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 70%
[17:26:01] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 82%
[17:26:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Preparing spawn area: 93%
[17:26:03] [Server thread/DEBUG] [Mohist]: Server permissions file permissions.yml is empty, ignoring it
[17:26:03] [Server thread/INFO] [Mohist]: Done (13.203s)! For help, type "help" or "?"
[17:26:03] [Server thread/INFO] [Mohist]: Starting Minecraft server on 0.0.0.0:17650
[17:26:03] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting GS4 status listener
[17:26:03] [Query Listener #1/INFO] [net.minecraft.server.MinecraftServer]: Query running on 0.0.0.0:9898
[17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartingEvent to mod minecraft
[17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartingEvent to mod minecraft
[17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarting - Minecraft took 0.000s
[17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartingEvent to mod mcp
[17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartingEvent to mod mcp
[17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarting - Minecraft Coder Pack took 0.001s
[17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartingEvent to mod mohist
[17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartingEvent to mod mohist
[17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarting - Mohist took 0.000s
[17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartingEvent to mod FML
[17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartingEvent to mod FML
[17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarting - Forge Mod Loader took 0.000s
[17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartingEvent to mod forge
[17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartingEvent to mod forge
[17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarting - Minecraft Forge took 0.015s
[17:26:03] [Server thread/DEBUG] [FML]: Bar Finished: ServerStarting took 0.017s
[17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartedEvent to mod minecraft
[17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartedEvent to mod minecraft
[17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarted - Minecraft took 0.000s
[17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartedEvent to mod mcp
[17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartedEvent to mod mcp
[17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarted - Minecraft Coder Pack took 0.000s
[17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartedEvent to mod mohist
[17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartedEvent to mod mohist
[17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarted - Mohist took 0.000s
[17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartedEvent to mod FML
[17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartedEvent to mod FML
[17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarted - Forge Mod Loader took 0.000s
[17:26:03] [Server thread/TRACE] [FML]: Sending event FMLServerStartedEvent to mod forge
[17:26:03] [Server thread/TRACE] [FML]: Sent event FMLServerStartedEvent to mod forge
[17:26:03] [Server thread/DEBUG] [FML]: Bar Step: ServerStarted - Minecraft Forge took 0.000s
[17:26:03] [Server thread/DEBUG] [FML]: Bar Finished: ServerStarted took 0.001s
[17:26:03] [Server thread/INFO] [Mohist]: Timings Reset
[17:31:04] [Server thread/DEBUG] [FML]: Gathering id map for writing to world save world
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
                                            [text:protected] => [17:25:46] [Server thread/INFO] [Mohist]: Starting minecraft server version 1.12.2
                                            [number:protected] => 27
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [17:25:46] [Server thread/INFO] [Mohist]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.12.2
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Mohist\MohistForgeVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [17:25:46] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2860 `Initialized
                                            [number:protected] => 28
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [17:25:46] [Server thread/INFO] [FML]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Forge version
                    [value:protected] => 14.23.5.2860
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Information\Mohist\MohistVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [17:25:49] [Server thread/INFO] [Mohist]: This server is runningMohistversion git-Mohist-1.12.2-304 (MC: 1.12.2)(Implementing API version1.12.2-R0.1-SNAPSHOT)
                                            [number:protected] => 183
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [17:25:49] [Server thread/INFO] [Mohist]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Mohist version
                    [value:protected] => 304
                )

        )

    [iterator:protected] => 2
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.12.2", $analysis[0]->getMessage());

        $this->assertEquals("Forge version: 14.23.5.2860", $analysis[1]->getMessage());

        $this->assertEquals("Mohist version: 304", $analysis[2]->getMessage());

    }
}