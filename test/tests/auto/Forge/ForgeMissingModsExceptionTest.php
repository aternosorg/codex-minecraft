<?php

class ForgeMissingModsExceptionTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-missing-mods-exception.log");
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
                                    [text:protected] => [14:43:12] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLServerTweaker
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/INFO] [LaunchWrapper]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/INFO] [LaunchWrapper]: Using primary tweak class name net.minecraftforge.fml.common.launcher.FMLServerTweaker
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/INFO] [LaunchWrapper]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLServerTweaker
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/INFO] [LaunchWrapper]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Injecting tracing printstreams for STDOUT/STDERR.
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/INFO] [FML]: Forge Mod Loader version 14.23.5.2860 for Minecraft 1.12.2 loading
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/INFO] [FML]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/INFO] [FML]: Java is OpenJDK 64-Bit Server VM, version 1.8.0_292, running on Linux:amd64:5.4.0-99-generic, installed at /usr/local/openjdk-8/jre
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/INFO] [FML]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Java classpath at launch is:
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]:     forge.jar
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]:     /jolokia/jolokia.jar
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Java library path at launch is:
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]:     /usr/java/packages/lib/amd64
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]:     /usr/lib64
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]:     /lib64
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]:     /lib
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]:     /usr/lib
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Determined Minecraft Libraries Root: /server/libraries
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Cleaning up mods folder: ./mods
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Examining file: Helicopter_Pack-2.7.0.jar
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Enabling runtime deobfuscation
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Instantiating coremod class FMLCorePlugin
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Found signing certificates for coremod FMLCorePlugin (net.minecraftforge.fml.relauncher.FMLCorePlugin)
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Found certificate e3c3d50c7c986df74c645c0ac54639741c90a557
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Added access transformer class net.minecraftforge.fml.common.asm.transformers.AccessTransformer to enqueued access transformers
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Enqueued coremod FMLCorePlugin
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Instantiating coremod class FMLForgePlugin
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Found signing certificates for coremod FMLForgePlugin (net.minecraftforge.classloading.FMLForgePlugin)
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Found certificate e3c3d50c7c986df74c645c0ac54639741c90a557
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Enqueued coremod FMLForgePlugin
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: All fundamental core mods are successfully located
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Discovering coremods
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/INFO] [FML]: Searching /server/./mods for mods
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/INFO] [FML]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]:   Adding Helicopter_Pack-2.7.0.jar to the mod list
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Examining for coremod candidacy Helicopter_Pack-2.7.0.jar
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Not found coremod data in Helicopter_Pack-2.7.0.jar
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/INFO] [LaunchWrapper]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/INFO] [LaunchWrapper]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/INFO] [LaunchWrapper]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/INFO] [LaunchWrapper]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/INFO] [LaunchWrapper]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/DEBUG] [FML]: Injecting coremod FMLCorePlugin \{net.minecraftforge.fml.relauncher.FMLCorePlugin\} class transformers
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/DEBUG] [FML]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:12] [main/TRACE] [FML]: Registering transformer net.minecraftforge.fml.common.asm.transformers.SideTransformer
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:12] [main/TRACE] [FML]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:13] [main/TRACE] [FML]: Registering transformer net.minecraftforge.fml.common.asm.transformers.EventSubscriptionTransformer
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:13] [main/TRACE] [FML]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:13] [main/TRACE] [FML]: Registering transformer net.minecraftforge.fml.common.asm.transformers.EventSubscriberTransformer
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:13] [main/TRACE] [FML]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:13] [main/TRACE] [FML]: Registering transformer net.minecraftforge.fml.common.asm.transformers.SoundEngineFixTransformer
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:13] [main/TRACE] [FML]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:13] [main/DEBUG] [FML]: Injection complete
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:13] [main/DEBUG] [FML]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:13] [main/DEBUG] [FML]: Running coremod plugin for FMLCorePlugin \{net.minecraftforge.fml.relauncher.FMLCorePlugin\}
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:13] [main/DEBUG] [FML]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:13] [main/DEBUG] [FML]: Running coremod plugin FMLCorePlugin
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:13] [main/DEBUG] [FML]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:15] [main/DEBUG] [FML]: Read 1154 binary patches
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:15] [main/DEBUG] [FML]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:15] [main/DEBUG] [FML]: Loading deobfuscation resource /deobfuscation_data-1.12.2.lzma with 36076 records
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:15] [main/DEBUG] [FML]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:16] [main/INFO] [FML]: Found valid fingerprint for Minecraft Forge. Certificate fingerprint e3c3d50c7c986df74c645c0ac54639741c90a557
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:16] [main/INFO] [FML]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:16] [main/DEBUG] [FML]: Coremod plugin class FMLCorePlugin run successfully
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:16] [main/DEBUG] [FML]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:16] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:16] [main/INFO] [LaunchWrapper]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:16] [main/DEBUG] [FML]: Injecting coremod FMLForgePlugin \{net.minecraftforge.classloading.FMLForgePlugin\} class transformers
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:16] [main/DEBUG] [FML]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:16] [main/DEBUG] [FML]: Injection complete
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:16] [main/DEBUG] [FML]:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:16] [main/DEBUG] [FML]: Running coremod plugin for FMLForgePlugin \{net.minecraftforge.classloading.FMLForgePlugin\}
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:16] [main/DEBUG] [FML]:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:16] [main/DEBUG] [FML]: Running coremod plugin FMLForgePlugin
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:16] [main/DEBUG] [FML]:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:16] [main/DEBUG] [FML]: Coremod plugin class FMLForgePlugin run successfully
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:16] [main/DEBUG] [FML]:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:16] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:16] [main/INFO] [LaunchWrapper]:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:16] [main/DEBUG] [FML]: Loaded 215 rules from AccessTransformer config file forge_at.cfg
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:16] [main/DEBUG] [FML]:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:16] [main/DEBUG] [FML]: Validating minecraft
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:16] [main/DEBUG] [FML]:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:17] [main/DEBUG] [FML]: Minecraft validated, launching...
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:17] [main/DEBUG] [FML]:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:17] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:17] [main/INFO] [LaunchWrapper]:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:17] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:17] [main/INFO] [LaunchWrapper]:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:17] [main/INFO] [LaunchWrapper]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:17] [main/INFO] [LaunchWrapper]:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:23] [main/DEBUG] [FML]: Creating vanilla freeze snapshot
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:23] [main/DEBUG] [FML]:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:23] [main/DEBUG] [FML]: Vanilla freeze snapshot created
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:23] [main/DEBUG] [FML]:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:24] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:24] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:24] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2860 Initialized
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:24] [Server thread/INFO] [FML]:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:24] [Server thread/INFO] [FML]: Starts to replace vanilla recipe ingredients with ore ingredients.
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:24] [Server thread/INFO] [FML]:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:24] [Server thread/INFO] [FML]: Invalid recipe found with multiple oredict ingredients in the same ingredient...
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:24] [Server thread/INFO] [FML]:
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:24] [Server thread/INFO] [FML]: Replaced 1227 ore ingredients
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:24] [Server thread/INFO] [FML]:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:24] [Server thread/DEBUG] [FML]: File /server/config/injectedDependencies.json not found. No dependencies injected
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:24] [Server thread/DEBUG] [FML]:
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:24] [Server thread/DEBUG] [FML]: Building injected Mod Containers [net.minecraftforge.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer]
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:24] [Server thread/DEBUG] [FML]:
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:25] [Server thread/DEBUG] [FML]: Attempting to load mods contained in the minecraft jar file and associated classes
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:25] [Server thread/DEBUG] [FML]:
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:25] [Server thread/DEBUG] [FML]: Found a minecraft related file at /server/forge.jar, examining for mod candidates
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:25] [Server thread/DEBUG] [FML]:
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:25] [Server thread/DEBUG] [FML]: Found a minecraft related file at /jolokia/jolokia.jar, examining for mod candidates
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:25] [Server thread/DEBUG] [FML]:
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:25] [Server thread/DEBUG] [FML]: Minecraft jar mods loaded successfully
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:25] [Server thread/DEBUG] [FML]:
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:25] [Server thread/INFO] [FML]: Searching /server/./mods for mods
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:25] [Server thread/INFO] [FML]:
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:25] [Server thread/DEBUG] [FML]:   Adding Helicopter_Pack-2.7.0.jar to the mod list
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:25] [Server thread/DEBUG] [FML]:
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:25] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file Helicopter_Pack-2.7.0.jar
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:25] [Server thread/DEBUG] [FML]:
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:25] [Server thread/DEBUG] [FML]: Examining file forge.jar for potential mods
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:25] [Server thread/DEBUG] [FML]:
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:25] [Server thread/DEBUG] [FML]: The mod container forge.jar appears to be missing an mcmod.info file
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:25] [Server thread/DEBUG] [FML]:
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/DEBUG] [FML]: Examining file jolokia.jar for potential mods
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/DEBUG] [FML]:
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/DEBUG] [FML]: The mod container jolokia.jar appears to be missing an mcmod.info file
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/DEBUG] [FML]:
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/DEBUG] [FML]: Examining file Helicopter_Pack-2.7.0.jar for potential mods
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/DEBUG] [FML]:
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/TRACE] [FML]: Located mcmod.info file in file Helicopter_Pack-2.7.0.jar
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/TRACE] [FML]:
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (helicopterpack.ModShell) - loading
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/DEBUG] [FML]:
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/TRACE] [FML]: Parsed dependency info for helicopterpack: Requirements: [mts@[19.0.0,)] After:[mts@[19.0.0,)] Before:[]
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/TRACE] [FML]:
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/INFO] [FML]: Forge Mod Loader has identified 5 mods to load
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/INFO] [FML]:
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/TRACE] [FML]: Received a system property request \'\'
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/TRACE] [FML]:
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/TRACE] [FML]: System property request managing the state of 0 mods
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/TRACE] [FML]:
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/DEBUG] [FML]: After merging, found state information for 0 mods
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/DEBUG] [FML]:
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/WARN] [FML]: Missing English translation for FML: assets/fml/lang/en_us.lang
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/WARN] [FML]:
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/DEBUG] [FML]: Enabling mod helicopterpack
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/DEBUG] [FML]:
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/WARN] [FML]: Missing English translation for helicopterpack: assets/helicopterpack/lang/en_us.lang
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/WARN] [FML]:
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/TRACE] [FML]: Verifying mod requirements are satisfied
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/TRACE] [FML]:
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod helicopterpack (Hero Aviation Helicopter Pack (HA/HP)) requires [mts@[19.0.0,)]
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/FATAL] [FML]:
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/DEBUG] [FML]: Mod sorting data
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/DEBUG] [FML]:
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/DEBUG] [FML]: 	helicopterpack(Hero Aviation Helicopter Pack (HA/HP):2.7.0): Helicopter_Pack-2.7.0.jar (required-after:mts@[19.0.0,);)
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/DEBUG] [FML]:
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: Encountered an unexpected exception
                                    [number:protected] => 100
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.minecraftforge.fml.common.MissingModsException: Mod helicopterpack (Hero Aviation Helicopter Pack (HA/HP)) requires [mts@[19.0.0,)]
                                    [number:protected] => 101
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.common.Loader.sortModList(Loader.java:266) ~[Loader.class:?]
                                    [number:protected] => 102
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.common.Loader.loadMods(Loader.java:572) ~[Loader.class:?]
                                    [number:protected] => 103
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.server.FMLServerHandler.beginServerLoading(FMLServerHandler.java:98) ~[FMLServerHandler.class:?]
                                    [number:protected] => 104
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.fml.common.FMLCommonHandler.onServerStart(FMLCommonHandler.java:333) ~[FMLCommonHandler.class:?]
                                    [number:protected] => 105
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:125) ~[nz.class:?]
                                    [number:protected] => 106
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:486) [MinecraftServer.class:?]
                                    [number:protected] => 107
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_292]
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]:
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: This crash report has been saved to: /server/./crash-reports/crash-2022-04-05_14.43.26-server.txt
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]:
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving worlds
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod minecraft
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/TRACE] [FML]:
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod minecraft
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/TRACE] [FML]:
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Minecraft took 0.004s
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/DEBUG] [FML]:
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod mcp
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/TRACE] [FML]:
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod mcp
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/TRACE] [FML]:
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Minecraft Coder Pack took 0.002s
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/DEBUG] [FML]:
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod FML
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/TRACE] [FML]:
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod FML
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/TRACE] [FML]:
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Forge Mod Loader took 0.001s
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/DEBUG] [FML]:
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod forge
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/TRACE] [FML]:
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod forge
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/TRACE] [FML]:
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Minecraft Forge took 0.001s
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/DEBUG] [FML]:
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod helicopterpack
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/TRACE] [FML]:
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod helicopterpack
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/TRACE] [FML]:
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Hero Aviation Helicopter Pack (HA/HP) took 0.001s
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/DEBUG] [FML]:
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/DEBUG] [FML]: Bar Finished: ServerStopped took 0.008s
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/DEBUG] [FML]:
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server thread/INFO] [FML]: The state engine was in incorrect state CONSTRUCTING and forced into state SERVER_STOPPED. Errors may have been discarded.
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server thread/INFO] [FML]:
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server Shutdown Thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server Shutdown Thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [14:43:26] [Server Shutdown Thread/INFO] [net.minecraft.server.MinecraftServer]: Saving worlds
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [14:43:26] [Server Shutdown Thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

        )

    [iterator:protected] => 122
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [14:43:12] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLServerTweaker
[14:43:12] [main/INFO] [LaunchWrapper]: Using primary tweak class name net.minecraftforge.fml.common.launcher.FMLServerTweaker
[14:43:12] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLServerTweaker
[14:43:12] [main/DEBUG] [FML]: Injecting tracing printstreams for STDOUT/STDERR.
[14:43:12] [main/INFO] [FML]: Forge Mod Loader version 14.23.5.2860 for Minecraft 1.12.2 loading
[14:43:12] [main/INFO] [FML]: Java is OpenJDK 64-Bit Server VM, version 1.8.0_292, running on Linux:amd64:5.4.0-99-generic, installed at /usr/local/openjdk-8/jre
[14:43:12] [main/DEBUG] [FML]: Java classpath at launch is:
[14:43:12] [main/DEBUG] [FML]:     forge.jar
[14:43:12] [main/DEBUG] [FML]:     /jolokia/jolokia.jar
[14:43:12] [main/DEBUG] [FML]: Java library path at launch is:
[14:43:12] [main/DEBUG] [FML]:     /usr/java/packages/lib/amd64
[14:43:12] [main/DEBUG] [FML]:     /usr/lib64
[14:43:12] [main/DEBUG] [FML]:     /lib64
[14:43:12] [main/DEBUG] [FML]:     /lib
[14:43:12] [main/DEBUG] [FML]:     /usr/lib
[14:43:12] [main/DEBUG] [FML]: Determined Minecraft Libraries Root: /server/libraries
[14:43:12] [main/DEBUG] [FML]: Cleaning up mods folder: ./mods
[14:43:12] [main/DEBUG] [FML]: Examining file: Helicopter_Pack-2.7.0.jar
[14:43:12] [main/DEBUG] [FML]: Enabling runtime deobfuscation
[14:43:12] [main/DEBUG] [FML]: Instantiating coremod class FMLCorePlugin
[14:43:12] [main/DEBUG] [FML]: Found signing certificates for coremod FMLCorePlugin (net.minecraftforge.fml.relauncher.FMLCorePlugin)
[14:43:12] [main/DEBUG] [FML]: Found certificate e3c3d50c7c986df74c645c0ac54639741c90a557
[14:43:12] [main/DEBUG] [FML]: Added access transformer class net.minecraftforge.fml.common.asm.transformers.AccessTransformer to enqueued access transformers
[14:43:12] [main/DEBUG] [FML]: Enqueued coremod FMLCorePlugin
[14:43:12] [main/DEBUG] [FML]: Instantiating coremod class FMLForgePlugin
[14:43:12] [main/DEBUG] [FML]: Found signing certificates for coremod FMLForgePlugin (net.minecraftforge.classloading.FMLForgePlugin)
[14:43:12] [main/DEBUG] [FML]: Found certificate e3c3d50c7c986df74c645c0ac54639741c90a557
[14:43:12] [main/DEBUG] [FML]: Enqueued coremod FMLForgePlugin
[14:43:12] [main/DEBUG] [FML]: All fundamental core mods are successfully located
[14:43:12] [main/DEBUG] [FML]: Discovering coremods
[14:43:12] [main/INFO] [FML]: Searching /server/./mods for mods
[14:43:12] [main/DEBUG] [FML]:   Adding Helicopter_Pack-2.7.0.jar to the mod list
[14:43:12] [main/DEBUG] [FML]: Examining for coremod candidacy Helicopter_Pack-2.7.0.jar
[14:43:12] [main/DEBUG] [FML]: Not found coremod data in Helicopter_Pack-2.7.0.jar
[14:43:12] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
[14:43:12] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
[14:43:12] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
[14:43:12] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
[14:43:12] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
[14:43:12] [main/DEBUG] [FML]: Injecting coremod FMLCorePlugin \{net.minecraftforge.fml.relauncher.FMLCorePlugin\} class transformers
[14:43:12] [main/TRACE] [FML]: Registering transformer net.minecraftforge.fml.common.asm.transformers.SideTransformer
[14:43:13] [main/TRACE] [FML]: Registering transformer net.minecraftforge.fml.common.asm.transformers.EventSubscriptionTransformer
[14:43:13] [main/TRACE] [FML]: Registering transformer net.minecraftforge.fml.common.asm.transformers.EventSubscriberTransformer
[14:43:13] [main/TRACE] [FML]: Registering transformer net.minecraftforge.fml.common.asm.transformers.SoundEngineFixTransformer
[14:43:13] [main/DEBUG] [FML]: Injection complete
[14:43:13] [main/DEBUG] [FML]: Running coremod plugin for FMLCorePlugin \{net.minecraftforge.fml.relauncher.FMLCorePlugin\}
[14:43:13] [main/DEBUG] [FML]: Running coremod plugin FMLCorePlugin
[14:43:15] [main/DEBUG] [FML]: Read 1154 binary patches
[14:43:15] [main/DEBUG] [FML]: Loading deobfuscation resource /deobfuscation_data-1.12.2.lzma with 36076 records
[14:43:16] [main/INFO] [FML]: Found valid fingerprint for Minecraft Forge. Certificate fingerprint e3c3d50c7c986df74c645c0ac54639741c90a557
[14:43:16] [main/DEBUG] [FML]: Coremod plugin class FMLCorePlugin run successfully
[14:43:16] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
[14:43:16] [main/DEBUG] [FML]: Injecting coremod FMLForgePlugin \{net.minecraftforge.classloading.FMLForgePlugin\} class transformers
[14:43:16] [main/DEBUG] [FML]: Injection complete
[14:43:16] [main/DEBUG] [FML]: Running coremod plugin for FMLForgePlugin \{net.minecraftforge.classloading.FMLForgePlugin\}
[14:43:16] [main/DEBUG] [FML]: Running coremod plugin FMLForgePlugin
[14:43:16] [main/DEBUG] [FML]: Coremod plugin class FMLForgePlugin run successfully
[14:43:16] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
[14:43:16] [main/DEBUG] [FML]: Loaded 215 rules from AccessTransformer config file forge_at.cfg
[14:43:16] [main/DEBUG] [FML]: Validating minecraft
[14:43:17] [main/DEBUG] [FML]: Minecraft validated, launching...
[14:43:17] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.TerminalTweaker
[14:43:17] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.TerminalTweaker
[14:43:17] [main/INFO] [LaunchWrapper]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
[14:43:23] [main/DEBUG] [FML]: Creating vanilla freeze snapshot
[14:43:23] [main/DEBUG] [FML]: Vanilla freeze snapshot created
[14:43:24] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
[14:43:24] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2860 Initialized
[14:43:24] [Server thread/INFO] [FML]: Starts to replace vanilla recipe ingredients with ore ingredients.
[14:43:24] [Server thread/INFO] [FML]: Invalid recipe found with multiple oredict ingredients in the same ingredient...
[14:43:24] [Server thread/INFO] [FML]: Replaced 1227 ore ingredients
[14:43:24] [Server thread/DEBUG] [FML]: File /server/config/injectedDependencies.json not found. No dependencies injected
[14:43:24] [Server thread/DEBUG] [FML]: Building injected Mod Containers [net.minecraftforge.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer]
[14:43:25] [Server thread/DEBUG] [FML]: Attempting to load mods contained in the minecraft jar file and associated classes
[14:43:25] [Server thread/DEBUG] [FML]: Found a minecraft related file at /server/forge.jar, examining for mod candidates
[14:43:25] [Server thread/DEBUG] [FML]: Found a minecraft related file at /jolokia/jolokia.jar, examining for mod candidates
[14:43:25] [Server thread/DEBUG] [FML]: Minecraft jar mods loaded successfully
[14:43:25] [Server thread/INFO] [FML]: Searching /server/./mods for mods
[14:43:25] [Server thread/DEBUG] [FML]:   Adding Helicopter_Pack-2.7.0.jar to the mod list
[14:43:25] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file Helicopter_Pack-2.7.0.jar
[14:43:25] [Server thread/DEBUG] [FML]: Examining file forge.jar for potential mods
[14:43:25] [Server thread/DEBUG] [FML]: The mod container forge.jar appears to be missing an mcmod.info file
[14:43:26] [Server thread/DEBUG] [FML]: Examining file jolokia.jar for potential mods
[14:43:26] [Server thread/DEBUG] [FML]: The mod container jolokia.jar appears to be missing an mcmod.info file
[14:43:26] [Server thread/DEBUG] [FML]: Examining file Helicopter_Pack-2.7.0.jar for potential mods
[14:43:26] [Server thread/TRACE] [FML]: Located mcmod.info file in file Helicopter_Pack-2.7.0.jar
[14:43:26] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (helicopterpack.ModShell) - loading
[14:43:26] [Server thread/TRACE] [FML]: Parsed dependency info for helicopterpack: Requirements: [mts@[19.0.0,)] After:[mts@[19.0.0,)] Before:[]
[14:43:26] [Server thread/INFO] [FML]: Forge Mod Loader has identified 5 mods to load
[14:43:26] [Server thread/TRACE] [FML]: Received a system property request \'\'
[14:43:26] [Server thread/TRACE] [FML]: System property request managing the state of 0 mods
[14:43:26] [Server thread/DEBUG] [FML]: After merging, found state information for 0 mods
[14:43:26] [Server thread/WARN] [FML]: Missing English translation for FML: assets/fml/lang/en_us.lang
[14:43:26] [Server thread/DEBUG] [FML]: Enabling mod helicopterpack
[14:43:26] [Server thread/WARN] [FML]: Missing English translation for helicopterpack: assets/helicopterpack/lang/en_us.lang
[14:43:26] [Server thread/TRACE] [FML]: Verifying mod requirements are satisfied
[14:43:26] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod helicopterpack (Hero Aviation Helicopter Pack (HA/HP)) requires [mts@[19.0.0,)]
[14:43:26] [Server thread/DEBUG] [FML]: Mod sorting data
[14:43:26] [Server thread/DEBUG] [FML]: 	helicopterpack(Hero Aviation Helicopter Pack (HA/HP):2.7.0): Helicopter_Pack-2.7.0.jar (required-after:mts@[19.0.0,);)
[14:43:26] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: Encountered an unexpected exception
net.minecraftforge.fml.common.MissingModsException: Mod helicopterpack (Hero Aviation Helicopter Pack (HA/HP)) requires [mts@[19.0.0,)]
	at net.minecraftforge.fml.common.Loader.sortModList(Loader.java:266) ~[Loader.class:?]
	at net.minecraftforge.fml.common.Loader.loadMods(Loader.java:572) ~[Loader.class:?]
	at net.minecraftforge.fml.server.FMLServerHandler.beginServerLoading(FMLServerHandler.java:98) ~[FMLServerHandler.class:?]
	at net.minecraftforge.fml.common.FMLCommonHandler.onServerStart(FMLCommonHandler.java:333) ~[FMLCommonHandler.class:?]
	at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:125) ~[nz.class:?]
	at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:486) [MinecraftServer.class:?]
	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_292]
