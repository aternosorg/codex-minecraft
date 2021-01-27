<?php

class PaperVersionDowngradeTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/paper-version-downgrade.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\PaperLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:07] [main/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:07] [main/INFO]: Found new data pack file/bukkit, loading it automatically
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:07] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:07] [main/INFO]: Reloading ResourceManager: Default, bukkit
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:08] [Worker-Main-1/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:08] [Worker-Main-1/INFO]: Loaded 7 recipes
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:11] [Server thread/INFO]: Starting minecraft server version 1.16.4
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:11] [Server thread/INFO]: Loading properties
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:11] [Server thread/INFO]: This server is running Paper version git-Paper-416 (MC: 1.16.4) (Implementing API version 1.16.4-R0.1-SNAPSHOT)
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:11] [Server thread/INFO]: Server Ping Player Sample Count: 12
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:11] [Server thread/INFO]: Using 4 threads for Netty based IO
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:11] [Server thread/INFO]: Debug logging is disabled
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:11] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:11] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:11] [Server thread/INFO]: Starting Minecraft server on *:54860
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:11] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:11] [Server thread/INFO]: Server permissions file permissions.yml is empty, ignoring it
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:11] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:12] [Server thread/INFO]: Preparing start region for dimension minecraft:overworld
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:12] [Server thread/INFO]: Loaded 0 spawn chunks for world world
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:12] [Server thread/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:12] [Server thread/INFO]: Time elapsed: 297 ms
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:12] [Server thread/INFO]: Preparing start region for dimension minecraft:the_nether
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:16] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:16] [Server thread/INFO]: Loaded 0 spawn chunks for world world_nether
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:16] [Paper Async Chunk Task Thread #0/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:16] [Paper Async Chunk Task Thread #0/WARN]: java.lang.RuntimeException: Server attempted to load chunk saved with newer version of minecraft! 2586 > 2584
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:16] [Paper Async Chunk Task Thread #0/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:16] [Paper Async Chunk Task Thread #0/WARN]: 	at net.minecraft.server.v1_16_R3.ChunkRegionLoader.loadChunk(ChunkRegionLoader.java:67)
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:16] [Paper Async Chunk Task Thread #0/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:16] [Paper Async Chunk Task Thread #0/WARN]: 	at com.destroystokyo.paper.io.chunk.ChunkLoadTask.executeTask(ChunkLoadTask.java:114)
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:16] [Paper Async Chunk Task Thread #0/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:16] [Paper Async Chunk Task Thread #0/WARN]: 	at com.destroystokyo.paper.io.chunk.ChunkLoadTask.run(ChunkLoadTask.java:39)
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:16] [Paper Async Chunk Task Thread #0/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:16] [Paper Async Chunk Task Thread #0/WARN]: 	at com.destroystokyo.paper.io.QueueExecutorThread.pollTasks(QueueExecutorThread.java:105)
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:16] [Paper Async Chunk Task Thread #0/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:16] [Paper Async Chunk Task Thread #0/WARN]: 	at com.destroystokyo.paper.io.QueueExecutorThread.run(QueueExecutorThread.java:38)
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:16] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:16] [Server thread/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:16] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:16] [Server thread/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:16] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:16] [Server thread/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:16] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:16] [Server thread/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:16] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:16] [Server thread/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:16] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:16] [Server thread/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:16] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:16] [Server thread/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:16] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:16] [Server thread/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:16] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:16] [Server thread/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Worker-Main-1/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Worker-Main-1/INFO]: Preparing spawn area: 0%
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Thread-3/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Thread-3/INFO]: Stopping main thread (Ignore any thread death message you see! - DO NOT REPORT THREAD DEATH TO PAPER)
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/FATAL]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/FATAL]: Failed to schedule load callback for chunk [22, -33]
                                    [number:protected] => 40
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.util.concurrent.CompletionException: java.lang.ThreadDeath
                                    [number:protected] => 41
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314) ~[?:?]
                                    [number:protected] => 42
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319) ~[?:?]
                                    [number:protected] => 43
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1081) ~[?:?]
                                    [number:protected] => 44
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
                                    [number:protected] => 45
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.PlayerChunkMap.lambda$new$0(PlayerChunkMap.java:300) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 46
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompletion.claim(CompletableFuture.java:568) ~[?:?]
                                    [number:protected] => 47
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1069) ~[?:?]
                                    [number:protected] => 48
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.postComplete(CompletableFuture.java:506) ~[?:?]
                                    [number:protected] => 49
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.postFire(CompletableFuture.java:610) ~[?:?]
                                    [number:protected] => 50
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1085) ~[?:?]
                                    [number:protected] => 51
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
                                    [number:protected] => 52
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeTask(IAsyncTaskHandler.java:136) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 53
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeTask(ChunkProviderServer.java:994) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 54
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeNext(IAsyncTaskHandler.java:109) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 55
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeNext(ChunkProviderServer.java:1041) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 56
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer.runTasks(ChunkProviderServer.java:627) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 57
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.bb(MinecraftServer.java:1141) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 58
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.executeNext(MinecraftServer.java:1125) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 59
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeAll(IAsyncTaskHandler.java:95) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 60
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.executeModerately(MinecraftServer.java:1079) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 61
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.loadSpawn(MinecraftServer.java:635) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 62
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.loadWorld(MinecraftServer.java:446) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 63
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.DedicatedServer.init(DedicatedServer.java:239) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 64
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.w(MinecraftServer.java:935) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 65
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.lambda$a$0(MinecraftServer.java:173) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 66
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:834) [?:?]
                                    [number:protected] => 67
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	Suppressed: java.lang.ThreadDeath
                                    [number:protected] => 68
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		at java.lang.Thread.stop(Thread.java:942) [?:?]
                                    [number:protected] => 69
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		at net.minecraft.server.v1_16_R3.MinecraftServer.stop(MinecraftServer.java:753) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 70
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		at net.minecraft.server.v1_16_R3.DedicatedServer.stop(DedicatedServer.java:704) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 71
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		at net.minecraft.server.v1_16_R3.MinecraftServer.close(MinecraftServer.java:727) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 72
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 		at org.bukkit.craftbukkit.v1_16_R3.util.ServerShutdownThread.run(ServerShutdownThread.java:28) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 73
                                )

                            [34] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.ThreadDeath
                                    [number:protected] => 74
                                )

                            [35] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.stop(Thread.java:942) ~[?:?]
                                    [number:protected] => 75
                                )

                            [36] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.stop(MinecraftServer.java:753) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 76
                                )

                            [37] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.DedicatedServer.stop(DedicatedServer.java:704) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 77
                                )

                            [38] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.close(MinecraftServer.java:727) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 78
                                )

                            [39] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.v1_16_R3.util.ServerShutdownThread.run(ServerShutdownThread.java:28) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/FATAL]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/FATAL]: Failed to schedule load callback for chunk [22, -31]
                                    [number:protected] => 80
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.util.concurrent.CompletionException: java.lang.ThreadDeath
                                    [number:protected] => 81
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314) ~[?:?]
                                    [number:protected] => 82
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319) ~[?:?]
                                    [number:protected] => 83
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1081) ~[?:?]
                                    [number:protected] => 84
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
                                    [number:protected] => 85
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.PlayerChunkMap.lambda$new$0(PlayerChunkMap.java:300) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 86
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompletion.claim(CompletableFuture.java:568) ~[?:?]
                                    [number:protected] => 87
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1069) ~[?:?]
                                    [number:protected] => 88
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.postComplete(CompletableFuture.java:506) ~[?:?]
                                    [number:protected] => 89
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.postFire(CompletableFuture.java:610) ~[?:?]
                                    [number:protected] => 90
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1085) ~[?:?]
                                    [number:protected] => 91
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
                                    [number:protected] => 92
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeTask(IAsyncTaskHandler.java:136) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 93
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeTask(ChunkProviderServer.java:994) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 94
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeNext(IAsyncTaskHandler.java:109) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 95
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeNext(ChunkProviderServer.java:1041) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 96
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer.runTasks(ChunkProviderServer.java:627) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 97
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.bb(MinecraftServer.java:1141) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 98
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.executeNext(MinecraftServer.java:1125) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 99
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeAll(IAsyncTaskHandler.java:95) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 100
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.executeModerately(MinecraftServer.java:1079) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 101
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.loadSpawn(MinecraftServer.java:635) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 102
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.loadWorld(MinecraftServer.java:446) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 103
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.DedicatedServer.init(DedicatedServer.java:239) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 104
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.w(MinecraftServer.java:935) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 105
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.lambda$a$0(MinecraftServer.java:173) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 106
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:834) [?:?]
                                    [number:protected] => 107
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.ThreadDeath
                                    [number:protected] => 108
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.stop(Thread.java:942) ~[?:?]
                                    [number:protected] => 109
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.stop(MinecraftServer.java:753) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 110
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.DedicatedServer.stop(DedicatedServer.java:704) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 111
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.close(MinecraftServer.java:727) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 112
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.v1_16_R3.util.ServerShutdownThread.run(ServerShutdownThread.java:28) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/FATAL]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/FATAL]: Failed to schedule load callback for chunk [22, -29]
                                    [number:protected] => 114
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.util.concurrent.CompletionException: java.lang.ThreadDeath
                                    [number:protected] => 115
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314) ~[?:?]
                                    [number:protected] => 116
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319) ~[?:?]
                                    [number:protected] => 117
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1081) ~[?:?]
                                    [number:protected] => 118
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
                                    [number:protected] => 119
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.PlayerChunkMap.lambda$new$0(PlayerChunkMap.java:300) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 120
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompletion.claim(CompletableFuture.java:568) ~[?:?]
                                    [number:protected] => 121
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1069) ~[?:?]
                                    [number:protected] => 122
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.postComplete(CompletableFuture.java:506) ~[?:?]
                                    [number:protected] => 123
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.postFire(CompletableFuture.java:610) ~[?:?]
                                    [number:protected] => 124
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1085) ~[?:?]
                                    [number:protected] => 125
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
                                    [number:protected] => 126
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeTask(IAsyncTaskHandler.java:136) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 127
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeTask(ChunkProviderServer.java:994) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 128
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeNext(IAsyncTaskHandler.java:109) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 129
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeNext(ChunkProviderServer.java:1041) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 130
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer.runTasks(ChunkProviderServer.java:627) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 131
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.bb(MinecraftServer.java:1141) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 132
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.executeNext(MinecraftServer.java:1125) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 133
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeAll(IAsyncTaskHandler.java:95) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 134
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.executeModerately(MinecraftServer.java:1079) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 135
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.loadSpawn(MinecraftServer.java:635) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 136
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.loadWorld(MinecraftServer.java:446) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 137
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.DedicatedServer.init(DedicatedServer.java:239) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 138
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.w(MinecraftServer.java:935) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 139
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.lambda$a$0(MinecraftServer.java:173) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 140
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:834) [?:?]
                                    [number:protected] => 141
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.ThreadDeath
                                    [number:protected] => 142
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.stop(Thread.java:942) ~[?:?]
                                    [number:protected] => 143
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.stop(MinecraftServer.java:753) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 144
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.DedicatedServer.stop(DedicatedServer.java:704) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 145
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.close(MinecraftServer.java:727) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 146
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.v1_16_R3.util.ServerShutdownThread.run(ServerShutdownThread.java:28) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: java.util.concurrent.CompletionException: java.lang.ThreadDeath
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314)
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319)
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1081)
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478)
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at net.minecraft.server.v1_16_R3.PlayerChunkMap.lambda$new$0(PlayerChunkMap.java:300)
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture$UniCompletion.claim(CompletableFuture.java:568)
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1069)
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/FATAL]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/FATAL]: Failed to schedule load callback for chunk [22, -28]
                                    [number:protected] => 156
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.util.concurrent.CompletionException: java.lang.ThreadDeath
                                    [number:protected] => 157
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314) ~[?:?]
                                    [number:protected] => 158
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319) ~[?:?]
                                    [number:protected] => 159
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1081) ~[?:?]
                                    [number:protected] => 160
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
                                    [number:protected] => 161
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.PlayerChunkMap.lambda$new$0(PlayerChunkMap.java:300) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 162
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompletion.claim(CompletableFuture.java:568) ~[?:?]
                                    [number:protected] => 163
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1069) ~[?:?]
                                    [number:protected] => 164
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.postComplete(CompletableFuture.java:506) ~[?:?]
                                    [number:protected] => 165
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.postFire(CompletableFuture.java:610) ~[?:?]
                                    [number:protected] => 166
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1085) ~[?:?]
                                    [number:protected] => 167
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
                                    [number:protected] => 168
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeTask(IAsyncTaskHandler.java:136) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 169
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeTask(ChunkProviderServer.java:994) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 170
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeNext(IAsyncTaskHandler.java:109) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 171
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeNext(ChunkProviderServer.java:1041) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 172
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer.runTasks(ChunkProviderServer.java:627) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 173
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.bb(MinecraftServer.java:1141) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 174
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.executeNext(MinecraftServer.java:1125) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 175
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeAll(IAsyncTaskHandler.java:95) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 176
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.executeModerately(MinecraftServer.java:1079) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 177
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.loadSpawn(MinecraftServer.java:635) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 178
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.loadWorld(MinecraftServer.java:446) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 179
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.DedicatedServer.init(DedicatedServer.java:239) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 180
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.w(MinecraftServer.java:935) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 181
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.lambda$a$0(MinecraftServer.java:173) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 182
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:834) [?:?]
                                    [number:protected] => 183
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.ThreadDeath
                                    [number:protected] => 184
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.stop(Thread.java:942) ~[?:?]
                                    [number:protected] => 185
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.stop(MinecraftServer.java:753) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 186
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.DedicatedServer.stop(DedicatedServer.java:704) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 187
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.close(MinecraftServer.java:727) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 188
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.v1_16_R3.util.ServerShutdownThread.run(ServerShutdownThread.java:28) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 189
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture.postComplete(CompletableFuture.java:506)java.util.concurrent.CompletionException: java.lang.ThreadDeath
                                    [number:protected] => 190
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314)
                                    [number:protected] => 191
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319)
                                    [number:protected] => 192
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1081)
                                    [number:protected] => 193
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478)
                                    [number:protected] => 194
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at net.minecraft.server.v1_16_R3.PlayerChunkMap.lambda$new$0(PlayerChunkMap.java:300)
                                    [number:protected] => 195
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture$UniCompletion.claim(CompletableFuture.java:568)
                                    [number:protected] => 196
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/FATAL]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/FATAL]: Failed to schedule load callback for chunk [22, -27]
                                    [number:protected] => 197
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.util.concurrent.CompletionException: java.lang.ThreadDeath
                                    [number:protected] => 198
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314) ~[?:?]
                                    [number:protected] => 199
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319) ~[?:?]
                                    [number:protected] => 200
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1081) ~[?:?]
                                    [number:protected] => 201
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
                                    [number:protected] => 202
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.PlayerChunkMap.lambda$new$0(PlayerChunkMap.java:300) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 203
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompletion.claim(CompletableFuture.java:568) ~[?:?]
                                    [number:protected] => 204
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1069) ~[?:?]
                                    [number:protected] => 205
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.postComplete(CompletableFuture.java:506) ~[?:?]
                                    [number:protected] => 206
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.postFire(CompletableFuture.java:610) ~[?:?]
                                    [number:protected] => 207
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1085) ~[?:?]
                                    [number:protected] => 208
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
                                    [number:protected] => 209
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeTask(IAsyncTaskHandler.java:136) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 210
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeTask(ChunkProviderServer.java:994) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 211
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeNext(IAsyncTaskHandler.java:109) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 212
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeNext(ChunkProviderServer.java:1041) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 213
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer.runTasks(ChunkProviderServer.java:627) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 214
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.bb(MinecraftServer.java:1141) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 215
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.executeNext(MinecraftServer.java:1125) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 216
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeAll(IAsyncTaskHandler.java:95) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 217
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.executeModerately(MinecraftServer.java:1079) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 218
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.loadSpawn(MinecraftServer.java:635) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 219
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.loadWorld(MinecraftServer.java:446) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 220
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.DedicatedServer.init(DedicatedServer.java:239) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 221
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.w(MinecraftServer.java:935) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 222
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.lambda$a$0(MinecraftServer.java:173) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 223
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:834) [?:?]
                                    [number:protected] => 224
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.ThreadDeath
                                    [number:protected] => 225
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.stop(Thread.java:942) ~[?:?]
                                    [number:protected] => 226
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.stop(MinecraftServer.java:753) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 227
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.DedicatedServer.stop(DedicatedServer.java:704) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 228
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.close(MinecraftServer.java:727) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 229
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.v1_16_R3.util.ServerShutdownThread.run(ServerShutdownThread.java:28) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 230
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1069)
                                    [number:protected] => 231
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: java.util.concurrent.CompletionException: java.lang.ThreadDeath
                                    [number:protected] => 232
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314)
                                    [number:protected] => 233
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/FATAL]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/FATAL]: Failed to schedule load callback for chunk [22, -26]
                                    [number:protected] => 234
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.util.concurrent.CompletionException: java.lang.ThreadDeath
                                    [number:protected] => 235
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314) ~[?:?]
                                    [number:protected] => 236
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319) ~[?:?]
                                    [number:protected] => 237
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1081) ~[?:?]
                                    [number:protected] => 238
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
                                    [number:protected] => 239
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.PlayerChunkMap.lambda$new$0(PlayerChunkMap.java:300) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 240
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompletion.claim(CompletableFuture.java:568) ~[?:?]
                                    [number:protected] => 241
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1069) ~[?:?]
                                    [number:protected] => 242
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.postComplete(CompletableFuture.java:506) ~[?:?]
                                    [number:protected] => 243
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.postFire(CompletableFuture.java:610) ~[?:?]
                                    [number:protected] => 244
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1085) ~[?:?]
                                    [number:protected] => 245
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
                                    [number:protected] => 246
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeTask(IAsyncTaskHandler.java:136) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 247
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeTask(ChunkProviderServer.java:994) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 248
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeNext(IAsyncTaskHandler.java:109) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 249
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeNext(ChunkProviderServer.java:1041) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 250
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer.runTasks(ChunkProviderServer.java:627) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 251
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.bb(MinecraftServer.java:1141) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 252
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.executeNext(MinecraftServer.java:1125) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 253
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeAll(IAsyncTaskHandler.java:95) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 254
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.executeModerately(MinecraftServer.java:1079) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 255
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.loadSpawn(MinecraftServer.java:635) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 256
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.loadWorld(MinecraftServer.java:446) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 257
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.DedicatedServer.init(DedicatedServer.java:239) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 258
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.w(MinecraftServer.java:935) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 259
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.lambda$a$0(MinecraftServer.java:173) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 260
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:834) [?:?]
                                    [number:protected] => 261
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.ThreadDeath
                                    [number:protected] => 262
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.stop(Thread.java:942) ~[?:?]
                                    [number:protected] => 263
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.stop(MinecraftServer.java:753) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 264
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.DedicatedServer.stop(DedicatedServer.java:704) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 265
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.close(MinecraftServer.java:727) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 266
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.v1_16_R3.util.ServerShutdownThread.run(ServerShutdownThread.java:28) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 267
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319)
                                    [number:protected] => 268
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/FATAL]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/FATAL]: Failed to schedule load callback for chunk [22, -25]
                                    [number:protected] => 269
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.util.concurrent.CompletionException: java.lang.ThreadDeath
                                    [number:protected] => 270
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314) ~[?:?]
                                    [number:protected] => 271
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319) ~[?:?]
                                    [number:protected] => 272
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1081) ~[?:?]
                                    [number:protected] => 273
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
                                    [number:protected] => 274
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.PlayerChunkMap.lambda$new$0(PlayerChunkMap.java:300) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 275
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompletion.claim(CompletableFuture.java:568) ~[?:?]
                                    [number:protected] => 276
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1069) ~[?:?]
                                    [number:protected] => 277
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.postComplete(CompletableFuture.java:506) ~[?:?]
                                    [number:protected] => 278
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture.postFire(CompletableFuture.java:610) ~[?:?]
                                    [number:protected] => 279
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1085) ~[?:?]
                                    [number:protected] => 280
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
                                    [number:protected] => 281
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeTask(IAsyncTaskHandler.java:136) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 282
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeTask(ChunkProviderServer.java:994) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 283
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeNext(IAsyncTaskHandler.java:109) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 284
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeNext(ChunkProviderServer.java:1041) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 285
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.ChunkProviderServer.runTasks(ChunkProviderServer.java:627) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 286
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.bb(MinecraftServer.java:1141) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 287
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.executeNext(MinecraftServer.java:1125) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 288
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeAll(IAsyncTaskHandler.java:95) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 289
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.executeModerately(MinecraftServer.java:1079) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 290
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.loadSpawn(MinecraftServer.java:635) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 291
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.loadWorld(MinecraftServer.java:446) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 292
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.DedicatedServer.init(DedicatedServer.java:239) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 293
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.w(MinecraftServer.java:935) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 294
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.lambda$a$0(MinecraftServer.java:173) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 295
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:834) [?:?]
                                    [number:protected] => 296
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.lang.ThreadDeath
                                    [number:protected] => 297
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.stop(Thread.java:942) ~[?:?]
                                    [number:protected] => 298
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.stop(MinecraftServer.java:753) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 299
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.DedicatedServer.stop(DedicatedServer.java:704) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 300
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_16_R3.MinecraftServer.close(MinecraftServer.java:727) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 301
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.v1_16_R3.util.ServerShutdownThread.run(ServerShutdownThread.java:28) ~[minecraft_server.jar:git-Paper-416]
                                    [number:protected] => 302
                                )

                        )

                    [level:protected] => FATAL
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: jjava.util.concurrent.CompletionException: java.lang.ThreadDeathjava.util.concurrent.CompletionException: java.lang.ThreadDeath
                                    [number:protected] => 303
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314)
                                    [number:protected] => 304
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [13:51:17] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319)
                                    [number:protected] => 305
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 68
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [13:51:07] [main/INFO]: Environment: authHost=\'https://authserver.mojang.com\', accountsHost=\'https://api.mojang.com\', sessionHost=\'https://sessionserver.mojang.com\', servicesHost=\'https://api.minecraftservices.com\', name=\'PROD\'
[13:51:07] [main/INFO]: Found new data pack file/bukkit, loading it automatically
[13:51:07] [main/INFO]: Reloading ResourceManager: Default, bukkit
[13:51:08] [Worker-Main-1/INFO]: Loaded 7 recipes
[13:51:11] [Server thread/INFO]: Starting minecraft server version 1.16.4
[13:51:11] [Server thread/INFO]: Loading properties
[13:51:11] [Server thread/INFO]: This server is running Paper version git-Paper-416 (MC: 1.16.4) (Implementing API version 1.16.4-R0.1-SNAPSHOT)
[13:51:11] [Server thread/INFO]: Server Ping Player Sample Count: 12
[13:51:11] [Server thread/INFO]: Using 4 threads for Netty based IO
[13:51:11] [Server thread/INFO]: Debug logging is disabled
[13:51:11] [Server thread/INFO]: Default game type: SURVIVAL
[13:51:11] [Server thread/INFO]: Generating keypair
[13:51:11] [Server thread/INFO]: Starting Minecraft server on *:54860
[13:51:11] [Server thread/INFO]: Using epoll channel type
[13:51:11] [Server thread/INFO]: Server permissions file permissions.yml is empty, ignoring it
[13:51:11] [Server thread/INFO]: Preparing level "world"
[13:51:12] [Server thread/INFO]: Preparing start region for dimension minecraft:overworld
[13:51:12] [Server thread/INFO]: Loaded 0 spawn chunks for world world
[13:51:12] [Server thread/INFO]: Preparing spawn area: 0%
[13:51:12] [Server thread/INFO]: Time elapsed: 297 ms
[13:51:12] [Server thread/INFO]: Preparing start region for dimension minecraft:the_nether
[13:51:16] [Server thread/INFO]: Loaded 0 spawn chunks for world world_nether
[13:51:16] [Paper Async Chunk Task Thread #0/WARN]: java.lang.RuntimeException: Server attempted to load chunk saved with newer version of minecraft! 2586 > 2584
[13:51:16] [Paper Async Chunk Task Thread #0/WARN]: 	at net.minecraft.server.v1_16_R3.ChunkRegionLoader.loadChunk(ChunkRegionLoader.java:67)
[13:51:16] [Paper Async Chunk Task Thread #0/WARN]: 	at com.destroystokyo.paper.io.chunk.ChunkLoadTask.executeTask(ChunkLoadTask.java:114)
[13:51:16] [Paper Async Chunk Task Thread #0/WARN]: 	at com.destroystokyo.paper.io.chunk.ChunkLoadTask.run(ChunkLoadTask.java:39)
[13:51:16] [Paper Async Chunk Task Thread #0/WARN]: 	at com.destroystokyo.paper.io.QueueExecutorThread.pollTasks(QueueExecutorThread.java:105)
[13:51:16] [Paper Async Chunk Task Thread #0/WARN]: 	at com.destroystokyo.paper.io.QueueExecutorThread.run(QueueExecutorThread.java:38)
[13:51:16] [Server thread/INFO]: Preparing spawn area: 0%
[13:51:16] [Server thread/INFO]: Preparing spawn area: 0%
[13:51:16] [Server thread/INFO]: Preparing spawn area: 0%
[13:51:16] [Server thread/INFO]: Preparing spawn area: 0%
[13:51:16] [Server thread/INFO]: Preparing spawn area: 0%
[13:51:16] [Server thread/INFO]: Preparing spawn area: 0%
[13:51:16] [Server thread/INFO]: Preparing spawn area: 0%
[13:51:16] [Server thread/INFO]: Preparing spawn area: 0%
[13:51:16] [Server thread/INFO]: Preparing spawn area: 0%
[13:51:17] [Worker-Main-1/INFO]: Preparing spawn area: 0%
[13:51:17] [Thread-3/INFO]: Stopping main thread (Ignore any thread death message you see! - DO NOT REPORT THREAD DEATH TO PAPER)
[13:51:17] [Server thread/FATAL]: Failed to schedule load callback for chunk [22, -33]
java.util.concurrent.CompletionException: java.lang.ThreadDeath
	at java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314) ~[?:?]
	at java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1081) ~[?:?]
	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
	at net.minecraft.server.v1_16_R3.PlayerChunkMap.lambda$new$0(PlayerChunkMap.java:300) ~[minecraft_server.jar:git-Paper-416]
	at java.util.concurrent.CompletableFuture$UniCompletion.claim(CompletableFuture.java:568) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1069) ~[?:?]
	at java.util.concurrent.CompletableFuture.postComplete(CompletableFuture.java:506) ~[?:?]
	at java.util.concurrent.CompletableFuture.postFire(CompletableFuture.java:610) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1085) ~[?:?]
	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeTask(IAsyncTaskHandler.java:136) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeTask(ChunkProviderServer.java:994) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeNext(IAsyncTaskHandler.java:109) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeNext(ChunkProviderServer.java:1041) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer.runTasks(ChunkProviderServer.java:627) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.bb(MinecraftServer.java:1141) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.executeNext(MinecraftServer.java:1125) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeAll(IAsyncTaskHandler.java:95) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.executeModerately(MinecraftServer.java:1079) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.loadSpawn(MinecraftServer.java:635) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.loadWorld(MinecraftServer.java:446) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.DedicatedServer.init(DedicatedServer.java:239) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.w(MinecraftServer.java:935) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.lambda$a$0(MinecraftServer.java:173) ~[minecraft_server.jar:git-Paper-416]
	at java.lang.Thread.run(Thread.java:834) [?:?]
	Suppressed: java.lang.ThreadDeath
		at java.lang.Thread.stop(Thread.java:942) [?:?]
		at net.minecraft.server.v1_16_R3.MinecraftServer.stop(MinecraftServer.java:753) ~[minecraft_server.jar:git-Paper-416]
		at net.minecraft.server.v1_16_R3.DedicatedServer.stop(DedicatedServer.java:704) ~[minecraft_server.jar:git-Paper-416]
		at net.minecraft.server.v1_16_R3.MinecraftServer.close(MinecraftServer.java:727) ~[minecraft_server.jar:git-Paper-416]
		at org.bukkit.craftbukkit.v1_16_R3.util.ServerShutdownThread.run(ServerShutdownThread.java:28) ~[minecraft_server.jar:git-Paper-416]
Caused by: java.lang.ThreadDeath
	at java.lang.Thread.stop(Thread.java:942) ~[?:?]
	at net.minecraft.server.v1_16_R3.MinecraftServer.stop(MinecraftServer.java:753) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.DedicatedServer.stop(DedicatedServer.java:704) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.close(MinecraftServer.java:727) ~[minecraft_server.jar:git-Paper-416]
	at org.bukkit.craftbukkit.v1_16_R3.util.ServerShutdownThread.run(ServerShutdownThread.java:28) ~[minecraft_server.jar:git-Paper-416]
[13:51:17] [Server thread/FATAL]: Failed to schedule load callback for chunk [22, -31]
java.util.concurrent.CompletionException: java.lang.ThreadDeath
	at java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314) ~[?:?]
	at java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1081) ~[?:?]
	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
	at net.minecraft.server.v1_16_R3.PlayerChunkMap.lambda$new$0(PlayerChunkMap.java:300) ~[minecraft_server.jar:git-Paper-416]
	at java.util.concurrent.CompletableFuture$UniCompletion.claim(CompletableFuture.java:568) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1069) ~[?:?]
	at java.util.concurrent.CompletableFuture.postComplete(CompletableFuture.java:506) ~[?:?]
	at java.util.concurrent.CompletableFuture.postFire(CompletableFuture.java:610) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1085) ~[?:?]
	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeTask(IAsyncTaskHandler.java:136) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeTask(ChunkProviderServer.java:994) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeNext(IAsyncTaskHandler.java:109) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeNext(ChunkProviderServer.java:1041) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer.runTasks(ChunkProviderServer.java:627) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.bb(MinecraftServer.java:1141) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.executeNext(MinecraftServer.java:1125) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeAll(IAsyncTaskHandler.java:95) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.executeModerately(MinecraftServer.java:1079) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.loadSpawn(MinecraftServer.java:635) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.loadWorld(MinecraftServer.java:446) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.DedicatedServer.init(DedicatedServer.java:239) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.w(MinecraftServer.java:935) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.lambda$a$0(MinecraftServer.java:173) ~[minecraft_server.jar:git-Paper-416]
	at java.lang.Thread.run(Thread.java:834) [?:?]
