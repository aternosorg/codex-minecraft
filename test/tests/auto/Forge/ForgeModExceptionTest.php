<?php

class ForgeModExceptionTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-mod-exception.log");
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
                    [prefix:protected] => [22:50:06] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:06] [main/DEBUG] [FML/]: Injecting tracing printstreams for STDOUT/STDERR.
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/INFO] [FML/]: Forge Mod Loader version 7.99.40.1614 for Minecraft 1.7.10 loading
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/INFO] [FML/]: Java is Java HotSpot(TM) 64-Bit Server VM, version 1.8.0_144, running on Linux:amd64:4.4.0-131-generic, installed at /aternos/bin/jdk1.8.0_144/jre
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Java classpath at launch is forge.jar
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Java library path at launch is /usr/java/packages/lib/amd64:/usr/lib64:/lib64:/lib:/usr/lib
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Enabling runtime deobfuscation
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Instantiating coremod class FMLCorePlugin
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Added access transformer class cpw.mods.fml.common.asm.transformers.AccessTransformer to enqueued access transformers
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Enqueued coremod FMLCorePlugin
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Instantiating coremod class FMLForgePlugin
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Added access transformer class net.minecraftforge.transformers.ForgeAccessTransformer to enqueued access transformers
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Enqueued coremod FMLForgePlugin
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: All fundamental core mods are successfully located
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Attempting to load commandline specified mods, relative to /aternos/server/.
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Discovering coremods
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Examining for coremod candidacy IC2Classic Version **.**.**.**.jar
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Not found coremod data in IC2Classic Version **.**.**.**.jar
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Examining for coremod candidacy ironchest-1.7.10-6.0.62.742-universal.jar
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Not found coremod data in ironchest-1.7.10-6.0.62.742-universal.jar
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Examining for coremod candidacy twilightforest-1.7.10-2.3.7.jar
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Not found coremod data in twilightforest-1.7.10-2.3.7.jar
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Examining for coremod candidacy Xaeros_Minimap_1.16_Forge_1.7.10.jar
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Not found coremod data in Xaeros_Minimap_1.16_Forge_1.7.10.jar
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/INFO] [LaunchWrapper/]: Loading tweak class name cpw.mods.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/INFO] [LaunchWrapper/]: Loading tweak class name cpw.mods.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Injecting coremod FMLCorePlugin {cpw.mods.fml.relauncher.FMLCorePlugin} class transformers
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/TRACE] [FML/]: Registering transformer cpw.mods.fml.common.asm.transformers.MarkerTransformer
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/TRACE] [FML/]: Registering transformer cpw.mods.fml.common.asm.transformers.SideTransformer
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/TRACE] [FML/]: Registering transformer cpw.mods.fml.common.asm.transformers.EventSubscriptionTransformer
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Running coremod plugin for FMLCorePlugin {cpw.mods.fml.relauncher.FMLCorePlugin}
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:07] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:07] [main/DEBUG] [FML/]: Running coremod plugin FMLCorePlugin
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:11] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:11] [main/DEBUG] [FML/]: Read 527 binary patches
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:12] [main/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:12] [main/INFO] [FML/]: Found valid fingerprint for Minecraft Forge. Certificate fingerprint e3c3d50c7c986df74c645c0ac54639741c90a557
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:12] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:12] [main/DEBUG] [FML/]: Coremod plugin class FMLCorePlugin run successfully
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:12] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:12] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:12] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:12] [main/DEBUG] [FML/]: Injecting coremod FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin} class transformers
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:12] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:12] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.classloading.FluidIdTransformer
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:12] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:12] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:12] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:12] [main/DEBUG] [FML/]: Running coremod plugin for FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin}
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:12] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:12] [main/DEBUG] [FML/]: Running coremod plugin FMLForgePlugin
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:12] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:12] [main/DEBUG] [FML/]: Coremod plugin class FMLForgePlugin run successfully
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:12] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:12] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:13] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:13] [main/DEBUG] [FML/]: Loaded 57 rules from AccessTransformer config file fml_at.cfg
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:13] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:13] [main/DEBUG] [FML/]: Loaded 89 rules from AccessTransformer config file forge_at.cfg
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:13] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:13] [main/DEBUG] [FML/]: Validating minecraft
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:15] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:15] [main/DEBUG] [FML/]: Minecraft validated, launching...
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:15] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:15] [main/INFO] [LaunchWrapper/]: Loading tweak class name cpw.mods.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:15] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:15] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:16] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:16] [main/INFO] [LaunchWrapper/]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:26] [Server thread/INFO] [MinecraftForge/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:26] [Server thread/INFO] [MinecraftForge/]: Attempting early MinecraftForge initialization
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:26] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:26] [Server thread/INFO] [FML/]: MinecraftForge v10.13.4.1614 Initialized
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:26] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:26] [Server thread/INFO] [FML/]: Replaced 183 ore recipies
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:27] [Server thread/INFO] [MinecraftForge/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:27] [Server thread/INFO] [MinecraftForge/]: Completed early MinecraftForge initialization
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:27] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:27] [Server thread/DEBUG] [FML/]: File /aternos/server/config/injectedDependencies.json not found. No dependencies injected
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:27] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:27] [Server thread/DEBUG] [FML/]: Building injected Mod Containers [cpw.mods.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer]
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:27] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:27] [Server thread/DEBUG] [FML/]: Attempting to load mods contained in the minecraft jar file and associated classes
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:27] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:27] [Server thread/DEBUG] [FML/]: Minecraft is a file at /aternos/server/forge.jar, loading
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:27] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:27] [Server thread/DEBUG] [FML/]: Minecraft jar mods loaded successfully
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:27] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:27] [Server thread/INFO] [FML/]: Found 0 mods from the command line. Injecting into mod discoverer
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:27] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:27] [Server thread/INFO] [FML/]: Searching /aternos/server/mods for mods
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:27] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:27] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file IC2Classic Version **.**.**.**.jar
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:27] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:27] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file ironchest-1.7.10-6.0.62.742-universal.jar
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:27] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:27] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file twilightforest-1.7.10-2.3.7.jar
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:27] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:27] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Xaeros_Minimap_1.16_Forge_1.7.10.jar
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:27] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:27] [Server thread/DEBUG] [FML/]: Examining file forge.jar for potential mods
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:27] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:27] [Server thread/DEBUG] [FML/]: The mod container forge.jar appears to be missing an mcmod.info file
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:29] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:29] [Server thread/DEBUG] [FML/]: Examining file IC2Classic Version **.**.**.**.jar for potential mods
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:29] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:29] [Server thread/DEBUG] [FML/]: The mod container IC2Classic Version **.**.**.**.jar appears to be missing an mcmod.info file
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:29] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:29] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (ic2.core.IC2) - loading
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:29] [Server thread/TRACE] [IC2/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:29] [Server thread/TRACE] [IC2/]: Parsed dependency info : [] [] []
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:29] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:29] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (ic2.core.util.Classic) - loading
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:29] [Server thread/TRACE] [IC2-Classic-Spmod/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:29] [Server thread/TRACE] [IC2-Classic-Spmod/]: Parsed dependency info : [] [] []
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:29] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:29] [Server thread/DEBUG] [FML/]: Examining file ironchest-1.7.10-6.0.62.742-universal.jar for potential mods
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:29] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:29] [Server thread/TRACE] [FML/]: Located mcmod.info file in file ironchest-1.7.10-6.0.62.742-universal.jar
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:29] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:29] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (cpw.mods.ironchest.IronChest) - loading
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:29] [Server thread/TRACE] [IronChest/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:29] [Server thread/TRACE] [IronChest/]: Parsed dependency info : [Forge@[10.10,), FML@[7.2,)] [Forge@[10.10,), FML@[7.2,)] []
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:29] [Server thread/DEBUG] [IronChest/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:29] [Server thread/DEBUG] [IronChest/]: Attempting to load the file version.properties from ironchest-1.7.10-6.0.62.742-universal.jar to locate a version number for IronChest
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:29] [Server thread/DEBUG] [IronChest/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:29] [Server thread/DEBUG] [IronChest/]: Found version **.**.**.** for mod IronChest in version.properties, using
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:29] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:29] [Server thread/DEBUG] [FML/]: Examining file twilightforest-1.7.10-2.3.7.jar for potential mods
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:29] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:29] [Server thread/TRACE] [FML/]: Located mcmod.info file in file twilightforest-1.7.10-2.3.7.jar
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:29] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:29] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (twilightforest.TwilightForestMod) - loading
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:29] [Server thread/TRACE] [TwilightForest/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:29] [Server thread/TRACE] [TwilightForest/]: Parsed dependency info : [] [] []
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Examining file Xaeros_Minimap_1.16_Forge_1.7.10.jar for potential mods
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Xaeros_Minimap_1.16_Forge_1.7.10.jar
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (xaero.minimap.XaeroMinimap) - loading
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/TRACE] [xaerominimap/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/TRACE] [xaerominimap/]: Parsed dependency info : [] [] []
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/INFO] [FML/]: Forge Mod Loader has identified 8 mods to load
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.crops (owned by IC2 providing IC2API) embedded in IC2
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.crops (owned by IC2 providing IC2API) embedded in IC2-Classic-Spmod
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.energy.tile (owned by IC2 providing IC2API) embedded in IC2
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.event (owned by IC2 providing IC2API) embedded in IC2
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.energy (owned by IC2 providing IC2API) embedded in IC2
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.reactor (owned by IC2 providing IC2API) embedded in IC2
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.energy.event (owned by IC2 providing IC2API) embedded in IC2
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.network (owned by IC2 providing IC2API) embedded in IC2
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.recipe (owned by IC2 providing IC2API) embedded in IC2
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api (owned by IC2 providing IC2API) embedded in IC2
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.util (owned by IC2 providing IC2API) embedded in IC2
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.tile (owned by IC2 providing IC2API) embedded in IC2
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.energy.prefab (owned by IC2 providing IC2API) embedded in IC2
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.item (owned by IC2 providing IC2API) embedded in IC2
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.info (owned by IC2 providing IC2API) embedded in IC2
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Creating API container dummy for API IC2API: owner: IC2, dependents: [IC2-Classic-Spmod]
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/TRACE] [FML/]: Received a system property request \'\'
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/TRACE] [FML/]: System property request managing the state of 0 mods
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: After merging, found state information for 0 mods
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Found translations in forge.jar [en_US, en_US, es_ES, fr_FR, ru_RU, de_DE, af_ZA, ar_SA, br_FR, ca_ES, cs_CZ, da_DK, el_GR, fa_IR, fi_FI, he_IL, hu_HU, it_IT, ja_JP, ko_KR, lt_LT, nb_NO, nl_NL, nn_NO, no_NO, pl_PL, pt_BR, pt_PT, ro_RO, sl_SI, sr_SP, sv_SE, tr_TR, uk_UA, vi_VN, zh_CN, zh_TW]
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Found translations in forge.jar [en_US, en_US, es_ES, fr_FR, ru_RU, de_DE, af_ZA, ar_SA, br_FR, ca_ES, cs_CZ, da_DK, el_GR, fa_IR, fi_FI, he_IL, hu_HU, it_IT, ja_JP, ko_KR, lt_LT, nb_NO, nl_NL, nn_NO, no_NO, pl_PL, pt_BR, pt_PT, ro_RO, sl_SI, sr_SP, sv_SE, tr_TR, uk_UA, vi_VN, zh_CN, zh_TW]
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [IC2/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [IC2/]: Enabling mod IC2
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [FML/]: Found translations in IC2Classic Version **.**.**.**.jar [en_US, ru_RU]
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:30] [Server thread/DEBUG] [IC2-Classic-Spmod/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:30] [Server thread/DEBUG] [IC2-Classic-Spmod/]: Enabling mod IC2-Classic-Spmod
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/DEBUG] [FML/]: Found translations in IC2Classic Version **.**.**.**.jar [en_US, ru_RU]
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/DEBUG] [IronChest/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/DEBUG] [IronChest/]: Enabling mod IronChest
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/DEBUG] [FML/]: Found translations in ironchest-1.7.10-6.0.62.742-universal.jar [sv_SE, pl_PL, da_DK, en_US, et_EE, cs_CZ, pt_BR, en_PT, tr_TR, es_ES, fr_FR, ru_RU, nb_NO, el_GR, de_DE, zh_TW, it_IT, ko_KR, pt_PT, zh_CN, nl_NL]
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/DEBUG] [TwilightForest/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/DEBUG] [TwilightForest/]: Enabling mod TwilightForest
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/DEBUG] [FML/]: Found translations in twilightforest-1.7.10-2.3.7.jar [de_DE, en_US, ru_RU, zh_CN, zh_TW]
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/DEBUG] [xaerominimap/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/DEBUG] [xaerominimap/]: Enabling mod xaerominimap
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/DEBUG] [FML/]: Found translations in Xaeros_Minimap_1.16_Forge_1.7.10.jar [cs_CZ, da_DK, de_DE, el_GR, en_US, es_AR, es_ES, es_MX, fr_FR, hr_HR, hu_HU, id_ID, it_IT, ja_JP, lv_LV, nl_NL, pl_PL, pt_BR, pt_PT, ru_RU, sr_SP, tr_TR, uk_UA, zh_CN]
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/TRACE] [FML/]: Verifying mod requirements are satisfied
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/TRACE] [FML/]: All mod requirements are satisfied
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/TRACE] [FML/]: Sorting mods into an ordered list
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/TRACE] [FML/]: Mod sorting completed successfully
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/DEBUG] [FML/]: Mod sorting data
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/DEBUG] [FML/]: IC2(IndustrialCraft 2 Classic:2.2.999): IC2Classic Version **.**.**.**.jar ()
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/DEBUG] [FML/]: IC2API(API: IC2API:1.0): IC2Classic Version **.**.**.**.jar ()
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/DEBUG] [FML/]: IC2-Classic-Spmod(IC2 Classic Detection Helper:**.**.**.**): IC2Classic Version **.**.**.**.jar ()
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/DEBUG] [FML/]: IronChest(Iron Chest:**.**.**.**): ironchest-1.7.10-6.0.62.742-universal.jar (required-after:Forge@[10.10,);required-after:FML@[7.2,))
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/DEBUG] [FML/]: TwilightForest(The Twilight Forest:2.3.7): twilightforest-1.7.10-2.3.7.jar ()
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/DEBUG] [FML/]: xaerominimap(Xaero\'s Minimap:1.16): Xaeros_Minimap_1.16_Forge_1.7.10.jar ()
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/TRACE] [mcp/mcp]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/TRACE] [mcp/mcp]: Sending event FMLConstructionEvent to mod mcp
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/TRACE] [mcp/mcp]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/TRACE] [mcp/mcp]: Sent event FMLConstructionEvent to mod mcp
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/DEBUG] [FML/]: Bar Step: Construction - Minecraft Coder Pack took 0.013s
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/TRACE] [FML/FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/TRACE] [FML/FML]: Sending event FMLConstructionEvent to mod FML
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/TRACE] [FML/FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/TRACE] [FML/FML]: Mod FML is using network checker : Invoking method checkModLists
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/TRACE] [FML/FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/TRACE] [FML/FML]: Testing mod FML to verify it accepts its own version in a remote connection
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/TRACE] [FML/FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/TRACE] [FML/FML]: The mod FML accepts its own version (**.**.**.**)
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/INFO] [FML/FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/INFO] [FML/FML]: Attempting connection with missing mods [mcp, FML, Forge, IC2, IC2-Classic-Spmod, IronChest, TwilightForest, xaerominimap] at CLIENT
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:31] [Server thread/INFO] [FML/FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:31] [Server thread/INFO] [FML/FML]: Attempting connection with missing mods [mcp, FML, Forge, IC2, IC2-Classic-Spmod, IronChest, TwilightForest, xaerominimap] at SERVER
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:32] [Server thread/TRACE] [FML/FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:32] [Server thread/TRACE] [FML/FML]: Sent event FMLConstructionEvent to mod FML
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:32] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:32] [Server thread/DEBUG] [FML/]: Bar Step: Construction - Forge Mod Loader took 1.094s
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:32] [Server thread/TRACE] [Forge/Forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:32] [Server thread/TRACE] [Forge/Forge]: Sending event FMLConstructionEvent to mod Forge
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:32] [Server thread/TRACE] [FML/Forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:32] [Server thread/TRACE] [FML/Forge]: Mod Forge is using network checker : No network checking performed
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:32] [Server thread/TRACE] [FML/Forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:32] [Server thread/TRACE] [FML/Forge]: Testing mod Forge to verify it accepts its own version in a remote connection
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:32] [Server thread/TRACE] [FML/Forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:32] [Server thread/TRACE] [FML/Forge]: The mod Forge accepts its own version (10.13.4.1614)
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:32] [Server thread/TRACE] [Forge/Forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:32] [Server thread/TRACE] [Forge/Forge]: Sent event FMLConstructionEvent to mod Forge
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:32] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:32] [Server thread/DEBUG] [FML/]: Bar Step: Construction - Minecraft Forge took 0.042s
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:32] [Server thread/TRACE] [IC2/IC2]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:32] [Server thread/TRACE] [IC2/IC2]: Sending event FMLConstructionEvent to mod IC2
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/ERROR] [IC2/IC2]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/ERROR] [IC2/IC2]: The mod IC2 is expecting signature de041f9f6187debbc77034a344134053277aa3b0 for source IC2Classic Version **.**.**.**.jar, however there is no signature matching that description
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [FML/IC2]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [FML/IC2]: Mod IC2 is using network checker : Accepting version 2.2.999
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [FML/IC2]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [FML/IC2]: Testing mod IC2 to verify it accepts its own version in a remote connection
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [FML/IC2]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [FML/IC2]: The mod IC2 accepts its own version (2.2.999)
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/IC2]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/IC2]: Attempting to inject @SidedProxy classes into IC2
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [IC2/IC2]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [IC2/IC2]: Sent event FMLConstructionEvent to mod IC2
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: Construction - IndustrialCraft 2 Classic took 1.154s
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [IC2-Classic-Spmod/IC2-Classic-Spmod]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [IC2-Classic-Spmod/IC2-Classic-Spmod]: Sending event FMLConstructionEvent to mod IC2-Classic-Spmod
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [FML/IC2-Classic-Spmod]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [FML/IC2-Classic-Spmod]: Mod IC2-Classic-Spmod is using network checker : Accepting version **.**.**.**
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [FML/IC2-Classic-Spmod]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [FML/IC2-Classic-Spmod]: Testing mod IC2-Classic-Spmod to verify it accepts its own version in a remote connection
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [FML/IC2-Classic-Spmod]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [FML/IC2-Classic-Spmod]: The mod IC2-Classic-Spmod accepts its own version (**.**.**.**)
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/IC2-Classic-Spmod]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/IC2-Classic-Spmod]: Attempting to inject @SidedProxy classes into IC2-Classic-Spmod
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [IC2-Classic-Spmod/IC2-Classic-Spmod]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [IC2-Classic-Spmod/IC2-Classic-Spmod]: Sent event FMLConstructionEvent to mod IC2-Classic-Spmod
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: Construction - IC2 Classic Detection Helper took 0.012s
                                    [number:protected] => 165
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [IronChest/IronChest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [IronChest/IronChest]: Sending event FMLConstructionEvent to mod IronChest
                                    [number:protected] => 166
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [FML/IronChest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [FML/IronChest]: Mod IronChest is using network checker : Accepting version **.**.**.**
                                    [number:protected] => 167
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [FML/IronChest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [FML/IronChest]: Testing mod IronChest to verify it accepts its own version in a remote connection
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [FML/IronChest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [FML/IronChest]: The mod IronChest accepts its own version (**.**.**.**)
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/IronChest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/IronChest]: Attempting to inject @SidedProxy classes into IronChest
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [IronChest/IronChest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [IronChest/IronChest]: Sent event FMLConstructionEvent to mod IronChest
                                    [number:protected] => 171
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: Construction - Iron Chest took 0.024s
                                    [number:protected] => 172
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [TwilightForest/TwilightForest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [TwilightForest/TwilightForest]: Sending event FMLConstructionEvent to mod TwilightForest
                                    [number:protected] => 173
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [FML/TwilightForest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [FML/TwilightForest]: Mod TwilightForest is using network checker : Accepting version 2.3.7
                                    [number:protected] => 174
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [FML/TwilightForest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [FML/TwilightForest]: Testing mod TwilightForest to verify it accepts its own version in a remote connection
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [FML/TwilightForest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [FML/TwilightForest]: The mod TwilightForest accepts its own version (2.3.7)
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/TwilightForest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/TwilightForest]: Attempting to inject @SidedProxy classes into TwilightForest
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [TwilightForest/TwilightForest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [TwilightForest/TwilightForest]: Sent event FMLConstructionEvent to mod TwilightForest
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: Construction - The Twilight Forest took 0.082s
                                    [number:protected] => 179
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [179] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [xaerominimap/xaerominimap]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [xaerominimap/xaerominimap]: Sending event FMLConstructionEvent to mod xaerominimap
                                    [number:protected] => 180
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [180] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [xaerominimap/xaerominimap]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [xaerominimap/xaerominimap]: Sent event FMLConstructionEvent to mod xaerominimap
                                    [number:protected] => 181
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [181] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: Construction - Xaero\'s Minimap took 0.139s
                                    [number:protected] => 182
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [182] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Finished: Construction took 2.561s
                                    [number:protected] => 183
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [183] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Mod signature data
                                    [number:protected] => 184
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [184] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Valid Signatures:
                                    [number:protected] => 185
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [185] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: (e3c3d50c7c986df74c645c0ac54639741c90a557) FML	(Forge Mod Loader	**.**.**.**)	forge.jar
                                    [number:protected] => 186
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [186] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: (e3c3d50c7c986df74c645c0ac54639741c90a557) Forge	(Minecraft Forge	10.13.4.1614)	forge.jar
                                    [number:protected] => 187
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [187] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Missing Signatures:
                                    [number:protected] => 188
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [188] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: mcp	(Minecraft Coder Pack	9.05)	minecraft.jar
                                    [number:protected] => 189
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [189] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: IC2	(IndustrialCraft 2 Classic	2.2.999)	IC2Classic Version **.**.**.**.jar
                                    [number:protected] => 190
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [190] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: IC2-Classic-Spmod	(IC2 Classic Detection Helper	**.**.**.**)	IC2Classic Version **.**.**.**.jar
                                    [number:protected] => 191
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [191] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: IronChest	(Iron Chest	**.**.**.**)	ironchest-1.7.10-6.0.62.742-universal.jar
                                    [number:protected] => 192
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [192] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: TwilightForest	(The Twilight Forest	2.3.7)	twilightforest-1.7.10-2.3.7.jar
                                    [number:protected] => 193
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [193] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: xaerominimap	(Xaero\'s Minimap	1.16)	Xaeros_Minimap_1.16_Forge_1.7.10.jar
                                    [number:protected] => 194
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [194] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/ERROR] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/ERROR] [FML/]: Fatal errors were detected during the transition from CONSTRUCTING to PREINITIALIZATION. Loading cannot continue
                                    [number:protected] => 195
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [195] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/ERROR] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/ERROR] [FML/]: 
                                    [number:protected] => 196
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => States: \'U\' = Unloaded \'L\' = Loaded \'C\' = Constructed \'H\' = Pre-initialized \'I\' = Initialized \'J\' = Post-initialized \'A\' = Available \'D\' = Disabled \'E\' = Errored
                                    [number:protected] => 197
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => UC	mcp{9.05} [Minecraft Coder Pack] (minecraft.jar) 
                                    [number:protected] => 198
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => UC	FML{**.**.**.**} [Forge Mod Loader] (forge.jar) 
                                    [number:protected] => 199
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => UC	Forge{10.13.4.1614} [Minecraft Forge] (forge.jar) 
                                    [number:protected] => 200
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => UC	IC2{2.2.999} [IndustrialCraft 2 Classic] (IC2Classic Version **.**.**.**.jar) 
                                    [number:protected] => 201
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => UC	IC2-Classic-Spmod{**.**.**.**} [IC2 Classic Detection Helper] (IC2Classic Version **.**.**.**.jar) 
                                    [number:protected] => 202
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => UC	IronChest{**.**.**.**} [Iron Chest] (ironchest-1.7.10-6.0.62.742-universal.jar) 
                                    [number:protected] => 203
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => UC	TwilightForest{2.3.7} [The Twilight Forest] (twilightforest-1.7.10-2.3.7.jar) 
                                    [number:protected] => 204
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => UE	xaerominimap{1.16} [Xaero\'s Minimap] (Xaeros_Minimap_1.16_Forge_1.7.10.jar) 
                                    [number:protected] => 205
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [196] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/ERROR] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/ERROR] [FML/]: The following problems were captured during this phase
                                    [number:protected] => 206
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [197] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/ERROR] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/ERROR] [FML/]: Caught exception from xaerominimap
                                    [number:protected] => 207
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.NoClassDefFoundError: net/minecraft/client/settings/KeyBinding
                                    [number:protected] => 208
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at xaero.minimap.XaeroMinimap.&lt;clinit&gt;(XaeroMinimap.java:59) ~[XaeroMinimap.class:?]
                                    [number:protected] => 209
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Class.forName0(Native Method) ~[?:1.8.0_144]
                                    [number:protected] => 210
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Class.forName(Class.java:348) ~[?:1.8.0_144]
                                    [number:protected] => 211
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at cpw.mods.fml.common.FMLModContainer.constructMod(FMLModContainer.java:440) ~[FMLModContainer.class:?]
                                    [number:protected] => 212
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_144]
                                    [number:protected] => 213
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_144]
                                    [number:protected] => 214
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_144]
                                    [number:protected] => 215
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_144]
                                    [number:protected] => 216
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.EventSubscriber.handleEvent(EventSubscriber.java:74) ~[guava-17.0.jar:?]
                                    [number:protected] => 217
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.SynchronizedEventSubscriber.handleEvent(SynchronizedEventSubscriber.java:47) ~[guava-17.0.jar:?]
                                    [number:protected] => 218
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.EventBus.dispatch(EventBus.java:322) ~[guava-17.0.jar:?]
                                    [number:protected] => 219
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.EventBus.dispatchQueuedEvents(EventBus.java:304) ~[guava-17.0.jar:?]
                                    [number:protected] => 220
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.EventBus.post(EventBus.java:275) ~[guava-17.0.jar:?]
                                    [number:protected] => 221
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at cpw.mods.fml.common.LoadController.sendEventToModContainer(LoadController.java:212) ~[LoadController.class:?]
                                    [number:protected] => 222
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at cpw.mods.fml.common.LoadController.propogateStateMessage(LoadController.java:190) ~[LoadController.class:?]
                                    [number:protected] => 223
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_144]
                                    [number:protected] => 224
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_144]
                                    [number:protected] => 225
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_144]
                                    [number:protected] => 226
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_144]
                                    [number:protected] => 227
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.EventSubscriber.handleEvent(EventSubscriber.java:74) ~[guava-17.0.jar:?]
                                    [number:protected] => 228
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.SynchronizedEventSubscriber.handleEvent(SynchronizedEventSubscriber.java:47) ~[guava-17.0.jar:?]
                                    [number:protected] => 229
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.EventBus.dispatch(EventBus.java:322) ~[guava-17.0.jar:?]
                                    [number:protected] => 230
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.EventBus.dispatchQueuedEvents(EventBus.java:304) ~[guava-17.0.jar:?]
                                    [number:protected] => 231
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.EventBus.post(EventBus.java:275) ~[guava-17.0.jar:?]
                                    [number:protected] => 232
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at cpw.mods.fml.common.LoadController.distributeStateMessage(LoadController.java:119) [LoadController.class:?]
                                    [number:protected] => 233
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at cpw.mods.fml.common.Loader.loadMods(Loader.java:513) [Loader.class:?]
                                    [number:protected] => 234
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at cpw.mods.fml.server.FMLServerHandler.beginServerLoading(FMLServerHandler.java:87) [FMLServerHandler.class:?]
                                    [number:protected] => 235
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at cpw.mods.fml.common.FMLCommonHandler.onServerStart(FMLCommonHandler.java:314) [FMLCommonHandler.class:?]
                                    [number:protected] => 236
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:117) [lt.class:?]
                                    [number:protected] => 237
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:387) [MinecraftServer.class:?]
                                    [number:protected] => 238
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer$2.run(MinecraftServer.java:685) [li.class:?]
                                    [number:protected] => 239
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.ClassNotFoundException: net.minecraft.client.settings.KeyBinding
                                    [number:protected] => 240
                                )

                            [34] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.launchwrapper.LaunchClassLoader.findClass(LaunchClassLoader.java:191) ~[launchwrapper-1.12.jar:?]
                                    [number:protected] => 241
                                )

                            [35] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:424) ~[?:1.8.0_144]
                                    [number:protected] => 242
                                )

                            [36] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:357) ~[?:1.8.0_144]
                                    [number:protected] => 243
                                )

                            [37] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ... 31 more
                                    [number:protected] => 244
                                )

                            [38] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.NullPointerException
                                    [number:protected] => 245
                                )

                            [39] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.launchwrapper.LaunchClassLoader.findClass(LaunchClassLoader.java:182) ~[launchwrapper-1.12.jar:?]
                                    [number:protected] => 246
                                )

                            [40] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:424) ~[?:1.8.0_144]
                                    [number:protected] => 247
                                )

                            [41] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:357) ~[?:1.8.0_144]
                                    [number:protected] => 248
                                )

                            [42] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ... 31 more
                                    [number:protected] => 249
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [198] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/WARN] [FML/]: Can\'t revert to frozen GameData state without freezing first.
                                    [number:protected] => 250
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [199] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [mcp/mcp]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [mcp/mcp]: Sending event FMLModIdMappingEvent to mod mcp
                                    [number:protected] => 251
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [200] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [mcp/mcp]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [mcp/mcp]: Sent event FMLModIdMappingEvent to mod mcp
                                    [number:protected] => 252
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [201] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Minecraft Coder Pack took 0.001s
                                    [number:protected] => 253
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [202] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [FML/FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [FML/FML]: Sending event FMLModIdMappingEvent to mod FML
                                    [number:protected] => 254
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [203] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [FML/FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [FML/FML]: Sent event FMLModIdMappingEvent to mod FML
                                    [number:protected] => 255
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [204] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Forge Mod Loader took 0.005s
                                    [number:protected] => 256
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [205] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [Forge/Forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [Forge/Forge]: Sending event FMLModIdMappingEvent to mod Forge
                                    [number:protected] => 257
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [206] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [Forge/Forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [Forge/Forge]: Sent event FMLModIdMappingEvent to mod Forge
                                    [number:protected] => 258
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [207] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Minecraft Forge took 0.003s
                                    [number:protected] => 259
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [208] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [IC2/IC2]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [IC2/IC2]: Sending event FMLModIdMappingEvent to mod IC2
                                    [number:protected] => 260
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [209] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [IC2/IC2]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [IC2/IC2]: Sent event FMLModIdMappingEvent to mod IC2
                                    [number:protected] => 261
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [210] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - IndustrialCraft 2 Classic took 0.001s
                                    [number:protected] => 262
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [211] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [IC2-Classic-Spmod/IC2-Classic-Spmod]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [IC2-Classic-Spmod/IC2-Classic-Spmod]: Sending event FMLModIdMappingEvent to mod IC2-Classic-Spmod
                                    [number:protected] => 263
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [212] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [IC2-Classic-Spmod/IC2-Classic-Spmod]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [IC2-Classic-Spmod/IC2-Classic-Spmod]: Sent event FMLModIdMappingEvent to mod IC2-Classic-Spmod
                                    [number:protected] => 264
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [213] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - IC2 Classic Detection Helper took 0.001s
                                    [number:protected] => 265
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [214] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [IronChest/IronChest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [IronChest/IronChest]: Sending event FMLModIdMappingEvent to mod IronChest
                                    [number:protected] => 266
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [215] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [IronChest/IronChest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [IronChest/IronChest]: Sent event FMLModIdMappingEvent to mod IronChest
                                    [number:protected] => 267
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [216] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Iron Chest took 0.001s
                                    [number:protected] => 268
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [217] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [TwilightForest/TwilightForest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [TwilightForest/TwilightForest]: Sending event FMLModIdMappingEvent to mod TwilightForest
                                    [number:protected] => 269
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [218] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [TwilightForest/TwilightForest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [TwilightForest/TwilightForest]: Sent event FMLModIdMappingEvent to mod TwilightForest
                                    [number:protected] => 270
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [219] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - The Twilight Forest took 0.001s
                                    [number:protected] => 271
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [220] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [xaerominimap/xaerominimap]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [xaerominimap/xaerominimap]: Sending event FMLModIdMappingEvent to mod xaerominimap
                                    [number:protected] => 272
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [221] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [xaerominimap/xaerominimap]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [xaerominimap/xaerominimap]: Sent event FMLModIdMappingEvent to mod xaerominimap
                                    [number:protected] => 273
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [222] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Xaero\'s Minimap took 0.002s
                                    [number:protected] => 274
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [223] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Finished: ModIdMapping took 0.015s
                                    [number:protected] => 275
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [224] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/INFO] [FML/]: Applying holder lookups
                                    [number:protected] => 276
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [225] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/INFO] [FML/]: Holder lookups applied
                                    [number:protected] => 277
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [226] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [mcp/mcp]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [mcp/mcp]: Sending event FMLServerStoppedEvent to mod mcp
                                    [number:protected] => 278
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [227] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [mcp/mcp]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [mcp/mcp]: Sent event FMLServerStoppedEvent to mod mcp
                                    [number:protected] => 279
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [228] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Minecraft Coder Pack took 0.001s
                                    [number:protected] => 280
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [229] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [FML/FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [FML/FML]: Sending event FMLServerStoppedEvent to mod FML
                                    [number:protected] => 281
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [230] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [FML/FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [FML/FML]: Sent event FMLServerStoppedEvent to mod FML
                                    [number:protected] => 282
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [231] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Forge Mod Loader took 0.003s
                                    [number:protected] => 283
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [232] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [Forge/Forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [Forge/Forge]: Sending event FMLServerStoppedEvent to mod Forge
                                    [number:protected] => 284
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [233] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [Forge/Forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [Forge/Forge]: Sent event FMLServerStoppedEvent to mod Forge
                                    [number:protected] => 285
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [234] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Minecraft Forge took 0.001s
                                    [number:protected] => 286
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [235] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [IC2/IC2]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [IC2/IC2]: Sending event FMLServerStoppedEvent to mod IC2
                                    [number:protected] => 287
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [236] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [IC2/IC2]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [IC2/IC2]: Sent event FMLServerStoppedEvent to mod IC2
                                    [number:protected] => 288
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [237] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - IndustrialCraft 2 Classic took 0.001s
                                    [number:protected] => 289
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [238] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [IC2-Classic-Spmod/IC2-Classic-Spmod]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [IC2-Classic-Spmod/IC2-Classic-Spmod]: Sending event FMLServerStoppedEvent to mod IC2-Classic-Spmod
                                    [number:protected] => 290
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [239] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [IC2-Classic-Spmod/IC2-Classic-Spmod]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [IC2-Classic-Spmod/IC2-Classic-Spmod]: Sent event FMLServerStoppedEvent to mod IC2-Classic-Spmod
                                    [number:protected] => 291
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [240] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - IC2 Classic Detection Helper took 0.002s
                                    [number:protected] => 292
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [241] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [IronChest/IronChest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [IronChest/IronChest]: Sending event FMLServerStoppedEvent to mod IronChest
                                    [number:protected] => 293
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [242] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [IronChest/IronChest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [IronChest/IronChest]: Sent event FMLServerStoppedEvent to mod IronChest
                                    [number:protected] => 294
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [243] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Iron Chest took 0.001s
                                    [number:protected] => 295
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [244] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [TwilightForest/TwilightForest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [TwilightForest/TwilightForest]: Sending event FMLServerStoppedEvent to mod TwilightForest
                                    [number:protected] => 296
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [245] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [TwilightForest/TwilightForest]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [TwilightForest/TwilightForest]: Sent event FMLServerStoppedEvent to mod TwilightForest
                                    [number:protected] => 297
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [246] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - The Twilight Forest took 0.001s
                                    [number:protected] => 298
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [247] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [xaerominimap/xaerominimap]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [xaerominimap/xaerominimap]: Sending event FMLServerStoppedEvent to mod xaerominimap
                                    [number:protected] => 299
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [248] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/TRACE] [xaerominimap/xaerominimap]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/TRACE] [xaerominimap/xaerominimap]: Sent event FMLServerStoppedEvent to mod xaerominimap
                                    [number:protected] => 300
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [249] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Xaero\'s Minimap took 0.002s
                                    [number:protected] => 301
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [250] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/DEBUG] [FML/]: Bar Finished: ServerStopped took 0.011s
                                    [number:protected] => 302
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [251] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/INFO] [FML/]: The state engine was in incorrect state ERRORED and forced into state SERVER_STOPPED. Errors may have been discarded.
                                    [number:protected] => 303
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [252] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [22:50:33] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:50:33] [Server thread/INFO] [FML/]: The state engine was in incorrect state ERRORED and forced into state AVAILABLE. Errors may have been discarded.
                                    [number:protected] => 304
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 253
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [22:50:06] [main/DEBUG] [FML/]: Injecting tracing printstreams for STDOUT/STDERR.
[22:50:07] [main/INFO] [FML/]: Forge Mod Loader version 7.99.40.1614 for Minecraft 1.7.10 loading
[22:50:07] [main/INFO] [FML/]: Java is Java HotSpot(TM) 64-Bit Server VM, version 1.8.0_144, running on Linux:amd64:4.4.0-131-generic, installed at /aternos/bin/jdk1.8.0_144/jre
[22:50:07] [main/DEBUG] [FML/]: Java classpath at launch is forge.jar
[22:50:07] [main/DEBUG] [FML/]: Java library path at launch is /usr/java/packages/lib/amd64:/usr/lib64:/lib64:/lib:/usr/lib
[22:50:07] [main/DEBUG] [FML/]: Enabling runtime deobfuscation
[22:50:07] [main/DEBUG] [FML/]: Instantiating coremod class FMLCorePlugin
[22:50:07] [main/DEBUG] [FML/]: Added access transformer class cpw.mods.fml.common.asm.transformers.AccessTransformer to enqueued access transformers
[22:50:07] [main/DEBUG] [FML/]: Enqueued coremod FMLCorePlugin
[22:50:07] [main/DEBUG] [FML/]: Instantiating coremod class FMLForgePlugin
[22:50:07] [main/DEBUG] [FML/]: Added access transformer class net.minecraftforge.transformers.ForgeAccessTransformer to enqueued access transformers
[22:50:07] [main/DEBUG] [FML/]: Enqueued coremod FMLForgePlugin
[22:50:07] [main/DEBUG] [FML/]: All fundamental core mods are successfully located
[22:50:07] [main/DEBUG] [FML/]: Attempting to load commandline specified mods, relative to /aternos/server/.
[22:50:07] [main/DEBUG] [FML/]: Discovering coremods
[22:50:07] [main/DEBUG] [FML/]: Examining for coremod candidacy IC2Classic Version **.**.**.**.jar
[22:50:07] [main/DEBUG] [FML/]: Not found coremod data in IC2Classic Version **.**.**.**.jar
[22:50:07] [main/DEBUG] [FML/]: Examining for coremod candidacy ironchest-1.7.10-6.0.62.742-universal.jar
[22:50:07] [main/DEBUG] [FML/]: Not found coremod data in ironchest-1.7.10-6.0.62.742-universal.jar
[22:50:07] [main/DEBUG] [FML/]: Examining for coremod candidacy twilightforest-1.7.10-2.3.7.jar
[22:50:07] [main/DEBUG] [FML/]: Not found coremod data in twilightforest-1.7.10-2.3.7.jar
[22:50:07] [main/DEBUG] [FML/]: Examining for coremod candidacy Xaeros_Minimap_1.16_Forge_1.7.10.jar
[22:50:07] [main/DEBUG] [FML/]: Not found coremod data in Xaeros_Minimap_1.16_Forge_1.7.10.jar
[22:50:07] [main/INFO] [LaunchWrapper/]: Loading tweak class name cpw.mods.fml.common.launcher.FMLInjectionAndSortingTweaker
[22:50:07] [main/INFO] [LaunchWrapper/]: Loading tweak class name cpw.mods.fml.common.launcher.FMLDeobfTweaker
[22:50:07] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.FMLInjectionAndSortingTweaker
[22:50:07] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.FMLInjectionAndSortingTweaker
[22:50:07] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
[22:50:07] [main/DEBUG] [FML/]: Injecting coremod FMLCorePlugin {cpw.mods.fml.relauncher.FMLCorePlugin} class transformers
[22:50:07] [main/TRACE] [FML/]: Registering transformer cpw.mods.fml.common.asm.transformers.MarkerTransformer
[22:50:07] [main/TRACE] [FML/]: Registering transformer cpw.mods.fml.common.asm.transformers.SideTransformer
[22:50:07] [main/TRACE] [FML/]: Registering transformer cpw.mods.fml.common.asm.transformers.EventSubscriptionTransformer
[22:50:07] [main/DEBUG] [FML/]: Injection complete
[22:50:07] [main/DEBUG] [FML/]: Running coremod plugin for FMLCorePlugin {cpw.mods.fml.relauncher.FMLCorePlugin}
[22:50:07] [main/DEBUG] [FML/]: Running coremod plugin FMLCorePlugin
[22:50:11] [main/DEBUG] [FML/]: Read 527 binary patches
[22:50:12] [main/INFO] [FML/]: Found valid fingerprint for Minecraft Forge. Certificate fingerprint e3c3d50c7c986df74c645c0ac54639741c90a557
[22:50:12] [main/DEBUG] [FML/]: Coremod plugin class FMLCorePlugin run successfully
[22:50:12] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
[22:50:12] [main/DEBUG] [FML/]: Injecting coremod FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin} class transformers
[22:50:12] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.classloading.FluidIdTransformer
[22:50:12] [main/DEBUG] [FML/]: Injection complete
[22:50:12] [main/DEBUG] [FML/]: Running coremod plugin for FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin}
[22:50:12] [main/DEBUG] [FML/]: Running coremod plugin FMLForgePlugin
[22:50:12] [main/DEBUG] [FML/]: Coremod plugin class FMLForgePlugin run successfully
[22:50:12] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.FMLDeobfTweaker
[22:50:13] [main/DEBUG] [FML/]: Loaded 57 rules from AccessTransformer config file fml_at.cfg
[22:50:13] [main/DEBUG] [FML/]: Loaded 89 rules from AccessTransformer config file forge_at.cfg
[22:50:13] [main/DEBUG] [FML/]: Validating minecraft
[22:50:15] [main/DEBUG] [FML/]: Minecraft validated, launching...
[22:50:15] [main/INFO] [LaunchWrapper/]: Loading tweak class name cpw.mods.fml.common.launcher.TerminalTweaker
[22:50:15] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.TerminalTweaker
[22:50:16] [main/INFO] [LaunchWrapper/]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
[22:50:26] [Server thread/INFO] [MinecraftForge/]: Attempting early MinecraftForge initialization
[22:50:26] [Server thread/INFO] [FML/]: MinecraftForge v10.13.4.1614 Initialized
[22:50:26] [Server thread/INFO] [FML/]: Replaced 183 ore recipies
[22:50:27] [Server thread/INFO] [MinecraftForge/]: Completed early MinecraftForge initialization
[22:50:27] [Server thread/DEBUG] [FML/]: File /aternos/server/config/injectedDependencies.json not found. No dependencies injected
[22:50:27] [Server thread/DEBUG] [FML/]: Building injected Mod Containers [cpw.mods.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer]
[22:50:27] [Server thread/DEBUG] [FML/]: Attempting to load mods contained in the minecraft jar file and associated classes
[22:50:27] [Server thread/DEBUG] [FML/]: Minecraft is a file at /aternos/server/forge.jar, loading
[22:50:27] [Server thread/DEBUG] [FML/]: Minecraft jar mods loaded successfully
[22:50:27] [Server thread/INFO] [FML/]: Found 0 mods from the command line. Injecting into mod discoverer
[22:50:27] [Server thread/INFO] [FML/]: Searching /aternos/server/mods for mods
[22:50:27] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file IC2Classic Version **.**.**.**.jar
[22:50:27] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file ironchest-1.7.10-6.0.62.742-universal.jar
[22:50:27] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file twilightforest-1.7.10-2.3.7.jar
[22:50:27] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Xaeros_Minimap_1.16_Forge_1.7.10.jar
[22:50:27] [Server thread/DEBUG] [FML/]: Examining file forge.jar for potential mods
[22:50:27] [Server thread/DEBUG] [FML/]: The mod container forge.jar appears to be missing an mcmod.info file
[22:50:29] [Server thread/DEBUG] [FML/]: Examining file IC2Classic Version **.**.**.**.jar for potential mods
[22:50:29] [Server thread/DEBUG] [FML/]: The mod container IC2Classic Version **.**.**.**.jar appears to be missing an mcmod.info file
[22:50:29] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (ic2.core.IC2) - loading
[22:50:29] [Server thread/TRACE] [IC2/]: Parsed dependency info : [] [] []
[22:50:29] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (ic2.core.util.Classic) - loading
[22:50:29] [Server thread/TRACE] [IC2-Classic-Spmod/]: Parsed dependency info : [] [] []
[22:50:29] [Server thread/DEBUG] [FML/]: Examining file ironchest-1.7.10-6.0.62.742-universal.jar for potential mods
[22:50:29] [Server thread/TRACE] [FML/]: Located mcmod.info file in file ironchest-1.7.10-6.0.62.742-universal.jar
[22:50:29] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (cpw.mods.ironchest.IronChest) - loading
[22:50:29] [Server thread/TRACE] [IronChest/]: Parsed dependency info : [Forge@[10.10,), FML@[7.2,)] [Forge@[10.10,), FML@[7.2,)] []
[22:50:29] [Server thread/DEBUG] [IronChest/]: Attempting to load the file version.properties from ironchest-1.7.10-6.0.62.742-universal.jar to locate a version number for IronChest
[22:50:29] [Server thread/DEBUG] [IronChest/]: Found version **.**.**.** for mod IronChest in version.properties, using
[22:50:29] [Server thread/DEBUG] [FML/]: Examining file twilightforest-1.7.10-2.3.7.jar for potential mods
[22:50:29] [Server thread/TRACE] [FML/]: Located mcmod.info file in file twilightforest-1.7.10-2.3.7.jar
[22:50:29] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (twilightforest.TwilightForestMod) - loading
[22:50:29] [Server thread/TRACE] [TwilightForest/]: Parsed dependency info : [] [] []
[22:50:30] [Server thread/DEBUG] [FML/]: Examining file Xaeros_Minimap_1.16_Forge_1.7.10.jar for potential mods
[22:50:30] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Xaeros_Minimap_1.16_Forge_1.7.10.jar
[22:50:30] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (xaero.minimap.XaeroMinimap) - loading
[22:50:30] [Server thread/TRACE] [xaerominimap/]: Parsed dependency info : [] [] []
[22:50:30] [Server thread/INFO] [FML/]: Forge Mod Loader has identified 8 mods to load
[22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.crops (owned by IC2 providing IC2API) embedded in IC2
[22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.crops (owned by IC2 providing IC2API) embedded in IC2-Classic-Spmod
[22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.energy.tile (owned by IC2 providing IC2API) embedded in IC2
[22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.event (owned by IC2 providing IC2API) embedded in IC2
[22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.energy (owned by IC2 providing IC2API) embedded in IC2
[22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.reactor (owned by IC2 providing IC2API) embedded in IC2
[22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.energy.event (owned by IC2 providing IC2API) embedded in IC2
[22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.network (owned by IC2 providing IC2API) embedded in IC2
[22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.recipe (owned by IC2 providing IC2API) embedded in IC2
[22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api (owned by IC2 providing IC2API) embedded in IC2
[22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.util (owned by IC2 providing IC2API) embedded in IC2
[22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.tile (owned by IC2 providing IC2API) embedded in IC2
[22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.energy.prefab (owned by IC2 providing IC2API) embedded in IC2
[22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.item (owned by IC2 providing IC2API) embedded in IC2
[22:50:30] [Server thread/DEBUG] [FML/]: Found API ic2.api.info (owned by IC2 providing IC2API) embedded in IC2
[22:50:30] [Server thread/DEBUG] [FML/]: Creating API container dummy for API IC2API: owner: IC2, dependents: [IC2-Classic-Spmod]
[22:50:30] [Server thread/TRACE] [FML/]: Received a system property request \'\'
[22:50:30] [Server thread/TRACE] [FML/]: System property request managing the state of 0 mods
[22:50:30] [Server thread/DEBUG] [FML/]: After merging, found state information for 0 mods
[22:50:30] [Server thread/DEBUG] [FML/]: Found translations in forge.jar [en_US, en_US, es_ES, fr_FR, ru_RU, de_DE, af_ZA, ar_SA, br_FR, ca_ES, cs_CZ, da_DK, el_GR, fa_IR, fi_FI, he_IL, hu_HU, it_IT, ja_JP, ko_KR, lt_LT, nb_NO, nl_NL, nn_NO, no_NO, pl_PL, pt_BR, pt_PT, ro_RO, sl_SI, sr_SP, sv_SE, tr_TR, uk_UA, vi_VN, zh_CN, zh_TW]
[22:50:30] [Server thread/DEBUG] [FML/]: Found translations in forge.jar [en_US, en_US, es_ES, fr_FR, ru_RU, de_DE, af_ZA, ar_SA, br_FR, ca_ES, cs_CZ, da_DK, el_GR, fa_IR, fi_FI, he_IL, hu_HU, it_IT, ja_JP, ko_KR, lt_LT, nb_NO, nl_NL, nn_NO, no_NO, pl_PL, pt_BR, pt_PT, ro_RO, sl_SI, sr_SP, sv_SE, tr_TR, uk_UA, vi_VN, zh_CN, zh_TW]
[22:50:30] [Server thread/DEBUG] [IC2/]: Enabling mod IC2
[22:50:30] [Server thread/DEBUG] [FML/]: Found translations in IC2Classic Version **.**.**.**.jar [en_US, ru_RU]
[22:50:30] [Server thread/DEBUG] [IC2-Classic-Spmod/]: Enabling mod IC2-Classic-Spmod
[22:50:31] [Server thread/DEBUG] [FML/]: Found translations in IC2Classic Version **.**.**.**.jar [en_US, ru_RU]
[22:50:31] [Server thread/DEBUG] [IronChest/]: Enabling mod IronChest
[22:50:31] [Server thread/DEBUG] [FML/]: Found translations in ironchest-1.7.10-6.0.62.742-universal.jar [sv_SE, pl_PL, da_DK, en_US, et_EE, cs_CZ, pt_BR, en_PT, tr_TR, es_ES, fr_FR, ru_RU, nb_NO, el_GR, de_DE, zh_TW, it_IT, ko_KR, pt_PT, zh_CN, nl_NL]
[22:50:31] [Server thread/DEBUG] [TwilightForest/]: Enabling mod TwilightForest
[22:50:31] [Server thread/DEBUG] [FML/]: Found translations in twilightforest-1.7.10-2.3.7.jar [de_DE, en_US, ru_RU, zh_CN, zh_TW]
[22:50:31] [Server thread/DEBUG] [xaerominimap/]: Enabling mod xaerominimap
[22:50:31] [Server thread/DEBUG] [FML/]: Found translations in Xaeros_Minimap_1.16_Forge_1.7.10.jar [cs_CZ, da_DK, de_DE, el_GR, en_US, es_AR, es_ES, es_MX, fr_FR, hr_HR, hu_HU, id_ID, it_IT, ja_JP, lv_LV, nl_NL, pl_PL, pt_BR, pt_PT, ru_RU, sr_SP, tr_TR, uk_UA, zh_CN]
[22:50:31] [Server thread/TRACE] [FML/]: Verifying mod requirements are satisfied
[22:50:31] [Server thread/TRACE] [FML/]: All mod requirements are satisfied
[22:50:31] [Server thread/TRACE] [FML/]: Sorting mods into an ordered list
[22:50:31] [Server thread/TRACE] [FML/]: Mod sorting completed successfully
[22:50:31] [Server thread/DEBUG] [FML/]: Mod sorting data
[22:50:31] [Server thread/DEBUG] [FML/]: IC2(IndustrialCraft 2 Classic:2.2.999): IC2Classic Version **.**.**.**.jar ()
[22:50:31] [Server thread/DEBUG] [FML/]: IC2API(API: IC2API:1.0): IC2Classic Version **.**.**.**.jar ()
[22:50:31] [Server thread/DEBUG] [FML/]: IC2-Classic-Spmod(IC2 Classic Detection Helper:**.**.**.**): IC2Classic Version **.**.**.**.jar ()
[22:50:31] [Server thread/DEBUG] [FML/]: IronChest(Iron Chest:**.**.**.**): ironchest-1.7.10-6.0.62.742-universal.jar (required-after:Forge@[10.10,);required-after:FML@[7.2,))
[22:50:31] [Server thread/DEBUG] [FML/]: TwilightForest(The Twilight Forest:2.3.7): twilightforest-1.7.10-2.3.7.jar ()
[22:50:31] [Server thread/DEBUG] [FML/]: xaerominimap(Xaero\'s Minimap:1.16): Xaeros_Minimap_1.16_Forge_1.7.10.jar ()
[22:50:31] [Server thread/TRACE] [mcp/mcp]: Sending event FMLConstructionEvent to mod mcp
[22:50:31] [Server thread/TRACE] [mcp/mcp]: Sent event FMLConstructionEvent to mod mcp
[22:50:31] [Server thread/DEBUG] [FML/]: Bar Step: Construction - Minecraft Coder Pack took 0.013s
[22:50:31] [Server thread/TRACE] [FML/FML]: Sending event FMLConstructionEvent to mod FML
[22:50:31] [Server thread/TRACE] [FML/FML]: Mod FML is using network checker : Invoking method checkModLists
[22:50:31] [Server thread/TRACE] [FML/FML]: Testing mod FML to verify it accepts its own version in a remote connection
[22:50:31] [Server thread/TRACE] [FML/FML]: The mod FML accepts its own version (**.**.**.**)
[22:50:31] [Server thread/INFO] [FML/FML]: Attempting connection with missing mods [mcp, FML, Forge, IC2, IC2-Classic-Spmod, IronChest, TwilightForest, xaerominimap] at CLIENT
[22:50:31] [Server thread/INFO] [FML/FML]: Attempting connection with missing mods [mcp, FML, Forge, IC2, IC2-Classic-Spmod, IronChest, TwilightForest, xaerominimap] at SERVER
[22:50:32] [Server thread/TRACE] [FML/FML]: Sent event FMLConstructionEvent to mod FML
[22:50:32] [Server thread/DEBUG] [FML/]: Bar Step: Construction - Forge Mod Loader took 1.094s
[22:50:32] [Server thread/TRACE] [Forge/Forge]: Sending event FMLConstructionEvent to mod Forge
[22:50:32] [Server thread/TRACE] [FML/Forge]: Mod Forge is using network checker : No network checking performed
[22:50:32] [Server thread/TRACE] [FML/Forge]: Testing mod Forge to verify it accepts its own version in a remote connection
[22:50:32] [Server thread/TRACE] [FML/Forge]: The mod Forge accepts its own version (10.13.4.1614)
[22:50:32] [Server thread/TRACE] [Forge/Forge]: Sent event FMLConstructionEvent to mod Forge
[22:50:32] [Server thread/DEBUG] [FML/]: Bar Step: Construction - Minecraft Forge took 0.042s
[22:50:32] [Server thread/TRACE] [IC2/IC2]: Sending event FMLConstructionEvent to mod IC2
[22:50:33] [Server thread/ERROR] [IC2/IC2]: The mod IC2 is expecting signature de041f9f6187debbc77034a344134053277aa3b0 for source IC2Classic Version **.**.**.**.jar, however there is no signature matching that description
[22:50:33] [Server thread/TRACE] [FML/IC2]: Mod IC2 is using network checker : Accepting version 2.2.999
[22:50:33] [Server thread/TRACE] [FML/IC2]: Testing mod IC2 to verify it accepts its own version in a remote connection
[22:50:33] [Server thread/TRACE] [FML/IC2]: The mod IC2 accepts its own version (2.2.999)
[22:50:33] [Server thread/DEBUG] [FML/IC2]: Attempting to inject @SidedProxy classes into IC2
[22:50:33] [Server thread/TRACE] [IC2/IC2]: Sent event FMLConstructionEvent to mod IC2
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: Construction - IndustrialCraft 2 Classic took 1.154s
[22:50:33] [Server thread/TRACE] [IC2-Classic-Spmod/IC2-Classic-Spmod]: Sending event FMLConstructionEvent to mod IC2-Classic-Spmod
[22:50:33] [Server thread/TRACE] [FML/IC2-Classic-Spmod]: Mod IC2-Classic-Spmod is using network checker : Accepting version **.**.**.**
[22:50:33] [Server thread/TRACE] [FML/IC2-Classic-Spmod]: Testing mod IC2-Classic-Spmod to verify it accepts its own version in a remote connection
[22:50:33] [Server thread/TRACE] [FML/IC2-Classic-Spmod]: The mod IC2-Classic-Spmod accepts its own version (**.**.**.**)
[22:50:33] [Server thread/DEBUG] [FML/IC2-Classic-Spmod]: Attempting to inject @SidedProxy classes into IC2-Classic-Spmod
[22:50:33] [Server thread/TRACE] [IC2-Classic-Spmod/IC2-Classic-Spmod]: Sent event FMLConstructionEvent to mod IC2-Classic-Spmod
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: Construction - IC2 Classic Detection Helper took 0.012s
[22:50:33] [Server thread/TRACE] [IronChest/IronChest]: Sending event FMLConstructionEvent to mod IronChest
[22:50:33] [Server thread/TRACE] [FML/IronChest]: Mod IronChest is using network checker : Accepting version **.**.**.**
[22:50:33] [Server thread/TRACE] [FML/IronChest]: Testing mod IronChest to verify it accepts its own version in a remote connection
[22:50:33] [Server thread/TRACE] [FML/IronChest]: The mod IronChest accepts its own version (**.**.**.**)
[22:50:33] [Server thread/DEBUG] [FML/IronChest]: Attempting to inject @SidedProxy classes into IronChest
[22:50:33] [Server thread/TRACE] [IronChest/IronChest]: Sent event FMLConstructionEvent to mod IronChest
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: Construction - Iron Chest took 0.024s
[22:50:33] [Server thread/TRACE] [TwilightForest/TwilightForest]: Sending event FMLConstructionEvent to mod TwilightForest
[22:50:33] [Server thread/TRACE] [FML/TwilightForest]: Mod TwilightForest is using network checker : Accepting version 2.3.7
[22:50:33] [Server thread/TRACE] [FML/TwilightForest]: Testing mod TwilightForest to verify it accepts its own version in a remote connection
[22:50:33] [Server thread/TRACE] [FML/TwilightForest]: The mod TwilightForest accepts its own version (2.3.7)
[22:50:33] [Server thread/DEBUG] [FML/TwilightForest]: Attempting to inject @SidedProxy classes into TwilightForest
[22:50:33] [Server thread/TRACE] [TwilightForest/TwilightForest]: Sent event FMLConstructionEvent to mod TwilightForest
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: Construction - The Twilight Forest took 0.082s
[22:50:33] [Server thread/TRACE] [xaerominimap/xaerominimap]: Sending event FMLConstructionEvent to mod xaerominimap
[22:50:33] [Server thread/TRACE] [xaerominimap/xaerominimap]: Sent event FMLConstructionEvent to mod xaerominimap
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: Construction - Xaero\'s Minimap took 0.139s
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Finished: Construction took 2.561s
[22:50:33] [Server thread/DEBUG] [FML/]: Mod signature data
[22:50:33] [Server thread/DEBUG] [FML/]: Valid Signatures:
[22:50:33] [Server thread/DEBUG] [FML/]: (e3c3d50c7c986df74c645c0ac54639741c90a557) FML	(Forge Mod Loader	**.**.**.**)	forge.jar
[22:50:33] [Server thread/DEBUG] [FML/]: (e3c3d50c7c986df74c645c0ac54639741c90a557) Forge	(Minecraft Forge	10.13.4.1614)	forge.jar
[22:50:33] [Server thread/DEBUG] [FML/]: Missing Signatures:
[22:50:33] [Server thread/DEBUG] [FML/]: mcp	(Minecraft Coder Pack	9.05)	minecraft.jar
[22:50:33] [Server thread/DEBUG] [FML/]: IC2	(IndustrialCraft 2 Classic	2.2.999)	IC2Classic Version **.**.**.**.jar
[22:50:33] [Server thread/DEBUG] [FML/]: IC2-Classic-Spmod	(IC2 Classic Detection Helper	**.**.**.**)	IC2Classic Version **.**.**.**.jar
[22:50:33] [Server thread/DEBUG] [FML/]: IronChest	(Iron Chest	**.**.**.**)	ironchest-1.7.10-6.0.62.742-universal.jar
[22:50:33] [Server thread/DEBUG] [FML/]: TwilightForest	(The Twilight Forest	2.3.7)	twilightforest-1.7.10-2.3.7.jar
[22:50:33] [Server thread/DEBUG] [FML/]: xaerominimap	(Xaero\'s Minimap	1.16)	Xaeros_Minimap_1.16_Forge_1.7.10.jar
[22:50:33] [Server thread/ERROR] [FML/]: Fatal errors were detected during the transition from CONSTRUCTING to PREINITIALIZATION. Loading cannot continue
[22:50:33] [Server thread/ERROR] [FML/]: 
States: \'U\' = Unloaded \'L\' = Loaded \'C\' = Constructed \'H\' = Pre-initialized \'I\' = Initialized \'J\' = Post-initialized \'A\' = Available \'D\' = Disabled \'E\' = Errored
UC	mcp{9.05} [Minecraft Coder Pack] (minecraft.jar) 
UC	FML{**.**.**.**} [Forge Mod Loader] (forge.jar) 
UC	Forge{10.13.4.1614} [Minecraft Forge] (forge.jar) 
UC	IC2{2.2.999} [IndustrialCraft 2 Classic] (IC2Classic Version **.**.**.**.jar) 
UC	IC2-Classic-Spmod{**.**.**.**} [IC2 Classic Detection Helper] (IC2Classic Version **.**.**.**.jar) 
UC	IronChest{**.**.**.**} [Iron Chest] (ironchest-1.7.10-6.0.62.742-universal.jar) 
UC	TwilightForest{2.3.7} [The Twilight Forest] (twilightforest-1.7.10-2.3.7.jar) 
UE	xaerominimap{1.16} [Xaero\'s Minimap] (Xaeros_Minimap_1.16_Forge_1.7.10.jar) 
[22:50:33] [Server thread/ERROR] [FML/]: The following problems were captured during this phase
[22:50:33] [Server thread/ERROR] [FML/]: Caught exception from xaerominimap
java.lang.NoClassDefFoundError: net/minecraft/client/settings/KeyBinding
at xaero.minimap.XaeroMinimap.&lt;clinit&gt;(XaeroMinimap.java:59) ~[XaeroMinimap.class:?]
at java.lang.Class.forName0(Native Method) ~[?:1.8.0_144]
at java.lang.Class.forName(Class.java:348) ~[?:1.8.0_144]
at cpw.mods.fml.common.FMLModContainer.constructMod(FMLModContainer.java:440) ~[FMLModContainer.class:?]
at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_144]
at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_144]
at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_144]
at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_144]
at com.google.common.eventbus.EventSubscriber.handleEvent(EventSubscriber.java:74) ~[guava-17.0.jar:?]
at com.google.common.eventbus.SynchronizedEventSubscriber.handleEvent(SynchronizedEventSubscriber.java:47) ~[guava-17.0.jar:?]
at com.google.common.eventbus.EventBus.dispatch(EventBus.java:322) ~[guava-17.0.jar:?]
at com.google.common.eventbus.EventBus.dispatchQueuedEvents(EventBus.java:304) ~[guava-17.0.jar:?]
at com.google.common.eventbus.EventBus.post(EventBus.java:275) ~[guava-17.0.jar:?]
at cpw.mods.fml.common.LoadController.sendEventToModContainer(LoadController.java:212) ~[LoadController.class:?]
at cpw.mods.fml.common.LoadController.propogateStateMessage(LoadController.java:190) ~[LoadController.class:?]
at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_144]
at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_144]
at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_144]
at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_144]
at com.google.common.eventbus.EventSubscriber.handleEvent(EventSubscriber.java:74) ~[guava-17.0.jar:?]
at com.google.common.eventbus.SynchronizedEventSubscriber.handleEvent(SynchronizedEventSubscriber.java:47) ~[guava-17.0.jar:?]
at com.google.common.eventbus.EventBus.dispatch(EventBus.java:322) ~[guava-17.0.jar:?]
at com.google.common.eventbus.EventBus.dispatchQueuedEvents(EventBus.java:304) ~[guava-17.0.jar:?]
at com.google.common.eventbus.EventBus.post(EventBus.java:275) ~[guava-17.0.jar:?]
at cpw.mods.fml.common.LoadController.distributeStateMessage(LoadController.java:119) [LoadController.class:?]
at cpw.mods.fml.common.Loader.loadMods(Loader.java:513) [Loader.class:?]
at cpw.mods.fml.server.FMLServerHandler.beginServerLoading(FMLServerHandler.java:87) [FMLServerHandler.class:?]
at cpw.mods.fml.common.FMLCommonHandler.onServerStart(FMLCommonHandler.java:314) [FMLCommonHandler.class:?]
at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:117) [lt.class:?]
at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:387) [MinecraftServer.class:?]
at net.minecraft.server.MinecraftServer$2.run(MinecraftServer.java:685) [li.class:?]
Caused by: java.lang.ClassNotFoundException: net.minecraft.client.settings.KeyBinding
at net.minecraft.launchwrapper.LaunchClassLoader.findClass(LaunchClassLoader.java:191) ~[launchwrapper-1.12.jar:?]
at java.lang.ClassLoader.loadClass(ClassLoader.java:424) ~[?:1.8.0_144]
at java.lang.ClassLoader.loadClass(ClassLoader.java:357) ~[?:1.8.0_144]
... 31 more
Caused by: java.lang.NullPointerException
at net.minecraft.launchwrapper.LaunchClassLoader.findClass(LaunchClassLoader.java:182) ~[launchwrapper-1.12.jar:?]
at java.lang.ClassLoader.loadClass(ClassLoader.java:424) ~[?:1.8.0_144]
at java.lang.ClassLoader.loadClass(ClassLoader.java:357) ~[?:1.8.0_144]
... 31 more
[22:50:33] [Server thread/WARN] [FML/]: Can\'t revert to frozen GameData state without freezing first.
[22:50:33] [Server thread/TRACE] [mcp/mcp]: Sending event FMLModIdMappingEvent to mod mcp
[22:50:33] [Server thread/TRACE] [mcp/mcp]: Sent event FMLModIdMappingEvent to mod mcp
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Minecraft Coder Pack took 0.001s
[22:50:33] [Server thread/TRACE] [FML/FML]: Sending event FMLModIdMappingEvent to mod FML
[22:50:33] [Server thread/TRACE] [FML/FML]: Sent event FMLModIdMappingEvent to mod FML
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Forge Mod Loader took 0.005s
[22:50:33] [Server thread/TRACE] [Forge/Forge]: Sending event FMLModIdMappingEvent to mod Forge
[22:50:33] [Server thread/TRACE] [Forge/Forge]: Sent event FMLModIdMappingEvent to mod Forge
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Minecraft Forge took 0.003s
[22:50:33] [Server thread/TRACE] [IC2/IC2]: Sending event FMLModIdMappingEvent to mod IC2
[22:50:33] [Server thread/TRACE] [IC2/IC2]: Sent event FMLModIdMappingEvent to mod IC2
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - IndustrialCraft 2 Classic took 0.001s
[22:50:33] [Server thread/TRACE] [IC2-Classic-Spmod/IC2-Classic-Spmod]: Sending event FMLModIdMappingEvent to mod IC2-Classic-Spmod
[22:50:33] [Server thread/TRACE] [IC2-Classic-Spmod/IC2-Classic-Spmod]: Sent event FMLModIdMappingEvent to mod IC2-Classic-Spmod
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - IC2 Classic Detection Helper took 0.001s
[22:50:33] [Server thread/TRACE] [IronChest/IronChest]: Sending event FMLModIdMappingEvent to mod IronChest
[22:50:33] [Server thread/TRACE] [IronChest/IronChest]: Sent event FMLModIdMappingEvent to mod IronChest
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Iron Chest took 0.001s
[22:50:33] [Server thread/TRACE] [TwilightForest/TwilightForest]: Sending event FMLModIdMappingEvent to mod TwilightForest
[22:50:33] [Server thread/TRACE] [TwilightForest/TwilightForest]: Sent event FMLModIdMappingEvent to mod TwilightForest
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - The Twilight Forest took 0.001s
[22:50:33] [Server thread/TRACE] [xaerominimap/xaerominimap]: Sending event FMLModIdMappingEvent to mod xaerominimap
[22:50:33] [Server thread/TRACE] [xaerominimap/xaerominimap]: Sent event FMLModIdMappingEvent to mod xaerominimap
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Xaero\'s Minimap took 0.002s
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Finished: ModIdMapping took 0.015s
[22:50:33] [Server thread/INFO] [FML/]: Applying holder lookups
[22:50:33] [Server thread/INFO] [FML/]: Holder lookups applied
[22:50:33] [Server thread/TRACE] [mcp/mcp]: Sending event FMLServerStoppedEvent to mod mcp
[22:50:33] [Server thread/TRACE] [mcp/mcp]: Sent event FMLServerStoppedEvent to mod mcp
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Minecraft Coder Pack took 0.001s
[22:50:33] [Server thread/TRACE] [FML/FML]: Sending event FMLServerStoppedEvent to mod FML
[22:50:33] [Server thread/TRACE] [FML/FML]: Sent event FMLServerStoppedEvent to mod FML
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Forge Mod Loader took 0.003s
[22:50:33] [Server thread/TRACE] [Forge/Forge]: Sending event FMLServerStoppedEvent to mod Forge
[22:50:33] [Server thread/TRACE] [Forge/Forge]: Sent event FMLServerStoppedEvent to mod Forge
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Minecraft Forge took 0.001s
[22:50:33] [Server thread/TRACE] [IC2/IC2]: Sending event FMLServerStoppedEvent to mod IC2
[22:50:33] [Server thread/TRACE] [IC2/IC2]: Sent event FMLServerStoppedEvent to mod IC2
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - IndustrialCraft 2 Classic took 0.001s
[22:50:33] [Server thread/TRACE] [IC2-Classic-Spmod/IC2-Classic-Spmod]: Sending event FMLServerStoppedEvent to mod IC2-Classic-Spmod
[22:50:33] [Server thread/TRACE] [IC2-Classic-Spmod/IC2-Classic-Spmod]: Sent event FMLServerStoppedEvent to mod IC2-Classic-Spmod
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - IC2 Classic Detection Helper took 0.002s
[22:50:33] [Server thread/TRACE] [IronChest/IronChest]: Sending event FMLServerStoppedEvent to mod IronChest
[22:50:33] [Server thread/TRACE] [IronChest/IronChest]: Sent event FMLServerStoppedEvent to mod IronChest
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Iron Chest took 0.001s
[22:50:33] [Server thread/TRACE] [TwilightForest/TwilightForest]: Sending event FMLServerStoppedEvent to mod TwilightForest
[22:50:33] [Server thread/TRACE] [TwilightForest/TwilightForest]: Sent event FMLServerStoppedEvent to mod TwilightForest
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - The Twilight Forest took 0.001s
[22:50:33] [Server thread/TRACE] [xaerominimap/xaerominimap]: Sending event FMLServerStoppedEvent to mod xaerominimap
[22:50:33] [Server thread/TRACE] [xaerominimap/xaerominimap]: Sent event FMLServerStoppedEvent to mod xaerominimap
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Xaero\'s Minimap took 0.002s
[22:50:33] [Server thread/DEBUG] [FML/]: Bar Finished: ServerStopped took 0.011s
[22:50:33] [Server thread/INFO] [FML/]: The state engine was in incorrect state ERRORED and forced into state SERVER_STOPPED. Errors may have been discarded.
[22:50:33] [Server thread/INFO] [FML/]: The state engine was in incorrect state ERRORED and forced into state AVAILABLE. Errors may have been discarded.
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModFatalProblem Object
                (
                    [modFileName:protected] => Xaeros_Minimap_1.16_Forge_1.7.10.jar
                    [modVersion:protected] => 1.16
                    [modId:protected] => xaerominimap
                    [modName:protected] => Xaero\'s Minimap
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => mods/Xaeros_Minimap_1.16_Forge_1.7.10.jar
                                    [relativePath:protected] => 1
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallDifferentVersionSolution Object
                                (
                                    [modName:protected] => Xaero\'s Minimap
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [22:50:33] [Server thread/ERROR] [FML/]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [22:50:33] [Server thread/ERROR] [FML/]: 
                                            [number:protected] => 196
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => States: \'U\' = Unloaded \'L\' = Loaded \'C\' = Constructed \'H\' = Pre-initialized \'I\' = Initialized \'J\' = Post-initialized \'A\' = Available \'D\' = Disabled \'E\' = Errored
                                            [number:protected] => 197
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => UC	mcp{9.05} [Minecraft Coder Pack] (minecraft.jar) 
                                            [number:protected] => 198
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => UC	FML{**.**.**.**} [Forge Mod Loader] (forge.jar) 
                                            [number:protected] => 199
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => UC	Forge{10.13.4.1614} [Minecraft Forge] (forge.jar) 
                                            [number:protected] => 200
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => UC	IC2{2.2.999} [IndustrialCraft 2 Classic] (IC2Classic Version **.**.**.**.jar) 
                                            [number:protected] => 201
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => UC	IC2-Classic-Spmod{**.**.**.**} [IC2 Classic Detection Helper] (IC2Classic Version **.**.**.**.jar) 
                                            [number:protected] => 202
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => UC	IronChest{**.**.**.**} [Iron Chest] (ironchest-1.7.10-6.0.62.742-universal.jar) 
                                            [number:protected] => 203
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => UC	TwilightForest{2.3.7} [The Twilight Forest] (twilightforest-1.7.10-2.3.7.jar) 
                                            [number:protected] => 204
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => UE	xaerominimap{1.16} [Xaero\'s Minimap] (Xaeros_Minimap_1.16_Forge_1.7.10.jar) 
                                            [number:protected] => 205
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModExceptionProblem Object
                (
                    [modName:protected] => xaerominimap
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallDifferentVersionSolution Object
                                (
                                    [modName:protected] => xaerominimap
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModRemoveSolution Object
                                (
                                    [modName:protected] => xaerominimap
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [22:50:33] [Server thread/ERROR] [FML/]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [22:50:33] [Server thread/ERROR] [FML/]: Caught exception from xaerominimap
                                            [number:protected] => 207
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => java.lang.NoClassDefFoundError: net/minecraft/client/settings/KeyBinding
                                            [number:protected] => 208
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at xaero.minimap.XaeroMinimap.&lt;clinit&gt;(XaeroMinimap.java:59) ~[XaeroMinimap.class:?]
                                            [number:protected] => 209
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.Class.forName0(Native Method) ~[?:1.8.0_144]
                                            [number:protected] => 210
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.Class.forName(Class.java:348) ~[?:1.8.0_144]
                                            [number:protected] => 211
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at cpw.mods.fml.common.FMLModContainer.constructMod(FMLModContainer.java:440) ~[FMLModContainer.class:?]
                                            [number:protected] => 212
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_144]
                                            [number:protected] => 213
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_144]
                                            [number:protected] => 214
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_144]
                                            [number:protected] => 215
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_144]
                                            [number:protected] => 216
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.EventSubscriber.handleEvent(EventSubscriber.java:74) ~[guava-17.0.jar:?]
                                            [number:protected] => 217
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.SynchronizedEventSubscriber.handleEvent(SynchronizedEventSubscriber.java:47) ~[guava-17.0.jar:?]
                                            [number:protected] => 218
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.EventBus.dispatch(EventBus.java:322) ~[guava-17.0.jar:?]
                                            [number:protected] => 219
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.EventBus.dispatchQueuedEvents(EventBus.java:304) ~[guava-17.0.jar:?]
                                            [number:protected] => 220
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.EventBus.post(EventBus.java:275) ~[guava-17.0.jar:?]
                                            [number:protected] => 221
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at cpw.mods.fml.common.LoadController.sendEventToModContainer(LoadController.java:212) ~[LoadController.class:?]
                                            [number:protected] => 222
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at cpw.mods.fml.common.LoadController.propogateStateMessage(LoadController.java:190) ~[LoadController.class:?]
                                            [number:protected] => 223
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_144]
                                            [number:protected] => 224
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_144]
                                            [number:protected] => 225
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_144]
                                            [number:protected] => 226
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_144]
                                            [number:protected] => 227
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.EventSubscriber.handleEvent(EventSubscriber.java:74) ~[guava-17.0.jar:?]
                                            [number:protected] => 228
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.SynchronizedEventSubscriber.handleEvent(SynchronizedEventSubscriber.java:47) ~[guava-17.0.jar:?]
                                            [number:protected] => 229
                                        )

                                    [23] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.EventBus.dispatch(EventBus.java:322) ~[guava-17.0.jar:?]
                                            [number:protected] => 230
                                        )

                                    [24] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.EventBus.dispatchQueuedEvents(EventBus.java:304) ~[guava-17.0.jar:?]
                                            [number:protected] => 231
                                        )

                                    [25] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.EventBus.post(EventBus.java:275) ~[guava-17.0.jar:?]
                                            [number:protected] => 232
                                        )

                                    [26] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at cpw.mods.fml.common.LoadController.distributeStateMessage(LoadController.java:119) [LoadController.class:?]
                                            [number:protected] => 233
                                        )

                                    [27] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at cpw.mods.fml.common.Loader.loadMods(Loader.java:513) [Loader.class:?]
                                            [number:protected] => 234
                                        )

                                    [28] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at cpw.mods.fml.server.FMLServerHandler.beginServerLoading(FMLServerHandler.java:87) [FMLServerHandler.class:?]
                                            [number:protected] => 235
                                        )

                                    [29] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at cpw.mods.fml.common.FMLCommonHandler.onServerStart(FMLCommonHandler.java:314) [FMLCommonHandler.class:?]
                                            [number:protected] => 236
                                        )

                                    [30] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:117) [lt.class:?]
                                            [number:protected] => 237
                                        )

                                    [31] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:387) [MinecraftServer.class:?]
                                            [number:protected] => 238
                                        )

                                    [32] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.MinecraftServer$2.run(MinecraftServer.java:685) [li.class:?]
                                            [number:protected] => 239
                                        )

                                    [33] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Caused by: java.lang.ClassNotFoundException: net.minecraft.client.settings.KeyBinding
                                            [number:protected] => 240
                                        )

                                    [34] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.launchwrapper.LaunchClassLoader.findClass(LaunchClassLoader.java:191) ~[launchwrapper-1.12.jar:?]
                                            [number:protected] => 241
                                        )

                                    [35] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:424) ~[?:1.8.0_144]
                                            [number:protected] => 242
                                        )

                                    [36] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:357) ~[?:1.8.0_144]
                                            [number:protected] => 243
                                        )

                                    [37] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => ... 31 more
                                            [number:protected] => 244
                                        )

                                    [38] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Caused by: java.lang.NullPointerException
                                            [number:protected] => 245
                                        )

                                    [39] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.launchwrapper.LaunchClassLoader.findClass(LaunchClassLoader.java:182) ~[launchwrapper-1.12.jar:?]
                                            [number:protected] => 246
                                        )

                                    [40] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:424) ~[?:1.8.0_144]
                                            [number:protected] => 247
                                        )

                                    [41] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:357) ~[?:1.8.0_144]
                                            [number:protected] => 248
                                        )

                                    [42] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => ... 31 more
                                            [number:protected] => 249
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