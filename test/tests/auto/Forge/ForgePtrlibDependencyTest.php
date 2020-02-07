<?php

class ForgePtrlibDependencyTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-ptrlib-dependency.log");
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
                    [prefix:protected] => [17:03:22] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:22] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLServerTweaker
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:22] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:22] [main/INFO] [LaunchWrapper]: Using primary tweak class name net.minecraftforge.fml.common.launcher.FMLServerTweaker
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:22] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:22] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLServerTweaker
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Injecting tracing printstreams for STDOUT/STDERR.
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/INFO] [FML]: Forge Mod Loader version 14.23.5.2847 for Minecraft 1.12.2 loading
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/INFO] [FML]: Java is OpenJDK 64-Bit Server VM, version 1.8.0_232, running on Linux:amd64:4.4.0-171-generic, installed at /usr/local/openjdk-8/jre
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Java classpath at launch is:
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: forge.jar
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Java library path at launch is:
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: /usr/java/packages/lib/amd64
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: /usr/lib64
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: /lib64
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: /lib
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: /usr/lib
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Determined Minecraft Libraries Root: /aternos/server/libraries
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Cleaning up mods folder: ./mods
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: FutureVersionsV1.2.2.jar
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: [1.12.2] SecurityCraft v1.8.16.jar
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: emoticons-0.4-1.12.2-dist.jar
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: Rex\'s-Additional-Structures-1.12.x-(v.2.3.1).jar
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: Decocraft-2.6.3_1.12.2.jar
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: RoguelikeDungeons-1.12.2-1.8.0.jar
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: FastWorkbench-1.12.2-1.7.3.jar
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: rustic-1.1.2.jar
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: useful_backpacks-1.12.2-1.5.1.42.jar
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: Hwyla-1.8.26-B41_1.12.2.jar
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: ido-1.12.2-1.1.0.jar
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: CashCraft-1.12.2-4.0.0.1.jar
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: Clumps-3.1.2.jar
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: Chisel-MC1.12.2-1.0.1.44.jar
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: Explorercraft-2.2.9.jar
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: AppleSkin-mc1.12-1.0.9.jar
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: journeymap-1.12.2-5.5.8.jar
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: simpleharvest-1.08.jar
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: mclib-1.0.4-1.12.2.jar
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: u_team_core-1.12.2-2.2.5.147.jar
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: CarryOn MC1.12.2 v1.12.3.jar
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: BetterFps-1.4.8.jar
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining file: DynamicTrees-1.12.2-0.9.7.jar
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Enabling runtime deobfuscation
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Instantiating coremod class FMLCorePlugin
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/WARN] [FML]: The coremod FMLCorePlugin (net.minecraftforge.fml.relauncher.FMLCorePlugin) is not signed!
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Added access transformer class net.minecraftforge.fml.common.asm.transformers.AccessTransformer to enqueued access transformers
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Enqueued coremod FMLCorePlugin
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Instantiating coremod class FMLForgePlugin
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/WARN] [FML]: The coremod FMLForgePlugin (net.minecraftforge.classloading.FMLForgePlugin) is not signed!
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Enqueued coremod FMLForgePlugin
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: All fundamental core mods are successfully located
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Discovering coremods
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/INFO] [FML]: Searching /aternos/server/./mods for mods
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding FutureVersionsV1.2.2.jar to the mod list
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding [1.12.2] SecurityCraft v1.8.16.jar to the mod list
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding emoticons-0.4-1.12.2-dist.jar to the mod list
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding Rex\'s-Additional-Structures-1.12.x-(v.2.3.1).jar to the mod list
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding Decocraft-2.6.3_1.12.2.jar to the mod list
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding RoguelikeDungeons-1.12.2-1.8.0.jar to the mod list
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding FastWorkbench-1.12.2-1.7.3.jar to the mod list
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding rustic-1.1.2.jar to the mod list
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding useful_backpacks-1.12.2-1.5.1.42.jar to the mod list
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding Hwyla-1.8.26-B41_1.12.2.jar to the mod list
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding ido-1.12.2-1.1.0.jar to the mod list
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding CashCraft-1.12.2-4.0.0.1.jar to the mod list
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding Clumps-3.1.2.jar to the mod list
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding Chisel-MC1.12.2-1.0.1.44.jar to the mod list
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding Explorercraft-2.2.9.jar to the mod list
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding AppleSkin-mc1.12-1.0.9.jar to the mod list
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding journeymap-1.12.2-5.5.8.jar to the mod list
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding simpleharvest-1.08.jar to the mod list
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding mclib-1.0.4-1.12.2.jar to the mod list
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding u_team_core-1.12.2-2.2.5.147.jar to the mod list
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding CarryOn MC1.12.2 v1.12.3.jar to the mod list
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding BetterFps-1.4.8.jar to the mod list
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Adding DynamicTrees-1.12.2-0.9.7.jar to the mod list
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy [1.12.2] SecurityCraft v1.8.16.jar
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in [1.12.2] SecurityCraft v1.8.16.jar
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy AppleSkin-mc1.12-1.0.9.jar
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in AppleSkin-mc1.12-1.0.9.jar
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy BetterFps-1.4.8.jar
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/INFO] [FML]: Loading tweaker guichaguri.betterfps.tweaker.BetterFpsTweaker from BetterFps-1.4.8.jar
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy CarryOn MC1.12.2 v1.12.3.jar
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in CarryOn MC1.12.2 v1.12.3.jar
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy CashCraft-1.12.2-4.0.0.1.jar
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in CashCraft-1.12.2-4.0.0.1.jar
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy Chisel-MC1.12.2-1.0.1.44.jar
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in Chisel-MC1.12.2-1.0.1.44.jar
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy Clumps-3.1.2.jar
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in Clumps-3.1.2.jar
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy Decocraft-2.6.3_1.12.2.jar
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in Decocraft-2.6.3_1.12.2.jar
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy DynamicTrees-1.12.2-0.9.7.jar
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in DynamicTrees-1.12.2-0.9.7.jar
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy emoticons-0.4-1.12.2-dist.jar
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in emoticons-0.4-1.12.2-dist.jar
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy Explorercraft-2.2.9.jar
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in Explorercraft-2.2.9.jar
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy FastWorkbench-1.12.2-1.7.3.jar
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in FastWorkbench-1.12.2-1.7.3.jar
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy FutureVersionsV1.2.2.jar
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in FutureVersionsV1.2.2.jar
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy Hwyla-1.8.26-B41_1.12.2.jar
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in Hwyla-1.8.26-B41_1.12.2.jar
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy ido-1.12.2-1.1.0.jar
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in ido-1.12.2-1.1.0.jar
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy journeymap-1.12.2-5.5.8.jar
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in journeymap-1.12.2-5.5.8.jar
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy mclib-1.0.4-1.12.2.jar
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/WARN] [FML]: Found FMLCorePluginContainsFMLMod marker in mclib-1.0.4-1.12.2.jar. This is not recommended, @Mods should be in a separate jar from the coremod.
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Instantiating coremod class McLibCM
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/TRACE] [FML]: coremod named McLib core mod is loading
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: The coremod mchorse.mclib.core.McLibCM requested minecraft version 1.12.2 and minecraft is 1.12.2. It will be loaded.
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/WARN] [FML]: The coremod McLib core mod (mchorse.mclib.core.McLibCM) is not signed!
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Enqueued coremod McLib core mod
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy Rex\'s-Additional-Structures-1.12.x-(v.2.3.1).jar
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in Rex\'s-Additional-Structures-1.12.x-(v.2.3.1).jar
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy RoguelikeDungeons-1.12.2-1.8.0.jar
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in RoguelikeDungeons-1.12.2-1.8.0.jar
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy rustic-1.1.2.jar
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in rustic-1.1.2.jar
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy simpleharvest-1.08.jar
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in simpleharvest-1.08.jar
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy u_team_core-1.12.2-2.2.5.147.jar
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in u_team_core-1.12.2-2.2.5.147.jar
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy useful_backpacks-1.12.2-1.5.1.42.jar
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Not found coremod data in useful_backpacks-1.12.2-1.5.1.42.jar
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/INFO] [LaunchWrapper]: Loading tweak class name guichaguri.betterfps.tweaker.BetterFpsTweaker
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Injecting coremod FMLCorePlugin \{net.minecraftforge.fml.relauncher.FMLCorePlugin\} class transformers
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/TRACE] [FML]: Registering transformer net.minecraftforge.fml.common.asm.transformers.SideTransformer
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/TRACE] [FML]: Registering transformer net.minecraftforge.fml.common.asm.transformers.EventSubscriptionTransformer
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/TRACE] [FML]: Registering transformer net.minecraftforge.fml.common.asm.transformers.EventSubscriberTransformer
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/TRACE] [FML]: Registering transformer net.minecraftforge.fml.common.asm.transformers.SoundEngineFixTransformer
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Injection complete
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Running coremod plugin for FMLCorePlugin \{net.minecraftforge.fml.relauncher.FMLCorePlugin\}
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:23] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:23] [main/DEBUG] [FML]: Running coremod plugin FMLCorePlugin
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:26] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:26] [main/DEBUG] [FML]: Read 1145 binary patches
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:27] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:27] [main/DEBUG] [FML]: Loading deobfuscation resource /deobfuscation_data-1.12.2.lzma with 36083 records
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/ERROR] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/ERROR] [FML]: FML appears to be missing any signature data. This is not a good thing
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [FML]: Coremod plugin class FMLCorePlugin run successfully
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [FML]: Injecting coremod FMLForgePlugin \{net.minecraftforge.classloading.FMLForgePlugin\} class transformers
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [FML]: Injection complete
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [FML]: Running coremod plugin for FMLForgePlugin \{net.minecraftforge.classloading.FMLForgePlugin\}
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [FML]: Running coremod plugin FMLForgePlugin
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [FML]: Coremod plugin class FMLForgePlugin run successfully
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [FML]: Injecting coremod McLib core mod \{mchorse.mclib.core.McLibCM\} class transformers
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/TRACE] [FML]: Registering transformer mchorse.mclib.core.McLibCMClassTransformer
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [FML]: Injection complete
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [FML]: Running coremod plugin for McLib core mod \{mchorse.mclib.core.McLibCM\}
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [FML]: Running coremod plugin McLib core mod
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [FML]: Coremod plugin class McLibCM run successfully
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/INFO] [LaunchWrapper]: Calling tweak class guichaguri.betterfps.tweaker.BetterFpsTweaker
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [BetterFps]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [BetterFps]: Loading Mappings...
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [FML]: Loaded 215 rules from AccessTransformer config file forge_at.cfg
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [FML]: Loaded 8 rules from AccessTransformer mod jar file ./mods/FastWorkbench-1.12.2-1.7.3.jar!META-INF/fastbench_at.cfg
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [FML]: Loaded 1 rules from AccessTransformer mod jar file ./mods/journeymap-1.12.2-5.5.8.jar!META-INF/journeymap_at.cfg
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [FML]: Loaded 2 rules from AccessTransformer mod jar file ./mods/u_team_core-1.12.2-2.2.5.147.jar!META-INF/uteamcore_at.cfg
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [FML]: Loaded 8 rules from AccessTransformer mod jar file ./mods/Chisel-MC1.12.2-1.0.1.44.jar!META-INF/chisel_at.cfg
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [FML]: Loaded 1 rules from AccessTransformer mod jar file ./mods/Decocraft-2.6.3_1.12.2.jar!META-INF/decocraft_at.cfg
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:29] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:29] [main/DEBUG] [FML]: Validating minecraft
                                    [number:protected] => 165
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:30] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:30] [main/DEBUG] [FML]: Minecraft validated, launching...
                                    [number:protected] => 166
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:30] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:30] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 167
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:30] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:30] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:32] [main/INFO] [LaunchWrapper]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:32] [main/INFO] [LaunchWrapper]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:33] [main/INFO] [BetterFps]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:33] [main/INFO] [BetterFps]: Patching net.minecraft.block.Block... (aow)
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:36] [main/INFO] [BetterFps]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:36] [main/INFO] [BetterFps]: Patching math utils with "RIVENS_HALF" algorithm
                                    [number:protected] => 171
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:40] [main/INFO] [BetterFps]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:40] [main/INFO] [BetterFps]: Patching net.minecraft.tileentity.TileEntityBeacon... (avh)
                                    [number:protected] => 172
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:41] [main/INFO] [BetterFps]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:41] [main/INFO] [BetterFps]: Patching net.minecraft.block.BlockHopper... (arl)
                                    [number:protected] => 173
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:41] [main/INFO] [BetterFps]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:41] [main/INFO] [BetterFps]: Patching net.minecraft.tileentity.TileEntityHopper... (avw)
                                    [number:protected] => 174
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:49] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:49] [main/DEBUG] [FML]: Creating vanilla freeze snapshot
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:49] [main/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:49] [main/DEBUG] [FML]: Vanilla freeze snapshot created
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:49] [main/INFO] [BetterFps]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:49] [main/INFO] [BetterFps]: Patching net.minecraft.server.dedicated.DedicatedServer... (nz)
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:51] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:51] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:51] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:51] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2847 Initialized
                                    [number:protected] => 179
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [179] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:51] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:51] [Server thread/INFO] [FML]: Starts to replace vanilla recipe ingredients with ore ingredients.
                                    [number:protected] => 180
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [180] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:52] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:52] [Server thread/INFO] [FML]: Invalid recipe found with multiple oredict ingredients in the same ingredient...
                                    [number:protected] => 181
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [181] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:53] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:53] [Server thread/INFO] [FML]: Replaced 1227 ore ingredients
                                    [number:protected] => 182
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [182] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: File /aternos/server/config/injectedDependencies.json not found. No dependencies injected
                                    [number:protected] => 183
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [183] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Building injected Mod Containers [net.minecraftforge.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer, mchorse.mclib.core.McLibCMInfo]
                                    [number:protected] => 184
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [184] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Attempting to load mods contained in the minecraft jar file and associated classes
                                    [number:protected] => 185
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [185] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a minecraft related file at /aternos/server/forge.jar, examining for mod candidates
                                    [number:protected] => 186
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [186] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/TRACE] [FML]: Skipping known library file /aternos/server/./mods/BetterFps-1.4.8.jar
                                    [number:protected] => 187
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [187] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/TRACE] [FML]: Skipping known library file /aternos/server/./mods/mclib-1.0.4-1.12.2.jar
                                    [number:protected] => 188
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [188] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Minecraft jar mods loaded successfully
                                    [number:protected] => 189
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [189] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/INFO] [FML]: Searching /aternos/server/./mods for mods
                                    [number:protected] => 190
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [190] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding FutureVersionsV1.2.2.jar to the mod list
                                    [number:protected] => 191
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [191] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding [1.12.2] SecurityCraft v1.8.16.jar to the mod list
                                    [number:protected] => 192
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [192] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding emoticons-0.4-1.12.2-dist.jar to the mod list
                                    [number:protected] => 193
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [193] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding Rex\'s-Additional-Structures-1.12.x-(v.2.3.1).jar to the mod list
                                    [number:protected] => 194
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [194] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding Decocraft-2.6.3_1.12.2.jar to the mod list
                                    [number:protected] => 195
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [195] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding RoguelikeDungeons-1.12.2-1.8.0.jar to the mod list
                                    [number:protected] => 196
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [196] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding FastWorkbench-1.12.2-1.7.3.jar to the mod list
                                    [number:protected] => 197
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [197] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding rustic-1.1.2.jar to the mod list
                                    [number:protected] => 198
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [198] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding useful_backpacks-1.12.2-1.5.1.42.jar to the mod list
                                    [number:protected] => 199
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [199] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding Hwyla-1.8.26-B41_1.12.2.jar to the mod list
                                    [number:protected] => 200
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [200] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding ido-1.12.2-1.1.0.jar to the mod list
                                    [number:protected] => 201
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [201] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding CashCraft-1.12.2-4.0.0.1.jar to the mod list
                                    [number:protected] => 202
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [202] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding Clumps-3.1.2.jar to the mod list
                                    [number:protected] => 203
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [203] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding Chisel-MC1.12.2-1.0.1.44.jar to the mod list
                                    [number:protected] => 204
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [204] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding Explorercraft-2.2.9.jar to the mod list
                                    [number:protected] => 205
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [205] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding AppleSkin-mc1.12-1.0.9.jar to the mod list
                                    [number:protected] => 206
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [206] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding journeymap-1.12.2-5.5.8.jar to the mod list
                                    [number:protected] => 207
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [207] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding simpleharvest-1.08.jar to the mod list
                                    [number:protected] => 208
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [208] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding mclib-1.0.4-1.12.2.jar to the mod list
                                    [number:protected] => 209
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [209] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding u_team_core-1.12.2-2.2.5.147.jar to the mod list
                                    [number:protected] => 210
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [210] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding CarryOn MC1.12.2 v1.12.3.jar to the mod list
                                    [number:protected] => 211
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [211] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding BetterFps-1.4.8.jar to the mod list
                                    [number:protected] => 212
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [212] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Adding DynamicTrees-1.12.2-0.9.7.jar to the mod list
                                    [number:protected] => 213
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [213] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file [1.12.2] SecurityCraft v1.8.16.jar
                                    [number:protected] => 214
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [214] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file AppleSkin-mc1.12-1.0.9.jar
                                    [number:protected] => 215
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [215] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/TRACE] [FML]: Skipping already parsed coremod or tweaker BetterFps-1.4.8.jar
                                    [number:protected] => 216
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [216] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file CarryOn MC1.12.2 v1.12.3.jar
                                    [number:protected] => 217
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [217] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file CashCraft-1.12.2-4.0.0.1.jar
                                    [number:protected] => 218
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [218] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file Chisel-MC1.12.2-1.0.1.44.jar
                                    [number:protected] => 219
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [219] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file Clumps-3.1.2.jar
                                    [number:protected] => 220
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [220] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file Decocraft-2.6.3_1.12.2.jar
                                    [number:protected] => 221
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [221] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file DynamicTrees-1.12.2-0.9.7.jar
                                    [number:protected] => 222
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [222] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file emoticons-0.4-1.12.2-dist.jar
                                    [number:protected] => 223
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [223] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file Explorercraft-2.2.9.jar
                                    [number:protected] => 224
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [224] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file FastWorkbench-1.12.2-1.7.3.jar
                                    [number:protected] => 225
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [225] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file FutureVersionsV1.2.2.jar
                                    [number:protected] => 226
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [226] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file Hwyla-1.8.26-B41_1.12.2.jar
                                    [number:protected] => 227
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [227] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file ido-1.12.2-1.1.0.jar
                                    [number:protected] => 228
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [228] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file journeymap-1.12.2-5.5.8.jar
                                    [number:protected] => 229
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [229] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file mclib-1.0.4-1.12.2.jar
                                    [number:protected] => 230
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [230] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file Rex\'s-Additional-Structures-1.12.x-(v.2.3.1).jar
                                    [number:protected] => 231
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [231] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file RoguelikeDungeons-1.12.2-1.8.0.jar
                                    [number:protected] => 232
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [232] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file rustic-1.1.2.jar
                                    [number:protected] => 233
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [233] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file simpleharvest-1.08.jar
                                    [number:protected] => 234
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [234] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file u_team_core-1.12.2-2.2.5.147.jar
                                    [number:protected] => 235
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [235] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file useful_backpacks-1.12.2-1.5.1.42.jar
                                    [number:protected] => 236
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [236] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: Examining file forge.jar for potential mods
                                    [number:protected] => 237
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [237] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:54] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:54] [Server thread/DEBUG] [FML]: The mod container forge.jar appears to be missing an mcmod.info file
                                    [number:protected] => 238
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [238] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:56] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:56] [Server thread/DEBUG] [FML]: Examining file [1.12.2] SecurityCraft v1.8.16.jar for potential mods
                                    [number:protected] => 239
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [239] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:56] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:56] [Server thread/DEBUG] [FML]: The mod container [1.12.2] SecurityCraft v1.8.16.jar appears to be missing an mcmod.info file
                                    [number:protected] => 240
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [240] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:56] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:56] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (net.geforcemods.securitycraft.SecurityCraft) - loading
                                    [number:protected] => 241
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [241] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:56] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:56] [Server thread/TRACE] [FML]: Parsed dependency info for securitycraft: Requirements: [forge@[14.23.5.2826,)] After:[forge@[14.23.5.2826,)] Before:[]
                                    [number:protected] => 242
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [242] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:57] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:57] [Server thread/DEBUG] [FML]: Examining file AppleSkin-mc1.12-1.0.9.jar for potential mods
                                    [number:protected] => 243
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [243] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:57] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:57] [Server thread/TRACE] [FML]: Located mcmod.info file in file AppleSkin-mc1.12-1.0.9.jar
                                    [number:protected] => 244
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [244] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:57] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:57] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (squeek.appleskin.AppleSkin) - loading
                                    [number:protected] => 245
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [245] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:57] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:57] [Server thread/TRACE] [FML]: Parsed dependency info for appleskin: Requirements: [forge@[14.21.0,)] After:[jei@[4.6.0,), forge@[14.21.0,), applecore@[2.2.0,)] Before:[]
                                    [number:protected] => 246
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [246] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:57] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:57] [Server thread/DEBUG] [FML]: Examining file CarryOn MC1.12.2 v1.12.3.jar for potential mods
                                    [number:protected] => 247
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [247] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:57] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:57] [Server thread/TRACE] [FML]: Located mcmod.info file in file CarryOn MC1.12.2 v1.12.3.jar
                                    [number:protected] => 248
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [248] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:57] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:57] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (tschipp.carryon.CarryOn) - loading
                                    [number:protected] => 249
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [249] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:57] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:57] [Server thread/TRACE] [FML]: Parsed dependency info for carryon: Requirements: [forge@[13.20.1.2386,)] After:[forge@[13.20.1.2386,), gamestages] Before:[]
                                    [number:protected] => 250
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [250] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:57] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:57] [Server thread/DEBUG] [FML]: Examining file CashCraft-1.12.2-4.0.0.1.jar for potential mods
                                    [number:protected] => 251
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [251] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:57] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:57] [Server thread/TRACE] [FML]: Located mcmod.info file in file CashCraft-1.12.2-4.0.0.1.jar
                                    [number:protected] => 252
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [252] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:57] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:57] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (io.github.tehstoneman.cashcraft.CashCraft) - loading
                                    [number:protected] => 253
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [253] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:57] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:57] [Server thread/TRACE] [FML]: Parsed dependency info for cashcraft: Requirements: [] After:[] Before:[]
                                    [number:protected] => 254
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [254] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:57] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:57] [Server thread/DEBUG] [FML]: Examining file Chisel-MC1.12.2-1.0.1.44.jar for potential mods
                                    [number:protected] => 255
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [255] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:57] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:57] [Server thread/TRACE] [FML]: Located mcmod.info file in file Chisel-MC1.12.2-1.0.1.44.jar
                                    [number:protected] => 256
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [256] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:57] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:57] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (team.chisel.Chisel) - loading
                                    [number:protected] => 257
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [257] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:57] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:57] [Server thread/TRACE] [FML]: Parsed dependency info for chisel: Requirements: [forge@[14.23.5.2806,)] After:[forge@[14.23.5.2806,), jei@[4.12.0,5)] Before:[]
                                    [number:protected] => 258
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [258] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/DEBUG] [FML]: Examining file Clumps-3.1.2.jar for potential mods
                                    [number:protected] => 259
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [259] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/TRACE] [FML]: Located mcmod.info file in file Clumps-3.1.2.jar
                                    [number:protected] => 260
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [260] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (com.blamejared.clumps.Clumps) - loading
                                    [number:protected] => 261
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [261] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/TRACE] [FML]: Parsed dependency info for clumps: Requirements: [] After:[] Before:[]
                                    [number:protected] => 262
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [262] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/DEBUG] [FML]: Examining file Decocraft-2.6.3_1.12.2.jar for potential mods
                                    [number:protected] => 263
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [263] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/TRACE] [FML]: Located mcmod.info file in file Decocraft-2.6.3_1.12.2.jar
                                    [number:protected] => 264
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [264] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (com.mia.props.Props) - loading
                                    [number:protected] => 265
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [265] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/TRACE] [FML]: Parsed dependency info for props: Requirements: [] After:[ptrmodellib] Before:[]
                                    [number:protected] => 266
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [266] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/DEBUG] [FML]: Examining file DynamicTrees-1.12.2-0.9.7.jar for potential mods
                                    [number:protected] => 267
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [267] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/TRACE] [FML]: Located mcmod.info file in file DynamicTrees-1.12.2-0.9.7.jar
                                    [number:protected] => 268
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [268] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (com.ferreusveritas.dynamictrees.DynamicTrees) - loading
                                    [number:protected] => 269
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [269] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/TRACE] [FML]: Parsed dependency info for dynamictrees: Requirements: [forge@[14.23.5.2768,)] After:[forge@[14.23.5.2768,), reccomplex] Before:[rustic@(1.0.14,), dynamictreesbop@(1.4.1d,), dynamictreestc@(1.4.1d,), dynamictreestc@(1.4.1e,), dttraverse@(1.4,), dynamictreeshnc@(1.1,)]
                                    [number:protected] => 270
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [270] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/DEBUG] [FML]: Examining file emoticons-0.4-1.12.2-dist.jar for potential mods
                                    [number:protected] => 271
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [271] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/TRACE] [FML]: Located mcmod.info file in file emoticons-0.4-1.12.2-dist.jar
                                    [number:protected] => 272
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [272] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (mchorse.emoticons.c7944f36f5024d067) - loading
                                    [number:protected] => 273
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [273] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/TRACE] [FML]: Parsed dependency info for emoticons: Requirements: [mclib@[1.0.4,)] After:[mclib@[1.0.4,), metamorph] Before:[]
                                    [number:protected] => 274
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [274] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/DEBUG] [FML]: Examining file Explorercraft-2.2.9.jar for potential mods
                                    [number:protected] => 275
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [275] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/TRACE] [FML]: Located mcmod.info file in file Explorercraft-2.2.9.jar
                                    [number:protected] => 276
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [276] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (zathrox.explorercraft.ExplorerCraft) - loading
                                    [number:protected] => 277
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [277] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:58] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:58] [Server thread/TRACE] [FML]: Parsed dependency info for explorercraft: Requirements: [] After:[] Before:[]
                                    [number:protected] => 278
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [278] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:59] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:59] [Server thread/DEBUG] [FML]: Examining file FastWorkbench-1.12.2-1.7.3.jar for potential mods
                                    [number:protected] => 279
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [279] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:59] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:59] [Server thread/TRACE] [FML]: Located mcmod.info file in file FastWorkbench-1.12.2-1.7.3.jar
                                    [number:protected] => 280
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [280] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:59] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:59] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (shadows.fastbench.FastBench) - loading
                                    [number:protected] => 281
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [281] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:59] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:59] [Server thread/TRACE] [FML]: Parsed dependency info for fastbench: Requirements: [] After:[] Before:[]
                                    [number:protected] => 282
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [282] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:59] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:59] [Server thread/DEBUG] [FML]: Examining file FutureVersionsV1.2.2.jar for potential mods
                                    [number:protected] => 283
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [283] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:59] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:59] [Server thread/TRACE] [FML]: Located mcmod.info file in file FutureVersionsV1.2.2.jar
                                    [number:protected] => 284
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [284] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:59] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:59] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (net.mcreator.futureminecraf.futureminecraf) - loading
                                    [number:protected] => 285
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [285] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:59] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:59] [Server thread/TRACE] [FML]: Using mcmod dependency info for futureminecraf: [] [] []
                                    [number:protected] => 286
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [286] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:59] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:59] [Server thread/DEBUG] [FML]: Examining file Hwyla-1.8.26-B41_1.12.2.jar for potential mods
                                    [number:protected] => 287
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [287] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:59] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:59] [Server thread/TRACE] [FML]: Located mcmod.info file in file Hwyla-1.8.26-B41_1.12.2.jar
                                    [number:protected] => 288
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [288] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:59] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:59] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (mcp.mobius.waila.Waila) - loading
                                    [number:protected] => 289
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [289] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:59] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:59] [Server thread/TRACE] [FML]: Parsed dependency info for waila: Requirements: [] After:[] Before:[]
                                    [number:protected] => 290
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [290] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:59] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:59] [Server thread/DEBUG] [FML]: Examining file ido-1.12.2-1.1.0.jar for potential mods
                                    [number:protected] => 291
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [291] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:59] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:59] [Server thread/TRACE] [FML]: Located mcmod.info file in file ido-1.12.2-1.1.0.jar
                                    [number:protected] => 292
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [292] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:59] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:59] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (xyz.kaydax.ido.IdoMain) - loading
                                    [number:protected] => 293
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [293] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:59] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:59] [Server thread/TRACE] [FML]: Parsed dependency info for ido: Requirements: [forge@[14.23.5.2811,)] After:[] Before:[]
                                    [number:protected] => 294
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [294] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:59] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:59] [Server thread/DEBUG] [FML]: Examining file journeymap-1.12.2-5.5.8.jar for potential mods
                                    [number:protected] => 295
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [295] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:03:59] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:03:59] [Server thread/TRACE] [FML]: Located mcmod.info file in file journeymap-1.12.2-5.5.8.jar
                                    [number:protected] => 296
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [296] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:00] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:00] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (journeymap.common.Journeymap) - loading
                                    [number:protected] => 297
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [297] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:00] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:00] [Server thread/TRACE] [FML]: Using mcmod dependency info for journeymap: [] [Forge@[14.23.5.2768,)] []
                                    [number:protected] => 298
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [298] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:00] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:00] [Server thread/DEBUG] [FML]: Examining file mclib-1.0.4-1.12.2.jar for potential mods
                                    [number:protected] => 299
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [299] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:00] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:00] [Server thread/TRACE] [FML]: Located mcmod.info file in file mclib-1.0.4-1.12.2.jar
                                    [number:protected] => 300
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [300] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:00] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:00] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (mchorse.mclib.McLib) - loading
                                    [number:protected] => 301
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [301] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:00] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:00] [Server thread/TRACE] [FML]: Parsed dependency info for mclib: Requirements: [] After:[] Before:[]
                                    [number:protected] => 302
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [302] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:00] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:00] [Server thread/DEBUG] [FML]: Examining file Rex\'s-Additional-Structures-1.12.x-(v.2.3.1).jar for potential mods
                                    [number:protected] => 303
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [303] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:00] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:00] [Server thread/TRACE] [FML]: Located mcmod.info file in file Rex\'s-Additional-Structures-1.12.x-(v.2.3.1).jar
                                    [number:protected] => 304
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [304] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:00] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:00] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (xxrexraptorxx.additionalstructures.main.AdditionalStructures) - loading
                                    [number:protected] => 305
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [305] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:00] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:00] [Server thread/TRACE] [FML]: Parsed dependency info for additionalstructures: Requirements: [] After:[] Before:[]
                                    [number:protected] => 306
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [306] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:00] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:00] [Server thread/DEBUG] [FML]: Examining file RoguelikeDungeons-1.12.2-1.8.0.jar for potential mods
                                    [number:protected] => 307
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [307] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:00] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:00] [Server thread/TRACE] [FML]: Located mcmod.info file in file RoguelikeDungeons-1.12.2-1.8.0.jar
                                    [number:protected] => 308
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [308] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:00] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:00] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (greymerk.roguelike.Roguelike) - loading
                                    [number:protected] => 309
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [309] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:00] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:00] [Server thread/TRACE] [FML]: Parsed dependency info for roguelike: Requirements: [] After:[] Before:[]
                                    [number:protected] => 310
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [310] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Examining file rustic-1.1.2.jar for potential mods
                                    [number:protected] => 311
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [311] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/TRACE] [FML]: Located mcmod.info file in file rustic-1.1.2.jar
                                    [number:protected] => 312
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [312] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (rustic.core.Rustic) - loading
                                    [number:protected] => 313
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [313] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/TRACE] [FML]: Parsed dependency info for rustic: Requirements: [] After:[dynamictrees@[1.12.2-0.9.1e,), dynamictreesbop] Before:[dynamictreestc]
                                    [number:protected] => 314
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [314] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Examining file simpleharvest-1.08.jar for potential mods
                                    [number:protected] => 315
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [315] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/TRACE] [FML]: Located mcmod.info file in file simpleharvest-1.08.jar
                                    [number:protected] => 316
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [316] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (com.workshopcraft.SimpleHarvest.SimpleHarvest) - loading
                                    [number:protected] => 317
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [317] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/TRACE] [FML]: Parsed dependency info for simpleharvest: Requirements: [] After:[] Before:[]
                                    [number:protected] => 318
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [318] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Examining file u_team_core-1.12.2-2.2.5.147.jar for potential mods
                                    [number:protected] => 319
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [319] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/TRACE] [FML]: Located mcmod.info file in file u_team_core-1.12.2-2.2.5.147.jar
                                    [number:protected] => 320
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [320] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (info.u_team.u_team_core.UCoreMain) - loading
                                    [number:protected] => 321
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [321] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/TRACE] [FML]: Parsed dependency info for uteamcore: Requirements: [forge@[14.23.5.2768,)] After:[] Before:[]
                                    [number:protected] => 322
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [322] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Examining file useful_backpacks-1.12.2-1.5.1.42.jar for potential mods
                                    [number:protected] => 323
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [323] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/TRACE] [FML]: Located mcmod.info file in file useful_backpacks-1.12.2-1.5.1.42.jar
                                    [number:protected] => 324
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [324] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (info.u_team.useful_backpacks.UsefulBackpacksMod) - loading
                                    [number:protected] => 325
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [325] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/TRACE] [FML]: Parsed dependency info for usefulbackpacks: Requirements: [forge@[14.23.5.2768,), uteamcore@[**.**.**.**,)] After:[uteamcore@[**.**.**.**,)] Before:[]
                                    [number:protected] => 326
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [326] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/INFO] [FML]: Forge Mod Loader has identified 27 mods to load
                                    [number:protected] => 327
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [327] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Found API team.chisel.api (owned by chisel providing Chisel-API) embedded in chisel
                                    [number:protected] => 328
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [328] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Found API team.chisel.api.carving (owned by Chisel providing ChiselAPI|Carving) embedded in chisel
                                    [number:protected] => 329
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [329] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Found API journeymap.client.api (owned by journeymap providing journeymap|client-api) embedded in journeymap
                                    [number:protected] => 330
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [330] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Found API journeymap.client.api.util (owned by journeymap providing journeymap|client-api-util) embedded in journeymap
                                    [number:protected] => 331
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [331] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Found API net.geforcemods.securitycraft.api (owned by securitycraft providing SecurityCraftAPI) embedded in securitycraft
                                    [number:protected] => 332
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [332] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Found API mcp.mobius.waila.api (owned by Waila providing WailaAPI) embedded in waila
                                    [number:protected] => 333
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [333] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Found API betterwithmods.api (owned by betterwithmods providing BetterWithModsAPI) embedded in appleskin
                                    [number:protected] => 334
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [334] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Found API journeymap.client.api.event (owned by journeymap providing journeymap|client-api-event) embedded in journeymap
                                    [number:protected] => 335
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [335] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Found API journeymap.client.api.model (owned by journeymap providing journeymap|client-api-model) embedded in journeymap
                                    [number:protected] => 336
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [336] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Found API io.github.tehstoneman.cashcraft.api (owned by cashcraft providing CashCraftAPI) embedded in cashcraft
                                    [number:protected] => 337
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [337] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Found API journeymap.client.api.display (owned by journeymap providing journeymap|client-api-display) embedded in journeymap
                                    [number:protected] => 338
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [338] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API ChiselAPI|Carving: owner: Chisel, dependents: [chisel]
                                    [number:protected] => 339
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [339] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API CashCraftAPI: owner: cashcraft, dependents: []
                                    [number:protected] => 340
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [340] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API SecurityCraftAPI: owner: securitycraft, dependents: []
                                    [number:protected] => 341
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [341] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API journeymap|client-api-model: owner: journeymap, dependents: []
                                    [number:protected] => 342
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [342] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API journeymap|client-api: owner: journeymap, dependents: []
                                    [number:protected] => 343
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [343] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API journeymap|client-api-display: owner: journeymap, dependents: []
                                    [number:protected] => 344
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [344] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API BetterWithModsAPI: owner: betterwithmods, dependents: [appleskin]
                                    [number:protected] => 345
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [345] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API journeymap|client-api-event: owner: journeymap, dependents: []
                                    [number:protected] => 346
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [346] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API journeymap|client-api-util: owner: journeymap, dependents: []
                                    [number:protected] => 347
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [347] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API WailaAPI: owner: Waila, dependents: [waila]
                                    [number:protected] => 348
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [348] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:01] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API Chisel-API: owner: chisel, dependents: []
                                    [number:protected] => 349
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [349] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/TRACE] [FML]: Received a system property request \'\'
                                    [number:protected] => 350
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [350] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/TRACE] [FML]: System property request managing the state of 0 mods
                                    [number:protected] => 351
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [351] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: After merging, found state information for 0 mods
                                    [number:protected] => 352
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [352] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/WARN] [FML]: Missing English translation for FML: assets/fml/lang/en_us.lang
                                    [number:protected] => 353
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [353] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/WARN] [FML]: Mod mclib_core has been disabled through configuration
                                    [number:protected] => 354
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [354] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod securitycraft
                                    [number:protected] => 355
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [355] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod appleskin
                                    [number:protected] => 356
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [356] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/WARN] [FML]: Missing English translation for appleskin: assets/appleskin/lang/en_us.lang
                                    [number:protected] => 357
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [357] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod carryon
                                    [number:protected] => 358
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [358] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod cashcraft
                                    [number:protected] => 359
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [359] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod chisel
                                    [number:protected] => 360
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [360] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod clumps
                                    [number:protected] => 361
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [361] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/WARN] [FML]: Missing English translation for clumps: assets/clumps/lang/en_us.lang
                                    [number:protected] => 362
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [362] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod props
                                    [number:protected] => 363
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [363] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod dynamictrees
                                    [number:protected] => 364
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [364] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod emoticons
                                    [number:protected] => 365
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [365] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod explorercraft
                                    [number:protected] => 366
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [366] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod fastbench
                                    [number:protected] => 367
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [367] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/WARN] [FML]: Missing English translation for fastbench: assets/fastbench/lang/en_us.lang
                                    [number:protected] => 368
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [368] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod futureminecraf
                                    [number:protected] => 369
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [369] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod waila
                                    [number:protected] => 370
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [370] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod ido
                                    [number:protected] => 371
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [371] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/WARN] [FML]: Missing English translation for ido: assets/ido/lang/en_us.lang
                                    [number:protected] => 372
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [372] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod journeymap
                                    [number:protected] => 373
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [373] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod mclib
                                    [number:protected] => 374
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [374] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod additionalstructures
                                    [number:protected] => 375
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [375] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/WARN] [FML]: Missing English translation for additionalstructures: assets/additionalstructures/lang/en_us.lang
                                    [number:protected] => 376
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [376] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod roguelike
                                    [number:protected] => 377
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [377] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/WARN] [FML]: Missing English translation for roguelike: assets/roguelike/lang/en_us.lang
                                    [number:protected] => 378
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [378] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod rustic
                                    [number:protected] => 379
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [379] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod simpleharvest
                                    [number:protected] => 380
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [380] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/WARN] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/WARN] [FML]: Missing English translation for simpleharvest: assets/simpleharvest/lang/en_us.lang
                                    [number:protected] => 381
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [381] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod uteamcore
                                    [number:protected] => 382
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [382] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Enabling mod usefulbackpacks
                                    [number:protected] => 383
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [383] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/TRACE] [FML]: Verifying mod requirements are satisfied
                                    [number:protected] => 384
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [384] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/TRACE] [FML]: All mod requirements are satisfied
                                    [number:protected] => 385
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [385] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/TRACE] [FML]: Sorting mods into an ordered list
                                    [number:protected] => 386
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [386] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/TRACE] [FML]: Mod sorting completed successfully
                                    [number:protected] => 387
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [387] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Mod sorting data
                                    [number:protected] => 388
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [388] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: securitycraft(SecurityCraft:v1.8.16): [1.12.2] SecurityCraft v1.8.16.jar (required-after:forge@[14.23.5.2826,))
                                    [number:protected] => 389
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [389] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: BetterWithModsAPI(API: BetterWithModsAPI:Beta 0.6): AppleSkin-mc1.12-1.0.9.jar ()
                                    [number:protected] => 390
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [390] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: appleskin(AppleSkin:1.0.9): AppleSkin-mc1.12-1.0.9.jar (after:jei@[4.6.0,); required-after:forge@[14.21.0,); after:applecore@[2.2.0,))
                                    [number:protected] => 391
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [391] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: carryon(Carry On:1.12.3): CarryOn MC1.12.2 v1.12.3.jar (required-after:forge@[13.20.1.2386,);after:gamestages;)
                                    [number:protected] => 392
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [392] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: cashcraft(CashCraft:mc1.12.2-4.0.0.1): CashCraft-1.12.2-4.0.0.1.jar ()
                                    [number:protected] => 393
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [393] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: ChiselAPI|Carving(API: ChiselAPI|Carving:0.0.1): Chisel-MC1.12.2-1.0.1.44.jar ()
                                    [number:protected] => 394
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [394] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: chisel(Chisel:MC1.12.2-1.0.1.44): Chisel-MC1.12.2-1.0.1.44.jar (required-after:forge@[14.23.5.2806,);required-after-client:ctm;after:jei@[4.12.0,5))
                                    [number:protected] => 395
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [395] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: clumps(Clumps:3.1.2): Clumps-3.1.2.jar ()
                                    [number:protected] => 396
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [396] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: props(Decocraft:2.6.3): Decocraft-2.6.3_1.12.2.jar (required-after-client:ptrmodellib@[1.0.3,);after:ptrmodellib)
                                    [number:protected] => 397
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [397] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: dynamictrees(Dynamic Trees:1.12.2-0.9.7): DynamicTrees-1.12.2-0.9.7.jar (required-after:forge@[14.23.5.2768,);before:rustic@(1.0.14,);before:dynamictreesbop@(1.4.1d,);before:dynamictreestc@(1.4.1d,);before:dynamictreestc@(1.4.1e,);before:dttraverse@(1.4,);before:dynamictreeshnc@(1.1,);after:reccomplex)
                                    [number:protected] => 398
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [398] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: mclib(McLib:1.0.4): mclib-1.0.4-1.12.2.jar ()
                                    [number:protected] => 399
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [399] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: emoticons(Emoticons:0.4): emoticons-0.4-1.12.2-dist.jar (required-after:mclib@[1.0.4,);after:metamorph)
                                    [number:protected] => 400
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [400] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: explorercraft(ExplorerCraft:2.2.8): Explorercraft-2.2.9.jar ()
                                    [number:protected] => 401
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [401] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: fastbench(FastWorkbench:1.7.3): FastWorkbench-1.12.2-1.7.3.jar ()
                                    [number:protected] => 402
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [402] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: futureminecraf(Future Versions:1.2.2): FutureVersionsV1.2.2.jar ()
                                    [number:protected] => 403
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [403] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: WailaAPI(API: WailaAPI:1.3): Hwyla-1.8.26-B41_1.12.2.jar ()
                                    [number:protected] => 404
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [404] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: waila(Waila:1.8.26): Hwyla-1.8.26-B41_1.12.2.jar ()
                                    [number:protected] => 405
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [405] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: ido(Ido - 1.12 movement enhancement:1.0.6): ido-1.12.2-1.1.0.jar (required:forge@[14.23.5.2811,);)
                                    [number:protected] => 406
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [406] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: journeymap(JourneyMap:1.12.2-5.5.8): journeymap-1.12.2-5.5.8.jar ()
                                    [number:protected] => 407
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [407] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: additionalstructures(Rex\'s Additional Structures:2.3.1): Rex\'s-Additional-Structures-1.12.x-(v.2.3.1).jar ()
                                    [number:protected] => 408
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [408] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: roguelike(Roguelike Dungeons:1.8.0): RoguelikeDungeons-1.12.2-1.8.0.jar ()
                                    [number:protected] => 409
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [409] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: rustic(Rustic:1.1.2): rustic-1.1.2.jar (after:dynamictrees@[1.12.2-0.9.1e,);after:dynamictreesbop;before:dynamictreestc)
                                    [number:protected] => 410
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [410] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: simpleharvest(Simple Harvest:1.08): simpleharvest-1.08.jar ()
                                    [number:protected] => 411
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [411] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: uteamcore(U Team Core:**.**.**.**): u_team_core-1.12.2-2.2.5.147.jar (required:forge@[14.23.5.2768,))
                                    [number:protected] => 412
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [412] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: usefulbackpacks(Useful Backpacks:**.**.**.**): useful_backpacks-1.12.2-1.5.1.42.jar (required:forge@[14.23.5.2768,);required-after:uteamcore@[**.**.**.**,);)
                                    [number:protected] => 413
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [413] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: CashCraftAPI(API: CashCraftAPI:1.0): CashCraft-1.12.2-4.0.0.1.jar ()
                                    [number:protected] => 414
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [414] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: SecurityCraftAPI(API: SecurityCraftAPI:1.2.3): [1.12.2] SecurityCraft v1.8.16.jar ()
                                    [number:protected] => 415
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [415] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: journeymap|client-api-model(API: journeymap|client-api-model:1.4): journeymap-1.12.2-5.5.8.jar ()
                                    [number:protected] => 416
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [416] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: journeymap|client-api(API: journeymap|client-api:1.4): journeymap-1.12.2-5.5.8.jar ()
                                    [number:protected] => 417
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [417] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: journeymap|client-api-display(API: journeymap|client-api-display:1.4): journeymap-1.12.2-5.5.8.jar ()
                                    [number:protected] => 418
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [418] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: journeymap|client-api-event(API: journeymap|client-api-event:1.4): journeymap-1.12.2-5.5.8.jar ()
                                    [number:protected] => 419
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [419] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: journeymap|client-api-util(API: journeymap|client-api-util:1.4): journeymap-1.12.2-5.5.8.jar ()
                                    [number:protected] => 420
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [420] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:02] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:02] [Server thread/DEBUG] [FML]: Chisel-API(API: Chisel-API:0.0.1): Chisel-MC1.12.2-1.0.1.44.jar ()
                                    [number:protected] => 421
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [421] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:03] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:03] [Server thread/DEBUG] [FML]: Loading @Config anotation data
                                    [number:protected] => 422
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [422] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:03] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:03] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod minecraft
                                    [number:protected] => 423
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [423] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:03] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:03] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod minecraft
                                    [number:protected] => 424
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [424] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:03] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:03] [Server thread/DEBUG] [FML]: Bar Step: Construction - Minecraft took 0.021s
                                    [number:protected] => 425
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [425] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:03] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:03] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod mcp
                                    [number:protected] => 426
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [426] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:03] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:03] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod mcp
                                    [number:protected] => 427
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [427] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:03] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:03] [Server thread/DEBUG] [FML]: Bar Step: Construction - Minecraft Coder Pack took 0.005s
                                    [number:protected] => 428
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [428] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:03] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:03] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod FML
                                    [number:protected] => 429
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [429] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:04] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:04] [Server thread/TRACE] [FML]: Mod FML is using network checker : Invoking method checkModLists
                                    [number:protected] => 430
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [430] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:04] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:04] [Server thread/TRACE] [FML]: Testing mod FML to verify it accepts its own version in a remote connection
                                    [number:protected] => 431
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [431] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:04] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:04] [Server thread/TRACE] [FML]: The mod FML accepts its own version (**.**.**.**)
                                    [number:protected] => 432
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [432] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:04] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:04] [Server thread/INFO] [FML]: Attempting connection with missing mods [minecraft, mcp, FML, forge, securitycraft, appleskin, carryon, cashcraft, chisel, clumps, props, dynamictrees, emoticons, explorercraft, fastbench, futureminecraf, waila, ido, journeymap, mclib, additionalstructures, roguelike, rustic, simpleharvest, uteamcore, usefulbackpacks] at CLIENT
                                    [number:protected] => 433
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [433] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:04] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:04] [Server thread/INFO] [FML]: Attempting connection with missing mods [minecraft, mcp, FML, forge, securitycraft, appleskin, carryon, cashcraft, chisel, clumps, props, dynamictrees, emoticons, explorercraft, fastbench, futureminecraf, waila, ido, journeymap, mclib, additionalstructures, roguelike, rustic, simpleharvest, uteamcore, usefulbackpacks] at SERVER
                                    [number:protected] => 434
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [434] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:09] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:09] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod FML
                                    [number:protected] => 435
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [435] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:09] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:09] [Server thread/DEBUG] [FML]: Bar Step: Construction - Forge Mod Loader took 6.388s
                                    [number:protected] => 436
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [436] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:09] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:09] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod forge
                                    [number:protected] => 437
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [437] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: Loading Vanilla annotations: sun.net.www.protocol.jar.JarURLConnection$JarURLInputStream@ff186b7
                                    [number:protected] => 438
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [438] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: Preloading CrashReport Classes
                                    [number:protected] => 439
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [439] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$10
                                    [number:protected] => 440
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [440] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$11
                                    [number:protected] => 441
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [441] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$12
                                    [number:protected] => 442
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [442] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$13
                                    [number:protected] => 443
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [443] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$14
                                    [number:protected] => 444
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [444] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$2
                                    [number:protected] => 445
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [445] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$3
                                    [number:protected] => 446
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [446] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$4
                                    [number:protected] => 447
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [447] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$5
                                    [number:protected] => 448
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [448] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$6
                                    [number:protected] => 449
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [449] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$7
                                    [number:protected] => 450
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [450] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$8
                                    [number:protected] => 451
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [451] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$9
                                    [number:protected] => 452
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [452] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/multiplayer/WorldClient$1
                                    [number:protected] => 453
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [453] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/multiplayer/WorldClient$2
                                    [number:protected] => 454
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [454] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/multiplayer/WorldClient$3
                                    [number:protected] => 455
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [455] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/multiplayer/WorldClient$4
                                    [number:protected] => 456
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [456] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/particle/ParticleManager$1
                                    [number:protected] => 457
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [457] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/particle/ParticleManager$2
                                    [number:protected] => 458
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [458] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/particle/ParticleManager$3
                                    [number:protected] => 459
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [459] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/particle/ParticleManager$4
                                    [number:protected] => 460
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [460] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/EntityRenderer$2
                                    [number:protected] => 461
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [461] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/EntityRenderer$3
                                    [number:protected] => 462
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [462] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/EntityRenderer$4
                                    [number:protected] => 463
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [463] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/RenderGlobal$1
                                    [number:protected] => 464
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [464] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/RenderItem$1
                                    [number:protected] => 465
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [465] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/RenderItem$2
                                    [number:protected] => 466
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [466] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/RenderItem$3
                                    [number:protected] => 467
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [467] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/RenderItem$4
                                    [number:protected] => 468
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [468] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/texture/TextureAtlasSprite$1
                                    [number:protected] => 469
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [469] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/texture/TextureManager$1
                                    [number:protected] => 470
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [470] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/texture/TextureMap$1
                                    [number:protected] => 471
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [471] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/texture/TextureMap$2
                                    [number:protected] => 472
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [472] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/texture/TextureMap$3
                                    [number:protected] => 473
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [473] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReport$1
                                    [number:protected] => 474
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [474] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReport$2
                                    [number:protected] => 475
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [475] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReport$3
                                    [number:protected] => 476
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [476] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReport$4
                                    [number:protected] => 477
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [477] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReport$5
                                    [number:protected] => 478
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [478] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReport$6
                                    [number:protected] => 479
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [479] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReport$7
                                    [number:protected] => 480
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [480] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReportCategory$1
                                    [number:protected] => 481
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [481] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReportCategory$2
                                    [number:protected] => 482
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [482] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReportCategory$3
                                    [number:protected] => 483
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [483] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReportCategory$4
                                    [number:protected] => 484
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [484] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReportCategory$5
                                    [number:protected] => 485
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [485] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/entity/Entity$2
                                    [number:protected] => 486
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [486] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/entity/Entity$3
                                    [number:protected] => 487
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [487] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/entity/Entity$4
                                    [number:protected] => 488
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [488] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/entity/Entity$5
                                    [number:protected] => 489
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [489] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/entity/EntityTracker$1
                                    [number:protected] => 490
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [490] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/entity/player/InventoryPlayer$1
                                    [number:protected] => 491
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [491] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/nbt/NBTTagCompound$1
                                    [number:protected] => 492
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [492] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/nbt/NBTTagCompound$2
                                    [number:protected] => 493
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [493] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/network/NetHandlerPlayServer$3
                                    [number:protected] => 494
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [494] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/network/NetworkSystem$6
                                    [number:protected] => 495
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [495] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/server/MinecraftServer$2
                                    [number:protected] => 496
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [496] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/server/MinecraftServer$3
                                    [number:protected] => 497
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [497] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/server/dedicated/DedicatedServer$3
                                    [number:protected] => 498
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [498] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/server/dedicated/DedicatedServer$4
                                    [number:protected] => 499
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [499] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/server/integrated/IntegratedServer$1
                                    [number:protected] => 500
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [500] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/server/integrated/IntegratedServer$2
                                    [number:protected] => 501
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [501] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/tileentity/CommandBlockBaseLogic$1
                                    [number:protected] => 502
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [502] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/tileentity/CommandBlockBaseLogic$2
                                    [number:protected] => 503
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [503] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/tileentity/TileEntity$1
                                    [number:protected] => 504
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [504] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/tileentity/TileEntity$2
                                    [number:protected] => 505
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [505] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/tileentity/TileEntity$3
                                    [number:protected] => 506
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [506] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/World$1
                                    [number:protected] => 507
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [507] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/World$2
                                    [number:protected] => 508
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [508] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/World$3
                                    [number:protected] => 509
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [509] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/World$4
                                    [number:protected] => 510
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [510] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/World$5
                                    [number:protected] => 511
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [511] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/chunk/Chunk$1
                                    [number:protected] => 512
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [512] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/gen/structure/MapGenStructure$1
                                    [number:protected] => 513
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [513] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/gen/structure/MapGenStructure$2
                                    [number:protected] => 514
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [514] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/gen/structure/MapGenStructure$3
                                    [number:protected] => 515
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [515] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/storage/WorldInfo$10
                                    [number:protected] => 516
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [516] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/storage/WorldInfo$2
                                    [number:protected] => 517
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [517] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/storage/WorldInfo$3
                                    [number:protected] => 518
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [518] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/storage/WorldInfo$4
                                    [number:protected] => 519
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [519] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/storage/WorldInfo$5
                                    [number:protected] => 520
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [520] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/storage/WorldInfo$6
                                    [number:protected] => 521
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [521] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/storage/WorldInfo$7
                                    [number:protected] => 522
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [522] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/storage/WorldInfo$8
                                    [number:protected] => 523
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [523] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/storage/WorldInfo$9
                                    [number:protected] => 524
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [524] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/common/util/TextTable
                                    [number:protected] => 525
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [525] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/common/util/TextTable$Alignment
                                    [number:protected] => 526
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [526] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/common/util/TextTable$Column
                                    [number:protected] => 527
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [527] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/common/util/TextTable$Row
                                    [number:protected] => 528
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [528] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/fml/client/SplashProgress$1
                                    [number:protected] => 529
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [529] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/fml/client/SplashProgress$1
                                    [number:protected] => 530
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [530] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/fml/common/FMLCommonHandler$1
                                    [number:protected] => 531
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [531] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/fml/common/FMLCommonHandler$1
                                    [number:protected] => 532
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [532] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/fml/common/ICrashCallable
                                    [number:protected] => 533
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [533] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/fml/common/Loader$1
                                    [number:protected] => 534
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [534] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/fml/common/Loader$1
                                    [number:protected] => 535
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [535] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/TRACE] [FML]: Mod forge is using network checker : No network checking performed
                                    [number:protected] => 536
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [536] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/TRACE] [FML]: Testing mod forge to verify it accepts its own version in a remote connection
                                    [number:protected] => 537
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [537] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/TRACE] [FML]: The mod forge accepts its own version (14.23.5.2847)
                                    [number:protected] => 538
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [538] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [FML]: Attempting to inject @Config classes into forge for type INSTANCE
                                    [number:protected] => 539
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [539] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod forge
                                    [number:protected] => 540
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [540] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [FML]: Bar Step: Construction - Minecraft Forge took 0.685s
                                    [number:protected] => 541
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [541] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod securitycraft
                                    [number:protected] => 542
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [542] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/TRACE] [FML]: Mod securitycraft is using network checker : Accepting version v1.8.16
                                    [number:protected] => 543
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [543] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/TRACE] [FML]: Testing mod securitycraft to verify it accepts its own version in a remote connection
                                    [number:protected] => 544
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [544] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/TRACE] [FML]: The mod securitycraft accepts its own version (v1.8.16)
                                    [number:protected] => 545
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [545] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [FML]: Attempting to inject @SidedProxy classes into securitycraft
                                    [number:protected] => 546
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [546] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [FML]: Attempting to inject @EventBusSubscriber classes into the eventbus for securitycraft
                                    [number:protected] => 547
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [547] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:10] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:10] [Server thread/DEBUG] [FML]: Registering @EventBusSubscriber for net.geforcemods.securitycraft.RegistrationHandler for mod securitycraft
                                    [number:protected] => 548
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [548] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Injected @EventBusSubscriber class net.geforcemods.securitycraft.RegistrationHandler
                                    [number:protected] => 549
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [549] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @Config classes into securitycraft for type INSTANCE
                                    [number:protected] => 550
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [550] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod securitycraft
                                    [number:protected] => 551
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [551] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Bar Step: Construction - SecurityCraft took 0.762s
                                    [number:protected] => 552
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [552] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod appleskin
                                    [number:protected] => 553
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [553] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/TRACE] [FML]: Mod appleskin is using network checker : No network checking performed
                                    [number:protected] => 554
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [554] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/TRACE] [FML]: Testing mod appleskin to verify it accepts its own version in a remote connection
                                    [number:protected] => 555
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [555] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/TRACE] [FML]: The mod appleskin accepts its own version (1.0.9)
                                    [number:protected] => 556
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [556] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @SidedProxy classes into appleskin
                                    [number:protected] => 557
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [557] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @EventBusSubscriber classes into the eventbus for appleskin
                                    [number:protected] => 558
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [558] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @Config classes into appleskin for type INSTANCE
                                    [number:protected] => 559
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [559] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod appleskin
                                    [number:protected] => 560
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [560] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Bar Step: Construction - AppleSkin took 0.016s
                                    [number:protected] => 561
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [561] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod carryon
                                    [number:protected] => 562
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [562] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/TRACE] [FML]: Mod carryon is using network checker : Accepting version 1.12.3
                                    [number:protected] => 563
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [563] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/TRACE] [FML]: Testing mod carryon to verify it accepts its own version in a remote connection
                                    [number:protected] => 564
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [564] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/TRACE] [FML]: The mod carryon accepts its own version (1.12.3)
                                    [number:protected] => 565
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [565] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @SidedProxy classes into carryon
                                    [number:protected] => 566
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [566] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @EventBusSubscriber classes into the eventbus for carryon
                                    [number:protected] => 567
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [567] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Registering @EventBusSubscriber for tschipp.carryon.common.config.CarryOnConfig$EventHandler for mod carryon
                                    [number:protected] => 568
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [568] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Injected @EventBusSubscriber class tschipp.carryon.common.config.CarryOnConfig$EventHandler
                                    [number:protected] => 569
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [569] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Registering @EventBusSubscriber for tschipp.carryon.CarryOn for mod carryon
                                    [number:protected] => 570
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [570] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Injected @EventBusSubscriber class tschipp.carryon.CarryOn
                                    [number:protected] => 571
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [571] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @Config classes into carryon for type INSTANCE
                                    [number:protected] => 572
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [572] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod carryon
                                    [number:protected] => 573
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [573] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Bar Step: Construction - Carry On took 0.436s
                                    [number:protected] => 574
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [574] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod cashcraft
                                    [number:protected] => 575
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [575] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/TRACE] [FML]: Mod cashcraft is using network checker : Accepting version mc1.12.2-4.0.0.1
                                    [number:protected] => 576
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [576] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/TRACE] [FML]: Testing mod cashcraft to verify it accepts its own version in a remote connection
                                    [number:protected] => 577
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [577] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/TRACE] [FML]: The mod cashcraft accepts its own version (mc1.12.2-4.0.0.1)
                                    [number:protected] => 578
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [578] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @SidedProxy classes into cashcraft
                                    [number:protected] => 579
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [579] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @EventBusSubscriber classes into the eventbus for cashcraft
                                    [number:protected] => 580
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [580] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @Config classes into cashcraft for type INSTANCE
                                    [number:protected] => 581
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [581] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod cashcraft
                                    [number:protected] => 582
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [582] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/DEBUG] [FML]: Bar Step: Construction - CashCraft took 0.105s
                                    [number:protected] => 583
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [583] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:11] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:11] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod chisel
                                    [number:protected] => 584
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [584] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:12] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:12] [Server thread/TRACE] [FML]: Mod chisel is using network checker : Accepting version MC1.12.2-1.0.1.44
                                    [number:protected] => 585
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [585] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:12] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:12] [Server thread/TRACE] [FML]: Testing mod chisel to verify it accepts its own version in a remote connection
                                    [number:protected] => 586
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [586] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:12] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:12] [Server thread/TRACE] [FML]: The mod chisel accepts its own version (MC1.12.2-1.0.1.44)
                                    [number:protected] => 587
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [587] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:12] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:12] [Server thread/DEBUG] [FML]: Attempting to inject @SidedProxy classes into chisel
                                    [number:protected] => 588
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [588] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:12] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:12] [Server thread/DEBUG] [FML]: Attempting to inject @EventBusSubscriber classes into the eventbus for chisel
                                    [number:protected] => 589
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [589] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:12] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:12] [Server thread/DEBUG] [FML]: Registering @EventBusSubscriber for team.chisel.common.block.BreakSpeedHandler for mod chisel
                                    [number:protected] => 590
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [590] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:12] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:12] [Server thread/DEBUG] [FML]: Injected @EventBusSubscriber class team.chisel.common.block.BreakSpeedHandler
                                    [number:protected] => 591
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [591] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:12] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:12] [Server thread/DEBUG] [FML]: Registering @EventBusSubscriber for team.chisel.Features for mod chisel
                                    [number:protected] => 592
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [592] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Injected @EventBusSubscriber class team.chisel.Features
                                    [number:protected] => 593
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [593] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Attempting to inject @Config classes into chisel for type INSTANCE
                                    [number:protected] => 594
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [594] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod chisel
                                    [number:protected] => 595
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [595] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: Construction - Chisel took 1.519s
                                    [number:protected] => 596
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [596] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod clumps
                                    [number:protected] => 597
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [597] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Mod clumps is using network checker : Accepting version 3.1.2
                                    [number:protected] => 598
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [598] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Testing mod clumps to verify it accepts its own version in a remote connection
                                    [number:protected] => 599
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [599] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: The mod clumps accepts its own version (3.1.2)
                                    [number:protected] => 600
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [600] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Attempting to inject @SidedProxy classes into clumps
                                    [number:protected] => 601
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [601] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Attempting to inject @EventBusSubscriber classes into the eventbus for clumps
                                    [number:protected] => 602
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [602] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Attempting to inject @Config classes into clumps for type INSTANCE
                                    [number:protected] => 603
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [603] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod clumps
                                    [number:protected] => 604
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [604] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: Construction - Clumps took 0.041s
                                    [number:protected] => 605
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [605] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod props
                                    [number:protected] => 606
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [606] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: Encountered an unexpected exception
                                    [number:protected] => 607
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.NoClassDefFoundError: com/mia/craftstudio/IPackReaderCallback
                                    [number:protected] => 608
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Class.forName0(Native Method) ~[?:1.8.0_232]
                                    [number:protected] => 609
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Class.forName(Class.java:348) ~[?:1.8.0_232]
                                    [number:protected] => 610
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.common.FMLModContainer.constructMod(FMLModContainer.java:539) ~[forge.jar:?]
                                    [number:protected] => 611
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_232]
                                    [number:protected] => 612
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_232]
                                    [number:protected] => 613
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_232]
                                    [number:protected] => 614
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_232]
                                    [number:protected] => 615
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.Subscriber.invokeSubscriberMethod(Subscriber.java:91) ~[minecraft_server.1.12.2.jar:?]
                                    [number:protected] => 616
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.Subscriber$SynchronizedSubscriber.invokeSubscriberMethod(Subscriber.java:150) ~[minecraft_server.1.12.2.jar:?]
                                    [number:protected] => 617
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.Subscriber$1.run(Subscriber.java:76) ~[minecraft_server.1.12.2.jar:?]
                                    [number:protected] => 618
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.util.concurrent.MoreExecutors$DirectExecutor.execute(MoreExecutors.java:399) ~[minecraft_server.1.12.2.jar:?]
                                    [number:protected] => 619
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.Subscriber.dispatchEvent(Subscriber.java:71) ~[minecraft_server.1.12.2.jar:?]
                                    [number:protected] => 620
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.Dispatcher$PerThreadQueuedDispatcher.dispatch(Dispatcher.java:116) ~[minecraft_server.1.12.2.jar:?]
                                    [number:protected] => 621
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.EventBus.post(EventBus.java:217) ~[minecraft_server.1.12.2.jar:?]
                                    [number:protected] => 622
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.common.LoadController.sendEventToModContainer(LoadController.java:219) ~[forge.jar:?]
                                    [number:protected] => 623
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.common.LoadController.propogateStateMessage(LoadController.java:197) ~[forge.jar:?]
                                    [number:protected] => 624
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_232]
                                    [number:protected] => 625
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_232]
                                    [number:protected] => 626
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_232]
                                    [number:protected] => 627
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_232]
                                    [number:protected] => 628
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.Subscriber.invokeSubscriberMethod(Subscriber.java:91) ~[minecraft_server.1.12.2.jar:?]
                                    [number:protected] => 629
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.Subscriber$SynchronizedSubscriber.invokeSubscriberMethod(Subscriber.java:150) ~[minecraft_server.1.12.2.jar:?]
                                    [number:protected] => 630
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.Subscriber$1.run(Subscriber.java:76) ~[minecraft_server.1.12.2.jar:?]
                                    [number:protected] => 631
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.util.concurrent.MoreExecutors$DirectExecutor.execute(MoreExecutors.java:399) ~[minecraft_server.1.12.2.jar:?]
                                    [number:protected] => 632
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.Subscriber.dispatchEvent(Subscriber.java:71) ~[minecraft_server.1.12.2.jar:?]
                                    [number:protected] => 633
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.Dispatcher$PerThreadQueuedDispatcher.dispatch(Dispatcher.java:116) ~[minecraft_server.1.12.2.jar:?]
                                    [number:protected] => 634
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.eventbus.EventBus.post(EventBus.java:217) ~[minecraft_server.1.12.2.jar:?]
                                    [number:protected] => 635
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.common.LoadController.distributeStateMessage(LoadController.java:136) ~[LoadController.class:?]
                                    [number:protected] => 636
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.common.Loader.loadMods(Loader.java:595) ~[Loader.class:?]
                                    [number:protected] => 637
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.server.FMLServerHandler.beginServerLoading(FMLServerHandler.java:98) ~[FMLServerHandler.class:?]
                                    [number:protected] => 638
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.fml.common.FMLCommonHandler.onServerStart(FMLCommonHandler.java:333) ~[FMLCommonHandler.class:?]
                                    [number:protected] => 639
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:125) ~[nz.class:?]
                                    [number:protected] => 640
                                )

                            [34] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:486) [MinecraftServer.class:?]
                                    [number:protected] => 641
                                )

                            [35] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_232]
                                    [number:protected] => 642
                                )

                            [36] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.ClassNotFoundException: com.mia.craftstudio.IPackReaderCallback
                                    [number:protected] => 643
                                )

                            [37] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.launchwrapper.LaunchClassLoader.findClass(LaunchClassLoader.java:191) ~[launchwrapper-1.12.jar:?]
                                    [number:protected] => 644
                                )

                            [38] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:418) ~[?:1.8.0_232]
                                    [number:protected] => 645
                                )

                            [39] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:351) ~[?:1.8.0_232]
                                    [number:protected] => 646
                                )

                            [40] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ... 34 more
                                    [number:protected] => 647
                                )

                            [41] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.NullPointerException
                                    [number:protected] => 648
                                )

                            [42] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.launchwrapper.LaunchClassLoader.findClass(LaunchClassLoader.java:182) ~[launchwrapper-1.12.jar:?]
                                    [number:protected] => 649
                                )

                            [43] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:418) ~[?:1.8.0_232]
                                    [number:protected] => 650
                                )

                            [44] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:351) ~[?:1.8.0_232]
                                    [number:protected] => 651
                                )

                            [45] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ... 34 more
                                    [number:protected] => 652
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [607] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2020-02-03_17.04.13-server.txt
                                    [number:protected] => 653
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [608] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
                                    [number:protected] => 654
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [609] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving worlds
                                    [number:protected] => 655
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [610] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod minecraft
                                    [number:protected] => 656
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [611] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod minecraft
                                    [number:protected] => 657
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [612] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Minecraft took 0.001s
                                    [number:protected] => 658
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [613] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod mcp
                                    [number:protected] => 659
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [614] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod mcp
                                    [number:protected] => 660
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [615] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Minecraft Coder Pack took 0.008s
                                    [number:protected] => 661
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [616] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod FML
                                    [number:protected] => 662
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [617] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod FML
                                    [number:protected] => 663
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [618] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Forge Mod Loader took 0.003s
                                    [number:protected] => 664
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [619] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod forge
                                    [number:protected] => 665
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [620] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod forge
                                    [number:protected] => 666
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [621] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Minecraft Forge took 0.001s
                                    [number:protected] => 667
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [622] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod securitycraft
                                    [number:protected] => 668
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [623] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod securitycraft
                                    [number:protected] => 669
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [624] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - SecurityCraft took 0.003s
                                    [number:protected] => 670
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [625] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod appleskin
                                    [number:protected] => 671
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [626] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod appleskin
                                    [number:protected] => 672
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [627] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - AppleSkin took 0.002s
                                    [number:protected] => 673
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [628] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod carryon
                                    [number:protected] => 674
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [629] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod carryon
                                    [number:protected] => 675
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [630] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Carry On took 0.002s
                                    [number:protected] => 676
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [631] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod cashcraft
                                    [number:protected] => 677
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [632] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod cashcraft
                                    [number:protected] => 678
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [633] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - CashCraft took 0.001s
                                    [number:protected] => 679
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [634] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod chisel
                                    [number:protected] => 680
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [635] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod chisel
                                    [number:protected] => 681
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [636] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Chisel took 0.049s
                                    [number:protected] => 682
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [637] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod clumps
                                    [number:protected] => 683
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [638] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod clumps
                                    [number:protected] => 684
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [639] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Clumps took 0.000s
                                    [number:protected] => 685
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [640] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod props
                                    [number:protected] => 686
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [641] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod props
                                    [number:protected] => 687
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [642] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Decocraft took 0.001s
                                    [number:protected] => 688
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [643] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod dynamictrees
                                    [number:protected] => 689
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [644] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod dynamictrees
                                    [number:protected] => 690
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [645] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Dynamic Trees took 0.001s
                                    [number:protected] => 691
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [646] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod mclib
                                    [number:protected] => 692
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [647] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod mclib
                                    [number:protected] => 693
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [648] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - McLib took 0.000s
                                    [number:protected] => 694
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [649] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod emoticons
                                    [number:protected] => 695
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [650] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod emoticons
                                    [number:protected] => 696
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [651] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Emoticons took 0.000s
                                    [number:protected] => 697
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [652] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod explorercraft
                                    [number:protected] => 698
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [653] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod explorercraft
                                    [number:protected] => 699
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [654] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - ExplorerCraft took 0.001s
                                    [number:protected] => 700
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [655] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod fastbench
                                    [number:protected] => 701
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [656] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod fastbench
                                    [number:protected] => 702
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [657] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - FastWorkbench took 0.000s
                                    [number:protected] => 703
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [658] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod futureminecraf
                                    [number:protected] => 704
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [659] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod futureminecraf
                                    [number:protected] => 705
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [660] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Future Versions took 0.000s
                                    [number:protected] => 706
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [661] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod waila
                                    [number:protected] => 707
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [662] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod waila
                                    [number:protected] => 708
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [663] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Waila took 0.000s
                                    [number:protected] => 709
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [664] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod ido
                                    [number:protected] => 710
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [665] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod ido
                                    [number:protected] => 711
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [666] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Ido - 1.12 movement enhancement took 0.000s
                                    [number:protected] => 712
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [667] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod journeymap
                                    [number:protected] => 713
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [668] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod journeymap
                                    [number:protected] => 714
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [669] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - JourneyMap took 0.000s
                                    [number:protected] => 715
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [670] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod additionalstructures
                                    [number:protected] => 716
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [671] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod additionalstructures
                                    [number:protected] => 717
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [672] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Rex\'s Additional Structures took 0.000s
                                    [number:protected] => 718
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [673] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod roguelike
                                    [number:protected] => 719
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [674] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod roguelike
                                    [number:protected] => 720
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [675] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Roguelike Dungeons took 0.000s
                                    [number:protected] => 721
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [676] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod rustic
                                    [number:protected] => 722
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [677] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod rustic
                                    [number:protected] => 723
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [678] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Rustic took 0.000s
                                    [number:protected] => 724
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [679] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod simpleharvest
                                    [number:protected] => 725
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [680] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod simpleharvest
                                    [number:protected] => 726
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [681] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Simple Harvest took 0.001s
                                    [number:protected] => 727
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [682] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod uteamcore
                                    [number:protected] => 728
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [683] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod uteamcore
                                    [number:protected] => 729
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [684] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - U Team Core took 0.001s
                                    [number:protected] => 730
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [685] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod usefulbackpacks
                                    [number:protected] => 731
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [686] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/TRACE] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod usefulbackpacks
                                    [number:protected] => 732
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [687] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Useful Backpacks took 0.001s
                                    [number:protected] => 733
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [688] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/DEBUG] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/DEBUG] [FML]: Bar Finished: ServerStopped took 0.079s
                                    [number:protected] => 734
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [689] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server thread/INFO] [FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server thread/INFO] [FML]: The state engine was in incorrect state PREINITIALIZATION and forced into state SERVER_STOPPED. Errors may have been discarded.
                                    [number:protected] => 735
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [690] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server Shutdown Thread/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server Shutdown Thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
                                    [number:protected] => 736
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [691] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [17:04:13] [Server Shutdown Thread/INFO] [net.minecraft.server.MinecraftServer]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [17:04:13] [Server Shutdown Thread/INFO] [net.minecraft.server.MinecraftServer]: Saving worlds
                                    [number:protected] => 737
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 692
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [17:03:22] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLServerTweaker
[17:03:22] [main/INFO] [LaunchWrapper]: Using primary tweak class name net.minecraftforge.fml.common.launcher.FMLServerTweaker
[17:03:22] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLServerTweaker
[17:03:23] [main/DEBUG] [FML]: Injecting tracing printstreams for STDOUT/STDERR.
[17:03:23] [main/INFO] [FML]: Forge Mod Loader version 14.23.5.2847 for Minecraft 1.12.2 loading
[17:03:23] [main/INFO] [FML]: Java is OpenJDK 64-Bit Server VM, version 1.8.0_232, running on Linux:amd64:4.4.0-171-generic, installed at /usr/local/openjdk-8/jre
[17:03:23] [main/DEBUG] [FML]: Java classpath at launch is:
[17:03:23] [main/DEBUG] [FML]: forge.jar
[17:03:23] [main/DEBUG] [FML]: Java library path at launch is:
[17:03:23] [main/DEBUG] [FML]: /usr/java/packages/lib/amd64
[17:03:23] [main/DEBUG] [FML]: /usr/lib64
[17:03:23] [main/DEBUG] [FML]: /lib64
[17:03:23] [main/DEBUG] [FML]: /lib
[17:03:23] [main/DEBUG] [FML]: /usr/lib
[17:03:23] [main/DEBUG] [FML]: Determined Minecraft Libraries Root: /aternos/server/libraries
[17:03:23] [main/DEBUG] [FML]: Cleaning up mods folder: ./mods
[17:03:23] [main/DEBUG] [FML]: Examining file: FutureVersionsV1.2.2.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: [1.12.2] SecurityCraft v1.8.16.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: emoticons-0.4-1.12.2-dist.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: Rex\'s-Additional-Structures-1.12.x-(v.2.3.1).jar
[17:03:23] [main/DEBUG] [FML]: Examining file: Decocraft-2.6.3_1.12.2.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: RoguelikeDungeons-1.12.2-1.8.0.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: FastWorkbench-1.12.2-1.7.3.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: rustic-1.1.2.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: useful_backpacks-1.12.2-1.5.1.42.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: Hwyla-1.8.26-B41_1.12.2.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: ido-1.12.2-1.1.0.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: CashCraft-1.12.2-4.0.0.1.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: Clumps-3.1.2.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: Chisel-MC1.12.2-1.0.1.44.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: Explorercraft-2.2.9.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: AppleSkin-mc1.12-1.0.9.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: journeymap-1.12.2-5.5.8.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: simpleharvest-1.08.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: mclib-1.0.4-1.12.2.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: u_team_core-1.12.2-2.2.5.147.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: CarryOn MC1.12.2 v1.12.3.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: BetterFps-1.4.8.jar
[17:03:23] [main/DEBUG] [FML]: Examining file: DynamicTrees-1.12.2-0.9.7.jar
[17:03:23] [main/DEBUG] [FML]: Enabling runtime deobfuscation
[17:03:23] [main/DEBUG] [FML]: Instantiating coremod class FMLCorePlugin
[17:03:23] [main/WARN] [FML]: The coremod FMLCorePlugin (net.minecraftforge.fml.relauncher.FMLCorePlugin) is not signed!
[17:03:23] [main/DEBUG] [FML]: Added access transformer class net.minecraftforge.fml.common.asm.transformers.AccessTransformer to enqueued access transformers
[17:03:23] [main/DEBUG] [FML]: Enqueued coremod FMLCorePlugin
[17:03:23] [main/DEBUG] [FML]: Instantiating coremod class FMLForgePlugin
[17:03:23] [main/WARN] [FML]: The coremod FMLForgePlugin (net.minecraftforge.classloading.FMLForgePlugin) is not signed!
[17:03:23] [main/DEBUG] [FML]: Enqueued coremod FMLForgePlugin
[17:03:23] [main/DEBUG] [FML]: All fundamental core mods are successfully located
[17:03:23] [main/DEBUG] [FML]: Discovering coremods
[17:03:23] [main/INFO] [FML]: Searching /aternos/server/./mods for mods
[17:03:23] [main/DEBUG] [FML]: Adding FutureVersionsV1.2.2.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding [1.12.2] SecurityCraft v1.8.16.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding emoticons-0.4-1.12.2-dist.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding Rex\'s-Additional-Structures-1.12.x-(v.2.3.1).jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding Decocraft-2.6.3_1.12.2.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding RoguelikeDungeons-1.12.2-1.8.0.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding FastWorkbench-1.12.2-1.7.3.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding rustic-1.1.2.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding useful_backpacks-1.12.2-1.5.1.42.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding Hwyla-1.8.26-B41_1.12.2.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding ido-1.12.2-1.1.0.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding CashCraft-1.12.2-4.0.0.1.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding Clumps-3.1.2.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding Chisel-MC1.12.2-1.0.1.44.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding Explorercraft-2.2.9.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding AppleSkin-mc1.12-1.0.9.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding journeymap-1.12.2-5.5.8.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding simpleharvest-1.08.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding mclib-1.0.4-1.12.2.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding u_team_core-1.12.2-2.2.5.147.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding CarryOn MC1.12.2 v1.12.3.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding BetterFps-1.4.8.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Adding DynamicTrees-1.12.2-0.9.7.jar to the mod list
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy [1.12.2] SecurityCraft v1.8.16.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in [1.12.2] SecurityCraft v1.8.16.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy AppleSkin-mc1.12-1.0.9.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in AppleSkin-mc1.12-1.0.9.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy BetterFps-1.4.8.jar
[17:03:23] [main/INFO] [FML]: Loading tweaker guichaguri.betterfps.tweaker.BetterFpsTweaker from BetterFps-1.4.8.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy CarryOn MC1.12.2 v1.12.3.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in CarryOn MC1.12.2 v1.12.3.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy CashCraft-1.12.2-4.0.0.1.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in CashCraft-1.12.2-4.0.0.1.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy Chisel-MC1.12.2-1.0.1.44.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in Chisel-MC1.12.2-1.0.1.44.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy Clumps-3.1.2.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in Clumps-3.1.2.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy Decocraft-2.6.3_1.12.2.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in Decocraft-2.6.3_1.12.2.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy DynamicTrees-1.12.2-0.9.7.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in DynamicTrees-1.12.2-0.9.7.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy emoticons-0.4-1.12.2-dist.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in emoticons-0.4-1.12.2-dist.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy Explorercraft-2.2.9.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in Explorercraft-2.2.9.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy FastWorkbench-1.12.2-1.7.3.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in FastWorkbench-1.12.2-1.7.3.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy FutureVersionsV1.2.2.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in FutureVersionsV1.2.2.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy Hwyla-1.8.26-B41_1.12.2.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in Hwyla-1.8.26-B41_1.12.2.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy ido-1.12.2-1.1.0.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in ido-1.12.2-1.1.0.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy journeymap-1.12.2-5.5.8.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in journeymap-1.12.2-5.5.8.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy mclib-1.0.4-1.12.2.jar
[17:03:23] [main/WARN] [FML]: Found FMLCorePluginContainsFMLMod marker in mclib-1.0.4-1.12.2.jar. This is not recommended, @Mods should be in a separate jar from the coremod.
[17:03:23] [main/DEBUG] [FML]: Instantiating coremod class McLibCM
[17:03:23] [main/TRACE] [FML]: coremod named McLib core mod is loading
[17:03:23] [main/DEBUG] [FML]: The coremod mchorse.mclib.core.McLibCM requested minecraft version 1.12.2 and minecraft is 1.12.2. It will be loaded.
[17:03:23] [main/WARN] [FML]: The coremod McLib core mod (mchorse.mclib.core.McLibCM) is not signed!
[17:03:23] [main/DEBUG] [FML]: Enqueued coremod McLib core mod
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy Rex\'s-Additional-Structures-1.12.x-(v.2.3.1).jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in Rex\'s-Additional-Structures-1.12.x-(v.2.3.1).jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy RoguelikeDungeons-1.12.2-1.8.0.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in RoguelikeDungeons-1.12.2-1.8.0.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy rustic-1.1.2.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in rustic-1.1.2.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy simpleharvest-1.08.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in simpleharvest-1.08.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy u_team_core-1.12.2-2.2.5.147.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in u_team_core-1.12.2-2.2.5.147.jar
[17:03:23] [main/DEBUG] [FML]: Examining for coremod candidacy useful_backpacks-1.12.2-1.5.1.42.jar
[17:03:23] [main/DEBUG] [FML]: Not found coremod data in useful_backpacks-1.12.2-1.5.1.42.jar
[17:03:23] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
[17:03:23] [main/INFO] [LaunchWrapper]: Loading tweak class name guichaguri.betterfps.tweaker.BetterFpsTweaker
[17:03:23] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
[17:03:23] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
[17:03:23] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLInjectionAndSortingTweaker
[17:03:23] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
[17:03:23] [main/DEBUG] [FML]: Injecting coremod FMLCorePlugin \{net.minecraftforge.fml.relauncher.FMLCorePlugin\} class transformers
[17:03:23] [main/TRACE] [FML]: Registering transformer net.minecraftforge.fml.common.asm.transformers.SideTransformer
[17:03:23] [main/TRACE] [FML]: Registering transformer net.minecraftforge.fml.common.asm.transformers.EventSubscriptionTransformer
[17:03:23] [main/TRACE] [FML]: Registering transformer net.minecraftforge.fml.common.asm.transformers.EventSubscriberTransformer
[17:03:23] [main/TRACE] [FML]: Registering transformer net.minecraftforge.fml.common.asm.transformers.SoundEngineFixTransformer
[17:03:23] [main/DEBUG] [FML]: Injection complete
[17:03:23] [main/DEBUG] [FML]: Running coremod plugin for FMLCorePlugin \{net.minecraftforge.fml.relauncher.FMLCorePlugin\}
[17:03:23] [main/DEBUG] [FML]: Running coremod plugin FMLCorePlugin
[17:03:26] [main/DEBUG] [FML]: Read 1145 binary patches
[17:03:27] [main/DEBUG] [FML]: Loading deobfuscation resource /deobfuscation_data-1.12.2.lzma with 36083 records
[17:03:29] [main/ERROR] [FML]: FML appears to be missing any signature data. This is not a good thing
[17:03:29] [main/DEBUG] [FML]: Coremod plugin class FMLCorePlugin run successfully
[17:03:29] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
[17:03:29] [main/DEBUG] [FML]: Injecting coremod FMLForgePlugin \{net.minecraftforge.classloading.FMLForgePlugin\} class transformers
[17:03:29] [main/DEBUG] [FML]: Injection complete
[17:03:29] [main/DEBUG] [FML]: Running coremod plugin for FMLForgePlugin \{net.minecraftforge.classloading.FMLForgePlugin\}
[17:03:29] [main/DEBUG] [FML]: Running coremod plugin FMLForgePlugin
[17:03:29] [main/DEBUG] [FML]: Coremod plugin class FMLForgePlugin run successfully
[17:03:29] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.relauncher.CoreModManager$FMLPluginWrapper
[17:03:29] [main/DEBUG] [FML]: Injecting coremod McLib core mod \{mchorse.mclib.core.McLibCM\} class transformers
[17:03:29] [main/TRACE] [FML]: Registering transformer mchorse.mclib.core.McLibCMClassTransformer
[17:03:29] [main/DEBUG] [FML]: Injection complete
[17:03:29] [main/DEBUG] [FML]: Running coremod plugin for McLib core mod \{mchorse.mclib.core.McLibCM\}
[17:03:29] [main/DEBUG] [FML]: Running coremod plugin McLib core mod
[17:03:29] [main/DEBUG] [FML]: Coremod plugin class McLibCM run successfully
[17:03:29] [main/INFO] [LaunchWrapper]: Calling tweak class guichaguri.betterfps.tweaker.BetterFpsTweaker
[17:03:29] [main/DEBUG] [BetterFps]: Loading Mappings...
[17:03:29] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.FMLDeobfTweaker
[17:03:29] [main/DEBUG] [FML]: Loaded 215 rules from AccessTransformer config file forge_at.cfg
[17:03:29] [main/DEBUG] [FML]: Loaded 8 rules from AccessTransformer mod jar file ./mods/FastWorkbench-1.12.2-1.7.3.jar!META-INF/fastbench_at.cfg
[17:03:29] [main/DEBUG] [FML]: Loaded 1 rules from AccessTransformer mod jar file ./mods/journeymap-1.12.2-5.5.8.jar!META-INF/journeymap_at.cfg
[17:03:29] [main/DEBUG] [FML]: Loaded 2 rules from AccessTransformer mod jar file ./mods/u_team_core-1.12.2-2.2.5.147.jar!META-INF/uteamcore_at.cfg
[17:03:29] [main/DEBUG] [FML]: Loaded 8 rules from AccessTransformer mod jar file ./mods/Chisel-MC1.12.2-1.0.1.44.jar!META-INF/chisel_at.cfg
[17:03:29] [main/DEBUG] [FML]: Loaded 1 rules from AccessTransformer mod jar file ./mods/Decocraft-2.6.3_1.12.2.jar!META-INF/decocraft_at.cfg
[17:03:29] [main/DEBUG] [FML]: Validating minecraft
[17:03:30] [main/DEBUG] [FML]: Minecraft validated, launching...
[17:03:30] [main/INFO] [LaunchWrapper]: Loading tweak class name net.minecraftforge.fml.common.launcher.TerminalTweaker
[17:03:30] [main/INFO] [LaunchWrapper]: Calling tweak class net.minecraftforge.fml.common.launcher.TerminalTweaker
[17:03:32] [main/INFO] [LaunchWrapper]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
[17:03:33] [main/INFO] [BetterFps]: Patching net.minecraft.block.Block... (aow)
[17:03:36] [main/INFO] [BetterFps]: Patching math utils with "RIVENS_HALF" algorithm
[17:03:40] [main/INFO] [BetterFps]: Patching net.minecraft.tileentity.TileEntityBeacon... (avh)
[17:03:41] [main/INFO] [BetterFps]: Patching net.minecraft.block.BlockHopper... (arl)
[17:03:41] [main/INFO] [BetterFps]: Patching net.minecraft.tileentity.TileEntityHopper... (avw)
[17:03:49] [main/DEBUG] [FML]: Creating vanilla freeze snapshot
[17:03:49] [main/DEBUG] [FML]: Vanilla freeze snapshot created
[17:03:49] [main/INFO] [BetterFps]: Patching net.minecraft.server.dedicated.DedicatedServer... (nz)
[17:03:51] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
[17:03:51] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2847 Initialized
[17:03:51] [Server thread/INFO] [FML]: Starts to replace vanilla recipe ingredients with ore ingredients.
[17:03:52] [Server thread/INFO] [FML]: Invalid recipe found with multiple oredict ingredients in the same ingredient...
[17:03:53] [Server thread/INFO] [FML]: Replaced 1227 ore ingredients
[17:03:54] [Server thread/DEBUG] [FML]: File /aternos/server/config/injectedDependencies.json not found. No dependencies injected
[17:03:54] [Server thread/DEBUG] [FML]: Building injected Mod Containers [net.minecraftforge.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer, mchorse.mclib.core.McLibCMInfo]
[17:03:54] [Server thread/DEBUG] [FML]: Attempting to load mods contained in the minecraft jar file and associated classes
[17:03:54] [Server thread/DEBUG] [FML]: Found a minecraft related file at /aternos/server/forge.jar, examining for mod candidates
[17:03:54] [Server thread/TRACE] [FML]: Skipping known library file /aternos/server/./mods/BetterFps-1.4.8.jar
[17:03:54] [Server thread/TRACE] [FML]: Skipping known library file /aternos/server/./mods/mclib-1.0.4-1.12.2.jar
[17:03:54] [Server thread/DEBUG] [FML]: Minecraft jar mods loaded successfully
[17:03:54] [Server thread/INFO] [FML]: Searching /aternos/server/./mods for mods
[17:03:54] [Server thread/DEBUG] [FML]: Adding FutureVersionsV1.2.2.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding [1.12.2] SecurityCraft v1.8.16.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding emoticons-0.4-1.12.2-dist.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding Rex\'s-Additional-Structures-1.12.x-(v.2.3.1).jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding Decocraft-2.6.3_1.12.2.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding RoguelikeDungeons-1.12.2-1.8.0.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding FastWorkbench-1.12.2-1.7.3.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding rustic-1.1.2.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding useful_backpacks-1.12.2-1.5.1.42.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding Hwyla-1.8.26-B41_1.12.2.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding ido-1.12.2-1.1.0.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding CashCraft-1.12.2-4.0.0.1.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding Clumps-3.1.2.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding Chisel-MC1.12.2-1.0.1.44.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding Explorercraft-2.2.9.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding AppleSkin-mc1.12-1.0.9.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding journeymap-1.12.2-5.5.8.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding simpleharvest-1.08.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding mclib-1.0.4-1.12.2.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding u_team_core-1.12.2-2.2.5.147.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding CarryOn MC1.12.2 v1.12.3.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding BetterFps-1.4.8.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Adding DynamicTrees-1.12.2-0.9.7.jar to the mod list
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file [1.12.2] SecurityCraft v1.8.16.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file AppleSkin-mc1.12-1.0.9.jar
[17:03:54] [Server thread/TRACE] [FML]: Skipping already parsed coremod or tweaker BetterFps-1.4.8.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file CarryOn MC1.12.2 v1.12.3.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file CashCraft-1.12.2-4.0.0.1.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file Chisel-MC1.12.2-1.0.1.44.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file Clumps-3.1.2.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file Decocraft-2.6.3_1.12.2.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file DynamicTrees-1.12.2-0.9.7.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file emoticons-0.4-1.12.2-dist.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file Explorercraft-2.2.9.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file FastWorkbench-1.12.2-1.7.3.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file FutureVersionsV1.2.2.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file Hwyla-1.8.26-B41_1.12.2.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file ido-1.12.2-1.1.0.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file journeymap-1.12.2-5.5.8.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file mclib-1.0.4-1.12.2.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file Rex\'s-Additional-Structures-1.12.x-(v.2.3.1).jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file RoguelikeDungeons-1.12.2-1.8.0.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file rustic-1.1.2.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file simpleharvest-1.08.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file u_team_core-1.12.2-2.2.5.147.jar
[17:03:54] [Server thread/DEBUG] [FML]: Found a candidate zip or jar file useful_backpacks-1.12.2-1.5.1.42.jar
[17:03:54] [Server thread/DEBUG] [FML]: Examining file forge.jar for potential mods
[17:03:54] [Server thread/DEBUG] [FML]: The mod container forge.jar appears to be missing an mcmod.info file
[17:03:56] [Server thread/DEBUG] [FML]: Examining file [1.12.2] SecurityCraft v1.8.16.jar for potential mods
[17:03:56] [Server thread/DEBUG] [FML]: The mod container [1.12.2] SecurityCraft v1.8.16.jar appears to be missing an mcmod.info file
[17:03:56] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (net.geforcemods.securitycraft.SecurityCraft) - loading
[17:03:56] [Server thread/TRACE] [FML]: Parsed dependency info for securitycraft: Requirements: [forge@[14.23.5.2826,)] After:[forge@[14.23.5.2826,)] Before:[]
[17:03:57] [Server thread/DEBUG] [FML]: Examining file AppleSkin-mc1.12-1.0.9.jar for potential mods
[17:03:57] [Server thread/TRACE] [FML]: Located mcmod.info file in file AppleSkin-mc1.12-1.0.9.jar
[17:03:57] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (squeek.appleskin.AppleSkin) - loading
[17:03:57] [Server thread/TRACE] [FML]: Parsed dependency info for appleskin: Requirements: [forge@[14.21.0,)] After:[jei@[4.6.0,), forge@[14.21.0,), applecore@[2.2.0,)] Before:[]
[17:03:57] [Server thread/DEBUG] [FML]: Examining file CarryOn MC1.12.2 v1.12.3.jar for potential mods
[17:03:57] [Server thread/TRACE] [FML]: Located mcmod.info file in file CarryOn MC1.12.2 v1.12.3.jar
[17:03:57] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (tschipp.carryon.CarryOn) - loading
[17:03:57] [Server thread/TRACE] [FML]: Parsed dependency info for carryon: Requirements: [forge@[13.20.1.2386,)] After:[forge@[13.20.1.2386,), gamestages] Before:[]
[17:03:57] [Server thread/DEBUG] [FML]: Examining file CashCraft-1.12.2-4.0.0.1.jar for potential mods
[17:03:57] [Server thread/TRACE] [FML]: Located mcmod.info file in file CashCraft-1.12.2-4.0.0.1.jar
[17:03:57] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (io.github.tehstoneman.cashcraft.CashCraft) - loading
[17:03:57] [Server thread/TRACE] [FML]: Parsed dependency info for cashcraft: Requirements: [] After:[] Before:[]
[17:03:57] [Server thread/DEBUG] [FML]: Examining file Chisel-MC1.12.2-1.0.1.44.jar for potential mods
[17:03:57] [Server thread/TRACE] [FML]: Located mcmod.info file in file Chisel-MC1.12.2-1.0.1.44.jar
[17:03:57] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (team.chisel.Chisel) - loading
[17:03:57] [Server thread/TRACE] [FML]: Parsed dependency info for chisel: Requirements: [forge@[14.23.5.2806,)] After:[forge@[14.23.5.2806,), jei@[4.12.0,5)] Before:[]
[17:03:58] [Server thread/DEBUG] [FML]: Examining file Clumps-3.1.2.jar for potential mods
[17:03:58] [Server thread/TRACE] [FML]: Located mcmod.info file in file Clumps-3.1.2.jar
[17:03:58] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (com.blamejared.clumps.Clumps) - loading
[17:03:58] [Server thread/TRACE] [FML]: Parsed dependency info for clumps: Requirements: [] After:[] Before:[]
[17:03:58] [Server thread/DEBUG] [FML]: Examining file Decocraft-2.6.3_1.12.2.jar for potential mods
[17:03:58] [Server thread/TRACE] [FML]: Located mcmod.info file in file Decocraft-2.6.3_1.12.2.jar
[17:03:58] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (com.mia.props.Props) - loading
[17:03:58] [Server thread/TRACE] [FML]: Parsed dependency info for props: Requirements: [] After:[ptrmodellib] Before:[]
[17:03:58] [Server thread/DEBUG] [FML]: Examining file DynamicTrees-1.12.2-0.9.7.jar for potential mods
[17:03:58] [Server thread/TRACE] [FML]: Located mcmod.info file in file DynamicTrees-1.12.2-0.9.7.jar
[17:03:58] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (com.ferreusveritas.dynamictrees.DynamicTrees) - loading
[17:03:58] [Server thread/TRACE] [FML]: Parsed dependency info for dynamictrees: Requirements: [forge@[14.23.5.2768,)] After:[forge@[14.23.5.2768,), reccomplex] Before:[rustic@(1.0.14,), dynamictreesbop@(1.4.1d,), dynamictreestc@(1.4.1d,), dynamictreestc@(1.4.1e,), dttraverse@(1.4,), dynamictreeshnc@(1.1,)]
[17:03:58] [Server thread/DEBUG] [FML]: Examining file emoticons-0.4-1.12.2-dist.jar for potential mods
[17:03:58] [Server thread/TRACE] [FML]: Located mcmod.info file in file emoticons-0.4-1.12.2-dist.jar
[17:03:58] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (mchorse.emoticons.c7944f36f5024d067) - loading
[17:03:58] [Server thread/TRACE] [FML]: Parsed dependency info for emoticons: Requirements: [mclib@[1.0.4,)] After:[mclib@[1.0.4,), metamorph] Before:[]
[17:03:58] [Server thread/DEBUG] [FML]: Examining file Explorercraft-2.2.9.jar for potential mods
[17:03:58] [Server thread/TRACE] [FML]: Located mcmod.info file in file Explorercraft-2.2.9.jar
[17:03:58] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (zathrox.explorercraft.ExplorerCraft) - loading
[17:03:58] [Server thread/TRACE] [FML]: Parsed dependency info for explorercraft: Requirements: [] After:[] Before:[]
[17:03:59] [Server thread/DEBUG] [FML]: Examining file FastWorkbench-1.12.2-1.7.3.jar for potential mods
[17:03:59] [Server thread/TRACE] [FML]: Located mcmod.info file in file FastWorkbench-1.12.2-1.7.3.jar
[17:03:59] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (shadows.fastbench.FastBench) - loading
[17:03:59] [Server thread/TRACE] [FML]: Parsed dependency info for fastbench: Requirements: [] After:[] Before:[]
[17:03:59] [Server thread/DEBUG] [FML]: Examining file FutureVersionsV1.2.2.jar for potential mods
[17:03:59] [Server thread/TRACE] [FML]: Located mcmod.info file in file FutureVersionsV1.2.2.jar
[17:03:59] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (net.mcreator.futureminecraf.futureminecraf) - loading
[17:03:59] [Server thread/TRACE] [FML]: Using mcmod dependency info for futureminecraf: [] [] []
[17:03:59] [Server thread/DEBUG] [FML]: Examining file Hwyla-1.8.26-B41_1.12.2.jar for potential mods
[17:03:59] [Server thread/TRACE] [FML]: Located mcmod.info file in file Hwyla-1.8.26-B41_1.12.2.jar
[17:03:59] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (mcp.mobius.waila.Waila) - loading
[17:03:59] [Server thread/TRACE] [FML]: Parsed dependency info for waila: Requirements: [] After:[] Before:[]
[17:03:59] [Server thread/DEBUG] [FML]: Examining file ido-1.12.2-1.1.0.jar for potential mods
[17:03:59] [Server thread/TRACE] [FML]: Located mcmod.info file in file ido-1.12.2-1.1.0.jar
[17:03:59] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (xyz.kaydax.ido.IdoMain) - loading
[17:03:59] [Server thread/TRACE] [FML]: Parsed dependency info for ido: Requirements: [forge@[14.23.5.2811,)] After:[] Before:[]
[17:03:59] [Server thread/DEBUG] [FML]: Examining file journeymap-1.12.2-5.5.8.jar for potential mods
[17:03:59] [Server thread/TRACE] [FML]: Located mcmod.info file in file journeymap-1.12.2-5.5.8.jar
[17:04:00] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (journeymap.common.Journeymap) - loading
[17:04:00] [Server thread/TRACE] [FML]: Using mcmod dependency info for journeymap: [] [Forge@[14.23.5.2768,)] []
[17:04:00] [Server thread/DEBUG] [FML]: Examining file mclib-1.0.4-1.12.2.jar for potential mods
[17:04:00] [Server thread/TRACE] [FML]: Located mcmod.info file in file mclib-1.0.4-1.12.2.jar
[17:04:00] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (mchorse.mclib.McLib) - loading
[17:04:00] [Server thread/TRACE] [FML]: Parsed dependency info for mclib: Requirements: [] After:[] Before:[]
[17:04:00] [Server thread/DEBUG] [FML]: Examining file Rex\'s-Additional-Structures-1.12.x-(v.2.3.1).jar for potential mods
[17:04:00] [Server thread/TRACE] [FML]: Located mcmod.info file in file Rex\'s-Additional-Structures-1.12.x-(v.2.3.1).jar
[17:04:00] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (xxrexraptorxx.additionalstructures.main.AdditionalStructures) - loading
[17:04:00] [Server thread/TRACE] [FML]: Parsed dependency info for additionalstructures: Requirements: [] After:[] Before:[]
[17:04:00] [Server thread/DEBUG] [FML]: Examining file RoguelikeDungeons-1.12.2-1.8.0.jar for potential mods
[17:04:00] [Server thread/TRACE] [FML]: Located mcmod.info file in file RoguelikeDungeons-1.12.2-1.8.0.jar
[17:04:00] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (greymerk.roguelike.Roguelike) - loading
[17:04:00] [Server thread/TRACE] [FML]: Parsed dependency info for roguelike: Requirements: [] After:[] Before:[]
[17:04:01] [Server thread/DEBUG] [FML]: Examining file rustic-1.1.2.jar for potential mods
[17:04:01] [Server thread/TRACE] [FML]: Located mcmod.info file in file rustic-1.1.2.jar
[17:04:01] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (rustic.core.Rustic) - loading
[17:04:01] [Server thread/TRACE] [FML]: Parsed dependency info for rustic: Requirements: [] After:[dynamictrees@[1.12.2-0.9.1e,), dynamictreesbop] Before:[dynamictreestc]
[17:04:01] [Server thread/DEBUG] [FML]: Examining file simpleharvest-1.08.jar for potential mods
[17:04:01] [Server thread/TRACE] [FML]: Located mcmod.info file in file simpleharvest-1.08.jar
[17:04:01] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (com.workshopcraft.SimpleHarvest.SimpleHarvest) - loading
[17:04:01] [Server thread/TRACE] [FML]: Parsed dependency info for simpleharvest: Requirements: [] After:[] Before:[]
[17:04:01] [Server thread/DEBUG] [FML]: Examining file u_team_core-1.12.2-2.2.5.147.jar for potential mods
[17:04:01] [Server thread/TRACE] [FML]: Located mcmod.info file in file u_team_core-1.12.2-2.2.5.147.jar
[17:04:01] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (info.u_team.u_team_core.UCoreMain) - loading
[17:04:01] [Server thread/TRACE] [FML]: Parsed dependency info for uteamcore: Requirements: [forge@[14.23.5.2768,)] After:[] Before:[]
[17:04:01] [Server thread/DEBUG] [FML]: Examining file useful_backpacks-1.12.2-1.5.1.42.jar for potential mods
[17:04:01] [Server thread/TRACE] [FML]: Located mcmod.info file in file useful_backpacks-1.12.2-1.5.1.42.jar
[17:04:01] [Server thread/DEBUG] [FML]: Identified a mod of type Lnet/minecraftforge/fml/common/Mod; (info.u_team.useful_backpacks.UsefulBackpacksMod) - loading
[17:04:01] [Server thread/TRACE] [FML]: Parsed dependency info for usefulbackpacks: Requirements: [forge@[14.23.5.2768,), uteamcore@[**.**.**.**,)] After:[uteamcore@[**.**.**.**,)] Before:[]
[17:04:01] [Server thread/INFO] [FML]: Forge Mod Loader has identified 27 mods to load
[17:04:01] [Server thread/DEBUG] [FML]: Found API team.chisel.api (owned by chisel providing Chisel-API) embedded in chisel
[17:04:01] [Server thread/DEBUG] [FML]: Found API team.chisel.api.carving (owned by Chisel providing ChiselAPI|Carving) embedded in chisel
[17:04:01] [Server thread/DEBUG] [FML]: Found API journeymap.client.api (owned by journeymap providing journeymap|client-api) embedded in journeymap
[17:04:01] [Server thread/DEBUG] [FML]: Found API journeymap.client.api.util (owned by journeymap providing journeymap|client-api-util) embedded in journeymap
[17:04:01] [Server thread/DEBUG] [FML]: Found API net.geforcemods.securitycraft.api (owned by securitycraft providing SecurityCraftAPI) embedded in securitycraft
[17:04:01] [Server thread/DEBUG] [FML]: Found API mcp.mobius.waila.api (owned by Waila providing WailaAPI) embedded in waila
[17:04:01] [Server thread/DEBUG] [FML]: Found API betterwithmods.api (owned by betterwithmods providing BetterWithModsAPI) embedded in appleskin
[17:04:01] [Server thread/DEBUG] [FML]: Found API journeymap.client.api.event (owned by journeymap providing journeymap|client-api-event) embedded in journeymap
[17:04:01] [Server thread/DEBUG] [FML]: Found API journeymap.client.api.model (owned by journeymap providing journeymap|client-api-model) embedded in journeymap
[17:04:01] [Server thread/DEBUG] [FML]: Found API io.github.tehstoneman.cashcraft.api (owned by cashcraft providing CashCraftAPI) embedded in cashcraft
[17:04:01] [Server thread/DEBUG] [FML]: Found API journeymap.client.api.display (owned by journeymap providing journeymap|client-api-display) embedded in journeymap
[17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API ChiselAPI|Carving: owner: Chisel, dependents: [chisel]
[17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API CashCraftAPI: owner: cashcraft, dependents: []
[17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API SecurityCraftAPI: owner: securitycraft, dependents: []
[17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API journeymap|client-api-model: owner: journeymap, dependents: []
[17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API journeymap|client-api: owner: journeymap, dependents: []
[17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API journeymap|client-api-display: owner: journeymap, dependents: []
[17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API BetterWithModsAPI: owner: betterwithmods, dependents: [appleskin]
[17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API journeymap|client-api-event: owner: journeymap, dependents: []
[17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API journeymap|client-api-util: owner: journeymap, dependents: []
[17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API WailaAPI: owner: Waila, dependents: [waila]
[17:04:01] [Server thread/DEBUG] [FML]: Creating API container dummy for API Chisel-API: owner: chisel, dependents: []
[17:04:02] [Server thread/TRACE] [FML]: Received a system property request \'\'
[17:04:02] [Server thread/TRACE] [FML]: System property request managing the state of 0 mods
[17:04:02] [Server thread/DEBUG] [FML]: After merging, found state information for 0 mods
[17:04:02] [Server thread/WARN] [FML]: Missing English translation for FML: assets/fml/lang/en_us.lang
[17:04:02] [Server thread/WARN] [FML]: Mod mclib_core has been disabled through configuration
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod securitycraft
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod appleskin
[17:04:02] [Server thread/WARN] [FML]: Missing English translation for appleskin: assets/appleskin/lang/en_us.lang
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod carryon
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod cashcraft
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod chisel
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod clumps
[17:04:02] [Server thread/WARN] [FML]: Missing English translation for clumps: assets/clumps/lang/en_us.lang
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod props
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod dynamictrees
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod emoticons
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod explorercraft
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod fastbench
[17:04:02] [Server thread/WARN] [FML]: Missing English translation for fastbench: assets/fastbench/lang/en_us.lang
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod futureminecraf
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod waila
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod ido
[17:04:02] [Server thread/WARN] [FML]: Missing English translation for ido: assets/ido/lang/en_us.lang
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod journeymap
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod mclib
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod additionalstructures
[17:04:02] [Server thread/WARN] [FML]: Missing English translation for additionalstructures: assets/additionalstructures/lang/en_us.lang
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod roguelike
[17:04:02] [Server thread/WARN] [FML]: Missing English translation for roguelike: assets/roguelike/lang/en_us.lang
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod rustic
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod simpleharvest
[17:04:02] [Server thread/WARN] [FML]: Missing English translation for simpleharvest: assets/simpleharvest/lang/en_us.lang
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod uteamcore
[17:04:02] [Server thread/DEBUG] [FML]: Enabling mod usefulbackpacks
[17:04:02] [Server thread/TRACE] [FML]: Verifying mod requirements are satisfied
[17:04:02] [Server thread/TRACE] [FML]: All mod requirements are satisfied
[17:04:02] [Server thread/TRACE] [FML]: Sorting mods into an ordered list
[17:04:02] [Server thread/TRACE] [FML]: Mod sorting completed successfully
[17:04:02] [Server thread/DEBUG] [FML]: Mod sorting data
[17:04:02] [Server thread/DEBUG] [FML]: securitycraft(SecurityCraft:v1.8.16): [1.12.2] SecurityCraft v1.8.16.jar (required-after:forge@[14.23.5.2826,))
[17:04:02] [Server thread/DEBUG] [FML]: BetterWithModsAPI(API: BetterWithModsAPI:Beta 0.6): AppleSkin-mc1.12-1.0.9.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: appleskin(AppleSkin:1.0.9): AppleSkin-mc1.12-1.0.9.jar (after:jei@[4.6.0,); required-after:forge@[14.21.0,); after:applecore@[2.2.0,))
[17:04:02] [Server thread/DEBUG] [FML]: carryon(Carry On:1.12.3): CarryOn MC1.12.2 v1.12.3.jar (required-after:forge@[13.20.1.2386,);after:gamestages;)
[17:04:02] [Server thread/DEBUG] [FML]: cashcraft(CashCraft:mc1.12.2-4.0.0.1): CashCraft-1.12.2-4.0.0.1.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: ChiselAPI|Carving(API: ChiselAPI|Carving:0.0.1): Chisel-MC1.12.2-1.0.1.44.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: chisel(Chisel:MC1.12.2-1.0.1.44): Chisel-MC1.12.2-1.0.1.44.jar (required-after:forge@[14.23.5.2806,);required-after-client:ctm;after:jei@[4.12.0,5))
[17:04:02] [Server thread/DEBUG] [FML]: clumps(Clumps:3.1.2): Clumps-3.1.2.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: props(Decocraft:2.6.3): Decocraft-2.6.3_1.12.2.jar (required-after-client:ptrmodellib@[1.0.3,);after:ptrmodellib)
[17:04:02] [Server thread/DEBUG] [FML]: dynamictrees(Dynamic Trees:1.12.2-0.9.7): DynamicTrees-1.12.2-0.9.7.jar (required-after:forge@[14.23.5.2768,);before:rustic@(1.0.14,);before:dynamictreesbop@(1.4.1d,);before:dynamictreestc@(1.4.1d,);before:dynamictreestc@(1.4.1e,);before:dttraverse@(1.4,);before:dynamictreeshnc@(1.1,);after:reccomplex)
[17:04:02] [Server thread/DEBUG] [FML]: mclib(McLib:1.0.4): mclib-1.0.4-1.12.2.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: emoticons(Emoticons:0.4): emoticons-0.4-1.12.2-dist.jar (required-after:mclib@[1.0.4,);after:metamorph)
[17:04:02] [Server thread/DEBUG] [FML]: explorercraft(ExplorerCraft:2.2.8): Explorercraft-2.2.9.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: fastbench(FastWorkbench:1.7.3): FastWorkbench-1.12.2-1.7.3.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: futureminecraf(Future Versions:1.2.2): FutureVersionsV1.2.2.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: WailaAPI(API: WailaAPI:1.3): Hwyla-1.8.26-B41_1.12.2.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: waila(Waila:1.8.26): Hwyla-1.8.26-B41_1.12.2.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: ido(Ido - 1.12 movement enhancement:1.0.6): ido-1.12.2-1.1.0.jar (required:forge@[14.23.5.2811,);)
[17:04:02] [Server thread/DEBUG] [FML]: journeymap(JourneyMap:1.12.2-5.5.8): journeymap-1.12.2-5.5.8.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: additionalstructures(Rex\'s Additional Structures:2.3.1): Rex\'s-Additional-Structures-1.12.x-(v.2.3.1).jar ()
[17:04:02] [Server thread/DEBUG] [FML]: roguelike(Roguelike Dungeons:1.8.0): RoguelikeDungeons-1.12.2-1.8.0.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: rustic(Rustic:1.1.2): rustic-1.1.2.jar (after:dynamictrees@[1.12.2-0.9.1e,);after:dynamictreesbop;before:dynamictreestc)
[17:04:02] [Server thread/DEBUG] [FML]: simpleharvest(Simple Harvest:1.08): simpleharvest-1.08.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: uteamcore(U Team Core:**.**.**.**): u_team_core-1.12.2-2.2.5.147.jar (required:forge@[14.23.5.2768,))
[17:04:02] [Server thread/DEBUG] [FML]: usefulbackpacks(Useful Backpacks:**.**.**.**): useful_backpacks-1.12.2-1.5.1.42.jar (required:forge@[14.23.5.2768,);required-after:uteamcore@[**.**.**.**,);)
[17:04:02] [Server thread/DEBUG] [FML]: CashCraftAPI(API: CashCraftAPI:1.0): CashCraft-1.12.2-4.0.0.1.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: SecurityCraftAPI(API: SecurityCraftAPI:1.2.3): [1.12.2] SecurityCraft v1.8.16.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: journeymap|client-api-model(API: journeymap|client-api-model:1.4): journeymap-1.12.2-5.5.8.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: journeymap|client-api(API: journeymap|client-api:1.4): journeymap-1.12.2-5.5.8.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: journeymap|client-api-display(API: journeymap|client-api-display:1.4): journeymap-1.12.2-5.5.8.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: journeymap|client-api-event(API: journeymap|client-api-event:1.4): journeymap-1.12.2-5.5.8.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: journeymap|client-api-util(API: journeymap|client-api-util:1.4): journeymap-1.12.2-5.5.8.jar ()
[17:04:02] [Server thread/DEBUG] [FML]: Chisel-API(API: Chisel-API:0.0.1): Chisel-MC1.12.2-1.0.1.44.jar ()
[17:04:03] [Server thread/DEBUG] [FML]: Loading @Config anotation data
[17:04:03] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod minecraft
[17:04:03] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod minecraft
[17:04:03] [Server thread/DEBUG] [FML]: Bar Step: Construction - Minecraft took 0.021s
[17:04:03] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod mcp
[17:04:03] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod mcp
[17:04:03] [Server thread/DEBUG] [FML]: Bar Step: Construction - Minecraft Coder Pack took 0.005s
[17:04:03] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod FML
[17:04:04] [Server thread/TRACE] [FML]: Mod FML is using network checker : Invoking method checkModLists
[17:04:04] [Server thread/TRACE] [FML]: Testing mod FML to verify it accepts its own version in a remote connection
[17:04:04] [Server thread/TRACE] [FML]: The mod FML accepts its own version (**.**.**.**)
[17:04:04] [Server thread/INFO] [FML]: Attempting connection with missing mods [minecraft, mcp, FML, forge, securitycraft, appleskin, carryon, cashcraft, chisel, clumps, props, dynamictrees, emoticons, explorercraft, fastbench, futureminecraf, waila, ido, journeymap, mclib, additionalstructures, roguelike, rustic, simpleharvest, uteamcore, usefulbackpacks] at CLIENT
[17:04:04] [Server thread/INFO] [FML]: Attempting connection with missing mods [minecraft, mcp, FML, forge, securitycraft, appleskin, carryon, cashcraft, chisel, clumps, props, dynamictrees, emoticons, explorercraft, fastbench, futureminecraf, waila, ido, journeymap, mclib, additionalstructures, roguelike, rustic, simpleharvest, uteamcore, usefulbackpacks] at SERVER
[17:04:09] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod FML
[17:04:09] [Server thread/DEBUG] [FML]: Bar Step: Construction - Forge Mod Loader took 6.388s
[17:04:09] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod forge
[17:04:10] [Server thread/DEBUG] [forge]: Loading Vanilla annotations: sun.net.www.protocol.jar.JarURLConnection$JarURLInputStream@ff186b7
[17:04:10] [Server thread/DEBUG] [forge]: Preloading CrashReport Classes
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$10
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$11
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$12
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$13
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$14
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$2
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$3
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$4
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$5
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$6
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$7
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$8
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/Minecraft$9
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/multiplayer/WorldClient$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/multiplayer/WorldClient$2
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/multiplayer/WorldClient$3
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/multiplayer/WorldClient$4
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/particle/ParticleManager$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/particle/ParticleManager$2
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/particle/ParticleManager$3
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/particle/ParticleManager$4
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/EntityRenderer$2
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/EntityRenderer$3
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/EntityRenderer$4
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/RenderGlobal$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/RenderItem$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/RenderItem$2
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/RenderItem$3
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/RenderItem$4
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/texture/TextureAtlasSprite$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/texture/TextureManager$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/texture/TextureMap$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/texture/TextureMap$2
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/client/renderer/texture/TextureMap$3
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReport$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReport$2
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReport$3
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReport$4
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReport$5
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReport$6
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReport$7
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReportCategory$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReportCategory$2
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReportCategory$3
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReportCategory$4
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/crash/CrashReportCategory$5
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/entity/Entity$2
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/entity/Entity$3
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/entity/Entity$4
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/entity/Entity$5
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/entity/EntityTracker$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/entity/player/InventoryPlayer$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/nbt/NBTTagCompound$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/nbt/NBTTagCompound$2
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/network/NetHandlerPlayServer$3
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/network/NetworkSystem$6
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/server/MinecraftServer$2
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/server/MinecraftServer$3
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/server/dedicated/DedicatedServer$3
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/server/dedicated/DedicatedServer$4
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/server/integrated/IntegratedServer$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/server/integrated/IntegratedServer$2
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/tileentity/CommandBlockBaseLogic$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/tileentity/CommandBlockBaseLogic$2
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/tileentity/TileEntity$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/tileentity/TileEntity$2
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/tileentity/TileEntity$3
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/World$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/World$2
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/World$3
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/World$4
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/World$5
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/chunk/Chunk$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/gen/structure/MapGenStructure$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/gen/structure/MapGenStructure$2
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/gen/structure/MapGenStructure$3
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/storage/WorldInfo$10
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/storage/WorldInfo$2
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/storage/WorldInfo$3
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/storage/WorldInfo$4
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/storage/WorldInfo$5
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/storage/WorldInfo$6
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/storage/WorldInfo$7
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/storage/WorldInfo$8
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraft/world/storage/WorldInfo$9
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/common/util/TextTable
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/common/util/TextTable$Alignment
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/common/util/TextTable$Column
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/common/util/TextTable$Row
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/fml/client/SplashProgress$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/fml/client/SplashProgress$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/fml/common/FMLCommonHandler$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/fml/common/FMLCommonHandler$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/fml/common/ICrashCallable
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/fml/common/Loader$1
[17:04:10] [Server thread/DEBUG] [forge]: net/minecraftforge/fml/common/Loader$1
[17:04:10] [Server thread/TRACE] [FML]: Mod forge is using network checker : No network checking performed
[17:04:10] [Server thread/TRACE] [FML]: Testing mod forge to verify it accepts its own version in a remote connection
[17:04:10] [Server thread/TRACE] [FML]: The mod forge accepts its own version (14.23.5.2847)
[17:04:10] [Server thread/DEBUG] [FML]: Attempting to inject @Config classes into forge for type INSTANCE
[17:04:10] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod forge
[17:04:10] [Server thread/DEBUG] [FML]: Bar Step: Construction - Minecraft Forge took 0.685s
[17:04:10] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod securitycraft
[17:04:10] [Server thread/TRACE] [FML]: Mod securitycraft is using network checker : Accepting version v1.8.16
[17:04:10] [Server thread/TRACE] [FML]: Testing mod securitycraft to verify it accepts its own version in a remote connection
[17:04:10] [Server thread/TRACE] [FML]: The mod securitycraft accepts its own version (v1.8.16)
[17:04:10] [Server thread/DEBUG] [FML]: Attempting to inject @SidedProxy classes into securitycraft
[17:04:10] [Server thread/DEBUG] [FML]: Attempting to inject @EventBusSubscriber classes into the eventbus for securitycraft
[17:04:10] [Server thread/DEBUG] [FML]: Registering @EventBusSubscriber for net.geforcemods.securitycraft.RegistrationHandler for mod securitycraft
[17:04:11] [Server thread/DEBUG] [FML]: Injected @EventBusSubscriber class net.geforcemods.securitycraft.RegistrationHandler
[17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @Config classes into securitycraft for type INSTANCE
[17:04:11] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod securitycraft
[17:04:11] [Server thread/DEBUG] [FML]: Bar Step: Construction - SecurityCraft took 0.762s
[17:04:11] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod appleskin
[17:04:11] [Server thread/TRACE] [FML]: Mod appleskin is using network checker : No network checking performed
[17:04:11] [Server thread/TRACE] [FML]: Testing mod appleskin to verify it accepts its own version in a remote connection
[17:04:11] [Server thread/TRACE] [FML]: The mod appleskin accepts its own version (1.0.9)
[17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @SidedProxy classes into appleskin
[17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @EventBusSubscriber classes into the eventbus for appleskin
[17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @Config classes into appleskin for type INSTANCE
[17:04:11] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod appleskin
[17:04:11] [Server thread/DEBUG] [FML]: Bar Step: Construction - AppleSkin took 0.016s
[17:04:11] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod carryon
[17:04:11] [Server thread/TRACE] [FML]: Mod carryon is using network checker : Accepting version 1.12.3
[17:04:11] [Server thread/TRACE] [FML]: Testing mod carryon to verify it accepts its own version in a remote connection
[17:04:11] [Server thread/TRACE] [FML]: The mod carryon accepts its own version (1.12.3)
[17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @SidedProxy classes into carryon
[17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @EventBusSubscriber classes into the eventbus for carryon
[17:04:11] [Server thread/DEBUG] [FML]: Registering @EventBusSubscriber for tschipp.carryon.common.config.CarryOnConfig$EventHandler for mod carryon
[17:04:11] [Server thread/DEBUG] [FML]: Injected @EventBusSubscriber class tschipp.carryon.common.config.CarryOnConfig$EventHandler
[17:04:11] [Server thread/DEBUG] [FML]: Registering @EventBusSubscriber for tschipp.carryon.CarryOn for mod carryon
[17:04:11] [Server thread/DEBUG] [FML]: Injected @EventBusSubscriber class tschipp.carryon.CarryOn
[17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @Config classes into carryon for type INSTANCE
[17:04:11] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod carryon
[17:04:11] [Server thread/DEBUG] [FML]: Bar Step: Construction - Carry On took 0.436s
[17:04:11] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod cashcraft
[17:04:11] [Server thread/TRACE] [FML]: Mod cashcraft is using network checker : Accepting version mc1.12.2-4.0.0.1
[17:04:11] [Server thread/TRACE] [FML]: Testing mod cashcraft to verify it accepts its own version in a remote connection
[17:04:11] [Server thread/TRACE] [FML]: The mod cashcraft accepts its own version (mc1.12.2-4.0.0.1)
[17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @SidedProxy classes into cashcraft
[17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @EventBusSubscriber classes into the eventbus for cashcraft
[17:04:11] [Server thread/DEBUG] [FML]: Attempting to inject @Config classes into cashcraft for type INSTANCE
[17:04:11] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod cashcraft
[17:04:11] [Server thread/DEBUG] [FML]: Bar Step: Construction - CashCraft took 0.105s
[17:04:11] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod chisel
[17:04:12] [Server thread/TRACE] [FML]: Mod chisel is using network checker : Accepting version MC1.12.2-1.0.1.44
[17:04:12] [Server thread/TRACE] [FML]: Testing mod chisel to verify it accepts its own version in a remote connection
[17:04:12] [Server thread/TRACE] [FML]: The mod chisel accepts its own version (MC1.12.2-1.0.1.44)
[17:04:12] [Server thread/DEBUG] [FML]: Attempting to inject @SidedProxy classes into chisel
[17:04:12] [Server thread/DEBUG] [FML]: Attempting to inject @EventBusSubscriber classes into the eventbus for chisel
[17:04:12] [Server thread/DEBUG] [FML]: Registering @EventBusSubscriber for team.chisel.common.block.BreakSpeedHandler for mod chisel
[17:04:12] [Server thread/DEBUG] [FML]: Injected @EventBusSubscriber class team.chisel.common.block.BreakSpeedHandler
[17:04:12] [Server thread/DEBUG] [FML]: Registering @EventBusSubscriber for team.chisel.Features for mod chisel
[17:04:13] [Server thread/DEBUG] [FML]: Injected @EventBusSubscriber class team.chisel.Features
[17:04:13] [Server thread/DEBUG] [FML]: Attempting to inject @Config classes into chisel for type INSTANCE
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod chisel
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: Construction - Chisel took 1.519s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod clumps
[17:04:13] [Server thread/TRACE] [FML]: Mod clumps is using network checker : Accepting version 3.1.2
[17:04:13] [Server thread/TRACE] [FML]: Testing mod clumps to verify it accepts its own version in a remote connection
[17:04:13] [Server thread/TRACE] [FML]: The mod clumps accepts its own version (3.1.2)
[17:04:13] [Server thread/DEBUG] [FML]: Attempting to inject @SidedProxy classes into clumps
[17:04:13] [Server thread/DEBUG] [FML]: Attempting to inject @EventBusSubscriber classes into the eventbus for clumps
[17:04:13] [Server thread/DEBUG] [FML]: Attempting to inject @Config classes into clumps for type INSTANCE
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLConstructionEvent to mod clumps
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: Construction - Clumps took 0.041s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLConstructionEvent to mod props
[17:04:13] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: Encountered an unexpected exception
java.lang.NoClassDefFoundError: com/mia/craftstudio/IPackReaderCallback
at java.lang.Class.forName0(Native Method) ~[?:1.8.0_232]
at java.lang.Class.forName(Class.java:348) ~[?:1.8.0_232]
at net.minecraftforge.fml.common.FMLModContainer.constructMod(FMLModContainer.java:539) ~[forge.jar:?]
at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_232]
at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_232]
at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_232]
at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_232]
at com.google.common.eventbus.Subscriber.invokeSubscriberMethod(Subscriber.java:91) ~[minecraft_server.1.12.2.jar:?]
at com.google.common.eventbus.Subscriber$SynchronizedSubscriber.invokeSubscriberMethod(Subscriber.java:150) ~[minecraft_server.1.12.2.jar:?]
at com.google.common.eventbus.Subscriber$1.run(Subscriber.java:76) ~[minecraft_server.1.12.2.jar:?]
at com.google.common.util.concurrent.MoreExecutors$DirectExecutor.execute(MoreExecutors.java:399) ~[minecraft_server.1.12.2.jar:?]
at com.google.common.eventbus.Subscriber.dispatchEvent(Subscriber.java:71) ~[minecraft_server.1.12.2.jar:?]
at com.google.common.eventbus.Dispatcher$PerThreadQueuedDispatcher.dispatch(Dispatcher.java:116) ~[minecraft_server.1.12.2.jar:?]
at com.google.common.eventbus.EventBus.post(EventBus.java:217) ~[minecraft_server.1.12.2.jar:?]
at net.minecraftforge.fml.common.LoadController.sendEventToModContainer(LoadController.java:219) ~[forge.jar:?]
at net.minecraftforge.fml.common.LoadController.propogateStateMessage(LoadController.java:197) ~[forge.jar:?]
at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_232]
at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_232]
at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_232]
at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_232]
at com.google.common.eventbus.Subscriber.invokeSubscriberMethod(Subscriber.java:91) ~[minecraft_server.1.12.2.jar:?]
at com.google.common.eventbus.Subscriber$SynchronizedSubscriber.invokeSubscriberMethod(Subscriber.java:150) ~[minecraft_server.1.12.2.jar:?]
at com.google.common.eventbus.Subscriber$1.run(Subscriber.java:76) ~[minecraft_server.1.12.2.jar:?]
at com.google.common.util.concurrent.MoreExecutors$DirectExecutor.execute(MoreExecutors.java:399) ~[minecraft_server.1.12.2.jar:?]
at com.google.common.eventbus.Subscriber.dispatchEvent(Subscriber.java:71) ~[minecraft_server.1.12.2.jar:?]
at com.google.common.eventbus.Dispatcher$PerThreadQueuedDispatcher.dispatch(Dispatcher.java:116) ~[minecraft_server.1.12.2.jar:?]
at com.google.common.eventbus.EventBus.post(EventBus.java:217) ~[minecraft_server.1.12.2.jar:?]
at net.minecraftforge.fml.common.LoadController.distributeStateMessage(LoadController.java:136) ~[LoadController.class:?]
at net.minecraftforge.fml.common.Loader.loadMods(Loader.java:595) ~[Loader.class:?]
at net.minecraftforge.fml.server.FMLServerHandler.beginServerLoading(FMLServerHandler.java:98) ~[FMLServerHandler.class:?]
at net.minecraftforge.fml.common.FMLCommonHandler.onServerStart(FMLCommonHandler.java:333) ~[FMLCommonHandler.class:?]
at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:125) ~[nz.class:?]
at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:486) [MinecraftServer.class:?]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_232]
Caused by: java.lang.ClassNotFoundException: com.mia.craftstudio.IPackReaderCallback
at net.minecraft.launchwrapper.LaunchClassLoader.findClass(LaunchClassLoader.java:191) ~[launchwrapper-1.12.jar:?]
at java.lang.ClassLoader.loadClass(ClassLoader.java:418) ~[?:1.8.0_232]
at java.lang.ClassLoader.loadClass(ClassLoader.java:351) ~[?:1.8.0_232]
... 34 more
Caused by: java.lang.NullPointerException
at net.minecraft.launchwrapper.LaunchClassLoader.findClass(LaunchClassLoader.java:182) ~[launchwrapper-1.12.jar:?]
at java.lang.ClassLoader.loadClass(ClassLoader.java:418) ~[?:1.8.0_232]
at java.lang.ClassLoader.loadClass(ClassLoader.java:351) ~[?:1.8.0_232]
... 34 more
[17:04:13] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2020-02-03_17.04.13-server.txt
[17:04:13] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
[17:04:13] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving worlds
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod minecraft
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod minecraft
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Minecraft took 0.001s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod mcp
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod mcp
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Minecraft Coder Pack took 0.008s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod FML
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod FML
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Forge Mod Loader took 0.003s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod forge
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod forge
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Minecraft Forge took 0.001s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod securitycraft
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod securitycraft
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - SecurityCraft took 0.003s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod appleskin
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod appleskin
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - AppleSkin took 0.002s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod carryon
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod carryon
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Carry On took 0.002s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod cashcraft
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod cashcraft
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - CashCraft took 0.001s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod chisel
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod chisel
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Chisel took 0.049s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod clumps
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod clumps
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Clumps took 0.000s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod props
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod props
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Decocraft took 0.001s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod dynamictrees
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod dynamictrees
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Dynamic Trees took 0.001s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod mclib
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod mclib
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - McLib took 0.000s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod emoticons
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod emoticons
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Emoticons took 0.000s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod explorercraft
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod explorercraft
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - ExplorerCraft took 0.001s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod fastbench
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod fastbench
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - FastWorkbench took 0.000s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod futureminecraf
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod futureminecraf
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Future Versions took 0.000s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod waila
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod waila
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Waila took 0.000s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod ido
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod ido
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Ido - 1.12 movement enhancement took 0.000s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod journeymap
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod journeymap
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - JourneyMap took 0.000s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod additionalstructures
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod additionalstructures
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Rex\'s Additional Structures took 0.000s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod roguelike
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod roguelike
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Roguelike Dungeons took 0.000s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod rustic
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod rustic
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Rustic took 0.000s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod simpleharvest
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod simpleharvest
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Simple Harvest took 0.001s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod uteamcore
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod uteamcore
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - U Team Core took 0.001s
[17:04:13] [Server thread/TRACE] [FML]: Sending event FMLServerStoppedEvent to mod usefulbackpacks
[17:04:13] [Server thread/TRACE] [FML]: Sent event FMLServerStoppedEvent to mod usefulbackpacks
[17:04:13] [Server thread/DEBUG] [FML]: Bar Step: ServerStopped - Useful Backpacks took 0.001s
[17:04:13] [Server thread/DEBUG] [FML]: Bar Finished: ServerStopped took 0.079s
[17:04:13] [Server thread/INFO] [FML]: The state engine was in incorrect state PREINITIALIZATION and forced into state SERVER_STOPPED. Errors may have been discarded.
[17:04:13] [Server Shutdown Thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
[17:04:13] [Server Shutdown Thread/INFO] [net.minecraft.server.MinecraftServer]: Saving worlds
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
                            [prefix:protected] => [17:03:51] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [17:03:51] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: Starting minecraft server version 1.12.2
                                            [number:protected] => 178
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
                    [value:protected] => 14.23.5.2847
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [17:03:51] [Server thread/INFO] [FML]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [17:03:51] [Server thread/INFO] [FML]: MinecraftForge v14.23.5.2847 Initialized
                                            [number:protected] => 179
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\PTRLibDependencyProblem Object
                (
                    [modName:protected] => PTRLib
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 
                                    [modName:protected] => PTRLib
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [17:04:13] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [17:04:13] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: Encountered an unexpected exception
                                            [number:protected] => 607
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => java.lang.NoClassDefFoundError: com/mia/craftstudio/IPackReaderCallback
                                            [number:protected] => 608
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.Class.forName0(Native Method) ~[?:1.8.0_232]
                                            [number:protected] => 609
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.Class.forName(Class.java:348) ~[?:1.8.0_232]
                                            [number:protected] => 610
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.common.FMLModContainer.constructMod(FMLModContainer.java:539) ~[forge.jar:?]
                                            [number:protected] => 611
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_232]
                                            [number:protected] => 612
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_232]
                                            [number:protected] => 613
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_232]
                                            [number:protected] => 614
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_232]
                                            [number:protected] => 615
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.Subscriber.invokeSubscriberMethod(Subscriber.java:91) ~[minecraft_server.1.12.2.jar:?]
                                            [number:protected] => 616
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.Subscriber$SynchronizedSubscriber.invokeSubscriberMethod(Subscriber.java:150) ~[minecraft_server.1.12.2.jar:?]
                                            [number:protected] => 617
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.Subscriber$1.run(Subscriber.java:76) ~[minecraft_server.1.12.2.jar:?]
                                            [number:protected] => 618
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.util.concurrent.MoreExecutors$DirectExecutor.execute(MoreExecutors.java:399) ~[minecraft_server.1.12.2.jar:?]
                                            [number:protected] => 619
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.Subscriber.dispatchEvent(Subscriber.java:71) ~[minecraft_server.1.12.2.jar:?]
                                            [number:protected] => 620
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.Dispatcher$PerThreadQueuedDispatcher.dispatch(Dispatcher.java:116) ~[minecraft_server.1.12.2.jar:?]
                                            [number:protected] => 621
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.EventBus.post(EventBus.java:217) ~[minecraft_server.1.12.2.jar:?]
                                            [number:protected] => 622
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.common.LoadController.sendEventToModContainer(LoadController.java:219) ~[forge.jar:?]
                                            [number:protected] => 623
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.common.LoadController.propogateStateMessage(LoadController.java:197) ~[forge.jar:?]
                                            [number:protected] => 624
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method) ~[?:1.8.0_232]
                                            [number:protected] => 625
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at sun.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:62) ~[?:1.8.0_232]
                                            [number:protected] => 626
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43) ~[?:1.8.0_232]
                                            [number:protected] => 627
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.reflect.Method.invoke(Method.java:498) ~[?:1.8.0_232]
                                            [number:protected] => 628
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.Subscriber.invokeSubscriberMethod(Subscriber.java:91) ~[minecraft_server.1.12.2.jar:?]
                                            [number:protected] => 629
                                        )

                                    [23] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.Subscriber$SynchronizedSubscriber.invokeSubscriberMethod(Subscriber.java:150) ~[minecraft_server.1.12.2.jar:?]
                                            [number:protected] => 630
                                        )

                                    [24] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.Subscriber$1.run(Subscriber.java:76) ~[minecraft_server.1.12.2.jar:?]
                                            [number:protected] => 631
                                        )

                                    [25] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.util.concurrent.MoreExecutors$DirectExecutor.execute(MoreExecutors.java:399) ~[minecraft_server.1.12.2.jar:?]
                                            [number:protected] => 632
                                        )

                                    [26] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.Subscriber.dispatchEvent(Subscriber.java:71) ~[minecraft_server.1.12.2.jar:?]
                                            [number:protected] => 633
                                        )

                                    [27] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.Dispatcher$PerThreadQueuedDispatcher.dispatch(Dispatcher.java:116) ~[minecraft_server.1.12.2.jar:?]
                                            [number:protected] => 634
                                        )

                                    [28] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.google.common.eventbus.EventBus.post(EventBus.java:217) ~[minecraft_server.1.12.2.jar:?]
                                            [number:protected] => 635
                                        )

                                    [29] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.common.LoadController.distributeStateMessage(LoadController.java:136) ~[LoadController.class:?]
                                            [number:protected] => 636
                                        )

                                    [30] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.common.Loader.loadMods(Loader.java:595) ~[Loader.class:?]
                                            [number:protected] => 637
                                        )

                                    [31] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.server.FMLServerHandler.beginServerLoading(FMLServerHandler.java:98) ~[FMLServerHandler.class:?]
                                            [number:protected] => 638
                                        )

                                    [32] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraftforge.fml.common.FMLCommonHandler.onServerStart(FMLCommonHandler.java:333) ~[FMLCommonHandler.class:?]
                                            [number:protected] => 639
                                        )

                                    [33] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.dedicated.DedicatedServer.func_71197_b(DedicatedServer.java:125) ~[nz.class:?]
                                            [number:protected] => 640
                                        )

                                    [34] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:486) [MinecraftServer.class:?]
                                            [number:protected] => 641
                                        )

                                    [35] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_232]
                                            [number:protected] => 642
                                        )

                                    [36] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Caused by: java.lang.ClassNotFoundException: com.mia.craftstudio.IPackReaderCallback
                                            [number:protected] => 643
                                        )

                                    [37] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.launchwrapper.LaunchClassLoader.findClass(LaunchClassLoader.java:191) ~[launchwrapper-1.12.jar:?]
                                            [number:protected] => 644
                                        )

                                    [38] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:418) ~[?:1.8.0_232]
                                            [number:protected] => 645
                                        )

                                    [39] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:351) ~[?:1.8.0_232]
                                            [number:protected] => 646
                                        )

                                    [40] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => ... 34 more
                                            [number:protected] => 647
                                        )

                                    [41] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Caused by: java.lang.NullPointerException
                                            [number:protected] => 648
                                        )

                                    [42] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.launchwrapper.LaunchClassLoader.findClass(LaunchClassLoader.java:182) ~[launchwrapper-1.12.jar:?]
                                            [number:protected] => 649
                                        )

                                    [43] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:418) ~[?:1.8.0_232]
                                            [number:protected] => 650
                                        )

                                    [44] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.ClassLoader.loadClass(ClassLoader.java:351) ~[?:1.8.0_232]
                                            [number:protected] => 651
                                        )

                                    [45] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => ... 34 more
                                            [number:protected] => 652
                                        )

                                )

                            [level:protected] => ERROR
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

        $this->assertEquals("Forge version: 14.23.5.2847", $analysis[1]->getMessage());

        $this->assertEquals("A mod is missing the required mod PTRLib.", $analysis[2]->getMessage());
        $this->assertEquals("Install the mod 'PTRLib'.", $analysis[2][0]->getMessage());

    }
}