Caused by: java.lang.ThreadDeath
	at java.lang.Thread.stop(Thread.java:942) ~[?:?]
	at net.minecraft.server.v1_16_R3.MinecraftServer.stop(MinecraftServer.java:753) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.DedicatedServer.stop(DedicatedServer.java:704) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.close(MinecraftServer.java:727) ~[minecraft_server.jar:git-Paper-416]
	at org.bukkit.craftbukkit.v1_16_R3.util.ServerShutdownThread.run(ServerShutdownThread.java:28) ~[minecraft_server.jar:git-Paper-416]
[13:51:17] [Server thread/FATAL]: Failed to schedule load callback for chunk [22, -29]
java.util.concurrent.CompletionException: java.lang.ThreadDeath
	at java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314) ~[?:?]
	at java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1081) ~[?:?]
	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
	at net.minecraft.server.v1_16_R3.PlayerChunkMap.lambda$new$0(PlayerChunkMap.java:300) ~[minecraft_server.jar:git-Paper-416]
	at java.util.concurrent.CompletableFuture$UniCompletion.claim(CompletableFuture.java:568) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1069) ~[?:?]
	at java.util.concurrent.CompletableFuture.postComplete(CompletableFuture.java:506) ~[?:?]
	at java.util.concurrent.CompletableFuture.postFire(CompletableFuture.java:610) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1085) ~[?:?]
	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeTask(IAsyncTaskHandler.java:136) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeTask(ChunkProviderServer.java:994) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeNext(IAsyncTaskHandler.java:109) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeNext(ChunkProviderServer.java:1041) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer.runTasks(ChunkProviderServer.java:627) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.bb(MinecraftServer.java:1141) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.executeNext(MinecraftServer.java:1125) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeAll(IAsyncTaskHandler.java:95) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.executeModerately(MinecraftServer.java:1079) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.loadSpawn(MinecraftServer.java:635) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.loadWorld(MinecraftServer.java:446) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.DedicatedServer.init(DedicatedServer.java:239) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.w(MinecraftServer.java:935) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.lambda$a$0(MinecraftServer.java:173) ~[minecraft_server.jar:git-Paper-416]
	at java.lang.Thread.run(Thread.java:834) [?:?]
