<?php

class ForgeCrashReportTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/crash-reports/forge-crash-report.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\CrashReport\ForgeCrashReportLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ---- Minecraft Crash Report ----
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => TITLE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => WARNING: coremods are present:
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>   llibrary (llibrary-1.7.7-1.10.2.jar)
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>   IceAndFireForgeLoading (iceandfire-1.0.1.jar)
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>   IvToolkit (IvToolkit-1.3.3-1.10.jar)
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Contact their authors BEFORE contacting forge
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => // I blame Dinnerbone.
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => COMMENT
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Time: 2/3/22 8:45 PM
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Time:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Description: Ticking entity
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Description:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.NullPointerException: Ticking entity
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.common.BiomeDictionary.containsType(BiomeDictionary.java:440)
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.common.BiomeDictionary.isBiomeOfType(BiomeDictionary.java:261)
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.ferreusveritas.dynamictrees.util.CompatHelper.biomeHasType(CompatHelper.java:51)
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.ferreusveritas.dynamictrees.trees.TreeSpruce$SpeciesSpruce.isBiomePerfect(TreeSpruce.java:51)
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.ferreusveritas.dynamictrees.trees.Species.biomeSuitability(Species.java:735)
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.ferreusveritas.dynamictrees.items.Seed.onEntityItemUpdate(Seed.java:63)
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.entity.item.EntityItem.func_70071_h_(EntityItem.java:91)
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.World.func_72866_a(World.java:1967)
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.WorldServer.func_72866_a(WorldServer.java:839)
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.World.func_72870_g(World.java:1937)
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.World.func_72939_s(World.java:1750)
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.WorldServer.func_72939_s(WorldServer.java:620)
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.func_71190_q(MinecraftServer.java:709)
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.dedicated.DedicatedServer.func_71190_q(DedicatedServer.java:387)
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.func_71217_p(MinecraftServer.java:613)
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:471)
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:748)
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => A detailed walkthrough of the error, its code path and all known details is as follows:
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ---------------------------------------------------------------------------------------
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => -- Head --
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => TITLE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Thread: Server thread
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Thread:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Stacktrace:
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Stacktrace:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.common.BiomeDictionary.containsType(BiomeDictionary.java:440)
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraftforge.common.BiomeDictionary.isBiomeOfType(BiomeDictionary.java:261)
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.ferreusveritas.dynamictrees.util.CompatHelper.biomeHasType(CompatHelper.java:51)
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.ferreusveritas.dynamictrees.trees.TreeSpruce$SpeciesSpruce.isBiomePerfect(TreeSpruce.java:51)
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.ferreusveritas.dynamictrees.trees.Species.biomeSuitability(Species.java:735)
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at com.ferreusveritas.dynamictrees.items.Seed.onEntityItemUpdate(Seed.java:63)
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.entity.item.EntityItem.func_70071_h_(EntityItem.java:91)
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.World.func_72866_a(World.java:1967)
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.WorldServer.func_72866_a(WorldServer.java:839)
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.World.func_72870_g(World.java:1937)
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => -- Entity being ticked --
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => TITLE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Details:
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Details:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity Type: Item (net.minecraft.entity.item.EntityItem)
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Entity Type:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity ID: 85
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Entity ID:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity Name: item.item.spruceseed
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Entity Name:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity\'s Exact location: -37.80, 106.00, 82.88
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Entity\'s Exact location:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity\'s Block location: World: (-38,106,82), Chunk: (at 10,6,2 in -3,5; contains blocks -48,0,80 to -33,255,95), Region: (-1,0; contains chunks -32,0 to -1,31, blocks -512,0,0 to -1,255,511)
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Entity\'s Block location:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity\'s Momentum: 0.00, -0.00, 0.00
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Entity\'s Momentum:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity\'s Passengers: []
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Entity\'s Passengers:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Entity\'s Vehicle: ~~ERROR~~ NullPointerException: null
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Entity\'s Vehicle:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Stacktrace:
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Stacktrace:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.World.func_72939_s(World.java:1750)
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.world.WorldServer.func_72939_s(WorldServer.java:620)
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => -- Affected level --
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => TITLE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Details:
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Details:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level name: world
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Level name:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	All players: 1 total; [EntityPlayerMP[\'HabipErsz\'/291, l=\'world\', x=-2.36, y=97.00, z=88.37]]
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	All players:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Chunk stats: ServerChunkCache: 283 Drop: 0
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Chunk stats:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level seed: 6012911767305697032
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Level seed:
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level generator: ID 06 - OTG, ver 0. Features enabled: true
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Level generator:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level generator options: OpenTerrainGenerator
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Level generator options:
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level spawn location: World: (24,52,60), Chunk: (at 8,3,12 in 1,3; contains blocks 16,0,48 to 31,255,63), Region: (0,0; contains chunks 0,0 to 31,31, blocks 0,0,0 to 511,255,511)
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Level spawn location:
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level time: 12814 game time, 12814 day time
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Level time:
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level dimension: 0
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Level dimension:
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level storage version: 0x04ABD - Anvil
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Level storage version:
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level weather: Rain time: 1994 (now: false), thunder time: 47112 (now: false)
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Level weather:
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Level game mode: Game mode: survival (ID 0). Hardcore: false. Cheats: true
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Level game mode:
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Stacktrace:
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Stacktrace:
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.func_71190_q(MinecraftServer.java:709)
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.dedicated.DedicatedServer.func_71190_q(DedicatedServer.java:387)
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.func_71217_p(MinecraftServer.java:613)
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:471)
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:748)
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => STACKTRACE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => -- System Details --
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => TITLE
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Details:
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => Details:
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Minecraft Version: 1.10.2
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Minecraft Version:
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Operating System: Linux (amd64) version 5.4.0-91-generic
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Operating System:
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Java Version: 1.8.0_292, Oracle Corporation
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Java Version:
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Java VM Version: OpenJDK 64-Bit Server VM (mixed mode), Oracle Corporation
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Java VM Version:
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Memory: 822822056 bytes (784 MB) / 1903165440 bytes (1815 MB) up to 1903165440 bytes (1815 MB)
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Memory:
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	JVM Flags: 3 total; -XX:MaxMetaspaceSize=200M -Xmx1900M -Xms950M
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	JVM Flags:
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	IntCache: cache: 0, tcache: 0, allocated: 0, tallocated: 0
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	IntCache:
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	FML: MCP 9.32 Powered by Forge 12.18.3.2511 23 mods loaded, 23 mods active
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	FML:
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	States: \'U\' = Unloaded \'L\' = Loaded \'C\' = Constructed \'H\' = Pre-initialized \'I\' = Initialized \'J\' = Post-initialized \'A\' = Available \'D\' = Disabled \'E\' = Errored
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	States:
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	mcp{9.19} [Minecraft Coder Pack] (minecraft.jar)
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	FML{**.**.**.**} [Forge Mod Loader] (forge.jar)
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	Forge{12.18.3.2511} [Minecraft Forge] (forge.jar)
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	ivtoolkit{1.3.3-1.10} [IvToolkit] (minecraft.jar)
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	openterraingenerator{v20} [Open Terrain Generator] (OpenTerrainGenerator-1.10.2-v21.jar)
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	biomebundle{5.1} [Biome Bundle] (Biome_Bundle-1.10.2-v5.1.jar)
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	blockarmor{2.4.11} [Block Armor] (BlockArmor-1.10.2-2.4.11.jar)
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	carryon{1.9.1} [Carry On] (CarryOn MC1.10.2 v1.9.1.jar)
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	compatlayer{0.3.1} [compatlayer] (compatlayer-1.10-0.3.1.jar)
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	dynamictrees{1.10.2-0.7.4} [Dynamic Trees] (DynamicTrees-1.10.2-0.7.4.jar)
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	wizardry{2.1.2} [Electroblob\'s Wizardry] (Electroblob\'s Wizardry - 2.1.2 - MC 1.10.2.jar)
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	Waila{1.8.17-B31_1.10.2} [Waila] (Hwyla-1.8.17-B31_1.10.2.jar)
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	llibrary{1.7.7} [LLibrary] (llibrary-1.7.7-1.10.2.jar)
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	iceandfire{1.0.1} [Ice and Fire] (iceandfire-1.0.1.jar)
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	JEI{**.**.**.**} [Just Enough Items] (jei_1.10.2-3.14.7.420.jar)
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	journeymap{1.10.2-5.5.2} [JourneyMap] (journeymap-1.10.2-5.5.2.jar)
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	lootbags{2.5.0} [Loot Bags] (LootBags-1.10.2-2.5.0.jar)
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	notenoughwands{1.5.5} [Not Enough Wands] (notenoughwands-1.1x-1.5.5.jar)
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	ProjectE{1.10.2-PE1.3.1} [ProjectE] (ProjectE-1.10.2-PE1.3.1.jar)
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	roguelike{1.5.9} [Roguelike Dungeons] (RoguelikeDungeons-1.10.2-1.5.9.jar)
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	tp{1.2.5} [Tiny Progressions] (tinyprogressions-1.10.2-1.2.6.jar)
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	VeinMiner{0.38.2_1.9-127e28f} [Vein Miner] (VeinMiner-1.9-0.38.2.624+127e28f.jar)
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	UCHIJAAAA	VeinMinerModSupport{0.38.2_1.9-127e28f} [Mod Support] (VeinMiner-1.9-0.38.2.624+127e28f.jar)
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Loaded coremods (and transformers):
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Loaded coremods (and transformers):
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => llibrary (llibrary-1.7.7-1.10.2.jar)
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>   net.ilexiconn.llibrary.server.core.plugin.LLibraryTransformer
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>   net.ilexiconn.llibrary.server.core.patcher.LLibraryRuntimePatcher
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => IceAndFireForgeLoading (iceandfire-1.0.1.jar)
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] =>   com.github.alexthe666.iceandfire.access.IceAndFireTransformer
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => IvToolkit (IvToolkit-1.3.3-1.10.jar)
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Profiler Position: N/A (disabled)
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Profiler Position:
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Player Count: 1 / 20; [EntityPlayerMP[\'HabipErsz\'/291, l=\'world\', x=-2.36, y=97.00, z=88.37]]
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Player Count:
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Is Modded: Definitely; Server brand changed to \'fml,forge\'
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Is Modded:
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Type: Dedicated Server (map_server.txt)
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => 	Type:
                )

        )

    [iterator:protected] => 131
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => ---- Minecraft Crash Report ----

