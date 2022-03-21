<?php

class ForgeSlashInThreadTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse(): void
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/forge/forge-slash-in-thread.log");
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
                                    [text:protected] => [09:52:01] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: player joined the game
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:01] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:52:01] [Server thread/INFO] [Actually Additions]: Sending Player Data to player player with UUID uuid.
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:01] [Server thread/INFO] [Actually Additions]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:52:02] [Chunk I/O Executor Thread-1/ERROR] [FML]: Unhandled exception loading chunk:
                                    [number:protected] => 3
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.minecraft.util.ReportedException: Loading NBT data
                                    [number:protected] => 4
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.NBTTagCompound.func_152449_a(NBTTagCompound.java:505) ~[fy.class:?]
                                    [number:protected] => 5
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.NBTTagCompound.func_152446_a(NBTTagCompound.java:58) ~[fy.class:?]
                                    [number:protected] => 6
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.NBTTagCompound.func_152449_a(NBTTagCompound.java:496) ~[fy.class:?]
                                    [number:protected] => 7
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.NBTTagCompound.func_152446_a(NBTTagCompound.java:58) ~[fy.class:?]
                                    [number:protected] => 8
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.CompressedStreamTools.func_152455_a(CompressedStreamTools.java:133) ~[gi.class:?]
                                    [number:protected] => 9
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.CompressedStreamTools.func_152456_a(CompressedStreamTools.java:88) ~[gi.class:?]
                                    [number:protected] => 10
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.CompressedStreamTools.func_74794_a(CompressedStreamTools.java:83) ~[gi.class:?]
                                    [number:protected] => 11
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.world.chunk.storage.AnvilChunkLoader.loadChunk__Async(AnvilChunkLoader.java:89) ~[aye.class:?]
                                    [number:protected] => 12
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.common.chunkio.ChunkIOProvider.run(ChunkIOProvider.java:70) ~[ChunkIOProvider.class:?]
                                    [number:protected] => 13
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1149) [?:1.8.0_144]
                                    [number:protected] => 14
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:624) [?:1.8.0_144]
                                    [number:protected] => 15
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 16
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.io.UTFDataFormatException: malformed input around byte 17
                                    [number:protected] => 17
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.DataInputStream.readUTF(DataInputStream.java:656) ~[?:1.8.0_144]
                                    [number:protected] => 18
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.DataInputStream.readUTF(DataInputStream.java:564) ~[?:1.8.0_144]
                                    [number:protected] => 19
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.NBTTagCompound.func_152448_b(NBTTagCompound.java:486) ~[fy.class:?]
                                    [number:protected] => 20
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.NBTTagCompound.func_152446_a(NBTTagCompound.java:56) ~[fy.class:?]
                                    [number:protected] => 21
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.NBTTagList.func_152446_a(NBTTagList.java:63) ~[ge.class:?]
                                    [number:protected] => 22
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.NBTTagCompound.func_152449_a(NBTTagCompound.java:496) ~[fy.class:?]
                                    [number:protected] => 23
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ... 11 more
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:02] [Chunk I/O Executor Thread-1/ERROR] [FML]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:52:02] [Chunk I/O Executor Thread-1/ERROR] [FML]: net.minecraftforge.common.chunkio.QueuedChunk {
                                    [number:protected] => 25
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => x: -13
                                    [number:protected] => 26
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => z: 52
                                    [number:protected] => 27
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => world: world
                                    [number:protected] => 28
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => dimension: 0
                                    [number:protected] => 29
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => provider: net.minecraft.world.WorldProviderSurface
                                    [number:protected] => 30
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => }
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:02] [Chunk I/O Executor Thread-1/ERROR] [FML]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:52:02] [Chunk I/O Executor Thread-1/ERROR] [FML]: World: (-208,64,832), Chunk: (at 0,4,0 in -13,52; contains blocks -208,0,832 to -193,255,847), Region: (-1,1; contains chunks -32,32 to -1,63, blocks -512,0,512 to -1,255,1023)
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:02] [Chunk I/O Executor Thread-1/ERROR] [FML]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:52:02] [Chunk I/O Executor Thread-1/INFO] [STDERR]: [java.lang.ThreadGroup:uncaughtException:1052]: java.lang.IllegalMonitorStateException
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:02] [Chunk I/O Executor Thread-1/INFO] [STDERR]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:52:02] [Chunk I/O Executor Thread-1/INFO] [STDERR]: [java.lang.ThreadGroup:uncaughtException:1052]: at java.lang.Object.notifyAll(Native Method)
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:02] [Chunk I/O Executor Thread-1/INFO] [STDERR]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:52:02] [Chunk I/O Executor Thread-1/INFO] [STDERR]: [java.lang.ThreadGroup:uncaughtException:1052]: at net.minecraftforge.common.chunkio.ChunkIOThreadPoolExecutor.afterExecute(ChunkIOThreadPoolExecutor.java:56)
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:02] [Chunk I/O Executor Thread-1/INFO] [STDERR]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:52:02] [Chunk I/O Executor Thread-1/INFO] [STDERR]: [java.lang.ThreadGroup:uncaughtException:1052]: at java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1157)
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:02] [Chunk I/O Executor Thread-1/INFO] [STDERR]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:52:02] [Chunk I/O Executor Thread-1/INFO] [STDERR]: [java.lang.ThreadGroup:uncaughtException:1052]: at java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:624)
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:02] [Chunk I/O Executor Thread-1/INFO] [STDERR]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:52:02] [Chunk I/O Executor Thread-1/INFO] [STDERR]: [java.lang.ThreadGroup:uncaughtException:1052]: at java.lang.Thread.run(Thread.java:748)
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:02] [Chunk I/O Executor Thread-1/INFO] [STDERR]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:52:02] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: Encountered an unexpected exception
                                    [number:protected] => 39
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.minecraft.util.ReportedException: Loading NBT data
                                    [number:protected] => 40
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.NBTTagCompound.func_152449_a(NBTTagCompound.java:505) ~[fy.class:?]
                                    [number:protected] => 41
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.NBTTagCompound.func_152446_a(NBTTagCompound.java:58) ~[fy.class:?]
                                    [number:protected] => 42
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.NBTTagCompound.func_152449_a(NBTTagCompound.java:496) ~[fy.class:?]
                                    [number:protected] => 43
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.NBTTagCompound.func_152446_a(NBTTagCompound.java:58) ~[fy.class:?]
                                    [number:protected] => 44
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.CompressedStreamTools.func_152455_a(CompressedStreamTools.java:133) ~[gi.class:?]
                                    [number:protected] => 45
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.CompressedStreamTools.func_152456_a(CompressedStreamTools.java:88) ~[gi.class:?]
                                    [number:protected] => 46
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.CompressedStreamTools.func_74794_a(CompressedStreamTools.java:83) ~[gi.class:?]
                                    [number:protected] => 47
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.world.chunk.storage.AnvilChunkLoader.loadChunk__Async(AnvilChunkLoader.java:89) ~[aye.class:?]
                                    [number:protected] => 48
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.common.chunkio.ChunkIOProvider.run(ChunkIOProvider.java:70) ~[ChunkIOProvider.class:?]
                                    [number:protected] => 49
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.common.chunkio.ChunkIOExecutor.syncChunkLoad(ChunkIOExecutor.java:92) ~[ChunkIOExecutor.class:?]
                                    [number:protected] => 50
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.world.gen.ChunkProviderServer.loadChunk(ChunkProviderServer.java:118) ~[on.class:?]
                                    [number:protected] => 51
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.world.gen.ChunkProviderServer.func_186028_c(ChunkProviderServer.java:89) ~[on.class:?]
                                    [number:protected] => 52
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.management.PlayerChunkMapEntry$1.run(PlayerChunkMapEntry.java:39) ~[ot$1.class:?]
                                    [number:protected] => 53
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.common.chunkio.ChunkIOProvider.runCallbacks(ChunkIOProvider.java:134) ~[ChunkIOProvider.class:?]
                                    [number:protected] => 54
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.common.chunkio.ChunkIOProvider.syncCallback(ChunkIOProvider.java:96) ~[ChunkIOProvider.class:?]
                                    [number:protected] => 55
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.common.chunkio.ChunkIOExecutor.syncChunkLoad(ChunkIOExecutor.java:94) ~[ChunkIOExecutor.class:?]
                                    [number:protected] => 56
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.world.gen.ChunkProviderServer.loadChunk(ChunkProviderServer.java:118) ~[on.class:?]
                                    [number:protected] => 57
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.world.gen.ChunkProviderServer.func_186028_c(ChunkProviderServer.java:89) ~[on.class:?]
                                    [number:protected] => 58
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.management.PlayerChunkMapEntry$1.run(PlayerChunkMapEntry.java:39) ~[ot$1.class:?]
                                    [number:protected] => 59
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.common.chunkio.ChunkIOProvider.runCallbacks(ChunkIOProvider.java:134) ~[ChunkIOProvider.class:?]
                                    [number:protected] => 60
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.common.chunkio.ChunkIOProvider.syncCallback(ChunkIOProvider.java:96) ~[ChunkIOProvider.class:?]
                                    [number:protected] => 61
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraftforge.common.chunkio.ChunkIOExecutor.tick(ChunkIOExecutor.java:150) ~[ChunkIOExecutor.class:?]
                                    [number:protected] => 62
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.func_71190_q(MinecraftServer.java:728) ~[MinecraftServer.class:?]
                                    [number:protected] => 63
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.dedicated.DedicatedServer.func_71190_q(DedicatedServer.java:397) ~[nz.class:?]
                                    [number:protected] => 64
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.func_71217_p(MinecraftServer.java:668) ~[MinecraftServer.class:?]
                                    [number:protected] => 65
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:526) [MinecraftServer.class:?]
                                    [number:protected] => 66
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 67
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.io.UTFDataFormatException: malformed input around byte 17
                                    [number:protected] => 68
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.DataInputStream.readUTF(DataInputStream.java:656) ~[?:1.8.0_144]
                                    [number:protected] => 69
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.DataInputStream.readUTF(DataInputStream.java:564) ~[?:1.8.0_144]
                                    [number:protected] => 70
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.NBTTagCompound.func_152448_b(NBTTagCompound.java:486) ~[fy.class:?]
                                    [number:protected] => 71
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.NBTTagCompound.func_152446_a(NBTTagCompound.java:56) ~[fy.class:?]
                                    [number:protected] => 72
                                )

                            [34] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.NBTTagList.func_152446_a(NBTTagList.java:63) ~[ge.class:?]
                                    [number:protected] => 73
                                )

                            [35] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.nbt.NBTTagCompound.func_152449_a(NBTTagCompound.java:496) ~[fy.class:?]
                                    [number:protected] => 74
                                )

                            [36] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ... 26 more
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:02] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:52:02] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2019-02-20_09.52.02-server.txt
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:02] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:52:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:52:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving players
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:52:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving worlds
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:52:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving chunks for level \'world\'/overworld
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:52:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving chunks for level \'world\'/ExtraUtils2_Quarry_Dim
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [09:52:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving chunks for level \'world\'/Storage Cell
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [09:52:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]:
                )

        )

    [iterator:protected] => 19
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [09:52:01] [Server thread/INFO] [net.minecraft.server.dedicated.DedicatedServer]: player joined the game
[09:52:01] [Server thread/INFO] [Actually Additions]: Sending Player Data to player player with UUID uuid.
[09:52:02] [Chunk I/O Executor Thread-1/ERROR] [FML]: Unhandled exception loading chunk:
net.minecraft.util.ReportedException: Loading NBT data
at net.minecraft.nbt.NBTTagCompound.func_152449_a(NBTTagCompound.java:505) ~[fy.class:?]
at net.minecraft.nbt.NBTTagCompound.func_152446_a(NBTTagCompound.java:58) ~[fy.class:?]
at net.minecraft.nbt.NBTTagCompound.func_152449_a(NBTTagCompound.java:496) ~[fy.class:?]
at net.minecraft.nbt.NBTTagCompound.func_152446_a(NBTTagCompound.java:58) ~[fy.class:?]
at net.minecraft.nbt.CompressedStreamTools.func_152455_a(CompressedStreamTools.java:133) ~[gi.class:?]
at net.minecraft.nbt.CompressedStreamTools.func_152456_a(CompressedStreamTools.java:88) ~[gi.class:?]
at net.minecraft.nbt.CompressedStreamTools.func_74794_a(CompressedStreamTools.java:83) ~[gi.class:?]
at net.minecraft.world.chunk.storage.AnvilChunkLoader.loadChunk__Async(AnvilChunkLoader.java:89) ~[aye.class:?]
at net.minecraftforge.common.chunkio.ChunkIOProvider.run(ChunkIOProvider.java:70) ~[ChunkIOProvider.class:?]
at java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1149) [?:1.8.0_144]
at java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:624) [?:1.8.0_144]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
Caused by: java.io.UTFDataFormatException: malformed input around byte 17
at java.io.DataInputStream.readUTF(DataInputStream.java:656) ~[?:1.8.0_144]
at java.io.DataInputStream.readUTF(DataInputStream.java:564) ~[?:1.8.0_144]
at net.minecraft.nbt.NBTTagCompound.func_152448_b(NBTTagCompound.java:486) ~[fy.class:?]
at net.minecraft.nbt.NBTTagCompound.func_152446_a(NBTTagCompound.java:56) ~[fy.class:?]
at net.minecraft.nbt.NBTTagList.func_152446_a(NBTTagList.java:63) ~[ge.class:?]
at net.minecraft.nbt.NBTTagCompound.func_152449_a(NBTTagCompound.java:496) ~[fy.class:?]
... 11 more
[09:52:02] [Chunk I/O Executor Thread-1/ERROR] [FML]: net.minecraftforge.common.chunkio.QueuedChunk {
x: -13
z: 52
world: world
dimension: 0
provider: net.minecraft.world.WorldProviderSurface
}
[09:52:02] [Chunk I/O Executor Thread-1/ERROR] [FML]: World: (-208,64,832), Chunk: (at 0,4,0 in -13,52; contains blocks -208,0,832 to -193,255,847), Region: (-1,1; contains chunks -32,32 to -1,63, blocks -512,0,512 to -1,255,1023)
[09:52:02] [Chunk I/O Executor Thread-1/INFO] [STDERR]: [java.lang.ThreadGroup:uncaughtException:1052]: java.lang.IllegalMonitorStateException
[09:52:02] [Chunk I/O Executor Thread-1/INFO] [STDERR]: [java.lang.ThreadGroup:uncaughtException:1052]: at java.lang.Object.notifyAll(Native Method)
[09:52:02] [Chunk I/O Executor Thread-1/INFO] [STDERR]: [java.lang.ThreadGroup:uncaughtException:1052]: at net.minecraftforge.common.chunkio.ChunkIOThreadPoolExecutor.afterExecute(ChunkIOThreadPoolExecutor.java:56)
[09:52:02] [Chunk I/O Executor Thread-1/INFO] [STDERR]: [java.lang.ThreadGroup:uncaughtException:1052]: at java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1157)
[09:52:02] [Chunk I/O Executor Thread-1/INFO] [STDERR]: [java.lang.ThreadGroup:uncaughtException:1052]: at java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:624)
[09:52:02] [Chunk I/O Executor Thread-1/INFO] [STDERR]: [java.lang.ThreadGroup:uncaughtException:1052]: at java.lang.Thread.run(Thread.java:748)
[09:52:02] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: Encountered an unexpected exception
net.minecraft.util.ReportedException: Loading NBT data
at net.minecraft.nbt.NBTTagCompound.func_152449_a(NBTTagCompound.java:505) ~[fy.class:?]
at net.minecraft.nbt.NBTTagCompound.func_152446_a(NBTTagCompound.java:58) ~[fy.class:?]
at net.minecraft.nbt.NBTTagCompound.func_152449_a(NBTTagCompound.java:496) ~[fy.class:?]
at net.minecraft.nbt.NBTTagCompound.func_152446_a(NBTTagCompound.java:58) ~[fy.class:?]
at net.minecraft.nbt.CompressedStreamTools.func_152455_a(CompressedStreamTools.java:133) ~[gi.class:?]
at net.minecraft.nbt.CompressedStreamTools.func_152456_a(CompressedStreamTools.java:88) ~[gi.class:?]
at net.minecraft.nbt.CompressedStreamTools.func_74794_a(CompressedStreamTools.java:83) ~[gi.class:?]
at net.minecraft.world.chunk.storage.AnvilChunkLoader.loadChunk__Async(AnvilChunkLoader.java:89) ~[aye.class:?]
at net.minecraftforge.common.chunkio.ChunkIOProvider.run(ChunkIOProvider.java:70) ~[ChunkIOProvider.class:?]
at net.minecraftforge.common.chunkio.ChunkIOExecutor.syncChunkLoad(ChunkIOExecutor.java:92) ~[ChunkIOExecutor.class:?]
at net.minecraft.world.gen.ChunkProviderServer.loadChunk(ChunkProviderServer.java:118) ~[on.class:?]
at net.minecraft.world.gen.ChunkProviderServer.func_186028_c(ChunkProviderServer.java:89) ~[on.class:?]
at net.minecraft.server.management.PlayerChunkMapEntry$1.run(PlayerChunkMapEntry.java:39) ~[ot$1.class:?]
at net.minecraftforge.common.chunkio.ChunkIOProvider.runCallbacks(ChunkIOProvider.java:134) ~[ChunkIOProvider.class:?]
at net.minecraftforge.common.chunkio.ChunkIOProvider.syncCallback(ChunkIOProvider.java:96) ~[ChunkIOProvider.class:?]
at net.minecraftforge.common.chunkio.ChunkIOExecutor.syncChunkLoad(ChunkIOExecutor.java:94) ~[ChunkIOExecutor.class:?]
at net.minecraft.world.gen.ChunkProviderServer.loadChunk(ChunkProviderServer.java:118) ~[on.class:?]
at net.minecraft.world.gen.ChunkProviderServer.func_186028_c(ChunkProviderServer.java:89) ~[on.class:?]
at net.minecraft.server.management.PlayerChunkMapEntry$1.run(PlayerChunkMapEntry.java:39) ~[ot$1.class:?]
at net.minecraftforge.common.chunkio.ChunkIOProvider.runCallbacks(ChunkIOProvider.java:134) ~[ChunkIOProvider.class:?]
at net.minecraftforge.common.chunkio.ChunkIOProvider.syncCallback(ChunkIOProvider.java:96) ~[ChunkIOProvider.class:?]
at net.minecraftforge.common.chunkio.ChunkIOExecutor.tick(ChunkIOExecutor.java:150) ~[ChunkIOExecutor.class:?]
at net.minecraft.server.MinecraftServer.func_71190_q(MinecraftServer.java:728) ~[MinecraftServer.class:?]
at net.minecraft.server.dedicated.DedicatedServer.func_71190_q(DedicatedServer.java:397) ~[nz.class:?]
at net.minecraft.server.MinecraftServer.func_71217_p(MinecraftServer.java:668) ~[MinecraftServer.class:?]
at net.minecraft.server.MinecraftServer.run(MinecraftServer.java:526) [MinecraftServer.class:?]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
Caused by: java.io.UTFDataFormatException: malformed input around byte 17
at java.io.DataInputStream.readUTF(DataInputStream.java:656) ~[?:1.8.0_144]
at java.io.DataInputStream.readUTF(DataInputStream.java:564) ~[?:1.8.0_144]
at net.minecraft.nbt.NBTTagCompound.func_152448_b(NBTTagCompound.java:486) ~[fy.class:?]
at net.minecraft.nbt.NBTTagCompound.func_152446_a(NBTTagCompound.java:56) ~[fy.class:?]
at net.minecraft.nbt.NBTTagList.func_152446_a(NBTTagList.java:63) ~[ge.class:?]
at net.minecraft.nbt.NBTTagCompound.func_152449_a(NBTTagCompound.java:496) ~[fy.class:?]
... 26 more
[09:52:02] [Server thread/ERROR] [net.minecraft.server.MinecraftServer]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2019-02-20_09.52.02-server.txt
[09:52:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Stopping server
[09:52:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving players
[09:52:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving worlds
[09:52:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving chunks for level \'world\'/overworld
[09:52:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving chunks for level \'world\'/ExtraUtils2_Quarry_Dim
[09:52:02] [Server thread/INFO] [net.minecraft.server.MinecraftServer]: Saving chunks for level \'world\'/Storage Cell
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
        )

    [iterator:protected] => 0
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

    }
}