Caused by: java.lang.ThreadDeath
	at java.lang.Thread.stop(Thread.java:942) ~[?:?]
	at net.minecraft.server.v1_16_R3.MinecraftServer.stop(MinecraftServer.java:753) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.DedicatedServer.stop(DedicatedServer.java:704) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.close(MinecraftServer.java:727) ~[minecraft_server.jar:git-Paper-416]
	at org.bukkit.craftbukkit.v1_16_R3.util.ServerShutdownThread.run(ServerShutdownThread.java:28) ~[minecraft_server.jar:git-Paper-416]
[13:51:17] [Server thread/WARN]: java.util.concurrent.CompletionException: java.lang.ThreadDeath
[13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314)
[13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319)
[13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1081)
[13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478)
[13:51:17] [Server thread/WARN]: 	at net.minecraft.server.v1_16_R3.PlayerChunkMap.lambda$new$0(PlayerChunkMap.java:300)
[13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture$UniCompletion.claim(CompletableFuture.java:568)
[13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1069)
[13:51:17] [Server thread/FATAL]: Failed to schedule load callback for chunk [22, -28]
java.util.concurrent.CompletionException: java.lang.ThreadDeath
	at java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314) ~[?:?]
	at java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1081) ~[?:?]
	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
	at net.minecraft.server.v1_16_R3.PlayerChunkMap.lambda$new$0(PlayerChunkMap.java:300) ~[minecraft_server.jar:git-Paper-416]
	at java.util.concurrent.CompletableFuture$UniCompletion.claim(CompletableFuture.java:568) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1069) ~[?:?]
	at java.util.concurrent.CompletableFuture.postComplete(CompletableFuture.java:506) ~[?:?]
	at java.util.concurrent.CompletableFuture.postFire(CompletableFuture.java:610) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1085) ~[?:?]
	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeTask(IAsyncTaskHandler.java:136) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeTask(ChunkProviderServer.java:994) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeNext(IAsyncTaskHandler.java:109) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeNext(ChunkProviderServer.java:1041) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer.runTasks(ChunkProviderServer.java:627) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.bb(MinecraftServer.java:1141) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.executeNext(MinecraftServer.java:1125) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeAll(IAsyncTaskHandler.java:95) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.executeModerately(MinecraftServer.java:1079) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.loadSpawn(MinecraftServer.java:635) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.loadWorld(MinecraftServer.java:446) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.DedicatedServer.init(DedicatedServer.java:239) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.w(MinecraftServer.java:935) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.lambda$a$0(MinecraftServer.java:173) ~[minecraft_server.jar:git-Paper-416]
	at java.lang.Thread.run(Thread.java:834) [?:?]