WARNING: coremods are present:
  llibrary (llibrary-1.7.7-1.10.2.jar)
  IceAndFireForgeLoading (iceandfire-1.0.1.jar)
  IvToolkit (IvToolkit-1.3.3-1.10.jar)
Contact their authors BEFORE contacting forge

// I blame Dinnerbone.

Time: 2/3/22 8:45 PM
Description: Ticking entity

java.lang.NullPointerException: Ticking entity
	at net.minecraftforge.common.BiomeDictionary.containsType(BiomeDictionary.java:440)
	at net.minecraftforge.common.BiomeDictionary.isBiomeOfType(BiomeDictionary.java:261)
	at com.ferreusveritas.dynamictrees.util.CompatHelper.biomeHasType(CompatHelper.java:51)
	at com.ferreusveritas.dynamictrees.trees.TreeSpruce$SpeciesSpruce.isBiomePerfect(TreeSpruce.java:51)
	at com.ferreusveritas.dynamictrees.trees.Species.biomeSuitability(Species.java:735)
	at com.ferreusveritas.dynamictrees.items.Seed.onEntityItemUpdate(Seed.java:63)
	at net.minecraft.entity.item.EntityItem.func_70071_h_(EntityItem.java:91)
	at net.minecraft.world.World.func_72866_a(World.java:1967)
	at net.minecraft.world.WorldServer.func_72866_a(WorldServer.java:839)
	at net.minecraft.world.World.func_72870_g(World.java:1937)
	at net.minecraft.world.World.func_72939_s(World.java:1750)
	at net.minecraft.world.WorldServer.func_72939_s(WorldServer.java:620)
	at net.minecraft.server.MinecraftServer.func_71190_q(MinecraftServer.java:709)
	at net.minecraft.server.dedicated.DedicatedServer.func_71190_q(DedicatedServer.java:387)
	at net.minecraft.server.MinecraftServer.func_71217_p(MinecraftServer.java:613)
	at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:471)
	at java.lang.Thread.run(Thread.java:748)


