<?php

class ForgeModRequiredTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-mod-required.log");
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
                    [prefix:protected] => [03:23:24] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:24] [main/DEBUG] [FML/]: Injecting tracing printstreams for STDOUT/STDERR.
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/INFO] [FML/]: Forge Mod Loader version 7.99.40.1614 for Minecraft 1.7.10 loading
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/INFO] [FML/]: Java is Java HotSpot(TM) 64-Bit Server VM, version 1.8.0_144, running on Linux:amd64:4.4.0-141-generic, installed at /aternos/bin/jdk1.8.0_144/jre
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Java classpath at launch is forge.jar
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Java library path at launch is /usr/java/packages/lib/amd64:/usr/lib64:/lib64:/lib:/usr/lib
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Enabling runtime deobfuscation
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Instantiating coremod class FMLCorePlugin
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Added access transformer class cpw.mods.fml.common.asm.transformers.AccessTransformer to enqueued access transformers
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Enqueued coremod FMLCorePlugin
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Instantiating coremod class FMLForgePlugin
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Added access transformer class net.minecraftforge.transformers.ForgeAccessTransformer to enqueued access transformers
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Enqueued coremod FMLForgePlugin
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: All fundamental core mods are successfully located
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Attempting to load commandline specified mods, relative to /aternos/server/.
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Discovering coremods
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy AbyssalCraft-1.7.10-1.9.1.3-FINAL.jar
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Not found coremod data in AbyssalCraft-1.7.10-1.9.1.3-FINAL.jar
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy archimedesshipsplus-1.7.10-1.7.11.jar
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Not found coremod data in archimedesshipsplus-1.7.10-1.7.11.jar
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy CustomNPCs_1.7.10d(29oct17).jar
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Not found coremod data in CustomNPCs_1.7.10d(29oct17).jar
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy Dalek_Mod_1710.jar
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Not found coremod data in Dalek_Mod_1710.jar
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy Ex-Astris-MC1.7.10-1.16-36.jar
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Not found coremod data in Ex-Astris-MC1.7.10-1.16-36.jar
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy Ex-Nihilo-1.38-53.jar
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Not found coremod data in Ex-Nihilo-1.38-53.jar
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy excompressum-mc1.7.10-1.2.0.jar
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Not found coremod data in excompressum-mc1.7.10-1.2.0.jar
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy LootBags-1.7.10-2.0.17.jar
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Not found coremod data in LootBags-1.7.10-2.0.17.jar
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy MCA-1.7.10-5.2.2-universal.jar
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Not found coremod data in MCA-1.7.10-5.2.2-universal.jar
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy ServerTools-CORE-1.7.10-2.2.0.79.jar
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Not found coremod data in ServerTools-CORE-1.7.10-2.2.0.79.jar
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy Traincraft-4.4.1_019.jar
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Not found coremod data in Traincraft-4.4.1_019.jar
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy VeinMiner-1.7.10-0.36.0.496+28a7f13.jar
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Not found coremod data in VeinMiner-1.7.10-0.36.0.496+28a7f13.jar
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy witchery-1.7.10-0.24.1.jar
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Not found coremod data in witchery-1.7.10-0.24.1.jar
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/INFO] [LaunchWrapper/]: Loading tweak class name cpw.mods.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/INFO] [LaunchWrapper/]: Loading tweak class name cpw.mods.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.FMLInjectionAndSortingTweaker
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Injecting coremod FMLCorePlugin {cpw.mods.fml.relauncher.FMLCorePlugin} class transformers
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/TRACE] [FML/]: Registering transformer cpw.mods.fml.common.asm.transformers.MarkerTransformer
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/TRACE] [FML/]: Registering transformer cpw.mods.fml.common.asm.transformers.SideTransformer
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/TRACE] [FML/]: Registering transformer cpw.mods.fml.common.asm.transformers.EventSubscriptionTransformer
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Running coremod plugin for FMLCorePlugin {cpw.mods.fml.relauncher.FMLCorePlugin}
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:25] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:25] [main/DEBUG] [FML/]: Running coremod plugin FMLCorePlugin
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:27] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:27] [main/DEBUG] [FML/]: Read 527 binary patches
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:28] [main/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:28] [main/INFO] [FML/]: Found valid fingerprint for Minecraft Forge. Certificate fingerprint e3c3d50c7c986df74c645c0ac54639741c90a557
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:28] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:28] [main/DEBUG] [FML/]: Coremod plugin class FMLCorePlugin run successfully
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:28] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:28] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:28] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:28] [main/DEBUG] [FML/]: Injecting coremod FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin} class transformers
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:28] [main/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:28] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.classloading.FluidIdTransformer
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:28] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:28] [main/DEBUG] [FML/]: Injection complete
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:28] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:28] [main/DEBUG] [FML/]: Running coremod plugin for FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin}
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:28] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:28] [main/DEBUG] [FML/]: Running coremod plugin FMLForgePlugin
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:28] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:28] [main/DEBUG] [FML/]: Coremod plugin class FMLForgePlugin run successfully
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:28] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:28] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.FMLDeobfTweaker
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:28] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:28] [main/DEBUG] [FML/]: Loaded 57 rules from AccessTransformer config file fml_at.cfg
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:28] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:28] [main/DEBUG] [FML/]: Loaded 89 rules from AccessTransformer config file forge_at.cfg
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:28] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:28] [main/DEBUG] [FML/]: Loaded 2 rules from AccessTransformer mod jar file /aternos/server/mods/ServerTools-CORE-1.7.10-2.2.0.79.jar!META-INF/servertools_at.cfg
                                    [number:protected] => 67
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:28] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:28] [main/DEBUG] [FML/]: Loaded 6 rules from AccessTransformer mod jar file /aternos/server/mods/witchery-1.7.10-0.24.1.jar!META-INF/witchery_at.cfg
                                    [number:protected] => 69
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:28] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:28] [main/DEBUG] [FML/]: Validating minecraft
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:29] [main/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:29] [main/DEBUG] [FML/]: Minecraft validated, launching...
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:29] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:29] [main/INFO] [LaunchWrapper/]: Loading tweak class name cpw.mods.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:29] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:29] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.TerminalTweaker
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:30] [main/INFO] [LaunchWrapper/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:30] [main/INFO] [LaunchWrapper/]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/INFO] [MinecraftForge/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/INFO] [MinecraftForge/]: Attempting early MinecraftForge initialization
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/INFO] [FML/]: MinecraftForge v10.13.4.1614 Initialized
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/INFO] [FML/]: Replaced 183 ore recipies
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/INFO] [MinecraftForge/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/INFO] [MinecraftForge/]: Completed early MinecraftForge initialization
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: File /aternos/server/config/injectedDependencies.json not found. No dependencies injected
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: Building injected Mod Containers [cpw.mods.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer]
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: Attempting to load mods contained in the minecraft jar file and associated classes
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: Minecraft is a file at /aternos/server/forge.jar, loading
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: Minecraft jar mods loaded successfully
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/INFO] [FML/]: Found 0 mods from the command line. Injecting into mod discoverer
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/INFO] [FML/]: Searching /aternos/server/mods for mods
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file AbyssalCraft-1.7.10-1.9.1.3-FINAL.jar
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file archimedesshipsplus-1.7.10-1.7.11.jar
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file CustomNPCs_1.7.10d(29oct17).jar
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Dalek_Mod_1710.jar
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Ex-Astris-MC1.7.10-1.16-36.jar
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Ex-Nihilo-1.38-53.jar
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file excompressum-mc1.7.10-1.2.0.jar
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file LootBags-1.7.10-2.0.17.jar
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file MCA-1.7.10-5.2.2-universal.jar
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file ServerTools-CORE-1.7.10-2.2.0.79.jar
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Traincraft-4.4.1_019.jar
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file VeinMiner-1.7.10-0.36.0.496+28a7f13.jar
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file witchery-1.7.10-0.24.1.jar
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: Examining file forge.jar for potential mods
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:36] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:36] [Server thread/DEBUG] [FML/]: The mod container forge.jar appears to be missing an mcmod.info file
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:37] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:37] [Server thread/DEBUG] [FML/]: Examining file AbyssalCraft-1.7.10-1.9.1.3-FINAL.jar for potential mods
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:37] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:37] [Server thread/TRACE] [FML/]: Located mcmod.info file in file AbyssalCraft-1.7.10-1.9.1.3-FINAL.jar
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:37] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:37] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (com.shinoow.abyssalcraft.AbyssalCraft) - loading
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:37] [Server thread/TRACE] [abyssalcraft/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:37] [Server thread/TRACE] [abyssalcraft/]: Parsed dependency info : [Forge@[10.13.4.1614,)] [Forge@[10.13.4.1614,)] []
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:37] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:37] [Server thread/DEBUG] [FML/]: Examining file archimedesshipsplus-1.7.10-1.7.11.jar for potential mods
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:37] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:37] [Server thread/TRACE] [FML/]: Located mcmod.info file in file archimedesshipsplus-1.7.10-1.7.11.jar
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:37] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:37] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (darkevilmac.archimedes.ArchimedesShipMod) - loading
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:37] [Server thread/TRACE] [ArchimedesShipsPlus/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:37] [Server thread/TRACE] [ArchimedesShipsPlus/]: Parsed dependency info : [MovingWorld] [MovingWorld] []
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:37] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:37] [Server thread/DEBUG] [FML/]: Examining file CustomNPCs_1.7.10d(29oct17).jar for potential mods
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:37] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:37] [Server thread/TRACE] [FML/]: Located mcmod.info file in file CustomNPCs_1.7.10d(29oct17).jar
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:37] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:37] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (noppes.npcs.CustomNpcs) - loading
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:37] [Server thread/TRACE] [customnpcs/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:37] [Server thread/TRACE] [customnpcs/]: Parsed dependency info : [] [] []
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/DEBUG] [FML/]: Examining file Dalek_Mod_1710.jar for potential mods
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Dalek_Mod_1710.jar
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (thedalekmod.client.theDalekMod) - loading
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/TRACE] [thedalekmod/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/TRACE] [thedalekmod/]: Parsed dependency info : [] [] []
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/DEBUG] [FML/]: Examining file Ex-Astris-MC1.7.10-1.16-36.jar for potential mods
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Ex-Astris-MC1.7.10-1.16-36.jar
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (ExAstris.ExAstris) - loading
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/TRACE] [exastris/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/TRACE] [exastris/]: Parsed dependency info : [Forge@[10.13.0.1180,), exnihilo] [Forge@[10.13.0.1180,), exnihilo, ThermalExpansion, Thaumcraft, TConstruct, TSteelworks, RedstoneArsenal, RotaryCraft, Metallurgy, ThermalFoundation, EnderIO, chisel, CoFHAPI|energy] []
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/DEBUG] [FML/]: Examining file Ex-Nihilo-1.38-53.jar for potential mods
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/DEBUG] [FML/]: The mod container Ex-Nihilo-1.38-53.jar appears to be missing an mcmod.info file
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (exnihilo.ExNihilo) - loading
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/TRACE] [exnihilo/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/TRACE] [exnihilo/]: Parsed dependency info : [Forge@[10.13.0.1180,)] [Forge@[10.13.0.1180,)] []
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/DEBUG] [FML/]: Examining file excompressum-mc1.7.10-1.2.0.jar for potential mods
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/TRACE] [FML/]: Located mcmod.info file in file excompressum-mc1.7.10-1.2.0.jar
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (net.blay09.mods.excompressum.ExCompressum) - loading
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/TRACE] [excompressum/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/TRACE] [excompressum/]: Parsed dependency info : [exnihilo] [exnihilo] []
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/DEBUG] [excompressum/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/DEBUG] [excompressum/]: Attempting to load the file version.properties from excompressum-mc1.7.10-1.2.0.jar to locate a version number for excompressum
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/WARN] [excompressum/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/WARN] [excompressum/]: Mod excompressum is missing the required element \'version\' and a version.properties file could not be found. Falling back to metadata version 1.2.0
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/DEBUG] [FML/]: Examining file LootBags-1.7.10-2.0.17.jar for potential mods
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/TRACE] [FML/]: Located mcmod.info file in file LootBags-1.7.10-2.0.17.jar
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (mal.lootbags.LootBags) - loading
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/TRACE] [lootbags/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/TRACE] [lootbags/]: Parsed dependency info : [] [] []
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/DEBUG] [FML/]: Examining file MCA-1.7.10-5.2.2-universal.jar for potential mods
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/TRACE] [FML/]: Located mcmod.info file in file MCA-1.7.10-5.2.2-universal.jar
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (mca.core.MCA) - loading
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:38] [Server thread/TRACE] [MCA/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:38] [Server thread/TRACE] [MCA/]: Parsed dependency info : [RadixCore@[2.1.3,)] [RadixCore@[2.1.3,)] []
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/DEBUG] [FML/]: Examining file ServerTools-CORE-1.7.10-2.2.0.79.jar for potential mods
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/TRACE] [FML/]: Located mcmod.info file in file ServerTools-CORE-1.7.10-2.2.0.79.jar
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (info.servertools.core.ServerTools) - loading
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/TRACE] [ServerTools/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/TRACE] [ServerTools/]: Parsed dependency info : [Forge@[10.12.1.1060,)] [Forge@[10.12.1.1060,)] []
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/DEBUG] [ServerTools/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/DEBUG] [ServerTools/]: Attempting to load the file version.properties from ServerTools-CORE-1.7.10-2.2.0.79.jar to locate a version number for ServerTools
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/DEBUG] [ServerTools/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/DEBUG] [ServerTools/]: Found version 1.7.10-2.2.0.79 for mod ServerTools in version.properties, using
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/DEBUG] [FML/]: Examining file Traincraft-4.4.1_019.jar for potential mods
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Traincraft-4.4.1_019.jar
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (train.common.Traincraft) - loading
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/TRACE] [tc/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/TRACE] [tc/]: Using mcmod dependency info : [Forge@[10.13.4.1558,)] [Forge@[10.13.4.1558,), Railcraft@[**.**.**.**,)] [TConstruct]
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/DEBUG] [FML/]: Examining file VeinMiner-1.7.10-0.36.0.496+28a7f13.jar for potential mods
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/TRACE] [FML/]: Located mcmod.info file in file VeinMiner-1.7.10-0.36.0.496+28a7f13.jar
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (portablejim.veinminer.VeinMiner) - loading
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/TRACE] [VeinMiner/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/TRACE] [VeinMiner/]: Parsed dependency info : [] [] []
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/DEBUG] [VeinMiner/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/DEBUG] [VeinMiner/]: Attempting to load the file version.properties from VeinMiner-1.7.10-0.36.0.496+28a7f13.jar to locate a version number for VeinMiner
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/DEBUG] [VeinMiner/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/DEBUG] [VeinMiner/]: Found version 0.36.0_1.7.10-28a7f13 for mod VeinMiner in version.properties, using
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (portablejim.veinminermodsupport.VeinMinerModSupport) - loading
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/TRACE] [VeinMinerModSupport/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/TRACE] [VeinMinerModSupport/]: Parsed dependency info : [] [] []
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/DEBUG] [VeinMinerModSupport/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/DEBUG] [VeinMinerModSupport/]: Attempting to load the file version.properties from VeinMiner-1.7.10-0.36.0.496+28a7f13.jar to locate a version number for VeinMinerModSupport
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/DEBUG] [VeinMinerModSupport/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/DEBUG] [VeinMinerModSupport/]: Found version 0.36.0_1.7.10-28a7f13 for mod VeinMinerModSupport in version.properties, using
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/DEBUG] [FML/]: Examining file witchery-1.7.10-0.24.1.jar for potential mods
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/TRACE] [FML/]: Located mcmod.info file in file witchery-1.7.10-0.24.1.jar
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (com.emoniph.witchery.Witchery) - loading
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:39] [Server thread/TRACE] [witchery/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:39] [Server thread/TRACE] [witchery/]: Parsed dependency info : [Forge@[10.13.2.1277,)] [Forge@[10.13.2.1277,), MineFactoryReloaded, NotEnoughItems, Waila, ForgeMultipart, AWWayofTime] []
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/INFO] [FML/]: Forge Mod Loader has identified 17 mods to load
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.biome (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
                                    [number:protected] => 165
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.block (owned by CoFHAPI providing CoFHAPI|block) embedded in excompressum
                                    [number:protected] => 166
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.item (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
                                    [number:protected] => 167
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.events (owned by RailcraftAPI|core providing RailcraftAPI|events) embedded in tc
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API dan200.computercraft.api (owned by ComputerCraft providing ComputerCraft|API) embedded in tc
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.carts.locomotive (owned by RailcraftAPI|carts providing RailcraftAPI|locomotive) embedded in tc
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API dan200.computercraft.api.peripheral (owned by ComputerCraft providing ComputerCraft|API|Peripheral) embedded in tc
                                    [number:protected] => 171
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.internal (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
                                    [number:protected] => 172
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.ritual (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
                                    [number:protected] => 173
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.item (owned by CoFHAPI providing CoFHAPI|item) embedded in excompressum
                                    [number:protected] => 174
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API portablejim.veinminer.api (owned by VeinMiner providing VeinMinerApi) embedded in VeinMiner
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API portablejim.veinminer.api (owned by VeinMiner providing VeinMinerApi) embedded in VeinMinerModSupport
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.core.items (owned by RailcraftAPI|core providing RailcraftAPI|items) embedded in tc
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.necronomicon (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.energy (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
                                    [number:protected] => 179
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.tileentity (owned by CoFHAPI providing CoFHAPI|tileentity) embedded in excompressum
                                    [number:protected] => 180
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API dan200.computercraft.api.turtle (owned by ComputerCraft providing ComputerCraft|API|Turtle) embedded in tc
                                    [number:protected] => 181
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [179] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.helpers (owned by RailcraftAPI|core providing RailcraftAPI|helpers) embedded in tc
                                    [number:protected] => 182
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [180] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.carts (owned by RailcraftAPI|core providing RailcraftAPI|carts) embedded in tc
                                    [number:protected] => 183
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [181] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.inventory (owned by CoFHAPI providing CoFHAPI|inventory) embedded in excompressum
                                    [number:protected] => 184
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [182] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.recipe (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
                                    [number:protected] => 185
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [183] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.fuel (owned by RailcraftAPI|core providing RailcraftAPI|fuel) embedded in tc
                                    [number:protected] => 186
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [184] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.fluid (owned by CoFHAPI providing CoFHAPI|fluid) embedded in excompressum
                                    [number:protected] => 187
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [185] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.energy.disruption (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
                                    [number:protected] => 188
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [186] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
                                    [number:protected] => 189
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [187] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api (owned by CoFHLib providing CoFHAPI) embedded in exastris
                                    [number:protected] => 190
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [188] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.signals (owned by RailcraftAPI|core providing RailcraftAPI|signals) embedded in tc
                                    [number:protected] => 191
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [189] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.block (owned by CoFHAPI providing CoFHAPI|block) embedded in exastris
                                    [number:protected] => 192
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [190] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.crafting (owned by RailcraftAPI|core providing RailcraftAPI|crafting) embedded in tc
                                    [number:protected] => 193
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [191] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API dan200.computercraft.api.permissions (owned by ComputerCraft providing ComputerCraft|API|Permissions) embedded in tc
                                    [number:protected] => 194
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [192] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.core (owned by CoFHAPI providing CoFHAPI|core) embedded in excompressum
                                    [number:protected] => 195
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [193] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.electricity (owned by RailcraftAPI|core providing RailcraftAPI|electricity) embedded in tc
                                    [number:protected] => 196
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [194] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api (owned by CoFHLib providing CoFHAPI) embedded in excompressum
                                    [number:protected] => 197
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [195] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.world (owned by CoFHAPI providing CoFHAPI|world) embedded in excompressum
                                    [number:protected] => 198
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [196] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.energy (owned by CoFHAPI providing CoFHAPI|energy) embedded in tc
                                    [number:protected] => 199
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [197] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.modhelpers (owned by CoFHAPI providing CoFHAPI|modhelpers) embedded in excompressum
                                    [number:protected] => 200
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [198] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API dan200.computercraft.api.lua (owned by ComputerCraft providing ComputerCraft|API|Lua) embedded in tc
                                    [number:protected] => 201
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [199] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.core (owned by Railcraft providing RailcraftAPI|core) embedded in tc
                                    [number:protected] => 202
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [200] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.energy (owned by CoFHAPI providing CoFHAPI|energy) embedded in excompressum
                                    [number:protected] => 203
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [201] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.integration (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
                                    [number:protected] => 204
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [202] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API dan200.computercraft.api.redstone (owned by ComputerCraft providing ComputerCraft|API|Redstone) embedded in tc
                                    [number:protected] => 205
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [203] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.carts.bore (owned by RailcraftAPI|carts providing RailcraftAPI|bore) embedded in tc
                                    [number:protected] => 206
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [204] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.entity (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
                                    [number:protected] => 207
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [205] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API dan200.computercraft.api.filesystem (owned by ComputerCraft providing ComputerCraft|API|FileSystem) embedded in tc
                                    [number:protected] => 208
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [206] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.transport (owned by CoFHAPI providing CoFHAPI|transport) embedded in excompressum
                                    [number:protected] => 209
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [207] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api (owned by CoFHLib providing CoFHAPI) embedded in tc
                                    [number:protected] => 210
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [208] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.block (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
                                    [number:protected] => 211
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [209] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.event (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
                                    [number:protected] => 212
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [210] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.tracks (owned by RailcraftAPI|core providing RailcraftAPI|tracks) embedded in tc
                                    [number:protected] => 213
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [211] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found API dan200.computercraft.api.media (owned by ComputerCraft providing ComputerCraft|API|Media) embedded in tc
                                    [number:protected] => 214
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [212] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|fuel:1.0.0}
                                    [number:protected] => 215
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [213] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|fuel: owner: RailcraftAPI|core, dependents: [tc]
                                    [number:protected] => 216
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [214] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|core:1.7.10R1.1.0}
                                    [number:protected] => 217
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [215] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|core: owner: CoFHAPI, dependents: [excompressum]
                                    [number:protected] => 218
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [216] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ComputerCraft|API|Lua: owner: ComputerCraft, dependents: [tc]
                                    [number:protected] => 219
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [217] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent RailcraftAPI|core from APIContainer{RailcraftAPI|locomotive:1.1.0}
                                    [number:protected] => 220
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [218] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|locomotive:1.1.0}
                                    [number:protected] => 221
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [219] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|locomotive: owner: RailcraftAPI|carts, dependents: [tc]
                                    [number:protected] => 222
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [220] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|world:1.7.10R1.1.0}
                                    [number:protected] => 223
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [221] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|world: owner: CoFHAPI, dependents: [excompressum]
                                    [number:protected] => 224
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [222] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/INFO] [FML/]: Found mod(s) [exastris] containing declared API package cofh.api.energy (owned by CoFHAPI) without associated API reference
                                    [number:protected] => 225
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [223] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|energy:1.7.10R1.3.1}
                                    [number:protected] => 226
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [224] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|energy: owner: CoFHAPI, dependents: [tc, excompressum, exastris]
                                    [number:protected] => 227
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [225] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API AbyssalCraftAPI: owner: abyssalcraft, dependents: []
                                    [number:protected] => 228
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [226] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|tileentity:1.7.10R1.1.0}
                                    [number:protected] => 229
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [227] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|tileentity: owner: CoFHAPI, dependents: [excompressum]
                                    [number:protected] => 230
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [228] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|signals:2.3.0}
                                    [number:protected] => 231
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [229] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|signals: owner: RailcraftAPI|core, dependents: [tc]
                                    [number:protected] => 232
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [230] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI: owner: CoFHLib, dependents: [exastris, excompressum, tc]
                                    [number:protected] => 233
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [231] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|carts:1.6.0}
                                    [number:protected] => 234
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [232] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|carts: owner: RailcraftAPI|core, dependents: [tc]
                                    [number:protected] => 235
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [233] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|events:1.0.0}
                                    [number:protected] => 236
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [234] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|events: owner: RailcraftAPI|core, dependents: [tc]
                                    [number:protected] => 237
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [235] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ComputerCraft|API|Peripheral: owner: ComputerCraft, dependents: [tc]
                                    [number:protected] => 238
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [236] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|crafting:1.0.0}
                                    [number:protected] => 239
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [237] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|crafting: owner: RailcraftAPI|core, dependents: [tc]
                                    [number:protected] => 240
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [238] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|item:1.7.10R1.1.0}
                                    [number:protected] => 241
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [239] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|item: owner: CoFHAPI, dependents: [excompressum]
                                    [number:protected] => 242
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [240] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ComputerCraft|API|Redstone: owner: ComputerCraft, dependents: [tc]
                                    [number:protected] => 243
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [241] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent RailcraftAPI|core from APIContainer{RailcraftAPI|bore:1.0.0}
                                    [number:protected] => 244
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [242] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|bore:1.0.0}
                                    [number:protected] => 245
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [243] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|bore: owner: RailcraftAPI|carts, dependents: [tc]
                                    [number:protected] => 246
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [244] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ComputerCraft|API|Permissions: owner: ComputerCraft, dependents: [tc]
                                    [number:protected] => 247
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [245] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|items:1.0.0}
                                    [number:protected] => 248
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [246] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|items: owner: RailcraftAPI|core, dependents: [tc]
                                    [number:protected] => 249
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [247] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|tracks:2.3.0}
                                    [number:protected] => 250
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [248] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|tracks: owner: RailcraftAPI|core, dependents: [tc]
                                    [number:protected] => 251
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [249] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|modhelpers:1.7.10R1.1.0}
                                    [number:protected] => 252
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [250] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|modhelpers: owner: CoFHAPI, dependents: [excompressum]
                                    [number:protected] => 253
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [251] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ComputerCraft|API|Turtle: owner: ComputerCraft, dependents: [tc]
                                    [number:protected] => 254
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [252] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|block:1.7.10R1.1.0}
                                    [number:protected] => 255
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [253] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|block: owner: CoFHAPI, dependents: [excompressum, exastris]
                                    [number:protected] => 256
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [254] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|fluid:1.7.10R1.1.0}
                                    [number:protected] => 257
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [255] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|fluid: owner: CoFHAPI, dependents: [excompressum]
                                    [number:protected] => 258
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [256] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|core: owner: Railcraft, dependents: [tc]
                                    [number:protected] => 259
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [257] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ComputerCraft|API: owner: ComputerCraft, dependents: [tc]
                                    [number:protected] => 260
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [258] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|transport:1.7.10R1.1.0}
                                    [number:protected] => 261
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [259] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|transport: owner: CoFHAPI, dependents: [excompressum]
                                    [number:protected] => 262
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [260] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ComputerCraft|API|FileSystem: owner: ComputerCraft, dependents: [tc]
                                    [number:protected] => 263
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [261] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|helpers:1.1.0}
                                    [number:protected] => 264
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [262] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|helpers: owner: RailcraftAPI|core, dependents: [tc]
                                    [number:protected] => 265
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [263] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|electricity:2.0.0}
                                    [number:protected] => 266
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [264] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|electricity: owner: RailcraftAPI|core, dependents: [tc]
                                    [number:protected] => 267
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [265] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|inventory:1.7.10R1.1.0}
                                    [number:protected] => 268
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [266] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|inventory: owner: CoFHAPI, dependents: [excompressum]
                                    [number:protected] => 269
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [267] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API VeinMinerApi: owner: VeinMiner, dependents: [VeinMinerModSupport]
                                    [number:protected] => 270
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [268] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ComputerCraft|API|Media: owner: ComputerCraft, dependents: [tc]
                                    [number:protected] => 271
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [269] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: Received a system property request \'\'
                                    [number:protected] => 272
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [270] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/TRACE] [FML/]: System property request managing the state of 0 mods
                                    [number:protected] => 273
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [271] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: After merging, found state information for 0 mods
                                    [number:protected] => 274
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [272] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found translations in forge.jar [en_US, en_US, es_ES, fr_FR, ru_RU, de_DE, af_ZA, ar_SA, br_FR, ca_ES, cs_CZ, da_DK, el_GR, fa_IR, fi_FI, he_IL, hu_HU, it_IT, ja_JP, ko_KR, lt_LT, nb_NO, nl_NL, nn_NO, no_NO, pl_PL, pt_BR, pt_PT, ro_RO, sl_SI, sr_SP, sv_SE, tr_TR, uk_UA, vi_VN, zh_CN, zh_TW]
                                    [number:protected] => 275
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [273] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found translations in forge.jar [en_US, en_US, es_ES, fr_FR, ru_RU, de_DE, af_ZA, ar_SA, br_FR, ca_ES, cs_CZ, da_DK, el_GR, fa_IR, fi_FI, he_IL, hu_HU, it_IT, ja_JP, ko_KR, lt_LT, nb_NO, nl_NL, nn_NO, no_NO, pl_PL, pt_BR, pt_PT, ro_RO, sl_SI, sr_SP, sv_SE, tr_TR, uk_UA, vi_VN, zh_CN, zh_TW]
                                    [number:protected] => 276
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [274] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [abyssalcraft/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [abyssalcraft/]: Enabling mod abyssalcraft
                                    [number:protected] => 277
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [275] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found translations in AbyssalCraft-1.7.10-1.9.1.3-FINAL.jar [en_US, fr_FR, zh_CN]
                                    [number:protected] => 278
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [276] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [ArchimedesShipsPlus/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [ArchimedesShipsPlus/]: Enabling mod ArchimedesShipsPlus
                                    [number:protected] => 279
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [277] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found translations in archimedesshipsplus-1.7.10-1.7.11.jar [cs_CZ, en_US, fr_FR, nl_NL, pt_BR, ru_RU, zh_CN]
                                    [number:protected] => 280
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [278] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [customnpcs/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [customnpcs/]: Enabling mod customnpcs
                                    [number:protected] => 281
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [279] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found translations in CustomNPCs_1.7.10d(29oct17).jar [cs_CZ, de_DE, en_US, es_AR, es_MX, fr_FR, hu_HU, id_ID, ko_KR, nl_NL, pl_PL, pt_BR, ru_RU, sv_SE, zh_CN, zh_TW]
                                    [number:protected] => 282
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [280] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [thedalekmod/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [thedalekmod/]: Enabling mod thedalekmod
                                    [number:protected] => 283
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [281] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found translations in Dalek_Mod_1710.jar [en_US]
                                    [number:protected] => 284
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [282] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [exastris/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [exastris/]: Enabling mod exastris
                                    [number:protected] => 285
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [283] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found translations in Ex-Astris-MC1.7.10-1.16-36.jar [ko_KR, ru_RU, zh_CN, en_US]
                                    [number:protected] => 286
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [284] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [exnihilo/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [exnihilo/]: Enabling mod exnihilo
                                    [number:protected] => 287
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [285] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found translations in Ex-Nihilo-1.38-53.jar [ru_RU, en_GB, en_US, zh_CN]
                                    [number:protected] => 288
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [286] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [excompressum/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [excompressum/]: Enabling mod excompressum
                                    [number:protected] => 289
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [287] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found translations in excompressum-mc1.7.10-1.2.0.jar [en_US, zh_CN]
                                    [number:protected] => 290
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [288] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [lootbags/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [lootbags/]: Enabling mod lootbags
                                    [number:protected] => 291
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [289] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [FML/]: Found translations in LootBags-1.7.10-2.0.17.jar [en_US, ru_RU, zh_CN]
                                    [number:protected] => 292
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [290] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:40] [Server thread/DEBUG] [MCA/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:40] [Server thread/DEBUG] [MCA/]: Enabling mod MCA
                                    [number:protected] => 293
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [291] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Found translations in MCA-1.7.10-5.2.2-universal.jar [ar_SA, de_DE, en_US, es_ES, fi_FI, fr_FR, it_IT, ja_JP, ko_KR, mt_MT, pt_PT, ru_RU, sv_SE, tr_TR, zh_CN]
                                    [number:protected] => 294
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [292] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [ServerTools/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [ServerTools/]: Enabling mod ServerTools
                                    [number:protected] => 295
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [293] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [tc/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [tc/]: Enabling mod tc
                                    [number:protected] => 296
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [294] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Found translations in Traincraft-4.4.1_019.jar [cs_CZ, de_DE, en_US, es_ES, fr_FR, it_IT, nl_NL, pl_PL, pt_BR, ru_RU, si_SI, sk_SK]
                                    [number:protected] => 297
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [295] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [VeinMiner/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [VeinMiner/]: Enabling mod VeinMiner
                                    [number:protected] => 298
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [296] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Found translations in VeinMiner-1.7.10-0.36.0.496+28a7f13.jar [fr_FR, hu_HU, en_US, zh_CN, ja_JP]
                                    [number:protected] => 299
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [297] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [VeinMinerModSupport/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [VeinMinerModSupport/]: Enabling mod VeinMinerModSupport
                                    [number:protected] => 300
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [298] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Found translations in VeinMiner-1.7.10-0.36.0.496+28a7f13.jar [fr_FR, hu_HU, en_US, zh_CN, ja_JP]
                                    [number:protected] => 301
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [299] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [witchery/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [witchery/]: Enabling mod witchery
                                    [number:protected] => 302
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [300] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Found translations in witchery-1.7.10-0.24.1.jar [de_DE, en_US, es_ES, it_IT, ru_RU, zh_CN]
                                    [number:protected] => 303
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [301] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [FML/]: Verifying mod requirements are satisfied
                                    [number:protected] => 304
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [302] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/ERROR] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/ERROR] [FML/]: The mod ArchimedesShipsPlus (Archimedes\' Ships Plus) requires mods [MovingWorld] to be available
                                    [number:protected] => 305
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [303] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Mod sorting data
                                    [number:protected] => 306
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [304] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: 	abyssalcraft(AbyssalCraft:**.**.**.**): AbyssalCraft-1.7.10-1.9.1.3-FINAL.jar (required-after:Forge@[10.13.4.1614,))
                                    [number:protected] => 307
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [305] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: 	ArchimedesShipsPlus(Archimedes\' Ships Plus:1.7.10-ALPHA-0): archimedesshipsplus-1.7.10-1.7.11.jar (required-after:MovingWorld@)
                                    [number:protected] => 308
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [306] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: 	customnpcs(CustomNpcs:1.7.10d): CustomNPCs_1.7.10d(29oct17).jar ()
                                    [number:protected] => 309
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [307] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: 	thedalekmod(The Dalek Mod:39.75): Dalek_Mod_1710.jar ()
                                    [number:protected] => 310
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [308] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: 	exastris(Ex Astris:MC1.7.10-1.16-36): Ex-Astris-MC1.7.10-1.16-36.jar (required-after:Forge@[10.13.0.1180,);required-after:exnihilo;after:ThermalExpansion;after:Thaumcraft;after:TConstruct;after:TSteelworks;after:RedstoneArsenal;after:RotaryCraft;after:Metallurgy;after:ThermalFoundation;after:EnderIO;after:chisel;after:CoFHAPI|energy)
                                    [number:protected] => 311
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [309] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: 	exnihilo(Ex Nihilo:1.38-53): Ex-Nihilo-1.38-53.jar (required-after:Forge@[10.13.0.1180,);)
                                    [number:protected] => 312
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [310] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: 	excompressum(Ex Compressum:1.2.0): excompressum-mc1.7.10-1.2.0.jar (required-after:exnihilo)
                                    [number:protected] => 313
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [311] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: 	lootbags(Loot Bags:2.0.17): LootBags-1.7.10-2.0.17.jar ()
                                    [number:protected] => 314
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [312] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: 	MCA(Minecraft Comes Alive:1.7.10-5.2.2): MCA-1.7.10-5.2.2-universal.jar (required-after:RadixCore@[2.1.3,))
                                    [number:protected] => 315
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [313] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: 	ServerTools(ServerTools:1.7.10-2.2.0.79): ServerTools-CORE-1.7.10-2.2.0.79.jar (required-after:Forge@[10.12.1.1060,))
                                    [number:protected] => 316
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [314] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: 	tc(Traincraft:4.4.1_019): Traincraft-4.4.1_019.jar ()
                                    [number:protected] => 317
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [315] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: 	VeinMiner(Vein Miner:0.36.0_1.7.10-28a7f13): VeinMiner-1.7.10-0.36.0.496+28a7f13.jar ()
                                    [number:protected] => 318
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [316] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: 	VeinMinerModSupport(Mod Support:0.36.0_1.7.10-28a7f13): VeinMiner-1.7.10-0.36.0.496+28a7f13.jar ()
                                    [number:protected] => 319
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [317] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: 	witchery(Witchery:0.24.1): witchery-1.7.10-0.24.1.jar (required-after:Forge@[10.13.2.1277,);after:MineFactoryReloaded;after:NotEnoughItems;after:Waila;after:ForgeMultipart;after:AWWayofTime)
                                    [number:protected] => 320
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [318] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/WARN] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/WARN] [FML/]: Can\'t revert to frozen GameData state without freezing first.
                                    [number:protected] => 321
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [319] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [mcp/mcp]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [mcp/mcp]: Sending event FMLModIdMappingEvent to mod mcp
                                    [number:protected] => 322
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [320] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [mcp/mcp]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [mcp/mcp]: Sent event FMLModIdMappingEvent to mod mcp
                                    [number:protected] => 323
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [321] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Minecraft Coder Pack took 0.003s
                                    [number:protected] => 324
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [322] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [FML/FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [FML/FML]: Sending event FMLModIdMappingEvent to mod FML
                                    [number:protected] => 325
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [323] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [FML/FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [FML/FML]: Sent event FMLModIdMappingEvent to mod FML
                                    [number:protected] => 326
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [324] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Forge Mod Loader took 0.002s
                                    [number:protected] => 327
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [325] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [Forge/Forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [Forge/Forge]: Sending event FMLModIdMappingEvent to mod Forge
                                    [number:protected] => 328
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [326] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [Forge/Forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [Forge/Forge]: Sent event FMLModIdMappingEvent to mod Forge
                                    [number:protected] => 329
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [327] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Minecraft Forge took 0.008s
                                    [number:protected] => 330
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [328] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [abyssalcraft/abyssalcraft]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [abyssalcraft/abyssalcraft]: Sending event FMLModIdMappingEvent to mod abyssalcraft
                                    [number:protected] => 331
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [329] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [abyssalcraft/abyssalcraft]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [abyssalcraft/abyssalcraft]: Sent event FMLModIdMappingEvent to mod abyssalcraft
                                    [number:protected] => 332
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [330] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - AbyssalCraft took 0.001s
                                    [number:protected] => 333
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [331] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [ArchimedesShipsPlus/ArchimedesShipsPlus]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [ArchimedesShipsPlus/ArchimedesShipsPlus]: Sending event FMLModIdMappingEvent to mod ArchimedesShipsPlus
                                    [number:protected] => 334
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [332] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [ArchimedesShipsPlus/ArchimedesShipsPlus]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [ArchimedesShipsPlus/ArchimedesShipsPlus]: Sent event FMLModIdMappingEvent to mod ArchimedesShipsPlus
                                    [number:protected] => 335
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [333] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Archimedes\' Ships Plus took 0.001s
                                    [number:protected] => 336
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [334] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [customnpcs/customnpcs]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [customnpcs/customnpcs]: Sending event FMLModIdMappingEvent to mod customnpcs
                                    [number:protected] => 337
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [335] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [customnpcs/customnpcs]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [customnpcs/customnpcs]: Sent event FMLModIdMappingEvent to mod customnpcs
                                    [number:protected] => 338
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [336] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - CustomNpcs took 0.001s
                                    [number:protected] => 339
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [337] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [thedalekmod/thedalekmod]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [thedalekmod/thedalekmod]: Sending event FMLModIdMappingEvent to mod thedalekmod
                                    [number:protected] => 340
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [338] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [thedalekmod/thedalekmod]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [thedalekmod/thedalekmod]: Sent event FMLModIdMappingEvent to mod thedalekmod
                                    [number:protected] => 341
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [339] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - The Dalek Mod took 0.001s
                                    [number:protected] => 342
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [340] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [exastris/exastris]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [exastris/exastris]: Sending event FMLModIdMappingEvent to mod exastris
                                    [number:protected] => 343
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [341] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [exastris/exastris]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [exastris/exastris]: Sent event FMLModIdMappingEvent to mod exastris
                                    [number:protected] => 344
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [342] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Ex Astris took 0.002s
                                    [number:protected] => 345
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [343] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [exnihilo/exnihilo]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [exnihilo/exnihilo]: Sending event FMLModIdMappingEvent to mod exnihilo
                                    [number:protected] => 346
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [344] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [exnihilo/exnihilo]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [exnihilo/exnihilo]: Sent event FMLModIdMappingEvent to mod exnihilo
                                    [number:protected] => 347
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [345] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Ex Nihilo took 0.004s
                                    [number:protected] => 348
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [346] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [excompressum/excompressum]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [excompressum/excompressum]: Sending event FMLModIdMappingEvent to mod excompressum
                                    [number:protected] => 349
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [347] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [excompressum/excompressum]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [excompressum/excompressum]: Sent event FMLModIdMappingEvent to mod excompressum
                                    [number:protected] => 350
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [348] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Ex Compressum took 0.001s
                                    [number:protected] => 351
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [349] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [lootbags/lootbags]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [lootbags/lootbags]: Sending event FMLModIdMappingEvent to mod lootbags
                                    [number:protected] => 352
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [350] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [lootbags/lootbags]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [lootbags/lootbags]: Sent event FMLModIdMappingEvent to mod lootbags
                                    [number:protected] => 353
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [351] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Loot Bags took 0.001s
                                    [number:protected] => 354
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [352] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [MCA/MCA]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [MCA/MCA]: Sending event FMLModIdMappingEvent to mod MCA
                                    [number:protected] => 355
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [353] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [MCA/MCA]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [MCA/MCA]: Sent event FMLModIdMappingEvent to mod MCA
                                    [number:protected] => 356
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [354] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Minecraft Comes Alive took 0.001s
                                    [number:protected] => 357
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [355] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [ServerTools/ServerTools]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [ServerTools/ServerTools]: Sending event FMLModIdMappingEvent to mod ServerTools
                                    [number:protected] => 358
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [356] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [ServerTools/ServerTools]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [ServerTools/ServerTools]: Sent event FMLModIdMappingEvent to mod ServerTools
                                    [number:protected] => 359
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [357] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - ServerTools took 0.001s
                                    [number:protected] => 360
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [358] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [tc/tc]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [tc/tc]: Sending event FMLModIdMappingEvent to mod tc
                                    [number:protected] => 361
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [359] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [tc/tc]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [tc/tc]: Sent event FMLModIdMappingEvent to mod tc
                                    [number:protected] => 362
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [360] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Traincraft took 0.001s
                                    [number:protected] => 363
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [361] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [VeinMiner/VeinMiner]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [VeinMiner/VeinMiner]: Sending event FMLModIdMappingEvent to mod VeinMiner
                                    [number:protected] => 364
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [362] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [VeinMiner/VeinMiner]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [VeinMiner/VeinMiner]: Sent event FMLModIdMappingEvent to mod VeinMiner
                                    [number:protected] => 365
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [363] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Vein Miner took 0.001s
                                    [number:protected] => 366
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [364] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [VeinMinerModSupport/VeinMinerModSupport]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [VeinMinerModSupport/VeinMinerModSupport]: Sending event FMLModIdMappingEvent to mod VeinMinerModSupport
                                    [number:protected] => 367
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [365] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [VeinMinerModSupport/VeinMinerModSupport]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [VeinMinerModSupport/VeinMinerModSupport]: Sent event FMLModIdMappingEvent to mod VeinMinerModSupport
                                    [number:protected] => 368
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [366] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Mod Support took 0.001s
                                    [number:protected] => 369
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [367] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [witchery/witchery]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [witchery/witchery]: Sending event FMLModIdMappingEvent to mod witchery
                                    [number:protected] => 370
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [368] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [witchery/witchery]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [witchery/witchery]: Sent event FMLModIdMappingEvent to mod witchery
                                    [number:protected] => 371
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [369] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Witchery took 0.001s
                                    [number:protected] => 372
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [370] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Finished: ModIdMapping took 0.028s
                                    [number:protected] => 373
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [371] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/INFO] [FML/]: Applying holder lookups
                                    [number:protected] => 374
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [372] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/INFO] [FML/]: Holder lookups applied
                                    [number:protected] => 375
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [373] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [mcp/mcp]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [mcp/mcp]: Sending event FMLServerStoppedEvent to mod mcp
                                    [number:protected] => 376
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [374] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [mcp/mcp]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [mcp/mcp]: Sent event FMLServerStoppedEvent to mod mcp
                                    [number:protected] => 377
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [375] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Minecraft Coder Pack took 0.003s
                                    [number:protected] => 378
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [376] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [FML/FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [FML/FML]: Sending event FMLServerStoppedEvent to mod FML
                                    [number:protected] => 379
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [377] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [FML/FML]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [FML/FML]: Sent event FMLServerStoppedEvent to mod FML
                                    [number:protected] => 380
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [378] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Forge Mod Loader took 0.001s
                                    [number:protected] => 381
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [379] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [Forge/Forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [Forge/Forge]: Sending event FMLServerStoppedEvent to mod Forge
                                    [number:protected] => 382
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [380] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [Forge/Forge]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [Forge/Forge]: Sent event FMLServerStoppedEvent to mod Forge
                                    [number:protected] => 383
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [381] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Minecraft Forge took 0.002s
                                    [number:protected] => 384
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [382] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [abyssalcraft/abyssalcraft]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [abyssalcraft/abyssalcraft]: Sending event FMLServerStoppedEvent to mod abyssalcraft
                                    [number:protected] => 385
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [383] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [abyssalcraft/abyssalcraft]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [abyssalcraft/abyssalcraft]: Sent event FMLServerStoppedEvent to mod abyssalcraft
                                    [number:protected] => 386
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [384] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - AbyssalCraft took 0.001s
                                    [number:protected] => 387
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [385] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [ArchimedesShipsPlus/ArchimedesShipsPlus]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [ArchimedesShipsPlus/ArchimedesShipsPlus]: Sending event FMLServerStoppedEvent to mod ArchimedesShipsPlus
                                    [number:protected] => 388
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [386] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [ArchimedesShipsPlus/ArchimedesShipsPlus]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [ArchimedesShipsPlus/ArchimedesShipsPlus]: Sent event FMLServerStoppedEvent to mod ArchimedesShipsPlus
                                    [number:protected] => 389
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [387] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Archimedes\' Ships Plus took 0.002s
                                    [number:protected] => 390
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [388] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [customnpcs/customnpcs]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [customnpcs/customnpcs]: Sending event FMLServerStoppedEvent to mod customnpcs
                                    [number:protected] => 391
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [389] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [customnpcs/customnpcs]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [customnpcs/customnpcs]: Sent event FMLServerStoppedEvent to mod customnpcs
                                    [number:protected] => 392
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [390] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - CustomNpcs took 0.001s
                                    [number:protected] => 393
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [391] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [thedalekmod/thedalekmod]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [thedalekmod/thedalekmod]: Sending event FMLServerStoppedEvent to mod thedalekmod
                                    [number:protected] => 394
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [392] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [thedalekmod/thedalekmod]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [thedalekmod/thedalekmod]: Sent event FMLServerStoppedEvent to mod thedalekmod
                                    [number:protected] => 395
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [393] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - The Dalek Mod took 0.001s
                                    [number:protected] => 396
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [394] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [exastris/exastris]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [exastris/exastris]: Sending event FMLServerStoppedEvent to mod exastris
                                    [number:protected] => 397
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [395] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [exastris/exastris]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [exastris/exastris]: Sent event FMLServerStoppedEvent to mod exastris
                                    [number:protected] => 398
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [396] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Ex Astris took 0.001s
                                    [number:protected] => 399
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [397] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [exnihilo/exnihilo]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [exnihilo/exnihilo]: Sending event FMLServerStoppedEvent to mod exnihilo
                                    [number:protected] => 400
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [398] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [exnihilo/exnihilo]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [exnihilo/exnihilo]: Sent event FMLServerStoppedEvent to mod exnihilo
                                    [number:protected] => 401
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [399] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Ex Nihilo took 0.001s
                                    [number:protected] => 402
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [400] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [excompressum/excompressum]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [excompressum/excompressum]: Sending event FMLServerStoppedEvent to mod excompressum
                                    [number:protected] => 403
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [401] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [excompressum/excompressum]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [excompressum/excompressum]: Sent event FMLServerStoppedEvent to mod excompressum
                                    [number:protected] => 404
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [402] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Ex Compressum took 0.001s
                                    [number:protected] => 405
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [403] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [lootbags/lootbags]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [lootbags/lootbags]: Sending event FMLServerStoppedEvent to mod lootbags
                                    [number:protected] => 406
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [404] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [lootbags/lootbags]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [lootbags/lootbags]: Sent event FMLServerStoppedEvent to mod lootbags
                                    [number:protected] => 407
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [405] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Loot Bags took 0.000s
                                    [number:protected] => 408
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [406] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [MCA/MCA]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [MCA/MCA]: Sending event FMLServerStoppedEvent to mod MCA
                                    [number:protected] => 409
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [407] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [MCA/MCA]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [MCA/MCA]: Sent event FMLServerStoppedEvent to mod MCA
                                    [number:protected] => 410
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [408] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Minecraft Comes Alive took 0.004s
                                    [number:protected] => 411
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [409] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [ServerTools/ServerTools]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [ServerTools/ServerTools]: Sending event FMLServerStoppedEvent to mod ServerTools
                                    [number:protected] => 412
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [410] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [ServerTools/ServerTools]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [ServerTools/ServerTools]: Sent event FMLServerStoppedEvent to mod ServerTools
                                    [number:protected] => 413
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [411] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - ServerTools took 0.001s
                                    [number:protected] => 414
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [412] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [tc/tc]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [tc/tc]: Sending event FMLServerStoppedEvent to mod tc
                                    [number:protected] => 415
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [413] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [tc/tc]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [tc/tc]: Sent event FMLServerStoppedEvent to mod tc
                                    [number:protected] => 416
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [414] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Traincraft took 0.001s
                                    [number:protected] => 417
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [415] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [VeinMiner/VeinMiner]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [VeinMiner/VeinMiner]: Sending event FMLServerStoppedEvent to mod VeinMiner
                                    [number:protected] => 418
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [416] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [VeinMiner/VeinMiner]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [VeinMiner/VeinMiner]: Sent event FMLServerStoppedEvent to mod VeinMiner
                                    [number:protected] => 419
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [417] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Vein Miner took 0.002s
                                    [number:protected] => 420
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [418] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [VeinMinerModSupport/VeinMinerModSupport]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [VeinMinerModSupport/VeinMinerModSupport]: Sending event FMLServerStoppedEvent to mod VeinMinerModSupport
                                    [number:protected] => 421
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [419] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [VeinMinerModSupport/VeinMinerModSupport]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [VeinMinerModSupport/VeinMinerModSupport]: Sent event FMLServerStoppedEvent to mod VeinMinerModSupport
                                    [number:protected] => 422
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [420] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Mod Support took 0.001s
                                    [number:protected] => 423
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [421] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [witchery/witchery]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [witchery/witchery]: Sending event FMLServerStoppedEvent to mod witchery
                                    [number:protected] => 424
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [422] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/TRACE] [witchery/witchery]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/TRACE] [witchery/witchery]: Sent event FMLServerStoppedEvent to mod witchery
                                    [number:protected] => 425
                                )

                        )

                    [level:protected] => TRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [423] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Witchery took 0.002s
                                    [number:protected] => 426
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [424] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/DEBUG] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/DEBUG] [FML/]: Bar Finished: ServerStopped took 0.021s
                                    [number:protected] => 427
                                )

                        )

                    [level:protected] => DEBUG
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [425] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [03:23:41] [Server thread/INFO] [FML/]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [03:23:41] [Server thread/INFO] [FML/]: The state engine was in incorrect state CONSTRUCTING and forced into state SERVER_STOPPED. Errors may have been discarded.
                                    [number:protected] => 428
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 426
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [03:23:24] [main/DEBUG] [FML/]: Injecting tracing printstreams for STDOUT/STDERR.
[03:23:25] [main/INFO] [FML/]: Forge Mod Loader version 7.99.40.1614 for Minecraft 1.7.10 loading
[03:23:25] [main/INFO] [FML/]: Java is Java HotSpot(TM) 64-Bit Server VM, version 1.8.0_144, running on Linux:amd64:4.4.0-141-generic, installed at /aternos/bin/jdk1.8.0_144/jre
[03:23:25] [main/DEBUG] [FML/]: Java classpath at launch is forge.jar
[03:23:25] [main/DEBUG] [FML/]: Java library path at launch is /usr/java/packages/lib/amd64:/usr/lib64:/lib64:/lib:/usr/lib
[03:23:25] [main/DEBUG] [FML/]: Enabling runtime deobfuscation
[03:23:25] [main/DEBUG] [FML/]: Instantiating coremod class FMLCorePlugin
[03:23:25] [main/DEBUG] [FML/]: Added access transformer class cpw.mods.fml.common.asm.transformers.AccessTransformer to enqueued access transformers
[03:23:25] [main/DEBUG] [FML/]: Enqueued coremod FMLCorePlugin
[03:23:25] [main/DEBUG] [FML/]: Instantiating coremod class FMLForgePlugin
[03:23:25] [main/DEBUG] [FML/]: Added access transformer class net.minecraftforge.transformers.ForgeAccessTransformer to enqueued access transformers
[03:23:25] [main/DEBUG] [FML/]: Enqueued coremod FMLForgePlugin
[03:23:25] [main/DEBUG] [FML/]: All fundamental core mods are successfully located
[03:23:25] [main/DEBUG] [FML/]: Attempting to load commandline specified mods, relative to /aternos/server/.
[03:23:25] [main/DEBUG] [FML/]: Discovering coremods
[03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy AbyssalCraft-1.7.10-1.9.1.3-FINAL.jar
[03:23:25] [main/DEBUG] [FML/]: Not found coremod data in AbyssalCraft-1.7.10-1.9.1.3-FINAL.jar
[03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy archimedesshipsplus-1.7.10-1.7.11.jar
[03:23:25] [main/DEBUG] [FML/]: Not found coremod data in archimedesshipsplus-1.7.10-1.7.11.jar
[03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy CustomNPCs_1.7.10d(29oct17).jar
[03:23:25] [main/DEBUG] [FML/]: Not found coremod data in CustomNPCs_1.7.10d(29oct17).jar
[03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy Dalek_Mod_1710.jar
[03:23:25] [main/DEBUG] [FML/]: Not found coremod data in Dalek_Mod_1710.jar
[03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy Ex-Astris-MC1.7.10-1.16-36.jar
[03:23:25] [main/DEBUG] [FML/]: Not found coremod data in Ex-Astris-MC1.7.10-1.16-36.jar
[03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy Ex-Nihilo-1.38-53.jar
[03:23:25] [main/DEBUG] [FML/]: Not found coremod data in Ex-Nihilo-1.38-53.jar
[03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy excompressum-mc1.7.10-1.2.0.jar
[03:23:25] [main/DEBUG] [FML/]: Not found coremod data in excompressum-mc1.7.10-1.2.0.jar
[03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy LootBags-1.7.10-2.0.17.jar
[03:23:25] [main/DEBUG] [FML/]: Not found coremod data in LootBags-1.7.10-2.0.17.jar
[03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy MCA-1.7.10-5.2.2-universal.jar
[03:23:25] [main/DEBUG] [FML/]: Not found coremod data in MCA-1.7.10-5.2.2-universal.jar
[03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy ServerTools-CORE-1.7.10-2.2.0.79.jar
[03:23:25] [main/DEBUG] [FML/]: Not found coremod data in ServerTools-CORE-1.7.10-2.2.0.79.jar
[03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy Traincraft-4.4.1_019.jar
[03:23:25] [main/DEBUG] [FML/]: Not found coremod data in Traincraft-4.4.1_019.jar
[03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy VeinMiner-1.7.10-0.36.0.496+28a7f13.jar
[03:23:25] [main/DEBUG] [FML/]: Not found coremod data in VeinMiner-1.7.10-0.36.0.496+28a7f13.jar
[03:23:25] [main/DEBUG] [FML/]: Examining for coremod candidacy witchery-1.7.10-0.24.1.jar
[03:23:25] [main/DEBUG] [FML/]: Not found coremod data in witchery-1.7.10-0.24.1.jar
[03:23:25] [main/INFO] [LaunchWrapper/]: Loading tweak class name cpw.mods.fml.common.launcher.FMLInjectionAndSortingTweaker
[03:23:25] [main/INFO] [LaunchWrapper/]: Loading tweak class name cpw.mods.fml.common.launcher.FMLDeobfTweaker
[03:23:25] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.FMLInjectionAndSortingTweaker
[03:23:25] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.FMLInjectionAndSortingTweaker
[03:23:25] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
[03:23:25] [main/DEBUG] [FML/]: Injecting coremod FMLCorePlugin {cpw.mods.fml.relauncher.FMLCorePlugin} class transformers
[03:23:25] [main/TRACE] [FML/]: Registering transformer cpw.mods.fml.common.asm.transformers.MarkerTransformer
[03:23:25] [main/TRACE] [FML/]: Registering transformer cpw.mods.fml.common.asm.transformers.SideTransformer
[03:23:25] [main/TRACE] [FML/]: Registering transformer cpw.mods.fml.common.asm.transformers.EventSubscriptionTransformer
[03:23:25] [main/DEBUG] [FML/]: Injection complete
[03:23:25] [main/DEBUG] [FML/]: Running coremod plugin for FMLCorePlugin {cpw.mods.fml.relauncher.FMLCorePlugin}
[03:23:25] [main/DEBUG] [FML/]: Running coremod plugin FMLCorePlugin
[03:23:27] [main/DEBUG] [FML/]: Read 527 binary patches
[03:23:28] [main/INFO] [FML/]: Found valid fingerprint for Minecraft Forge. Certificate fingerprint e3c3d50c7c986df74c645c0ac54639741c90a557
[03:23:28] [main/DEBUG] [FML/]: Coremod plugin class FMLCorePlugin run successfully
[03:23:28] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.relauncher.CoreModManager$FMLPluginWrapper
[03:23:28] [main/DEBUG] [FML/]: Injecting coremod FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin} class transformers
[03:23:28] [main/TRACE] [FML/]: Registering transformer net.minecraftforge.classloading.FluidIdTransformer
[03:23:28] [main/DEBUG] [FML/]: Injection complete
[03:23:28] [main/DEBUG] [FML/]: Running coremod plugin for FMLForgePlugin {net.minecraftforge.classloading.FMLForgePlugin}
[03:23:28] [main/DEBUG] [FML/]: Running coremod plugin FMLForgePlugin
[03:23:28] [main/DEBUG] [FML/]: Coremod plugin class FMLForgePlugin run successfully
[03:23:28] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.FMLDeobfTweaker
[03:23:28] [main/DEBUG] [FML/]: Loaded 57 rules from AccessTransformer config file fml_at.cfg
[03:23:28] [main/DEBUG] [FML/]: Loaded 89 rules from AccessTransformer config file forge_at.cfg
[03:23:28] [main/DEBUG] [FML/]: Loaded 2 rules from AccessTransformer mod jar file /aternos/server/mods/ServerTools-CORE-1.7.10-2.2.0.79.jar!META-INF/servertools_at.cfg

[03:23:28] [main/DEBUG] [FML/]: Loaded 6 rules from AccessTransformer mod jar file /aternos/server/mods/witchery-1.7.10-0.24.1.jar!META-INF/witchery_at.cfg

[03:23:28] [main/DEBUG] [FML/]: Validating minecraft
[03:23:29] [main/DEBUG] [FML/]: Minecraft validated, launching...
[03:23:29] [main/INFO] [LaunchWrapper/]: Loading tweak class name cpw.mods.fml.common.launcher.TerminalTweaker
[03:23:29] [main/INFO] [LaunchWrapper/]: Calling tweak class cpw.mods.fml.common.launcher.TerminalTweaker
[03:23:30] [main/INFO] [LaunchWrapper/]: Launching wrapped minecraft {net.minecraft.server.MinecraftServer}
[03:23:36] [Server thread/INFO] [MinecraftForge/]: Attempting early MinecraftForge initialization
[03:23:36] [Server thread/INFO] [FML/]: MinecraftForge v10.13.4.1614 Initialized
[03:23:36] [Server thread/INFO] [FML/]: Replaced 183 ore recipies
[03:23:36] [Server thread/INFO] [MinecraftForge/]: Completed early MinecraftForge initialization
[03:23:36] [Server thread/DEBUG] [FML/]: File /aternos/server/config/injectedDependencies.json not found. No dependencies injected
[03:23:36] [Server thread/DEBUG] [FML/]: Building injected Mod Containers [cpw.mods.fml.common.FMLContainer, net.minecraftforge.common.ForgeModContainer]
[03:23:36] [Server thread/DEBUG] [FML/]: Attempting to load mods contained in the minecraft jar file and associated classes
[03:23:36] [Server thread/DEBUG] [FML/]: Minecraft is a file at /aternos/server/forge.jar, loading
[03:23:36] [Server thread/DEBUG] [FML/]: Minecraft jar mods loaded successfully
[03:23:36] [Server thread/INFO] [FML/]: Found 0 mods from the command line. Injecting into mod discoverer
[03:23:36] [Server thread/INFO] [FML/]: Searching /aternos/server/mods for mods
[03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file AbyssalCraft-1.7.10-1.9.1.3-FINAL.jar
[03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file archimedesshipsplus-1.7.10-1.7.11.jar
[03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file CustomNPCs_1.7.10d(29oct17).jar
[03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Dalek_Mod_1710.jar
[03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Ex-Astris-MC1.7.10-1.16-36.jar
[03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Ex-Nihilo-1.38-53.jar
[03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file excompressum-mc1.7.10-1.2.0.jar
[03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file LootBags-1.7.10-2.0.17.jar
[03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file MCA-1.7.10-5.2.2-universal.jar
[03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file ServerTools-CORE-1.7.10-2.2.0.79.jar
[03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file Traincraft-4.4.1_019.jar
[03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file VeinMiner-1.7.10-0.36.0.496+28a7f13.jar
[03:23:36] [Server thread/DEBUG] [FML/]: Found a candidate zip or jar file witchery-1.7.10-0.24.1.jar
[03:23:36] [Server thread/DEBUG] [FML/]: Examining file forge.jar for potential mods
[03:23:36] [Server thread/DEBUG] [FML/]: The mod container forge.jar appears to be missing an mcmod.info file
[03:23:37] [Server thread/DEBUG] [FML/]: Examining file AbyssalCraft-1.7.10-1.9.1.3-FINAL.jar for potential mods
[03:23:37] [Server thread/TRACE] [FML/]: Located mcmod.info file in file AbyssalCraft-1.7.10-1.9.1.3-FINAL.jar
[03:23:37] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (com.shinoow.abyssalcraft.AbyssalCraft) - loading
[03:23:37] [Server thread/TRACE] [abyssalcraft/]: Parsed dependency info : [Forge@[10.13.4.1614,)] [Forge@[10.13.4.1614,)] []
[03:23:37] [Server thread/DEBUG] [FML/]: Examining file archimedesshipsplus-1.7.10-1.7.11.jar for potential mods
[03:23:37] [Server thread/TRACE] [FML/]: Located mcmod.info file in file archimedesshipsplus-1.7.10-1.7.11.jar
[03:23:37] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (darkevilmac.archimedes.ArchimedesShipMod) - loading
[03:23:37] [Server thread/TRACE] [ArchimedesShipsPlus/]: Parsed dependency info : [MovingWorld] [MovingWorld] []
[03:23:37] [Server thread/DEBUG] [FML/]: Examining file CustomNPCs_1.7.10d(29oct17).jar for potential mods
[03:23:37] [Server thread/TRACE] [FML/]: Located mcmod.info file in file CustomNPCs_1.7.10d(29oct17).jar
[03:23:37] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (noppes.npcs.CustomNpcs) - loading
[03:23:37] [Server thread/TRACE] [customnpcs/]: Parsed dependency info : [] [] []
[03:23:38] [Server thread/DEBUG] [FML/]: Examining file Dalek_Mod_1710.jar for potential mods
[03:23:38] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Dalek_Mod_1710.jar
[03:23:38] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (thedalekmod.client.theDalekMod) - loading
[03:23:38] [Server thread/TRACE] [thedalekmod/]: Parsed dependency info : [] [] []
[03:23:38] [Server thread/DEBUG] [FML/]: Examining file Ex-Astris-MC1.7.10-1.16-36.jar for potential mods
[03:23:38] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Ex-Astris-MC1.7.10-1.16-36.jar
[03:23:38] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (ExAstris.ExAstris) - loading
[03:23:38] [Server thread/TRACE] [exastris/]: Parsed dependency info : [Forge@[10.13.0.1180,), exnihilo] [Forge@[10.13.0.1180,), exnihilo, ThermalExpansion, Thaumcraft, TConstruct, TSteelworks, RedstoneArsenal, RotaryCraft, Metallurgy, ThermalFoundation, EnderIO, chisel, CoFHAPI|energy] []
[03:23:38] [Server thread/DEBUG] [FML/]: Examining file Ex-Nihilo-1.38-53.jar for potential mods
[03:23:38] [Server thread/DEBUG] [FML/]: The mod container Ex-Nihilo-1.38-53.jar appears to be missing an mcmod.info file
[03:23:38] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (exnihilo.ExNihilo) - loading
[03:23:38] [Server thread/TRACE] [exnihilo/]: Parsed dependency info : [Forge@[10.13.0.1180,)] [Forge@[10.13.0.1180,)] []
[03:23:38] [Server thread/DEBUG] [FML/]: Examining file excompressum-mc1.7.10-1.2.0.jar for potential mods
[03:23:38] [Server thread/TRACE] [FML/]: Located mcmod.info file in file excompressum-mc1.7.10-1.2.0.jar
[03:23:38] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (net.blay09.mods.excompressum.ExCompressum) - loading
[03:23:38] [Server thread/TRACE] [excompressum/]: Parsed dependency info : [exnihilo] [exnihilo] []
[03:23:38] [Server thread/DEBUG] [excompressum/]: Attempting to load the file version.properties from excompressum-mc1.7.10-1.2.0.jar to locate a version number for excompressum
[03:23:38] [Server thread/WARN] [excompressum/]: Mod excompressum is missing the required element \'version\' and a version.properties file could not be found. Falling back to metadata version 1.2.0
[03:23:38] [Server thread/DEBUG] [FML/]: Examining file LootBags-1.7.10-2.0.17.jar for potential mods
[03:23:38] [Server thread/TRACE] [FML/]: Located mcmod.info file in file LootBags-1.7.10-2.0.17.jar
[03:23:38] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (mal.lootbags.LootBags) - loading
[03:23:38] [Server thread/TRACE] [lootbags/]: Parsed dependency info : [] [] []
[03:23:38] [Server thread/DEBUG] [FML/]: Examining file MCA-1.7.10-5.2.2-universal.jar for potential mods
[03:23:38] [Server thread/TRACE] [FML/]: Located mcmod.info file in file MCA-1.7.10-5.2.2-universal.jar
[03:23:38] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (mca.core.MCA) - loading
[03:23:38] [Server thread/TRACE] [MCA/]: Parsed dependency info : [RadixCore@[2.1.3,)] [RadixCore@[2.1.3,)] []
[03:23:39] [Server thread/DEBUG] [FML/]: Examining file ServerTools-CORE-1.7.10-2.2.0.79.jar for potential mods
[03:23:39] [Server thread/TRACE] [FML/]: Located mcmod.info file in file ServerTools-CORE-1.7.10-2.2.0.79.jar
[03:23:39] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (info.servertools.core.ServerTools) - loading
[03:23:39] [Server thread/TRACE] [ServerTools/]: Parsed dependency info : [Forge@[10.12.1.1060,)] [Forge@[10.12.1.1060,)] []
[03:23:39] [Server thread/DEBUG] [ServerTools/]: Attempting to load the file version.properties from ServerTools-CORE-1.7.10-2.2.0.79.jar to locate a version number for ServerTools
[03:23:39] [Server thread/DEBUG] [ServerTools/]: Found version 1.7.10-2.2.0.79 for mod ServerTools in version.properties, using
[03:23:39] [Server thread/DEBUG] [FML/]: Examining file Traincraft-4.4.1_019.jar for potential mods
[03:23:39] [Server thread/TRACE] [FML/]: Located mcmod.info file in file Traincraft-4.4.1_019.jar
[03:23:39] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (train.common.Traincraft) - loading
[03:23:39] [Server thread/TRACE] [tc/]: Using mcmod dependency info : [Forge@[10.13.4.1558,)] [Forge@[10.13.4.1558,), Railcraft@[**.**.**.**,)] [TConstruct]
[03:23:39] [Server thread/DEBUG] [FML/]: Examining file VeinMiner-1.7.10-0.36.0.496+28a7f13.jar for potential mods
[03:23:39] [Server thread/TRACE] [FML/]: Located mcmod.info file in file VeinMiner-1.7.10-0.36.0.496+28a7f13.jar
[03:23:39] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (portablejim.veinminer.VeinMiner) - loading
[03:23:39] [Server thread/TRACE] [VeinMiner/]: Parsed dependency info : [] [] []
[03:23:39] [Server thread/DEBUG] [VeinMiner/]: Attempting to load the file version.properties from VeinMiner-1.7.10-0.36.0.496+28a7f13.jar to locate a version number for VeinMiner
[03:23:39] [Server thread/DEBUG] [VeinMiner/]: Found version 0.36.0_1.7.10-28a7f13 for mod VeinMiner in version.properties, using
[03:23:39] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (portablejim.veinminermodsupport.VeinMinerModSupport) - loading
[03:23:39] [Server thread/TRACE] [VeinMinerModSupport/]: Parsed dependency info : [] [] []
[03:23:39] [Server thread/DEBUG] [VeinMinerModSupport/]: Attempting to load the file version.properties from VeinMiner-1.7.10-0.36.0.496+28a7f13.jar to locate a version number for VeinMinerModSupport
[03:23:39] [Server thread/DEBUG] [VeinMinerModSupport/]: Found version 0.36.0_1.7.10-28a7f13 for mod VeinMinerModSupport in version.properties, using
[03:23:39] [Server thread/DEBUG] [FML/]: Examining file witchery-1.7.10-0.24.1.jar for potential mods
[03:23:39] [Server thread/TRACE] [FML/]: Located mcmod.info file in file witchery-1.7.10-0.24.1.jar
[03:23:39] [Server thread/DEBUG] [FML/]: Identified a mod of type Lcpw/mods/fml/common/Mod; (com.emoniph.witchery.Witchery) - loading
[03:23:39] [Server thread/TRACE] [witchery/]: Parsed dependency info : [Forge@[10.13.2.1277,)] [Forge@[10.13.2.1277,), MineFactoryReloaded, NotEnoughItems, Waila, ForgeMultipart, AWWayofTime] []
[03:23:40] [Server thread/INFO] [FML/]: Forge Mod Loader has identified 17 mods to load
[03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.biome (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
[03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.block (owned by CoFHAPI providing CoFHAPI|block) embedded in excompressum
[03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.item (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
[03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.events (owned by RailcraftAPI|core providing RailcraftAPI|events) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API dan200.computercraft.api (owned by ComputerCraft providing ComputerCraft|API) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.carts.locomotive (owned by RailcraftAPI|carts providing RailcraftAPI|locomotive) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API dan200.computercraft.api.peripheral (owned by ComputerCraft providing ComputerCraft|API|Peripheral) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.internal (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
[03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.ritual (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
[03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.item (owned by CoFHAPI providing CoFHAPI|item) embedded in excompressum
[03:23:40] [Server thread/DEBUG] [FML/]: Found API portablejim.veinminer.api (owned by VeinMiner providing VeinMinerApi) embedded in VeinMiner
[03:23:40] [Server thread/DEBUG] [FML/]: Found API portablejim.veinminer.api (owned by VeinMiner providing VeinMinerApi) embedded in VeinMinerModSupport
[03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.core.items (owned by RailcraftAPI|core providing RailcraftAPI|items) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.necronomicon (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
[03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.energy (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
[03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.tileentity (owned by CoFHAPI providing CoFHAPI|tileentity) embedded in excompressum
[03:23:40] [Server thread/DEBUG] [FML/]: Found API dan200.computercraft.api.turtle (owned by ComputerCraft providing ComputerCraft|API|Turtle) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.helpers (owned by RailcraftAPI|core providing RailcraftAPI|helpers) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.carts (owned by RailcraftAPI|core providing RailcraftAPI|carts) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.inventory (owned by CoFHAPI providing CoFHAPI|inventory) embedded in excompressum
[03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.recipe (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
[03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.fuel (owned by RailcraftAPI|core providing RailcraftAPI|fuel) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.fluid (owned by CoFHAPI providing CoFHAPI|fluid) embedded in excompressum
[03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.energy.disruption (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
[03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
[03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api (owned by CoFHLib providing CoFHAPI) embedded in exastris
[03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.signals (owned by RailcraftAPI|core providing RailcraftAPI|signals) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.block (owned by CoFHAPI providing CoFHAPI|block) embedded in exastris
[03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.crafting (owned by RailcraftAPI|core providing RailcraftAPI|crafting) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API dan200.computercraft.api.permissions (owned by ComputerCraft providing ComputerCraft|API|Permissions) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.core (owned by CoFHAPI providing CoFHAPI|core) embedded in excompressum
[03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.electricity (owned by RailcraftAPI|core providing RailcraftAPI|electricity) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api (owned by CoFHLib providing CoFHAPI) embedded in excompressum
[03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.world (owned by CoFHAPI providing CoFHAPI|world) embedded in excompressum
[03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.energy (owned by CoFHAPI providing CoFHAPI|energy) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.modhelpers (owned by CoFHAPI providing CoFHAPI|modhelpers) embedded in excompressum
[03:23:40] [Server thread/DEBUG] [FML/]: Found API dan200.computercraft.api.lua (owned by ComputerCraft providing ComputerCraft|API|Lua) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.core (owned by Railcraft providing RailcraftAPI|core) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.energy (owned by CoFHAPI providing CoFHAPI|energy) embedded in excompressum
[03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.integration (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
[03:23:40] [Server thread/DEBUG] [FML/]: Found API dan200.computercraft.api.redstone (owned by ComputerCraft providing ComputerCraft|API|Redstone) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.carts.bore (owned by RailcraftAPI|carts providing RailcraftAPI|bore) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.entity (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
[03:23:40] [Server thread/DEBUG] [FML/]: Found API dan200.computercraft.api.filesystem (owned by ComputerCraft providing ComputerCraft|API|FileSystem) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api.transport (owned by CoFHAPI providing CoFHAPI|transport) embedded in excompressum
[03:23:40] [Server thread/DEBUG] [FML/]: Found API cofh.api (owned by CoFHLib providing CoFHAPI) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.block (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
[03:23:40] [Server thread/DEBUG] [FML/]: Found API com.shinoow.abyssalcraft.api.event (owned by abyssalcraft providing AbyssalCraftAPI) embedded in abyssalcraft
[03:23:40] [Server thread/DEBUG] [FML/]: Found API mods.railcraft.api.tracks (owned by RailcraftAPI|core providing RailcraftAPI|tracks) embedded in tc
[03:23:40] [Server thread/DEBUG] [FML/]: Found API dan200.computercraft.api.media (owned by ComputerCraft providing ComputerCraft|API|Media) embedded in tc
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|fuel:1.0.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|fuel: owner: RailcraftAPI|core, dependents: [tc]
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|core:1.7.10R1.1.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|core: owner: CoFHAPI, dependents: [excompressum]
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ComputerCraft|API|Lua: owner: ComputerCraft, dependents: [tc]
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent RailcraftAPI|core from APIContainer{RailcraftAPI|locomotive:1.1.0}
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|locomotive:1.1.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|locomotive: owner: RailcraftAPI|carts, dependents: [tc]
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|world:1.7.10R1.1.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|world: owner: CoFHAPI, dependents: [excompressum]
[03:23:40] [Server thread/INFO] [FML/]: Found mod(s) [exastris] containing declared API package cofh.api.energy (owned by CoFHAPI) without associated API reference
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|energy:1.7.10R1.3.1}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|energy: owner: CoFHAPI, dependents: [tc, excompressum, exastris]
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API AbyssalCraftAPI: owner: abyssalcraft, dependents: []
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|tileentity:1.7.10R1.1.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|tileentity: owner: CoFHAPI, dependents: [excompressum]
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|signals:2.3.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|signals: owner: RailcraftAPI|core, dependents: [tc]
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI: owner: CoFHLib, dependents: [exastris, excompressum, tc]
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|carts:1.6.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|carts: owner: RailcraftAPI|core, dependents: [tc]
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|events:1.0.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|events: owner: RailcraftAPI|core, dependents: [tc]
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ComputerCraft|API|Peripheral: owner: ComputerCraft, dependents: [tc]
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|crafting:1.0.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|crafting: owner: RailcraftAPI|core, dependents: [tc]
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|item:1.7.10R1.1.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|item: owner: CoFHAPI, dependents: [excompressum]
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ComputerCraft|API|Redstone: owner: ComputerCraft, dependents: [tc]
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent RailcraftAPI|core from APIContainer{RailcraftAPI|bore:1.0.0}
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|bore:1.0.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|bore: owner: RailcraftAPI|carts, dependents: [tc]
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ComputerCraft|API|Permissions: owner: ComputerCraft, dependents: [tc]
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|items:1.0.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|items: owner: RailcraftAPI|core, dependents: [tc]
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|tracks:2.3.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|tracks: owner: RailcraftAPI|core, dependents: [tc]
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|modhelpers:1.7.10R1.1.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|modhelpers: owner: CoFHAPI, dependents: [excompressum]
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ComputerCraft|API|Turtle: owner: ComputerCraft, dependents: [tc]
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|block:1.7.10R1.1.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|block: owner: CoFHAPI, dependents: [excompressum, exastris]
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|fluid:1.7.10R1.1.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|fluid: owner: CoFHAPI, dependents: [excompressum]
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|core: owner: Railcraft, dependents: [tc]
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ComputerCraft|API: owner: ComputerCraft, dependents: [tc]
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|transport:1.7.10R1.1.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|transport: owner: CoFHAPI, dependents: [excompressum]
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ComputerCraft|API|FileSystem: owner: ComputerCraft, dependents: [tc]
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|helpers:1.1.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|helpers: owner: RailcraftAPI|core, dependents: [tc]
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent Railcraft from APIContainer{RailcraftAPI|electricity:2.0.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API RailcraftAPI|electricity: owner: RailcraftAPI|core, dependents: [tc]
[03:23:40] [Server thread/TRACE] [FML/]: Removing upstream parent CoFHLib from APIContainer{CoFHAPI|inventory:1.7.10R1.1.0}
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API CoFHAPI|inventory: owner: CoFHAPI, dependents: [excompressum]
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API VeinMinerApi: owner: VeinMiner, dependents: [VeinMinerModSupport]
[03:23:40] [Server thread/DEBUG] [FML/]: Creating API container dummy for API ComputerCraft|API|Media: owner: ComputerCraft, dependents: [tc]
[03:23:40] [Server thread/TRACE] [FML/]: Received a system property request \'\'
[03:23:40] [Server thread/TRACE] [FML/]: System property request managing the state of 0 mods
[03:23:40] [Server thread/DEBUG] [FML/]: After merging, found state information for 0 mods
[03:23:40] [Server thread/DEBUG] [FML/]: Found translations in forge.jar [en_US, en_US, es_ES, fr_FR, ru_RU, de_DE, af_ZA, ar_SA, br_FR, ca_ES, cs_CZ, da_DK, el_GR, fa_IR, fi_FI, he_IL, hu_HU, it_IT, ja_JP, ko_KR, lt_LT, nb_NO, nl_NL, nn_NO, no_NO, pl_PL, pt_BR, pt_PT, ro_RO, sl_SI, sr_SP, sv_SE, tr_TR, uk_UA, vi_VN, zh_CN, zh_TW]
[03:23:40] [Server thread/DEBUG] [FML/]: Found translations in forge.jar [en_US, en_US, es_ES, fr_FR, ru_RU, de_DE, af_ZA, ar_SA, br_FR, ca_ES, cs_CZ, da_DK, el_GR, fa_IR, fi_FI, he_IL, hu_HU, it_IT, ja_JP, ko_KR, lt_LT, nb_NO, nl_NL, nn_NO, no_NO, pl_PL, pt_BR, pt_PT, ro_RO, sl_SI, sr_SP, sv_SE, tr_TR, uk_UA, vi_VN, zh_CN, zh_TW]
[03:23:40] [Server thread/DEBUG] [abyssalcraft/]: Enabling mod abyssalcraft
[03:23:40] [Server thread/DEBUG] [FML/]: Found translations in AbyssalCraft-1.7.10-1.9.1.3-FINAL.jar [en_US, fr_FR, zh_CN]
[03:23:40] [Server thread/DEBUG] [ArchimedesShipsPlus/]: Enabling mod ArchimedesShipsPlus
[03:23:40] [Server thread/DEBUG] [FML/]: Found translations in archimedesshipsplus-1.7.10-1.7.11.jar [cs_CZ, en_US, fr_FR, nl_NL, pt_BR, ru_RU, zh_CN]
[03:23:40] [Server thread/DEBUG] [customnpcs/]: Enabling mod customnpcs
[03:23:40] [Server thread/DEBUG] [FML/]: Found translations in CustomNPCs_1.7.10d(29oct17).jar [cs_CZ, de_DE, en_US, es_AR, es_MX, fr_FR, hu_HU, id_ID, ko_KR, nl_NL, pl_PL, pt_BR, ru_RU, sv_SE, zh_CN, zh_TW]
[03:23:40] [Server thread/DEBUG] [thedalekmod/]: Enabling mod thedalekmod
[03:23:40] [Server thread/DEBUG] [FML/]: Found translations in Dalek_Mod_1710.jar [en_US]
[03:23:40] [Server thread/DEBUG] [exastris/]: Enabling mod exastris
[03:23:40] [Server thread/DEBUG] [FML/]: Found translations in Ex-Astris-MC1.7.10-1.16-36.jar [ko_KR, ru_RU, zh_CN, en_US]
[03:23:40] [Server thread/DEBUG] [exnihilo/]: Enabling mod exnihilo
[03:23:40] [Server thread/DEBUG] [FML/]: Found translations in Ex-Nihilo-1.38-53.jar [ru_RU, en_GB, en_US, zh_CN]
[03:23:40] [Server thread/DEBUG] [excompressum/]: Enabling mod excompressum
[03:23:40] [Server thread/DEBUG] [FML/]: Found translations in excompressum-mc1.7.10-1.2.0.jar [en_US, zh_CN]
[03:23:40] [Server thread/DEBUG] [lootbags/]: Enabling mod lootbags
[03:23:40] [Server thread/DEBUG] [FML/]: Found translations in LootBags-1.7.10-2.0.17.jar [en_US, ru_RU, zh_CN]
[03:23:40] [Server thread/DEBUG] [MCA/]: Enabling mod MCA
[03:23:41] [Server thread/DEBUG] [FML/]: Found translations in MCA-1.7.10-5.2.2-universal.jar [ar_SA, de_DE, en_US, es_ES, fi_FI, fr_FR, it_IT, ja_JP, ko_KR, mt_MT, pt_PT, ru_RU, sv_SE, tr_TR, zh_CN]
[03:23:41] [Server thread/DEBUG] [ServerTools/]: Enabling mod ServerTools
[03:23:41] [Server thread/DEBUG] [tc/]: Enabling mod tc
[03:23:41] [Server thread/DEBUG] [FML/]: Found translations in Traincraft-4.4.1_019.jar [cs_CZ, de_DE, en_US, es_ES, fr_FR, it_IT, nl_NL, pl_PL, pt_BR, ru_RU, si_SI, sk_SK]
[03:23:41] [Server thread/DEBUG] [VeinMiner/]: Enabling mod VeinMiner
[03:23:41] [Server thread/DEBUG] [FML/]: Found translations in VeinMiner-1.7.10-0.36.0.496+28a7f13.jar [fr_FR, hu_HU, en_US, zh_CN, ja_JP]
[03:23:41] [Server thread/DEBUG] [VeinMinerModSupport/]: Enabling mod VeinMinerModSupport
[03:23:41] [Server thread/DEBUG] [FML/]: Found translations in VeinMiner-1.7.10-0.36.0.496+28a7f13.jar [fr_FR, hu_HU, en_US, zh_CN, ja_JP]
[03:23:41] [Server thread/DEBUG] [witchery/]: Enabling mod witchery
[03:23:41] [Server thread/DEBUG] [FML/]: Found translations in witchery-1.7.10-0.24.1.jar [de_DE, en_US, es_ES, it_IT, ru_RU, zh_CN]
[03:23:41] [Server thread/TRACE] [FML/]: Verifying mod requirements are satisfied
[03:23:41] [Server thread/ERROR] [FML/]: The mod ArchimedesShipsPlus (Archimedes\' Ships Plus) requires mods [MovingWorld] to be available
[03:23:41] [Server thread/DEBUG] [FML/]: Mod sorting data
[03:23:41] [Server thread/DEBUG] [FML/]: 	abyssalcraft(AbyssalCraft:**.**.**.**): AbyssalCraft-1.7.10-1.9.1.3-FINAL.jar (required-after:Forge@[10.13.4.1614,))
[03:23:41] [Server thread/DEBUG] [FML/]: 	ArchimedesShipsPlus(Archimedes\' Ships Plus:1.7.10-ALPHA-0): archimedesshipsplus-1.7.10-1.7.11.jar (required-after:MovingWorld@)
[03:23:41] [Server thread/DEBUG] [FML/]: 	customnpcs(CustomNpcs:1.7.10d): CustomNPCs_1.7.10d(29oct17).jar ()
[03:23:41] [Server thread/DEBUG] [FML/]: 	thedalekmod(The Dalek Mod:39.75): Dalek_Mod_1710.jar ()
[03:23:41] [Server thread/DEBUG] [FML/]: 	exastris(Ex Astris:MC1.7.10-1.16-36): Ex-Astris-MC1.7.10-1.16-36.jar (required-after:Forge@[10.13.0.1180,);required-after:exnihilo;after:ThermalExpansion;after:Thaumcraft;after:TConstruct;after:TSteelworks;after:RedstoneArsenal;after:RotaryCraft;after:Metallurgy;after:ThermalFoundation;after:EnderIO;after:chisel;after:CoFHAPI|energy)
[03:23:41] [Server thread/DEBUG] [FML/]: 	exnihilo(Ex Nihilo:1.38-53): Ex-Nihilo-1.38-53.jar (required-after:Forge@[10.13.0.1180,);)
[03:23:41] [Server thread/DEBUG] [FML/]: 	excompressum(Ex Compressum:1.2.0): excompressum-mc1.7.10-1.2.0.jar (required-after:exnihilo)
[03:23:41] [Server thread/DEBUG] [FML/]: 	lootbags(Loot Bags:2.0.17): LootBags-1.7.10-2.0.17.jar ()
[03:23:41] [Server thread/DEBUG] [FML/]: 	MCA(Minecraft Comes Alive:1.7.10-5.2.2): MCA-1.7.10-5.2.2-universal.jar (required-after:RadixCore@[2.1.3,))
[03:23:41] [Server thread/DEBUG] [FML/]: 	ServerTools(ServerTools:1.7.10-2.2.0.79): ServerTools-CORE-1.7.10-2.2.0.79.jar (required-after:Forge@[10.12.1.1060,))
[03:23:41] [Server thread/DEBUG] [FML/]: 	tc(Traincraft:4.4.1_019): Traincraft-4.4.1_019.jar ()
[03:23:41] [Server thread/DEBUG] [FML/]: 	VeinMiner(Vein Miner:0.36.0_1.7.10-28a7f13): VeinMiner-1.7.10-0.36.0.496+28a7f13.jar ()
[03:23:41] [Server thread/DEBUG] [FML/]: 	VeinMinerModSupport(Mod Support:0.36.0_1.7.10-28a7f13): VeinMiner-1.7.10-0.36.0.496+28a7f13.jar ()
[03:23:41] [Server thread/DEBUG] [FML/]: 	witchery(Witchery:0.24.1): witchery-1.7.10-0.24.1.jar (required-after:Forge@[10.13.2.1277,);after:MineFactoryReloaded;after:NotEnoughItems;after:Waila;after:ForgeMultipart;after:AWWayofTime)
[03:23:41] [Server thread/WARN] [FML/]: Can\'t revert to frozen GameData state without freezing first.
[03:23:41] [Server thread/TRACE] [mcp/mcp]: Sending event FMLModIdMappingEvent to mod mcp
[03:23:41] [Server thread/TRACE] [mcp/mcp]: Sent event FMLModIdMappingEvent to mod mcp
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Minecraft Coder Pack took 0.003s
[03:23:41] [Server thread/TRACE] [FML/FML]: Sending event FMLModIdMappingEvent to mod FML
[03:23:41] [Server thread/TRACE] [FML/FML]: Sent event FMLModIdMappingEvent to mod FML
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Forge Mod Loader took 0.002s
[03:23:41] [Server thread/TRACE] [Forge/Forge]: Sending event FMLModIdMappingEvent to mod Forge
[03:23:41] [Server thread/TRACE] [Forge/Forge]: Sent event FMLModIdMappingEvent to mod Forge
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Minecraft Forge took 0.008s
[03:23:41] [Server thread/TRACE] [abyssalcraft/abyssalcraft]: Sending event FMLModIdMappingEvent to mod abyssalcraft
[03:23:41] [Server thread/TRACE] [abyssalcraft/abyssalcraft]: Sent event FMLModIdMappingEvent to mod abyssalcraft
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - AbyssalCraft took 0.001s
[03:23:41] [Server thread/TRACE] [ArchimedesShipsPlus/ArchimedesShipsPlus]: Sending event FMLModIdMappingEvent to mod ArchimedesShipsPlus
[03:23:41] [Server thread/TRACE] [ArchimedesShipsPlus/ArchimedesShipsPlus]: Sent event FMLModIdMappingEvent to mod ArchimedesShipsPlus
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Archimedes\' Ships Plus took 0.001s
[03:23:41] [Server thread/TRACE] [customnpcs/customnpcs]: Sending event FMLModIdMappingEvent to mod customnpcs
[03:23:41] [Server thread/TRACE] [customnpcs/customnpcs]: Sent event FMLModIdMappingEvent to mod customnpcs
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - CustomNpcs took 0.001s
[03:23:41] [Server thread/TRACE] [thedalekmod/thedalekmod]: Sending event FMLModIdMappingEvent to mod thedalekmod
[03:23:41] [Server thread/TRACE] [thedalekmod/thedalekmod]: Sent event FMLModIdMappingEvent to mod thedalekmod
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - The Dalek Mod took 0.001s
[03:23:41] [Server thread/TRACE] [exastris/exastris]: Sending event FMLModIdMappingEvent to mod exastris
[03:23:41] [Server thread/TRACE] [exastris/exastris]: Sent event FMLModIdMappingEvent to mod exastris
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Ex Astris took 0.002s
[03:23:41] [Server thread/TRACE] [exnihilo/exnihilo]: Sending event FMLModIdMappingEvent to mod exnihilo
[03:23:41] [Server thread/TRACE] [exnihilo/exnihilo]: Sent event FMLModIdMappingEvent to mod exnihilo
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Ex Nihilo took 0.004s
[03:23:41] [Server thread/TRACE] [excompressum/excompressum]: Sending event FMLModIdMappingEvent to mod excompressum
[03:23:41] [Server thread/TRACE] [excompressum/excompressum]: Sent event FMLModIdMappingEvent to mod excompressum
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Ex Compressum took 0.001s
[03:23:41] [Server thread/TRACE] [lootbags/lootbags]: Sending event FMLModIdMappingEvent to mod lootbags
[03:23:41] [Server thread/TRACE] [lootbags/lootbags]: Sent event FMLModIdMappingEvent to mod lootbags
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Loot Bags took 0.001s
[03:23:41] [Server thread/TRACE] [MCA/MCA]: Sending event FMLModIdMappingEvent to mod MCA
[03:23:41] [Server thread/TRACE] [MCA/MCA]: Sent event FMLModIdMappingEvent to mod MCA
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Minecraft Comes Alive took 0.001s
[03:23:41] [Server thread/TRACE] [ServerTools/ServerTools]: Sending event FMLModIdMappingEvent to mod ServerTools
[03:23:41] [Server thread/TRACE] [ServerTools/ServerTools]: Sent event FMLModIdMappingEvent to mod ServerTools
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - ServerTools took 0.001s
[03:23:41] [Server thread/TRACE] [tc/tc]: Sending event FMLModIdMappingEvent to mod tc
[03:23:41] [Server thread/TRACE] [tc/tc]: Sent event FMLModIdMappingEvent to mod tc
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Traincraft took 0.001s
[03:23:41] [Server thread/TRACE] [VeinMiner/VeinMiner]: Sending event FMLModIdMappingEvent to mod VeinMiner
[03:23:41] [Server thread/TRACE] [VeinMiner/VeinMiner]: Sent event FMLModIdMappingEvent to mod VeinMiner
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Vein Miner took 0.001s
[03:23:41] [Server thread/TRACE] [VeinMinerModSupport/VeinMinerModSupport]: Sending event FMLModIdMappingEvent to mod VeinMinerModSupport
[03:23:41] [Server thread/TRACE] [VeinMinerModSupport/VeinMinerModSupport]: Sent event FMLModIdMappingEvent to mod VeinMinerModSupport
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Mod Support took 0.001s
[03:23:41] [Server thread/TRACE] [witchery/witchery]: Sending event FMLModIdMappingEvent to mod witchery
[03:23:41] [Server thread/TRACE] [witchery/witchery]: Sent event FMLModIdMappingEvent to mod witchery
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ModIdMapping - Witchery took 0.001s
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Finished: ModIdMapping took 0.028s
[03:23:41] [Server thread/INFO] [FML/]: Applying holder lookups
[03:23:41] [Server thread/INFO] [FML/]: Holder lookups applied
[03:23:41] [Server thread/TRACE] [mcp/mcp]: Sending event FMLServerStoppedEvent to mod mcp
[03:23:41] [Server thread/TRACE] [mcp/mcp]: Sent event FMLServerStoppedEvent to mod mcp
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Minecraft Coder Pack took 0.003s
[03:23:41] [Server thread/TRACE] [FML/FML]: Sending event FMLServerStoppedEvent to mod FML
[03:23:41] [Server thread/TRACE] [FML/FML]: Sent event FMLServerStoppedEvent to mod FML
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Forge Mod Loader took 0.001s
[03:23:41] [Server thread/TRACE] [Forge/Forge]: Sending event FMLServerStoppedEvent to mod Forge
[03:23:41] [Server thread/TRACE] [Forge/Forge]: Sent event FMLServerStoppedEvent to mod Forge
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Minecraft Forge took 0.002s
[03:23:41] [Server thread/TRACE] [abyssalcraft/abyssalcraft]: Sending event FMLServerStoppedEvent to mod abyssalcraft
[03:23:41] [Server thread/TRACE] [abyssalcraft/abyssalcraft]: Sent event FMLServerStoppedEvent to mod abyssalcraft
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - AbyssalCraft took 0.001s
[03:23:41] [Server thread/TRACE] [ArchimedesShipsPlus/ArchimedesShipsPlus]: Sending event FMLServerStoppedEvent to mod ArchimedesShipsPlus
[03:23:41] [Server thread/TRACE] [ArchimedesShipsPlus/ArchimedesShipsPlus]: Sent event FMLServerStoppedEvent to mod ArchimedesShipsPlus
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Archimedes\' Ships Plus took 0.002s
[03:23:41] [Server thread/TRACE] [customnpcs/customnpcs]: Sending event FMLServerStoppedEvent to mod customnpcs
[03:23:41] [Server thread/TRACE] [customnpcs/customnpcs]: Sent event FMLServerStoppedEvent to mod customnpcs
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - CustomNpcs took 0.001s
[03:23:41] [Server thread/TRACE] [thedalekmod/thedalekmod]: Sending event FMLServerStoppedEvent to mod thedalekmod
[03:23:41] [Server thread/TRACE] [thedalekmod/thedalekmod]: Sent event FMLServerStoppedEvent to mod thedalekmod
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - The Dalek Mod took 0.001s
[03:23:41] [Server thread/TRACE] [exastris/exastris]: Sending event FMLServerStoppedEvent to mod exastris
[03:23:41] [Server thread/TRACE] [exastris/exastris]: Sent event FMLServerStoppedEvent to mod exastris
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Ex Astris took 0.001s
[03:23:41] [Server thread/TRACE] [exnihilo/exnihilo]: Sending event FMLServerStoppedEvent to mod exnihilo
[03:23:41] [Server thread/TRACE] [exnihilo/exnihilo]: Sent event FMLServerStoppedEvent to mod exnihilo
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Ex Nihilo took 0.001s
[03:23:41] [Server thread/TRACE] [excompressum/excompressum]: Sending event FMLServerStoppedEvent to mod excompressum
[03:23:41] [Server thread/TRACE] [excompressum/excompressum]: Sent event FMLServerStoppedEvent to mod excompressum
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Ex Compressum took 0.001s
[03:23:41] [Server thread/TRACE] [lootbags/lootbags]: Sending event FMLServerStoppedEvent to mod lootbags
[03:23:41] [Server thread/TRACE] [lootbags/lootbags]: Sent event FMLServerStoppedEvent to mod lootbags
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Loot Bags took 0.000s
[03:23:41] [Server thread/TRACE] [MCA/MCA]: Sending event FMLServerStoppedEvent to mod MCA
[03:23:41] [Server thread/TRACE] [MCA/MCA]: Sent event FMLServerStoppedEvent to mod MCA
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Minecraft Comes Alive took 0.004s
[03:23:41] [Server thread/TRACE] [ServerTools/ServerTools]: Sending event FMLServerStoppedEvent to mod ServerTools
[03:23:41] [Server thread/TRACE] [ServerTools/ServerTools]: Sent event FMLServerStoppedEvent to mod ServerTools
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - ServerTools took 0.001s
[03:23:41] [Server thread/TRACE] [tc/tc]: Sending event FMLServerStoppedEvent to mod tc
[03:23:41] [Server thread/TRACE] [tc/tc]: Sent event FMLServerStoppedEvent to mod tc
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Traincraft took 0.001s
[03:23:41] [Server thread/TRACE] [VeinMiner/VeinMiner]: Sending event FMLServerStoppedEvent to mod VeinMiner
[03:23:41] [Server thread/TRACE] [VeinMiner/VeinMiner]: Sent event FMLServerStoppedEvent to mod VeinMiner
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Vein Miner took 0.002s
[03:23:41] [Server thread/TRACE] [VeinMinerModSupport/VeinMinerModSupport]: Sending event FMLServerStoppedEvent to mod VeinMinerModSupport
[03:23:41] [Server thread/TRACE] [VeinMinerModSupport/VeinMinerModSupport]: Sent event FMLServerStoppedEvent to mod VeinMinerModSupport
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Mod Support took 0.001s
[03:23:41] [Server thread/TRACE] [witchery/witchery]: Sending event FMLServerStoppedEvent to mod witchery
[03:23:41] [Server thread/TRACE] [witchery/witchery]: Sent event FMLServerStoppedEvent to mod witchery
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Step: ServerStopped - Witchery took 0.002s
[03:23:41] [Server thread/DEBUG] [FML/]: Bar Finished: ServerStopped took 0.021s
[03:23:41] [Server thread/INFO] [FML/]: The state engine was in incorrect state CONSTRUCTING and forced into state SERVER_STOPPED. Errors may have been discarded.
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Problem\Forge\ModDependencyProblem Object
                (
                    [dependencyMods:protected] => Array
                        (
                            [0] => MovingWorld
                        )

                    [modName:protected] => Archimedes\' Ships Plus
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Forge\ModInstallSolution Object
                                (
                                    [modVersion:protected] => 
                                    [modName:protected] => MovingWorld
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [03:23:41] [Server thread/ERROR] [FML/]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [03:23:41] [Server thread/ERROR] [FML/]: The mod ArchimedesShipsPlus (Archimedes\' Ships Plus) requires mods [MovingWorld] to be available
                                            [number:protected] => 305
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

        )

    [iterator:protected] => 0
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));
    }
}