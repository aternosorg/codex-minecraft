<?php

class SpigotChunkEntityExceptionTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/spigot-chunk-entity-exception.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\SpigotLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:54] [Server thread/INFO]: Starting minecraft server version 1.8.8
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:54] [Server thread/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:54] [Server thread/INFO]: Loading properties
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:54] [Server thread/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:54] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:54] [Server thread/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:54] [Server thread/INFO]: This server is running CraftBukkit version git-Spigot-db6de12-18fbb24 (MC: 1.8.8) (Implementing API version 1.8.8-R0.1-SNAPSHOT)
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:54] [Server thread/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:56] [Server thread/INFO]: Server Ping Player Sample Count: 12
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:56] [Server thread/INFO]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:56] [Server thread/INFO]: Using 4 threads for Netty based IO
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:56] [Server thread/INFO]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:56] [Server thread/INFO]: Debug logging is disabled
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:56] [Server thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:56] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:56] [Server thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:57] [Server thread/INFO]: Starting Minecraft server on *:10182
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:57] [Server thread/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:57] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:57] [Server thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/INFO]: Attempted to place a tile entity (net.minecraft.server.v1_8_R3.TileEntityCommand@615d8ac7) at -31,62,-34 (AIR) where there was no entity tile!
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/INFO]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/INFO]: Chunk coordinates: -32,-48
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/WARN]: java.lang.Exception
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/WARN]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/WARN]: at net.minecraft.server.v1_8_R3.Chunk.a(Chunk.java:791)
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/WARN]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/WARN]: at net.minecraft.server.v1_8_R3.Chunk.a(Chunk.java:769)
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/WARN]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/WARN]: at net.minecraft.server.v1_8_R3.ChunkRegionLoader.loadEntities(ChunkRegionLoader.java:433)
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/WARN]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/WARN]: at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOProvider.callStage2(ChunkIOProvider.java:46)
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/WARN]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/WARN]: at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOProvider.callStage2(ChunkIOProvider.java:1)
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/WARN]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/WARN]: at org.bukkit.craftbukkit.v1_8_R3.util.AsynchronousExecutor.skipQueue(AsynchronousExecutor.java:337)
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/WARN]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/WARN]: at org.bukkit.craftbukkit.v1_8_R3.util.AsynchronousExecutor.getSkipQueue(AsynchronousExecutor.java:295)
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/WARN]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/WARN]: at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOExecutor.syncChunkLoad(ChunkIOExecutor.java:16)
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/WARN]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/WARN]: at net.minecraft.server.v1_8_R3.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:115)
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/WARN]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/WARN]: at net.minecraft.server.v1_8_R3.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:97)
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/WARN]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/WARN]: at net.minecraft.server.v1_8_R3.MinecraftServer.k(MinecraftServer.java:369)
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/WARN]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/WARN]: at net.minecraft.server.v1_8_R3.MinecraftServer.a(MinecraftServer.java:333)
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/WARN]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/WARN]: at net.minecraft.server.v1_8_R3.DedicatedServer.init(DedicatedServer.java:263)
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/WARN]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/WARN]: at net.minecraft.server.v1_8_R3.MinecraftServer.run(MinecraftServer.java:525)
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/WARN]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/WARN]: at java.lang.Thread.run(Thread.java:748)
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/WARN]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/ERROR]: Encountered an unexpected exception
                                    [number:protected] => 29
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.NullPointerException
                                    [number:protected] => 30
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.WorldServer.b(WorldServer.java:577) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 31
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.ChunkRegionLoader.loadEntities(ChunkRegionLoader.java:454) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 32
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOProvider.callStage2(ChunkIOProvider.java:46) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 33
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOProvider.callStage2(ChunkIOProvider.java:1) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 34
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.util.AsynchronousExecutor.skipQueue(AsynchronousExecutor.java:337) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 35
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.util.AsynchronousExecutor.getSkipQueue(AsynchronousExecutor.java:295) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 36
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOExecutor.syncChunkLoad(ChunkIOExecutor.java:16) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 37
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:115) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 38
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:97) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 39
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.MinecraftServer.k(MinecraftServer.java:369) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 40
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.MinecraftServer.a(MinecraftServer.java:333) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 41
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.DedicatedServer.init(DedicatedServer.java:263) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 42
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.MinecraftServer.run(MinecraftServer.java:525) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 43
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/ERROR]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/ERROR]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2019-03-08_23.49.59-server.txt
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/ERROR]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/INFO]: Stopping server
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/INFO]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/INFO]: Saving players
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/INFO]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/INFO]: Saving worlds
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/INFO]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/INFO]: Saving chunks for level \'world\'/Overworld
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/INFO]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [23:49:59] [Server thread/INFO]: Saving chunks for level \'world_nether\'/Nether
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [23:49:59] [Server thread/INFO]:
                )

        )

    [iterator:protected] => 35
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [23:49:54] [Server thread/INFO]: Starting minecraft server version 1.8.8
[23:49:54] [Server thread/INFO]: Loading properties
[23:49:54] [Server thread/INFO]: Default game type: SURVIVAL
[23:49:54] [Server thread/INFO]: This server is running CraftBukkit version git-Spigot-db6de12-18fbb24 (MC: 1.8.8) (Implementing API version 1.8.8-R0.1-SNAPSHOT)
[23:49:56] [Server thread/INFO]: Server Ping Player Sample Count: 12
[23:49:56] [Server thread/INFO]: Using 4 threads for Netty based IO
[23:49:56] [Server thread/INFO]: Debug logging is disabled
[23:49:56] [Server thread/INFO]: Generating keypair
[23:49:57] [Server thread/INFO]: Starting Minecraft server on *:10182
[23:49:57] [Server thread/INFO]: Using epoll channel type
[23:49:59] [Server thread/INFO]: Attempted to place a tile entity (net.minecraft.server.v1_8_R3.TileEntityCommand@615d8ac7) at -31,62,-34 (AIR) where there was no entity tile!
[23:49:59] [Server thread/INFO]: Chunk coordinates: -32,-48
[23:49:59] [Server thread/WARN]: java.lang.Exception
[23:49:59] [Server thread/WARN]: at net.minecraft.server.v1_8_R3.Chunk.a(Chunk.java:791)
[23:49:59] [Server thread/WARN]: at net.minecraft.server.v1_8_R3.Chunk.a(Chunk.java:769)
[23:49:59] [Server thread/WARN]: at net.minecraft.server.v1_8_R3.ChunkRegionLoader.loadEntities(ChunkRegionLoader.java:433)
[23:49:59] [Server thread/WARN]: at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOProvider.callStage2(ChunkIOProvider.java:46)
[23:49:59] [Server thread/WARN]: at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOProvider.callStage2(ChunkIOProvider.java:1)
[23:49:59] [Server thread/WARN]: at org.bukkit.craftbukkit.v1_8_R3.util.AsynchronousExecutor.skipQueue(AsynchronousExecutor.java:337)
[23:49:59] [Server thread/WARN]: at org.bukkit.craftbukkit.v1_8_R3.util.AsynchronousExecutor.getSkipQueue(AsynchronousExecutor.java:295)
[23:49:59] [Server thread/WARN]: at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOExecutor.syncChunkLoad(ChunkIOExecutor.java:16)
[23:49:59] [Server thread/WARN]: at net.minecraft.server.v1_8_R3.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:115)
[23:49:59] [Server thread/WARN]: at net.minecraft.server.v1_8_R3.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:97)
[23:49:59] [Server thread/WARN]: at net.minecraft.server.v1_8_R3.MinecraftServer.k(MinecraftServer.java:369)
[23:49:59] [Server thread/WARN]: at net.minecraft.server.v1_8_R3.MinecraftServer.a(MinecraftServer.java:333)
[23:49:59] [Server thread/WARN]: at net.minecraft.server.v1_8_R3.DedicatedServer.init(DedicatedServer.java:263)
[23:49:59] [Server thread/WARN]: at net.minecraft.server.v1_8_R3.MinecraftServer.run(MinecraftServer.java:525)
[23:49:59] [Server thread/WARN]: at java.lang.Thread.run(Thread.java:748)
[23:49:59] [Server thread/ERROR]: Encountered an unexpected exception
java.lang.NullPointerException
at net.minecraft.server.v1_8_R3.WorldServer.b(WorldServer.java:577) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.ChunkRegionLoader.loadEntities(ChunkRegionLoader.java:454) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOProvider.callStage2(ChunkIOProvider.java:46) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOProvider.callStage2(ChunkIOProvider.java:1) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at org.bukkit.craftbukkit.v1_8_R3.util.AsynchronousExecutor.skipQueue(AsynchronousExecutor.java:337) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at org.bukkit.craftbukkit.v1_8_R3.util.AsynchronousExecutor.getSkipQueue(AsynchronousExecutor.java:295) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOExecutor.syncChunkLoad(ChunkIOExecutor.java:16) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:115) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:97) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.MinecraftServer.k(MinecraftServer.java:369) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.MinecraftServer.a(MinecraftServer.java:333) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.DedicatedServer.init(DedicatedServer.java:263) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.MinecraftServer.run(MinecraftServer.java:525) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
[23:49:59] [Server thread/ERROR]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2019-03-08_23.49.59-server.txt
[23:49:59] [Server thread/INFO]: Stopping server
[23:49:59] [Server thread/INFO]: Saving players
[23:49:59] [Server thread/INFO]: Saving worlds
[23:49:59] [Server thread/INFO]: Saving chunks for level \'world\'/Overworld
[23:49:59] [Server thread/INFO]: Saving chunks for level \'world_nether\'/Nether
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
                                            [text:protected] => [23:49:54] [Server thread/INFO]: Starting minecraft server version 1.8.8
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [23:49:54] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.8.8
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\ChunkLoadExceptionProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [23:49:59] [Server thread/ERROR]: Encountered an unexpected exception
                                            [number:protected] => 29
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => java.lang.NullPointerException
                                            [number:protected] => 30
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.WorldServer.b(WorldServer.java:577) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 31
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.ChunkRegionLoader.loadEntities(ChunkRegionLoader.java:454) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 32
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOProvider.callStage2(ChunkIOProvider.java:46) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 33
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOProvider.callStage2(ChunkIOProvider.java:1) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 34
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.util.AsynchronousExecutor.skipQueue(AsynchronousExecutor.java:337) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 35
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.util.AsynchronousExecutor.getSkipQueue(AsynchronousExecutor.java:295) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 36
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOExecutor.syncChunkLoad(ChunkIOExecutor.java:16) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 37
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:115) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 38
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:97) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 39
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.MinecraftServer.k(MinecraftServer.java:369) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 40
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.MinecraftServer.a(MinecraftServer.java:333) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 41
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.DedicatedServer.init(DedicatedServer.java:263) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 42
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.MinecraftServer.run(MinecraftServer.java:525) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 43
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                            [number:protected] => 44
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [23:49:59] [Server thread/ERROR]:
                        )

                    [counter:protected] => 1
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\WorldRepairSolution Object
                                (
                                    [worldName:protected] => world
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => world
                                    [relativePath:protected] => 1
                                )

                            [2] => Aternos\Codex\Minecraft\Analysis\Solution\Vanilla\ChunkRemoveSolution Object
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

        $this->assertEquals("Minecraft version: 1.8.8", $analysis[0]->getMessage());

        $this->assertEquals("There was an exception while loading the world chunks.", $analysis[1]->getMessage());
        $this->assertEquals("Repair the world 'world', e.g. by using Minecraft Region Fixer or MCEdit.", $analysis[1][0]->getMessage());
        $this->assertEquals("Delete the file 'world'.", $analysis[1][1]->getMessage());
        $this->assertEquals("Remove the problematic chunk from the world, e.g. with MCEdit or by removing the region file.", $analysis[1][2]->getMessage());

    }
}