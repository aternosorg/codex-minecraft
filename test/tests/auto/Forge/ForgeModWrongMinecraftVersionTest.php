<?php

class ForgeModWrongMinecraftVersionTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-mod-wrong-minecraft-version.log");
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
                    [prefix:protected] => [13:41:24] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:24] [main/DEBUG] [FML/]: Injecting tracing printstreams for STDOUT/STDERR.
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/INFO] [FML/]: Forge Mod Loader version 12.18.3.2511 for Minecraft 1.10.2 loading
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/INFO] [FML/]: Java is Java HotSpot(TM) 64-Bit Server VM, version 1.8.0_202, running on Linux:amd64:4.4.0-141-generic, installed at /aternos/bin/jdk1.8.0_202/jre
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Java classpath at launch is forge.jar
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Java library path at launch is /usr/java/packages/lib/amd64:/usr/lib64:/lib64:/lib:/usr/lib
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Enabling runtime deobfuscation
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Instantiating coremod class FMLCorePlugin
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Added access transformer class net.minecraftforge.fml.common.asm.transformers.AccessTransformer to enqueued access transformers
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Enqueued coremod FMLCorePlugin
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Instantiating coremod class FMLForgePlugin
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Enqueued coremod FMLForgePlugin
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: All fundamental core mods are successfully located
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Attempting to load commandline specified mods, relative to /aternos/server/.
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Discovering coremods
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Examining for coremod candidacy BiomesOPlenty-1.10.2-5.0.0.2290-universal.jar
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Not found coremod data in BiomesOPlenty-1.10.2-5.0.0.2290-universal.jar
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Examining for coremod candidacy CustomMobSpawner 3.10.1.jar
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Not found coremod data in CustomMobSpawner 3.10.1.jar
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Examining for coremod candidacy Decocraft-2.5.2_1.10.2.jar
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Not found coremod data in Decocraft-2.5.2_1.10.2.jar
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Examining for coremod candidacy DrZhark\'s Mo\'Creatures Mod-10.0.6.jar
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Not found coremod data in DrZhark\'s Mo\'Creatures Mod-10.0.6.jar
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Examining for coremod candidacy forgeessentials-1.10.2-10.3.1380-server.jar
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/INFO] [FML/]: Loading tweaker com.forgeessentials.core.preloader.FELaunchHandler from forgeessentials-1.10.2-10.3.1380-server.jar
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Examining for coremod candidacy journeymap-1.12.2-5.5.4.jar
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Not found coremod data in journeymap-1.12.2-5.5.4.jar
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Examining for coremod candidacy JurassiCraft-2.1.3-Fix.jar
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Not found coremod data in JurassiCraft-2.1.3-Fix.jar
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Examining for coremod candidacy llibrary-1.7.7-1.10.2.jar
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/TRACE] [FML/]: Found FMLCorePluginContainsFMLMod marker in llibrary-1.7.7-1.10.2.jar, it will be examined later for regular @Mod instances
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:25] [main/DEBUG] [FML/]: Instantiating coremod class LLibraryPlugin
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/TRACE] [FML/]: coremod named llibrary is loading
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/DEBUG] [FML/]: The coremod net.ilexiconn.llibrary.server.core.plugin.LLibraryPlugin requested minecraft version 1.10.2 and minecraft is 1.10.2. It will be loaded.
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/DEBUG] [FML/]: Enqueued coremod llibrary
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/DEBUG] [FML/]: Examining for coremod candidacy llibrary-core-1.0.11-1.12.2.jar
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/TRACE] [FML/]: Adding llibrary-core-1.0.11-1.12.2.jar to the list of known coremods, it will not be examined again
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/DEBUG] [FML/]: Instantiating coremod class LLibraryPlugin
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/TRACE] [FML/]: coremod named llibrary is loading
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/DEBUG] [FML/]: The coremod net.ilexiconn.llibrary.server.core.plugin.LLibraryPlugin requested minecraft version 1.10.2 and minecraft is 1.10.2. It will be loaded.
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/DEBUG] [FML/]: Enqueued coremod llibrary
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/INFO] [LaunchWrapper/]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/INFO] [LaunchWrapper/]: Loading tweak class name com.forgeessentials.core.preloader.FELaunchHandler
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/INFO] [LaunchWrapper/]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/DEBUG] [FML/]: Injecting coremod FMLCorePlugin {net.minecraftforge.fml.relauncher.FMLCorePlugin} class transformers
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.fml.common.asm.transformers.BlamingTransformer
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.fml.common.asm.transformers.SideTransformer
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.fml.common.asm.transformers.EventSubscriptionTransformer
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.fml.common.asm.transformers.EventSubscriberTransformer
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/DEBUG] [FML/]: Running coremod plugin for FMLCorePlugin {net.minecraftforge.fml.relauncher.FMLCorePlugin}
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:26] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:26] [main/DEBUG] [FML/]: Running coremod plugin FMLCorePlugin
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:29] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:29] [main/DEBUG] [FML/]: Read 915 binary patches
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:30] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:30] [main/DEBUG] [FML/]: Loading deobfuscation resource /deobfuscation_data-1.10.2.lzma with 32371 records
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [FML/]: Found valid fingerprint for Minecraft Forge. Certificate fingerprint e3c3d50c7c986df74c645c0ac54639741c90a557
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [FML/]: Coremod plugin class FMLCorePlugin run successfully
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [FML/]: Injecting coremod FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin} class transformers
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [FML/]: Running coremod plugin for FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin}
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [FML/]: Running coremod plugin FMLForgePlugin
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [FML/]: Coremod plugin class FMLForgePlugin run successfully
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [LaunchWrapper/]: Calling tweak class com.forgeessentials.core.preloader.FELaunchHandler
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [mixin/]: SpongePowered MIXIN Subsystem Version=0.6.10 Source=file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar Env=SERVER
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [mixin/]: Adding new mixin transformer proxy #1
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [mixin/]: Initialising Mixin Platform Manager
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [mixin/]: Mixin platform: primary container is file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [mixin/]: Adding mixin platform agents for container file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentFML for file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [mixin/]: ForceLoadAsMod was specified for forgeessentials-1.10.2-10.3.1380-server.jar, attempting force-load
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [mixin/]: Adding forgeessentials-1.10.2-10.3.1380-server.jar to reparseable coremod collection
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentDefault for file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/forge.jar for mixin tweaker
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/mods/llibrary-1.7.7-1.10.2.jar for mixin tweaker
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/mods/1.10.2/llibrary-core-1.0.11-1.12.2.jar for mixin tweaker
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [mixin/]: Scanning asmgen:/ for mixin tweaker
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentFML:file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar]
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar]
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [mixin/]: Setting mixin compatibility level: JAVA_8
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/WARN] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/WARN] [mixin/]: MixinEnvironment::setCompatibilityLevel is deprecated and will be removed. Set level via config instead!
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [mixin/]: Compatibility level set to JAVA_8
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [mixin/]: Registering mixin config: mixins.forgeessentials.json
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/WARN] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/WARN] [mixin/]: MixinEnvironment::setCompatibilityLevel is deprecated and will be removed. Set level via config instead!
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/cdi-api-1.1.jar to classpath
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/jsr250-api-1.0.jar to classpath
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/mysql-connector-java-5.1.22.jar to classpath
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/javassist-3.20.0-GA.jar to classpath
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/classmate-1.3.0.jar to classpath
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/dom4j-1.6.1.jar to classpath
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/antlr-2.7.7.jar to classpath
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/geronimo-jta_1.1_spec-1.1.1.jar to classpath
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/jboss-interceptors-api_1.1_spec-1.0.0.Beta1.jar to classpath
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/javax.inject-1.jar to classpath
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/pircbotx-2.0.1.jar to classpath
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/jandex-2.0.0.Final.jar to classpath
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/hibernate-jpa-2.1-api-1.0.0.Final.jar to classpath
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/el-api-2.2.jar to classpath
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/hibernate-commons-annotations-5.0.1.Final.jar to classpath
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/hibernate-core-5.2.2.Final.jar to classpath
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/h2-1.3.175.jar to classpath
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/jboss-logging-3.3.0.Final.jar to classpath
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/slf4j-api-1.7.5.jar to classpath
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ASM_ClassInjector/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ASM_ClassInjector/]: Scanning injector class com.forgeessentials.core.preloader.injections.MixinEntity
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ASM_ClassInjector/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ASM_ClassInjector/]: Found injector method attackEntityFrom_event =&gt; func_70097_a(Lnet/minecraft/util/DamageSource;F)Z
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ASM_ClassInjector/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ASM_ClassInjector/]: Scanning injector class com.forgeessentials.core.preloader.injections.MixinBlock
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [ASM_ClassInjector/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [ASM_ClassInjector/]: Found injector method onFallenUpon_event =&gt; func_149746_a(Lnet/minecraft/world/World;Lnet/minecraft/util/BlockPos;Lnet/minecraft/entity/Entity;F)V
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [FML/]: Loaded 195 rules from AccessTransformer config file forge_at.cfg
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [FML/]: Loaded 1 rules from AccessTransformer mod jar file /aternos/server/mods/journeymap-1.12.2-5.5.4.jar!META-INF/journeymap_at.cfg
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [FML/]: Loaded 5 rules from AccessTransformer mod jar file /aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar!META-INF/forgeessentials_at.cfg
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [FML/]: Loaded 9 rules from AccessTransformer mod jar file /aternos/server/mods/llibrary-1.7.7-1.10.2.jar!META-INF/llibrary_at.cfg
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [FML/]: Loaded 9 rules from AccessTransformer mod jar file /aternos/server/mods/BiomesOPlenty-1.10.2-5.0.0.2290-universal.jar!META-INF/biomesoplenty_at.cfg
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [FML/]: Loaded 1 rules from AccessTransformer mod jar file /aternos/server/mods/Decocraft-2.5.2_1.10.2.jar!META-INF/decocraft_at.cfg
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [mixin/]: Adding new mixin transformer proxy #2
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:32] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:32] [main/DEBUG] [FML/]: Validating minecraft
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:33] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:33] [main/DEBUG] [mixin/]: Preparing mixins for MixinEnvironment[INIT]
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:34] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:34] [main/DEBUG] [FML/]: Minecraft validated, launching...
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:34] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:34] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:34] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:34] [main/DEBUG] [FML/]: Injecting coremod llibrary {net.ilexiconn.llibrary.server.core.plugin.LLibraryPlugin} class transformers
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:34] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:34] [main/TRACE] [FML/]: Registering transformer net.ilexiconn.llibrary.server.core.plugin.LLibraryTransformer
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:34] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:34] [main/TRACE] [FML/]: Registering transformer net.ilexiconn.llibrary.server.core.patcher.LLibraryRuntimePatcher
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/INFO] [FML/]: Found runtime patcher net.ilexiconn.llibrary.server.core.patcher.LLibraryRuntimePatcher
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/DEBUG] [FML/]: Running coremod plugin for llibrary {net.ilexiconn.llibrary.server.core.plugin.LLibraryPlugin}
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/DEBUG] [FML/]: Running coremod plugin llibrary
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/DEBUG] [FML/]: Coremod plugin class LLibraryPlugin run successfully
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/DEBUG] [FML/]: Injecting coremod llibrary {net.ilexiconn.llibrary.server.core.plugin.LLibraryPlugin} class transformers
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/TRACE] [FML/]: Registering transformer net.ilexiconn.llibrary.server.core.plugin.LLibraryTransformer
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/TRACE] [FML/]: Registering transformer net.ilexiconn.llibrary.server.core.patcher.LLibraryRuntimePatcher
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/DEBUG] [FML/]: Running coremod plugin for llibrary {net.ilexiconn.llibrary.server.core.plugin.LLibraryPlugin}
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/DEBUG] [FML/]: Running coremod plugin llibrary
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/DEBUG] [FML/]: Coremod plugin class LLibraryPlugin run successfully
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/INFO] [LaunchWrapper/]: Loading tweak class name net.minecraftforge.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/INFO] [LaunchWrapper/]: Loading tweak class name org.spongepowered.asm.launch.MixinTweaker
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/INFO] [LaunchWrapper/]: Loading tweak class name org.spongepowered.asm.mixin.MixinEnvironment$EnvironmentStateTweaker
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/INFO] [LaunchWrapper/]: Calling tweak class org.spongepowered.asm.launch.MixinTweaker
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentFML:file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar]
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar]
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/DEBUG] [mixin/]: Setting mixin compatibility level: JAVA_8
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/WARN] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/WARN] [mixin/]: MixinEnvironment::setCompatibilityLevel is deprecated and will be removed. Set level via config instead!
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/DEBUG] [mixin/]: Registering mixin config: mixins.forgeessentials.json
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/DEBUG] [mixin/]: Processing launch tasks for PlatformAgent[MixinPlatformAgentFML:file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar]
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:35] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:35] [main/DEBUG] [mixin/]: Creating FML remapper adapter: org.spongepowered.asm.bridge.RemapperAdapterFML
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/INFO] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/INFO] [mixin/]: Initialised Mixin FML Remapper Adapter with net.minecraftforge.fml.common.asm.transformers.deobf.FMLDeobfuscatingRemapper@5149f008
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Processing launch tasks for PlatformAgent[MixinPlatformAgentDefault:file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar]
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/forge.jar for mixin tweaker
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/mods/llibrary-1.7.7-1.10.2.jar for mixin tweaker
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/mods/1.10.2/llibrary-core-1.0.11-1.12.2.jar for mixin tweaker
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning asmgen:/ for mixin tweaker
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/cdi-api-1.1.jar for mixin tweaker
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/jsr250-api-1.0.jar for mixin tweaker
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/mysql-connector-java-5.1.22.jar for mixin tweaker
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/javassist-3.20.0-GA.jar for mixin tweaker
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/classmate-1.3.0.jar for mixin tweaker
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/dom4j-1.6.1.jar for mixin tweaker
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/antlr-2.7.7.jar for mixin tweaker
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/geronimo-jta_1.1_spec-1.1.1.jar for mixin tweaker
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/jboss-interceptors-api_1.1_spec-1.0.0.Beta1.jar for mixin tweaker
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/javax.inject-1.jar for mixin tweaker
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/pircbotx-2.0.1.jar for mixin tweaker
                                    [number:protected] => 165
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/jandex-2.0.0.Final.jar for mixin tweaker
                                    [number:protected] => 166
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/hibernate-jpa-2.1-api-1.0.0.Final.jar for mixin tweaker
                                    [number:protected] => 167
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/el-api-2.2.jar for mixin tweaker
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/hibernate-commons-annotations-5.0.1.Final.jar for mixin tweaker
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/hibernate-core-5.2.2.Final.jar for mixin tweaker
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/h2-1.3.175.jar for mixin tweaker
                                    [number:protected] => 171
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/jboss-logging-3.3.0.Final.jar for mixin tweaker
                                    [number:protected] => 172
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/slf4j-api-1.7.5.jar for mixin tweaker
                                    [number:protected] => 173
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: injectIntoClassLoader running with 1 agents
                                    [number:protected] => 174
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Processing injectIntoClassLoader() for PlatformAgent[MixinPlatformAgentFML:file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar]
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Processing injectIntoClassLoader() for PlatformAgent[MixinPlatformAgentDefault:file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar]
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/INFO] [LaunchWrapper/]: Calling tweak class org.spongepowered.asm.mixin.MixinEnvironment$EnvironmentStateTweaker
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/WARN] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/WARN] [LaunchWrapper/]: Tweak class name org.spongepowered.asm.mixin.MixinEnvironment$EnvironmentStateTweaker has already been visited -- skipping
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Adding new mixin transformer proxy #3
                                    [number:protected] => 179
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [179] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/INFO] [FML/]: Patching class net/minecraft/server/MinecraftServer
                                    [number:protected] => 180
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [180] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/INFO] [FML/]: Patching method run()V
                                    [number:protected] => 181
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [181] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/INFO] [FML/]: Patching class net/minecraft/server/MinecraftServer
                                    [number:protected] => 182
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [182] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/INFO] [FML/]: Patching method run()V
                                    [number:protected] => 183
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [183] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Preparing mixins for MixinEnvironment[DEFAULT]
                                    [number:protected] => 184
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [184] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Selecting config mixins.forgeessentials.json
                                    [number:protected] => 185
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [185] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Preparing mixins.forgeessentials.json (10)
                                    [number:protected] => 186
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [186] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Rebuilding transformer delegation list:
                                    [number:protected] => 187
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [187] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Adding: net.minecraftforge.fml.common.asm.transformers.PatchingTransformer
                                    [number:protected] => 188
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [188] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Adding: $wrapper.net.minecraftforge.fml.common.asm.transformers.BlamingTransformer
                                    [number:protected] => 189
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [189] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Adding: $wrapper.net.minecraftforge.fml.common.asm.transformers.SideTransformer
                                    [number:protected] => 190
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [190] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Excluding: $wrapper.net.minecraftforge.fml.common.asm.transformers.EventSubscriptionTransformer
                                    [number:protected] => 191
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [191] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Adding: $wrapper.net.minecraftforge.fml.common.asm.transformers.EventSubscriberTransformer
                                    [number:protected] => 192
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [192] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Excluding: org.spongepowered.asm.mixin.transformer.MixinTransformer$Proxy
                                    [number:protected] => 193
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [193] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Adding: com.forgeessentials.core.preloader.EventTransformer
                                    [number:protected] => 194
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [194] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Adding: net.minecraftforge.fml.common.asm.transformers.DeobfuscationTransformer
                                    [number:protected] => 195
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [195] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Adding: net.minecraftforge.fml.common.asm.transformers.AccessTransformer
                                    [number:protected] => 196
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [196] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Adding: net.minecraftforge.fml.common.asm.transformers.ModAccessTransformer
                                    [number:protected] => 197
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [197] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Adding: net.minecraftforge.fml.common.asm.transformers.ItemStackTransformer
                                    [number:protected] => 198
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [198] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Excluding: org.spongepowered.asm.mixin.transformer.MixinTransformer$Proxy
                                    [number:protected] => 199
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [199] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Adding: $wrapper.net.ilexiconn.llibrary.server.core.plugin.LLibraryTransformer
                                    [number:protected] => 200
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [200] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Adding: $wrapper.net.ilexiconn.llibrary.server.core.patcher.LLibraryRuntimePatcher
                                    [number:protected] => 201
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [201] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Adding: $wrapper.net.ilexiconn.llibrary.server.core.plugin.LLibraryTransformer
                                    [number:protected] => 202
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [202] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Adding: $wrapper.net.ilexiconn.llibrary.server.core.patcher.LLibraryRuntimePatcher
                                    [number:protected] => 203
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [203] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Excluding: net.minecraftforge.fml.common.asm.transformers.TerminalTransformer
                                    [number:protected] => 204
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [204] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Excluding: org.spongepowered.asm.mixin.transformer.MixinTransformer$Proxy
                                    [number:protected] => 205
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [205] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Transformer delegation list created with 13 entries
                                    [number:protected] => 206
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [206] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/DEBUG] [mixin/]: Found name transformer: net.minecraftforge.fml.common.asm.transformers.DeobfuscationTransformer
                                    [number:protected] => 207
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [207] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/BlockPortal to metadata cache
                                    [number:protected] => 208
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [208] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/BlockFire to metadata cache
                                    [number:protected] => 209
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [209] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/BlockEndPortal to metadata cache
                                    [number:protected] => 210
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [210] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/command/CommandHandler to metadata cache
                                    [number:protected] => 211
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [211] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:42] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:42] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/entity/Entity to metadata cache
                                    [number:protected] => 212
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [212] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:43] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:43] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/entity/player/EntityPlayer to metadata cache
                                    [number:protected] => 213
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [213] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:43] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:43] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/entity/player/EntityPlayerMP to metadata cache
                                    [number:protected] => 214
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [214] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:43] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:43] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/item/crafting/CraftingManager to metadata cache
                                    [number:protected] => 215
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [215] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:43] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:43] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/network/NetHandlerPlayServer to metadata cache
                                    [number:protected] => 216
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [216] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:43] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:43] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/common/DimensionManager to metadata cache
                                    [number:protected] => 217
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [217] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:43] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:43] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/fe/event/world/FireEvent$Destroy to metadata cache
                                    [number:protected] => 218
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [218] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:43] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:43] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/fe/event/world/FireEvent$Spread to metadata cache
                                    [number:protected] => 219
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [219] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:43] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:43] [main/TRACE] [mixin/]: Added class metadata for com/forgeessentials/api/UserIdent$NpcUserIdent to metadata cache
                                    [number:protected] => 220
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [220] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:43] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:43] [main/DEBUG] [mixin/]: Prepared 10 mixins in 1.111 sec (111.1 msec avg.)
                                    [number:protected] => 221
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [221] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:43] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:43] [main/DEBUG] [mixin/]: Mixing command.MixinCommandHandler from mixins.forgeessentials.json into net.minecraft.command.CommandHandler
                                    [number:protected] => 222
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [222] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:43] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:43] [main/TRACE] [mixin/]: Added class metadata for com/forgeessentials/core/misc/PermissionManager to metadata cache
                                    [number:protected] => 223
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [223] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:43] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:43] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/server/permission/PermissionAPI to metadata cache
                                    [number:protected] => 224
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [224] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:43] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:43] [main/TRACE] [mixin/]: Added class metadata for com/forgeessentials/util/DoAsCommandSender to metadata cache
                                    [number:protected] => 225
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [225] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for com/forgeessentials/api/UserIdent to metadata cache
                                    [number:protected] => 226
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [226] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/command/ICommandSender to metadata cache
                                    [number:protected] => 227
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [227] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/event/CommandEvent to metadata cache
                                    [number:protected] => 228
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [228] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/util/text/TextComponentTranslation to metadata cache
                                    [number:protected] => 229
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [229] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/fml/common/eventhandler/Event to metadata cache
                                    [number:protected] => 230
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [230] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/util/text/TextComponentBase to metadata cache
                                    [number:protected] => 231
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [231] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/command/CommandException to metadata cache
                                    [number:protected] => 232
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [232] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/command/WrongUsageException to metadata cache
                                    [number:protected] => 233
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [233] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for java/lang/Exception to metadata cache
                                    [number:protected] => 234
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [234] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for java/lang/Throwable to metadata cache
                                    [number:protected] => 235
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [235] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/command/SyntaxErrorException to metadata cache
                                    [number:protected] => 236
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [236] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/DEBUG] [mixin/]: Mixing entity.MixinEntity from mixins.forgeessentials.json into net.minecraft.entity.Entity
                                    [number:protected] => 237
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [237] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/common/MinecraftForge to metadata cache
                                    [number:protected] => 238
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [238] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/fe/event/world/PressurePlateEvent to metadata cache
                                    [number:protected] => 239
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [239] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/event/entity/EntityEvent to metadata cache
                                    [number:protected] => 240
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [240] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/fml/common/eventhandler/EventBus to metadata cache
                                    [number:protected] => 241
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [241] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for java/util/List to metadata cache
                                    [number:protected] => 242
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [242] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for java/util/ArrayList to metadata cache
                                    [number:protected] => 243
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [243] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for java/util/AbstractList to metadata cache
                                    [number:protected] => 244
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [244] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:44] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:44] [main/TRACE] [mixin/]: Added class metadata for java/util/AbstractCollection to metadata cache
                                    [number:protected] => 245
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [245] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:45] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:45] [main/DEBUG] [mixin/]: Mixing entity.player.MixinEntityPlayer from mixins.forgeessentials.json into net.minecraft.entity.player.EntityPlayer
                                    [number:protected] => 246
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [246] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:45] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:45] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/entity/EntityLivingBase to metadata cache
                                    [number:protected] => 247
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [247] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:45] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:45] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/entity/player/PlayerCapabilities to metadata cache
                                    [number:protected] => 248
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [248] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:45] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:45] [main/TRACE] [mixin/]: Added class metadata for java/lang/String to metadata cache
                                    [number:protected] => 249
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [249] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:45] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:45] [main/INFO] [LaunchWrapper/]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
                                    [number:protected] => 250
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [250] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:48] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:48] [main/DEBUG] [mixin/]: Mixing block.MixinBlockFire from mixins.forgeessentials.json into net.minecraft.block.BlockFire
                                    [number:protected] => 251
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [251] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:48] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:48] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/Block to metadata cache
                                    [number:protected] => 252
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [252] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:48] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:48] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/fml/common/registry/IForgeRegistryEntry$Impl to metadata cache
                                    [number:protected] => 253
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [253] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:48] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:48] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/fe/event/world/FireEvent to metadata cache
                                    [number:protected] => 254
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [254] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:48] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:48] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/event/world/BlockEvent to metadata cache
                                    [number:protected] => 255
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [255] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:48] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:48] [main/TRACE] [mixin/]: Added class metadata for org/spongepowered/asm/mixin/injection/callback/CallbackInfo to metadata cache
                                    [number:protected] => 256
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [256] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:48] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:48] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/util/EnumFacing to metadata cache
                                    [number:protected] => 257
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [257] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:48] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:48] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/util/math/BlockPos to metadata cache
                                    [number:protected] => 258
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [258] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:48] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:48] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/world/World to metadata cache
                                    [number:protected] => 259
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [259] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:49] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:49] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/fml/common/registry/IForgeRegistryEntry to metadata cache
                                    [number:protected] => 260
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [260] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:51] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:51] [main/DEBUG] [mixin/]: Mixing block.MixinBlockPortal from mixins.forgeessentials.json into net.minecraft.block.BlockPortal
                                    [number:protected] => 261
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [261] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:51] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:51] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/BlockBreakable to metadata cache
                                    [number:protected] => 262
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [262] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:51] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:51] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/util/math/Vec3i to metadata cache
                                    [number:protected] => 263
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [263] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:51] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:51] [main/TRACE] [mixin/]: Added class metadata for java/lang/Comparable to metadata cache
                                    [number:protected] => 264
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [264] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:51] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:51] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/fe/event/entity/EntityPortalEvent to metadata cache
                                    [number:protected] => 265
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [265] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:51] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:51] [main/DEBUG] [mixin/]: Mixing block.MixinBlockEndPortal from mixins.forgeessentials.json into net.minecraft.block.BlockEndPortal
                                    [number:protected] => 266
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [266] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:51] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:51] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/BlockContainer to metadata cache
                                    [number:protected] => 267
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [267] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:51] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:51] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/state/IBlockState to metadata cache
                                    [number:protected] => 268
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [268] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:51] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:51] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/state/IBlockBehaviors to metadata cache
                                    [number:protected] => 269
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [269] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:51] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:51] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/state/IBlockProperties to metadata cache
                                    [number:protected] => 270
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [270] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:51] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:51] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/util/math/AxisAlignedBB to metadata cache
                                    [number:protected] => 271
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [271] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:51] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:51] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/ITileEntityProvider to metadata cache
                                    [number:protected] => 272
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [272] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:54] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:54] [main/DEBUG] [mixin/]: Mixing entity.player.MixinEntityPlayerMP from mixins.forgeessentials.json into net.minecraft.entity.player.EntityPlayerMP
                                    [number:protected] => 273
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [273] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:56] [main/DEBUG] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:56] [main/DEBUG] [mixin/]: Mixing item.crafting.MixinCraftingManager from mixins.forgeessentials.json into net.minecraft.item.crafting.CraftingManager
                                    [number:protected] => 274
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [274] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:56] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:56] [main/TRACE] [mixin/]: Added class metadata for com/forgeessentials/protection/ModuleProtection to metadata cache
                                    [number:protected] => 275
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [275] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:56] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:56] [main/TRACE] [mixin/]: Added class metadata for java/util/Iterator to metadata cache
                                    [number:protected] => 276
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [276] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:56] [main/TRACE] [mixin/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:56] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/item/crafting/IRecipe to metadata cache
                                    [number:protected] => 277
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [277] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:57] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:57] [main/DEBUG] [FML/]: Creating vanilla freeze snapshot
                                    [number:protected] => 278
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [278] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:57] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:57] [main/DEBUG] [FML/]: Vanilla freeze snapshot created
                                    [number:protected] => 279
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [279] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:58] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:58] [Server thread/INFO] [FML/]: MinecraftForge v12.18.3.2511 Initialized
                                    [number:protected] => 280
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [280] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:59] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:59] [Server thread/INFO] [FML/]: Replaced 231 ore recipes
                                    [number:protected] => 281
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [281] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:59] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:59] [Server thread/DEBUG] [FML/]: File /aternos/server/config/injectedDependencies.json not found. No dependencies injected
                                    [number:protected] => 282
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [282] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:41:59] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:41:59] [Server thread/DEBUG] [FML/]: Building injected Mod Containers [net.minecraftforge.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer]
                                    [number:protected] => 283
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [283] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Attempting to load mods contained in the minecraft jar file and associated classes
                                    [number:protected] => 284
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [284] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/forge.jar, examining for mod candidates
                                    [number:protected] => 285
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [285] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar
                                    [number:protected] => 286
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [286] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/llibrary-1.7.7-1.10.2.jar
                                    [number:protected] => 287
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [287] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/1.10.2/llibrary-core-1.0.11-1.12.2.jar
                                    [number:protected] => 288
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [288] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/cdi-api-1.1.jar, examining for mod candidates
                                    [number:protected] => 289
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [289] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/jsr250-api-1.0.jar, examining for mod candidates
                                    [number:protected] => 290
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [290] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/mysql-connector-java-5.1.22.jar, examining for mod candidates
                                    [number:protected] => 291
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [291] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/javassist-3.20.0-GA.jar, examining for mod candidates
                                    [number:protected] => 292
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [292] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/classmate-1.3.0.jar, examining for mod candidates
                                    [number:protected] => 293
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [293] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/dom4j-1.6.1.jar, examining for mod candidates
                                    [number:protected] => 294
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [294] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/antlr-2.7.7.jar, examining for mod candidates
                                    [number:protected] => 295
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [295] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/geronimo-jta_1.1_spec-1.1.1.jar, examining for mod candidates
                                    [number:protected] => 296
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [296] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/jboss-interceptors-api_1.1_spec-1.0.0.Beta1.jar, examining for mod candidates
                                    [number:protected] => 297
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [297] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/javax.inject-1.jar, examining for mod candidates
                                    [number:protected] => 298
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [298] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/pircbotx-2.0.1.jar, examining for mod candidates
                                    [number:protected] => 299
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [299] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/jandex-2.0.0.Final.jar, examining for mod candidates
                                    [number:protected] => 300
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [300] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/hibernate-jpa-2.1-api-1.0.0.Final.jar, examining for mod candidates
                                    [number:protected] => 301
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [301] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/el-api-2.2.jar, examining for mod candidates
                                    [number:protected] => 302
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [302] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/hibernate-commons-annotations-5.0.1.Final.jar, examining for mod candidates
                                    [number:protected] => 303
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [303] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/hibernate-core-5.2.2.Final.jar, examining for mod candidates
                                    [number:protected] => 304
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [304] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/h2-1.3.175.jar, examining for mod candidates
                                    [number:protected] => 305
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [305] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/jboss-logging-3.3.0.Final.jar, examining for mod candidates
                                    [number:protected] => 306
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [306] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/slf4j-api-1.7.5.jar, examining for mod candidates
                                    [number:protected] => 307
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [307] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Minecraft jar mods loaded successfully
                                    [number:protected] => 308
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [308] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/INFO] [FML/]: Found 0 mods from the command line. Injecting into mod discoverer
                                    [number:protected] => 309
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [309] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/INFO] [FML/]: Searching /aternos/server/mods for mods
                                    [number:protected] => 310
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [310] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate mod directory 1.10.2
                                    [number:protected] => 311
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [311] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file BiomesOPlenty-1.10.2-5.0.0.2290-universal.jar
                                    [number:protected] => 312
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [312] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file CustomMobSpawner 3.10.1.jar
                                    [number:protected] => 313
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [313] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Decocraft-2.5.2_1.10.2.jar
                                    [number:protected] => 314
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [314] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file DrZhark\'s Mo\'Creatures Mod-10.0.6.jar
                                    [number:protected] => 315
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [315] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file forgeessentials-1.10.2-10.3.1380-server.jar
                                    [number:protected] => 316
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [316] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file journeymap-1.12.2-5.5.4.jar
                                    [number:protected] => 317
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [317] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file JurassiCraft-2.1.3-Fix.jar
                                    [number:protected] => 318
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [318] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file llibrary-1.7.7-1.10.2.jar
                                    [number:protected] => 319
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [319] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate mod directory memory_repo
                                    [number:protected] => 320
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [320] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/INFO] [FML/]: Also searching /aternos/server/mods/1.10.2 for mods
                                    [number:protected] => 321
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [321] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/TRACE] [FML/]: Skipping already parsed coremod or tweaker llibrary-core-1.0.11-1.12.2.jar
                                    [number:protected] => 322
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [322] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: Examining file forge.jar for potential mods
                                    [number:protected] => 323
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [323] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:00] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:00] [Server thread/DEBUG] [FML/]: The mod container forge.jar appears to be missing an mcmod.info file
                                    [number:protected] => 324
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [324] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:02] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:02] [Server thread/DEBUG] [FML/]: Examining file cdi-api-1.1.jar for potential mods
                                    [number:protected] => 325
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [325] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:02] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:02] [Server thread/DEBUG] [FML/]: The mod container cdi-api-1.1.jar appears to be missing an mcmod.info file
                                    [number:protected] => 326
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [326] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:02] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:02] [Server thread/DEBUG] [FML/]: Examining file jsr250-api-1.0.jar for potential mods
                                    [number:protected] => 327
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [327] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:02] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:02] [Server thread/DEBUG] [FML/]: The mod container jsr250-api-1.0.jar appears to be missing an mcmod.info file
                                    [number:protected] => 328
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [328] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:02] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:02] [Server thread/DEBUG] [FML/]: Examining file mysql-connector-java-5.1.22.jar for potential mods
                                    [number:protected] => 329
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [329] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:02] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:02] [Server thread/DEBUG] [FML/]: The mod container mysql-connector-java-5.1.22.jar appears to be missing an mcmod.info file
                                    [number:protected] => 330
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [330] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:03] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:03] [Server thread/DEBUG] [FML/]: Examining file javassist-3.20.0-GA.jar for potential mods
                                    [number:protected] => 331
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [331] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:03] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:03] [Server thread/DEBUG] [FML/]: The mod container javassist-3.20.0-GA.jar appears to be missing an mcmod.info file
                                    [number:protected] => 332
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [332] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:03] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:03] [Server thread/DEBUG] [FML/]: Examining file classmate-1.3.0.jar for potential mods
                                    [number:protected] => 333
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [333] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:03] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:03] [Server thread/DEBUG] [FML/]: The mod container classmate-1.3.0.jar appears to be missing an mcmod.info file
                                    [number:protected] => 334
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [334] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:03] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:03] [Server thread/DEBUG] [FML/]: Examining file dom4j-1.6.1.jar for potential mods
                                    [number:protected] => 335
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [335] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:03] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:03] [Server thread/DEBUG] [FML/]: The mod container dom4j-1.6.1.jar appears to be missing an mcmod.info file
                                    [number:protected] => 336
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [336] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:03] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:03] [Server thread/DEBUG] [FML/]: Examining file antlr-2.7.7.jar for potential mods
                                    [number:protected] => 337
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [337] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:03] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:03] [Server thread/DEBUG] [FML/]: The mod container antlr-2.7.7.jar appears to be missing an mcmod.info file
                                    [number:protected] => 338
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [338] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:04] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:04] [Server thread/DEBUG] [FML/]: Examining file geronimo-jta_1.1_spec-1.1.1.jar for potential mods
                                    [number:protected] => 339
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [339] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:04] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:04] [Server thread/DEBUG] [FML/]: The mod container geronimo-jta_1.1_spec-1.1.1.jar appears to be missing an mcmod.info file
                                    [number:protected] => 340
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [340] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:04] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:04] [Server thread/DEBUG] [FML/]: Examining file jboss-interceptors-api_1.1_spec-1.0.0.Beta1.jar for potential mods
                                    [number:protected] => 341
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [341] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:04] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:04] [Server thread/DEBUG] [FML/]: The mod container jboss-interceptors-api_1.1_spec-1.0.0.Beta1.jar appears to be missing an mcmod.info file
                                    [number:protected] => 342
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [342] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:04] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:04] [Server thread/DEBUG] [FML/]: Examining file javax.inject-1.jar for potential mods
                                    [number:protected] => 343
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [343] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:04] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:04] [Server thread/DEBUG] [FML/]: The mod container javax.inject-1.jar appears to be missing an mcmod.info file
                                    [number:protected] => 344
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [344] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:04] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:04] [Server thread/DEBUG] [FML/]: Examining file pircbotx-2.0.1.jar for potential mods
                                    [number:protected] => 345
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [345] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:04] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:04] [Server thread/DEBUG] [FML/]: The mod container pircbotx-2.0.1.jar appears to be missing an mcmod.info file
                                    [number:protected] => 346
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [346] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:04] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:04] [Server thread/DEBUG] [FML/]: Examining file jandex-2.0.0.Final.jar for potential mods
                                    [number:protected] => 347
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [347] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:04] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:04] [Server thread/DEBUG] [FML/]: The mod container jandex-2.0.0.Final.jar appears to be missing an mcmod.info file
                                    [number:protected] => 348
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [348] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:04] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:04] [Server thread/DEBUG] [FML/]: Examining file hibernate-jpa-2.1-api-1.0.0.Final.jar for potential mods
                                    [number:protected] => 349
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [349] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:04] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:04] [Server thread/DEBUG] [FML/]: The mod container hibernate-jpa-2.1-api-1.0.0.Final.jar appears to be missing an mcmod.info file
                                    [number:protected] => 350
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [350] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:04] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:04] [Server thread/DEBUG] [FML/]: Examining file el-api-2.2.jar for potential mods
                                    [number:protected] => 351
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [351] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:04] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:04] [Server thread/DEBUG] [FML/]: The mod container el-api-2.2.jar appears to be missing an mcmod.info file
                                    [number:protected] => 352
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [352] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:04] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:04] [Server thread/DEBUG] [FML/]: Examining file hibernate-commons-annotations-5.0.1.Final.jar for potential mods
                                    [number:protected] => 353
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [353] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:04] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:04] [Server thread/DEBUG] [FML/]: The mod container hibernate-commons-annotations-5.0.1.Final.jar appears to be missing an mcmod.info file
                                    [number:protected] => 354
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [354] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:04] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:04] [Server thread/DEBUG] [FML/]: Examining file hibernate-core-5.2.2.Final.jar for potential mods
                                    [number:protected] => 355
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [355] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:04] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:04] [Server thread/DEBUG] [FML/]: The mod container hibernate-core-5.2.2.Final.jar appears to be missing an mcmod.info file
                                    [number:protected] => 356
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [356] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:08] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:08] [Server thread/DEBUG] [FML/]: Examining file h2-1.3.175.jar for potential mods
                                    [number:protected] => 357
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [357] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:08] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:08] [Server thread/DEBUG] [FML/]: The mod container h2-1.3.175.jar appears to be missing an mcmod.info file
                                    [number:protected] => 358
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [358] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/DEBUG] [FML/]: Examining file jboss-logging-3.3.0.Final.jar for potential mods
                                    [number:protected] => 359
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [359] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/DEBUG] [FML/]: The mod container jboss-logging-3.3.0.Final.jar appears to be missing an mcmod.info file
                                    [number:protected] => 360
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [360] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/DEBUG] [FML/]: Examining file slf4j-api-1.7.5.jar for potential mods
                                    [number:protected] => 361
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [361] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/DEBUG] [FML/]: The mod container slf4j-api-1.7.5.jar appears to be missing an mcmod.info file
                                    [number:protected] => 362
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [362] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/DEBUG] [FML/]: Examining directory 1.10.2 for potential mods
                                    [number:protected] => 363
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [363] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/DEBUG] [FML/]: No mcmod.info file found in directory 1.10.2
                                    [number:protected] => 364
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [364] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/DEBUG] [FML/]: Examining file BiomesOPlenty-1.10.2-5.0.0.2290-universal.jar for potential mods
                                    [number:protected] => 365
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [365] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/TRACE] [FML/]: Located mcmod.info file in file BiomesOPlenty-1.10.2-5.0.0.2290-universal.jar
                                    [number:protected] => 366
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [366] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (biomesoplenty.core.BiomesOPlenty) - loading
                                    [number:protected] => 367
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [367] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/WARN] [FML/]: ****************************************
                                    [number:protected] => 368
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [368] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/WARN] [FML/]: * The modid BiomesOPlenty is not the same as it\'s lowercase version. Lowercasing will be enforced in 1.11
                                    [number:protected] => 369
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [369] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/WARN] [FML/]: * at net.minecraftforge.fml.common.FMLModContainer.sanityCheckModId(FMLModContainer.java:143)
                                    [number:protected] => 370
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [370] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/WARN] [FML/]: * at net.minecraftforge.fml.common.FMLModContainer.&lt;init&gt;(FMLModContainer.java:128)
                                    [number:protected] => 371
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [371] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/WARN] [FML/]: * at sun.reflect.NativeConstructorAccessorImpl.newInstance0(Native Method)
                                    [number:protected] => 372
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [372] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/WARN] [FML/]: * at sun.reflect.NativeConstructorAccessorImpl.newInstance(NativeConstructorAccessorImpl.java:62)
                                    [number:protected] => 373
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [373] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/WARN] [FML/]: * at sun.reflect.DelegatingConstructorAccessorImpl.newInstance(DelegatingConstructorAccessorImpl.java:45)
                                    [number:protected] => 374
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [374] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/WARN] [FML/]: * at java.lang.reflect.Constructor.newInstance(Constructor.java:423)...
                                    [number:protected] => 375
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [375] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/WARN] [FML/]: ****************************************
                                    [number:protected] => 376
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [376] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/TRACE] [BiomesOPlenty/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/TRACE] [BiomesOPlenty/]: Parsed dependency info : [Forge@[12.18.1.2039,)] [Forge@[12.18.1.2039,)] []
                                    [number:protected] => 377
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [377] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/DEBUG] [FML/]: Examining file CustomMobSpawner 3.10.1.jar for potential mods
                                    [number:protected] => 378
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [378] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/TRACE] [FML/]: Located mcmod.info file in file CustomMobSpawner 3.10.1.jar
                                    [number:protected] => 379
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [379] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (drzhark.customspawner.CustomSpawner) - loading
                                    [number:protected] => 380
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [380] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/TRACE] [customspawner/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/TRACE] [customspawner/]: Parsed dependency info : [] [] []
                                    [number:protected] => 381
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [381] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/DEBUG] [FML/]: Examining file Decocraft-2.5.2_1.10.2.jar for potential mods
                                    [number:protected] => 382
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [382] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Decocraft-2.5.2_1.10.2.jar
                                    [number:protected] => 383
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [383] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (com.mia.craftstudio.minecraft.forge.CSLibMod) - loading
                                    [number:protected] => 384
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [384] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/WARN] [FML/]: ****************************************
                                    [number:protected] => 385
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [385] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/WARN] [FML/]: * The modid PTRModelLib is not the same as it\'s lowercase version. Lowercasing will be enforced in 1.11
                                    [number:protected] => 386
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [386] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/WARN] [FML/]: * at net.minecraftforge.fml.common.FMLModContainer.sanityCheckModId(FMLModContainer.java:143)
                                    [number:protected] => 387
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [387] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/WARN] [FML/]: * at net.minecraftforge.fml.common.FMLModContainer.&lt;init&gt;(FMLModContainer.java:128)
                                    [number:protected] => 388
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [388] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/WARN] [FML/]: * at sun.reflect.NativeConstructorAccessorImpl.newInstance0(Native Method)
                                    [number:protected] => 389
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [389] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/WARN] [FML/]: * at sun.reflect.NativeConstructorAccessorImpl.newInstance(NativeConstructorAccessorImpl.java:62)
                                    [number:protected] => 390
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [390] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/WARN] [FML/]: * at sun.reflect.DelegatingConstructorAccessorImpl.newInstance(DelegatingConstructorAccessorImpl.java:45)
                                    [number:protected] => 391
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [391] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/WARN] [FML/]: * at java.lang.reflect.Constructor.newInstance(Constructor.java:423)...
                                    [number:protected] => 392
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [392] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/WARN] [FML/]: ****************************************
                                    [number:protected] => 393
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [393] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:09] [Server thread/TRACE] [PTRModelLib/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:09] [Server thread/TRACE] [PTRModelLib/]: Parsed dependency info : [] [] []
                                    [number:protected] => 394
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [394] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:10] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:10] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (com.mia.props.Props) - loading
                                    [number:protected] => 395
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [395] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:10] [Server thread/TRACE] [props/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:10] [Server thread/TRACE] [props/]: Parsed dependency info : [] [PTRModelLib@[1.0.0,)] []
                                    [number:protected] => 396
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [396] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:10] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:10] [Server thread/DEBUG] [FML/]: Examining file DrZhark\'s Mo\'Creatures Mod-10.0.6.jar for potential mods
                                    [number:protected] => 397
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [397] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:10] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:10] [Server thread/TRACE] [FML/]: Located mcmod.info file in file DrZhark\'s Mo\'Creatures Mod-10.0.6.jar
                                    [number:protected] => 398
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [398] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:10] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:10] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (drzhark.mocreatures.MoCreatures) - loading
                                    [number:protected] => 399
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [399] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:10] [Server thread/TRACE] [mocreatures/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:10] [Server thread/TRACE] [mocreatures/]: Using mcmod dependency info : [] [CustomSpawner] []
                                    [number:protected] => 400
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [400] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:10] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:10] [Server thread/DEBUG] [FML/]: Examining file forgeessentials-1.10.2-10.3.1380-server.jar for potential mods
                                    [number:protected] => 401
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [401] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:10] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:10] [Server thread/TRACE] [FML/]: Located mcmod.info file in file forgeessentials-1.10.2-10.3.1380-server.jar
                                    [number:protected] => 402
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [402] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:10] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:10] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (com.forgeessentials.core.ForgeEssentials) - loading
                                    [number:protected] => 403
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [403] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:10] [Server thread/TRACE] [forgeessentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:10] [Server thread/TRACE] [forgeessentials/]: Parsed dependency info : [Forge] [Forge, WorldEdit] []
                                    [number:protected] => 404
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [404] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:11] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:11] [Server thread/DEBUG] [FML/]: Examining file journeymap-1.12.2-5.5.4.jar for potential mods
                                    [number:protected] => 405
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [405] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:11] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:11] [Server thread/TRACE] [FML/]: Located mcmod.info file in file journeymap-1.12.2-5.5.4.jar
                                    [number:protected] => 406
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [406] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:11] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:11] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (journeymap.common.Journeymap) - loading
                                    [number:protected] => 407
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [407] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:11] [Server thread/TRACE] [journeymap/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:11] [Server thread/TRACE] [journeymap/]: Using mcmod dependency info : [] [Forge@[14.23.5.2768,)] []
                                    [number:protected] => 408
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [408] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:11] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:11] [Server thread/DEBUG] [FML/]: Examining file JurassiCraft-2.1.3-Fix.jar for potential mods
                                    [number:protected] => 409
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [409] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:11] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:11] [Server thread/TRACE] [FML/]: Located mcmod.info file in file JurassiCraft-2.1.3-Fix.jar
                                    [number:protected] => 410
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [410] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:11] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:11] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (org.jurassicraft.JurassiCraft) - loading
                                    [number:protected] => 411
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [411] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:11] [Server thread/TRACE] [jurassicraft/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:11] [Server thread/TRACE] [jurassicraft/]: Parsed dependency info : [llibrary@[1.7.7,)] [llibrary@[1.7.7,)] []
                                    [number:protected] => 412
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [412] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Examining file llibrary-1.7.7-1.10.2.jar for potential mods
                                    [number:protected] => 413
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [413] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [FML/]: Located mcmod.info file in file llibrary-1.7.7-1.10.2.jar
                                    [number:protected] => 414
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [414] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (net.ilexiconn.llibrary.LLibrary) - loading
                                    [number:protected] => 415
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [415] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [llibrary/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [llibrary/]: Parsed dependency info : [] [] []
                                    [number:protected] => 416
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [416] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Examining directory memory_repo for potential mods
                                    [number:protected] => 417
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [417] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: No mcmod.info file found in directory memory_repo
                                    [number:protected] => 418
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [418] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [FML/]: Recursing into package net
                                    [number:protected] => 419
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [419] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [FML/]: Recursing into package net/ilexiconn
                                    [number:protected] => 420
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [420] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [FML/]: Recursing into package net/ilexiconn/llibrary-core
                                    [number:protected] => 421
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [421] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [FML/]: Recursing into package net/ilexiconn/llibrary-core/1.0.11-1.12.2
                                    [number:protected] => 422
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [422] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/INFO] [FML/]: Forge Mod Loader has identified 12 mods to load
                                    [number:protected] => 423
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [423] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Found API com.forgeessentials.api.remote (owned by ForgeEssentials providing ForgeEssentialsAPI|Remote) embedded in forgeessentials
                                    [number:protected] => 424
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [424] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Found API journeymap.client.api.util (owned by journeymap providing journeymap|client-api-util) embedded in journeymap
                                    [number:protected] => 425
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [425] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Found API com.forgeessentials.api (owned by ForgeEssentials providing ForgeEssentialsAPI) embedded in forgeessentials
                                    [number:protected] => 426
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [426] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Found API journeymap.client.api.event (owned by journeymap providing journeymap|client-api-event) embedded in journeymap
                                    [number:protected] => 427
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [427] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Found API journeymap.client.api.model (owned by journeymap providing journeymap|client-api-model) embedded in journeymap
                                    [number:protected] => 428
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [428] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Found API com.mia.craftstudio (owned by PTRModelLib providing CSLib|API) embedded in PTRModelLib
                                    [number:protected] => 429
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [429] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Found API com.mia.craftstudio (owned by PTRModelLib providing CSLib|API) embedded in props
                                    [number:protected] => 430
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [430] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Found API com.forgeessentials.api.permissions (owned by ForgeEssentials providing ForgeEssentialsAPI|Perms) embedded in forgeessentials
                                    [number:protected] => 431
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [431] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Found API journeymap.client.api.display (owned by journeymap providing journeymap|client-api-display) embedded in journeymap
                                    [number:protected] => 432
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [432] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Found API com.forgeessentials.api.economy (owned by ForgeEssentials providing ForgeEssentialsAPI|Economy) embedded in forgeessentials
                                    [number:protected] => 433
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [433] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Found API net.minecraftforge.fe (owned by ForgeEssentials providing Forge-FEHooks) embedded in forgeessentials
                                    [number:protected] => 434
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [434] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Found API journeymap.client.api (owned by journeymap providing journeymap|client-api) embedded in journeymap
                                    [number:protected] => 435
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [435] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API journeymap|client-api-model: owner: journeymap, dependents: []
                                    [number:protected] => 436
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [436] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API journeymap|client-api-display: owner: journeymap, dependents: []
                                    [number:protected] => 437
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [437] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API journeymap|client-api: owner: journeymap, dependents: []
                                    [number:protected] => 438
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [438] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API journeymap|client-api-event: owner: journeymap, dependents: []
                                    [number:protected] => 439
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [439] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ForgeEssentialsAPI|Economy: owner: ForgeEssentials, dependents: [forgeessentials]
                                    [number:protected] => 440
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [440] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ForgeEssentialsAPI|Perms: owner: ForgeEssentials, dependents: [forgeessentials]
                                    [number:protected] => 441
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [441] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ForgeEssentialsAPI|Remote: owner: ForgeEssentials, dependents: [forgeessentials]
                                    [number:protected] => 442
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [442] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API journeymap|client-api-util: owner: journeymap, dependents: []
                                    [number:protected] => 443
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [443] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ForgeEssentialsAPI: owner: ForgeEssentials, dependents: [forgeessentials]
                                    [number:protected] => 444
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [444] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API Forge-FEHooks: owner: ForgeEssentials, dependents: [forgeessentials]
                                    [number:protected] => 445
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [445] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CSLib|API: owner: PTRModelLib, dependents: [props]
                                    [number:protected] => 446
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [446] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [FML/]: Received a system property request \'\'
                                    [number:protected] => 447
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [447] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [FML/]: System property request managing the state of 0 mods
                                    [number:protected] => 448
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [448] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: After merging, found state information for 0 mods
                                    [number:protected] => 449
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [449] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [BiomesOPlenty/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [BiomesOPlenty/]: Enabling mod BiomesOPlenty
                                    [number:protected] => 450
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [450] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [customspawner/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [customspawner/]: Enabling mod customspawner
                                    [number:protected] => 451
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [451] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [PTRModelLib/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [PTRModelLib/]: Enabling mod PTRModelLib
                                    [number:protected] => 452
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [452] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [props/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [props/]: Enabling mod props
                                    [number:protected] => 453
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [453] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [mocreatures/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [mocreatures/]: Enabling mod mocreatures
                                    [number:protected] => 454
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [454] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [forgeessentials/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [forgeessentials/]: Enabling mod forgeessentials
                                    [number:protected] => 455
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [455] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [journeymap/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [journeymap/]: Enabling mod journeymap
                                    [number:protected] => 456
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [456] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [jurassicraft/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [jurassicraft/]: Enabling mod jurassicraft
                                    [number:protected] => 457
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [457] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [llibrary/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [llibrary/]: Enabling mod llibrary
                                    [number:protected] => 458
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [458] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [FML/]: Verifying mod requirements are satisfied
                                    [number:protected] => 459
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [459] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/ERROR] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/ERROR] [FML/]: The mod journeymap does not wish to run in Minecraft version Minecraft 1.10.2. You will have to remove it to play.
                                    [number:protected] => 460
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [460] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/ERROR] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/ERROR] [FML/]: Wrong Minecraft version for journeymap
                                    [number:protected] => 461
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [461] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Mod sorting data
                                    [number:protected] => 462
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [462] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: BiomesOPlenty(Biomes O\' Plenty:5.0.0.2290): BiomesOPlenty-1.10.2-5.0.0.2290-universal.jar (required-after:Forge@[12.18.1.2039,))
                                    [number:protected] => 463
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [463] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: customspawner(DrZhark\'s CustomSpawner:3.10.1): CustomMobSpawner 3.10.1.jar ()
                                    [number:protected] => 464
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [464] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: PTRModelLib(PTRModelLib:1.0.0): Decocraft-2.5.2_1.10.2.jar ()
                                    [number:protected] => 465
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [465] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: props(Decocraft:2.5.2): Decocraft-2.5.2_1.10.2.jar (after:PTRModelLib@[1.0.0,))
                                    [number:protected] => 466
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [466] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: mocreatures(DrZhark\'s Mo\'Creatures Mod:10.0.6): DrZhark\'s Mo\'Creatures Mod-10.0.6.jar ()
                                    [number:protected] => 467
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [467] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: forgeessentials(Forge Essentials:10.3): forgeessentials-1.10.2-10.3.1380-server.jar (required-after:Forge;after:WorldEdit)
                                    [number:protected] => 468
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [468] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: journeymap(JourneyMap:1.12.2-5.5.4): journeymap-1.12.2-5.5.4.jar ()
                                    [number:protected] => 469
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [469] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: jurassicraft(JurassiCraft:2.1.3): JurassiCraft-2.1.3-Fix.jar (required-after:llibrary@[1.7.7,))
                                    [number:protected] => 470
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [470] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: llibrary(LLibrary:1.7.7): llibrary-1.7.7-1.10.2.jar ()
                                    [number:protected] => 471
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [471] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/WARN] [FML/]: Can\'t revert to frozen GameData state without freezing first.
                                    [number:protected] => 472
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [472] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [mcp/mcp]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [mcp/mcp]: Sending event FMLServerStoppedEvent to mod mcp
                                    [number:protected] => 473
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [473] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [mcp/mcp]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [mcp/mcp]: Sent event FMLServerStoppedEvent to mod mcp
                                    [number:protected] => 474
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [474] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Minecraft Coder Pack took 0.002s
                                    [number:protected] => 475
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [475] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [FML/FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [FML/FML]: Sending event FMLServerStoppedEvent to mod FML
                                    [number:protected] => 476
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [476] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [FML/FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [FML/FML]: Sent event FMLServerStoppedEvent to mod FML
                                    [number:protected] => 477
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [477] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Forge Mod Loader took 0.002s
                                    [number:protected] => 478
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [478] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [Forge/Forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [Forge/Forge]: Sending event FMLServerStoppedEvent to mod Forge
                                    [number:protected] => 479
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [479] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [Forge/Forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [Forge/Forge]: Sent event FMLServerStoppedEvent to mod Forge
                                    [number:protected] => 480
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [480] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Minecraft Forge took 0.001s
                                    [number:protected] => 481
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [481] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [BiomesOPlenty/BiomesOPlenty]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [BiomesOPlenty/BiomesOPlenty]: Sending event FMLServerStoppedEvent to mod BiomesOPlenty
                                    [number:protected] => 482
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [482] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [BiomesOPlenty/BiomesOPlenty]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [BiomesOPlenty/BiomesOPlenty]: Sent event FMLServerStoppedEvent to mod BiomesOPlenty
                                    [number:protected] => 483
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [483] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Biomes O\' Plenty took 0.001s
                                    [number:protected] => 484
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [484] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [customspawner/customspawner]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [customspawner/customspawner]: Sending event FMLServerStoppedEvent to mod customspawner
                                    [number:protected] => 485
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [485] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [customspawner/customspawner]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [customspawner/customspawner]: Sent event FMLServerStoppedEvent to mod customspawner
                                    [number:protected] => 486
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [486] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - DrZhark\'s CustomSpawner took 0.000s
                                    [number:protected] => 487
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [487] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [PTRModelLib/PTRModelLib]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [PTRModelLib/PTRModelLib]: Sending event FMLServerStoppedEvent to mod PTRModelLib
                                    [number:protected] => 488
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [488] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [PTRModelLib/PTRModelLib]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [PTRModelLib/PTRModelLib]: Sent event FMLServerStoppedEvent to mod PTRModelLib
                                    [number:protected] => 489
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [489] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - PTRModelLib took 0.000s
                                    [number:protected] => 490
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [490] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [props/props]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [props/props]: Sending event FMLServerStoppedEvent to mod props
                                    [number:protected] => 491
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [491] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [props/props]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [props/props]: Sent event FMLServerStoppedEvent to mod props
                                    [number:protected] => 492
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [492] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Decocraft took 0.000s
                                    [number:protected] => 493
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [493] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [mocreatures/mocreatures]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [mocreatures/mocreatures]: Sending event FMLServerStoppedEvent to mod mocreatures
                                    [number:protected] => 494
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [494] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [mocreatures/mocreatures]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [mocreatures/mocreatures]: Sent event FMLServerStoppedEvent to mod mocreatures
                                    [number:protected] => 495
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [495] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - DrZhark\'s Mo\'Creatures Mod took 0.000s
                                    [number:protected] => 496
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [496] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [forgeessentials/forgeessentials]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [forgeessentials/forgeessentials]: Sending event FMLServerStoppedEvent to mod forgeessentials
                                    [number:protected] => 497
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [497] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [forgeessentials/forgeessentials]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [forgeessentials/forgeessentials]: Sent event FMLServerStoppedEvent to mod forgeessentials
                                    [number:protected] => 498
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [498] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Forge Essentials took 0.000s
                                    [number:protected] => 499
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [499] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [journeymap/journeymap]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [journeymap/journeymap]: Sending event FMLServerStoppedEvent to mod journeymap
                                    [number:protected] => 500
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [500] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [journeymap/journeymap]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [journeymap/journeymap]: Sent event FMLServerStoppedEvent to mod journeymap
                                    [number:protected] => 501
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [501] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - JourneyMap took 0.004s
                                    [number:protected] => 502
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [502] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [jurassicraft/jurassicraft]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [jurassicraft/jurassicraft]: Sending event FMLServerStoppedEvent to mod jurassicraft
                                    [number:protected] => 503
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [503] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [jurassicraft/jurassicraft]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [jurassicraft/jurassicraft]: Sent event FMLServerStoppedEvent to mod jurassicraft
                                    [number:protected] => 504
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [504] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - JurassiCraft took 0.001s
                                    [number:protected] => 505
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [505] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [llibrary/llibrary]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [llibrary/llibrary]: Sending event FMLServerStoppedEvent to mod llibrary
                                    [number:protected] => 506
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [506] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/TRACE] [llibrary/llibrary]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/TRACE] [llibrary/llibrary]: Sent event FMLServerStoppedEvent to mod llibrary
                                    [number:protected] => 507
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [507] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - LLibrary took 0.001s
                                    [number:protected] => 508
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [508] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/DEBUG] [FML/]: Bar Finished: ServerStopped took 0.012s
                                    [number:protected] => 509
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [509] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:42:12] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:42:12] [Server thread/INFO] [FML/]: The state engine was in incorrect state CONSTRUCTING and forced into state SERVER_STOPPED. Errors may have been discarded.
                                    [number:protected] => 510
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 510
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [13:41:24] [main/DEBUG] [FML/]: Injecting tracing printstreams for STDOUT/STDERR.
[13:41:25] [main/INFO] [FML/]: Forge Mod Loader version 12.18.3.2511 for Minecraft 1.10.2 loading
[13:41:25] [main/INFO] [FML/]: Java is Java HotSpot(TM) 64-Bit Server VM, version 1.8.0_202, running on Linux:amd64:4.4.0-141-generic, installed at /aternos/bin/jdk1.8.0_202/jre
[13:41:25] [main/DEBUG] [FML/]: Java classpath at launch is forge.jar
[13:41:25] [main/DEBUG] [FML/]: Java library path at launch is /usr/java/packages/lib/amd64:/usr/lib64:/lib64:/lib:/usr/lib
[13:41:25] [main/DEBUG] [FML/]: Enabling runtime deobfuscation
[13:41:25] [main/DEBUG] [FML/]: Instantiating coremod class FMLCorePlugin
[13:41:25] [main/DEBUG] [FML/]: Added access transformer class net.minecraftforge.fml.common.asm.transformers.AccessTransformer to enqueued access transformers
[13:41:25] [main/DEBUG] [FML/]: Enqueued coremod FMLCorePlugin
[13:41:25] [main/DEBUG] [FML/]: Instantiating coremod class FMLForgePlugin
[13:41:25] [main/DEBUG] [FML/]: Enqueued coremod FMLForgePlugin
[13:41:25] [main/DEBUG] [FML/]: All fundamental core mods are successfully located
[13:41:25] [main/DEBUG] [FML/]: Attempting to load commandline specified mods, relative to /aternos/server/.
[13:41:25] [main/DEBUG] [FML/]: Discovering coremods
[13:41:25] [main/DEBUG] [FML/]: Examining for coremod candidacy BiomesOPlenty-1.10.2-5.0.0.2290-universal.jar
[13:41:25] [main/DEBUG] [FML/]: Not found coremod data in BiomesOPlenty-1.10.2-5.0.0.2290-universal.jar
[13:41:25] [main/DEBUG] [FML/]: Examining for coremod candidacy CustomMobSpawner 3.10.1.jar
[13:41:25] [main/DEBUG] [FML/]: Not found coremod data in CustomMobSpawner 3.10.1.jar
[13:41:25] [main/DEBUG] [FML/]: Examining for coremod candidacy Decocraft-2.5.2_1.10.2.jar
[13:41:25] [main/DEBUG] [FML/]: Not found coremod data in Decocraft-2.5.2_1.10.2.jar
[13:41:25] [main/DEBUG] [FML/]: Examining for coremod candidacy DrZhark\'s Mo\'Creatures Mod-10.0.6.jar
[13:41:25] [main/DEBUG] [FML/]: Not found coremod data in DrZhark\'s Mo\'Creatures Mod-10.0.6.jar
[13:41:25] [main/DEBUG] [FML/]: Examining for coremod candidacy forgeessentials-1.10.2-10.3.1380-server.jar
[13:41:25] [main/INFO] [FML/]: Loading tweaker com.forgeessentials.core.preloader.FELaunchHandler from forgeessentials-1.10.2-10.3.1380-server.jar
[13:41:25] [main/DEBUG] [FML/]: Examining for coremod candidacy journeymap-1.12.2-5.5.4.jar
[13:41:25] [main/DEBUG] [FML/]: Not found coremod data in journeymap-1.12.2-5.5.4.jar
[13:41:25] [main/DEBUG] [FML/]: Examining for coremod candidacy JurassiCraft-2.1.3-Fix.jar
[13:41:25] [main/DEBUG] [FML/]: Not found coremod data in JurassiCraft-2.1.3-Fix.jar
[13:41:25] [main/DEBUG] [FML/]: Examining for coremod candidacy llibrary-1.7.7-1.10.2.jar
[13:41:25] [main/TRACE] [FML/]: Found FMLCorePluginContainsFMLMod marker in llibrary-1.7.7-1.10.2.jar, it will be examined later for regular @Mod instances
[13:41:25] [main/DEBUG] [FML/]: Instantiating coremod class LLibraryPlugin
[13:41:26] [main/TRACE] [FML/]: coremod named llibrary is loading
[13:41:26] [main/DEBUG] [FML/]: The coremod net.ilexiconn.llibrary.server.core.plugin.LLibraryPlugin requested minecraft version 1.10.2 and minecraft is 1.10.2. It will be loaded.
[13:41:26] [main/DEBUG] [FML/]: Enqueued coremod llibrary
[13:41:26] [main/DEBUG] [FML/]: Examining for coremod candidacy llibrary-core-1.0.11-1.12.2.jar
[13:41:26] [main/TRACE] [FML/]: Adding llibrary-core-1.0.11-1.12.2.jar to the list of known coremods, it will not be examined again
[13:41:26] [main/DEBUG] [FML/]: Instantiating coremod class LLibraryPlugin
[13:41:26] [main/TRACE] [FML/]: coremod named llibrary is loading
[13:41:26] [main/DEBUG] [FML/]: The coremod net.ilexiconn.llibrary.server.core.plugin.LLibraryPlugin requested minecraft version 1.10.2 and minecraft is 1.10.2. It will be loaded.
[13:41:26] [main/DEBUG] [FML/]: Enqueued coremod llibrary
[13:41:26] [main/INFO] [LaunchWrapper/]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
[13:41:26] [main/INFO] [LaunchWrapper/]: Loading tweak class name com.forgeessentials.core.preloader.FELaunchHandler
[13:41:26] [main/INFO] [LaunchWrapper/]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
[13:41:26] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
[13:41:26] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
[13:41:26] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
[13:41:26] [main/DEBUG] [FML/]: Injecting coremod FMLCorePlugin {net.minecraftforge.fml.relauncher.FMLCorePlugin} class transformers
[13:41:26] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.fml.common.asm.transformers.BlamingTransformer
[13:41:26] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.fml.common.asm.transformers.SideTransformer
[13:41:26] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.fml.common.asm.transformers.EventSubscriptionTransformer
[13:41:26] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.fml.common.asm.transformers.EventSubscriberTransformer
[13:41:26] [main/DEBUG] [FML/]: Injection complete
[13:41:26] [main/DEBUG] [FML/]: Running coremod plugin for FMLCorePlugin {net.minecraftforge.fml.relauncher.FMLCorePlugin}
[13:41:26] [main/DEBUG] [FML/]: Running coremod plugin FMLCorePlugin
[13:41:29] [main/DEBUG] [FML/]: Read 915 binary patches
[13:41:30] [main/DEBUG] [FML/]: Loading deobfuscation resource /deobfuscation_data-1.10.2.lzma with 32371 records
[13:41:32] [main/INFO] [FML/]: Found valid fingerprint for Minecraft Forge. Certificate fingerprint e3c3d50c7c986df74c645c0ac54639741c90a557
[13:41:32] [main/DEBUG] [FML/]: Coremod plugin class FMLCorePlugin run successfully
[13:41:32] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
[13:41:32] [main/DEBUG] [FML/]: Injecting coremod FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin} class transformers
[13:41:32] [main/DEBUG] [FML/]: Injection complete
[13:41:32] [main/DEBUG] [FML/]: Running coremod plugin for FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin}
[13:41:32] [main/DEBUG] [FML/]: Running coremod plugin FMLForgePlugin
[13:41:32] [main/DEBUG] [FML/]: Coremod plugin class FMLForgePlugin run successfully
[13:41:32] [main/INFO] [LaunchWrapper/]: Calling tweak class com.forgeessentials.core.preloader.FELaunchHandler
[13:41:32] [main/INFO] [mixin/]: SpongePowered MIXIN Subsystem Version=0.6.10 Source=file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar Env=SERVER
[13:41:32] [main/DEBUG] [mixin/]: Adding new mixin transformer proxy #1
[13:41:32] [main/DEBUG] [mixin/]: Initialising Mixin Platform Manager
[13:41:32] [main/DEBUG] [mixin/]: Mixin platform: primary container is file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar
[13:41:32] [main/DEBUG] [mixin/]: Adding mixin platform agents for container file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar
[13:41:32] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentFML for file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar
[13:41:32] [main/DEBUG] [mixin/]: ForceLoadAsMod was specified for forgeessentials-1.10.2-10.3.1380-server.jar, attempting force-load
[13:41:32] [main/DEBUG] [mixin/]: Adding forgeessentials-1.10.2-10.3.1380-server.jar to reparseable coremod collection
[13:41:32] [main/DEBUG] [mixin/]: Instancing new MixinPlatformAgentDefault for file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar
[13:41:32] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/forge.jar for mixin tweaker
[13:41:32] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/mods/llibrary-1.7.7-1.10.2.jar for mixin tweaker
[13:41:32] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/mods/1.10.2/llibrary-core-1.0.11-1.12.2.jar for mixin tweaker
[13:41:32] [main/DEBUG] [mixin/]: Scanning asmgen:/ for mixin tweaker
[13:41:32] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentFML:file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar]
[13:41:32] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar]
[13:41:32] [main/DEBUG] [mixin/]: Setting mixin compatibility level: JAVA_8
[13:41:32] [main/WARN] [mixin/]: MixinEnvironment::setCompatibilityLevel is deprecated and will be removed. Set level via config instead!
[13:41:32] [main/INFO] [mixin/]: Compatibility level set to JAVA_8
[13:41:32] [main/DEBUG] [mixin/]: Registering mixin config: mixins.forgeessentials.json
[13:41:32] [main/WARN] [mixin/]: MixinEnvironment::setCompatibilityLevel is deprecated and will be removed. Set level via config instead!
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/cdi-api-1.1.jar to classpath
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/jsr250-api-1.0.jar to classpath
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/mysql-connector-java-5.1.22.jar to classpath
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/javassist-3.20.0-GA.jar to classpath
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/classmate-1.3.0.jar to classpath
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/dom4j-1.6.1.jar to classpath
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/antlr-2.7.7.jar to classpath
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/geronimo-jta_1.1_spec-1.1.1.jar to classpath
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/jboss-interceptors-api_1.1_spec-1.0.0.Beta1.jar to classpath
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/javax.inject-1.jar to classpath
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/pircbotx-2.0.1.jar to classpath
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/jandex-2.0.0.Final.jar to classpath
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/hibernate-jpa-2.1-api-1.0.0.Final.jar to classpath
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/el-api-2.2.jar to classpath
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/hibernate-commons-annotations-5.0.1.Final.jar to classpath
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/hibernate-core-5.2.2.Final.jar to classpath
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/h2-1.3.175.jar to classpath
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/jboss-logging-3.3.0.Final.jar to classpath
[13:41:32] [main/INFO] [ForgeEssentials/]: Added library /aternos/server/ForgeEssentials/lib/slf4j-api-1.7.5.jar to classpath
[13:41:32] [main/INFO] [ASM_ClassInjector/]: Scanning injector class com.forgeessentials.core.preloader.injections.MixinEntity
[13:41:32] [main/INFO] [ASM_ClassInjector/]: Found injector method attackEntityFrom_event =&gt; func_70097_a(Lnet/minecraft/util/DamageSource;F)Z
[13:41:32] [main/INFO] [ASM_ClassInjector/]: Scanning injector class com.forgeessentials.core.preloader.injections.MixinBlock
[13:41:32] [main/INFO] [ASM_ClassInjector/]: Found injector method onFallenUpon_event =&gt; func_149746_a(Lnet/minecraft/world/World;Lnet/minecraft/util/BlockPos;Lnet/minecraft/entity/Entity;F)V
[13:41:32] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
[13:41:32] [main/DEBUG] [FML/]: Loaded 195 rules from AccessTransformer config file forge_at.cfg
[13:41:32] [main/DEBUG] [FML/]: Loaded 1 rules from AccessTransformer mod jar file /aternos/server/mods/journeymap-1.12.2-5.5.4.jar!META-INF/journeymap_at.cfg
[13:41:32] [main/DEBUG] [FML/]: Loaded 5 rules from AccessTransformer mod jar file /aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar!META-INF/forgeessentials_at.cfg
[13:41:32] [main/DEBUG] [FML/]: Loaded 9 rules from AccessTransformer mod jar file /aternos/server/mods/llibrary-1.7.7-1.10.2.jar!META-INF/llibrary_at.cfg
[13:41:32] [main/DEBUG] [FML/]: Loaded 9 rules from AccessTransformer mod jar file /aternos/server/mods/BiomesOPlenty-1.10.2-5.0.0.2290-universal.jar!META-INF/biomesoplenty_at.cfg
[13:41:32] [main/DEBUG] [FML/]: Loaded 1 rules from AccessTransformer mod jar file /aternos/server/mods/Decocraft-2.5.2_1.10.2.jar!META-INF/decocraft_at.cfg
[13:41:32] [main/DEBUG] [mixin/]: Adding new mixin transformer proxy #2
[13:41:32] [main/DEBUG] [FML/]: Validating minecraft
[13:41:33] [main/DEBUG] [mixin/]: Preparing mixins for MixinEnvironment[INIT]
[13:41:34] [main/DEBUG] [FML/]: Minecraft validated, launching...
[13:41:34] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
[13:41:34] [main/DEBUG] [FML/]: Injecting coremod llibrary {net.ilexiconn.llibrary.server.core.plugin.LLibraryPlugin} class transformers
[13:41:34] [main/TRACE] [FML/]: Registering transformer net.ilexiconn.llibrary.server.core.plugin.LLibraryTransformer
[13:41:34] [main/TRACE] [FML/]: Registering transformer net.ilexiconn.llibrary.server.core.patcher.LLibraryRuntimePatcher
[13:41:35] [main/INFO] [FML/]: Found runtime patcher net.ilexiconn.llibrary.server.core.patcher.LLibraryRuntimePatcher
[13:41:35] [main/DEBUG] [FML/]: Injection complete
[13:41:35] [main/DEBUG] [FML/]: Running coremod plugin for llibrary {net.ilexiconn.llibrary.server.core.plugin.LLibraryPlugin}
[13:41:35] [main/DEBUG] [FML/]: Running coremod plugin llibrary
[13:41:35] [main/DEBUG] [FML/]: Coremod plugin class LLibraryPlugin run successfully
[13:41:35] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
[13:41:35] [main/DEBUG] [FML/]: Injecting coremod llibrary {net.ilexiconn.llibrary.server.core.plugin.LLibraryPlugin} class transformers
[13:41:35] [main/TRACE] [FML/]: Registering transformer net.ilexiconn.llibrary.server.core.plugin.LLibraryTransformer
[13:41:35] [main/TRACE] [FML/]: Registering transformer net.ilexiconn.llibrary.server.core.patcher.LLibraryRuntimePatcher
[13:41:35] [main/DEBUG] [FML/]: Injection complete
[13:41:35] [main/DEBUG] [FML/]: Running coremod plugin for llibrary {net.ilexiconn.llibrary.server.core.plugin.LLibraryPlugin}
[13:41:35] [main/DEBUG] [FML/]: Running coremod plugin llibrary
[13:41:35] [main/DEBUG] [FML/]: Coremod plugin class LLibraryPlugin run successfully
[13:41:35] [main/INFO] [LaunchWrapper/]: Loading tweak class name net.minecraftforge.fml.common.launcher.TerminalTweaker
[13:41:35] [main/INFO] [LaunchWrapper/]: Loading tweak class name org.spongepowered.asm.launch.MixinTweaker
[13:41:35] [main/INFO] [LaunchWrapper/]: Loading tweak class name org.spongepowered.asm.mixin.MixinEnvironment$EnvironmentStateTweaker
[13:41:35] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.common.launcher.TerminalTweaker
[13:41:35] [main/INFO] [LaunchWrapper/]: Calling tweak class org.spongepowered.asm.launch.MixinTweaker
[13:41:35] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentFML:file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar]
[13:41:35] [main/DEBUG] [mixin/]: Processing prepare() for PlatformAgent[MixinPlatformAgentDefault:file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar]
[13:41:35] [main/DEBUG] [mixin/]: Setting mixin compatibility level: JAVA_8
[13:41:35] [main/WARN] [mixin/]: MixinEnvironment::setCompatibilityLevel is deprecated and will be removed. Set level via config instead!
[13:41:35] [main/DEBUG] [mixin/]: Registering mixin config: mixins.forgeessentials.json
[13:41:35] [main/DEBUG] [mixin/]: Processing launch tasks for PlatformAgent[MixinPlatformAgentFML:file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar]
[13:41:35] [main/DEBUG] [mixin/]: Creating FML remapper adapter: org.spongepowered.asm.bridge.RemapperAdapterFML
[13:41:42] [main/INFO] [mixin/]: Initialised Mixin FML Remapper Adapter with net.minecraftforge.fml.common.asm.transformers.deobf.FMLDeobfuscatingRemapper@5149f008
[13:41:42] [main/DEBUG] [mixin/]: Processing launch tasks for PlatformAgent[MixinPlatformAgentDefault:file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar]
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/forge.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/mods/llibrary-1.7.7-1.10.2.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/mods/1.10.2/llibrary-core-1.0.11-1.12.2.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning asmgen:/ for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/cdi-api-1.1.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/jsr250-api-1.0.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/mysql-connector-java-5.1.22.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/javassist-3.20.0-GA.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/classmate-1.3.0.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/dom4j-1.6.1.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/antlr-2.7.7.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/geronimo-jta_1.1_spec-1.1.1.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/jboss-interceptors-api_1.1_spec-1.0.0.Beta1.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/javax.inject-1.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/pircbotx-2.0.1.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/jandex-2.0.0.Final.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/hibernate-jpa-2.1-api-1.0.0.Final.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/el-api-2.2.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/hibernate-commons-annotations-5.0.1.Final.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/hibernate-core-5.2.2.Final.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/h2-1.3.175.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/jboss-logging-3.3.0.Final.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: Scanning file:/aternos/server/ForgeEssentials/lib/slf4j-api-1.7.5.jar for mixin tweaker
[13:41:42] [main/DEBUG] [mixin/]: injectIntoClassLoader running with 1 agents
[13:41:42] [main/DEBUG] [mixin/]: Processing injectIntoClassLoader() for PlatformAgent[MixinPlatformAgentFML:file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar]
[13:41:42] [main/DEBUG] [mixin/]: Processing injectIntoClassLoader() for PlatformAgent[MixinPlatformAgentDefault:file:/aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar]
[13:41:42] [main/INFO] [LaunchWrapper/]: Calling tweak class org.spongepowered.asm.mixin.MixinEnvironment$EnvironmentStateTweaker
[13:41:42] [main/WARN] [LaunchWrapper/]: Tweak class name org.spongepowered.asm.mixin.MixinEnvironment$EnvironmentStateTweaker has already been visited -- skipping
[13:41:42] [main/DEBUG] [mixin/]: Adding new mixin transformer proxy #3
[13:41:42] [main/INFO] [FML/]: Patching class net/minecraft/server/MinecraftServer
[13:41:42] [main/INFO] [FML/]: Patching method run()V
[13:41:42] [main/INFO] [FML/]: Patching class net/minecraft/server/MinecraftServer
[13:41:42] [main/INFO] [FML/]: Patching method run()V
[13:41:42] [main/DEBUG] [mixin/]: Preparing mixins for MixinEnvironment[DEFAULT]
[13:41:42] [main/DEBUG] [mixin/]: Selecting config mixins.forgeessentials.json
[13:41:42] [main/DEBUG] [mixin/]: Preparing mixins.forgeessentials.json (10)
[13:41:42] [main/DEBUG] [mixin/]: Rebuilding transformer delegation list:
[13:41:42] [main/DEBUG] [mixin/]: Adding: net.minecraftforge.fml.common.asm.transformers.PatchingTransformer
[13:41:42] [main/DEBUG] [mixin/]: Adding: $wrapper.net.minecraftforge.fml.common.asm.transformers.BlamingTransformer
[13:41:42] [main/DEBUG] [mixin/]: Adding: $wrapper.net.minecraftforge.fml.common.asm.transformers.SideTransformer
[13:41:42] [main/DEBUG] [mixin/]: Excluding: $wrapper.net.minecraftforge.fml.common.asm.transformers.EventSubscriptionTransformer
[13:41:42] [main/DEBUG] [mixin/]: Adding: $wrapper.net.minecraftforge.fml.common.asm.transformers.EventSubscriberTransformer
[13:41:42] [main/DEBUG] [mixin/]: Excluding: org.spongepowered.asm.mixin.transformer.MixinTransformer$Proxy
[13:41:42] [main/DEBUG] [mixin/]: Adding: com.forgeessentials.core.preloader.EventTransformer
[13:41:42] [main/DEBUG] [mixin/]: Adding: net.minecraftforge.fml.common.asm.transformers.DeobfuscationTransformer
[13:41:42] [main/DEBUG] [mixin/]: Adding: net.minecraftforge.fml.common.asm.transformers.AccessTransformer
[13:41:42] [main/DEBUG] [mixin/]: Adding: net.minecraftforge.fml.common.asm.transformers.ModAccessTransformer
[13:41:42] [main/DEBUG] [mixin/]: Adding: net.minecraftforge.fml.common.asm.transformers.ItemStackTransformer
[13:41:42] [main/DEBUG] [mixin/]: Excluding: org.spongepowered.asm.mixin.transformer.MixinTransformer$Proxy
[13:41:42] [main/DEBUG] [mixin/]: Adding: $wrapper.net.ilexiconn.llibrary.server.core.plugin.LLibraryTransformer
[13:41:42] [main/DEBUG] [mixin/]: Adding: $wrapper.net.ilexiconn.llibrary.server.core.patcher.LLibraryRuntimePatcher
[13:41:42] [main/DEBUG] [mixin/]: Adding: $wrapper.net.ilexiconn.llibrary.server.core.plugin.LLibraryTransformer
[13:41:42] [main/DEBUG] [mixin/]: Adding: $wrapper.net.ilexiconn.llibrary.server.core.patcher.LLibraryRuntimePatcher
[13:41:42] [main/DEBUG] [mixin/]: Excluding: net.minecraftforge.fml.common.asm.transformers.TerminalTransformer
[13:41:42] [main/DEBUG] [mixin/]: Excluding: org.spongepowered.asm.mixin.transformer.MixinTransformer$Proxy
[13:41:42] [main/DEBUG] [mixin/]: Transformer delegation list created with 13 entries
[13:41:42] [main/DEBUG] [mixin/]: Found name transformer: net.minecraftforge.fml.common.asm.transformers.DeobfuscationTransformer
[13:41:42] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/BlockPortal to metadata cache
[13:41:42] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/BlockFire to metadata cache
[13:41:42] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/BlockEndPortal to metadata cache
[13:41:42] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/command/CommandHandler to metadata cache
[13:41:42] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/entity/Entity to metadata cache
[13:41:43] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/entity/player/EntityPlayer to metadata cache
[13:41:43] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/entity/player/EntityPlayerMP to metadata cache
[13:41:43] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/item/crafting/CraftingManager to metadata cache
[13:41:43] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/network/NetHandlerPlayServer to metadata cache
[13:41:43] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/common/DimensionManager to metadata cache
[13:41:43] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/fe/event/world/FireEvent$Destroy to metadata cache
[13:41:43] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/fe/event/world/FireEvent$Spread to metadata cache
[13:41:43] [main/TRACE] [mixin/]: Added class metadata for com/forgeessentials/api/UserIdent$NpcUserIdent to metadata cache
[13:41:43] [main/DEBUG] [mixin/]: Prepared 10 mixins in 1.111 sec (111.1 msec avg.)
[13:41:43] [main/DEBUG] [mixin/]: Mixing command.MixinCommandHandler from mixins.forgeessentials.json into net.minecraft.command.CommandHandler
[13:41:43] [main/TRACE] [mixin/]: Added class metadata for com/forgeessentials/core/misc/PermissionManager to metadata cache
[13:41:43] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/server/permission/PermissionAPI to metadata cache
[13:41:43] [main/TRACE] [mixin/]: Added class metadata for com/forgeessentials/util/DoAsCommandSender to metadata cache
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for com/forgeessentials/api/UserIdent to metadata cache
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/command/ICommandSender to metadata cache
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/event/CommandEvent to metadata cache
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/util/text/TextComponentTranslation to metadata cache
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/fml/common/eventhandler/Event to metadata cache
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/util/text/TextComponentBase to metadata cache
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/command/CommandException to metadata cache
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/command/WrongUsageException to metadata cache
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for java/lang/Exception to metadata cache
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for java/lang/Throwable to metadata cache
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/command/SyntaxErrorException to metadata cache
[13:41:44] [main/DEBUG] [mixin/]: Mixing entity.MixinEntity from mixins.forgeessentials.json into net.minecraft.entity.Entity
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/common/MinecraftForge to metadata cache
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/fe/event/world/PressurePlateEvent to metadata cache
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/event/entity/EntityEvent to metadata cache
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/fml/common/eventhandler/EventBus to metadata cache
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for java/util/List to metadata cache
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for java/util/ArrayList to metadata cache
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for java/util/AbstractList to metadata cache
[13:41:44] [main/TRACE] [mixin/]: Added class metadata for java/util/AbstractCollection to metadata cache
[13:41:45] [main/DEBUG] [mixin/]: Mixing entity.player.MixinEntityPlayer from mixins.forgeessentials.json into net.minecraft.entity.player.EntityPlayer
[13:41:45] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/entity/EntityLivingBase to metadata cache
[13:41:45] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/entity/player/PlayerCapabilities to metadata cache
[13:41:45] [main/TRACE] [mixin/]: Added class metadata for java/lang/String to metadata cache
[13:41:45] [main/INFO] [LaunchWrapper/]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
[13:41:48] [main/DEBUG] [mixin/]: Mixing block.MixinBlockFire from mixins.forgeessentials.json into net.minecraft.block.BlockFire
[13:41:48] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/Block to metadata cache
[13:41:48] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/fml/common/registry/IForgeRegistryEntry$Impl to metadata cache
[13:41:48] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/fe/event/world/FireEvent to metadata cache
[13:41:48] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/event/world/BlockEvent to metadata cache
[13:41:48] [main/TRACE] [mixin/]: Added class metadata for org/spongepowered/asm/mixin/injection/callback/CallbackInfo to metadata cache
[13:41:48] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/util/EnumFacing to metadata cache
[13:41:48] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/util/math/BlockPos to metadata cache
[13:41:48] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/world/World to metadata cache
[13:41:49] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/fml/common/registry/IForgeRegistryEntry to metadata cache
[13:41:51] [main/DEBUG] [mixin/]: Mixing block.MixinBlockPortal from mixins.forgeessentials.json into net.minecraft.block.BlockPortal
[13:41:51] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/BlockBreakable to metadata cache
[13:41:51] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/util/math/Vec3i to metadata cache
[13:41:51] [main/TRACE] [mixin/]: Added class metadata for java/lang/Comparable to metadata cache
[13:41:51] [main/TRACE] [mixin/]: Added class metadata for net/minecraftforge/fe/event/entity/EntityPortalEvent to metadata cache
[13:41:51] [main/DEBUG] [mixin/]: Mixing block.MixinBlockEndPortal from mixins.forgeessentials.json into net.minecraft.block.BlockEndPortal
[13:41:51] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/BlockContainer to metadata cache
[13:41:51] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/state/IBlockState to metadata cache
[13:41:51] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/state/IBlockBehaviors to metadata cache
[13:41:51] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/state/IBlockProperties to metadata cache
[13:41:51] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/util/math/AxisAlignedBB to metadata cache
[13:41:51] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/block/ITileEntityProvider to metadata cache
[13:41:54] [main/DEBUG] [mixin/]: Mixing entity.player.MixinEntityPlayerMP from mixins.forgeessentials.json into net.minecraft.entity.player.EntityPlayerMP
[13:41:56] [main/DEBUG] [mixin/]: Mixing item.crafting.MixinCraftingManager from mixins.forgeessentials.json into net.minecraft.item.crafting.CraftingManager
[13:41:56] [main/TRACE] [mixin/]: Added class metadata for com/forgeessentials/protection/ModuleProtection to metadata cache
[13:41:56] [main/TRACE] [mixin/]: Added class metadata for java/util/Iterator to metadata cache
[13:41:56] [main/TRACE] [mixin/]: Added class metadata for net/minecraft/item/crafting/IRecipe to metadata cache
[13:41:57] [main/DEBUG] [FML/]: Creating vanilla freeze snapshot
[13:41:57] [main/DEBUG] [FML/]: Vanilla freeze snapshot created
[13:41:58] [Server thread/INFO] [FML/]: MinecraftForge v12.18.3.2511 Initialized
[13:41:59] [Server thread/INFO] [FML/]: Replaced 231 ore recipes
[13:41:59] [Server thread/DEBUG] [FML/]: File /aternos/server/config/injectedDependencies.json not found. No dependencies injected
[13:41:59] [Server thread/DEBUG] [FML/]: Building injected Mod Containers [net.minecraftforge.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer]
[13:42:00] [Server thread/DEBUG] [FML/]: Attempting to load mods contained in the minecraft jar file and associated classes
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/forge.jar, examining for mod candidates
[13:42:00] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/forgeessentials-1.10.2-10.3.1380-server.jar
[13:42:00] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/llibrary-1.7.7-1.10.2.jar
[13:42:00] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/1.10.2/llibrary-core-1.0.11-1.12.2.jar
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/cdi-api-1.1.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/jsr250-api-1.0.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/mysql-connector-java-5.1.22.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/javassist-3.20.0-GA.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/classmate-1.3.0.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/dom4j-1.6.1.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/antlr-2.7.7.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/geronimo-jta_1.1_spec-1.1.1.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/jboss-interceptors-api_1.1_spec-1.0.0.Beta1.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/javax.inject-1.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/pircbotx-2.0.1.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/jandex-2.0.0.Final.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/hibernate-jpa-2.1-api-1.0.0.Final.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/el-api-2.2.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/hibernate-commons-annotations-5.0.1.Final.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/hibernate-core-5.2.2.Final.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/h2-1.3.175.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/jboss-logging-3.3.0.Final.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/ForgeEssentials/lib/slf4j-api-1.7.5.jar, examining for mod candidates
[13:42:00] [Server thread/DEBUG] [FML/]: Minecraft jar mods loaded successfully
[13:42:00] [Server thread/INFO] [FML/]: Found 0 mods from the command line. Injecting into mod discoverer
[13:42:00] [Server thread/INFO] [FML/]: Searching /aternos/server/mods for mods
[13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate mod directory 1.10.2
[13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file BiomesOPlenty-1.10.2-5.0.0.2290-universal.jar
[13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file CustomMobSpawner 3.10.1.jar
[13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Decocraft-2.5.2_1.10.2.jar
[13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file DrZhark\'s Mo\'Creatures Mod-10.0.6.jar
[13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file forgeessentials-1.10.2-10.3.1380-server.jar
[13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file journeymap-1.12.2-5.5.4.jar
[13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file JurassiCraft-2.1.3-Fix.jar
[13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file llibrary-1.7.7-1.10.2.jar
[13:42:00] [Server thread/DEBUG] [FML/]: Found a candidate mod directory memory_repo
[13:42:00] [Server thread/INFO] [FML/]: Also searching /aternos/server/mods/1.10.2 for mods
[13:42:00] [Server thread/TRACE] [FML/]: Skipping already parsed coremod or tweaker llibrary-core-1.0.11-1.12.2.jar
[13:42:00] [Server thread/DEBUG] [FML/]: Examining file forge.jar for potential mods
[13:42:00] [Server thread/DEBUG] [FML/]: The mod container forge.jar appears to be missing an mcmod.info file
[13:42:02] [Server thread/DEBUG] [FML/]: Examining file cdi-api-1.1.jar for potential mods
[13:42:02] [Server thread/DEBUG] [FML/]: The mod container cdi-api-1.1.jar appears to be missing an mcmod.info file
[13:42:02] [Server thread/DEBUG] [FML/]: Examining file jsr250-api-1.0.jar for potential mods
[13:42:02] [Server thread/DEBUG] [FML/]: The mod container jsr250-api-1.0.jar appears to be missing an mcmod.info file
[13:42:02] [Server thread/DEBUG] [FML/]: Examining file mysql-connector-java-5.1.22.jar for potential mods
[13:42:02] [Server thread/DEBUG] [FML/]: The mod container mysql-connector-java-5.1.22.jar appears to be missing an mcmod.info file
[13:42:03] [Server thread/DEBUG] [FML/]: Examining file javassist-3.20.0-GA.jar for potential mods
[13:42:03] [Server thread/DEBUG] [FML/]: The mod container javassist-3.20.0-GA.jar appears to be missing an mcmod.info file
[13:42:03] [Server thread/DEBUG] [FML/]: Examining file classmate-1.3.0.jar for potential mods
[13:42:03] [Server thread/DEBUG] [FML/]: The mod container classmate-1.3.0.jar appears to be missing an mcmod.info file
[13:42:03] [Server thread/DEBUG] [FML/]: Examining file dom4j-1.6.1.jar for potential mods
[13:42:03] [Server thread/DEBUG] [FML/]: The mod container dom4j-1.6.1.jar appears to be missing an mcmod.info file
[13:42:03] [Server thread/DEBUG] [FML/]: Examining file antlr-2.7.7.jar for potential mods
[13:42:03] [Server thread/DEBUG] [FML/]: The mod container antlr-2.7.7.jar appears to be missing an mcmod.info file
[13:42:04] [Server thread/DEBUG] [FML/]: Examining file geronimo-jta_1.1_spec-1.1.1.jar for potential mods
[13:42:04] [Server thread/DEBUG] [FML/]: The mod container geronimo-jta_1.1_spec-1.1.1.jar appears to be missing an mcmod.info file
[13:42:04] [Server thread/DEBUG] [FML/]: Examining file jboss-interceptors-api_1.1_spec-1.0.0.Beta1.jar for potential mods
[13:42:04] [Server thread/DEBUG] [FML/]: The mod container jboss-interceptors-api_1.1_spec-1.0.0.Beta1.jar appears to be missing an mcmod.info file
[13:42:04] [Server thread/DEBUG] [FML/]: Examining file javax.inject-1.jar for potential mods
[13:42:04] [Server thread/DEBUG] [FML/]: The mod container javax.inject-1.jar appears to be missing an mcmod.info file
[13:42:04] [Server thread/DEBUG] [FML/]: Examining file pircbotx-2.0.1.jar for potential mods
[13:42:04] [Server thread/DEBUG] [FML/]: The mod container pircbotx-2.0.1.jar appears to be missing an mcmod.info file
[13:42:04] [Server thread/DEBUG] [FML/]: Examining file jandex-2.0.0.Final.jar for potential mods
[13:42:04] [Server thread/DEBUG] [FML/]: The mod container jandex-2.0.0.Final.jar appears to be missing an mcmod.info file
[13:42:04] [Server thread/DEBUG] [FML/]: Examining file hibernate-jpa-2.1-api-1.0.0.Final.jar for potential mods
[13:42:04] [Server thread/DEBUG] [FML/]: The mod container hibernate-jpa-2.1-api-1.0.0.Final.jar appears to be missing an mcmod.info file
[13:42:04] [Server thread/DEBUG] [FML/]: Examining file el-api-2.2.jar for potential mods
[13:42:04] [Server thread/DEBUG] [FML/]: The mod container el-api-2.2.jar appears to be missing an mcmod.info file
[13:42:04] [Server thread/DEBUG] [FML/]: Examining file hibernate-commons-annotations-5.0.1.Final.jar for potential mods
[13:42:04] [Server thread/DEBUG] [FML/]: The mod container hibernate-commons-annotations-5.0.1.Final.jar appears to be missing an mcmod.info file
[13:42:04] [Server thread/DEBUG] [FML/]: Examining file hibernate-core-5.2.2.Final.jar for potential mods
[13:42:04] [Server thread/DEBUG] [FML/]: The mod container hibernate-core-5.2.2.Final.jar appears to be missing an mcmod.info file
[13:42:08] [Server thread/DEBUG] [FML/]: Examining file h2-1.3.175.jar for potential mods
[13:42:08] [Server thread/DEBUG] [FML/]: The mod container h2-1.3.175.jar appears to be missing an mcmod.info file
[13:42:09] [Server thread/DEBUG] [FML/]: Examining file jboss-logging-3.3.0.Final.jar for potential mods
[13:42:09] [Server thread/DEBUG] [FML/]: The mod container jboss-logging-3.3.0.Final.jar appears to be missing an mcmod.info file
[13:42:09] [Server thread/DEBUG] [FML/]: Examining file slf4j-api-1.7.5.jar for potential mods
[13:42:09] [Server thread/DEBUG] [FML/]: The mod container slf4j-api-1.7.5.jar appears to be missing an mcmod.info file
[13:42:09] [Server thread/DEBUG] [FML/]: Examining directory 1.10.2 for potential mods
[13:42:09] [Server thread/DEBUG] [FML/]: No mcmod.info file found in directory 1.10.2
[13:42:09] [Server thread/DEBUG] [FML/]: Examining file BiomesOPlenty-1.10.2-5.0.0.2290-universal.jar for potential mods
[13:42:09] [Server thread/TRACE] [FML/]: Located mcmod.info file in file BiomesOPlenty-1.10.2-5.0.0.2290-universal.jar
[13:42:09] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (biomesoplenty.core.BiomesOPlenty) - loading
[13:42:09] [Server thread/WARN] [FML/]: ****************************************
[13:42:09] [Server thread/WARN] [FML/]: * The modid BiomesOPlenty is not the same as it\'s lowercase version. Lowercasing will be enforced in 1.11
[13:42:09] [Server thread/WARN] [FML/]: * at net.minecraftforge.fml.common.FMLModContainer.sanityCheckModId(FMLModContainer.java:143)
[13:42:09] [Server thread/WARN] [FML/]: * at net.minecraftforge.fml.common.FMLModContainer.&lt;init&gt;(FMLModContainer.java:128)
[13:42:09] [Server thread/WARN] [FML/]: * at sun.reflect.NativeConstructorAccessorImpl.newInstance0(Native Method)
[13:42:09] [Server thread/WARN] [FML/]: * at sun.reflect.NativeConstructorAccessorImpl.newInstance(NativeConstructorAccessorImpl.java:62)
[13:42:09] [Server thread/WARN] [FML/]: * at sun.reflect.DelegatingConstructorAccessorImpl.newInstance(DelegatingConstructorAccessorImpl.java:45)
[13:42:09] [Server thread/WARN] [FML/]: * at java.lang.reflect.Constructor.newInstance(Constructor.java:423)...
[13:42:09] [Server thread/WARN] [FML/]: ****************************************
[13:42:09] [Server thread/TRACE] [BiomesOPlenty/]: Parsed dependency info : [Forge@[12.18.1.2039,)] [Forge@[12.18.1.2039,)] []
[13:42:09] [Server thread/DEBUG] [FML/]: Examining file CustomMobSpawner 3.10.1.jar for potential mods
[13:42:09] [Server thread/TRACE] [FML/]: Located mcmod.info file in file CustomMobSpawner 3.10.1.jar
[13:42:09] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (drzhark.customspawner.CustomSpawner) - loading
[13:42:09] [Server thread/TRACE] [customspawner/]: Parsed dependency info : [] [] []
[13:42:09] [Server thread/DEBUG] [FML/]: Examining file Decocraft-2.5.2_1.10.2.jar for potential mods
[13:42:09] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Decocraft-2.5.2_1.10.2.jar
[13:42:09] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (com.mia.craftstudio.minecraft.forge.CSLibMod) - loading
[13:42:09] [Server thread/WARN] [FML/]: ****************************************
[13:42:09] [Server thread/WARN] [FML/]: * The modid PTRModelLib is not the same as it\'s lowercase version. Lowercasing will be enforced in 1.11
[13:42:09] [Server thread/WARN] [FML/]: * at net.minecraftforge.fml.common.FMLModContainer.sanityCheckModId(FMLModContainer.java:143)
[13:42:09] [Server thread/WARN] [FML/]: * at net.minecraftforge.fml.common.FMLModContainer.&lt;init&gt;(FMLModContainer.java:128)
[13:42:09] [Server thread/WARN] [FML/]: * at sun.reflect.NativeConstructorAccessorImpl.newInstance0(Native Method)
[13:42:09] [Server thread/WARN] [FML/]: * at sun.reflect.NativeConstructorAccessorImpl.newInstance(NativeConstructorAccessorImpl.java:62)
[13:42:09] [Server thread/WARN] [FML/]: * at sun.reflect.DelegatingConstructorAccessorImpl.newInstance(DelegatingConstructorAccessorImpl.java:45)
[13:42:09] [Server thread/WARN] [FML/]: * at java.lang.reflect.Constructor.newInstance(Constructor.java:423)...
[13:42:09] [Server thread/WARN] [FML/]: ****************************************
[13:42:09] [Server thread/TRACE] [PTRModelLib/]: Parsed dependency info : [] [] []
[13:42:10] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (com.mia.props.Props) - loading
[13:42:10] [Server thread/TRACE] [props/]: Parsed dependency info : [] [PTRModelLib@[1.0.0,)] []
[13:42:10] [Server thread/DEBUG] [FML/]: Examining file DrZhark\'s Mo\'Creatures Mod-10.0.6.jar for potential mods
[13:42:10] [Server thread/TRACE] [FML/]: Located mcmod.info file in file DrZhark\'s Mo\'Creatures Mod-10.0.6.jar
[13:42:10] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (drzhark.mocreatures.MoCreatures) - loading
[13:42:10] [Server thread/TRACE] [mocreatures/]: Using mcmod dependency info : [] [CustomSpawner] []
[13:42:10] [Server thread/DEBUG] [FML/]: Examining file forgeessentials-1.10.2-10.3.1380-server.jar for potential mods
[13:42:10] [Server thread/TRACE] [FML/]: Located mcmod.info file in file forgeessentials-1.10.2-10.3.1380-server.jar
[13:42:10] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (com.forgeessentials.core.ForgeEssentials) - loading
[13:42:10] [Server thread/TRACE] [forgeessentials/]: Parsed dependency info : [Forge] [Forge, WorldEdit] []
[13:42:11] [Server thread/DEBUG] [FML/]: Examining file journeymap-1.12.2-5.5.4.jar for potential mods
[13:42:11] [Server thread/TRACE] [FML/]: Located mcmod.info file in file journeymap-1.12.2-5.5.4.jar
[13:42:11] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (journeymap.common.Journeymap) - loading
[13:42:11] [Server thread/TRACE] [journeymap/]: Using mcmod dependency info : [] [Forge@[14.23.5.2768,)] []
[13:42:11] [Server thread/DEBUG] [FML/]: Examining file JurassiCraft-2.1.3-Fix.jar for potential mods
[13:42:11] [Server thread/TRACE] [FML/]: Located mcmod.info file in file JurassiCraft-2.1.3-Fix.jar
[13:42:11] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (org.jurassicraft.JurassiCraft) - loading
[13:42:11] [Server thread/TRACE] [jurassicraft/]: Parsed dependency info : [llibrary@[1.7.7,)] [llibrary@[1.7.7,)] []
[13:42:12] [Server thread/DEBUG] [FML/]: Examining file llibrary-1.7.7-1.10.2.jar for potential mods
[13:42:12] [Server thread/TRACE] [FML/]: Located mcmod.info file in file llibrary-1.7.7-1.10.2.jar
[13:42:12] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (net.ilexiconn.llibrary.LLibrary) - loading
[13:42:12] [Server thread/TRACE] [llibrary/]: Parsed dependency info : [] [] []
[13:42:12] [Server thread/DEBUG] [FML/]: Examining directory memory_repo for potential mods
[13:42:12] [Server thread/DEBUG] [FML/]: No mcmod.info file found in directory memory_repo
[13:42:12] [Server thread/TRACE] [FML/]: Recursing into package net
[13:42:12] [Server thread/TRACE] [FML/]: Recursing into package net/ilexiconn
[13:42:12] [Server thread/TRACE] [FML/]: Recursing into package net/ilexiconn/llibrary-core
[13:42:12] [Server thread/TRACE] [FML/]: Recursing into package net/ilexiconn/llibrary-core/1.0.11-1.12.2
[13:42:12] [Server thread/INFO] [FML/]: Forge Mod Loader has identified 12 mods to load
[13:42:12] [Server thread/DEBUG] [FML/]: Found API com.forgeessentials.api.remote (owned by ForgeEssentials providing ForgeEssentialsAPI|Remote) embedded in forgeessentials
[13:42:12] [Server thread/DEBUG] [FML/]: Found API journeymap.client.api.util (owned by journeymap providing journeymap|client-api-util) embedded in journeymap
[13:42:12] [Server thread/DEBUG] [FML/]: Found API com.forgeessentials.api (owned by ForgeEssentials providing ForgeEssentialsAPI) embedded in forgeessentials
[13:42:12] [Server thread/DEBUG] [FML/]: Found API journeymap.client.api.event (owned by journeymap providing journeymap|client-api-event) embedded in journeymap
[13:42:12] [Server thread/DEBUG] [FML/]: Found API journeymap.client.api.model (owned by journeymap providing journeymap|client-api-model) embedded in journeymap
[13:42:12] [Server thread/DEBUG] [FML/]: Found API com.mia.craftstudio (owned by PTRModelLib providing CSLib|API) embedded in PTRModelLib
[13:42:12] [Server thread/DEBUG] [FML/]: Found API com.mia.craftstudio (owned by PTRModelLib providing CSLib|API) embedded in props
[13:42:12] [Server thread/DEBUG] [FML/]: Found API com.forgeessentials.api.permissions (owned by ForgeEssentials providing ForgeEssentialsAPI|Perms) embedded in forgeessentials
[13:42:12] [Server thread/DEBUG] [FML/]: Found API journeymap.client.api.display (owned by journeymap providing journeymap|client-api-display) embedded in journeymap
[13:42:12] [Server thread/DEBUG] [FML/]: Found API com.forgeessentials.api.economy (owned by ForgeEssentials providing ForgeEssentialsAPI|Economy) embedded in forgeessentials
[13:42:12] [Server thread/DEBUG] [FML/]: Found API net.minecraftforge.fe (owned by ForgeEssentials providing Forge-FEHooks) embedded in forgeessentials
[13:42:12] [Server thread/DEBUG] [FML/]: Found API journeymap.client.api (owned by journeymap providing journeymap|client-api) embedded in journeymap
[13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API journeymap|client-api-model: owner: journeymap, dependents: []
[13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API journeymap|client-api-display: owner: journeymap, dependents: []
[13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API journeymap|client-api: owner: journeymap, dependents: []
[13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API journeymap|client-api-event: owner: journeymap, dependents: []
[13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ForgeEssentialsAPI|Economy: owner: ForgeEssentials, dependents: [forgeessentials]
[13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ForgeEssentialsAPI|Perms: owner: ForgeEssentials, dependents: [forgeessentials]
[13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ForgeEssentialsAPI|Remote: owner: ForgeEssentials, dependents: [forgeessentials]
[13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API journeymap|client-api-util: owner: journeymap, dependents: []
[13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ForgeEssentialsAPI: owner: ForgeEssentials, dependents: [forgeessentials]
[13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API Forge-FEHooks: owner: ForgeEssentials, dependents: [forgeessentials]
[13:42:12] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CSLib|API: owner: PTRModelLib, dependents: [props]
[13:42:12] [Server thread/TRACE] [FML/]: Received a system property request \'\'
[13:42:12] [Server thread/TRACE] [FML/]: System property request managing the state of 0 mods
[13:42:12] [Server thread/DEBUG] [FML/]: After merging, found state information for 0 mods
[13:42:12] [Server thread/DEBUG] [BiomesOPlenty/]: Enabling mod BiomesOPlenty
[13:42:12] [Server thread/DEBUG] [customspawner/]: Enabling mod customspawner
[13:42:12] [Server thread/DEBUG] [PTRModelLib/]: Enabling mod PTRModelLib
[13:42:12] [Server thread/DEBUG] [props/]: Enabling mod props
[13:42:12] [Server thread/DEBUG] [mocreatures/]: Enabling mod mocreatures
[13:42:12] [Server thread/DEBUG] [forgeessentials/]: Enabling mod forgeessentials
[13:42:12] [Server thread/DEBUG] [journeymap/]: Enabling mod journeymap
[13:42:12] [Server thread/DEBUG] [jurassicraft/]: Enabling mod jurassicraft
[13:42:12] [Server thread/DEBUG] [llibrary/]: Enabling mod llibrary
[13:42:12] [Server thread/TRACE] [FML/]: Verifying mod requirements are satisfied
[13:42:12] [Server thread/ERROR] [FML/]: The mod journeymap does not wish to run in Minecraft version Minecraft 1.10.2. You will have to remove it to play.
[13:42:12] [Server thread/ERROR] [FML/]: Wrong Minecraft version for journeymap
[13:42:12] [Server thread/DEBUG] [FML/]: Mod sorting data
[13:42:12] [Server thread/DEBUG] [FML/]: BiomesOPlenty(Biomes O\' Plenty:5.0.0.2290): BiomesOPlenty-1.10.2-5.0.0.2290-universal.jar (required-after:Forge@[12.18.1.2039,))
[13:42:12] [Server thread/DEBUG] [FML/]: customspawner(DrZhark\'s CustomSpawner:3.10.1): CustomMobSpawner 3.10.1.jar ()
[13:42:12] [Server thread/DEBUG] [FML/]: PTRModelLib(PTRModelLib:1.0.0): Decocraft-2.5.2_1.10.2.jar ()
[13:42:12] [Server thread/DEBUG] [FML/]: props(Decocraft:2.5.2): Decocraft-2.5.2_1.10.2.jar (after:PTRModelLib@[1.0.0,))
[13:42:12] [Server thread/DEBUG] [FML/]: mocreatures(DrZhark\'s Mo\'Creatures Mod:10.0.6): DrZhark\'s Mo\'Creatures Mod-10.0.6.jar ()
[13:42:12] [Server thread/DEBUG] [FML/]: forgeessentials(Forge Essentials:10.3): forgeessentials-1.10.2-10.3.1380-server.jar (required-after:Forge;after:WorldEdit)
[13:42:12] [Server thread/DEBUG] [FML/]: journeymap(JourneyMap:1.12.2-5.5.4): journeymap-1.12.2-5.5.4.jar ()
[13:42:12] [Server thread/DEBUG] [FML/]: jurassicraft(JurassiCraft:2.1.3): JurassiCraft-2.1.3-Fix.jar (required-after:llibrary@[1.7.7,))
[13:42:12] [Server thread/DEBUG] [FML/]: llibrary(LLibrary:1.7.7): llibrary-1.7.7-1.10.2.jar ()
[13:42:12] [Server thread/WARN] [FML/]: Can\'t revert to frozen GameData state without freezing first.
[13:42:12] [Server thread/TRACE] [mcp/mcp]: Sending event FMLServerStoppedEvent to mod mcp
[13:42:12] [Server thread/TRACE] [mcp/mcp]: Sent event FMLServerStoppedEvent to mod mcp
[13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Minecraft Coder Pack took 0.002s
[13:42:12] [Server thread/TRACE] [FML/FML]: Sending event FMLServerStoppedEvent to mod FML
[13:42:12] [Server thread/TRACE] [FML/FML]: Sent event FMLServerStoppedEvent to mod FML
[13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Forge Mod Loader took 0.002s
[13:42:12] [Server thread/TRACE] [Forge/Forge]: Sending event FMLServerStoppedEvent to mod Forge
[13:42:12] [Server thread/TRACE] [Forge/Forge]: Sent event FMLServerStoppedEvent to mod Forge
[13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Minecraft Forge took 0.001s
[13:42:12] [Server thread/TRACE] [BiomesOPlenty/BiomesOPlenty]: Sending event FMLServerStoppedEvent to mod BiomesOPlenty
[13:42:12] [Server thread/TRACE] [BiomesOPlenty/BiomesOPlenty]: Sent event FMLServerStoppedEvent to mod BiomesOPlenty
[13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Biomes O\' Plenty took 0.001s
[13:42:12] [Server thread/TRACE] [customspawner/customspawner]: Sending event FMLServerStoppedEvent to mod customspawner
[13:42:12] [Server thread/TRACE] [customspawner/customspawner]: Sent event FMLServerStoppedEvent to mod customspawner
[13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - DrZhark\'s CustomSpawner took 0.000s
[13:42:12] [Server thread/TRACE] [PTRModelLib/PTRModelLib]: Sending event FMLServerStoppedEvent to mod PTRModelLib
[13:42:12] [Server thread/TRACE] [PTRModelLib/PTRModelLib]: Sent event FMLServerStoppedEvent to mod PTRModelLib
[13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - PTRModelLib took 0.000s
[13:42:12] [Server thread/TRACE] [props/props]: Sending event FMLServerStoppedEvent to mod props
[13:42:12] [Server thread/TRACE] [props/props]: Sent event FMLServerStoppedEvent to mod props
[13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Decocraft took 0.000s
[13:42:12] [Server thread/TRACE] [mocreatures/mocreatures]: Sending event FMLServerStoppedEvent to mod mocreatures
[13:42:12] [Server thread/TRACE] [mocreatures/mocreatures]: Sent event FMLServerStoppedEvent to mod mocreatures
[13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - DrZhark\'s Mo\'Creatures Mod took 0.000s
[13:42:12] [Server thread/TRACE] [forgeessentials/forgeessentials]: Sending event FMLServerStoppedEvent to mod forgeessentials
[13:42:12] [Server thread/TRACE] [forgeessentials/forgeessentials]: Sent event FMLServerStoppedEvent to mod forgeessentials
[13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Forge Essentials took 0.000s
[13:42:12] [Server thread/TRACE] [journeymap/journeymap]: Sending event FMLServerStoppedEvent to mod journeymap
[13:42:12] [Server thread/TRACE] [journeymap/journeymap]: Sent event FMLServerStoppedEvent to mod journeymap
[13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - JourneyMap took 0.004s
[13:42:12] [Server thread/TRACE] [jurassicraft/jurassicraft]: Sending event FMLServerStoppedEvent to mod jurassicraft
[13:42:12] [Server thread/TRACE] [jurassicraft/jurassicraft]: Sent event FMLServerStoppedEvent to mod jurassicraft
[13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - JurassiCraft took 0.001s
[13:42:12] [Server thread/TRACE] [llibrary/llibrary]: Sending event FMLServerStoppedEvent to mod llibrary
[13:42:12] [Server thread/TRACE] [llibrary/llibrary]: Sent event FMLServerStoppedEvent to mod llibrary
[13:42:12] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - LLibrary took 0.001s
[13:42:12] [Server thread/DEBUG] [FML/]: Bar Finished: ServerStopped took 0.012s
[13:42:12] [Server thread/INFO] [FML/]: The state engine was in incorrect state CONSTRUCTING and forced into state SERVER_STOPPED. Errors may have been discarded.
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVersionInformation Object
                (
                    [label:protected] => Forge version
                    [value:protected] => 12.18.3.2511
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [13:41:58] [Server thread/INFO] [FML/]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [13:41:58] [Server thread/INFO] [FML/]: MinecraftForge v12.18.3.2511 Initialized
                                            [number:protected] => 280
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModWrongMinecraftVersionProblem Object
                (
                    [minecraftVersion:protected] => 1.10.2
                    [modName:protected] => journeymap
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution Object
                                (
                                    [modName:protected] => journeymap
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ForgeInstallDifferentVersionSolution Object
                                (
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [13:42:12] [Server thread/ERROR] [FML/]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [13:42:12] [Server thread/ERROR] [FML/]: The mod journeymap does not wish to run in Minecraft version Minecraft 1.10.2. You will have to remove it to play.
                                            [number:protected] => 460
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));
    }
}