Caused by: java.lang.ThreadDeath
	at java.lang.Thread.stop(Thread.java:942) ~[?:?]
	at net.minecraft.server.v1_16_R3.MinecraftServer.stop(MinecraftServer.java:753) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.DedicatedServer.stop(DedicatedServer.java:704) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.close(MinecraftServer.java:727) ~[minecraft_server.jar:git-Paper-416]
	at org.bukkit.craftbukkit.v1_16_R3.util.ServerShutdownThread.run(ServerShutdownThread.java:28) ~[minecraft_server.jar:git-Paper-416]
[13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture.postComplete(CompletableFuture.java:506)java.util.concurrent.CompletionException: java.lang.ThreadDeath
[13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314)
[13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319)
[13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1081)
[13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478)
[13:51:17] [Server thread/WARN]: 	at net.minecraft.server.v1_16_R3.PlayerChunkMap.lambda$new$0(PlayerChunkMap.java:300)
[13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture$UniCompletion.claim(CompletableFuture.java:568)
[13:51:17] [Server thread/FATAL]: Failed to schedule load callback for chunk [22, -27]
java.util.concurrent.CompletionException: java.lang.ThreadDeath
	at java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314) ~[?:?]
	at java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1081) ~[?:?]
	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
	at net.minecraft.server.v1_16_R3.PlayerChunkMap.lambda$new$0(PlayerChunkMap.java:300) ~[minecraft_server.jar:git-Paper-416]
	at java.util.concurrent.CompletableFuture$UniCompletion.claim(CompletableFuture.java:568) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1069) ~[?:?]
	at java.util.concurrent.CompletableFuture.postComplete(CompletableFuture.java:506) ~[?:?]
	at java.util.concurrent.CompletableFuture.postFire(CompletableFuture.java:610) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1085) ~[?:?]
	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeTask(IAsyncTaskHandler.java:136) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeTask(ChunkProviderServer.java:994) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeNext(IAsyncTaskHandler.java:109) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeNext(ChunkProviderServer.java:1041) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer.runTasks(ChunkProviderServer.java:627) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.bb(MinecraftServer.java:1141) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.executeNext(MinecraftServer.java:1125) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeAll(IAsyncTaskHandler.java:95) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.executeModerately(MinecraftServer.java:1079) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.loadSpawn(MinecraftServer.java:635) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.loadWorld(MinecraftServer.java:446) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.DedicatedServer.init(DedicatedServer.java:239) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.w(MinecraftServer.java:935) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.lambda$a$0(MinecraftServer.java:173) ~[minecraft_server.jar:git-Paper-416]
	at java.lang.Thread.run(Thread.java:834) [?:?]