[14:43:26] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: This crash report has been saved to: /server/./crash-reports/crash-2022-04-05_14.43.26-server.txt
[14:43:26] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
[14:43:26] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving worlds
[14:43:26] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod minecraft
[14:43:26] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod minecraft
[14:43:26] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Minecraft took 0.004s
[14:43:26] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod mcp
[14:43:26] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod mcp
[14:43:26] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Minecraft Coder Pack took 0.002s
[14:43:26] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod FML
[14:43:26] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod FML
[14:43:26] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Forge Mod Loader took 0.001s
[14:43:26] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod forge
[14:43:26] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod forge
[14:43:26] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Minecraft Forge took 0.001s
[14:43:26] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod helicopterpack
[14:43:26] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod helicopterpack
[14:43:26] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Hero Aviation Helicopter Pack (HA/HP) took 0.001s
[14:43:26] [Server thread/DEBUG] [FML]: Bar Finished: ServerStopped took 0.008s
[14:43:26] [Server thread/INFO] [FML]: The state engine was in incorrect state CONSTRUCTING and forced into state SERVER_STOPPED. Errors may have been discarded.
[14:43:26] [Server Shutdown Thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
[14:43:26] [Server Shutdown Thread/INFO] [net.minecraft.server.MinecraftServer]: Saving worlds
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
                                            [text:protected] => [14:43:24] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
                                            [number:protected] => 67
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [14:43:24] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.12.2
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Vanilla\EnvironmentInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [14:43:24] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
                                            [number:protected] => 67
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [14:43:24] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                        )

                    [counter:protected] => 54
                    [label:protected] => Environment
                    [value:protected] => Server
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Information\Forge\ForgeVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [14:43:24] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2860 Initialized
                                            [number:protected] => 68
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [14:43:24] [Server thread/INFO] [FML]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Forge version
                    [value:protected] => 14.23.5.2860
                )

            [3] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [14:43:26] [Server thread/FATAL] [FML]: net.minecraftforge.fml.common.MissingModsException: Mod helicopterpack (Hero Aviation Helicopter Pack (HA/HP)) requires [mts@[19.0.0,)]
                                            [number:protected] => 97
                                        )

                                )

                            [level:protected] => FATAL
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [14:43:26] [Server thread/FATAL] [FML]:
                        )

                    [counter:protected] => 2
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modName:protected] => mts
                                    [modVersion:protected] => 19.0.0
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => Hero Aviation Helicopter Pack (HA/HP)
                    [dependencyMods:protected] => Array
                        (
                            [0] => mts
                        )

                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.12.2", $analysis[0]->getMessage());

        $this->assertEquals("Environment: Server", $analysis[1]->getMessage());

        $this->assertEquals("Forge version: 14.23.5.2860", $analysis[2]->getMessage());

        $this->assertEquals("The mod 'Hero Aviation Helicopter Pack (HA/HP)' is missing the required mod 'mts'.", $analysis[3]->getMessage());
        $this->assertEquals("Install the mod 'mts' with version 19.0.0.", $analysis[3][0]->getMessage());

    }
}