A detailed walkthrough of the error, its code path and all known details is as follows:
---------------------------------------------------------------------------------------

-- Head --
Thread: Server thread
Stacktrace:
	at net.minecraftforge.common.BiomeDictionary.containsType(BiomeDictionary.java:440)
	at net.minecraftforge.common.BiomeDictionary.isBiomeOfType(BiomeDictionary.java:261)
	at com.ferreusveritas.dynamictrees.util.CompatHelper.biomeHasType(CompatHelper.java:51)
	at com.ferreusveritas.dynamictrees.trees.TreeSpruce$SpeciesSpruce.isBiomePerfect(TreeSpruce.java:51)
	at com.ferreusveritas.dynamictrees.trees.Species.biomeSuitability(Species.java:735)
	at com.ferreusveritas.dynamictrees.items.Seed.onEntityItemUpdate(Seed.java:63)
	at net.minecraft.entity.item.EntityItem.func_70071_h_(EntityItem.java:91)
	at net.minecraft.world.World.func_72866_a(World.java:1967)
	at net.minecraft.world.WorldServer.func_72866_a(WorldServer.java:839)
	at net.minecraft.world.World.func_72870_g(World.java:1937)

-- Entity being ticked --
Details:
	Entity Type: Item (net.minecraft.entity.item.EntityItem)
	Entity ID: 85
	Entity Name: item.item.spruceseed
	Entity\'s Exact location: -37.80, 106.00, 82.88
	Entity\'s Block location: World: (-38,106,82), Chunk: (at 10,6,2 in -3,5; contains blocks -48,0,80 to -33,255,95), Region: (-1,0; contains chunks -32,0 to -1,31, blocks -512,0,0 to -1,255,511)
	Entity\'s Momentum: 0.00, -0.00, 0.00
	Entity\'s Passengers: []
	Entity\'s Vehicle: ~~ERROR~~ NullPointerException: null
