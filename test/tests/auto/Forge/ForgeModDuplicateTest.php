<?php

class ForgeModDuplicateTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-mod-duplicate.log");
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
                                    [text:protected] => [22:32:19] [main/DEBUG] [FML/]: Injecting tracing printstreams for STDOUT/STDERR.
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:19] [main/DEBUG] [FML/]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/INFO] [FML/]: Forge Mod Loader version 7.99.40.1614 for Minecraft 1.7.10 loading
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/INFO] [FML/]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/INFO] [FML/]: Java is Java HotSpot(TM) 64-Bit Server VM, version 1.8.0_144, running on Linux:amd64:4.4.0-141-generic, installed at /aternos/bin/jdk1.8.0_144/jre
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/INFO] [FML/]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Java classpath at launch is forge.jar
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Java library path at launch is /usr/java/packages/lib/amd64:/usr/lib64:/lib64:/lib:/usr/lib
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Enabling runtime deobfuscation
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Instantiating coremod class FMLCorePlugin
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Added access transformer class cpw.mods.fml.common.asm.transformers.AccessTransformer to enqueued access transformers
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Enqueued coremod FMLCorePlugin
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Instantiating coremod class FMLForgePlugin
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Added access transformer class net.minecraftforge.transformers.ForgeAccessTransformer to enqueued access transformers
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Enqueued coremod FMLForgePlugin
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: All fundamental core mods are successfully located
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Attempting to load commandline specified mods, relative to /aternos/server/.
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Discovering coremods
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Examining for coremod candidacy AoA-Tslat-1.1.3.jar
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Not found coremod data in AoA-Tslat-1.1.3.jar
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Examining for coremod candidacy Baubles-1.7.10-1.0.1.10.jar
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Not found coremod data in Baubles-1.7.10-1.0.1.10.jar
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Examining for coremod candidacy Baubles-1.7.10-1.0.1.10.jar
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Not found coremod data in Baubles-1.7.10-1.0.1.10.jar
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Examining for coremod candidacy BetterFps-1.0.1.jar
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/INFO] [FML/]: Loading tweaker me.guichaguri.betterfps.tweaker.BetterFpsTweaker from BetterFps-1.0.1.jar
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/INFO] [FML/]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Examining for coremod candidacy Bookshelf-1.7.10-1.0.4.187.jar
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/TRACE] [FML/]: Found FMLCorePluginContainsFMLMod marker in Bookshelf-1.7.10-1.0.4.187.jar, it will be examined later for regular @Mod instances
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/TRACE] [FML/]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Instantiating coremod class BookshelfLoadingPlugin
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: The coremod net.darkhax.bookshelf.asm.BookshelfLoadingPlugin requested minecraft version 1.7.10 and minecraft is 1.7.10. It will be loaded.
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Enqueued coremod BookshelfLoadingPlugin
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Examining for coremod candidacy ChestTransporter-1.7.10-2.0.6.jar
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Not found coremod data in ChestTransporter-1.7.10-2.0.6.jar
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Examining for coremod candidacy CodeChickenCore-1.7.10-1.0.7.47-universal.jar
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/TRACE] [FML/]: Adding CodeChickenCore-1.7.10-1.0.7.47-universal.jar to the list of known coremods, it will not be examined again
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/TRACE] [FML/]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:20] [main/DEBUG] [FML/]: Instantiating coremod class CodeChickenCorePlugin
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:20] [main/DEBUG] [FML/]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/WARN] [FML/]: The coremod codechicken.core.launch.CodeChickenCorePlugin does not have a MCVersion annotation, it may cause issues with this version of Minecraft
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/WARN] [FML/]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Added access transformer class codechicken.core.asm.CodeChickenAccessTransformer to enqueued access transformers
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Enqueued coremod CodeChickenCorePlugin
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy CodeChickenLib-1.7.10-1.1.3.138-universal.jar
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Not found coremod data in CodeChickenLib-1.7.10-1.1.3.138-universal.jar
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy EnchantingPlus-1.7.10-3.0.2-d.jar
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Not found coremod data in EnchantingPlus-1.7.10-3.0.2-d.jar
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy ForgeMultipart-1.7.10-1.2.0.345-universal.jar
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/TRACE] [FML/]: Found FMLCorePluginContainsFMLMod marker in ForgeMultipart-1.7.10-1.2.0.345-universal.jar, it will be examined later for regular @Mod instances
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/TRACE] [FML/]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Instantiating coremod class DepLoader
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/WARN] [FML/]: The coremod codechicken.core.launch.DepLoader does not have a MCVersion annotation, it may cause issues with this version of Minecraft
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/WARN] [FML/]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Enqueued coremod DepLoader
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy iChunUtil-4.2.3.jar
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Not found coremod data in iChunUtil-4.2.3.jar
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy InventoryTweaks-1.59-dev-152.jar
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/TRACE] [FML/]: Found FMLCorePluginContainsFMLMod marker in InventoryTweaks-1.59-dev-152.jar, it will be examined later for regular @Mod instances
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/TRACE] [FML/]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Instantiating coremod class FMLPlugin
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/WARN] [FML/]: The coremod invtweaks.forge.asm.FMLPlugin does not have a MCVersion annotation, it may cause issues with this version of Minecraft
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/WARN] [FML/]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Added access transformer class invtweaks.forge.asm.ITAccessTransformer to enqueued access transformers
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Enqueued coremod FMLPlugin
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy IronBackpacks-1.7.10-1.2.20.jar
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Not found coremod data in IronBackpacks-1.7.10-1.2.20.jar
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy ironchest-1.7.10-6.0.62.742-universal.jar
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Not found coremod data in ironchest-1.7.10-6.0.62.742-universal.jar
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy ironfurnaces-1.2.4R.jar
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Not found coremod data in ironfurnaces-1.2.4R.jar
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy journeymap-1.7.10-5.1.4p2-unlimited.jar
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Not found coremod data in journeymap-1.7.10-5.1.4p2-unlimited.jar
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy Morph-Beta-0.9.3.jar
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Not found coremod data in Morph-Beta-0.9.3.jar
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy Morpheus-1.7.10-1.6.21.jar
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Not found coremod data in Morpheus-1.7.10-1.6.21.jar
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy NaturesCompass-1.7.10-1.3.1.jar
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Not found coremod data in NaturesCompass-1.7.10-1.3.1.jar
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy netherportalfix-mc1.7.10-1.1.0.jar
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Not found coremod data in netherportalfix-mc1.7.10-1.1.0.jar
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy NotEnoughItems-1.7.10-1.0.5.120-universal.jar
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/TRACE] [FML/]: Adding NotEnoughItems-1.7.10-1.0.5.120-universal.jar to the list of known coremods, it will not be examined again
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/TRACE] [FML/]:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Instantiating coremod class NEICorePlugin
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/WARN] [FML/]: The coremod codechicken.nei.asm.NEICorePlugin does not have a MCVersion annotation, it may cause issues with this version of Minecraft
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/WARN] [FML/]:
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Enqueued coremod NEICorePlugin
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy OreExcavation-1.1.120.jar
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Not found coremod data in OreExcavation-1.1.120.jar
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/INFO] [LaunchWrapper/]: Loading tweak class name cpw.mods.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/INFO] [LaunchWrapper/]:
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/INFO] [LaunchWrapper/]: Loading tweak class name me.guichaguri.betterfps.tweaker.BetterFpsTweaker
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/INFO] [LaunchWrapper/]:
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/INFO] [LaunchWrapper/]: Loading tweak class name cpw.mods.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/INFO] [LaunchWrapper/]:
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/INFO] [LaunchWrapper/]:
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/INFO] [LaunchWrapper/]:
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/INFO] [LaunchWrapper/]:
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Injecting coremod FMLCorePlugin {cpw.mods.fml.relauncher.FMLCorePlugin} class transformers
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/TRACE] [FML/]: Registering transformer cpw.mods.fml.common.asm.transformers.MarkerTransformer
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/TRACE] [FML/]:
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/TRACE] [FML/]: Registering transformer cpw.mods.fml.common.asm.transformers.SideTransformer
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/TRACE] [FML/]:
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/TRACE] [FML/]: Registering transformer cpw.mods.fml.common.asm.transformers.EventSubscriptionTransformer
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/TRACE] [FML/]:
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Running coremod plugin for FMLCorePlugin {cpw.mods.fml.relauncher.FMLCorePlugin}
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:23] [main/DEBUG] [FML/]: Running coremod plugin FMLCorePlugin
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:23] [main/DEBUG] [FML/]:
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:26] [main/DEBUG] [FML/]: Read 527 binary patches
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:26] [main/DEBUG] [FML/]:
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/INFO] [FML/]: Found valid fingerprint for Minecraft Forge. Certificate fingerprint e3c3d50c7c986df74c645c0ac54639741c90a557
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/INFO] [FML/]:
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Coremod plugin class FMLCorePlugin run successfully
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/INFO] [LaunchWrapper/]:
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Injecting coremod FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin} class transformers
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.classloading.FluidIdTransformer
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/TRACE] [FML/]:
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Running coremod plugin for FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin}
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Running coremod plugin FMLForgePlugin
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Coremod plugin class FMLForgePlugin run successfully
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/INFO] [LaunchWrapper/]:
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Injecting coremod CCCDeobfPlugin {codechicken.core.asm.MCPDeobfuscationTransformer$LoadPlugin} class transformers
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Running coremod plugin for CCCDeobfPlugin {codechicken.core.asm.MCPDeobfuscationTransformer$LoadPlugin}
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Running coremod plugin CCCDeobfPlugin
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Coremod plugin class LoadPlugin run successfully
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/INFO] [LaunchWrapper/]:
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Injecting coremod CodeChickenCorePlugin {codechicken.core.launch.CodeChickenCorePlugin} class transformers
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/TRACE] [FML/]: Registering transformer codechicken.lib.asm.ClassHeirachyManager
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/TRACE] [FML/]:
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/TRACE] [FML/]: Registering transformer codechicken.core.asm.InterfaceDependancyTransformer
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/TRACE] [FML/]:
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/TRACE] [FML/]: Registering transformer codechicken.core.asm.TweakTransformer
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/TRACE] [FML/]:
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/TRACE] [FML/]: Registering transformer codechicken.core.asm.DelegatedTransformer
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/TRACE] [FML/]:
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/TRACE] [FML/]: Registering transformer codechicken.core.asm.DefaultImplementationTransformer
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/TRACE] [FML/]:
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Running coremod plugin for CodeChickenCorePlugin {codechicken.core.launch.CodeChickenCorePlugin}
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Running coremod plugin CodeChickenCorePlugin
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Coremod plugin class CodeChickenCorePlugin run successfully
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/INFO] [LaunchWrapper/]:
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Injecting coremod DepLoader {codechicken.core.launch.DepLoader} class transformers
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Running coremod plugin for DepLoader {codechicken.core.launch.DepLoader}
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Running coremod plugin DepLoader
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Coremod plugin class DepLoader run successfully
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/INFO] [LaunchWrapper/]:
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Injecting coremod FMLPlugin {invtweaks.forge.asm.FMLPlugin} class transformers
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/TRACE] [FML/]: Registering transformer invtweaks.forge.asm.ContainerTransformer
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/TRACE] [FML/]:
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Running coremod plugin for FMLPlugin {invtweaks.forge.asm.FMLPlugin}
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Running coremod plugin FMLPlugin
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Coremod plugin class FMLPlugin run successfully
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/INFO] [LaunchWrapper/]:
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Injecting coremod NEICorePlugin {codechicken.nei.asm.NEICorePlugin} class transformers
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/TRACE] [FML/]: Registering transformer codechicken.nei.asm.NEITransformer
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/TRACE] [FML/]:
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Running coremod plugin for NEICorePlugin {codechicken.nei.asm.NEICorePlugin}
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Running coremod plugin NEICorePlugin
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Coremod plugin class NEICorePlugin run successfully
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/INFO] [LaunchWrapper/]: Calling tweak class me.guichaguri.betterfps.tweaker.BetterFpsTweaker
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/INFO] [LaunchWrapper/]:
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/INFO] [LaunchWrapper/]:
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Loaded 57 rules from AccessTransformer config file fml_at.cfg
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Loaded 89 rules from AccessTransformer config file forge_at.cfg
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Loaded 57 rules from AccessTransformer config file fml_at.cfg
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Loaded 9 rules from AccessTransformer config file invtweaks_at.cfg
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Loaded 11 rules from AccessTransformer mod jar file /aternos/server/mods/NotEnoughItems-1.7.10-1.0.5.120-universal.jar!META-INF/nei_at.cfg
                                    [number:protected] => 143
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Loaded 3 rules from AccessTransformer mod jar file /aternos/server/mods/netherportalfix-mc1.7.10-1.1.0.jar!META-INF/netherportalfix_at.cfg
                                    [number:protected] => 145
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Loaded 60 rules from AccessTransformer mod jar file /aternos/server/mods/iChunUtil-4.2.3.jar!META-INF/iChunUtil_at.cfg
                                    [number:protected] => 147
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:28] [main/DEBUG] [FML/]: Validating minecraft
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:28] [main/DEBUG] [FML/]:
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:30] [main/DEBUG] [FML/]: Minecraft validated, launching...
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:30] [main/DEBUG] [FML/]:
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:30] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:30] [main/INFO] [LaunchWrapper/]:
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:30] [main/DEBUG] [FML/]: Injecting coremod BookshelfLoadingPlugin {net.darkhax.bookshelf.asm.BookshelfLoadingPlugin} class transformers
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:30] [main/DEBUG] [FML/]:
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:30] [main/INFO] [Bookshelf/]: Starting to apply transformations
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:30] [main/INFO] [Bookshelf/]:
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:30] [main/INFO] [Bookshelf/]: Starting to apply transformations
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:30] [main/INFO] [Bookshelf/]:
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:30] [main/TRACE] [FML/]: Registering transformer net.darkhax.bookshelf.asm.BookshelfTransformerManager
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:30] [main/TRACE] [FML/]:
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:30] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:30] [main/DEBUG] [FML/]:
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:30] [main/DEBUG] [FML/]: Running coremod plugin for BookshelfLoadingPlugin {net.darkhax.bookshelf.asm.BookshelfLoadingPlugin}
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:30] [main/DEBUG] [FML/]:
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:30] [main/DEBUG] [FML/]: Running coremod plugin BookshelfLoadingPlugin
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:30] [main/DEBUG] [FML/]:
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:30] [main/DEBUG] [FML/]: Coremod plugin class BookshelfLoadingPlugin run successfully
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:30] [main/DEBUG] [FML/]:
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:30] [main/INFO] [LaunchWrapper/]: Loading tweak class name cpw.mods.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:30] [main/INFO] [LaunchWrapper/]:
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:30] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:30] [main/INFO] [LaunchWrapper/]:
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:32] [main/INFO] [LaunchWrapper/]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:32] [main/INFO] [LaunchWrapper/]:
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:32] [main/DEBUG] [CCL ASM/]: Writing method [aji.canBeReplacedByLeaves(Lahl;III)Z]
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:32] [main/DEBUG] [CCL ASM/]:
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:34] [main/DEBUG] [CCL ASM/]: Injecting before method [dh.toString()Ljava/lang/String;] @ 51 - 55
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:34] [main/DEBUG] [CCL ASM/]:
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:34] [main/DEBUG] [CCL ASM/]: Injecting before method [dq.toString()Ljava/lang/String;] @ 56 - 60
                                    [number:protected] => 165
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:34] [main/DEBUG] [CCL ASM/]:
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:35] [main/INFO] [BetterFps/]: Patching Minecraft using Riven\'s "Half" Algorithm
                                    [number:protected] => 166
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:35] [main/INFO] [BetterFps/]:
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:38] [Server thread/INFO] [MinecraftForge/]: Attempting early MinecraftForge initialization
                                    [number:protected] => 167
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:38] [Server thread/INFO] [MinecraftForge/]:
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:38] [Server thread/INFO] [FML/]: MinecraftForge v10.13.4.1614 Initialized
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:38] [Server thread/INFO] [FML/]:
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/INFO] [FML/]: Replaced 183 ore recipies
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/INFO] [FML/]:
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/INFO] [MinecraftForge/]: Completed early MinecraftForge initialization
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/INFO] [MinecraftForge/]:
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: File /aternos/server/config/injectedDependencies.json not found. No dependencies injected
                                    [number:protected] => 171
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Building injected Mod Containers [cpw.mods.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer, codechicken.core.asm.CodeChickenCoreModContainer, codechicken.nei.NEIModContainer]
                                    [number:protected] => 172
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Attempting to load mods contained in the minecraft jar file and associated classes
                                    [number:protected] => 173
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/forge.jar, examining for mod candidates
                                    [number:protected] => 174
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/BetterFps-1.0.1.jar
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/TRACE] [FML/]:
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/Bookshelf-1.7.10-1.0.4.187.jar
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/TRACE] [FML/]:
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/CodeChickenCore-1.7.10-1.0.7.47-universal.jar
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/TRACE] [FML/]:
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/./mods/1.7.10/CodeChickenLib-1.7.10-1.1.3.138-universal.jar, examining for mod candidates
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/1.7.10/ForgeMultipart-1.7.10-1.2.0.345-universal.jar
                                    [number:protected] => 179
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/TRACE] [FML/]:
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/InventoryTweaks-1.59-dev-152.jar
                                    [number:protected] => 180
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/TRACE] [FML/]:
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/NotEnoughItems-1.7.10-1.0.5.120-universal.jar
                                    [number:protected] => 181
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/TRACE] [FML/]:
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Minecraft jar mods loaded successfully
                                    [number:protected] => 182
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [179] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/INFO] [FML/]: Found 0 mods from the command line. Injecting into mod discoverer
                                    [number:protected] => 183
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/INFO] [FML/]:
                )

            [180] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/INFO] [FML/]: Searching /aternos/server/mods for mods
                                    [number:protected] => 184
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/INFO] [FML/]:
                )

            [181] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate mod directory 1.7.10
                                    [number:protected] => 185
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [182] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file AoA-Tslat-1.1.3.jar
                                    [number:protected] => 186
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [183] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Baubles-1.7.10-1.0.1.10.jar
                                    [number:protected] => 187
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [184] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/TRACE] [FML/]: Skipping already parsed coremod or tweaker BetterFps-1.0.1.jar
                                    [number:protected] => 188
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/TRACE] [FML/]:
                )

            [185] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Bookshelf-1.7.10-1.0.4.187.jar
                                    [number:protected] => 189
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [186] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file ChestTransporter-1.7.10-2.0.6.jar
                                    [number:protected] => 190
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [187] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/TRACE] [FML/]: Skipping already parsed coremod or tweaker CodeChickenCore-1.7.10-1.0.7.47-universal.jar
                                    [number:protected] => 191
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/TRACE] [FML/]:
                )

            [188] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file EnchantingPlus-1.7.10-3.0.2-d.jar
                                    [number:protected] => 192
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [189] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file iChunUtil-4.2.3.jar
                                    [number:protected] => 193
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [190] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file InventoryTweaks-1.59-dev-152.jar
                                    [number:protected] => 194
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [191] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file IronBackpacks-1.7.10-1.2.20.jar
                                    [number:protected] => 195
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [192] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file ironchest-1.7.10-6.0.62.742-universal.jar
                                    [number:protected] => 196
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [193] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file ironfurnaces-1.2.4R.jar
                                    [number:protected] => 197
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [194] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file journeymap-1.7.10-5.1.4p2-unlimited.jar
                                    [number:protected] => 198
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [195] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Morph-Beta-0.9.3.jar
                                    [number:protected] => 199
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [196] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Morpheus-1.7.10-1.6.21.jar
                                    [number:protected] => 200
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [197] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file NaturesCompass-1.7.10-1.3.1.jar
                                    [number:protected] => 201
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [198] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file netherportalfix-mc1.7.10-1.1.0.jar
                                    [number:protected] => 202
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [199] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/TRACE] [FML/]: Skipping already parsed coremod or tweaker NotEnoughItems-1.7.10-1.0.5.120-universal.jar
                                    [number:protected] => 203
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/TRACE] [FML/]:
                )

            [200] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file OreExcavation-1.1.120.jar
                                    [number:protected] => 204
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [201] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/INFO] [FML/]: Also searching /aternos/server/mods/1.7.10 for mods
                                    [number:protected] => 205
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/INFO] [FML/]:
                )

            [202] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Baubles-1.7.10-1.0.1.10.jar
                                    [number:protected] => 206
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [203] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file CodeChickenLib-1.7.10-1.1.3.138-universal.jar
                                    [number:protected] => 207
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [204] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file ForgeMultipart-1.7.10-1.2.0.345-universal.jar
                                    [number:protected] => 208
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [205] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: Examining file forge.jar for potential mods
                                    [number:protected] => 209
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [206] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:39] [Server thread/DEBUG] [FML/]: The mod container forge.jar appears to be missing an mcmod.info file
                                    [number:protected] => 210
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:39] [Server thread/DEBUG] [FML/]:
                )

            [207] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:41] [Server thread/DEBUG] [FML/]: Examining file CodeChickenLib-1.7.10-1.1.3.138-universal.jar for potential mods
                                    [number:protected] => 211
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:41] [Server thread/DEBUG] [FML/]:
                )

            [208] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:41] [Server thread/DEBUG] [FML/]: The mod container CodeChickenLib-1.7.10-1.1.3.138-universal.jar appears to be missing an mcmod.info file
                                    [number:protected] => 212
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:41] [Server thread/DEBUG] [FML/]:
                )

            [209] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:41] [Server thread/DEBUG] [FML/]: Examining directory 1.7.10 for potential mods
                                    [number:protected] => 213
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:41] [Server thread/DEBUG] [FML/]:
                )

            [210] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:41] [Server thread/DEBUG] [FML/]: No mcmod.info file found in directory 1.7.10
                                    [number:protected] => 214
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:41] [Server thread/DEBUG] [FML/]:
                )

            [211] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:41] [Server thread/DEBUG] [FML/]: Examining file AoA-Tslat-1.1.3.jar for potential mods
                                    [number:protected] => 215
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:41] [Server thread/DEBUG] [FML/]:
                )

            [212] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:41] [Server thread/TRACE] [FML/]: Located mcmod.info file in file AoA-Tslat-1.1.3.jar
                                    [number:protected] => 216
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:41] [Server thread/TRACE] [FML/]:
                )

            [213] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:42] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (net.nevermine.common.nevermine) - loading
                                    [number:protected] => 217
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:42] [Server thread/DEBUG] [FML/]:
                )

            [214] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:42] [Server thread/TRACE] [nevermine/]: Parsed dependency info : [] [] []
                                    [number:protected] => 218
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:42] [Server thread/TRACE] [nevermine/]:
                )

            [215] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:44] [Server thread/DEBUG] [FML/]: Examining file Baubles-1.7.10-1.0.1.10.jar for potential mods
                                    [number:protected] => 219
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:44] [Server thread/DEBUG] [FML/]:
                )

            [216] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:44] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Baubles-1.7.10-1.0.1.10.jar
                                    [number:protected] => 220
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:44] [Server thread/TRACE] [FML/]:
                )

            [217] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (baubles.common.Baubles) - loading
                                    [number:protected] => 221
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [218] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [Baubles/]: Parsed dependency info : [Forge@[10.13.2,)] [Forge@[10.13.2,)] []
                                    [number:protected] => 222
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [Baubles/]:
                )

            [219] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Examining file Bookshelf-1.7.10-1.0.4.187.jar for potential mods
                                    [number:protected] => 223
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [220] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Bookshelf-1.7.10-1.0.4.187.jar
                                    [number:protected] => 224
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [FML/]:
                )

            [221] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (net.darkhax.bookshelf.Bookshelf) - loading
                                    [number:protected] => 225
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [222] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [bookshelf/]: Parsed dependency info : [] [] []
                                    [number:protected] => 226
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [bookshelf/]:
                )

            [223] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Examining file ChestTransporter-1.7.10-2.0.6.jar for potential mods
                                    [number:protected] => 227
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [224] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file ChestTransporter-1.7.10-2.0.6.jar
                                    [number:protected] => 228
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [FML/]:
                )

            [225] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (cubex2.mods.chesttransporter.ChestTransporter) - loading
                                    [number:protected] => 229
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [226] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [ChestTransporter/]: Parsed dependency info : [] [] []
                                    [number:protected] => 230
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [ChestTransporter/]:
                )

            [227] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Examining file EnchantingPlus-1.7.10-3.0.2-d.jar for potential mods
                                    [number:protected] => 231
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [228] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file EnchantingPlus-1.7.10-3.0.2-d.jar
                                    [number:protected] => 232
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [FML/]:
                )

            [229] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (com.aesireanempire.eplus.EnchantingPlus) - loading
                                    [number:protected] => 233
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [230] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [eplus/]: Parsed dependency info : [] [] []
                                    [number:protected] => 234
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [eplus/]:
                )

            [231] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Examining file iChunUtil-4.2.3.jar for potential mods
                                    [number:protected] => 235
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [232] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file iChunUtil-4.2.3.jar
                                    [number:protected] => 236
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [FML/]:
                )

            [233] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (ichun.common.iChunUtil) - loading
                                    [number:protected] => 237
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [234] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [iChunUtil/]: Parsed dependency info : [Forge@[10.13.2.1291,)] [Forge@[10.13.2.1291,)] []
                                    [number:protected] => 238
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [iChunUtil/]:
                )

            [235] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Examining file InventoryTweaks-1.59-dev-152.jar for potential mods
                                    [number:protected] => 239
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [236] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file InventoryTweaks-1.59-dev-152.jar
                                    [number:protected] => 240
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [FML/]:
                )

            [237] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (invtweaks.forge.InvTweaksMod) - loading
                                    [number:protected] => 241
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [238] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [inventorytweaks/]: Parsed dependency info : [FML@[7.2.0,), Forge@[10.12.1,)] [FML@[7.2.0,), Forge@[10.12.1,)] []
                                    [number:protected] => 242
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [inventorytweaks/]:
                )

            [239] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [inventorytweaks/]: Attempting to load the file version.properties from InventoryTweaks-1.59-dev-152.jar to locate a version number for inventorytweaks
                                    [number:protected] => 243
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [inventorytweaks/]:
                )

            [240] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [inventorytweaks/]: Found version 1.59-dev-152-cf6e263 for mod inventorytweaks in version.properties, using
                                    [number:protected] => 244
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [inventorytweaks/]:
                )

            [241] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Examining file IronBackpacks-1.7.10-1.2.20.jar for potential mods
                                    [number:protected] => 245
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [242] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file IronBackpacks-1.7.10-1.2.20.jar
                                    [number:protected] => 246
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [FML/]:
                )

            [243] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (main.ironbackpacks.IronBackpacks) - loading
                                    [number:protected] => 247
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [244] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [ironbackpacks/]: Parsed dependency info : [] [] []
                                    [number:protected] => 248
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [ironbackpacks/]:
                )

            [245] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Examining file ironchest-1.7.10-6.0.62.742-universal.jar for potential mods
                                    [number:protected] => 249
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [246] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file ironchest-1.7.10-6.0.62.742-universal.jar
                                    [number:protected] => 250
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [FML/]:
                )

            [247] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (cpw.mods.ironchest.IronChest) - loading
                                    [number:protected] => 251
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [248] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [IronChest/]: Parsed dependency info : [FML@[7.2,), Forge@[10.10,)] [Forge@[10.10,), FML@[7.2,)] []
                                    [number:protected] => 252
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [IronChest/]:
                )

            [249] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [IronChest/]: Attempting to load the file version.properties from ironchest-1.7.10-6.0.62.742-universal.jar to locate a version number for IronChest
                                    [number:protected] => 253
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [IronChest/]:
                )

            [250] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [IronChest/]: Found version **.**.**.** for mod IronChest in version.properties, using
                                    [number:protected] => 254
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [IronChest/]:
                )

            [251] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Examining file ironfurnaces-1.2.4R.jar for potential mods
                                    [number:protected] => 255
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [252] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file ironfurnaces-1.2.4R.jar
                                    [number:protected] => 256
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [FML/]:
                )

            [253] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (IronFurnaces) - loading
                                    [number:protected] => 257
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [254] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [ironfurnaces/]: Parsed dependency info : [] [] []
                                    [number:protected] => 258
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [ironfurnaces/]:
                )

            [255] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [ironfurnaces/]: Attempting to load the file version.properties from ironfurnaces-1.2.4R.jar to locate a version number for ironfurnaces
                                    [number:protected] => 259
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [ironfurnaces/]:
                )

            [256] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/WARN] [ironfurnaces/]: Mod ironfurnaces is missing the required element \'version\' and a version.properties file could not be found. Falling back to metadata version 1.2.4
                                    [number:protected] => 260
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/WARN] [ironfurnaces/]:
                )

            [257] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Examining file journeymap-1.7.10-5.1.4p2-unlimited.jar for potential mods
                                    [number:protected] => 261
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [258] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file journeymap-1.7.10-5.1.4p2-unlimited.jar
                                    [number:protected] => 262
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [FML/]:
                )

            [259] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (journeymap.common.Journeymap) - loading
                                    [number:protected] => 263
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [260] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [journeymap/]: Using mcmod dependency info : [Forge@[10.13.4.1558,)] [Forge@[10.13.4.1558,)] []
                                    [number:protected] => 264
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [journeymap/]:
                )

            [261] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Examining file Morph-Beta-0.9.3.jar for potential mods
                                    [number:protected] => 265
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [262] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Morph-Beta-0.9.3.jar
                                    [number:protected] => 266
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [FML/]:
                )

            [263] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (morph.common.Morph) - loading
                                    [number:protected] => 267
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [264] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [Morph/]: Parsed dependency info : [iChunUtil@[4.0.0,)] [iChunUtil@[4.0.0,)] []
                                    [number:protected] => 268
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [Morph/]:
                )

            [265] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Examining file Morpheus-1.7.10-1.6.21.jar for potential mods
                                    [number:protected] => 269
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [266] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Morpheus-1.7.10-1.6.21.jar
                                    [number:protected] => 270
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [FML/]:
                )

            [267] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (net.quetzi.morpheus.Morpheus) - loading
                                    [number:protected] => 271
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [268] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [Morpheus/]: Parsed dependency info : [] [] []
                                    [number:protected] => 272
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [Morpheus/]:
                )

            [269] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Examining file NaturesCompass-1.7.10-1.3.1.jar for potential mods
                                    [number:protected] => 273
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [270] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file NaturesCompass-1.7.10-1.3.1.jar
                                    [number:protected] => 274
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [FML/]:
                )

            [271] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (com.chaosthedude.naturescompass.NaturesCompass) - loading
                                    [number:protected] => 275
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [272] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [naturescompass/]: Parsed dependency info : [] [] []
                                    [number:protected] => 276
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [naturescompass/]:
                )

            [273] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Examining file netherportalfix-mc1.7.10-1.1.0.jar for potential mods
                                    [number:protected] => 277
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [274] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: The mod container netherportalfix-mc1.7.10-1.1.0.jar appears to be missing an mcmod.info file
                                    [number:protected] => 278
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [275] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (net.blay09.mods.netherportalfix.NetherPortalFix) - loading
                                    [number:protected] => 279
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [276] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [netherportalfix/]: Parsed dependency info : [] [] []
                                    [number:protected] => 280
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [netherportalfix/]:
                )

            [277] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [netherportalfix/]: Attempting to load the file version.properties from netherportalfix-mc1.7.10-1.1.0.jar to locate a version number for netherportalfix
                                    [number:protected] => 281
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [netherportalfix/]:
                )

            [278] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/WARN] [netherportalfix/]: Mod netherportalfix is missing the required element \'version\' and no fallback can be found. Substituting \'1.0\'.
                                    [number:protected] => 282
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/WARN] [netherportalfix/]:
                )

            [279] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Examining file OreExcavation-1.1.120.jar for potential mods
                                    [number:protected] => 283
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [280] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file OreExcavation-1.1.120.jar
                                    [number:protected] => 284
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [FML/]:
                )

            [281] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (oreexcavation.core.OreExcavation) - loading
                                    [number:protected] => 285
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [FML/]:
                )

            [282] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/TRACE] [oreexcavation/]: Parsed dependency info : [] [] []
                                    [number:protected] => 286
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/TRACE] [oreexcavation/]:
                )

            [283] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/DEBUG] [oreexcavation/]: Attempting to load the file version.properties from OreExcavation-1.1.120.jar to locate a version number for oreexcavation
                                    [number:protected] => 287
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/DEBUG] [oreexcavation/]:
                )

            [284] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:45] [Server thread/WARN] [oreexcavation/]: Mod oreexcavation is missing the required element \'version\' and a version.properties file could not be found. Falling back to metadata version 1.1.120
                                    [number:protected] => 288
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:45] [Server thread/WARN] [oreexcavation/]:
                )

            [285] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/DEBUG] [FML/]: Examining file Baubles-1.7.10-1.0.1.10.jar for potential mods
                                    [number:protected] => 289
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/DEBUG] [FML/]:
                )

            [286] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Baubles-1.7.10-1.0.1.10.jar
                                    [number:protected] => 290
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/TRACE] [FML/]:
                )

            [287] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (baubles.common.Baubles) - loading
                                    [number:protected] => 291
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/DEBUG] [FML/]:
                )

            [288] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/TRACE] [Baubles/]: Parsed dependency info : [Forge@[10.13.2,)] [Forge@[10.13.2,)] []
                                    [number:protected] => 292
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/TRACE] [Baubles/]:
                )

            [289] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/DEBUG] [FML/]: Examining file CodeChickenLib-1.7.10-1.1.3.138-universal.jar for potential mods
                                    [number:protected] => 293
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/DEBUG] [FML/]:
                )

            [290] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/DEBUG] [FML/]: The mod container CodeChickenLib-1.7.10-1.1.3.138-universal.jar appears to be missing an mcmod.info file
                                    [number:protected] => 294
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/DEBUG] [FML/]:
                )

            [291] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/DEBUG] [FML/]: Examining file ForgeMultipart-1.7.10-1.2.0.345-universal.jar for potential mods
                                    [number:protected] => 295
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/DEBUG] [FML/]:
                )

            [292] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/TRACE] [FML/]: Located mcmod.info file in file ForgeMultipart-1.7.10-1.2.0.345-universal.jar
                                    [number:protected] => 296
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/TRACE] [FML/]:
                )

            [293] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (codechicken.microblock.handler.MicroblockMod) - loading
                                    [number:protected] => 297
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/DEBUG] [FML/]:
                )

            [294] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/TRACE] [ForgeMicroblock/]: Parsed dependency info : [ForgeMultipart] [ForgeMultipart, *] []
                                    [number:protected] => 298
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/TRACE] [ForgeMicroblock/]:
                )

            [295] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/DEBUG] [ForgeMicroblock/]: Attempting to load the file version.properties from ForgeMultipart-1.7.10-1.2.0.345-universal.jar to locate a version number for ForgeMicroblock
                                    [number:protected] => 299
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/DEBUG] [ForgeMicroblock/]:
                )

            [296] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/WARN] [ForgeMicroblock/]: Mod ForgeMicroblock is missing the required element \'version\' and a version.properties file could not be found. Falling back to metadata version **.**.**.**
                                    [number:protected] => 300
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/WARN] [ForgeMicroblock/]:
                )

            [297] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (codechicken.multipart.handler.MultipartMod) - loading
                                    [number:protected] => 301
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/DEBUG] [FML/]:
                )

            [298] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/TRACE] [ForgeMultipart/]: Parsed dependency info : [] [] []
                                    [number:protected] => 302
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/TRACE] [ForgeMultipart/]:
                )

            [299] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/DEBUG] [ForgeMultipart/]: Attempting to load the file version.properties from ForgeMultipart-1.7.10-1.2.0.345-universal.jar to locate a version number for ForgeMultipart
                                    [number:protected] => 303
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/DEBUG] [ForgeMultipart/]:
                )

            [300] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/WARN] [ForgeMultipart/]: Mod ForgeMultipart is missing the required element \'version\' and a version.properties file could not be found. Falling back to metadata version **.**.**.**
                                    [number:protected] => 304
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/WARN] [ForgeMultipart/]:
                )

            [301] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (codechicken.multipart.minecraft.MinecraftMultipartMod) - loading
                                    [number:protected] => 305
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/DEBUG] [FML/]:
                )

            [302] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/TRACE] [McMultipart/]: Parsed dependency info : [] [] []
                                    [number:protected] => 306
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/TRACE] [McMultipart/]:
                )

            [303] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/DEBUG] [McMultipart/]: Attempting to load the file version.properties from ForgeMultipart-1.7.10-1.2.0.345-universal.jar to locate a version number for McMultipart
                                    [number:protected] => 307
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/DEBUG] [McMultipart/]:
                )

            [304] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/WARN] [McMultipart/]: Mod McMultipart is missing the required element \'version\' and a version.properties file could not be found. Falling back to metadata version **.**.**.**
                                    [number:protected] => 308
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/WARN] [McMultipart/]:
                )

            [305] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/ERROR] [FML/]: Found a duplicate mod Baubles at [/aternos/server/mods/1.7.10/Baubles-1.7.10-1.0.1.10.jar, /aternos/server/mods/Baubles-1.7.10-1.0.1.10.jar]
                                    [number:protected] => 309
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/ERROR] [FML/]:
                )

            [306] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/WARN] [FML/]: Can\'t revert to frozen GameData state without freezing first.
                                    [number:protected] => 310
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/WARN] [FML/]:
                )

            [307] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/INFO] [FML/]: Applying holder lookups
                                    [number:protected] => 311
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/INFO] [FML/]:
                )

            [308] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/INFO] [FML/]: Holder lookups applied
                                    [number:protected] => 312
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/INFO] [FML/]:
                )

            [309] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [22:32:46] [Server thread/INFO] [FML/]: The state engine was in incorrect state CONSTRUCTING and forced into state SERVER_STOPPED. Errors may have been discarded.
                                    [number:protected] => 313
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [22:32:46] [Server thread/INFO] [FML/]:
                )

        )

    [iterator:protected] => 310
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [22:32:19] [main/DEBUG] [FML/]: Injecting tracing printstreams for STDOUT/STDERR.
[22:32:20] [main/INFO] [FML/]: Forge Mod Loader version 7.99.40.1614 for Minecraft 1.7.10 loading
[22:32:20] [main/INFO] [FML/]: Java is Java HotSpot(TM) 64-Bit Server VM, version 1.8.0_144, running on Linux:amd64:4.4.0-141-generic, installed at /aternos/bin/jdk1.8.0_144/jre
[22:32:20] [main/DEBUG] [FML/]: Java classpath at launch is forge.jar
[22:32:20] [main/DEBUG] [FML/]: Java library path at launch is /usr/java/packages/lib/amd64:/usr/lib64:/lib64:/lib:/usr/lib
[22:32:20] [main/DEBUG] [FML/]: Enabling runtime deobfuscation
[22:32:20] [main/DEBUG] [FML/]: Instantiating coremod class FMLCorePlugin
[22:32:20] [main/DEBUG] [FML/]: Added access transformer class cpw.mods.fml.common.asm.transformers.AccessTransformer to enqueued access transformers
[22:32:20] [main/DEBUG] [FML/]: Enqueued coremod FMLCorePlugin
[22:32:20] [main/DEBUG] [FML/]: Instantiating coremod class FMLForgePlugin
[22:32:20] [main/DEBUG] [FML/]: Added access transformer class net.minecraftforge.transformers.ForgeAccessTransformer to enqueued access transformers
[22:32:20] [main/DEBUG] [FML/]: Enqueued coremod FMLForgePlugin
[22:32:20] [main/DEBUG] [FML/]: All fundamental core mods are successfully located
[22:32:20] [main/DEBUG] [FML/]: Attempting to load commandline specified mods, relative to /aternos/server/.
[22:32:20] [main/DEBUG] [FML/]: Discovering coremods
[22:32:20] [main/DEBUG] [FML/]: Examining for coremod candidacy AoA-Tslat-1.1.3.jar
[22:32:20] [main/DEBUG] [FML/]: Not found coremod data in AoA-Tslat-1.1.3.jar
[22:32:20] [main/DEBUG] [FML/]: Examining for coremod candidacy Baubles-1.7.10-1.0.1.10.jar
[22:32:20] [main/DEBUG] [FML/]: Not found coremod data in Baubles-1.7.10-1.0.1.10.jar
[22:32:20] [main/DEBUG] [FML/]: Examining for coremod candidacy Baubles-1.7.10-1.0.1.10.jar
[22:32:20] [main/DEBUG] [FML/]: Not found coremod data in Baubles-1.7.10-1.0.1.10.jar
[22:32:20] [main/DEBUG] [FML/]: Examining for coremod candidacy BetterFps-1.0.1.jar
[22:32:20] [main/INFO] [FML/]: Loading tweaker me.guichaguri.betterfps.tweaker.BetterFpsTweaker from BetterFps-1.0.1.jar
[22:32:20] [main/DEBUG] [FML/]: Examining for coremod candidacy Bookshelf-1.7.10-1.0.4.187.jar
[22:32:20] [main/TRACE] [FML/]: Found FMLCorePluginContainsFMLMod marker in Bookshelf-1.7.10-1.0.4.187.jar, it will be examined later for regular @Mod instances
[22:32:20] [main/DEBUG] [FML/]: Instantiating coremod class BookshelfLoadingPlugin
[22:32:20] [main/DEBUG] [FML/]: The coremod net.darkhax.bookshelf.asm.BookshelfLoadingPlugin requested minecraft version 1.7.10 and minecraft is 1.7.10. It will be loaded.
[22:32:20] [main/DEBUG] [FML/]: Enqueued coremod BookshelfLoadingPlugin
[22:32:20] [main/DEBUG] [FML/]: Examining for coremod candidacy ChestTransporter-1.7.10-2.0.6.jar
[22:32:20] [main/DEBUG] [FML/]: Not found coremod data in ChestTransporter-1.7.10-2.0.6.jar
[22:32:20] [main/DEBUG] [FML/]: Examining for coremod candidacy CodeChickenCore-1.7.10-1.0.7.47-universal.jar
[22:32:20] [main/TRACE] [FML/]: Adding CodeChickenCore-1.7.10-1.0.7.47-universal.jar to the list of known coremods, it will not be examined again
[22:32:20] [main/DEBUG] [FML/]: Instantiating coremod class CodeChickenCorePlugin
[22:32:23] [main/WARN] [FML/]: The coremod codechicken.core.launch.CodeChickenCorePlugin does not have a MCVersion annotation, it may cause issues with this version of Minecraft
[22:32:23] [main/DEBUG] [FML/]: Added access transformer class codechicken.core.asm.CodeChickenAccessTransformer to enqueued access transformers
[22:32:23] [main/DEBUG] [FML/]: Enqueued coremod CodeChickenCorePlugin
[22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy CodeChickenLib-1.7.10-1.1.3.138-universal.jar
[22:32:23] [main/DEBUG] [FML/]: Not found coremod data in CodeChickenLib-1.7.10-1.1.3.138-universal.jar
[22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy EnchantingPlus-1.7.10-3.0.2-d.jar
[22:32:23] [main/DEBUG] [FML/]: Not found coremod data in EnchantingPlus-1.7.10-3.0.2-d.jar
[22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy ForgeMultipart-1.7.10-1.2.0.345-universal.jar
[22:32:23] [main/TRACE] [FML/]: Found FMLCorePluginContainsFMLMod marker in ForgeMultipart-1.7.10-1.2.0.345-universal.jar, it will be examined later for regular @Mod instances
[22:32:23] [main/DEBUG] [FML/]: Instantiating coremod class DepLoader
[22:32:23] [main/WARN] [FML/]: The coremod codechicken.core.launch.DepLoader does not have a MCVersion annotation, it may cause issues with this version of Minecraft
[22:32:23] [main/DEBUG] [FML/]: Enqueued coremod DepLoader
[22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy iChunUtil-4.2.3.jar
[22:32:23] [main/DEBUG] [FML/]: Not found coremod data in iChunUtil-4.2.3.jar
[22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy InventoryTweaks-1.59-dev-152.jar
[22:32:23] [main/TRACE] [FML/]: Found FMLCorePluginContainsFMLMod marker in InventoryTweaks-1.59-dev-152.jar, it will be examined later for regular @Mod instances
[22:32:23] [main/DEBUG] [FML/]: Instantiating coremod class FMLPlugin
[22:32:23] [main/WARN] [FML/]: The coremod invtweaks.forge.asm.FMLPlugin does not have a MCVersion annotation, it may cause issues with this version of Minecraft
[22:32:23] [main/DEBUG] [FML/]: Added access transformer class invtweaks.forge.asm.ITAccessTransformer to enqueued access transformers
[22:32:23] [main/DEBUG] [FML/]: Enqueued coremod FMLPlugin
[22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy IronBackpacks-1.7.10-1.2.20.jar
[22:32:23] [main/DEBUG] [FML/]: Not found coremod data in IronBackpacks-1.7.10-1.2.20.jar
[22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy ironchest-1.7.10-6.0.62.742-universal.jar
[22:32:23] [main/DEBUG] [FML/]: Not found coremod data in ironchest-1.7.10-6.0.62.742-universal.jar
[22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy ironfurnaces-1.2.4R.jar
[22:32:23] [main/DEBUG] [FML/]: Not found coremod data in ironfurnaces-1.2.4R.jar
[22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy journeymap-1.7.10-5.1.4p2-unlimited.jar
[22:32:23] [main/DEBUG] [FML/]: Not found coremod data in journeymap-1.7.10-5.1.4p2-unlimited.jar
[22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy Morph-Beta-0.9.3.jar
[22:32:23] [main/DEBUG] [FML/]: Not found coremod data in Morph-Beta-0.9.3.jar
[22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy Morpheus-1.7.10-1.6.21.jar
[22:32:23] [main/DEBUG] [FML/]: Not found coremod data in Morpheus-1.7.10-1.6.21.jar
[22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy NaturesCompass-1.7.10-1.3.1.jar
[22:32:23] [main/DEBUG] [FML/]: Not found coremod data in NaturesCompass-1.7.10-1.3.1.jar
[22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy netherportalfix-mc1.7.10-1.1.0.jar
[22:32:23] [main/DEBUG] [FML/]: Not found coremod data in netherportalfix-mc1.7.10-1.1.0.jar
[22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy NotEnoughItems-1.7.10-1.0.5.120-universal.jar
[22:32:23] [main/TRACE] [FML/]: Adding NotEnoughItems-1.7.10-1.0.5.120-universal.jar to the list of known coremods, it will not be examined again
[22:32:23] [main/DEBUG] [FML/]: Instantiating coremod class NEICorePlugin
[22:32:23] [main/WARN] [FML/]: The coremod codechicken.nei.asm.NEICorePlugin does not have a MCVersion annotation, it may cause issues with this version of Minecraft
[22:32:23] [main/DEBUG] [FML/]: Enqueued coremod NEICorePlugin
[22:32:23] [main/DEBUG] [FML/]: Examining for coremod candidacy OreExcavation-1.1.120.jar
[22:32:23] [main/DEBUG] [FML/]: Not found coremod data in OreExcavation-1.1.120.jar
[22:32:23] [main/INFO] [LaunchWrapper/]: Loading tweak class name cpw.mods.fml.common.launcher.FMLInjectionAndSortingTweaker
[22:32:23] [main/INFO] [LaunchWrapper/]: Loading tweak class name me.guichaguri.betterfps.tweaker.BetterFpsTweaker
[22:32:23] [main/INFO] [LaunchWrapper/]: Loading tweak class name cpw.mods.fml.common.launcher.FMLDeobfTweaker
[22:32:23] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.FMLInjectionAndSortingTweaker
[22:32:23] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.FMLInjectionAndSortingTweaker
[22:32:23] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
[22:32:23] [main/DEBUG] [FML/]: Injecting coremod FMLCorePlugin {cpw.mods.fml.relauncher.FMLCorePlugin} class transformers
[22:32:23] [main/TRACE] [FML/]: Registering transformer cpw.mods.fml.common.asm.transformers.MarkerTransformer
[22:32:23] [main/TRACE] [FML/]: Registering transformer cpw.mods.fml.common.asm.transformers.SideTransformer
[22:32:23] [main/TRACE] [FML/]: Registering transformer cpw.mods.fml.common.asm.transformers.EventSubscriptionTransformer
[22:32:23] [main/DEBUG] [FML/]: Injection complete
[22:32:23] [main/DEBUG] [FML/]: Running coremod plugin for FMLCorePlugin {cpw.mods.fml.relauncher.FMLCorePlugin}
[22:32:23] [main/DEBUG] [FML/]: Running coremod plugin FMLCorePlugin
[22:32:26] [main/DEBUG] [FML/]: Read 527 binary patches
[22:32:28] [main/INFO] [FML/]: Found valid fingerprint for Minecraft Forge. Certificate fingerprint e3c3d50c7c986df74c645c0ac54639741c90a557
[22:32:28] [main/DEBUG] [FML/]: Coremod plugin class FMLCorePlugin run successfully
[22:32:28] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
[22:32:28] [main/DEBUG] [FML/]: Injecting coremod FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin} class transformers
[22:32:28] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.classloading.FluidIdTransformer
[22:32:28] [main/DEBUG] [FML/]: Injection complete
[22:32:28] [main/DEBUG] [FML/]: Running coremod plugin for FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin}
[22:32:28] [main/DEBUG] [FML/]: Running coremod plugin FMLForgePlugin
[22:32:28] [main/DEBUG] [FML/]: Coremod plugin class FMLForgePlugin run successfully
[22:32:28] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
[22:32:28] [main/DEBUG] [FML/]: Injecting coremod CCCDeobfPlugin {codechicken.core.asm.MCPDeobfuscationTransformer$LoadPlugin} class transformers
[22:32:28] [main/DEBUG] [FML/]: Injection complete
[22:32:28] [main/DEBUG] [FML/]: Running coremod plugin for CCCDeobfPlugin {codechicken.core.asm.MCPDeobfuscationTransformer$LoadPlugin}
[22:32:28] [main/DEBUG] [FML/]: Running coremod plugin CCCDeobfPlugin
[22:32:28] [main/DEBUG] [FML/]: Coremod plugin class LoadPlugin run successfully
[22:32:28] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
[22:32:28] [main/DEBUG] [FML/]: Injecting coremod CodeChickenCorePlugin {codechicken.core.launch.CodeChickenCorePlugin} class transformers
[22:32:28] [main/TRACE] [FML/]: Registering transformer codechicken.lib.asm.ClassHeirachyManager
[22:32:28] [main/TRACE] [FML/]: Registering transformer codechicken.core.asm.InterfaceDependancyTransformer
[22:32:28] [main/TRACE] [FML/]: Registering transformer codechicken.core.asm.TweakTransformer
[22:32:28] [main/TRACE] [FML/]: Registering transformer codechicken.core.asm.DelegatedTransformer
[22:32:28] [main/TRACE] [FML/]: Registering transformer codechicken.core.asm.DefaultImplementationTransformer
[22:32:28] [main/DEBUG] [FML/]: Injection complete
[22:32:28] [main/DEBUG] [FML/]: Running coremod plugin for CodeChickenCorePlugin {codechicken.core.launch.CodeChickenCorePlugin}
[22:32:28] [main/DEBUG] [FML/]: Running coremod plugin CodeChickenCorePlugin
[22:32:28] [main/DEBUG] [FML/]: Coremod plugin class CodeChickenCorePlugin run successfully
[22:32:28] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
[22:32:28] [main/DEBUG] [FML/]: Injecting coremod DepLoader {codechicken.core.launch.DepLoader} class transformers
[22:32:28] [main/DEBUG] [FML/]: Injection complete
[22:32:28] [main/DEBUG] [FML/]: Running coremod plugin for DepLoader {codechicken.core.launch.DepLoader}
[22:32:28] [main/DEBUG] [FML/]: Running coremod plugin DepLoader
[22:32:28] [main/DEBUG] [FML/]: Coremod plugin class DepLoader run successfully
[22:32:28] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
[22:32:28] [main/DEBUG] [FML/]: Injecting coremod FMLPlugin {invtweaks.forge.asm.FMLPlugin} class transformers
[22:32:28] [main/TRACE] [FML/]: Registering transformer invtweaks.forge.asm.ContainerTransformer
[22:32:28] [main/DEBUG] [FML/]: Injection complete
[22:32:28] [main/DEBUG] [FML/]: Running coremod plugin for FMLPlugin {invtweaks.forge.asm.FMLPlugin}
[22:32:28] [main/DEBUG] [FML/]: Running coremod plugin FMLPlugin
[22:32:28] [main/DEBUG] [FML/]: Coremod plugin class FMLPlugin run successfully
[22:32:28] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
[22:32:28] [main/DEBUG] [FML/]: Injecting coremod NEICorePlugin {codechicken.nei.asm.NEICorePlugin} class transformers
[22:32:28] [main/TRACE] [FML/]: Registering transformer codechicken.nei.asm.NEITransformer
[22:32:28] [main/DEBUG] [FML/]: Injection complete
[22:32:28] [main/DEBUG] [FML/]: Running coremod plugin for NEICorePlugin {codechicken.nei.asm.NEICorePlugin}
[22:32:28] [main/DEBUG] [FML/]: Running coremod plugin NEICorePlugin
[22:32:28] [main/DEBUG] [FML/]: Coremod plugin class NEICorePlugin run successfully
[22:32:28] [main/INFO] [LaunchWrapper/]: Calling tweak class me.guichaguri.betterfps.tweaker.BetterFpsTweaker
[22:32:28] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.FMLDeobfTweaker
[22:32:28] [main/DEBUG] [FML/]: Loaded 57 rules from AccessTransformer config file fml_at.cfg
[22:32:28] [main/DEBUG] [FML/]: Loaded 89 rules from AccessTransformer config file forge_at.cfg
[22:32:28] [main/DEBUG] [FML/]: Loaded 57 rules from AccessTransformer config file fml_at.cfg
[22:32:28] [main/DEBUG] [FML/]: Loaded 9 rules from AccessTransformer config file invtweaks_at.cfg
[22:32:28] [main/DEBUG] [FML/]: Loaded 11 rules from AccessTransformer mod jar file /aternos/server/mods/NotEnoughItems-1.7.10-1.0.5.120-universal.jar!META-INF/nei_at.cfg

[22:32:28] [main/DEBUG] [FML/]: Loaded 3 rules from AccessTransformer mod jar file /aternos/server/mods/netherportalfix-mc1.7.10-1.1.0.jar!META-INF/netherportalfix_at.cfg

[22:32:28] [main/DEBUG] [FML/]: Loaded 60 rules from AccessTransformer mod jar file /aternos/server/mods/iChunUtil-4.2.3.jar!META-INF/iChunUtil_at.cfg

[22:32:28] [main/DEBUG] [FML/]: Validating minecraft
[22:32:30] [main/DEBUG] [FML/]: Minecraft validated, launching...
[22:32:30] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
[22:32:30] [main/DEBUG] [FML/]: Injecting coremod BookshelfLoadingPlugin {net.darkhax.bookshelf.asm.BookshelfLoadingPlugin} class transformers
[22:32:30] [main/INFO] [Bookshelf/]: Starting to apply transformations
[22:32:30] [main/INFO] [Bookshelf/]: Starting to apply transformations
[22:32:30] [main/TRACE] [FML/]: Registering transformer net.darkhax.bookshelf.asm.BookshelfTransformerManager
[22:32:30] [main/DEBUG] [FML/]: Injection complete
[22:32:30] [main/DEBUG] [FML/]: Running coremod plugin for BookshelfLoadingPlugin {net.darkhax.bookshelf.asm.BookshelfLoadingPlugin}
[22:32:30] [main/DEBUG] [FML/]: Running coremod plugin BookshelfLoadingPlugin
[22:32:30] [main/DEBUG] [FML/]: Coremod plugin class BookshelfLoadingPlugin run successfully
[22:32:30] [main/INFO] [LaunchWrapper/]: Loading tweak class name cpw.mods.fml.common.launcher.TerminalTweaker
[22:32:30] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.TerminalTweaker
[22:32:32] [main/INFO] [LaunchWrapper/]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
[22:32:32] [main/DEBUG] [CCL ASM/]: Writing method [aji.canBeReplacedByLeaves(Lahl;III)Z]
[22:32:34] [main/DEBUG] [CCL ASM/]: Injecting before method [dh.toString()Ljava/lang/String;] @ 51 - 55
[22:32:34] [main/DEBUG] [CCL ASM/]: Injecting before method [dq.toString()Ljava/lang/String;] @ 56 - 60
[22:32:35] [main/INFO] [BetterFps/]: Patching Minecraft using Riven\'s "Half" Algorithm
[22:32:38] [Server thread/INFO] [MinecraftForge/]: Attempting early MinecraftForge initialization
[22:32:38] [Server thread/INFO] [FML/]: MinecraftForge v10.13.4.1614 Initialized
[22:32:39] [Server thread/INFO] [FML/]: Replaced 183 ore recipies
[22:32:39] [Server thread/INFO] [MinecraftForge/]: Completed early MinecraftForge initialization
[22:32:39] [Server thread/DEBUG] [FML/]: File /aternos/server/config/injectedDependencies.json not found. No dependencies injected
[22:32:39] [Server thread/DEBUG] [FML/]: Building injected Mod Containers [cpw.mods.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer, codechicken.core.asm.CodeChickenCoreModContainer, codechicken.nei.NEIModContainer]
[22:32:39] [Server thread/DEBUG] [FML/]: Attempting to load mods contained in the minecraft jar file and associated classes
[22:32:39] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/forge.jar, examining for mod candidates
[22:32:39] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/BetterFps-1.0.1.jar
[22:32:39] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/Bookshelf-1.7.10-1.0.4.187.jar
[22:32:39] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/CodeChickenCore-1.7.10-1.0.7.47-universal.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Found a minecraft related file at /aternos/server/./mods/1.7.10/CodeChickenLib-1.7.10-1.1.3.138-universal.jar, examining for mod candidates
[22:32:39] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/1.7.10/ForgeMultipart-1.7.10-1.2.0.345-universal.jar
[22:32:39] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/InventoryTweaks-1.59-dev-152.jar
[22:32:39] [Server thread/TRACE] [FML/]: Skipping known library file /aternos/server/mods/NotEnoughItems-1.7.10-1.0.5.120-universal.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Minecraft jar mods loaded successfully
[22:32:39] [Server thread/INFO] [FML/]: Found 0 mods from the command line. Injecting into mod discoverer
[22:32:39] [Server thread/INFO] [FML/]: Searching /aternos/server/mods for mods
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate mod directory 1.7.10
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file AoA-Tslat-1.1.3.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Baubles-1.7.10-1.0.1.10.jar
[22:32:39] [Server thread/TRACE] [FML/]: Skipping already parsed coremod or tweaker BetterFps-1.0.1.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Bookshelf-1.7.10-1.0.4.187.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file ChestTransporter-1.7.10-2.0.6.jar
[22:32:39] [Server thread/TRACE] [FML/]: Skipping already parsed coremod or tweaker CodeChickenCore-1.7.10-1.0.7.47-universal.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file EnchantingPlus-1.7.10-3.0.2-d.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file iChunUtil-4.2.3.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file InventoryTweaks-1.59-dev-152.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file IronBackpacks-1.7.10-1.2.20.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file ironchest-1.7.10-6.0.62.742-universal.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file ironfurnaces-1.2.4R.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file journeymap-1.7.10-5.1.4p2-unlimited.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Morph-Beta-0.9.3.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Morpheus-1.7.10-1.6.21.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file NaturesCompass-1.7.10-1.3.1.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file netherportalfix-mc1.7.10-1.1.0.jar
[22:32:39] [Server thread/TRACE] [FML/]: Skipping already parsed coremod or tweaker NotEnoughItems-1.7.10-1.0.5.120-universal.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file OreExcavation-1.1.120.jar
[22:32:39] [Server thread/INFO] [FML/]: Also searching /aternos/server/mods/1.7.10 for mods
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Baubles-1.7.10-1.0.1.10.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file CodeChickenLib-1.7.10-1.1.3.138-universal.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file ForgeMultipart-1.7.10-1.2.0.345-universal.jar
[22:32:39] [Server thread/DEBUG] [FML/]: Examining file forge.jar for potential mods
[22:32:39] [Server thread/DEBUG] [FML/]: The mod container forge.jar appears to be missing an mcmod.info file
[22:32:41] [Server thread/DEBUG] [FML/]: Examining file CodeChickenLib-1.7.10-1.1.3.138-universal.jar for potential mods
[22:32:41] [Server thread/DEBUG] [FML/]: The mod container CodeChickenLib-1.7.10-1.1.3.138-universal.jar appears to be missing an mcmod.info file
[22:32:41] [Server thread/DEBUG] [FML/]: Examining directory 1.7.10 for potential mods
[22:32:41] [Server thread/DEBUG] [FML/]: No mcmod.info file found in directory 1.7.10
[22:32:41] [Server thread/DEBUG] [FML/]: Examining file AoA-Tslat-1.1.3.jar for potential mods
[22:32:41] [Server thread/TRACE] [FML/]: Located mcmod.info file in file AoA-Tslat-1.1.3.jar
[22:32:42] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (net.nevermine.common.nevermine) - loading
[22:32:42] [Server thread/TRACE] [nevermine/]: Parsed dependency info : [] [] []
[22:32:44] [Server thread/DEBUG] [FML/]: Examining file Baubles-1.7.10-1.0.1.10.jar for potential mods
[22:32:44] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Baubles-1.7.10-1.0.1.10.jar
[22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (baubles.common.Baubles) - loading
[22:32:45] [Server thread/TRACE] [Baubles/]: Parsed dependency info : [Forge@[10.13.2,)] [Forge@[10.13.2,)] []
[22:32:45] [Server thread/DEBUG] [FML/]: Examining file Bookshelf-1.7.10-1.0.4.187.jar for potential mods
[22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Bookshelf-1.7.10-1.0.4.187.jar
[22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (net.darkhax.bookshelf.Bookshelf) - loading
[22:32:45] [Server thread/TRACE] [bookshelf/]: Parsed dependency info : [] [] []
[22:32:45] [Server thread/DEBUG] [FML/]: Examining file ChestTransporter-1.7.10-2.0.6.jar for potential mods
[22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file ChestTransporter-1.7.10-2.0.6.jar
[22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (cubex2.mods.chesttransporter.ChestTransporter) - loading
[22:32:45] [Server thread/TRACE] [ChestTransporter/]: Parsed dependency info : [] [] []
[22:32:45] [Server thread/DEBUG] [FML/]: Examining file EnchantingPlus-1.7.10-3.0.2-d.jar for potential mods
[22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file EnchantingPlus-1.7.10-3.0.2-d.jar
[22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (com.aesireanempire.eplus.EnchantingPlus) - loading
[22:32:45] [Server thread/TRACE] [eplus/]: Parsed dependency info : [] [] []
[22:32:45] [Server thread/DEBUG] [FML/]: Examining file iChunUtil-4.2.3.jar for potential mods
[22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file iChunUtil-4.2.3.jar
[22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (ichun.common.iChunUtil) - loading
[22:32:45] [Server thread/TRACE] [iChunUtil/]: Parsed dependency info : [Forge@[10.13.2.1291,)] [Forge@[10.13.2.1291,)] []
[22:32:45] [Server thread/DEBUG] [FML/]: Examining file InventoryTweaks-1.59-dev-152.jar for potential mods
[22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file InventoryTweaks-1.59-dev-152.jar
[22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (invtweaks.forge.InvTweaksMod) - loading
[22:32:45] [Server thread/TRACE] [inventorytweaks/]: Parsed dependency info : [FML@[7.2.0,), Forge@[10.12.1,)] [FML@[7.2.0,), Forge@[10.12.1,)] []
[22:32:45] [Server thread/DEBUG] [inventorytweaks/]: Attempting to load the file version.properties from InventoryTweaks-1.59-dev-152.jar to locate a version number for inventorytweaks
[22:32:45] [Server thread/DEBUG] [inventorytweaks/]: Found version 1.59-dev-152-cf6e263 for mod inventorytweaks in version.properties, using
[22:32:45] [Server thread/DEBUG] [FML/]: Examining file IronBackpacks-1.7.10-1.2.20.jar for potential mods
[22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file IronBackpacks-1.7.10-1.2.20.jar
[22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (main.ironbackpacks.IronBackpacks) - loading
[22:32:45] [Server thread/TRACE] [ironbackpacks/]: Parsed dependency info : [] [] []
[22:32:45] [Server thread/DEBUG] [FML/]: Examining file ironchest-1.7.10-6.0.62.742-universal.jar for potential mods
[22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file ironchest-1.7.10-6.0.62.742-universal.jar
[22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (cpw.mods.ironchest.IronChest) - loading
[22:32:45] [Server thread/TRACE] [IronChest/]: Parsed dependency info : [FML@[7.2,), Forge@[10.10,)] [Forge@[10.10,), FML@[7.2,)] []
[22:32:45] [Server thread/DEBUG] [IronChest/]: Attempting to load the file version.properties from ironchest-1.7.10-6.0.62.742-universal.jar to locate a version number for IronChest
[22:32:45] [Server thread/DEBUG] [IronChest/]: Found version **.**.**.** for mod IronChest in version.properties, using
[22:32:45] [Server thread/DEBUG] [FML/]: Examining file ironfurnaces-1.2.4R.jar for potential mods
[22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file ironfurnaces-1.2.4R.jar
[22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (IronFurnaces) - loading
[22:32:45] [Server thread/TRACE] [ironfurnaces/]: Parsed dependency info : [] [] []
[22:32:45] [Server thread/DEBUG] [ironfurnaces/]: Attempting to load the file version.properties from ironfurnaces-1.2.4R.jar to locate a version number for ironfurnaces
[22:32:45] [Server thread/WARN] [ironfurnaces/]: Mod ironfurnaces is missing the required element \'version\' and a version.properties file could not be found. Falling back to metadata version 1.2.4
[22:32:45] [Server thread/DEBUG] [FML/]: Examining file journeymap-1.7.10-5.1.4p2-unlimited.jar for potential mods
[22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file journeymap-1.7.10-5.1.4p2-unlimited.jar
[22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (journeymap.common.Journeymap) - loading
[22:32:45] [Server thread/TRACE] [journeymap/]: Using mcmod dependency info : [Forge@[10.13.4.1558,)] [Forge@[10.13.4.1558,)] []
[22:32:45] [Server thread/DEBUG] [FML/]: Examining file Morph-Beta-0.9.3.jar for potential mods
[22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Morph-Beta-0.9.3.jar
[22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (morph.common.Morph) - loading
[22:32:45] [Server thread/TRACE] [Morph/]: Parsed dependency info : [iChunUtil@[4.0.0,)] [iChunUtil@[4.0.0,)] []
[22:32:45] [Server thread/DEBUG] [FML/]: Examining file Morpheus-1.7.10-1.6.21.jar for potential mods
[22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Morpheus-1.7.10-1.6.21.jar
[22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (net.quetzi.morpheus.Morpheus) - loading
[22:32:45] [Server thread/TRACE] [Morpheus/]: Parsed dependency info : [] [] []
[22:32:45] [Server thread/DEBUG] [FML/]: Examining file NaturesCompass-1.7.10-1.3.1.jar for potential mods
[22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file NaturesCompass-1.7.10-1.3.1.jar
[22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (com.chaosthedude.naturescompass.NaturesCompass) - loading
[22:32:45] [Server thread/TRACE] [naturescompass/]: Parsed dependency info : [] [] []
[22:32:45] [Server thread/DEBUG] [FML/]: Examining file netherportalfix-mc1.7.10-1.1.0.jar for potential mods
[22:32:45] [Server thread/DEBUG] [FML/]: The mod container netherportalfix-mc1.7.10-1.1.0.jar appears to be missing an mcmod.info file
[22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (net.blay09.mods.netherportalfix.NetherPortalFix) - loading
[22:32:45] [Server thread/TRACE] [netherportalfix/]: Parsed dependency info : [] [] []
[22:32:45] [Server thread/DEBUG] [netherportalfix/]: Attempting to load the file version.properties from netherportalfix-mc1.7.10-1.1.0.jar to locate a version number for netherportalfix
[22:32:45] [Server thread/WARN] [netherportalfix/]: Mod netherportalfix is missing the required element \'version\' and no fallback can be found. Substituting \'1.0\'.
[22:32:45] [Server thread/DEBUG] [FML/]: Examining file OreExcavation-1.1.120.jar for potential mods
[22:32:45] [Server thread/TRACE] [FML/]: Located mcmod.info file in file OreExcavation-1.1.120.jar
[22:32:45] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (oreexcavation.core.OreExcavation) - loading
[22:32:45] [Server thread/TRACE] [oreexcavation/]: Parsed dependency info : [] [] []
[22:32:45] [Server thread/DEBUG] [oreexcavation/]: Attempting to load the file version.properties from OreExcavation-1.1.120.jar to locate a version number for oreexcavation
[22:32:45] [Server thread/WARN] [oreexcavation/]: Mod oreexcavation is missing the required element \'version\' and a version.properties file could not be found. Falling back to metadata version 1.1.120
[22:32:46] [Server thread/DEBUG] [FML/]: Examining file Baubles-1.7.10-1.0.1.10.jar for potential mods
[22:32:46] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Baubles-1.7.10-1.0.1.10.jar
[22:32:46] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (baubles.common.Baubles) - loading
[22:32:46] [Server thread/TRACE] [Baubles/]: Parsed dependency info : [Forge@[10.13.2,)] [Forge@[10.13.2,)] []
[22:32:46] [Server thread/DEBUG] [FML/]: Examining file CodeChickenLib-1.7.10-1.1.3.138-universal.jar for potential mods
[22:32:46] [Server thread/DEBUG] [FML/]: The mod container CodeChickenLib-1.7.10-1.1.3.138-universal.jar appears to be missing an mcmod.info file
[22:32:46] [Server thread/DEBUG] [FML/]: Examining file ForgeMultipart-1.7.10-1.2.0.345-universal.jar for potential mods
[22:32:46] [Server thread/TRACE] [FML/]: Located mcmod.info file in file ForgeMultipart-1.7.10-1.2.0.345-universal.jar
[22:32:46] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (codechicken.microblock.handler.MicroblockMod) - loading
[22:32:46] [Server thread/TRACE] [ForgeMicroblock/]: Parsed dependency info : [ForgeMultipart] [ForgeMultipart, *] []
[22:32:46] [Server thread/DEBUG] [ForgeMicroblock/]: Attempting to load the file version.properties from ForgeMultipart-1.7.10-1.2.0.345-universal.jar to locate a version number for ForgeMicroblock
[22:32:46] [Server thread/WARN] [ForgeMicroblock/]: Mod ForgeMicroblock is missing the required element \'version\' and a version.properties file could not be found. Falling back to metadata version **.**.**.**
[22:32:46] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (codechicken.multipart.handler.MultipartMod) - loading
[22:32:46] [Server thread/TRACE] [ForgeMultipart/]: Parsed dependency info : [] [] []
[22:32:46] [Server thread/DEBUG] [ForgeMultipart/]: Attempting to load the file version.properties from ForgeMultipart-1.7.10-1.2.0.345-universal.jar to locate a version number for ForgeMultipart
[22:32:46] [Server thread/WARN] [ForgeMultipart/]: Mod ForgeMultipart is missing the required element \'version\' and a version.properties file could not be found. Falling back to metadata version **.**.**.**
[22:32:46] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (codechicken.multipart.minecraft.MinecraftMultipartMod) - loading
[22:32:46] [Server thread/TRACE] [McMultipart/]: Parsed dependency info : [] [] []
[22:32:46] [Server thread/DEBUG] [McMultipart/]: Attempting to load the file version.properties from ForgeMultipart-1.7.10-1.2.0.345-universal.jar to locate a version number for McMultipart
[22:32:46] [Server thread/WARN] [McMultipart/]: Mod McMultipart is missing the required element \'version\' and a version.properties file could not be found. Falling back to metadata version **.**.**.**
[22:32:46] [Server thread/ERROR] [FML/]: Found a duplicate mod Baubles at [/aternos/server/mods/1.7.10/Baubles-1.7.10-1.0.1.10.jar, /aternos/server/mods/Baubles-1.7.10-1.0.1.10.jar]
[22:32:46] [Server thread/WARN] [FML/]: Can\'t revert to frozen GameData state without freezing first.
[22:32:46] [Server thread/INFO] [FML/]: Applying holder lookups
[22:32:46] [Server thread/INFO] [FML/]: Holder lookups applied
[22:32:46] [Server thread/INFO] [FML/]: The state engine was in incorrect state CONSTRUCTING and forced into state SERVER_STOPPED. Errors may have been discarded.
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
                                            [text:protected] => [22:32:38] [Server thread/INFO] [FML/]: MinecraftForge v10.13.4.1614 Initialized
                                            [number:protected] => 168
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [22:32:38] [Server thread/INFO] [FML/]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Forge version
                    [value:protected] => 10.13.4.1614
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDuplicateProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [22:32:46] [Server thread/ERROR] [FML/]: Found a duplicate mod Baubles at [/aternos/server/mods/1.7.10/Baubles-1.7.10-1.0.1.10.jar, /aternos/server/mods/Baubles-1.7.10-1.0.1.10.jar]
                                            [number:protected] => 309
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [22:32:46] [Server thread/ERROR] [FML/]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => /aternos/server/mods/1.7.10/Baubles-1.7.10-1.0.1.10.jar
                                    [relativePath:protected] => 
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => /aternos/server/mods/Baubles-1.7.10-1.0.1.10.jar
                                    [relativePath:protected] => 
                                )

                        )

                    [iterator:protected] => 0
                    [modName:protected] => Baubles
                    [firstModPath:protected] => /aternos/server/mods/1.7.10/Baubles-1.7.10-1.0.1.10.jar
                    [secondModPath:protected] => /aternos/server/mods/Baubles-1.7.10-1.0.1.10.jar
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Forge version: 10.13.4.1614", $analysis[0]->getMessage());

        $this->assertEquals("There are multiple mod files for the mod name 'Baubles': 'Baubles-1.7.10-1.0.1.10.jar' and 'Baubles-1.7.10-1.0.1.10.jar'.", $analysis[1]->getMessage());
        $this->assertEquals("Delete the file '/aternos/server/mods/1.7.10/Baubles-1.7.10-1.0.1.10.jar'.", $analysis[1][0]->getMessage());
        $this->assertEquals("Delete the file '/aternos/server/mods/Baubles-1.7.10-1.0.1.10.jar'.", $analysis[1][1]->getMessage());

    }
}