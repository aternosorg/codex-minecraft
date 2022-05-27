<?php

class VanillaForgeTickingEntityTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/vanilla/vanilla-forge-ticking-entity.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\VanillaLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:20:04] [Server thread/INFO]: Starting minecraft server version 1.10.2
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:20:04] [Server thread/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:21:57] [Server thread/INFO]: Loading properties
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:21:57] [Server thread/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:21:57] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:21:57] [Server thread/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:21:57] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:21:57] [Server thread/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:21:57] [Server thread/INFO]: Starting Minecraft server on *:10272
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:21:57] [Server thread/INFO]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:21:57] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:21:57] [Server thread/INFO]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:22:34] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:22:34] [Server thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:22:39] [Server thread/INFO]: Preparing start region for level 0
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:22:39] [Server thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:22:41] [Server thread/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:22:41] [Server thread/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:22:42] [Server thread/INFO]: Preparing spawn area: 8%
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:22:42] [Server thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:22:43] [Server thread/INFO]: Preparing spawn area: 23%
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:22:43] [Server thread/INFO]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:22:44] [Server thread/INFO]: Preparing spawn area: 37%
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:22:44] [Server thread/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:22:45] [Server thread/INFO]: Preparing spawn area: 56%
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:22:45] [Server thread/INFO]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:22:46] [Server thread/INFO]: Preparing spawn area: 71%
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:22:46] [Server thread/INFO]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:22:47] [Server thread/INFO]: Preparing spawn area: 87%
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:22:47] [Server thread/INFO]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:22:48] [Server thread/INFO]: Preparing spawn area: 98%
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:22:48] [Server thread/INFO]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:22:48] [Server thread/INFO]: Done (14.532s)! For help, type "help" or "?"
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:22:48] [Server thread/INFO]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:22:48] [Server thread/INFO]: Starting GS4 status listener
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:22:48] [Server thread/INFO]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:22:48] [Query Listener #1/INFO]: Query running on **.**.**.**:10272
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:22:48] [Query Listener #1/INFO]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:01] [Server thread/ERROR]: Encountered an unexpected exception
                                    [number:protected] => 20
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.minecraft.util.ReportedException: Ticking block entity
                                    [number:protected] => 21
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.func_71190_q(MinecraftServer.java:715) ~[MinecraftServer.class:?]
                                    [number:protected] => 22
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.dedicated.DedicatedServer.func_71190_q(DedicatedServer.java:387) ~[ld.class:?]
                                    [number:protected] => 23
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.func_71217_p(MinecraftServer.java:613) ~[MinecraftServer.class:?]
                                    [number:protected] => 24
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:471) [MinecraftServer.class:?]
                                    [number:protected] => 25
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 26
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.NoSuchMethodError: nc.tile.energy.TileEnergy.addTileToENet()V
                                    [number:protected] => 27
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at nc.tile.energy.TileEnergy.onAdded(TileEnergy.java:57) ~[TileEnergy.class:?]
                                    [number:protected] => 28
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at nc.tile.processor.TileEnergyItemProcessor.onAdded(TileEnergyItemProcessor.java:127) ~[TileEnergyItemProcessor.class:?]
                                    [number:protected] => 29
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at nc.tile.NCTile.func_73660_a(NCTile.java:25) ~[NCTile.class:?]
                                    [number:protected] => 30
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at nc.tile.energy.TileEnergy.func_73660_a(TileEnergy.java:46) ~[TileEnergy.class:?]
                                    [number:protected] => 31
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at nc.tile.processor.TileEnergyItemProcessor.func_73660_a(TileEnergyItemProcessor.java:72) ~[TileEnergyItemProcessor.class:?]
                                    [number:protected] => 32
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.world.World.func_72939_s(World.java:1804) ~[aid.class:?]
                                    [number:protected] => 33
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.world.WorldServer.func_72939_s(WorldServer.java:620) ~[ls.class:?]
                                    [number:protected] => 34
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.func_71190_q(MinecraftServer.java:709) ~[MinecraftServer.class:?]
                                    [number:protected] => 35
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ... 4 more
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:01] [Server thread/ERROR]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:01] [Server thread/ERROR]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2019-02-26_16.23.01-server.txt
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:01] [Server thread/ERROR]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:01] [Server thread/INFO]: Stopping server
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:01] [Server thread/INFO]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:01] [Server thread/INFO]: Saving players
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:01] [Server thread/INFO]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:01] [Server thread/INFO]: Saving worlds
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:01] [Server thread/INFO]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:01] [Server thread/INFO]: Saving chunks for level \'world\'/Overworld
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:01] [Server thread/INFO]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/Nether
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:03] [Server thread/INFO]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/The End
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:03] [Server thread/INFO]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/Deep Dark
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:03] [Server thread/INFO]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/ExtraUtils2_Quarry_Dim
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:03] [Server thread/INFO]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/The Beneath
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:03] [Server thread/INFO]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/Abyss
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:03] [Server thread/INFO]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/The Dark Realm
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:03] [Server thread/INFO]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/Omothol
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:03] [Server thread/INFO]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/The Dreadlands
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:03] [Server thread/INFO]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/The Abyssal Wasteland
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:03] [Server thread/INFO]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/Overworld
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:03] [Server thread/INFO]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:07] [Server Shutdown Thread/INFO]: Stopping server
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:07] [Server Shutdown Thread/INFO]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:07] [Server Shutdown Thread/INFO]: Saving players
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:07] [Server Shutdown Thread/INFO]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [16:23:07] [Server Shutdown Thread/INFO]: Saving worlds
                                    [number:protected] => 55
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [16:23:07] [Server Shutdown Thread/INFO]:
                )

        )

    [iterator:protected] => 39
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [16:20:04] [Server thread/INFO]: Starting minecraft server version 1.10.2
[16:21:57] [Server thread/INFO]: Loading properties
[16:21:57] [Server thread/INFO]: Default game type: SURVIVAL
[16:21:57] [Server thread/INFO]: Generating keypair
[16:21:57] [Server thread/INFO]: Starting Minecraft server on *:10272
[16:21:57] [Server thread/INFO]: Using epoll channel type
[16:22:34] [Server thread/INFO]: Preparing level "world"
[16:22:39] [Server thread/INFO]: Preparing start region for level 0
[16:22:41] [Server thread/INFO]: Preparing spawn area: 0%
[16:22:42] [Server thread/INFO]: Preparing spawn area: 8%
[16:22:43] [Server thread/INFO]: Preparing spawn area: 23%
[16:22:44] [Server thread/INFO]: Preparing spawn area: 37%
[16:22:45] [Server thread/INFO]: Preparing spawn area: 56%
[16:22:46] [Server thread/INFO]: Preparing spawn area: 71%
[16:22:47] [Server thread/INFO]: Preparing spawn area: 87%
[16:22:48] [Server thread/INFO]: Preparing spawn area: 98%
[16:22:48] [Server thread/INFO]: Done (14.532s)! For help, type "help" or "?"
[16:22:48] [Server thread/INFO]: Starting GS4 status listener
[16:22:48] [Query Listener #1/INFO]: Query running on **.**.**.**:10272
[16:23:01] [Server thread/ERROR]: Encountered an unexpected exception
net.minecraft.util.ReportedException: Ticking block entity
at net.minecraft.server.MinecraftServer.func_71190_q(MinecraftServer.java:715) ~[MinecraftServer.class:?]
at net.minecraft.server.dedicated.DedicatedServer.func_71190_q(DedicatedServer.java:387) ~[ld.class:?]
at net.minecraft.server.MinecraftServer.func_71217_p(MinecraftServer.java:613) ~[MinecraftServer.class:?]
at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:471) [MinecraftServer.class:?]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
Caused by: java.lang.NoSuchMethodError: nc.tile.energy.TileEnergy.addTileToENet()V
at nc.tile.energy.TileEnergy.onAdded(TileEnergy.java:57) ~[TileEnergy.class:?]
at nc.tile.processor.TileEnergyItemProcessor.onAdded(TileEnergyItemProcessor.java:127) ~[TileEnergyItemProcessor.class:?]
at nc.tile.NCTile.func_73660_a(NCTile.java:25) ~[NCTile.class:?]
at nc.tile.energy.TileEnergy.func_73660_a(TileEnergy.java:46) ~[TileEnergy.class:?]
at nc.tile.processor.TileEnergyItemProcessor.func_73660_a(TileEnergyItemProcessor.java:72) ~[TileEnergyItemProcessor.class:?]
at net.minecraft.world.World.func_72939_s(World.java:1804) ~[aid.class:?]
at net.minecraft.world.WorldServer.func_72939_s(WorldServer.java:620) ~[ls.class:?]
at net.minecraft.server.MinecraftServer.func_71190_q(MinecraftServer.java:709) ~[MinecraftServer.class:?]
... 4 more
[16:23:01] [Server thread/ERROR]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2019-02-26_16.23.01-server.txt
[16:23:01] [Server thread/INFO]: Stopping server
[16:23:01] [Server thread/INFO]: Saving players
[16:23:01] [Server thread/INFO]: Saving worlds
[16:23:01] [Server thread/INFO]: Saving chunks for level \'world\'/Overworld
[16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/Nether
[16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/The End
[16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/Deep Dark
[16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/ExtraUtils2_Quarry_Dim
[16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/The Beneath
[16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/Abyss
[16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/The Dark Realm
[16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/Omothol
[16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/The Dreadlands
[16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/The Abyssal Wasteland
[16:23:03] [Server thread/INFO]: Saving chunks for level \'world\'/Overworld
[16:23:07] [Server Shutdown Thread/INFO]: Stopping server
[16:23:07] [Server Shutdown Thread/INFO]: Saving players
[16:23:07] [Server Shutdown Thread/INFO]: Saving worlds

        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [16:20:04] [Server thread/INFO]: Starting minecraft server version 1.10.2
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [16:20:04] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.10.2
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Information\Vanilla\EnvironmentInformation Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [16:20:04] [Server thread/INFO]: Starting minecraft server version 1.10.2
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [16:20:04] [Server thread/INFO]:
                        )

                    [counter:protected] => 35
                    [label:protected] => Environment
                    [value:protected] => Server
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Problem\Vanilla\TickingBlockEntityProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [16:23:01] [Server thread/ERROR]: Encountered an unexpected exception
                                            [number:protected] => 20
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => net.minecraft.util.ReportedException: Ticking block entity
                                            [number:protected] => 21
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.MinecraftServer.func_71190_q(MinecraftServer.java:715) ~[MinecraftServer.class:?]
                                            [number:protected] => 22
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.dedicated.DedicatedServer.func_71190_q(DedicatedServer.java:387) ~[ld.class:?]
                                            [number:protected] => 23
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.MinecraftServer.func_71217_p(MinecraftServer.java:613) ~[MinecraftServer.class:?]
                                            [number:protected] => 24
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:471) [MinecraftServer.class:?]
                                            [number:protected] => 25
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                            [number:protected] => 26
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Caused by: java.lang.NoSuchMethodError: nc.tile.energy.TileEnergy.addTileToENet()V
                                            [number:protected] => 27
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at nc.tile.energy.TileEnergy.onAdded(TileEnergy.java:57) ~[TileEnergy.class:?]
                                            [number:protected] => 28
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at nc.tile.processor.TileEnergyItemProcessor.onAdded(TileEnergyItemProcessor.java:127) ~[TileEnergyItemProcessor.class:?]
                                            [number:protected] => 29
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at nc.tile.NCTile.func_73660_a(NCTile.java:25) ~[NCTile.class:?]
                                            [number:protected] => 30
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at nc.tile.energy.TileEnergy.func_73660_a(TileEnergy.java:46) ~[TileEnergy.class:?]
                                            [number:protected] => 31
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at nc.tile.processor.TileEnergyItemProcessor.func_73660_a(TileEnergyItemProcessor.java:72) ~[TileEnergyItemProcessor.class:?]
                                            [number:protected] => 32
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.world.World.func_72939_s(World.java:1804) ~[aid.class:?]
                                            [number:protected] => 33
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.world.WorldServer.func_72939_s(WorldServer.java:620) ~[ls.class:?]
                                            [number:protected] => 34
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.MinecraftServer.func_71190_q(MinecraftServer.java:709) ~[MinecraftServer.class:?]
                                            [number:protected] => 35
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => ... 4 more
                                            [number:protected] => 36
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [16:23:01] [Server thread/ERROR]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => world
                                    [relativePath:protected] => 1
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\BlockRemoveSolution Object
                                (
                                )

                        )

                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.10.2", $analysis[0]->getMessage());

        $this->assertEquals("Environment: Server", $analysis[1]->getMessage());

        $this->assertEquals("A block in the world is causing problems.", $analysis[2]->getMessage());
        $this->assertEquals("Delete the file 'world'.", $analysis[2][0]->getMessage());
        $this->assertEquals("Remove the block from the world, e.g. with MCEdit.", $analysis[2][1]->getMessage());

    }
}