Caused by: java.lang.ThreadDeath
	at java.lang.Thread.stop(Thread.java:942) ~[?:?]
	at net.minecraft.server.v1_16_R3.MinecraftServer.stop(MinecraftServer.java:753) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.DedicatedServer.stop(DedicatedServer.java:704) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.close(MinecraftServer.java:727) ~[minecraft_server.jar:git-Paper-416]
	at org.bukkit.craftbukkit.v1_16_R3.util.ServerShutdownThread.run(ServerShutdownThread.java:28) ~[minecraft_server.jar:git-Paper-416]
[13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1069)
[13:51:17] [Server thread/WARN]: java.util.concurrent.CompletionException: java.lang.ThreadDeath
[13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314)
[13:51:17] [Server thread/FATAL]: Failed to schedule load callback for chunk [22, -26]
java.util.concurrent.CompletionException: java.lang.ThreadDeath
	at java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314) ~[?:?]
	at java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1081) ~[?:?]
	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
	at net.minecraft.server.v1_16_R3.PlayerChunkMap.lambda$new$0(PlayerChunkMap.java:300) ~[minecraft_server.jar:git-Paper-416]
	at java.util.concurrent.CompletableFuture$UniCompletion.claim(CompletableFuture.java:568) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1069) ~[?:?]
	at java.util.concurrent.CompletableFuture.postComplete(CompletableFuture.java:506) ~[?:?]
	at java.util.concurrent.CompletableFuture.postFire(CompletableFuture.java:610) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1085) ~[?:?]
	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeTask(IAsyncTaskHandler.java:136) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeTask(ChunkProviderServer.java:994) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeNext(IAsyncTaskHandler.java:109) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeNext(ChunkProviderServer.java:1041) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer.runTasks(ChunkProviderServer.java:627) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.bb(MinecraftServer.java:1141) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.executeNext(MinecraftServer.java:1125) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeAll(IAsyncTaskHandler.java:95) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.executeModerately(MinecraftServer.java:1079) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.loadSpawn(MinecraftServer.java:635) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.loadWorld(MinecraftServer.java:446) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.DedicatedServer.init(DedicatedServer.java:239) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.w(MinecraftServer.java:935) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.lambda$a$0(MinecraftServer.java:173) ~[minecraft_server.jar:git-Paper-416]
	at java.lang.Thread.run(Thread.java:834) [?:?]
