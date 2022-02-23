<?php

class ForgeWorldMissingModTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-world-missing-mod.log");
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
                                    [text:protected] => [21:32:32] [main/DEBUG] [FML/]: Injecting tracing printstreams for STDOUT/STDERR.
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:32] [main/DEBUG] [FML/]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/INFO] [FML/]: Forge Mod Loader version 11.15.1.2318 for Minecraft 1.8.9 loading
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/INFO] [FML/]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/INFO] [FML/]: Java is Java HotSpot(TM) 64-Bit Server VM, version 1.8.0_144, running on Linux:amd64:4.4.0-141-generic, installed at /aternos/bin/jdk1.8.0_144/jre
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/INFO] [FML/]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Java classpath at launch is forge.jar
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Java library path at launch is /usr/java/packages/lib/amd64:/usr/lib64:/lib64:/lib:/usr/lib
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Enabling runtime deobfuscation
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Instantiating coremod class FMLCorePlugin
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Added access transformer class net.minecraftforge.fml.common.asm.transformers.AccessTransformer to enqueued access transformers
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Enqueued coremod FMLCorePlugin
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Instantiating coremod class FMLForgePlugin
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Enqueued coremod FMLForgePlugin
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: All fundamental core mods are successfully located
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Attempting to load commandline specified mods, relative to /aternos/server/.
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Discovering coremods
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Examining for coremod candidacy AntMan-1.8.9-1.2.0.jar
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Not found coremod data in AntMan-1.8.9-1.2.0.jar
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Examining for coremod candidacy LucraftCore-1.8.9-1.2.0.jar
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/TRACE] [FML/]: Found FMLCorePluginContainsFMLMod marker in LucraftCore-1.8.9-1.2.0.jar, it will be examined later for regular @Mod instances
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/TRACE] [FML/]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Instantiating coremod class LucraftForgeLoading
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: The coremod lucraft.mods.lucraftcore.access.LucraftForgeLoading requested minecraft version 1.8.9 and minecraft is 1.8.9. It will be loaded.
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Enqueued coremod LucraftForgeLoading
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/INFO] [LaunchWrapper/]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/INFO] [LaunchWrapper/]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/INFO] [LaunchWrapper/]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/INFO] [LaunchWrapper/]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/INFO] [LaunchWrapper/]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/INFO] [LaunchWrapper/]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/INFO] [LaunchWrapper/]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Injecting coremod FMLCorePlugin {net.minecraftforge.fml.relauncher.FMLCorePlugin} class transformers
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.fml.common.asm.transformers.BlamingTransformer
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/TRACE] [FML/]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.fml.common.asm.transformers.SideTransformer
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/TRACE] [FML/]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.fml.common.asm.transformers.EventSubscriptionTransformer
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/TRACE] [FML/]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.fml.common.asm.transformers.EventSubscriberTransformer
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/TRACE] [FML/]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Running coremod plugin for FMLCorePlugin {net.minecraftforge.fml.relauncher.FMLCorePlugin}
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:33] [main/DEBUG] [FML/]: Running coremod plugin FMLCorePlugin
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:33] [main/DEBUG] [FML/]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:36] [main/DEBUG] [FML/]: Read 825 binary patches
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:36] [main/DEBUG] [FML/]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:37] [main/DEBUG] [FML/]: Loading deobfuscation resource /deobfuscation_data-1.8.9.lzma with 27891 records
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:37] [main/DEBUG] [FML/]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:41] [main/INFO] [FML/]: Found valid fingerprint for Minecraft Forge. Certificate fingerprint e3c3d50c7c986df74c645c0ac54639741c90a557
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:41] [main/INFO] [FML/]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:41] [main/DEBUG] [FML/]: Coremod plugin class FMLCorePlugin run successfully
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:41] [main/DEBUG] [FML/]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:41] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:41] [main/INFO] [LaunchWrapper/]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:41] [main/DEBUG] [FML/]: Injecting coremod FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin} class transformers
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:41] [main/DEBUG] [FML/]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:41] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:41] [main/DEBUG] [FML/]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:41] [main/DEBUG] [FML/]: Running coremod plugin for FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin}
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:41] [main/DEBUG] [FML/]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:41] [main/DEBUG] [FML/]: Running coremod plugin FMLForgePlugin
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:41] [main/DEBUG] [FML/]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:41] [main/DEBUG] [FML/]: Coremod plugin class FMLForgePlugin run successfully
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:41] [main/DEBUG] [FML/]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:41] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:41] [main/INFO] [LaunchWrapper/]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:41] [main/DEBUG] [FML/]: Loaded 165 rules from AccessTransformer config file forge_at.cfg
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:41] [main/DEBUG] [FML/]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:41] [main/DEBUG] [FML/]: Validating minecraft
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:41] [main/DEBUG] [FML/]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:46] [main/DEBUG] [FML/]: Minecraft validated, launching...
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:46] [main/DEBUG] [FML/]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:46] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:46] [main/INFO] [LaunchWrapper/]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:46] [main/DEBUG] [FML/]: Injecting coremod LucraftForgeLoading {lucraft.mods.lucraftcore.access.LucraftForgeLoading} class transformers
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:46] [main/DEBUG] [FML/]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:46] [main/TRACE] [FML/]: Registering transformer lucraft.mods.lucraftcore.access.LucraftClassTransformer
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:46] [main/TRACE] [FML/]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:46] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:46] [main/DEBUG] [FML/]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:46] [main/DEBUG] [FML/]: Running coremod plugin for LucraftForgeLoading {lucraft.mods.lucraftcore.access.LucraftForgeLoading}
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:46] [main/DEBUG] [FML/]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:46] [main/DEBUG] [FML/]: Running coremod plugin LucraftForgeLoading
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:46] [main/DEBUG] [FML/]:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:46] [main/DEBUG] [FML/]: Coremod plugin class LucraftForgeLoading run successfully
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:46] [main/DEBUG] [FML/]:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:46] [main/INFO] [LaunchWrapper/]: Loading tweak class name net.minecraftforge.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:46] [main/INFO] [LaunchWrapper/]:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:46] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:46] [main/INFO] [LaunchWrapper/]:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:32:49] [main/INFO] [LaunchWrapper/]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:32:49] [main/INFO] [LaunchWrapper/]:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:19] [Server thread/INFO] [FML/]: MinecraftForge v11.15.1.2318 Initialized
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:19] [Server thread/INFO] [FML/]:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:20] [Server thread/INFO] [FML/]: Replaced 229 ore recipies
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:20] [Server thread/INFO] [FML/]:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:20] [Server thread/DEBUG] [FML/]: File /aternos/server/config/injectedDependencies.json not found. No dependencies injected
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:20] [Server thread/DEBUG] [FML/]:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:20] [Server thread/DEBUG] [FML/]: Building injected Mod Containers [net.minecraftforge.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer]
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:20] [Server thread/DEBUG] [FML/]:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:20] [Server thread/DEBUG] [FML/]: Attempting to load mods contained in the minecraft jar file and associated classes
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:20] [Server thread/DEBUG] [FML/]:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:20] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/forge.jar, examining for mod candidates
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:20] [Server thread/DEBUG] [FML/]:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:20] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/LucraftCore-1.8.9-1.2.0.jar
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:20] [Server thread/TRACE] [FML/]:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:20] [Server thread/DEBUG] [FML/]: Minecraft jar mods loaded successfully
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:20] [Server thread/DEBUG] [FML/]:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:20] [Server thread/INFO] [FML/]: Found 0 mods from the command line. Injecting into mod discoverer
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:20] [Server thread/INFO] [FML/]:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:20] [Server thread/INFO] [FML/]: Searching /aternos/server/mods for mods
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:20] [Server thread/INFO] [FML/]:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:20] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file AntMan-1.8.9-1.2.0.jar
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:20] [Server thread/DEBUG] [FML/]:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:20] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file LucraftCore-1.8.9-1.2.0.jar
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:20] [Server thread/DEBUG] [FML/]:
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:20] [Server thread/DEBUG] [FML/]: Examining file forge.jar for potential mods
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:20] [Server thread/DEBUG] [FML/]:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:20] [Server thread/DEBUG] [FML/]: The mod container forge.jar appears to be missing an mcmod.info file
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:20] [Server thread/DEBUG] [FML/]:
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:24] [Server thread/DEBUG] [FML/]: Examining file AntMan-1.8.9-1.2.0.jar for potential mods
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:24] [Server thread/DEBUG] [FML/]:
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:24] [Server thread/TRACE] [FML/]: Located mcmod.info file in file AntMan-1.8.9-1.2.0.jar
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:24] [Server thread/TRACE] [FML/]:
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:24] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (lucraft.mods.heroes.antman.AntMan) - loading
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:24] [Server thread/DEBUG] [FML/]:
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:24] [Server thread/TRACE] [AntMan/]: Parsed dependency info : [LucraftCore@[1.8.9-1.2.0,)] [] [LucraftCore@[1.8.9-1.2.0,)]
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:24] [Server thread/TRACE] [AntMan/]:
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:24] [Server thread/DEBUG] [FML/]: Examining file LucraftCore-1.8.9-1.2.0.jar for potential mods
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:24] [Server thread/DEBUG] [FML/]:
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:24] [Server thread/TRACE] [FML/]: Located mcmod.info file in file LucraftCore-1.8.9-1.2.0.jar
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:24] [Server thread/TRACE] [FML/]:
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:24] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (lucraft.mods.lucraftcore.LucraftCore) - loading
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:24] [Server thread/DEBUG] [FML/]:
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:24] [Server thread/TRACE] [LucraftCore/]: Parsed dependency info : [Forge@[11.15.1.1785,)] [Forge@[11.15.1.1785,)] []
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:24] [Server thread/TRACE] [LucraftCore/]:
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:24] [Server thread/INFO] [FML/]: Forge Mod Loader has identified 5 mods to load
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:24] [Server thread/INFO] [FML/]:
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:24] [Server thread/TRACE] [FML/]: Received a system property request \'\'
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:24] [Server thread/TRACE] [FML/]:
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:24] [Server thread/TRACE] [FML/]: System property request managing the state of 0 mods
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:24] [Server thread/TRACE] [FML/]:
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:24] [Server thread/DEBUG] [FML/]: After merging, found state information for 0 mods
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:24] [Server thread/DEBUG] [FML/]:
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:24] [Server thread/DEBUG] [FML/]: Found translations in forge.jar [af_ZA, ar_SA, br_FR, ca_ES, cs_CZ, da_DK, de_DE, el_GR, en_US, es_ES, fa_IR, fi_FI, fr_FR, he_IL, hu_HU, it_IT, ja_JP, ko_KR, lt_LT, nb_NO, nl_NL, nn_NO, no_NO, pl_PL, pt_BR, pt_PT, ro_RO, ru_RU, sl_SI, sr_SP, sv_SE, tr_TR, uk_UA, vi_VN, zh_CN, zh_TW]
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:24] [Server thread/DEBUG] [FML/]:
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/DEBUG] [FML/]: Found translations in forge.jar [af_ZA, ar_SA, br_FR, ca_ES, cs_CZ, da_DK, de_DE, el_GR, en_US, es_ES, fa_IR, fi_FI, fr_FR, he_IL, hu_HU, it_IT, ja_JP, ko_KR, lt_LT, nb_NO, nl_NL, nn_NO, no_NO, pl_PL, pt_BR, pt_PT, ro_RO, ru_RU, sl_SI, sr_SP, sv_SE, tr_TR, uk_UA, vi_VN, zh_CN, zh_TW]
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/DEBUG] [FML/]:
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/DEBUG] [AntMan/]: Enabling mod AntMan
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/DEBUG] [AntMan/]:
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/DEBUG] [FML/]: Found translations in AntMan-1.8.9-1.2.0.jar [de_DE, en_US, fil_PH, fr_FR, zh_TW]
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/DEBUG] [FML/]:
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/DEBUG] [LucraftCore/]: Enabling mod LucraftCore
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/DEBUG] [LucraftCore/]:
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/DEBUG] [FML/]: Found translations in LucraftCore-1.8.9-1.2.0.jar [de_DE, en_US, fil_PH, fr_FR]
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/DEBUG] [FML/]:
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/TRACE] [FML/]: Verifying mod requirements are satisfied
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/TRACE] [FML/]:
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/TRACE] [FML/]: All mod requirements are satisfied
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/TRACE] [FML/]:
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/TRACE] [FML/]: Sorting mods into an ordered list
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/TRACE] [FML/]:
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/TRACE] [FML/]: Mod sorting completed successfully
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/TRACE] [FML/]:
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/DEBUG] [FML/]: Mod sorting data
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/DEBUG] [FML/]:
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/DEBUG] [FML/]: 	AntMan(AntMan:1.8.9-1.2.0): AntMan-1.8.9-1.2.0.jar (required-before:LucraftCore@[1.8.9-1.2.0,))
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/DEBUG] [FML/]:
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/DEBUG] [FML/]: 	LucraftCore(Lucraft: Core:1.8.9-1.2.0): LucraftCore-1.8.9-1.2.0.jar (required-after:Forge@[11.15.1.1785,);)
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/DEBUG] [FML/]:
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/TRACE] [mcp/mcp]: Sending event FMLConstructionEvent to mod mcp
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/TRACE] [mcp/mcp]:
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/TRACE] [mcp/mcp]: Sent event FMLConstructionEvent to mod mcp
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/TRACE] [mcp/mcp]:
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/DEBUG] [FML/]: Bar Step: Construction - Minecraft Coder Pack took 0.007s
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/DEBUG] [FML/]:
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/TRACE] [FML/FML]: Sending event FMLConstructionEvent to mod FML
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/TRACE] [FML/FML]:
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/TRACE] [FML/FML]: Mod FML is using network checker : Invoking method checkModLists
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/TRACE] [FML/FML]:
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/TRACE] [FML/FML]: Testing mod FML to verify it accepts its own version in a remote connection
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/TRACE] [FML/FML]:
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/TRACE] [FML/FML]: The mod FML accepts its own version (**.**.**.**)
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/TRACE] [FML/FML]:
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/INFO] [FML/FML]: Attempting connection with missing mods [mcp, FML, Forge, AntMan, LucraftCore] at CLIENT
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/INFO] [FML/FML]:
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:25] [Server thread/INFO] [FML/FML]: Attempting connection with missing mods [mcp, FML, Forge, AntMan, LucraftCore] at SERVER
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:25] [Server thread/INFO] [FML/FML]:
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/TRACE] [FML/FML]: Sent event FMLConstructionEvent to mod FML
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/TRACE] [FML/FML]:
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/DEBUG] [FML/]: Bar Step: Construction - Forge Mod Loader took 2.130s
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/DEBUG] [FML/]:
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/TRACE] [Forge/Forge]: Sending event FMLConstructionEvent to mod Forge
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/TRACE] [Forge/Forge]:
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/TRACE] [FML/Forge]: Mod Forge is using network checker : No network checking performed
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/TRACE] [FML/Forge]:
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/TRACE] [FML/Forge]: Testing mod Forge to verify it accepts its own version in a remote connection
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/TRACE] [FML/Forge]:
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/TRACE] [FML/Forge]: The mod Forge accepts its own version (11.15.1.2318)
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/TRACE] [FML/Forge]:
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/TRACE] [Forge/Forge]: Sent event FMLConstructionEvent to mod Forge
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/TRACE] [Forge/Forge]:
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/DEBUG] [FML/]: Bar Step: Construction - Minecraft Forge took 0.031s
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/DEBUG] [FML/]:
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/TRACE] [AntMan/AntMan]: Sending event FMLConstructionEvent to mod AntMan
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/TRACE] [AntMan/AntMan]:
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/TRACE] [FML/AntMan]: Mod AntMan is using network checker : Accepting version 1.8.9-1.2.0
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/TRACE] [FML/AntMan]:
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/TRACE] [FML/AntMan]: Testing mod AntMan to verify it accepts its own version in a remote connection
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/TRACE] [FML/AntMan]:
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/TRACE] [FML/AntMan]: The mod AntMan accepts its own version (1.8.9-1.2.0)
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/TRACE] [FML/AntMan]:
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/DEBUG] [FML/AntMan]: Attempting to inject @SidedProxy classes into AntMan
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/DEBUG] [FML/AntMan]:
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/TRACE] [AntMan/AntMan]: Sent event FMLConstructionEvent to mod AntMan
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/TRACE] [AntMan/AntMan]:
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/DEBUG] [FML/]: Bar Step: Construction - AntMan took 0.456s
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/DEBUG] [FML/]:
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sending event FMLConstructionEvent to mod LucraftCore
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/TRACE] [LucraftCore/LucraftCore]:
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/TRACE] [FML/LucraftCore]: Mod LucraftCore is using network checker : Accepting version 1.8.9-1.2.0
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/TRACE] [FML/LucraftCore]:
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/TRACE] [FML/LucraftCore]: Testing mod LucraftCore to verify it accepts its own version in a remote connection
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/TRACE] [FML/LucraftCore]:
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/TRACE] [FML/LucraftCore]: The mod LucraftCore accepts its own version (1.8.9-1.2.0)
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/TRACE] [FML/LucraftCore]:
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:27] [Server thread/DEBUG] [FML/LucraftCore]: Attempting to inject @SidedProxy classes into LucraftCore
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:27] [Server thread/DEBUG] [FML/LucraftCore]:
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sent event FMLConstructionEvent to mod LucraftCore
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/TRACE] [LucraftCore/LucraftCore]:
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/DEBUG] [FML/]: Bar Step: Construction - Lucraft: Core took 0.261s
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/DEBUG] [FML/]:
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/DEBUG] [FML/]: Bar Finished: Construction took 2.885s
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/DEBUG] [FML/]:
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/DEBUG] [FML/]: Mod signature data
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/DEBUG] [FML/]:
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/DEBUG] [FML/]:  	Valid Signatures:
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/DEBUG] [FML/]:
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/DEBUG] [FML/]: 		(e3c3d50c7c986df74c645c0ac54639741c90a557) FML	(Forge Mod Loader	**.**.**.**)	forge.jar
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/DEBUG] [FML/]:
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/DEBUG] [FML/]: 		(e3c3d50c7c986df74c645c0ac54639741c90a557) Forge	(Minecraft Forge	11.15.1.2318)	forge.jar
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/DEBUG] [FML/]:
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/DEBUG] [FML/]:  	Missing Signatures:
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/DEBUG] [FML/]:
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/DEBUG] [FML/]: 		mcp	(Minecraft Coder Pack	9.19)	minecraft.jar
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/DEBUG] [FML/]:
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/DEBUG] [FML/]: 		AntMan	(AntMan	1.8.9-1.2.0)	AntMan-1.8.9-1.2.0.jar
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/DEBUG] [FML/]:
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/DEBUG] [FML/]: 		LucraftCore	(Lucraft: Core	1.8.9-1.2.0)	LucraftCore-1.8.9-1.2.0.jar
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/DEBUG] [FML/]:
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/INFO] [FML/]: Processing ObjectHolder annotations
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/INFO] [FML/]:
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/INFO] [FML/]: Found 384 ObjectHolder annotations
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/INFO] [FML/]:
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/INFO] [FML/]: Identifying ItemStackHolder annotations
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/INFO] [FML/]:
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/INFO] [FML/]: Found 0 ItemStackHolder annotations
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/INFO] [FML/]:
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/TRACE] [mcp/mcp]: Sending event FMLPreInitializationEvent to mod mcp
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/TRACE] [mcp/mcp]:
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/TRACE] [mcp/mcp]: Sent event FMLPreInitializationEvent to mod mcp
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/TRACE] [mcp/mcp]:
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/DEBUG] [FML/]: Bar Step: PreInitialization - Minecraft Coder Pack took 0.001s
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/DEBUG] [FML/]:
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/TRACE] [FML/FML]: Sending event FMLPreInitializationEvent to mod FML
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/TRACE] [FML/FML]:
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/TRACE] [FML/FML]: Sent event FMLPreInitializationEvent to mod FML
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/TRACE] [FML/FML]:
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/DEBUG] [FML/]: Bar Step: PreInitialization - Forge Mod Loader took 0.077s
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/DEBUG] [FML/]:
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:28] [Server thread/TRACE] [Forge/Forge]: Sending event FMLPreInitializationEvent to mod Forge
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:28] [Server thread/TRACE] [Forge/Forge]:
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:29] [Server thread/INFO] [FML/Forge]: Configured a dormant chunk cache size of 0
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:29] [Server thread/INFO] [FML/Forge]:
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:29] [Forge Version Check/INFO] [ForgeVersionCheck/Forge]: [Forge] Starting version check at http://files.minecraftforge.net/maven/net/minecraftforge/forge/promotions_slim.json
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:29] [Forge Version Check/INFO] [ForgeVersionCheck/Forge]:
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:29] [Server thread/TRACE] [Forge/Forge]: Sent event FMLPreInitializationEvent to mod Forge
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:29] [Server thread/TRACE] [Forge/Forge]:
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:29] [Server thread/DEBUG] [FML/]: Bar Step: PreInitialization - Minecraft Forge took 0.728s
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:29] [Server thread/DEBUG] [FML/]:
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:29] [Server thread/TRACE] [AntMan/AntMan]: Sending event FMLPreInitializationEvent to mod AntMan
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:29] [Server thread/TRACE] [AntMan/AntMan]:
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:29] [Forge Version Check/DEBUG] [ForgeVersionCheck/Forge]: [Forge] Received version check data:
                                    [number:protected] => 154
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => {
                                    [number:protected] => 155
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "homepage": "http://files.minecraftforge.net/maven/net/minecraftforge/forge/",
                                    [number:protected] => 156
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "promos": {
                                    [number:protected] => 157
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.1-latest": "**.**.**.**",
                                    [number:protected] => 158
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.10-latest": "12.18.0.2000",
                                    [number:protected] => 159
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.10.2-latest": "12.18.3.2511",
                                    [number:protected] => 160
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.10.2-recommended": "12.18.3.2185",
                                    [number:protected] => 161
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.11-latest": "13.19.1.2199",
                                    [number:protected] => 162
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.11-recommended": "13.19.1.2189",
                                    [number:protected] => 163
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.11.2-latest": "13.20.1.2588",
                                    [number:protected] => 164
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.11.2-recommended": "13.20.1.2386",
                                    [number:protected] => 165
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.12-latest": "14.21.1.2443",
                                    [number:protected] => 166
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.12-recommended": "14.21.1.2387",
                                    [number:protected] => 167
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.12.1-latest": "14.22.1.2485",
                                    [number:protected] => 168
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.12.1-recommended": "14.22.1.2478",
                                    [number:protected] => 169
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.12.2-latest": "14.23.5.2814",
                                    [number:protected] => 170
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.12.2-recommended": "14.23.5.2768",
                                    [number:protected] => 171
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.5.2-latest": "**.**.**.**",
                                    [number:protected] => 172
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.5.2-recommended": "**.**.**.**",
                                    [number:protected] => 173
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.6.1-latest": "**.**.**.**",
                                    [number:protected] => 174
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.6.2-latest": "**.**.**.**",
                                    [number:protected] => 175
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.6.2-recommended": "**.**.**.**",
                                    [number:protected] => 176
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.6.3-latest": "**.**.**.**",
                                    [number:protected] => 177
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.6.4-latest": "9.11.1.1345",
                                    [number:protected] => 178
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.6.4-recommended": "9.11.1.1345",
                                    [number:protected] => 179
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.7.10-latest": "10.13.4.1614",
                                    [number:protected] => 180
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.7.10-latest-1.7.10": "10.13.2.1343",
                                    [number:protected] => 181
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.7.10-recommended": "10.13.4.1558",
                                    [number:protected] => 182
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.7.2-latest": "10.12.2.1147",
                                    [number:protected] => 183
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.7.2-recommended": "10.12.2.1121",
                                    [number:protected] => 184
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.8-latest": "11.14.4.1577",
                                    [number:protected] => 185
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.8-recommended": "11.14.4.1563",
                                    [number:protected] => 186
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.8.8-latest": "11.15.0.1655",
                                    [number:protected] => 187
                                )

                            [34] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.8.9-latest": "11.15.1.2318",
                                    [number:protected] => 188
                                )

                            [35] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.8.9-recommended": "11.15.1.1722",
                                    [number:protected] => 189
                                )

                            [36] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.9-latest": "12.16.0.1942",
                                    [number:protected] => 190
                                )

                            [37] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.9-recommended": "12.16.1.1887",
                                    [number:protected] => 191
                                )

                            [38] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.9.4-latest": "12.17.0.2051",
                                    [number:protected] => 192
                                )

                            [39] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "1.9.4-recommended": "12.17.0.1976",
                                    [number:protected] => 193
                                )

                            [40] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "latest": "14.23.5.2814",
                                    [number:protected] => 194
                                )

                            [41] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "latest-1.7.10": "10.13.2.1343",
                                    [number:protected] => 195
                                )

                            [42] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => "recommended": "14.23.5.2768"
                                    [number:protected] => 196
                                )

                            [43] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => }
                                    [number:protected] => 197
                                )

                            [44] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => }
                                    [number:protected] => 198
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:29] [Forge Version Check/DEBUG] [ForgeVersionCheck/Forge]:
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:29] [Forge Version Check/INFO] [ForgeVersionCheck/Forge]: [Forge] Found status: AHEAD Target: null
                                    [number:protected] => 199
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:29] [Forge Version Check/INFO] [ForgeVersionCheck/Forge]:
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:30] [Server thread/TRACE] [AntMan/AntMan]: Sent event FMLPreInitializationEvent to mod AntMan
                                    [number:protected] => 200
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:30] [Server thread/TRACE] [AntMan/AntMan]:
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:30] [Server thread/DEBUG] [FML/]: Bar Step: PreInitialization - AntMan took 0.767s
                                    [number:protected] => 201
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:30] [Server thread/DEBUG] [FML/]:
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:30] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sending event FMLPreInitializationEvent to mod LucraftCore
                                    [number:protected] => 202
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:30] [Server thread/TRACE] [LucraftCore/LucraftCore]:
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:30] [Server thread/INFO] [FML/LucraftCore]: Ignored smelting recipe with conflicting input: 1xtile.oreIron@0 = 1xitem.ingotIron@0
                                    [number:protected] => 203
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:30] [Server thread/INFO] [FML/LucraftCore]:
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:30] [Server thread/INFO] [FML/LucraftCore]: Ignored smelting recipe with conflicting input: 1xtile.oreGold@0 = 1xitem.ingotGold@0
                                    [number:protected] => 204
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:30] [Server thread/INFO] [FML/LucraftCore]:
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:30] [Server thread/INFO] [FML/LucraftCore]: Ignored pulverizer recipe with conflicting input: 1xtile.oreDiamond@0 = 2xitem.diamond@0
                                    [number:protected] => 205
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:30] [Server thread/INFO] [FML/LucraftCore]:
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:30] [Server thread/TRACE] [FML/LucraftCore]: Automatically registered mod LucraftCore entity mountableBlock as LucraftCore.mountableBlock
                                    [number:protected] => 206
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:30] [Server thread/TRACE] [FML/LucraftCore]:
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:30] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sent event FMLPreInitializationEvent to mod LucraftCore
                                    [number:protected] => 207
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:30] [Server thread/TRACE] [LucraftCore/LucraftCore]:
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:30] [Server thread/DEBUG] [FML/]: Bar Step: PreInitialization - Lucraft: Core took 0.766s
                                    [number:protected] => 208
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:30] [Server thread/DEBUG] [FML/]:
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:30] [Server thread/DEBUG] [FML/]: Bar Finished: PreInitialization took 2.339s
                                    [number:protected] => 209
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:30] [Server thread/DEBUG] [FML/]:
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:30] [Server thread/INFO] [FML/]: Applying holder lookups
                                    [number:protected] => 210
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:30] [Server thread/INFO] [FML/]:
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:30] [Server thread/INFO] [FML/]: Holder lookups applied
                                    [number:protected] => 211
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:30] [Server thread/INFO] [FML/]:
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:30] [Server thread/INFO] [FML/]: Injecting itemstacks
                                    [number:protected] => 212
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:30] [Server thread/INFO] [FML/]:
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:30] [Server thread/INFO] [FML/]: Itemstack injection complete
                                    [number:protected] => 213
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:30] [Server thread/INFO] [FML/]:
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:32] [Server thread/TRACE] [mcp/mcp]: Sending event FMLInitializationEvent to mod mcp
                                    [number:protected] => 214
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:32] [Server thread/TRACE] [mcp/mcp]:
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:32] [Server thread/TRACE] [mcp/mcp]: Sent event FMLInitializationEvent to mod mcp
                                    [number:protected] => 215
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:32] [Server thread/TRACE] [mcp/mcp]:
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:32] [Server thread/DEBUG] [FML/]: Bar Step: Initialization - Minecraft Coder Pack took 0.001s
                                    [number:protected] => 216
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:32] [Server thread/DEBUG] [FML/]:
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:32] [Server thread/TRACE] [FML/FML]: Sending event FMLInitializationEvent to mod FML
                                    [number:protected] => 217
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:32] [Server thread/TRACE] [FML/FML]:
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:32] [Server thread/TRACE] [FML/FML]: Sent event FMLInitializationEvent to mod FML
                                    [number:protected] => 218
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:32] [Server thread/TRACE] [FML/FML]:
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:32] [Server thread/DEBUG] [FML/]: Bar Step: Initialization - Forge Mod Loader took 0.001s
                                    [number:protected] => 219
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:32] [Server thread/DEBUG] [FML/]:
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:32] [Server thread/TRACE] [Forge/Forge]: Sending event FMLInitializationEvent to mod Forge
                                    [number:protected] => 220
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:32] [Server thread/TRACE] [Forge/Forge]:
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:32] [Server thread/TRACE] [Forge/Forge]: Sent event FMLInitializationEvent to mod Forge
                                    [number:protected] => 221
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:32] [Server thread/TRACE] [Forge/Forge]:
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:32] [Server thread/DEBUG] [FML/]: Bar Step: Initialization - Minecraft Forge took 0.002s
                                    [number:protected] => 222
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:32] [Server thread/DEBUG] [FML/]:
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:32] [Server thread/TRACE] [AntMan/AntMan]: Sending event FMLInitializationEvent to mod AntMan
                                    [number:protected] => 223
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:32] [Server thread/TRACE] [AntMan/AntMan]:
                )

            [179] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [FML/AntMan]: Automatically registered mod AntMan entity discShrink as AntMan.discShrink
                                    [number:protected] => 224
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [FML/AntMan]:
                )

            [180] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [FML/AntMan]: Automatically registered mod AntMan entity discGrow as AntMan.discGrow
                                    [number:protected] => 225
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [FML/AntMan]:
                )

            [181] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [FML/AntMan]: Automatically registered mod AntMan entity laser as AntMan.laser
                                    [number:protected] => 226
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [FML/AntMan]:
                )

            [182] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [FML/AntMan]: Automatically registered mod AntMan entity bulletAnt as AntMan.bulletAnt
                                    [number:protected] => 227
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [FML/AntMan]:
                )

            [183] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/AntMan]: Registering entity egg \'AntMan.bulletAnt\' for class lucraft.mods.heroes.antman.entity.EntityBulletAnt
                                    [number:protected] => 228
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/AntMan]:
                )

            [184] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [FML/AntMan]: Automatically registered mod AntMan entity carpenterAnt as AntMan.carpenterAnt
                                    [number:protected] => 229
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [FML/AntMan]:
                )

            [185] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/AntMan]: Registering entity egg \'AntMan.carpenterAnt\' for class lucraft.mods.heroes.antman.entity.EntityCarpenterAnt
                                    [number:protected] => 230
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/AntMan]:
                )

            [186] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [AntMan/AntMan]: Sent event FMLInitializationEvent to mod AntMan
                                    [number:protected] => 231
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [AntMan/AntMan]:
                )

            [187] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: Initialization - AntMan took 1.105s
                                    [number:protected] => 232
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [188] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sending event FMLInitializationEvent to mod LucraftCore
                                    [number:protected] => 233
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]:
                )

            [189] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sent event FMLInitializationEvent to mod LucraftCore
                                    [number:protected] => 234
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]:
                )

            [190] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: Initialization - Lucraft: Core took 0.021s
                                    [number:protected] => 235
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [191] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Finished: Initialization took 1.131s
                                    [number:protected] => 236
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [192] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [FML/]: Attempting to deliver 0 IMC messages to mod mcp
                                    [number:protected] => 237
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [FML/]:
                )

            [193] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [mcp/mcp]: Sending event IMCEvent to mod mcp
                                    [number:protected] => 238
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [mcp/mcp]:
                )

            [194] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [mcp/mcp]: Sent event IMCEvent to mod mcp
                                    [number:protected] => 239
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [mcp/mcp]:
                )

            [195] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: InterModComms$IMC - Minecraft Coder Pack took 0.020s
                                    [number:protected] => 240
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [196] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [FML/]: Attempting to deliver 0 IMC messages to mod FML
                                    [number:protected] => 241
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [FML/]:
                )

            [197] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [FML/FML]: Sending event IMCEvent to mod FML
                                    [number:protected] => 242
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [FML/FML]:
                )

            [198] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [FML/FML]: Sent event IMCEvent to mod FML
                                    [number:protected] => 243
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [FML/FML]:
                )

            [199] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: InterModComms$IMC - Forge Mod Loader took 0.028s
                                    [number:protected] => 244
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [200] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [FML/]: Attempting to deliver 0 IMC messages to mod Forge
                                    [number:protected] => 245
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [FML/]:
                )

            [201] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [Forge/Forge]: Sending event IMCEvent to mod Forge
                                    [number:protected] => 246
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [Forge/Forge]:
                )

            [202] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [Forge/Forge]: Sent event IMCEvent to mod Forge
                                    [number:protected] => 247
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [Forge/Forge]:
                )

            [203] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: InterModComms$IMC - Minecraft Forge took 0.003s
                                    [number:protected] => 248
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [204] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [FML/]: Attempting to deliver 0 IMC messages to mod AntMan
                                    [number:protected] => 249
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [FML/]:
                )

            [205] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [AntMan/AntMan]: Sending event IMCEvent to mod AntMan
                                    [number:protected] => 250
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [AntMan/AntMan]:
                )

            [206] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [AntMan/AntMan]: Sent event IMCEvent to mod AntMan
                                    [number:protected] => 251
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [AntMan/AntMan]:
                )

            [207] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: InterModComms$IMC - AntMan took 0.023s
                                    [number:protected] => 252
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [208] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [FML/]: Attempting to deliver 0 IMC messages to mod LucraftCore
                                    [number:protected] => 253
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [FML/]:
                )

            [209] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sending event IMCEvent to mod LucraftCore
                                    [number:protected] => 254
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]:
                )

            [210] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sent event IMCEvent to mod LucraftCore
                                    [number:protected] => 255
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]:
                )

            [211] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: InterModComms$IMC - Lucraft: Core took 0.002s
                                    [number:protected] => 256
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [212] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Finished: InterModComms$IMC took 0.076s
                                    [number:protected] => 257
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [213] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/INFO] [FML/]: Injecting itemstacks
                                    [number:protected] => 258
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/INFO] [FML/]:
                )

            [214] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/INFO] [FML/]: Itemstack injection complete
                                    [number:protected] => 259
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/INFO] [FML/]:
                )

            [215] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [mcp/mcp]: Sending event FMLPostInitializationEvent to mod mcp
                                    [number:protected] => 260
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [mcp/mcp]:
                )

            [216] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [mcp/mcp]: Sent event FMLPostInitializationEvent to mod mcp
                                    [number:protected] => 261
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [mcp/mcp]:
                )

            [217] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: PostInitialization - Minecraft Coder Pack took 0.004s
                                    [number:protected] => 262
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [218] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [FML/FML]: Sending event FMLPostInitializationEvent to mod FML
                                    [number:protected] => 263
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [FML/FML]:
                )

            [219] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [FML/FML]: Sent event FMLPostInitializationEvent to mod FML
                                    [number:protected] => 264
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [FML/FML]:
                )

            [220] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: PostInitialization - Forge Mod Loader took 0.004s
                                    [number:protected] => 265
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [221] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [Forge/Forge]: Sending event FMLPostInitializationEvent to mod Forge
                                    [number:protected] => 266
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [Forge/Forge]:
                )

            [222] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [Forge/Forge]: Sent event FMLPostInitializationEvent to mod Forge
                                    [number:protected] => 267
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [Forge/Forge]:
                )

            [223] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: PostInitialization - Minecraft Forge took 0.053s
                                    [number:protected] => 268
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [224] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [AntMan/AntMan]: Sending event FMLPostInitializationEvent to mod AntMan
                                    [number:protected] => 269
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [AntMan/AntMan]:
                )

            [225] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [AntMan/AntMan]: Sent event FMLPostInitializationEvent to mod AntMan
                                    [number:protected] => 270
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [AntMan/AntMan]:
                )

            [226] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: PostInitialization - AntMan took 0.124s
                                    [number:protected] => 271
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [227] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sending event FMLPostInitializationEvent to mod LucraftCore
                                    [number:protected] => 272
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]:
                )

            [228] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sent event FMLPostInitializationEvent to mod LucraftCore
                                    [number:protected] => 273
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]:
                )

            [229] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: PostInitialization - Lucraft: Core took 0.001s
                                    [number:protected] => 274
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [230] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Finished: PostInitialization took 0.185s
                                    [number:protected] => 275
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [231] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [mcp/mcp]: Sending event FMLLoadCompleteEvent to mod mcp
                                    [number:protected] => 276
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [mcp/mcp]:
                )

            [232] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [mcp/mcp]: Sent event FMLLoadCompleteEvent to mod mcp
                                    [number:protected] => 277
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [mcp/mcp]:
                )

            [233] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: LoadComplete - Minecraft Coder Pack took 0.001s
                                    [number:protected] => 278
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [234] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [FML/FML]: Sending event FMLLoadCompleteEvent to mod FML
                                    [number:protected] => 279
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [FML/FML]:
                )

            [235] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [FML/FML]: Sent event FMLLoadCompleteEvent to mod FML
                                    [number:protected] => 280
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [FML/FML]:
                )

            [236] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: LoadComplete - Forge Mod Loader took 0.001s
                                    [number:protected] => 281
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [237] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [Forge/Forge]: Sending event FMLLoadCompleteEvent to mod Forge
                                    [number:protected] => 282
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [Forge/Forge]:
                )

            [238] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]: Forge RecipeSorter Baking:
                                    [number:protected] => 283
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:
                )

            [239] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:   14: RecipeEntry("Before", UNKNOWN, )
                                    [number:protected] => 284
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:
                )

            [240] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:   13: RecipeEntry("minecraft:shaped", SHAPED, net.minecraft.item.crafting.ShapedRecipes) Before: minecraft:shapeless
                                    [number:protected] => 285
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:
                )

            [241] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:   12: RecipeEntry("forge:shapedore", SHAPED, net.minecraftforge.oredict.ShapedOreRecipe) Before: minecraft:shapeless After: minecraft:shaped
                                    [number:protected] => 286
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:
                )

            [242] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:   11: RecipeEntry("minecraft:mapextending", SHAPED, net.minecraft.item.crafting.RecipesMapExtending) Before: minecraft:shapeless After: minecraft:shaped
                                    [number:protected] => 287
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:
                )

            [243] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:   10: RecipeEntry("minecraft:shapeless", SHAPELESS, net.minecraft.item.crafting.ShapelessRecipes) After: minecraft:shaped
                                    [number:protected] => 288
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:
                )

            [244] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:   9: RecipeEntry("minecraft:repair", SHAPELESS, net.minecraft.item.crafting.RecipeRepairItem) After: minecraft:shapeless
                                    [number:protected] => 289
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:
                )

            [245] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:   8: RecipeEntry("forge:shapelessore", SHAPELESS, net.minecraftforge.oredict.ShapelessOreRecipe) After: minecraft:shapeless
                                    [number:protected] => 290
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:
                )

            [246] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:   7: RecipeEntry("minecraft:armordyes", SHAPELESS, net.minecraft.item.crafting.RecipesArmorDyes) After: minecraft:shapeless
                                    [number:protected] => 291
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:
                )

            [247] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:   6: RecipeEntry("minecraft:fireworks", SHAPELESS, net.minecraft.item.crafting.RecipeFireworks) After: minecraft:shapeless
                                    [number:protected] => 292
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:
                )

            [248] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:   5: RecipeEntry("minecraft:pattern_add", SHAPELESS, net.minecraft.item.crafting.RecipesBanners$RecipeAddPattern) After: minecraft:shapeless
                                    [number:protected] => 293
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:
                )

            [249] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:   4: RecipeEntry("minecraft:pattern_dupe", SHAPELESS, net.minecraft.item.crafting.RecipesBanners$RecipeDuplicatePattern) After: minecraft:shapeless
                                    [number:protected] => 294
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:
                )

            [250] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:   3: RecipeEntry("minecraft:bookcloning", SHAPELESS, net.minecraft.item.crafting.RecipeBookCloning) After: minecraft:shapeless
                                    [number:protected] => 295
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:
                )

            [251] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:   2: RecipeEntry("minecraft:mapcloning", SHAPELESS, net.minecraft.item.crafting.RecipesMapCloning) After: minecraft:shapeless
                                    [number:protected] => 296
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:
                )

            [252] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:   1: RecipeEntry("After", UNKNOWN, )
                                    [number:protected] => 297
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:
                )

            [253] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]: Sorting recipies
                                    [number:protected] => 298
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/Forge]:
                )

            [254] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [Forge/Forge]: Sent event FMLLoadCompleteEvent to mod Forge
                                    [number:protected] => 299
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [Forge/Forge]:
                )

            [255] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: LoadComplete - Minecraft Forge took 0.058s
                                    [number:protected] => 300
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [256] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [AntMan/AntMan]: Sending event FMLLoadCompleteEvent to mod AntMan
                                    [number:protected] => 301
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [AntMan/AntMan]:
                )

            [257] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [AntMan/AntMan]: Sent event FMLLoadCompleteEvent to mod AntMan
                                    [number:protected] => 302
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [AntMan/AntMan]:
                )

            [258] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: LoadComplete - AntMan took 0.001s
                                    [number:protected] => 303
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [259] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sending event FMLLoadCompleteEvent to mod LucraftCore
                                    [number:protected] => 304
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]:
                )

            [260] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sent event FMLLoadCompleteEvent to mod LucraftCore
                                    [number:protected] => 305
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]:
                )

            [261] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: LoadComplete - Lucraft: Core took 0.001s
                                    [number:protected] => 306
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [262] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Bar Finished: LoadComplete took 0.061s
                                    [number:protected] => 307
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [263] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/DEBUG] [FML/]: Freezing block and item id maps
                                    [number:protected] => 308
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/DEBUG] [FML/]:
                )

            [264] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/INFO] [FML/]: Forge Mod Loader has successfully loaded 5 mods
                                    [number:protected] => 309
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/INFO] [FML/]:
                )

            [265] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [mcp/mcp]: Sending event FMLServerAboutToStartEvent to mod mcp
                                    [number:protected] => 310
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [mcp/mcp]:
                )

            [266] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:33] [Server thread/TRACE] [mcp/mcp]: Sent event FMLServerAboutToStartEvent to mod mcp
                                    [number:protected] => 311
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:33] [Server thread/TRACE] [mcp/mcp]:
                )

            [267] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerAboutToStart - Minecraft Coder Pack took 0.001s
                                    [number:protected] => 312
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [268] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [FML/FML]: Sending event FMLServerAboutToStartEvent to mod FML
                                    [number:protected] => 313
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [FML/FML]:
                )

            [269] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [FML/FML]: Sent event FMLServerAboutToStartEvent to mod FML
                                    [number:protected] => 314
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [FML/FML]:
                )

            [270] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerAboutToStart - Forge Mod Loader took 0.005s
                                    [number:protected] => 315
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [271] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [Forge/Forge]: Sending event FMLServerAboutToStartEvent to mod Forge
                                    [number:protected] => 316
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [Forge/Forge]:
                )

            [272] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [Forge/Forge]: Sent event FMLServerAboutToStartEvent to mod Forge
                                    [number:protected] => 317
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [Forge/Forge]:
                )

            [273] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerAboutToStart - Minecraft Forge took 0.001s
                                    [number:protected] => 318
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [274] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [AntMan/AntMan]: Sending event FMLServerAboutToStartEvent to mod AntMan
                                    [number:protected] => 319
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [AntMan/AntMan]:
                )

            [275] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [AntMan/AntMan]: Sent event FMLServerAboutToStartEvent to mod AntMan
                                    [number:protected] => 320
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [AntMan/AntMan]:
                )

            [276] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerAboutToStart - AntMan took 0.003s
                                    [number:protected] => 321
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [277] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sending event FMLServerAboutToStartEvent to mod LucraftCore
                                    [number:protected] => 322
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [LucraftCore/LucraftCore]:
                )

            [278] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sent event FMLServerAboutToStartEvent to mod LucraftCore
                                    [number:protected] => 323
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [LucraftCore/LucraftCore]:
                )

            [279] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerAboutToStart - Lucraft: Core took 0.008s
                                    [number:protected] => 324
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [280] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Bar Finished: ServerAboutToStart took 0.017s
                                    [number:protected] => 325
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [281] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/ERROR] [fml.ModTracker/]: This world was saved with mod minecraft which appears to be missing, things may not work well
                                    [number:protected] => 326
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/ERROR] [fml.ModTracker/]:
                )

            [282] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/INFO] [fml.ModTracker/]: This world was saved with mod mcp version 9.42 and it is now at version 9.19, things may not work well
                                    [number:protected] => 327
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/INFO] [fml.ModTracker/]:
                )

            [283] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/ERROR] [fml.ModTracker/]: This world was saved with mod forge which appears to be missing, things may not work well
                                    [number:protected] => 328
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/ERROR] [fml.ModTracker/]:
                )

            [284] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/ERROR] [fml.ModTracker/]: This world was saved with mod lucraftcore which appears to be missing, things may not work well
                                    [number:protected] => 329
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/ERROR] [fml.ModTracker/]:
                )

            [285] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/INFO] [FML/]: Injecting existing block and item data into this server instance
                                    [number:protected] => 330
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/INFO] [FML/]:
                )

            [286] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/ERROR] [FML/]: An unknown persistent registry type "minecraft:potiontypes" has been encountered. This Forge instance cannot understand it.
                                    [number:protected] => 331
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/ERROR] [FML/]:
                )

            [287] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Reverting to frozen data state.
                                    [number:protected] => 332
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [288] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [mcp/mcp]: Sending event FMLModIdMappingEvent to mod mcp
                                    [number:protected] => 333
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [mcp/mcp]:
                )

            [289] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [mcp/mcp]: Sent event FMLModIdMappingEvent to mod mcp
                                    [number:protected] => 334
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [mcp/mcp]:
                )

            [290] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Minecraft Coder Pack took 0.001s
                                    [number:protected] => 335
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [291] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [FML/FML]: Sending event FMLModIdMappingEvent to mod FML
                                    [number:protected] => 336
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [FML/FML]:
                )

            [292] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [FML/FML]: Sent event FMLModIdMappingEvent to mod FML
                                    [number:protected] => 337
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [FML/FML]:
                )

            [293] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Forge Mod Loader took 0.001s
                                    [number:protected] => 338
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [294] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [Forge/Forge]: Sending event FMLModIdMappingEvent to mod Forge
                                    [number:protected] => 339
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [Forge/Forge]:
                )

            [295] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [Forge/Forge]: Sent event FMLModIdMappingEvent to mod Forge
                                    [number:protected] => 340
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [Forge/Forge]:
                )

            [296] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Minecraft Forge took 0.001s
                                    [number:protected] => 341
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [297] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [AntMan/AntMan]: Sending event FMLModIdMappingEvent to mod AntMan
                                    [number:protected] => 342
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [AntMan/AntMan]:
                )

            [298] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [AntMan/AntMan]: Sent event FMLModIdMappingEvent to mod AntMan
                                    [number:protected] => 343
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [AntMan/AntMan]:
                )

            [299] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - AntMan took 0.027s
                                    [number:protected] => 344
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [300] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sending event FMLModIdMappingEvent to mod LucraftCore
                                    [number:protected] => 345
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [LucraftCore/LucraftCore]:
                )

            [301] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sent event FMLModIdMappingEvent to mod LucraftCore
                                    [number:protected] => 346
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [LucraftCore/LucraftCore]:
                )

            [302] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Lucraft: Core took 0.001s
                                    [number:protected] => 347
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [303] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Bar Finished: ModIdMapping took 0.030s
                                    [number:protected] => 348
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [304] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/INFO] [FML/]: Applying holder lookups
                                    [number:protected] => 349
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/INFO] [FML/]:
                )

            [305] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/INFO] [FML/]: Holder lookups applied
                                    [number:protected] => 350
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/INFO] [FML/]:
                )

            [306] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Frozen state restored.
                                    [number:protected] => 351
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [307] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [mcp/mcp]: Sending event FMLServerStoppedEvent to mod mcp
                                    [number:protected] => 352
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [mcp/mcp]:
                )

            [308] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [mcp/mcp]: Sent event FMLServerStoppedEvent to mod mcp
                                    [number:protected] => 353
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [mcp/mcp]:
                )

            [309] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Minecraft Coder Pack took 0.001s
                                    [number:protected] => 354
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [310] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [FML/FML]: Sending event FMLServerStoppedEvent to mod FML
                                    [number:protected] => 355
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [FML/FML]:
                )

            [311] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [FML/FML]: Sent event FMLServerStoppedEvent to mod FML
                                    [number:protected] => 356
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [FML/FML]:
                )

            [312] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Forge Mod Loader took 0.002s
                                    [number:protected] => 357
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [313] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [Forge/Forge]: Sending event FMLServerStoppedEvent to mod Forge
                                    [number:protected] => 358
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [Forge/Forge]:
                )

            [314] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [Forge/Forge]: Sent event FMLServerStoppedEvent to mod Forge
                                    [number:protected] => 359
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [Forge/Forge]:
                )

            [315] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Minecraft Forge took 0.015s
                                    [number:protected] => 360
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [316] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [AntMan/AntMan]: Sending event FMLServerStoppedEvent to mod AntMan
                                    [number:protected] => 361
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [AntMan/AntMan]:
                )

            [317] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [AntMan/AntMan]: Sent event FMLServerStoppedEvent to mod AntMan
                                    [number:protected] => 362
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [AntMan/AntMan]:
                )

            [318] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - AntMan took 0.000s
                                    [number:protected] => 363
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [319] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sending event FMLServerStoppedEvent to mod LucraftCore
                                    [number:protected] => 364
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [LucraftCore/LucraftCore]:
                )

            [320] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sent event FMLServerStoppedEvent to mod LucraftCore
                                    [number:protected] => 365
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/TRACE] [LucraftCore/LucraftCore]:
                )

            [321] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Lucraft: Core took 0.008s
                                    [number:protected] => 366
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [322] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/DEBUG] [FML/]: Bar Finished: ServerStopped took 0.026s
                                    [number:protected] => 367
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/DEBUG] [FML/]:
                )

            [323] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [21:33:34] [Server thread/INFO] [FML/]: The state engine was in incorrect state SERVER_STARTING and forced into state SERVER_STOPPED. Errors may have been discarded.
                                    [number:protected] => 368
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [21:33:34] [Server thread/INFO] [FML/]:
                )

        )

    [iterator:protected] => 324
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [21:32:32] [main/DEBUG] [FML/]: Injecting tracing printstreams for STDOUT/STDERR.
[21:32:33] [main/INFO] [FML/]: Forge Mod Loader version 11.15.1.2318 for Minecraft 1.8.9 loading
[21:32:33] [main/INFO] [FML/]: Java is Java HotSpot(TM) 64-Bit Server VM, version 1.8.0_144, running on Linux:amd64:4.4.0-141-generic, installed at /aternos/bin/jdk1.8.0_144/jre
[21:32:33] [main/DEBUG] [FML/]: Java classpath at launch is forge.jar
[21:32:33] [main/DEBUG] [FML/]: Java library path at launch is /usr/java/packages/lib/amd64:/usr/lib64:/lib64:/lib:/usr/lib
[21:32:33] [main/DEBUG] [FML/]: Enabling runtime deobfuscation
[21:32:33] [main/DEBUG] [FML/]: Instantiating coremod class FMLCorePlugin
[21:32:33] [main/DEBUG] [FML/]: Added access transformer class net.minecraftforge.fml.common.asm.transformers.AccessTransformer to enqueued access transformers
[21:32:33] [main/DEBUG] [FML/]: Enqueued coremod FMLCorePlugin
[21:32:33] [main/DEBUG] [FML/]: Instantiating coremod class FMLForgePlugin
[21:32:33] [main/DEBUG] [FML/]: Enqueued coremod FMLForgePlugin
[21:32:33] [main/DEBUG] [FML/]: All fundamental core mods are successfully located
[21:32:33] [main/DEBUG] [FML/]: Attempting to load commandline specified mods, relative to /aternos/server/.
[21:32:33] [main/DEBUG] [FML/]: Discovering coremods
[21:32:33] [main/DEBUG] [FML/]: Examining for coremod candidacy AntMan-1.8.9-1.2.0.jar
[21:32:33] [main/DEBUG] [FML/]: Not found coremod data in AntMan-1.8.9-1.2.0.jar
[21:32:33] [main/DEBUG] [FML/]: Examining for coremod candidacy LucraftCore-1.8.9-1.2.0.jar
[21:32:33] [main/TRACE] [FML/]: Found FMLCorePluginContainsFMLMod marker in LucraftCore-1.8.9-1.2.0.jar, it will be examined later for regular @Mod instances
[21:32:33] [main/DEBUG] [FML/]: Instantiating coremod class LucraftForgeLoading
[21:32:33] [main/DEBUG] [FML/]: The coremod lucraft.mods.lucraftcore.access.LucraftForgeLoading requested minecraft version 1.8.9 and minecraft is 1.8.9. It will be loaded.
[21:32:33] [main/DEBUG] [FML/]: Enqueued coremod LucraftForgeLoading
[21:32:33] [main/INFO] [LaunchWrapper/]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
[21:32:33] [main/INFO] [LaunchWrapper/]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
[21:32:33] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
[21:32:33] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
[21:32:33] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
[21:32:33] [main/DEBUG] [FML/]: Injecting coremod FMLCorePlugin {net.minecraftforge.fml.relauncher.FMLCorePlugin} class transformers
[21:32:33] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.fml.common.asm.transformers.BlamingTransformer
[21:32:33] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.fml.common.asm.transformers.SideTransformer
[21:32:33] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.fml.common.asm.transformers.EventSubscriptionTransformer
[21:32:33] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.fml.common.asm.transformers.EventSubscriberTransformer
[21:32:33] [main/DEBUG] [FML/]: Injection complete
[21:32:33] [main/DEBUG] [FML/]: Running coremod plugin for FMLCorePlugin {net.minecraftforge.fml.relauncher.FMLCorePlugin}
[21:32:33] [main/DEBUG] [FML/]: Running coremod plugin FMLCorePlugin
[21:32:36] [main/DEBUG] [FML/]: Read 825 binary patches
[21:32:37] [main/DEBUG] [FML/]: Loading deobfuscation resource /deobfuscation_data-1.8.9.lzma with 27891 records
[21:32:41] [main/INFO] [FML/]: Found valid fingerprint for Minecraft Forge. Certificate fingerprint e3c3d50c7c986df74c645c0ac54639741c90a557
[21:32:41] [main/DEBUG] [FML/]: Coremod plugin class FMLCorePlugin run successfully
[21:32:41] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
[21:32:41] [main/DEBUG] [FML/]: Injecting coremod FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin} class transformers
[21:32:41] [main/DEBUG] [FML/]: Injection complete
[21:32:41] [main/DEBUG] [FML/]: Running coremod plugin for FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin}
[21:32:41] [main/DEBUG] [FML/]: Running coremod plugin FMLForgePlugin
[21:32:41] [main/DEBUG] [FML/]: Coremod plugin class FMLForgePlugin run successfully
[21:32:41] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
[21:32:41] [main/DEBUG] [FML/]: Loaded 165 rules from AccessTransformer config file forge_at.cfg
[21:32:41] [main/DEBUG] [FML/]: Validating minecraft
[21:32:46] [main/DEBUG] [FML/]: Minecraft validated, launching...
[21:32:46] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
[21:32:46] [main/DEBUG] [FML/]: Injecting coremod LucraftForgeLoading {lucraft.mods.lucraftcore.access.LucraftForgeLoading} class transformers
[21:32:46] [main/TRACE] [FML/]: Registering transformer lucraft.mods.lucraftcore.access.LucraftClassTransformer
[21:32:46] [main/DEBUG] [FML/]: Injection complete
[21:32:46] [main/DEBUG] [FML/]: Running coremod plugin for LucraftForgeLoading {lucraft.mods.lucraftcore.access.LucraftForgeLoading}
[21:32:46] [main/DEBUG] [FML/]: Running coremod plugin LucraftForgeLoading
[21:32:46] [main/DEBUG] [FML/]: Coremod plugin class LucraftForgeLoading run successfully
[21:32:46] [main/INFO] [LaunchWrapper/]: Loading tweak class name net.minecraftforge.fml.common.launcher.TerminalTweaker
[21:32:46] [main/INFO] [LaunchWrapper/]: Calling tweak class net.minecraftforge.fml.common.launcher.TerminalTweaker
[21:32:49] [main/INFO] [LaunchWrapper/]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
[21:33:19] [Server thread/INFO] [FML/]: MinecraftForge v11.15.1.2318 Initialized
[21:33:20] [Server thread/INFO] [FML/]: Replaced 229 ore recipies
[21:33:20] [Server thread/DEBUG] [FML/]: File /aternos/server/config/injectedDependencies.json not found. No dependencies injected
[21:33:20] [Server thread/DEBUG] [FML/]: Building injected Mod Containers [net.minecraftforge.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer]
[21:33:20] [Server thread/DEBUG] [FML/]: Attempting to load mods contained in the minecraft jar file and associated classes
[21:33:20] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/forge.jar, examining for mod candidates
[21:33:20] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/LucraftCore-1.8.9-1.2.0.jar
[21:33:20] [Server thread/DEBUG] [FML/]: Minecraft jar mods loaded successfully
[21:33:20] [Server thread/INFO] [FML/]: Found 0 mods from the command line. Injecting into mod discoverer
[21:33:20] [Server thread/INFO] [FML/]: Searching /aternos/server/mods for mods
[21:33:20] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file AntMan-1.8.9-1.2.0.jar
[21:33:20] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file LucraftCore-1.8.9-1.2.0.jar
[21:33:20] [Server thread/DEBUG] [FML/]: Examining file forge.jar for potential mods
[21:33:20] [Server thread/DEBUG] [FML/]: The mod container forge.jar appears to be missing an mcmod.info file
[21:33:24] [Server thread/DEBUG] [FML/]: Examining file AntMan-1.8.9-1.2.0.jar for potential mods
[21:33:24] [Server thread/TRACE] [FML/]: Located mcmod.info file in file AntMan-1.8.9-1.2.0.jar
[21:33:24] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (lucraft.mods.heroes.antman.AntMan) - loading
[21:33:24] [Server thread/TRACE] [AntMan/]: Parsed dependency info : [LucraftCore@[1.8.9-1.2.0,)] [] [LucraftCore@[1.8.9-1.2.0,)]
[21:33:24] [Server thread/DEBUG] [FML/]: Examining file LucraftCore-1.8.9-1.2.0.jar for potential mods
[21:33:24] [Server thread/TRACE] [FML/]: Located mcmod.info file in file LucraftCore-1.8.9-1.2.0.jar
[21:33:24] [Server thread/DEBUG] [FML/]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (lucraft.mods.lucraftcore.LucraftCore) - loading
[21:33:24] [Server thread/TRACE] [LucraftCore/]: Parsed dependency info : [Forge@[11.15.1.1785,)] [Forge@[11.15.1.1785,)] []
[21:33:24] [Server thread/INFO] [FML/]: Forge Mod Loader has identified 5 mods to load
[21:33:24] [Server thread/TRACE] [FML/]: Received a system property request \'\'
[21:33:24] [Server thread/TRACE] [FML/]: System property request managing the state of 0 mods
[21:33:24] [Server thread/DEBUG] [FML/]: After merging, found state information for 0 mods
[21:33:24] [Server thread/DEBUG] [FML/]: Found translations in forge.jar [af_ZA, ar_SA, br_FR, ca_ES, cs_CZ, da_DK, de_DE, el_GR, en_US, es_ES, fa_IR, fi_FI, fr_FR, he_IL, hu_HU, it_IT, ja_JP, ko_KR, lt_LT, nb_NO, nl_NL, nn_NO, no_NO, pl_PL, pt_BR, pt_PT, ro_RO, ru_RU, sl_SI, sr_SP, sv_SE, tr_TR, uk_UA, vi_VN, zh_CN, zh_TW]
[21:33:25] [Server thread/DEBUG] [FML/]: Found translations in forge.jar [af_ZA, ar_SA, br_FR, ca_ES, cs_CZ, da_DK, de_DE, el_GR, en_US, es_ES, fa_IR, fi_FI, fr_FR, he_IL, hu_HU, it_IT, ja_JP, ko_KR, lt_LT, nb_NO, nl_NL, nn_NO, no_NO, pl_PL, pt_BR, pt_PT, ro_RO, ru_RU, sl_SI, sr_SP, sv_SE, tr_TR, uk_UA, vi_VN, zh_CN, zh_TW]
[21:33:25] [Server thread/DEBUG] [AntMan/]: Enabling mod AntMan
[21:33:25] [Server thread/DEBUG] [FML/]: Found translations in AntMan-1.8.9-1.2.0.jar [de_DE, en_US, fil_PH, fr_FR, zh_TW]
[21:33:25] [Server thread/DEBUG] [LucraftCore/]: Enabling mod LucraftCore
[21:33:25] [Server thread/DEBUG] [FML/]: Found translations in LucraftCore-1.8.9-1.2.0.jar [de_DE, en_US, fil_PH, fr_FR]
[21:33:25] [Server thread/TRACE] [FML/]: Verifying mod requirements are satisfied
[21:33:25] [Server thread/TRACE] [FML/]: All mod requirements are satisfied
[21:33:25] [Server thread/TRACE] [FML/]: Sorting mods into an ordered list
[21:33:25] [Server thread/TRACE] [FML/]: Mod sorting completed successfully
[21:33:25] [Server thread/DEBUG] [FML/]: Mod sorting data
[21:33:25] [Server thread/DEBUG] [FML/]: 	AntMan(AntMan:1.8.9-1.2.0): AntMan-1.8.9-1.2.0.jar (required-before:LucraftCore@[1.8.9-1.2.0,))
[21:33:25] [Server thread/DEBUG] [FML/]: 	LucraftCore(Lucraft: Core:1.8.9-1.2.0): LucraftCore-1.8.9-1.2.0.jar (required-after:Forge@[11.15.1.1785,);)
[21:33:25] [Server thread/TRACE] [mcp/mcp]: Sending event FMLConstructionEvent to mod mcp
[21:33:25] [Server thread/TRACE] [mcp/mcp]: Sent event FMLConstructionEvent to mod mcp
[21:33:25] [Server thread/DEBUG] [FML/]: Bar Step: Construction - Minecraft Coder Pack took 0.007s
[21:33:25] [Server thread/TRACE] [FML/FML]: Sending event FMLConstructionEvent to mod FML
[21:33:25] [Server thread/TRACE] [FML/FML]: Mod FML is using network checker : Invoking method checkModLists
[21:33:25] [Server thread/TRACE] [FML/FML]: Testing mod FML to verify it accepts its own version in a remote connection
[21:33:25] [Server thread/TRACE] [FML/FML]: The mod FML accepts its own version (**.**.**.**)
[21:33:25] [Server thread/INFO] [FML/FML]: Attempting connection with missing mods [mcp, FML, Forge, AntMan, LucraftCore] at CLIENT
[21:33:25] [Server thread/INFO] [FML/FML]: Attempting connection with missing mods [mcp, FML, Forge, AntMan, LucraftCore] at SERVER
[21:33:27] [Server thread/TRACE] [FML/FML]: Sent event FMLConstructionEvent to mod FML
[21:33:27] [Server thread/DEBUG] [FML/]: Bar Step: Construction - Forge Mod Loader took 2.130s
[21:33:27] [Server thread/TRACE] [Forge/Forge]: Sending event FMLConstructionEvent to mod Forge
[21:33:27] [Server thread/TRACE] [FML/Forge]: Mod Forge is using network checker : No network checking performed
[21:33:27] [Server thread/TRACE] [FML/Forge]: Testing mod Forge to verify it accepts its own version in a remote connection
[21:33:27] [Server thread/TRACE] [FML/Forge]: The mod Forge accepts its own version (11.15.1.2318)
[21:33:27] [Server thread/TRACE] [Forge/Forge]: Sent event FMLConstructionEvent to mod Forge
[21:33:27] [Server thread/DEBUG] [FML/]: Bar Step: Construction - Minecraft Forge took 0.031s
[21:33:27] [Server thread/TRACE] [AntMan/AntMan]: Sending event FMLConstructionEvent to mod AntMan
[21:33:27] [Server thread/TRACE] [FML/AntMan]: Mod AntMan is using network checker : Accepting version 1.8.9-1.2.0
[21:33:27] [Server thread/TRACE] [FML/AntMan]: Testing mod AntMan to verify it accepts its own version in a remote connection
[21:33:27] [Server thread/TRACE] [FML/AntMan]: The mod AntMan accepts its own version (1.8.9-1.2.0)
[21:33:27] [Server thread/DEBUG] [FML/AntMan]: Attempting to inject @SidedProxy classes into AntMan
[21:33:27] [Server thread/TRACE] [AntMan/AntMan]: Sent event FMLConstructionEvent to mod AntMan
[21:33:27] [Server thread/DEBUG] [FML/]: Bar Step: Construction - AntMan took 0.456s
[21:33:27] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sending event FMLConstructionEvent to mod LucraftCore
[21:33:27] [Server thread/TRACE] [FML/LucraftCore]: Mod LucraftCore is using network checker : Accepting version 1.8.9-1.2.0
[21:33:27] [Server thread/TRACE] [FML/LucraftCore]: Testing mod LucraftCore to verify it accepts its own version in a remote connection
[21:33:27] [Server thread/TRACE] [FML/LucraftCore]: The mod LucraftCore accepts its own version (1.8.9-1.2.0)
[21:33:27] [Server thread/DEBUG] [FML/LucraftCore]: Attempting to inject @SidedProxy classes into LucraftCore
[21:33:28] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sent event FMLConstructionEvent to mod LucraftCore
[21:33:28] [Server thread/DEBUG] [FML/]: Bar Step: Construction - Lucraft: Core took 0.261s
[21:33:28] [Server thread/DEBUG] [FML/]: Bar Finished: Construction took 2.885s
[21:33:28] [Server thread/DEBUG] [FML/]: Mod signature data
[21:33:28] [Server thread/DEBUG] [FML/]:  	Valid Signatures:
[21:33:28] [Server thread/DEBUG] [FML/]: 		(e3c3d50c7c986df74c645c0ac54639741c90a557) FML	(Forge Mod Loader	**.**.**.**)	forge.jar
[21:33:28] [Server thread/DEBUG] [FML/]: 		(e3c3d50c7c986df74c645c0ac54639741c90a557) Forge	(Minecraft Forge	11.15.1.2318)	forge.jar
[21:33:28] [Server thread/DEBUG] [FML/]:  	Missing Signatures:
[21:33:28] [Server thread/DEBUG] [FML/]: 		mcp	(Minecraft Coder Pack	9.19)	minecraft.jar
[21:33:28] [Server thread/DEBUG] [FML/]: 		AntMan	(AntMan	1.8.9-1.2.0)	AntMan-1.8.9-1.2.0.jar
[21:33:28] [Server thread/DEBUG] [FML/]: 		LucraftCore	(Lucraft: Core	1.8.9-1.2.0)	LucraftCore-1.8.9-1.2.0.jar
[21:33:28] [Server thread/INFO] [FML/]: Processing ObjectHolder annotations
[21:33:28] [Server thread/INFO] [FML/]: Found 384 ObjectHolder annotations
[21:33:28] [Server thread/INFO] [FML/]: Identifying ItemStackHolder annotations
[21:33:28] [Server thread/INFO] [FML/]: Found 0 ItemStackHolder annotations
[21:33:28] [Server thread/TRACE] [mcp/mcp]: Sending event FMLPreInitializationEvent to mod mcp
[21:33:28] [Server thread/TRACE] [mcp/mcp]: Sent event FMLPreInitializationEvent to mod mcp
[21:33:28] [Server thread/DEBUG] [FML/]: Bar Step: PreInitialization - Minecraft Coder Pack took 0.001s
[21:33:28] [Server thread/TRACE] [FML/FML]: Sending event FMLPreInitializationEvent to mod FML
[21:33:28] [Server thread/TRACE] [FML/FML]: Sent event FMLPreInitializationEvent to mod FML
[21:33:28] [Server thread/DEBUG] [FML/]: Bar Step: PreInitialization - Forge Mod Loader took 0.077s
[21:33:28] [Server thread/TRACE] [Forge/Forge]: Sending event FMLPreInitializationEvent to mod Forge
[21:33:29] [Server thread/INFO] [FML/Forge]: Configured a dormant chunk cache size of 0
[21:33:29] [Forge Version Check/INFO] [ForgeVersionCheck/Forge]: [Forge] Starting version check at http://files.minecraftforge.net/maven/net/minecraftforge/forge/promotions_slim.json
[21:33:29] [Server thread/TRACE] [Forge/Forge]: Sent event FMLPreInitializationEvent to mod Forge
[21:33:29] [Server thread/DEBUG] [FML/]: Bar Step: PreInitialization - Minecraft Forge took 0.728s
[21:33:29] [Server thread/TRACE] [AntMan/AntMan]: Sending event FMLPreInitializationEvent to mod AntMan
[21:33:29] [Forge Version Check/DEBUG] [ForgeVersionCheck/Forge]: [Forge] Received version check data:
{
"homepage": "http://files.minecraftforge.net/maven/net/minecraftforge/forge/",
"promos": {
"1.1-latest": "**.**.**.**",
"1.10-latest": "12.18.0.2000",
"1.10.2-latest": "12.18.3.2511",
"1.10.2-recommended": "12.18.3.2185",
"1.11-latest": "13.19.1.2199",
"1.11-recommended": "13.19.1.2189",
"1.11.2-latest": "13.20.1.2588",
"1.11.2-recommended": "13.20.1.2386",
"1.12-latest": "14.21.1.2443",
"1.12-recommended": "14.21.1.2387",
"1.12.1-latest": "14.22.1.2485",
"1.12.1-recommended": "14.22.1.2478",
"1.12.2-latest": "14.23.5.2814",
"1.12.2-recommended": "14.23.5.2768",
"1.5.2-latest": "**.**.**.**",
"1.5.2-recommended": "**.**.**.**",
"1.6.1-latest": "**.**.**.**",
"1.6.2-latest": "**.**.**.**",
"1.6.2-recommended": "**.**.**.**",
"1.6.3-latest": "**.**.**.**",
"1.6.4-latest": "9.11.1.1345",
"1.6.4-recommended": "9.11.1.1345",
"1.7.10-latest": "10.13.4.1614",
"1.7.10-latest-1.7.10": "10.13.2.1343",
"1.7.10-recommended": "10.13.4.1558",
"1.7.2-latest": "10.12.2.1147",
"1.7.2-recommended": "10.12.2.1121",
"1.8-latest": "11.14.4.1577",
"1.8-recommended": "11.14.4.1563",
"1.8.8-latest": "11.15.0.1655",
"1.8.9-latest": "11.15.1.2318",
"1.8.9-recommended": "11.15.1.1722",
"1.9-latest": "12.16.0.1942",
"1.9-recommended": "12.16.1.1887",
"1.9.4-latest": "12.17.0.2051",
"1.9.4-recommended": "12.17.0.1976",
"latest": "14.23.5.2814",
"latest-1.7.10": "10.13.2.1343",
"recommended": "14.23.5.2768"
}
}
[21:33:29] [Forge Version Check/INFO] [ForgeVersionCheck/Forge]: [Forge] Found status: AHEAD Target: null
[21:33:30] [Server thread/TRACE] [AntMan/AntMan]: Sent event FMLPreInitializationEvent to mod AntMan
[21:33:30] [Server thread/DEBUG] [FML/]: Bar Step: PreInitialization - AntMan took 0.767s
[21:33:30] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sending event FMLPreInitializationEvent to mod LucraftCore
[21:33:30] [Server thread/INFO] [FML/LucraftCore]: Ignored smelting recipe with conflicting input: 1xtile.oreIron@0 = 1xitem.ingotIron@0
[21:33:30] [Server thread/INFO] [FML/LucraftCore]: Ignored smelting recipe with conflicting input: 1xtile.oreGold@0 = 1xitem.ingotGold@0
[21:33:30] [Server thread/INFO] [FML/LucraftCore]: Ignored pulverizer recipe with conflicting input: 1xtile.oreDiamond@0 = 2xitem.diamond@0
[21:33:30] [Server thread/TRACE] [FML/LucraftCore]: Automatically registered mod LucraftCore entity mountableBlock as LucraftCore.mountableBlock
[21:33:30] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sent event FMLPreInitializationEvent to mod LucraftCore
[21:33:30] [Server thread/DEBUG] [FML/]: Bar Step: PreInitialization - Lucraft: Core took 0.766s
[21:33:30] [Server thread/DEBUG] [FML/]: Bar Finished: PreInitialization took 2.339s
[21:33:30] [Server thread/INFO] [FML/]: Applying holder lookups
[21:33:30] [Server thread/INFO] [FML/]: Holder lookups applied
[21:33:30] [Server thread/INFO] [FML/]: Injecting itemstacks
[21:33:30] [Server thread/INFO] [FML/]: Itemstack injection complete
[21:33:32] [Server thread/TRACE] [mcp/mcp]: Sending event FMLInitializationEvent to mod mcp
[21:33:32] [Server thread/TRACE] [mcp/mcp]: Sent event FMLInitializationEvent to mod mcp
[21:33:32] [Server thread/DEBUG] [FML/]: Bar Step: Initialization - Minecraft Coder Pack took 0.001s
[21:33:32] [Server thread/TRACE] [FML/FML]: Sending event FMLInitializationEvent to mod FML
[21:33:32] [Server thread/TRACE] [FML/FML]: Sent event FMLInitializationEvent to mod FML
[21:33:32] [Server thread/DEBUG] [FML/]: Bar Step: Initialization - Forge Mod Loader took 0.001s
[21:33:32] [Server thread/TRACE] [Forge/Forge]: Sending event FMLInitializationEvent to mod Forge
[21:33:32] [Server thread/TRACE] [Forge/Forge]: Sent event FMLInitializationEvent to mod Forge
[21:33:32] [Server thread/DEBUG] [FML/]: Bar Step: Initialization - Minecraft Forge took 0.002s
[21:33:32] [Server thread/TRACE] [AntMan/AntMan]: Sending event FMLInitializationEvent to mod AntMan
[21:33:33] [Server thread/TRACE] [FML/AntMan]: Automatically registered mod AntMan entity discShrink as AntMan.discShrink
[21:33:33] [Server thread/TRACE] [FML/AntMan]: Automatically registered mod AntMan entity discGrow as AntMan.discGrow
[21:33:33] [Server thread/TRACE] [FML/AntMan]: Automatically registered mod AntMan entity laser as AntMan.laser
[21:33:33] [Server thread/TRACE] [FML/AntMan]: Automatically registered mod AntMan entity bulletAnt as AntMan.bulletAnt
[21:33:33] [Server thread/DEBUG] [FML/AntMan]: Registering entity egg \'AntMan.bulletAnt\' for class lucraft.mods.heroes.antman.entity.EntityBulletAnt
[21:33:33] [Server thread/TRACE] [FML/AntMan]: Automatically registered mod AntMan entity carpenterAnt as AntMan.carpenterAnt
[21:33:33] [Server thread/DEBUG] [FML/AntMan]: Registering entity egg \'AntMan.carpenterAnt\' for class lucraft.mods.heroes.antman.entity.EntityCarpenterAnt
[21:33:33] [Server thread/TRACE] [AntMan/AntMan]: Sent event FMLInitializationEvent to mod AntMan
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: Initialization - AntMan took 1.105s
[21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sending event FMLInitializationEvent to mod LucraftCore
[21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sent event FMLInitializationEvent to mod LucraftCore
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: Initialization - Lucraft: Core took 0.021s
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Finished: Initialization took 1.131s
[21:33:33] [Server thread/TRACE] [FML/]: Attempting to deliver 0 IMC messages to mod mcp
[21:33:33] [Server thread/TRACE] [mcp/mcp]: Sending event IMCEvent to mod mcp
[21:33:33] [Server thread/TRACE] [mcp/mcp]: Sent event IMCEvent to mod mcp
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: InterModComms$IMC - Minecraft Coder Pack took 0.020s
[21:33:33] [Server thread/TRACE] [FML/]: Attempting to deliver 0 IMC messages to mod FML
[21:33:33] [Server thread/TRACE] [FML/FML]: Sending event IMCEvent to mod FML
[21:33:33] [Server thread/TRACE] [FML/FML]: Sent event IMCEvent to mod FML
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: InterModComms$IMC - Forge Mod Loader took 0.028s
[21:33:33] [Server thread/TRACE] [FML/]: Attempting to deliver 0 IMC messages to mod Forge
[21:33:33] [Server thread/TRACE] [Forge/Forge]: Sending event IMCEvent to mod Forge
[21:33:33] [Server thread/TRACE] [Forge/Forge]: Sent event IMCEvent to mod Forge
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: InterModComms$IMC - Minecraft Forge took 0.003s
[21:33:33] [Server thread/TRACE] [FML/]: Attempting to deliver 0 IMC messages to mod AntMan
[21:33:33] [Server thread/TRACE] [AntMan/AntMan]: Sending event IMCEvent to mod AntMan
[21:33:33] [Server thread/TRACE] [AntMan/AntMan]: Sent event IMCEvent to mod AntMan
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: InterModComms$IMC - AntMan took 0.023s
[21:33:33] [Server thread/TRACE] [FML/]: Attempting to deliver 0 IMC messages to mod LucraftCore
[21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sending event IMCEvent to mod LucraftCore
[21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sent event IMCEvent to mod LucraftCore
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: InterModComms$IMC - Lucraft: Core took 0.002s
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Finished: InterModComms$IMC took 0.076s
[21:33:33] [Server thread/INFO] [FML/]: Injecting itemstacks
[21:33:33] [Server thread/INFO] [FML/]: Itemstack injection complete
[21:33:33] [Server thread/TRACE] [mcp/mcp]: Sending event FMLPostInitializationEvent to mod mcp
[21:33:33] [Server thread/TRACE] [mcp/mcp]: Sent event FMLPostInitializationEvent to mod mcp
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: PostInitialization - Minecraft Coder Pack took 0.004s
[21:33:33] [Server thread/TRACE] [FML/FML]: Sending event FMLPostInitializationEvent to mod FML
[21:33:33] [Server thread/TRACE] [FML/FML]: Sent event FMLPostInitializationEvent to mod FML
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: PostInitialization - Forge Mod Loader took 0.004s
[21:33:33] [Server thread/TRACE] [Forge/Forge]: Sending event FMLPostInitializationEvent to mod Forge
[21:33:33] [Server thread/TRACE] [Forge/Forge]: Sent event FMLPostInitializationEvent to mod Forge
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: PostInitialization - Minecraft Forge took 0.053s
[21:33:33] [Server thread/TRACE] [AntMan/AntMan]: Sending event FMLPostInitializationEvent to mod AntMan
[21:33:33] [Server thread/TRACE] [AntMan/AntMan]: Sent event FMLPostInitializationEvent to mod AntMan
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: PostInitialization - AntMan took 0.124s
[21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sending event FMLPostInitializationEvent to mod LucraftCore
[21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sent event FMLPostInitializationEvent to mod LucraftCore
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: PostInitialization - Lucraft: Core took 0.001s
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Finished: PostInitialization took 0.185s
[21:33:33] [Server thread/TRACE] [mcp/mcp]: Sending event FMLLoadCompleteEvent to mod mcp
[21:33:33] [Server thread/TRACE] [mcp/mcp]: Sent event FMLLoadCompleteEvent to mod mcp
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: LoadComplete - Minecraft Coder Pack took 0.001s
[21:33:33] [Server thread/TRACE] [FML/FML]: Sending event FMLLoadCompleteEvent to mod FML
[21:33:33] [Server thread/TRACE] [FML/FML]: Sent event FMLLoadCompleteEvent to mod FML
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: LoadComplete - Forge Mod Loader took 0.001s
[21:33:33] [Server thread/TRACE] [Forge/Forge]: Sending event FMLLoadCompleteEvent to mod Forge
[21:33:33] [Server thread/DEBUG] [FML/Forge]: Forge RecipeSorter Baking:
[21:33:33] [Server thread/DEBUG] [FML/Forge]:   14: RecipeEntry("Before", UNKNOWN, )
[21:33:33] [Server thread/DEBUG] [FML/Forge]:   13: RecipeEntry("minecraft:shaped", SHAPED, net.minecraft.item.crafting.ShapedRecipes) Before: minecraft:shapeless
[21:33:33] [Server thread/DEBUG] [FML/Forge]:   12: RecipeEntry("forge:shapedore", SHAPED, net.minecraftforge.oredict.ShapedOreRecipe) Before: minecraft:shapeless After: minecraft:shaped
[21:33:33] [Server thread/DEBUG] [FML/Forge]:   11: RecipeEntry("minecraft:mapextending", SHAPED, net.minecraft.item.crafting.RecipesMapExtending) Before: minecraft:shapeless After: minecraft:shaped
[21:33:33] [Server thread/DEBUG] [FML/Forge]:   10: RecipeEntry("minecraft:shapeless", SHAPELESS, net.minecraft.item.crafting.ShapelessRecipes) After: minecraft:shaped
[21:33:33] [Server thread/DEBUG] [FML/Forge]:   9: RecipeEntry("minecraft:repair", SHAPELESS, net.minecraft.item.crafting.RecipeRepairItem) After: minecraft:shapeless
[21:33:33] [Server thread/DEBUG] [FML/Forge]:   8: RecipeEntry("forge:shapelessore", SHAPELESS, net.minecraftforge.oredict.ShapelessOreRecipe) After: minecraft:shapeless
[21:33:33] [Server thread/DEBUG] [FML/Forge]:   7: RecipeEntry("minecraft:armordyes", SHAPELESS, net.minecraft.item.crafting.RecipesArmorDyes) After: minecraft:shapeless
[21:33:33] [Server thread/DEBUG] [FML/Forge]:   6: RecipeEntry("minecraft:fireworks", SHAPELESS, net.minecraft.item.crafting.RecipeFireworks) After: minecraft:shapeless
[21:33:33] [Server thread/DEBUG] [FML/Forge]:   5: RecipeEntry("minecraft:pattern_add", SHAPELESS, net.minecraft.item.crafting.RecipesBanners$RecipeAddPattern) After: minecraft:shapeless
[21:33:33] [Server thread/DEBUG] [FML/Forge]:   4: RecipeEntry("minecraft:pattern_dupe", SHAPELESS, net.minecraft.item.crafting.RecipesBanners$RecipeDuplicatePattern) After: minecraft:shapeless
[21:33:33] [Server thread/DEBUG] [FML/Forge]:   3: RecipeEntry("minecraft:bookcloning", SHAPELESS, net.minecraft.item.crafting.RecipeBookCloning) After: minecraft:shapeless
[21:33:33] [Server thread/DEBUG] [FML/Forge]:   2: RecipeEntry("minecraft:mapcloning", SHAPELESS, net.minecraft.item.crafting.RecipesMapCloning) After: minecraft:shapeless
[21:33:33] [Server thread/DEBUG] [FML/Forge]:   1: RecipeEntry("After", UNKNOWN, )
[21:33:33] [Server thread/DEBUG] [FML/Forge]: Sorting recipies
[21:33:33] [Server thread/TRACE] [Forge/Forge]: Sent event FMLLoadCompleteEvent to mod Forge
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: LoadComplete - Minecraft Forge took 0.058s
[21:33:33] [Server thread/TRACE] [AntMan/AntMan]: Sending event FMLLoadCompleteEvent to mod AntMan
[21:33:33] [Server thread/TRACE] [AntMan/AntMan]: Sent event FMLLoadCompleteEvent to mod AntMan
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: LoadComplete - AntMan took 0.001s
[21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sending event FMLLoadCompleteEvent to mod LucraftCore
[21:33:33] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sent event FMLLoadCompleteEvent to mod LucraftCore
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Step: LoadComplete - Lucraft: Core took 0.001s
[21:33:33] [Server thread/DEBUG] [FML/]: Bar Finished: LoadComplete took 0.061s
[21:33:33] [Server thread/DEBUG] [FML/]: Freezing block and item id maps
[21:33:33] [Server thread/INFO] [FML/]: Forge Mod Loader has successfully loaded 5 mods
[21:33:33] [Server thread/TRACE] [mcp/mcp]: Sending event FMLServerAboutToStartEvent to mod mcp
[21:33:33] [Server thread/TRACE] [mcp/mcp]: Sent event FMLServerAboutToStartEvent to mod mcp
[21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerAboutToStart - Minecraft Coder Pack took 0.001s
[21:33:34] [Server thread/TRACE] [FML/FML]: Sending event FMLServerAboutToStartEvent to mod FML
[21:33:34] [Server thread/TRACE] [FML/FML]: Sent event FMLServerAboutToStartEvent to mod FML
[21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerAboutToStart - Forge Mod Loader took 0.005s
[21:33:34] [Server thread/TRACE] [Forge/Forge]: Sending event FMLServerAboutToStartEvent to mod Forge
[21:33:34] [Server thread/TRACE] [Forge/Forge]: Sent event FMLServerAboutToStartEvent to mod Forge
[21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerAboutToStart - Minecraft Forge took 0.001s
[21:33:34] [Server thread/TRACE] [AntMan/AntMan]: Sending event FMLServerAboutToStartEvent to mod AntMan
[21:33:34] [Server thread/TRACE] [AntMan/AntMan]: Sent event FMLServerAboutToStartEvent to mod AntMan
[21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerAboutToStart - AntMan took 0.003s
[21:33:34] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sending event FMLServerAboutToStartEvent to mod LucraftCore
[21:33:34] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sent event FMLServerAboutToStartEvent to mod LucraftCore
[21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerAboutToStart - Lucraft: Core took 0.008s
[21:33:34] [Server thread/DEBUG] [FML/]: Bar Finished: ServerAboutToStart took 0.017s
[21:33:34] [Server thread/ERROR] [fml.ModTracker/]: This world was saved with mod minecraft which appears to be missing, things may not work well
[21:33:34] [Server thread/INFO] [fml.ModTracker/]: This world was saved with mod mcp version 9.42 and it is now at version 9.19, things may not work well
[21:33:34] [Server thread/ERROR] [fml.ModTracker/]: This world was saved with mod forge which appears to be missing, things may not work well
[21:33:34] [Server thread/ERROR] [fml.ModTracker/]: This world was saved with mod lucraftcore which appears to be missing, things may not work well
[21:33:34] [Server thread/INFO] [FML/]: Injecting existing block and item data into this server instance
[21:33:34] [Server thread/ERROR] [FML/]: An unknown persistent registry type "minecraft:potiontypes" has been encountered. This Forge instance cannot understand it.
[21:33:34] [Server thread/DEBUG] [FML/]: Reverting to frozen data state.
[21:33:34] [Server thread/TRACE] [mcp/mcp]: Sending event FMLModIdMappingEvent to mod mcp
[21:33:34] [Server thread/TRACE] [mcp/mcp]: Sent event FMLModIdMappingEvent to mod mcp
[21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Minecraft Coder Pack took 0.001s
[21:33:34] [Server thread/TRACE] [FML/FML]: Sending event FMLModIdMappingEvent to mod FML
[21:33:34] [Server thread/TRACE] [FML/FML]: Sent event FMLModIdMappingEvent to mod FML
[21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Forge Mod Loader took 0.001s
[21:33:34] [Server thread/TRACE] [Forge/Forge]: Sending event FMLModIdMappingEvent to mod Forge
[21:33:34] [Server thread/TRACE] [Forge/Forge]: Sent event FMLModIdMappingEvent to mod Forge
[21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Minecraft Forge took 0.001s
[21:33:34] [Server thread/TRACE] [AntMan/AntMan]: Sending event FMLModIdMappingEvent to mod AntMan
[21:33:34] [Server thread/TRACE] [AntMan/AntMan]: Sent event FMLModIdMappingEvent to mod AntMan
[21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - AntMan took 0.027s
[21:33:34] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sending event FMLModIdMappingEvent to mod LucraftCore
[21:33:34] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sent event FMLModIdMappingEvent to mod LucraftCore
[21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Lucraft: Core took 0.001s
[21:33:34] [Server thread/DEBUG] [FML/]: Bar Finished: ModIdMapping took 0.030s
[21:33:34] [Server thread/INFO] [FML/]: Applying holder lookups
[21:33:34] [Server thread/INFO] [FML/]: Holder lookups applied
[21:33:34] [Server thread/DEBUG] [FML/]: Frozen state restored.
[21:33:34] [Server thread/TRACE] [mcp/mcp]: Sending event FMLServerStoppedEvent to mod mcp
[21:33:34] [Server thread/TRACE] [mcp/mcp]: Sent event FMLServerStoppedEvent to mod mcp
[21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Minecraft Coder Pack took 0.001s
[21:33:34] [Server thread/TRACE] [FML/FML]: Sending event FMLServerStoppedEvent to mod FML
[21:33:34] [Server thread/TRACE] [FML/FML]: Sent event FMLServerStoppedEvent to mod FML
[21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Forge Mod Loader took 0.002s
[21:33:34] [Server thread/TRACE] [Forge/Forge]: Sending event FMLServerStoppedEvent to mod Forge
[21:33:34] [Server thread/TRACE] [Forge/Forge]: Sent event FMLServerStoppedEvent to mod Forge
[21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Minecraft Forge took 0.015s
[21:33:34] [Server thread/TRACE] [AntMan/AntMan]: Sending event FMLServerStoppedEvent to mod AntMan
[21:33:34] [Server thread/TRACE] [AntMan/AntMan]: Sent event FMLServerStoppedEvent to mod AntMan
[21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - AntMan took 0.000s
[21:33:34] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sending event FMLServerStoppedEvent to mod LucraftCore
[21:33:34] [Server thread/TRACE] [LucraftCore/LucraftCore]: Sent event FMLServerStoppedEvent to mod LucraftCore
[21:33:34] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Lucraft: Core took 0.008s
[21:33:34] [Server thread/DEBUG] [FML/]: Bar Finished: ServerStopped took 0.026s
[21:33:34] [Server thread/INFO] [FML/]: The state engine was in incorrect state SERVER_STARTING and forced into state SERVER_STOPPED. Errors may have been discarded.
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [21:33:19] [Server thread/INFO] [FML/]: MinecraftForge v11.15.1.2318 Initialized
                                            [number:protected] => 59
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [21:33:19] [Server thread/INFO] [FML/]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Forge version
                    [value:protected] => 11.15.1.2318
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\WorldModVersionProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [21:33:34] [Server thread/INFO] [fml.ModTracker/]: This world was saved with mod mcp version 9.42 and it is now at version 9.19, things may not work well
                                            [number:protected] => 327
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [21:33:34] [Server thread/INFO] [fml.ModTracker/]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modName:protected] => mcp
                                    [modVersion:protected] => 9.42
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\DoNothingSolution Object
                                (
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => mcp
                    [currentVersion:protected] => 9.19
                    [expectedVersion:protected] => 9.42
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\WorldMissingModProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [21:33:34] [Server thread/ERROR] [fml.ModTracker/]: This world was saved with mod lucraftcore which appears to be missing, things may not work well
                                            [number:protected] => 329
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [21:33:34] [Server thread/ERROR] [fml.ModTracker/]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modName:protected] => lucraftcore
                                    [modVersion:protected] => 
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\DoNothingSolution Object
                                (
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => lucraftcore
                )

        )

    [iterator:protected] => 2
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Forge version: 11.15.1.2318", $analysis[0]->getMessage());

        $this->assertEquals("This world was saved with mod 'mcp' version 9.42 and it is now at version 9.19.", $analysis[1]->getMessage());
        $this->assertEquals("Install the mod 'mcp' with version 9.42.", $analysis[1][0]->getMessage());
        $this->assertEquals("Do nothing. This problem might fix itself.", $analysis[1][1]->getMessage());

        $this->assertEquals("The world was saved with mod 'lucraftcore' which appears to be missing.", $analysis[2]->getMessage());
        $this->assertEquals("Install the mod 'lucraftcore'.", $analysis[2][0]->getMessage());
        $this->assertEquals("Do nothing. This problem might fix itself.", $analysis[2][1]->getMessage());

    }
}