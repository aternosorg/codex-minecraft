<?php

class SpigotChunkLoadTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/spigot-chunk-load.log");
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
                                    [text:protected] => [15:36:37] [main/WARN]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:36:37] [main/WARN]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:36:37] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:36:37] [main/WARN]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:36:37] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:36:37] [main/WARN]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:36:37] [main/WARN]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:36:37] [main/WARN]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:36:37] [main/WARN]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:36:37] [main/WARN]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:36:37] [main/INFO]: Loaded 0 recipes
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:36:37] [main/INFO]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:36:38] [Server thread/INFO]: Starting minecraft server version 1.13
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:36:38] [Server thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:36:38] [Server thread/INFO]: Loading properties
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:36:38] [Server thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:36:38] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:36:38] [Server thread/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:36:41] [Server thread/INFO]: This server is running CraftBukkit version git-Spigot-fe3ab0d-3418f8d (MC: 1.13) (Implementing API version 1.13-R0.1-SNAPSHOT)
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:36:41] [Server thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:36:42] [Server thread/INFO]: Server Ping Player Sample Count: 12
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:36:42] [Server thread/INFO]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:36:42] [Server thread/INFO]: Using 4 threads for Netty based IO
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:36:42] [Server thread/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:36:42] [Server thread/INFO]: Debug logging is disabled
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:36:42] [Server thread/INFO]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:36:42] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:36:42] [Server thread/INFO]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:36:43] [Server thread/INFO]: Starting Minecraft server on *:10873
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:36:43] [Server thread/INFO]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:36:43] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:36:43] [Server thread/INFO]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:10] [Server thread/INFO]: Set PluginClassLoader as parallel capable
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:10] [Server thread/INFO]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:11] [Server thread/INFO]: [MySkin] Loading MySkin v2.2
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:11] [Server thread/INFO]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:11] [Server thread/INFO]: [NoTrashPl] Loading NoTrashPl v2.6
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:11] [Server thread/INFO]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:11] [Server thread/WARN]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:11] [Server thread/WARN]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:11] [Server thread/WARN]: The server will make no attempt to authenticate usernames. Beware.
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:11] [Server thread/WARN]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:11] [Server thread/WARN]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:11] [Server thread/WARN]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:11] [Server thread/WARN]: To change this, set "online-mode" to "true" in the server.properties file.
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:11] [Server thread/WARN]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:11] [Server thread/INFO]: **** Beginning UUID conversion, this may take A LONG time ****
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:11] [Server thread/INFO]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:11] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:11] [Server thread/INFO]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:12] [Server thread/INFO]: Reloading ResourceManager: Default, bukkit
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:12] [Server thread/INFO]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:21] [Server thread/INFO]: Loaded 524 recipes
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:21] [Server thread/INFO]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: -------- World Settings For [world] --------
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Custom Map Seeds: Village: 10387312 Desert: 14357617 Igloo: 14357618 Jungle: 14357619 Swamp: 14357620 Monument: 10387313Ocean: 14357621 Shipwreck: 165745295 Slime: 987234911
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Vine Growth Modifier: 100%
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Mob Spawn Range: 8
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:27] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:27] [Server thread/INFO]:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: -------- World Settings For [world_nether] --------
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Custom Map Seeds: Village: 10387312 Desert: 14357617 Igloo: 14357618 Jungle: 14357619 Swamp: 14357620 Monument: 10387313Ocean: 14357621 Shipwreck: 165745295 Slime: 987234911
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Vine Growth Modifier: 100%
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Mob Spawn Range: 8
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: -------- World Settings For [world_the_end] --------
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Custom Map Seeds: Village: 10387312 Desert: 14357617 Igloo: 14357618 Jungle: 14357619 Swamp: 14357620 Monument: 10387313Ocean: 14357621 Shipwreck: 165745295 Slime: 987234911
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Vine Growth Modifier: 100%
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Mob Spawn Range: 8
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:29] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:29] [Server thread/INFO]:
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:30] [Server thread/INFO]: Preparing start region for level 0 (Seed: 6105420291853735988)
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:30] [Server thread/INFO]:
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:32] [Server thread/INFO]: Preparing spawn area: 4%
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:32] [Server thread/INFO]:
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:32] [Server thread/INFO]: Preparing spawn area: 8%
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:32] [Server thread/INFO]:
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:33] [Server thread/INFO]: Preparing spawn area: 12%
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:33] [Server thread/INFO]:
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:33] [Server thread/INFO]: Preparing spawn area: 16%
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:33] [Server thread/INFO]:
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:34] [Server thread/INFO]: Preparing spawn area: 20%
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:34] [Server thread/INFO]:
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:34] [Server thread/INFO]: Preparing spawn area: 24%
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:34] [Server thread/INFO]:
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:34] [Server thread/INFO]: Preparing spawn area: 28%
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:34] [Server thread/INFO]:
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:35] [Server thread/INFO]: Preparing spawn area: 32%
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:35] [Server thread/INFO]:
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:35] [Server thread/INFO]: Preparing spawn area: 36%
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:35] [Server thread/INFO]:
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:35] [Server thread/INFO]: Preparing spawn area: 40%
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:35] [Server thread/INFO]:
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:36] [Server thread/INFO]: Preparing spawn area: 44%
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:36] [Server thread/INFO]:
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:36] [Server thread/INFO]: Preparing spawn area: 48%
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:36] [Server thread/INFO]:
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:37] [Server thread/INFO]: Preparing spawn area: 52%
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:37] [Server thread/INFO]:
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:37] [Server thread/INFO]: Preparing spawn area: 56%
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:37] [Server thread/INFO]:
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:37] [Server thread/INFO]: Preparing spawn area: 60%
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:37] [Server thread/INFO]:
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:38] [Server thread/INFO]: Preparing spawn area: 64%
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:38] [Server thread/INFO]:
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:40] [Server thread/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:40] [Server thread/INFO]:
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:42] [Server thread/INFO]: Preparing spawn area: 72%
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:42] [Server thread/INFO]:
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:42] [Server thread/INFO]: Preparing spawn area: 76%
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:42] [Server thread/INFO]:
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:43] [Server thread/INFO]: Preparing spawn area: 80%
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:43] [Server thread/INFO]:
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:43] [Server thread/INFO]: Preparing spawn area: 84%
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:43] [Server thread/INFO]:
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:43] [Server thread/INFO]: Preparing spawn area: 88%
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:43] [Server thread/INFO]:
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:43] [Server thread/INFO]: Preparing spawn area: 92%
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:43] [Server thread/INFO]:
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:44] [Server thread/INFO]: Preparing spawn area: 96%
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:44] [Server thread/INFO]:
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:44] [Server thread/INFO]: Preparing spawn area: 100%
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:44] [Server thread/INFO]:
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:44] [Server thread/INFO]: Preparing start region for level 1 (Seed: -6525236373467463498)
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:44] [Server thread/INFO]:
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:44] [Server thread/INFO]: Preparing spawn area: 4%
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:44] [Server thread/INFO]:
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:44] [Server thread/INFO]: Preparing spawn area: 8%
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:44] [Server thread/INFO]:
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:44] [Server thread/INFO]: Preparing spawn area: 12%
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:44] [Server thread/INFO]:
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:44] [Server thread/INFO]: Preparing spawn area: 16%
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:44] [Server thread/INFO]:
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:45] [Server thread/INFO]: Preparing spawn area: 20%
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:45] [Server thread/INFO]:
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:46] [Server thread/INFO]: Preparing spawn area: 24%
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:46] [Server thread/INFO]:
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:46] [Server thread/INFO]: Preparing spawn area: 28%
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:46] [Server thread/INFO]:
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:46] [Server thread/INFO]: Preparing spawn area: 32%
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:46] [Server thread/INFO]:
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:46] [Server thread/INFO]: Preparing spawn area: 36%
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:46] [Server thread/INFO]:
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:47] [Server thread/INFO]: Preparing spawn area: 40%
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:47] [Server thread/INFO]:
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:47] [Server thread/INFO]: Preparing spawn area: 44%
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:47] [Server thread/INFO]:
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:47] [Server thread/INFO]: Preparing spawn area: 48%
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:47] [Server thread/INFO]:
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:47] [Server thread/INFO]: Preparing spawn area: 52%
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:47] [Server thread/INFO]:
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:48] [Server thread/INFO]: Preparing spawn area: 56%
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:48] [Server thread/INFO]:
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:48] [Server thread/INFO]: Preparing spawn area: 60%
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:48] [Server thread/INFO]:
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:48] [Server thread/INFO]: Preparing spawn area: 64%
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:48] [Server thread/INFO]:
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:48] [Server thread/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:48] [Server thread/INFO]:
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:49] [Server thread/INFO]: Preparing spawn area: 72%
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:49] [Server thread/INFO]:
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:49] [Server thread/INFO]: Preparing spawn area: 76%
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:49] [Server thread/INFO]:
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:49] [Server thread/INFO]: Preparing spawn area: 80%
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:49] [Server thread/INFO]:
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:49] [Server thread/INFO]: Preparing spawn area: 84%
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:49] [Server thread/INFO]:
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:50] [Server thread/INFO]: Preparing spawn area: 88%
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:50] [Server thread/INFO]:
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:50] [Server thread/INFO]: Preparing spawn area: 92%
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:50] [Server thread/INFO]:
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:50] [Server thread/INFO]: Preparing spawn area: 96%
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:50] [Server thread/INFO]:
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:51] [Server thread/INFO]: Preparing spawn area: 100%
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:51] [Server thread/INFO]:
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:51] [Server thread/INFO]: Preparing start region for level 2 (Seed: -6525236373467463498)
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:51] [Server thread/INFO]:
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:51] [Server thread/INFO]: Preparing spawn area: 4%
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:51] [Server thread/INFO]:
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:51] [Server thread/INFO]: Preparing spawn area: 8%
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:51] [Server thread/INFO]:
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:51] [Server thread/INFO]: Preparing spawn area: 12%
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:51] [Server thread/INFO]:
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:51] [Server thread/INFO]: Preparing spawn area: 16%
                                    [number:protected] => 165
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:51] [Server thread/INFO]:
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:51] [Server thread/INFO]: Preparing spawn area: 20%
                                    [number:protected] => 166
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:51] [Server thread/INFO]:
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:51] [Server thread/INFO]: Preparing spawn area: 24%
                                    [number:protected] => 167
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:51] [Server thread/INFO]:
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:51] [Server thread/INFO]: Preparing spawn area: 28%
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:51] [Server thread/INFO]:
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:51] [Server thread/INFO]: Preparing spawn area: 32%
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:51] [Server thread/INFO]:
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:51] [Server thread/INFO]: Preparing spawn area: 36%
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:51] [Server thread/INFO]:
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:51] [Server thread/INFO]: Preparing spawn area: 40%
                                    [number:protected] => 171
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:51] [Server thread/INFO]:
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:51] [Server thread/INFO]: Preparing spawn area: 44%
                                    [number:protected] => 172
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:51] [Server thread/INFO]:
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:51] [Server thread/INFO]: Preparing spawn area: 48%
                                    [number:protected] => 173
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:51] [Server thread/INFO]:
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:51] [Server thread/INFO]: Preparing spawn area: 52%
                                    [number:protected] => 174
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:51] [Server thread/INFO]:
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:51] [Server thread/INFO]: Preparing spawn area: 56%
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:51] [Server thread/INFO]:
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:52] [Server thread/INFO]: Preparing spawn area: 60%
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:52] [Server thread/INFO]:
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:52] [Server thread/INFO]: Preparing spawn area: 64%
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:52] [Server thread/INFO]:
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:52] [Server thread/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:52] [Server thread/INFO]:
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:52] [Server thread/INFO]: Preparing spawn area: 72%
                                    [number:protected] => 179
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:52] [Server thread/INFO]:
                )

            [179] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:52] [Server thread/INFO]: Preparing spawn area: 76%
                                    [number:protected] => 180
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:52] [Server thread/INFO]:
                )

            [180] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:52] [Server thread/INFO]: Preparing spawn area: 80%
                                    [number:protected] => 181
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:52] [Server thread/INFO]:
                )

            [181] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:52] [Server thread/INFO]: Preparing spawn area: 84%
                                    [number:protected] => 182
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:52] [Server thread/INFO]:
                )

            [182] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:52] [Server thread/INFO]: Preparing spawn area: 88%
                                    [number:protected] => 183
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:52] [Server thread/INFO]:
                )

            [183] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:52] [Server thread/INFO]: Preparing spawn area: 92%
                                    [number:protected] => 184
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:52] [Server thread/INFO]:
                )

            [184] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:52] [Server thread/INFO]: Preparing spawn area: 96%
                                    [number:protected] => 185
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:52] [Server thread/INFO]:
                )

            [185] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:52] [Server thread/INFO]: Preparing spawn area: 100%
                                    [number:protected] => 186
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:52] [Server thread/INFO]:
                )

            [186] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:52] [Server thread/INFO]: [MySkin] Enabling MySkin v2.2
                                    [number:protected] => 187
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:52] [Server thread/INFO]:
                )

            [187] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:52] [Server thread/INFO]: [MySkin] Running on server version v1_13_R1
                                    [number:protected] => 188
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:52] [Server thread/INFO]:
                )

            [188] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:52] [Server thread/INFO]: [NoTrashPl] Enabling NoTrashPl v2.6
                                    [number:protected] => 189
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:52] [Server thread/INFO]:
                )

            [189] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:52] [Server thread/INFO]: [NoTrashPl] is now activated!
                                    [number:protected] => 190
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:52] [Server thread/INFO]:
                )

            [190] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:52] [Server thread/INFO]: [NoTrashPl] Loading current File-Content: messages.yml
                                    [number:protected] => 191
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:52] [Server thread/INFO]:
                )

            [191] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:52] [Server thread/INFO]: Server permissions file permissions.yml is empty, ignoring it
                                    [number:protected] => 192
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:52] [Server thread/INFO]:
                )

            [192] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:53] [Server thread/INFO]: Time elapsed: 23050 ms
                                    [number:protected] => 193
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:53] [Server thread/INFO]:
                )

            [193] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:53] [Server thread/INFO]: Done (41.555s)! For help, type "help"
                                    [number:protected] => 194
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:53] [Server thread/INFO]:
                )

            [194] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:53] [Server thread/INFO]: Starting GS4 status listener
                                    [number:protected] => 195
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:53] [Server thread/INFO]:
                )

            [195] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:37:53] [Query Listener #1/INFO]: Query running on **.**.**.**:10873
                                    [number:protected] => 196
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:37:53] [Query Listener #1/INFO]:
                )

            [196] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:53:18] [User Authenticator #11/INFO]: UUID of player player is uuid
                                    [number:protected] => 197
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:53:18] [User Authenticator #11/INFO]:
                )

            [197] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:53:19] [Server thread/ERROR]: Couldn\'t load chunk
                                    [number:protected] => 198
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.minecraft.server.v1_13_R1.ReportedException: Loading NBT data
                                    [number:protected] => 199
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:443) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 200
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 201
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagList.load(SourceFile:69) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 202
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 203
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 204
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 205
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 206
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:84) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 207
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 208
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:43) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 209
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.RegionFileCache.read(RegionFileCache.java:89) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 210
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 211
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 212
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.loadChunk(ChunkRegionLoader.java:144) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 213
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:129) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 214
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.loadChunkAt(ChunkProviderServer.java:86) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 215
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.getOrLoadChunkAt(ChunkProviderServer.java:109) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 216
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerChunk.&lt;init&gt;(PlayerChunk.java:43) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 217
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerChunkMap.c(PlayerChunkMap.java:206) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 218
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerChunkMap.addPlayer(PlayerChunkMap.java:261) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 219
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerList.a(PlayerList.java:287) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 220
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerList.onPlayerJoin(PlayerList.java:384) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 221
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerList.a(PlayerList.java:163) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 222
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.LoginListener.b(LoginListener.java:150) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 223
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.LoginListener.Y_(LoginListener.java:54) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 224
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NetworkManager.a(NetworkManager.java:231) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 225
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ServerConnection.c(ServerConnection.java:120) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 226
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.w(MinecraftServer.java:984) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 227
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.DedicatedServer.w(DedicatedServer.java:411) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 228
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.v(MinecraftServer.java:819) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 229
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.run(MinecraftServer.java:717) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 230
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 231
                                )

                            [34] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.util.zip.ZipException: incorrect data check
                                    [number:protected] => 232
                                )

                            [35] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.zip.InflaterInputStream.read(InflaterInputStream.java:164) ~[?:1.8.0_144]
                                    [number:protected] => 233
                                )

                            [36] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.BufferedInputStream.fill(BufferedInputStream.java:246) ~[?:1.8.0_144]
                                    [number:protected] => 234
                                )

                            [37] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.BufferedInputStream.read1(BufferedInputStream.java:286) ~[?:1.8.0_144]
                                    [number:protected] => 235
                                )

                            [38] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.BufferedInputStream.read(BufferedInputStream.java:345) ~[?:1.8.0_144]
                                    [number:protected] => 236
                                )

                            [39] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.DataInputStream.readFully(DataInputStream.java:195) ~[?:1.8.0_144]
                                    [number:protected] => 237
                                )

                            [40] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.DataInputStream.readFully(DataInputStream.java:169) ~[?:1.8.0_144]
                                    [number:protected] => 238
                                )

                            [41] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagByteArray.load(NBTTagByteArray.java:48) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 239
                                )

                            [42] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 240
                                )

                            [43] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ... 31 more
                                    [number:protected] => 241
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:53:19] [Server thread/ERROR]:
                )

            [198] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:53:20] [Server thread/INFO]: Player[/**.**.**.**:12345] logged in with entity id 23423 at ([world]-3434.9219973876916, 34.0, -345346.9902068545332)
                                    [number:protected] => 242
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:53:20] [Server thread/INFO]:
                )

            [199] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:53:20] [Server thread/ERROR]: Couldn\'t load chunk
                                    [number:protected] => 243
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.minecraft.server.v1_13_R1.ReportedException: Loading NBT data
                                    [number:protected] => 244
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:443) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 245
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 246
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagList.load(SourceFile:69) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 247
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 248
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 249
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 250
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 251
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:84) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 252
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 253
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:43) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 254
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.RegionFileCache.read(RegionFileCache.java:89) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 255
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 256
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 257
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.loadChunk(ChunkRegionLoader.java:144) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 258
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:129) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 259
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.loadChunkAt(ChunkProviderServer.java:86) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 260
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.getOrLoadChunkAt(ChunkProviderServer.java:109) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 261
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:120) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 262
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerChunk.a(PlayerChunk.java:85) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 263
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerChunkMap.flush(PlayerChunkMap.java:143) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 264
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.WorldServer.doTick(WorldServer.java:309) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 265
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.w(MinecraftServer.java:940) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 266
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.DedicatedServer.w(DedicatedServer.java:411) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 267
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.v(MinecraftServer.java:819) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 268
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.run(MinecraftServer.java:717) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 269
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 270
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.util.zip.ZipException: incorrect data check
                                    [number:protected] => 271
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.zip.InflaterInputStream.read(InflaterInputStream.java:164) ~[?:1.8.0_144]
                                    [number:protected] => 272
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.BufferedInputStream.fill(BufferedInputStream.java:246) ~[?:1.8.0_144]
                                    [number:protected] => 273
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.BufferedInputStream.read1(BufferedInputStream.java:286) ~[?:1.8.0_144]
                                    [number:protected] => 274
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.BufferedInputStream.read(BufferedInputStream.java:345) ~[?:1.8.0_144]
                                    [number:protected] => 275
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.DataInputStream.readFully(DataInputStream.java:195) ~[?:1.8.0_144]
                                    [number:protected] => 276
                                )

                            [34] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.DataInputStream.readFully(DataInputStream.java:169) ~[?:1.8.0_144]
                                    [number:protected] => 277
                                )

                            [35] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagByteArray.load(NBTTagByteArray.java:48) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 278
                                )

                            [36] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 279
                                )

                            [37] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ... 25 more
                                    [number:protected] => 280
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:53:20] [Server thread/ERROR]:
                )

            [200] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:53:20] [Server thread/ERROR]: Encountered an unexpected exception
                                    [number:protected] => 281
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => net.minecraft.server.v1_13_R1.ReportedException: Exception generating new chunk
                                    [number:protected] => 282
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.w(MinecraftServer.java:951) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 283
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.DedicatedServer.w(DedicatedServer.java:411) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 284
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.v(MinecraftServer.java:819) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 285
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.run(MinecraftServer.java:717) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 286
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 287
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.util.concurrent.ExecutionException: net.minecraft.server.v1_13_R1.ReportedException: Loading NBT data
                                    [number:protected] => 288
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.CompletableFuture.reportGet(CompletableFuture.java:357) ~[?:1.8.0_144]
                                    [number:protected] => 289
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.CompletableFuture.get(CompletableFuture.java:1895) ~[?:1.8.0_144]
                                    [number:protected] => 290
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:127) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 291
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerChunk.a(PlayerChunk.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 292
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerChunkMap.flush(PlayerChunkMap.java:143) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 293
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.WorldServer.doTick(WorldServer.java:309) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 294
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.w(MinecraftServer.java:940) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 295
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ... 4 more
                                    [number:protected] => 296
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: net.minecraft.server.v1_13_R1.ReportedException: Loading NBT data
                                    [number:protected] => 297
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:443) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 298
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 299
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagList.load(SourceFile:69) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 300
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 301
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 302
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 303
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 304
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:84) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 305
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 306
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:43) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 307
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.RegionFileCache.read(RegionFileCache.java:89) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 308
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 309
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 310
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.b(ChunkRegionLoader.java:166) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 311
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:68) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 312
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.lambda$2(ChunkTaskScheduler.java:50) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 313
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.Map.computeIfAbsent(Map.java:957) ~[?:1.8.0_144]
                                    [number:protected] => 314
                                )

                            [34] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:49) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 315
                                )

                            [35] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:1) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 316
                                )

                            [36] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.Scheduler.a(SourceFile:60) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 317
                                )

                            [37] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.CompletableFuture$AsyncSupply.run(CompletableFuture.java:1590) ~[?:1.8.0_144]
                                    [number:protected] => 318
                                )

                            [38] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.util.concurrent.MoreExecutors$DirectExecutorService.execute(MoreExecutors.java:260) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 319
                                )

                            [39] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.CompletableFuture.asyncSupplyStage(CompletableFuture.java:1604) ~[?:1.8.0_144]
                                    [number:protected] => 320
                                )

                            [40] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.CompletableFuture.supplyAsync(CompletableFuture.java:1830) ~[?:1.8.0_144]
                                    [number:protected] => 321
                                )

                            [41] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.Scheduler.b(SourceFile:61) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 322
                                )

                            [42] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.SchedulerBatch.a(SourceFile:39) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 323
                                )

                            [43] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.generateChunk(ChunkProviderServer.java:176) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 324
                                )

                            [44] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.generateChunk(ChunkProviderServer.java:166) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 325
                                )

                            [45] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:127) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 326
                                )

                            [46] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerChunk.a(PlayerChunk.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 327
                                )

                            [47] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerChunkMap.flush(PlayerChunkMap.java:143) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 328
                                )

                            [48] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.WorldServer.doTick(WorldServer.java:309) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 329
                                )

                            [49] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.w(MinecraftServer.java:940) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 330
                                )

                            [50] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ... 4 more
                                    [number:protected] => 331
                                )

                            [51] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.util.zip.ZipException: incorrect data check
                                    [number:protected] => 332
                                )

                            [52] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.zip.InflaterInputStream.read(InflaterInputStream.java:164) ~[?:1.8.0_144]
                                    [number:protected] => 333
                                )

                            [53] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.BufferedInputStream.fill(BufferedInputStream.java:246) ~[?:1.8.0_144]
                                    [number:protected] => 334
                                )

                            [54] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.BufferedInputStream.read1(BufferedInputStream.java:286) ~[?:1.8.0_144]
                                    [number:protected] => 335
                                )

                            [55] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.BufferedInputStream.read(BufferedInputStream.java:345) ~[?:1.8.0_144]
                                    [number:protected] => 336
                                )

                            [56] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.DataInputStream.readFully(DataInputStream.java:195) ~[?:1.8.0_144]
                                    [number:protected] => 337
                                )

                            [57] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.DataInputStream.readFully(DataInputStream.java:169) ~[?:1.8.0_144]
                                    [number:protected] => 338
                                )

                            [58] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagByteArray.load(NBTTagByteArray.java:48) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 339
                                )

                            [59] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 340
                                )

                            [60] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 341
                                )

                            [61] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagList.load(SourceFile:69) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 342
                                )

                            [62] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 343
                                )

                            [63] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 344
                                )

                            [64] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 345
                                )

                            [65] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 346
                                )

                            [66] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:84) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 347
                                )

                            [67] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 348
                                )

                            [68] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:43) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 349
                                )

                            [69] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.RegionFileCache.read(RegionFileCache.java:89) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 350
                                )

                            [70] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 351
                                )

                            [71] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 352
                                )

                            [72] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.b(ChunkRegionLoader.java:166) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 353
                                )

                            [73] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:68) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 354
                                )

                            [74] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.lambda$2(ChunkTaskScheduler.java:50) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 355
                                )

                            [75] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.Map.computeIfAbsent(Map.java:957) ~[?:1.8.0_144]
                                    [number:protected] => 356
                                )

                            [76] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:49) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 357
                                )

                            [77] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:1) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 358
                                )

                            [78] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.Scheduler.a(SourceFile:60) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 359
                                )

                            [79] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.CompletableFuture$AsyncSupply.run(CompletableFuture.java:1590) ~[?:1.8.0_144]
                                    [number:protected] => 360
                                )

                            [80] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.util.concurrent.MoreExecutors$DirectExecutorService.execute(MoreExecutors.java:260) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 361
                                )

                            [81] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.CompletableFuture.asyncSupplyStage(CompletableFuture.java:1604) ~[?:1.8.0_144]
                                    [number:protected] => 362
                                )

                            [82] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.CompletableFuture.supplyAsync(CompletableFuture.java:1830) ~[?:1.8.0_144]
                                    [number:protected] => 363
                                )

                            [83] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.Scheduler.b(SourceFile:61) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 364
                                )

                            [84] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.SchedulerBatch.a(SourceFile:39) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 365
                                )

                            [85] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.generateChunk(ChunkProviderServer.java:176) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 366
                                )

                            [86] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.generateChunk(ChunkProviderServer.java:166) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 367
                                )

                            [87] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:127) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 368
                                )

                            [88] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerChunk.a(PlayerChunk.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 369
                                )

                            [89] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerChunkMap.flush(PlayerChunkMap.java:143) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 370
                                )

                            [90] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.WorldServer.doTick(WorldServer.java:309) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 371
                                )

                            [91] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.w(MinecraftServer.java:940) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 372
                                )

                            [92] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ... 4 more
                                    [number:protected] => 373
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:53:20] [Server thread/ERROR]:
                )

            [201] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:53:20] [Server thread/ERROR]: Cause of unexpected exception was
                                    [number:protected] => 374
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.util.concurrent.ExecutionException: net.minecraft.server.v1_13_R1.ReportedException: Loading NBT data
                                    [number:protected] => 375
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.CompletableFuture.reportGet(CompletableFuture.java:357) ~[?:1.8.0_144]
                                    [number:protected] => 376
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.CompletableFuture.get(CompletableFuture.java:1895) ~[?:1.8.0_144]
                                    [number:protected] => 377
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:127) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 378
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerChunk.a(PlayerChunk.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 379
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.PlayerChunkMap.flush(PlayerChunkMap.java:143) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 380
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.WorldServer.doTick(WorldServer.java:309) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 381
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.w(MinecraftServer.java:940) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 382
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.DedicatedServer.w(DedicatedServer.java:411) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 383
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.v(MinecraftServer.java:819) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 384
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.run(MinecraftServer.java:717) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 385
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 386
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: net.minecraft.server.v1_13_R1.ReportedException: Loading NBT data
                                    [number:protected] => 387
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:443) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 388
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 389
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagList.load(SourceFile:69) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 390
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 391
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 392
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 393
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 394
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:84) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 395
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 396
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:43) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 397
                                )

                            [24] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.RegionFileCache.read(RegionFileCache.java:89) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 398
                                )

                            [25] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 399
                                )

                            [26] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 400
                                )

                            [27] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.b(ChunkRegionLoader.java:166) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 401
                                )

                            [28] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:68) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 402
                                )

                            [29] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.lambda$2(ChunkTaskScheduler.java:50) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 403
                                )

                            [30] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.Map.computeIfAbsent(Map.java:957) ~[?:1.8.0_144]
                                    [number:protected] => 404
                                )

                            [31] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:49) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 405
                                )

                            [32] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:1) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 406
                                )

                            [33] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.Scheduler.a(SourceFile:60) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 407
                                )

                            [34] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.CompletableFuture$AsyncSupply.run(CompletableFuture.java:1590) ~[?:1.8.0_144]
                                    [number:protected] => 408
                                )

                            [35] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.util.concurrent.MoreExecutors$DirectExecutorService.execute(MoreExecutors.java:260) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 409
                                )

                            [36] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.CompletableFuture.asyncSupplyStage(CompletableFuture.java:1604) ~[?:1.8.0_144]
                                    [number:protected] => 410
                                )

                            [37] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.CompletableFuture.supplyAsync(CompletableFuture.java:1830) ~[?:1.8.0_144]
                                    [number:protected] => 411
                                )

                            [38] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.Scheduler.b(SourceFile:61) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 412
                                )

                            [39] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.SchedulerBatch.a(SourceFile:39) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 413
                                )

                            [40] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.generateChunk(ChunkProviderServer.java:176) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 414
                                )

                            [41] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.generateChunk(ChunkProviderServer.java:166) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 415
                                )

                            [42] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ... 9 more
                                    [number:protected] => 416
                                )

                            [43] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => Caused by: java.util.zip.ZipException: incorrect data check
                                    [number:protected] => 417
                                )

                            [44] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.zip.InflaterInputStream.read(InflaterInputStream.java:164) ~[?:1.8.0_144]
                                    [number:protected] => 418
                                )

                            [45] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.BufferedInputStream.fill(BufferedInputStream.java:246) ~[?:1.8.0_144]
                                    [number:protected] => 419
                                )

                            [46] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.BufferedInputStream.read1(BufferedInputStream.java:286) ~[?:1.8.0_144]
                                    [number:protected] => 420
                                )

                            [47] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.BufferedInputStream.read(BufferedInputStream.java:345) ~[?:1.8.0_144]
                                    [number:protected] => 421
                                )

                            [48] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.DataInputStream.readFully(DataInputStream.java:195) ~[?:1.8.0_144]
                                    [number:protected] => 422
                                )

                            [49] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.io.DataInputStream.readFully(DataInputStream.java:169) ~[?:1.8.0_144]
                                    [number:protected] => 423
                                )

                            [50] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagByteArray.load(NBTTagByteArray.java:48) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 424
                                )

                            [51] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 425
                                )

                            [52] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 426
                                )

                            [53] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagList.load(SourceFile:69) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 427
                                )

                            [54] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 428
                                )

                            [55] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 429
                                )

                            [56] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 430
                                )

                            [57] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 431
                                )

                            [58] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:84) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 432
                                )

                            [59] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 433
                                )

                            [60] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:43) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 434
                                )

                            [61] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.RegionFileCache.read(RegionFileCache.java:89) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 435
                                )

                            [62] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 436
                                )

                            [63] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 437
                                )

                            [64] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.b(ChunkRegionLoader.java:166) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 438
                                )

                            [65] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:68) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 439
                                )

                            [66] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.lambda$2(ChunkTaskScheduler.java:50) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 440
                                )

                            [67] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.Map.computeIfAbsent(Map.java:957) ~[?:1.8.0_144]
                                    [number:protected] => 441
                                )

                            [68] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:49) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 442
                                )

                            [69] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:1) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 443
                                )

                            [70] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.Scheduler.a(SourceFile:60) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 444
                                )

                            [71] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.CompletableFuture$AsyncSupply.run(CompletableFuture.java:1590) ~[?:1.8.0_144]
                                    [number:protected] => 445
                                )

                            [72] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.google.common.util.concurrent.MoreExecutors$DirectExecutorService.execute(MoreExecutors.java:260) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 446
                                )

                            [73] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.CompletableFuture.asyncSupplyStage(CompletableFuture.java:1604) ~[?:1.8.0_144]
                                    [number:protected] => 447
                                )

                            [74] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.util.concurrent.CompletableFuture.supplyAsync(CompletableFuture.java:1830) ~[?:1.8.0_144]
                                    [number:protected] => 448
                                )

                            [75] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.Scheduler.b(SourceFile:61) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 449
                                )

                            [76] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.SchedulerBatch.a(SourceFile:39) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 450
                                )

                            [77] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.generateChunk(ChunkProviderServer.java:176) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 451
                                )

                            [78] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.generateChunk(ChunkProviderServer.java:166) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                    [number:protected] => 452
                                )

                            [79] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => ... 9 more
                                    [number:protected] => 453
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:53:20] [Server thread/ERROR]:
                )

            [202] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:53:20] [Server thread/ERROR]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2019-03-01_15.53.20-server.txt
                                    [number:protected] => 454
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:53:20] [Server thread/ERROR]:
                )

            [203] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:53:20] [Server thread/INFO]: Stopping server
                                    [number:protected] => 455
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:53:20] [Server thread/INFO]:
                )

            [204] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:53:20] [Server thread/INFO]: [NoTrashPl] Disabling NoTrashPl v2.6
                                    [number:protected] => 456
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:53:20] [Server thread/INFO]:
                )

            [205] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:53:20] [Server thread/INFO]: [NoTrashPl] is now deactivated!
                                    [number:protected] => 457
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:53:20] [Server thread/INFO]:
                )

            [206] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:53:20] [Server thread/INFO]: [MySkin] Disabling MySkin v2.2
                                    [number:protected] => 458
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:53:20] [Server thread/INFO]:
                )

            [207] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:53:20] [Server thread/INFO]: Saving players
                                    [number:protected] => 459
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:53:20] [Server thread/INFO]:
                )

            [208] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:53:20] [Server thread/INFO]: Saving worlds
                                    [number:protected] => 460
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:53:20] [Server thread/INFO]:
                )

            [209] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:53:20] [Server thread/INFO]: Saving chunks for level \'world\'/overworld
                                    [number:protected] => 461
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:53:20] [Server thread/INFO]:
                )

            [210] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:53:22] [Server thread/INFO]: Saving chunks for level \'world_nether\'/the_nether
                                    [number:protected] => 462
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:53:22] [Server thread/INFO]:
                )

            [211] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:53:22] [Server thread/INFO]: Saving chunks for level \'world_the_end\'/the_end
                                    [number:protected] => 463
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 
                                    [number:protected] => 464
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:53:22] [Server thread/INFO]:
                )

        )

    [iterator:protected] => 212
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [15:36:37] [main/WARN]: Ambiguity between arguments [teleport, destination] and [teleport, targets] with inputs: [Player, 0123, @e, dd12be42-52a9-4a91-a8a1-11c01849e498]
[15:36:37] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[15:36:37] [main/WARN]: Ambiguity between arguments [teleport, location] and [teleport, targets] with inputs: [0.1 -0.5 .9, 0 0 0]
[15:36:37] [main/WARN]: Ambiguity between arguments [teleport, targets] and [teleport, destination] with inputs: [Player, 0123, dd12be42-52a9-4a91-a8a1-11c01849e498]
[15:36:37] [main/WARN]: Ambiguity between arguments [teleport, targets, location] and [teleport, targets, destination] with inputs: [0.1 -0.5 .9, 0 0 0]
[15:36:37] [main/INFO]: Loaded 0 recipes
[15:36:38] [Server thread/INFO]: Starting minecraft server version 1.13
[15:36:38] [Server thread/INFO]: Loading properties
[15:36:38] [Server thread/INFO]: Default game type: SURVIVAL
[15:36:41] [Server thread/INFO]: This server is running CraftBukkit version git-Spigot-fe3ab0d-3418f8d (MC: 1.13) (Implementing API version 1.13-R0.1-SNAPSHOT)
[15:36:42] [Server thread/INFO]: Server Ping Player Sample Count: 12
[15:36:42] [Server thread/INFO]: Using 4 threads for Netty based IO
[15:36:42] [Server thread/INFO]: Debug logging is disabled
[15:36:42] [Server thread/INFO]: Generating keypair
[15:36:43] [Server thread/INFO]: Starting Minecraft server on *:10873
[15:36:43] [Server thread/INFO]: Using epoll channel type
[15:37:10] [Server thread/INFO]: Set PluginClassLoader as parallel capable
[15:37:11] [Server thread/INFO]: [MySkin] Loading MySkin v2.2
[15:37:11] [Server thread/INFO]: [NoTrashPl] Loading NoTrashPl v2.6
[15:37:11] [Server thread/WARN]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
[15:37:11] [Server thread/WARN]: The server will make no attempt to authenticate usernames. Beware.
[15:37:11] [Server thread/WARN]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
[15:37:11] [Server thread/WARN]: To change this, set "online-mode" to "true" in the server.properties file.
[15:37:11] [Server thread/INFO]: **** Beginning UUID conversion, this may take A LONG time ****
[15:37:11] [Server thread/INFO]: Preparing level "world"
[15:37:12] [Server thread/INFO]: Reloading ResourceManager: Default, bukkit
[15:37:21] [Server thread/INFO]: Loaded 524 recipes
[15:37:27] [Server thread/INFO]: -------- World Settings For [world] --------
[15:37:27] [Server thread/INFO]: Random Lighting Updates: false
[15:37:27] [Server thread/INFO]: Custom Map Seeds: Village: 10387312 Desert: 14357617 Igloo: 14357618 Jungle: 14357619 Swamp: 14357620 Monument: 10387313Ocean: 14357621 Shipwreck: 165745295 Slime: 987234911
[15:37:27] [Server thread/INFO]: Max TNT Explosions: 100
[15:37:27] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[15:37:27] [Server thread/INFO]: Cactus Growth Modifier: 100%
[15:37:27] [Server thread/INFO]: Cane Growth Modifier: 100%
[15:37:27] [Server thread/INFO]: Melon Growth Modifier: 100%
[15:37:27] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[15:37:27] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[15:37:27] [Server thread/INFO]: Sapling Growth Modifier: 100%
[15:37:27] [Server thread/INFO]: Wheat Growth Modifier: 100%
[15:37:27] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[15:37:27] [Server thread/INFO]: Vine Growth Modifier: 100%
[15:37:27] [Server thread/INFO]: Cocoa Growth Modifier: 100%
[15:37:27] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
[15:37:27] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[15:37:27] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[15:37:27] [Server thread/INFO]: Mob Spawn Range: 8
[15:37:27] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[15:37:27] [Server thread/INFO]: Item Merge Radius: 2.5
[15:37:27] [Server thread/INFO]: Item Despawn Rate: 6000
[15:37:27] [Server thread/INFO]: Arrow Despawn Rate: 1200
[15:37:27] [Server thread/INFO]: View Distance: 10
[15:37:27] [Server thread/INFO]: Experience Merge Radius: 3.0
[15:37:27] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[15:37:27] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[15:37:29] [Server thread/INFO]: -------- World Settings For [world_nether] --------
[15:37:29] [Server thread/INFO]: Random Lighting Updates: false
[15:37:29] [Server thread/INFO]: Custom Map Seeds: Village: 10387312 Desert: 14357617 Igloo: 14357618 Jungle: 14357619 Swamp: 14357620 Monument: 10387313Ocean: 14357621 Shipwreck: 165745295 Slime: 987234911
[15:37:29] [Server thread/INFO]: Max TNT Explosions: 100
[15:37:29] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[15:37:29] [Server thread/INFO]: Cactus Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: Cane Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: Melon Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: Sapling Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: Wheat Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: Vine Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: Cocoa Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
[15:37:29] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[15:37:29] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[15:37:29] [Server thread/INFO]: Mob Spawn Range: 8
[15:37:29] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[15:37:29] [Server thread/INFO]: Item Merge Radius: 2.5
[15:37:29] [Server thread/INFO]: Item Despawn Rate: 6000
[15:37:29] [Server thread/INFO]: Arrow Despawn Rate: 1200
[15:37:29] [Server thread/INFO]: View Distance: 10
[15:37:29] [Server thread/INFO]: Experience Merge Radius: 3.0
[15:37:29] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[15:37:29] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[15:37:29] [Server thread/INFO]: -------- World Settings For [world_the_end] --------
[15:37:29] [Server thread/INFO]: Random Lighting Updates: false
[15:37:29] [Server thread/INFO]: Custom Map Seeds: Village: 10387312 Desert: 14357617 Igloo: 14357618 Jungle: 14357619 Swamp: 14357620 Monument: 10387313Ocean: 14357621 Shipwreck: 165745295 Slime: 987234911
[15:37:29] [Server thread/INFO]: Max TNT Explosions: 100
[15:37:29] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[15:37:29] [Server thread/INFO]: Cactus Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: Cane Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: Melon Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: Sapling Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: Wheat Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: Vine Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: Cocoa Growth Modifier: 100%
[15:37:29] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
[15:37:29] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[15:37:29] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[15:37:29] [Server thread/INFO]: Mob Spawn Range: 8
[15:37:29] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[15:37:29] [Server thread/INFO]: Item Merge Radius: 2.5
[15:37:29] [Server thread/INFO]: Item Despawn Rate: 6000
[15:37:29] [Server thread/INFO]: Arrow Despawn Rate: 1200
[15:37:29] [Server thread/INFO]: View Distance: 10
[15:37:29] [Server thread/INFO]: Experience Merge Radius: 3.0
[15:37:29] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[15:37:29] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[15:37:30] [Server thread/INFO]: Preparing start region for level 0 (Seed: 6105420291853735988)
[15:37:32] [Server thread/INFO]: Preparing spawn area: 4%
[15:37:32] [Server thread/INFO]: Preparing spawn area: 8%
[15:37:33] [Server thread/INFO]: Preparing spawn area: 12%
[15:37:33] [Server thread/INFO]: Preparing spawn area: 16%
[15:37:34] [Server thread/INFO]: Preparing spawn area: 20%
[15:37:34] [Server thread/INFO]: Preparing spawn area: 24%
[15:37:34] [Server thread/INFO]: Preparing spawn area: 28%
[15:37:35] [Server thread/INFO]: Preparing spawn area: 32%
[15:37:35] [Server thread/INFO]: Preparing spawn area: 36%
[15:37:35] [Server thread/INFO]: Preparing spawn area: 40%
[15:37:36] [Server thread/INFO]: Preparing spawn area: 44%
[15:37:36] [Server thread/INFO]: Preparing spawn area: 48%
[15:37:37] [Server thread/INFO]: Preparing spawn area: 52%
[15:37:37] [Server thread/INFO]: Preparing spawn area: 56%
[15:37:37] [Server thread/INFO]: Preparing spawn area: 60%
[15:37:38] [Server thread/INFO]: Preparing spawn area: 64%
[15:37:40] [Server thread/INFO]: Preparing spawn area: 68%
[15:37:42] [Server thread/INFO]: Preparing spawn area: 72%
[15:37:42] [Server thread/INFO]: Preparing spawn area: 76%
[15:37:43] [Server thread/INFO]: Preparing spawn area: 80%
[15:37:43] [Server thread/INFO]: Preparing spawn area: 84%
[15:37:43] [Server thread/INFO]: Preparing spawn area: 88%
[15:37:43] [Server thread/INFO]: Preparing spawn area: 92%
[15:37:44] [Server thread/INFO]: Preparing spawn area: 96%
[15:37:44] [Server thread/INFO]: Preparing spawn area: 100%
[15:37:44] [Server thread/INFO]: Preparing start region for level 1 (Seed: -6525236373467463498)
[15:37:44] [Server thread/INFO]: Preparing spawn area: 4%
[15:37:44] [Server thread/INFO]: Preparing spawn area: 8%
[15:37:44] [Server thread/INFO]: Preparing spawn area: 12%
[15:37:44] [Server thread/INFO]: Preparing spawn area: 16%
[15:37:45] [Server thread/INFO]: Preparing spawn area: 20%
[15:37:46] [Server thread/INFO]: Preparing spawn area: 24%
[15:37:46] [Server thread/INFO]: Preparing spawn area: 28%
[15:37:46] [Server thread/INFO]: Preparing spawn area: 32%
[15:37:46] [Server thread/INFO]: Preparing spawn area: 36%
[15:37:47] [Server thread/INFO]: Preparing spawn area: 40%
[15:37:47] [Server thread/INFO]: Preparing spawn area: 44%
[15:37:47] [Server thread/INFO]: Preparing spawn area: 48%
[15:37:47] [Server thread/INFO]: Preparing spawn area: 52%
[15:37:48] [Server thread/INFO]: Preparing spawn area: 56%
[15:37:48] [Server thread/INFO]: Preparing spawn area: 60%
[15:37:48] [Server thread/INFO]: Preparing spawn area: 64%
[15:37:48] [Server thread/INFO]: Preparing spawn area: 68%
[15:37:49] [Server thread/INFO]: Preparing spawn area: 72%
[15:37:49] [Server thread/INFO]: Preparing spawn area: 76%
[15:37:49] [Server thread/INFO]: Preparing spawn area: 80%
[15:37:49] [Server thread/INFO]: Preparing spawn area: 84%
[15:37:50] [Server thread/INFO]: Preparing spawn area: 88%
[15:37:50] [Server thread/INFO]: Preparing spawn area: 92%
[15:37:50] [Server thread/INFO]: Preparing spawn area: 96%
[15:37:51] [Server thread/INFO]: Preparing spawn area: 100%
[15:37:51] [Server thread/INFO]: Preparing start region for level 2 (Seed: -6525236373467463498)
[15:37:51] [Server thread/INFO]: Preparing spawn area: 4%
[15:37:51] [Server thread/INFO]: Preparing spawn area: 8%
[15:37:51] [Server thread/INFO]: Preparing spawn area: 12%
[15:37:51] [Server thread/INFO]: Preparing spawn area: 16%
[15:37:51] [Server thread/INFO]: Preparing spawn area: 20%
[15:37:51] [Server thread/INFO]: Preparing spawn area: 24%
[15:37:51] [Server thread/INFO]: Preparing spawn area: 28%
[15:37:51] [Server thread/INFO]: Preparing spawn area: 32%
[15:37:51] [Server thread/INFO]: Preparing spawn area: 36%
[15:37:51] [Server thread/INFO]: Preparing spawn area: 40%
[15:37:51] [Server thread/INFO]: Preparing spawn area: 44%
[15:37:51] [Server thread/INFO]: Preparing spawn area: 48%
[15:37:51] [Server thread/INFO]: Preparing spawn area: 52%
[15:37:51] [Server thread/INFO]: Preparing spawn area: 56%
[15:37:52] [Server thread/INFO]: Preparing spawn area: 60%
[15:37:52] [Server thread/INFO]: Preparing spawn area: 64%
[15:37:52] [Server thread/INFO]: Preparing spawn area: 68%
[15:37:52] [Server thread/INFO]: Preparing spawn area: 72%
[15:37:52] [Server thread/INFO]: Preparing spawn area: 76%
[15:37:52] [Server thread/INFO]: Preparing spawn area: 80%
[15:37:52] [Server thread/INFO]: Preparing spawn area: 84%
[15:37:52] [Server thread/INFO]: Preparing spawn area: 88%
[15:37:52] [Server thread/INFO]: Preparing spawn area: 92%
[15:37:52] [Server thread/INFO]: Preparing spawn area: 96%
[15:37:52] [Server thread/INFO]: Preparing spawn area: 100%
[15:37:52] [Server thread/INFO]: [MySkin] Enabling MySkin v2.2
[15:37:52] [Server thread/INFO]: [MySkin] Running on server version v1_13_R1
[15:37:52] [Server thread/INFO]: [NoTrashPl] Enabling NoTrashPl v2.6
[15:37:52] [Server thread/INFO]: [NoTrashPl] is now activated!
[15:37:52] [Server thread/INFO]: [NoTrashPl] Loading current File-Content: messages.yml
[15:37:52] [Server thread/INFO]: Server permissions file permissions.yml is empty, ignoring it
[15:37:53] [Server thread/INFO]: Time elapsed: 23050 ms
[15:37:53] [Server thread/INFO]: Done (41.555s)! For help, type "help"
[15:37:53] [Server thread/INFO]: Starting GS4 status listener
[15:37:53] [Query Listener #1/INFO]: Query running on **.**.**.**:10873
[15:53:18] [User Authenticator #11/INFO]: UUID of player player is uuid
[15:53:19] [Server thread/ERROR]: Couldn\'t load chunk
net.minecraft.server.v1_13_R1.ReportedException: Loading NBT data
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:443) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagList.load(SourceFile:69) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:84) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:43) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.RegionFileCache.read(RegionFileCache.java:89) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.loadChunk(ChunkRegionLoader.java:144) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:129) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkProviderServer.loadChunkAt(ChunkProviderServer.java:86) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkProviderServer.getOrLoadChunkAt(ChunkProviderServer.java:109) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerChunk.&lt;init&gt;(PlayerChunk.java:43) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerChunkMap.c(PlayerChunkMap.java:206) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerChunkMap.addPlayer(PlayerChunkMap.java:261) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerList.a(PlayerList.java:287) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerList.onPlayerJoin(PlayerList.java:384) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerList.a(PlayerList.java:163) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.LoginListener.b(LoginListener.java:150) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.LoginListener.Y_(LoginListener.java:54) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NetworkManager.a(NetworkManager.java:231) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ServerConnection.c(ServerConnection.java:120) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.w(MinecraftServer.java:984) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.DedicatedServer.w(DedicatedServer.java:411) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.v(MinecraftServer.java:819) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.run(MinecraftServer.java:717) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
Caused by: java.util.zip.ZipException: incorrect data check
at java.util.zip.InflaterInputStream.read(InflaterInputStream.java:164) ~[?:1.8.0_144]
at java.io.BufferedInputStream.fill(BufferedInputStream.java:246) ~[?:1.8.0_144]
at java.io.BufferedInputStream.read1(BufferedInputStream.java:286) ~[?:1.8.0_144]
at java.io.BufferedInputStream.read(BufferedInputStream.java:345) ~[?:1.8.0_144]
at java.io.DataInputStream.readFully(DataInputStream.java:195) ~[?:1.8.0_144]
at java.io.DataInputStream.readFully(DataInputStream.java:169) ~[?:1.8.0_144]
at net.minecraft.server.v1_13_R1.NBTTagByteArray.load(NBTTagByteArray.java:48) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
... 31 more
[15:53:20] [Server thread/INFO]: Player[/**.**.**.**:12345] logged in with entity id 23423 at ([world]-3434.9219973876916, 34.0, -345346.9902068545332)
[15:53:20] [Server thread/ERROR]: Couldn\'t load chunk
net.minecraft.server.v1_13_R1.ReportedException: Loading NBT data
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:443) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagList.load(SourceFile:69) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:84) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:43) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.RegionFileCache.read(RegionFileCache.java:89) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.loadChunk(ChunkRegionLoader.java:144) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:129) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkProviderServer.loadChunkAt(ChunkProviderServer.java:86) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkProviderServer.getOrLoadChunkAt(ChunkProviderServer.java:109) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:120) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerChunk.a(PlayerChunk.java:85) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerChunkMap.flush(PlayerChunkMap.java:143) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.WorldServer.doTick(WorldServer.java:309) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.w(MinecraftServer.java:940) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.DedicatedServer.w(DedicatedServer.java:411) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.v(MinecraftServer.java:819) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.run(MinecraftServer.java:717) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
Caused by: java.util.zip.ZipException: incorrect data check
at java.util.zip.InflaterInputStream.read(InflaterInputStream.java:164) ~[?:1.8.0_144]
at java.io.BufferedInputStream.fill(BufferedInputStream.java:246) ~[?:1.8.0_144]
at java.io.BufferedInputStream.read1(BufferedInputStream.java:286) ~[?:1.8.0_144]
at java.io.BufferedInputStream.read(BufferedInputStream.java:345) ~[?:1.8.0_144]
at java.io.DataInputStream.readFully(DataInputStream.java:195) ~[?:1.8.0_144]
at java.io.DataInputStream.readFully(DataInputStream.java:169) ~[?:1.8.0_144]
at net.minecraft.server.v1_13_R1.NBTTagByteArray.load(NBTTagByteArray.java:48) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
... 25 more
[15:53:20] [Server thread/ERROR]: Encountered an unexpected exception
net.minecraft.server.v1_13_R1.ReportedException: Exception generating new chunk
at net.minecraft.server.v1_13_R1.MinecraftServer.w(MinecraftServer.java:951) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.DedicatedServer.w(DedicatedServer.java:411) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.v(MinecraftServer.java:819) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.run(MinecraftServer.java:717) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
Caused by: java.util.concurrent.ExecutionException: net.minecraft.server.v1_13_R1.ReportedException: Loading NBT data
at java.util.concurrent.CompletableFuture.reportGet(CompletableFuture.java:357) ~[?:1.8.0_144]
at java.util.concurrent.CompletableFuture.get(CompletableFuture.java:1895) ~[?:1.8.0_144]
at net.minecraft.server.v1_13_R1.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:127) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerChunk.a(PlayerChunk.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerChunkMap.flush(PlayerChunkMap.java:143) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.WorldServer.doTick(WorldServer.java:309) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.w(MinecraftServer.java:940) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
... 4 more
Caused by: net.minecraft.server.v1_13_R1.ReportedException: Loading NBT data
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:443) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagList.load(SourceFile:69) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:84) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:43) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.RegionFileCache.read(RegionFileCache.java:89) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.b(ChunkRegionLoader.java:166) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:68) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.lambda$2(ChunkTaskScheduler.java:50) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.util.Map.computeIfAbsent(Map.java:957) ~[?:1.8.0_144]
at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:49) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:1) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.Scheduler.a(SourceFile:60) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.util.concurrent.CompletableFuture$AsyncSupply.run(CompletableFuture.java:1590) ~[?:1.8.0_144]
at com.google.common.util.concurrent.MoreExecutors$DirectExecutorService.execute(MoreExecutors.java:260) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.util.concurrent.CompletableFuture.asyncSupplyStage(CompletableFuture.java:1604) ~[?:1.8.0_144]
at java.util.concurrent.CompletableFuture.supplyAsync(CompletableFuture.java:1830) ~[?:1.8.0_144]
at net.minecraft.server.v1_13_R1.Scheduler.b(SourceFile:61) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.SchedulerBatch.a(SourceFile:39) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkProviderServer.generateChunk(ChunkProviderServer.java:176) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkProviderServer.generateChunk(ChunkProviderServer.java:166) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:127) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerChunk.a(PlayerChunk.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerChunkMap.flush(PlayerChunkMap.java:143) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.WorldServer.doTick(WorldServer.java:309) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.w(MinecraftServer.java:940) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
... 4 more
Caused by: java.util.zip.ZipException: incorrect data check
at java.util.zip.InflaterInputStream.read(InflaterInputStream.java:164) ~[?:1.8.0_144]
at java.io.BufferedInputStream.fill(BufferedInputStream.java:246) ~[?:1.8.0_144]
at java.io.BufferedInputStream.read1(BufferedInputStream.java:286) ~[?:1.8.0_144]
at java.io.BufferedInputStream.read(BufferedInputStream.java:345) ~[?:1.8.0_144]
at java.io.DataInputStream.readFully(DataInputStream.java:195) ~[?:1.8.0_144]
at java.io.DataInputStream.readFully(DataInputStream.java:169) ~[?:1.8.0_144]
at net.minecraft.server.v1_13_R1.NBTTagByteArray.load(NBTTagByteArray.java:48) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagList.load(SourceFile:69) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:84) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:43) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.RegionFileCache.read(RegionFileCache.java:89) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.b(ChunkRegionLoader.java:166) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:68) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.lambda$2(ChunkTaskScheduler.java:50) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.util.Map.computeIfAbsent(Map.java:957) ~[?:1.8.0_144]
at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:49) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:1) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.Scheduler.a(SourceFile:60) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.util.concurrent.CompletableFuture$AsyncSupply.run(CompletableFuture.java:1590) ~[?:1.8.0_144]
at com.google.common.util.concurrent.MoreExecutors$DirectExecutorService.execute(MoreExecutors.java:260) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.util.concurrent.CompletableFuture.asyncSupplyStage(CompletableFuture.java:1604) ~[?:1.8.0_144]
at java.util.concurrent.CompletableFuture.supplyAsync(CompletableFuture.java:1830) ~[?:1.8.0_144]
at net.minecraft.server.v1_13_R1.Scheduler.b(SourceFile:61) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.SchedulerBatch.a(SourceFile:39) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkProviderServer.generateChunk(ChunkProviderServer.java:176) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkProviderServer.generateChunk(ChunkProviderServer.java:166) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:127) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerChunk.a(PlayerChunk.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerChunkMap.flush(PlayerChunkMap.java:143) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.WorldServer.doTick(WorldServer.java:309) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.w(MinecraftServer.java:940) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
... 4 more
[15:53:20] [Server thread/ERROR]: Cause of unexpected exception was
java.util.concurrent.ExecutionException: net.minecraft.server.v1_13_R1.ReportedException: Loading NBT data
at java.util.concurrent.CompletableFuture.reportGet(CompletableFuture.java:357) ~[?:1.8.0_144]
at java.util.concurrent.CompletableFuture.get(CompletableFuture.java:1895) ~[?:1.8.0_144]
at net.minecraft.server.v1_13_R1.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:127) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerChunk.a(PlayerChunk.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.PlayerChunkMap.flush(PlayerChunkMap.java:143) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.WorldServer.doTick(WorldServer.java:309) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.w(MinecraftServer.java:940) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.DedicatedServer.w(DedicatedServer.java:411) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.v(MinecraftServer.java:819) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.MinecraftServer.run(MinecraftServer.java:717) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
Caused by: net.minecraft.server.v1_13_R1.ReportedException: Loading NBT data
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:443) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagList.load(SourceFile:69) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:84) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:43) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.RegionFileCache.read(RegionFileCache.java:89) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.b(ChunkRegionLoader.java:166) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:68) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.lambda$2(ChunkTaskScheduler.java:50) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.util.Map.computeIfAbsent(Map.java:957) ~[?:1.8.0_144]
at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:49) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:1) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.Scheduler.a(SourceFile:60) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.util.concurrent.CompletableFuture$AsyncSupply.run(CompletableFuture.java:1590) ~[?:1.8.0_144]
at com.google.common.util.concurrent.MoreExecutors$DirectExecutorService.execute(MoreExecutors.java:260) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.util.concurrent.CompletableFuture.asyncSupplyStage(CompletableFuture.java:1604) ~[?:1.8.0_144]
at java.util.concurrent.CompletableFuture.supplyAsync(CompletableFuture.java:1830) ~[?:1.8.0_144]
at net.minecraft.server.v1_13_R1.Scheduler.b(SourceFile:61) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.SchedulerBatch.a(SourceFile:39) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkProviderServer.generateChunk(ChunkProviderServer.java:176) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkProviderServer.generateChunk(ChunkProviderServer.java:166) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
... 9 more
Caused by: java.util.zip.ZipException: incorrect data check
at java.util.zip.InflaterInputStream.read(InflaterInputStream.java:164) ~[?:1.8.0_144]
at java.io.BufferedInputStream.fill(BufferedInputStream.java:246) ~[?:1.8.0_144]
at java.io.BufferedInputStream.read1(BufferedInputStream.java:286) ~[?:1.8.0_144]
at java.io.BufferedInputStream.read(BufferedInputStream.java:345) ~[?:1.8.0_144]
at java.io.DataInputStream.readFully(DataInputStream.java:195) ~[?:1.8.0_144]
at java.io.DataInputStream.readFully(DataInputStream.java:169) ~[?:1.8.0_144]
at net.minecraft.server.v1_13_R1.NBTTagByteArray.load(NBTTagByteArray.java:48) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagList.load(SourceFile:69) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:84) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:43) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.RegionFileCache.read(RegionFileCache.java:89) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkRegionLoader.b(ChunkRegionLoader.java:166) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:68) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.lambda$2(ChunkTaskScheduler.java:50) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.util.Map.computeIfAbsent(Map.java:957) ~[?:1.8.0_144]
at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:49) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkTaskScheduler.a(ChunkTaskScheduler.java:1) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.Scheduler.a(SourceFile:60) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.util.concurrent.CompletableFuture$AsyncSupply.run(CompletableFuture.java:1590) ~[?:1.8.0_144]
at com.google.common.util.concurrent.MoreExecutors$DirectExecutorService.execute(MoreExecutors.java:260) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at java.util.concurrent.CompletableFuture.asyncSupplyStage(CompletableFuture.java:1604) ~[?:1.8.0_144]
at java.util.concurrent.CompletableFuture.supplyAsync(CompletableFuture.java:1830) ~[?:1.8.0_144]
at net.minecraft.server.v1_13_R1.Scheduler.b(SourceFile:61) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.SchedulerBatch.a(SourceFile:39) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkProviderServer.generateChunk(ChunkProviderServer.java:176) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
at net.minecraft.server.v1_13_R1.ChunkProviderServer.generateChunk(ChunkProviderServer.java:166) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
... 9 more
[15:53:20] [Server thread/ERROR]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2019-03-01_15.53.20-server.txt
[15:53:20] [Server thread/INFO]: Stopping server
[15:53:20] [Server thread/INFO]: [NoTrashPl] Disabling NoTrashPl v2.6
[15:53:20] [Server thread/INFO]: [NoTrashPl] is now deactivated!
[15:53:20] [Server thread/INFO]: [MySkin] Disabling MySkin v2.2
[15:53:20] [Server thread/INFO]: Saving players
[15:53:20] [Server thread/INFO]: Saving worlds
[15:53:20] [Server thread/INFO]: Saving chunks for level \'world\'/overworld
[15:53:22] [Server thread/INFO]: Saving chunks for level \'world_nether\'/the_nether
[15:53:22] [Server thread/INFO]: Saving chunks for level \'world_the_end\'/the_end

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
                                            [text:protected] => [15:36:38] [Server thread/INFO]: Starting minecraft server version 1.13
                                            [number:protected] => 7
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [15:36:38] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.13
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\ChunkLoadExceptionProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [15:53:19] [Server thread/ERROR]: Couldn\'t load chunk
                                            [number:protected] => 198
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => net.minecraft.server.v1_13_R1.ReportedException: Loading NBT data
                                            [number:protected] => 199
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:443) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 200
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 201
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagList.load(SourceFile:69) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 202
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 203
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 204
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 205
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.load(SourceFile:81) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 206
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:84) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 207
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 208
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:43) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 209
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.RegionFileCache.read(RegionFileCache.java:89) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 210
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:85) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 211
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:53) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 212
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.loadChunk(ChunkRegionLoader.java:144) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 213
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.ChunkRegionLoader.a(ChunkRegionLoader.java:129) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 214
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.loadChunkAt(ChunkProviderServer.java:86) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 215
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.ChunkProviderServer.getOrLoadChunkAt(ChunkProviderServer.java:109) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 216
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.PlayerChunk.&lt;init&gt;(PlayerChunk.java:43) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 217
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.PlayerChunkMap.c(PlayerChunkMap.java:206) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 218
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.PlayerChunkMap.addPlayer(PlayerChunkMap.java:261) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 219
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.PlayerList.a(PlayerList.java:287) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 220
                                        )

                                    [23] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.PlayerList.onPlayerJoin(PlayerList.java:384) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 221
                                        )

                                    [24] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.PlayerList.a(PlayerList.java:163) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 222
                                        )

                                    [25] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.LoginListener.b(LoginListener.java:150) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 223
                                        )

                                    [26] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.LoginListener.Y_(LoginListener.java:54) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 224
                                        )

                                    [27] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.NetworkManager.a(NetworkManager.java:231) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 225
                                        )

                                    [28] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.ServerConnection.c(ServerConnection.java:120) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 226
                                        )

                                    [29] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.w(MinecraftServer.java:984) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 227
                                        )

                                    [30] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.DedicatedServer.w(DedicatedServer.java:411) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 228
                                        )

                                    [31] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.v(MinecraftServer.java:819) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 229
                                        )

                                    [32] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.MinecraftServer.run(MinecraftServer.java:717) [minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 230
                                        )

                                    [33] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                            [number:protected] => 231
                                        )

                                    [34] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => Caused by: java.util.zip.ZipException: incorrect data check
                                            [number:protected] => 232
                                        )

                                    [35] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.util.zip.InflaterInputStream.read(InflaterInputStream.java:164) ~[?:1.8.0_144]
                                            [number:protected] => 233
                                        )

                                    [36] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.io.BufferedInputStream.fill(BufferedInputStream.java:246) ~[?:1.8.0_144]
                                            [number:protected] => 234
                                        )

                                    [37] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.io.BufferedInputStream.read1(BufferedInputStream.java:286) ~[?:1.8.0_144]
                                            [number:protected] => 235
                                        )

                                    [38] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.io.BufferedInputStream.read(BufferedInputStream.java:345) ~[?:1.8.0_144]
                                            [number:protected] => 236
                                        )

                                    [39] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.io.DataInputStream.readFully(DataInputStream.java:195) ~[?:1.8.0_144]
                                            [number:protected] => 237
                                        )

                                    [40] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.io.DataInputStream.readFully(DataInputStream.java:169) ~[?:1.8.0_144]
                                            [number:protected] => 238
                                        )

                                    [41] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagByteArray.load(NBTTagByteArray.java:48) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 239
                                        )

                                    [42] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R1.NBTTagCompound.a(SourceFile:437) ~[minecraft_server.jar:git-Spigot-fe3ab0d-3418f8d]
                                            [number:protected] => 240
                                        )

                                    [43] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => ... 31 more
                                            [number:protected] => 241
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [15:53:19] [Server thread/ERROR]:
                        )

                    [counter:protected] => 3
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

        $this->assertEquals("Minecraft version: 1.13", $analysis[0]->getMessage());

        $this->assertEquals("There was an exception while loading the world chunks.", $analysis[1]->getMessage());
        $this->assertEquals("Repair the world 'world', e.g. by using Minecraft Region Fixer or MCEdit.", $analysis[1][0]->getMessage());
        $this->assertEquals("Delete the file 'world'.", $analysis[1][1]->getMessage());
        $this->assertEquals("Remove the problematic chunk from the world, e.g. with MCEdit or by removing the region file.", $analysis[1][2]->getMessage());

    }
}