Stacktrace:
	at net.minecraft.world.World.func_72939_s(World.java:1750)
	at net.minecraft.world.WorldServer.func_72939_s(WorldServer.java:620)

-- Affected level --
Details:
	Level name: world
	All players: 1 total; [EntityPlayerMP[\'HabipErsz\'/291, l=\'world\', x=-2.36, y=97.00, z=88.37]]
	Chunk stats: ServerChunkCache: 283 Drop: 0
	Level seed: 6012911767305697032
	Level generator: ID 06 - OTG, ver 0. Features enabled: true
	Level generator options: OpenTerrainGenerator
	Level spawn location: World: (24,52,60), Chunk: (at 8,3,12 in 1,3; contains blocks 16,0,48 to 31,255,63), Region: (0,0; contains chunks 0,0 to 31,31, blocks 0,0,0 to 511,255,511)
	Level time: 12814 game time, 12814 day time
	Level dimension: 0
	Level storage version: 0x04ABD - Anvil
	Level weather: Rain time: 1994 (now: false), thunder time: 47112 (now: false)
	Level game mode: Game mode: survival (ID 0). Hardcore: false. Cheats: true
Stacktrace:
	at net.minecraft.server.MinecraftServer.func_71190_q(MinecraftServer.java:709)
	at net.minecraft.server.dedicated.DedicatedServer.func_71190_q(DedicatedServer.java:387)
	at net.minecraft.server.MinecraftServer.func_71217_p(MinecraftServer.java:613)
	at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:471)
	at java.lang.Thread.run(Thread.java:748)

-- System Details --
Details:
	Minecraft Version: 1.10.2
	Operating System: Linux (amd64) version 5.4.0-91-generic
	Java Version: 1.8.0_292, Oracle Corporation
	Java VM Version: OpenJDK 64-Bit Server VM (mixed mode), Oracle Corporation
	Memory: 822822056 bytes (784 MB) / 1903165440 bytes (1815 MB) up to 1903165440 bytes (1815 MB)
	JVM Flags: 3 total; -XX:MaxMetaspaceSize=200M -Xmx1900M -Xms950M
	IntCache: cache: 0, tcache: 0, allocated: 0, tallocated: 0
	FML: MCP 9.32 Powered by Forge 12.18.3.2511 23 mods loaded, 23 mods active
	States: \'U\' = Unloaded \'L\' = Loaded \'C\' = Constructed \'H\' = Pre-initialized \'I\' = Initialized \'J\' = Post-initialized \'A\' = Available \'D\' = Disabled \'E\' = Errored
	UCHIJAAAA	mcp{9.19} [Minecraft Coder Pack] (minecraft.jar)
	UCHIJAAAA	FML{**.**.**.**} [Forge Mod Loader] (forge.jar)
	UCHIJAAAA	Forge{12.18.3.2511} [Minecraft Forge] (forge.jar)
	UCHIJAAAA	ivtoolkit{1.3.3-1.10} [IvToolkit] (minecraft.jar)
	UCHIJAAAA	openterraingenerator{v20} [Open Terrain Generator] (OpenTerrainGenerator-1.10.2-v21.jar)
	UCHIJAAAA	biomebundle{5.1} [Biome Bundle] (Biome_Bundle-1.10.2-v5.1.jar)
	UCHIJAAAA	blockarmor{2.4.11} [Block Armor] (BlockArmor-1.10.2-2.4.11.jar)
	UCHIJAAAA	carryon{1.9.1} [Carry On] (CarryOn MC1.10.2 v1.9.1.jar)
	UCHIJAAAA	compatlayer{0.3.1} [compatlayer] (compatlayer-1.10-0.3.1.jar)
	UCHIJAAAA	dynamictrees{1.10.2-0.7.4} [Dynamic Trees] (DynamicTrees-1.10.2-0.7.4.jar)
	UCHIJAAAA	wizardry{2.1.2} [Electroblob\'s Wizardry] (Electroblob\'s Wizardry - 2.1.2 - MC 1.10.2.jar)
	UCHIJAAAA	Waila{1.8.17-B31_1.10.2} [Waila] (Hwyla-1.8.17-B31_1.10.2.jar)
	UCHIJAAAA	llibrary{1.7.7} [LLibrary] (llibrary-1.7.7-1.10.2.jar)
	UCHIJAAAA	iceandfire{1.0.1} [Ice and Fire] (iceandfire-1.0.1.jar)
	UCHIJAAAA	JEI{**.**.**.**} [Just Enough Items] (jei_1.10.2-3.14.7.420.jar)
	UCHIJAAAA	journeymap{1.10.2-5.5.2} [JourneyMap] (journeymap-1.10.2-5.5.2.jar)
	UCHIJAAAA	lootbags{2.5.0} [Loot Bags] (LootBags-1.10.2-2.5.0.jar)
	UCHIJAAAA	notenoughwands{1.5.5} [Not Enough Wands] (notenoughwands-1.1x-1.5.5.jar)
	UCHIJAAAA	ProjectE{1.10.2-PE1.3.1} [ProjectE] (ProjectE-1.10.2-PE1.3.1.jar)
	UCHIJAAAA	roguelike{1.5.9} [Roguelike Dungeons] (RoguelikeDungeons-1.10.2-1.5.9.jar)
	UCHIJAAAA	tp{1.2.5} [Tiny Progressions] (tinyprogressions-1.10.2-1.2.6.jar)
	UCHIJAAAA	VeinMiner{0.38.2_1.9-127e28f} [Vein Miner] (VeinMiner-1.9-0.38.2.624+127e28f.jar)
	UCHIJAAAA	VeinMinerModSupport{0.38.2_1.9-127e28f} [Mod Support] (VeinMiner-1.9-0.38.2.624+127e28f.jar)
	Loaded coremods (and transformers):
llibrary (llibrary-1.7.7-1.10.2.jar)
  net.ilexiconn.llibrary.server.core.plugin.LLibraryTransformer
  net.ilexiconn.llibrary.server.core.patcher.LLibraryRuntimePatcher
IceAndFireForgeLoading (iceandfire-1.0.1.jar)
  com.github.alexthe666.iceandfire.access.IceAndFireTransformer
IvToolkit (IvToolkit-1.3.3-1.10.jar)

	Profiler Position: N/A (disabled)
	Player Count: 1 / 20; [EntityPlayerMP[\'HabipErsz\'/291, l=\'world\', x=-2.36, y=97.00, z=88.37]]
	Is Modded: Definitely; Server brand changed to \'fml,forge\'
	Type: Dedicated Server (map_server.txt)
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Problem\CrashReport\TickingEntityProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Description: Ticking entity
                                            [number:protected] => 12
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => Description:
                        )

                    [counter:protected] => 4
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\CrashReport\RemoveEntitySolution Object
                                (
                                    [name:protected] => item.item.spruceseed
                                    [locationX:protected] => -37.8
                                    [locationY:protected] => 106
                                    [locationZ:protected] => 82.88
                                )

                        )

                    [iterator:protected] => 0
                    [matchedPattern:protected] => description
                    [type:protected] => Item
                    [name:protected] => item.item.spruceseed
                    [locationX:protected] => -37.8
                    [locationY:protected] => 106
                    [locationZ:protected] => 82.88
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\CrashReport\VanillaVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	Minecraft Version: 1.10.2
                                            [number:protected] => 88
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => 	Minecraft Version:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.10.2
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("The entity 'item.item.spruceseed' at the location -37.8, 106, 82.88 is causing issues while ticking.", $analysis[0]->getMessage());
        $this->assertEquals("Remove the entity 'item.item.spruceseed' at the location -37.8, 106, 82.88.", $analysis[0][0]->getMessage());

        $this->assertEquals("Minecraft version: 1.10.2", $analysis[1]->getMessage());

    }
}