Caused by: java.lang.ThreadDeath
	at java.lang.Thread.stop(Thread.java:942) ~[?:?]
	at net.minecraft.server.v1_16_R3.MinecraftServer.stop(MinecraftServer.java:753) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.DedicatedServer.stop(DedicatedServer.java:704) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.close(MinecraftServer.java:727) ~[minecraft_server.jar:git-Paper-416]
	at org.bukkit.craftbukkit.v1_16_R3.util.ServerShutdownThread.run(ServerShutdownThread.java:28) ~[minecraft_server.jar:git-Paper-416]
[13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319)
[13:51:17] [Server thread/FATAL]: Failed to schedule load callback for chunk [22, -25]
java.util.concurrent.CompletionException: java.lang.ThreadDeath
	at java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314) ~[?:?]
	at java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1081) ~[?:?]
	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
	at net.minecraft.server.v1_16_R3.PlayerChunkMap.lambda$new$0(PlayerChunkMap.java:300) ~[minecraft_server.jar:git-Paper-416]
	at java.util.concurrent.CompletableFuture$UniCompletion.claim(CompletableFuture.java:568) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1069) ~[?:?]
	at java.util.concurrent.CompletableFuture.postComplete(CompletableFuture.java:506) ~[?:?]
	at java.util.concurrent.CompletableFuture.postFire(CompletableFuture.java:610) ~[?:?]
	at java.util.concurrent.CompletableFuture$UniCompose.tryFire(CompletableFuture.java:1085) ~[?:?]
	at java.util.concurrent.CompletableFuture$Completion.run(CompletableFuture.java:478) ~[?:?]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeTask(IAsyncTaskHandler.java:136) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeTask(ChunkProviderServer.java:994) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeNext(IAsyncTaskHandler.java:109) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer$a.executeNext(ChunkProviderServer.java:1041) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.ChunkProviderServer.runTasks(ChunkProviderServer.java:627) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.bb(MinecraftServer.java:1141) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.executeNext(MinecraftServer.java:1125) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.IAsyncTaskHandler.executeAll(IAsyncTaskHandler.java:95) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.executeModerately(MinecraftServer.java:1079) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.loadSpawn(MinecraftServer.java:635) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.loadWorld(MinecraftServer.java:446) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.DedicatedServer.init(DedicatedServer.java:239) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.w(MinecraftServer.java:935) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.lambda$a$0(MinecraftServer.java:173) ~[minecraft_server.jar:git-Paper-416]
	at java.lang.Thread.run(Thread.java:834) [?:?]
Caused by: java.lang.ThreadDeath
	at java.lang.Thread.stop(Thread.java:942) ~[?:?]
	at net.minecraft.server.v1_16_R3.MinecraftServer.stop(MinecraftServer.java:753) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.DedicatedServer.stop(DedicatedServer.java:704) ~[minecraft_server.jar:git-Paper-416]
	at net.minecraft.server.v1_16_R3.MinecraftServer.close(MinecraftServer.java:727) ~[minecraft_server.jar:git-Paper-416]
	at org.bukkit.craftbukkit.v1_16_R3.util.ServerShutdownThread.run(ServerShutdownThread.java:28) ~[minecraft_server.jar:git-Paper-416]
[13:51:17] [Server thread/WARN]: jjava.util.concurrent.CompletionException: java.lang.ThreadDeathjava.util.concurrent.CompletionException: java.lang.ThreadDeath
[13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture.encodeThrowable(CompletableFuture.java:314)
[13:51:17] [Server thread/WARN]: 	at java.base/java.util.concurrent.CompletableFuture.completeThrowable(CompletableFuture.java:319)
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
                    [value:protected] => 1.16.4
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [13:51:11] [Server thread/INFO]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [13:51:11] [Server thread/INFO]: Starting minecraft server version 1.16.4
                                            [number:protected] => 5
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Paper\VersionDowngradeProblem Object
                (
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Paper\VersionDowngradeSolution Object
                                (
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [13:51:16] [Paper Async Chunk Task Thread #0/WARN]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [13:51:16] [Paper Async Chunk Task Thread #0/WARN]: java.lang.RuntimeException: Server attempted to load chunk saved with newer version of minecraft! 2586 > 2584
                                            [number:protected] => 23
                                        )

                                )

                            [level:protected] => WARN
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

        $this->assertEquals("Minecraft version: 1.16.4", $analysis[0]->getMessage());

        $this->assertEquals("Your world was used on a newer version before.", $analysis[1]->getMessage());
        $this->assertEquals("Install a newer version of Minecraft.", $analysis[1][0]->getMessage());

    }
}