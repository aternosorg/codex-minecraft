<?php

class SpigotPluginTaskExceptionTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/spigot-plugin-task-exception.log");
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
                                    [text:protected] => [11:22:58] [main/INFO]: Loaded 0 recipes
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:22:58] [main/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:22:59] [Server thread/INFO]: Starting minecraft server version 1.13.2
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:22:59] [Server thread/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:22:59] [Server thread/INFO]: Loading properties
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:22:59] [Server thread/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:22:59] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:22:59] [Server thread/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:00] [Server thread/INFO]: This server is running CraftBukkit version git-Spigot-b0f4c22-a2dd0e3 (MC: 1.13.2) (Implementing API version 1.13.2-R0.1-SNAPSHOT)
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:00] [Server thread/INFO]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:01] [Server thread/INFO]: Server Ping Player Sample Count: 12
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:01] [Server thread/INFO]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:01] [Server thread/INFO]: Using 4 threads for Netty based IO
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:01] [Server thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:01] [Server thread/INFO]: Debug logging is disabled
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:01] [Server thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:01] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:01] [Server thread/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:03] [Server thread/INFO]: Starting Minecraft server on *:10695
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:03] [Server thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:03] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:03] [Server thread/INFO]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:29] [Server thread/INFO]: [Essentials] Loading Essentials v2.16.0.3
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:29] [Server thread/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:29] [Server thread/INFO]: [EssentialsSpawn] Loading EssentialsSpawn v2.16.0.3
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:29] [Server thread/INFO]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:29] [Server thread/INFO]: [EssentialsGeoIP] Loading EssentialsGeoIP v2.16.0.3
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:29] [Server thread/INFO]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:29] [Server thread/INFO]: [EssentialsChat] Loading EssentialsChat v2.16.0.3
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:29] [Server thread/INFO]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:29] [Server thread/INFO]: [AuthMe] Loading AuthMe v5.5.0-SNAPSHOT-b2116
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:29] [Server thread/INFO]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:29] [Server thread/INFO]: [EssentialsXMPP] Loading EssentialsXMPP v2.16.0.3
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:29] [Server thread/INFO]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:29] [Server thread/WARN]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:29] [Server thread/WARN]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:29] [Server thread/WARN]: The server will make no attempt to authenticate usernames. Beware.
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:29] [Server thread/WARN]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:29] [Server thread/WARN]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:29] [Server thread/WARN]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:29] [Server thread/WARN]: To change this, set "online-mode" to "true" in the server.properties file.
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:29] [Server thread/WARN]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:29] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:29] [Server thread/INFO]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:30] [Server thread/INFO]: Reloading ResourceManager: Default, bukkit
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:30] [Server thread/INFO]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:33] [Server thread/INFO]: Loaded 524 recipes
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:33] [Server thread/INFO]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: -------- World Settings For [world] --------
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Mob Spawn Range: 8
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Beetroot Growth Modifier: 100%
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Carrot Growth Modifier: 100%
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Potato Growth Modifier: 100%
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Vine Growth Modifier: 100%
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Desert: 14357617 Igloo: 14357618 Jungle: 14357619 Swamp: 14357620 Monument: 10387313Ocean: 14357621 Shipwreck: 165745295 Slime: 987234911
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:35] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: -------- World Settings For [world_nether] --------
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Mob Spawn Range: 8
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Beetroot Growth Modifier: 100%
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Carrot Growth Modifier: 100%
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Potato Growth Modifier: 100%
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Vine Growth Modifier: 100%
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Desert: 14357617 Igloo: 14357618 Jungle: 14357619 Swamp: 14357620 Monument: 10387313Ocean: 14357621 Shipwreck: 165745295 Slime: 987234911
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: -------- World Settings For [world_the_end] --------
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Mob Spawn Range: 8
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Beetroot Growth Modifier: 100%
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Carrot Growth Modifier: 100%
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Potato Growth Modifier: 100%
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Vine Growth Modifier: 100%
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Desert: 14357617 Igloo: 14357618 Jungle: 14357619 Swamp: 14357620 Monument: 10387313Ocean: 14357621 Shipwreck: 165745295 Slime: 987234911
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:36] [Server thread/INFO]: Preparing start region for level minecraft:overworld (Seed: -626835324857557083)
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:37] [Server thread/INFO]: Preparing spawn area: 4%
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:37] [Server thread/INFO]:
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:37] [Server thread/INFO]: Preparing spawn area: 8%
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:37] [Server thread/INFO]:
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:38] [Server thread/INFO]: Preparing spawn area: 12%
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:38] [Server thread/INFO]:
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:38] [Server thread/INFO]: Preparing spawn area: 16%
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:38] [Server thread/INFO]:
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:38] [Server thread/INFO]: Preparing spawn area: 20%
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:38] [Server thread/INFO]:
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:39] [Server thread/INFO]: Preparing spawn area: 24%
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:39] [Server thread/INFO]:
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:39] [Server thread/INFO]: Preparing spawn area: 28%
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:39] [Server thread/INFO]:
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:40] [Server thread/INFO]: Preparing spawn area: 32%
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:40] [Server thread/INFO]:
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:40] [Server thread/INFO]: Preparing spawn area: 36%
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:40] [Server thread/INFO]:
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:40] [Server thread/INFO]: Preparing spawn area: 40%
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:40] [Server thread/INFO]:
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:41] [Server thread/INFO]: Preparing spawn area: 44%
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:41] [Server thread/INFO]:
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:42] [Server thread/INFO]: Preparing spawn area: 48%
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:42] [Server thread/INFO]:
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:43] [Server thread/INFO]: Preparing spawn area: 52%
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:43] [Server thread/INFO]:
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:44] [Server thread/INFO]: Preparing spawn area: 56%
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:44] [Server thread/INFO]:
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:44] [Server thread/INFO]: Preparing spawn area: 60%
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:44] [Server thread/INFO]:
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:44] [Server thread/INFO]: Preparing spawn area: 64%
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:44] [Server thread/INFO]:
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:44] [Server thread/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:44] [Server thread/INFO]:
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:44] [Server thread/INFO]: Preparing spawn area: 72%
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:44] [Server thread/INFO]:
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:44] [Server thread/INFO]: Preparing spawn area: 76%
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:44] [Server thread/INFO]:
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:44] [Server thread/INFO]: Preparing spawn area: 80%
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:44] [Server thread/INFO]:
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:44] [Server thread/INFO]: Preparing spawn area: 84%
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:44] [Server thread/INFO]:
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:45] [Server thread/INFO]: Preparing spawn area: 88%
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:45] [Server thread/INFO]:
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:45] [Server thread/INFO]: Preparing spawn area: 92%
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:45] [Server thread/INFO]:
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:23:45] [Server thread/INFO]: Preparing spawn area: 96%
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:23:45] [Server thread/INFO]:
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:04] [Server thread/INFO]: Preparing spawn area: 100%
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:04] [Server thread/INFO]:
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:04] [Server thread/INFO]: Preparing start region for level minecraft:the_nether (Seed: -626835324857557083)
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:04] [Server thread/INFO]:
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:13] [Server thread/INFO]: Preparing spawn area: 4%
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:13] [Server thread/INFO]:
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:14] [Server thread/INFO]: Preparing spawn area: 8%
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:14] [Server thread/INFO]:
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:15] [Server thread/INFO]: Preparing spawn area: 12%
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:15] [Server thread/INFO]:
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:16] [Server thread/INFO]: Preparing spawn area: 16%
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:16] [Server thread/INFO]:
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:18] [Server thread/INFO]: Preparing spawn area: 20%
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:18] [Server thread/INFO]:
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:19] [Server thread/INFO]: Preparing spawn area: 24%
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:19] [Server thread/INFO]:
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:20] [Server thread/INFO]: Preparing spawn area: 28%
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:20] [Server thread/INFO]:
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:21] [Server thread/INFO]: Preparing spawn area: 32%
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:21] [Server thread/INFO]:
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:21] [Server thread/INFO]: Preparing spawn area: 36%
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:21] [Server thread/INFO]:
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:22] [Server thread/INFO]: Preparing spawn area: 40%
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:22] [Server thread/INFO]:
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:22] [Server thread/INFO]: Preparing spawn area: 44%
                                    [number:protected] => 152
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:22] [Server thread/INFO]:
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:23] [Server thread/INFO]: Preparing spawn area: 48%
                                    [number:protected] => 153
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:23] [Server thread/INFO]:
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:24] [Server thread/INFO]: Preparing spawn area: 52%
                                    [number:protected] => 154
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:24] [Server thread/INFO]:
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:24] [Server thread/INFO]: Preparing spawn area: 56%
                                    [number:protected] => 155
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:24] [Server thread/INFO]:
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:25] [Server thread/INFO]: Preparing spawn area: 60%
                                    [number:protected] => 156
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:25] [Server thread/INFO]:
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:26] [Server thread/INFO]: Preparing spawn area: 64%
                                    [number:protected] => 157
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:26] [Server thread/INFO]:
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:26] [Server thread/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 158
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:26] [Server thread/INFO]:
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:27] [Server thread/INFO]: Preparing spawn area: 72%
                                    [number:protected] => 159
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:27] [Server thread/INFO]:
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:27] [Server thread/INFO]: Preparing spawn area: 76%
                                    [number:protected] => 160
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:27] [Server thread/INFO]:
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:28] [Server thread/INFO]: Preparing spawn area: 80%
                                    [number:protected] => 161
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:28] [Server thread/INFO]:
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:29] [Server thread/INFO]: Preparing spawn area: 84%
                                    [number:protected] => 162
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:29] [Server thread/INFO]:
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:31] [Server thread/INFO]: Preparing spawn area: 88%
                                    [number:protected] => 163
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:31] [Server thread/INFO]:
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:32] [Server thread/INFO]: Preparing spawn area: 92%
                                    [number:protected] => 164
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:32] [Server thread/INFO]:
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:34] [Server thread/INFO]: Preparing spawn area: 96%
                                    [number:protected] => 165
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:34] [Server thread/INFO]:
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:35] [Server thread/INFO]: Preparing spawn area: 100%
                                    [number:protected] => 166
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:35] [Server thread/INFO]:
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:35] [Server thread/INFO]: Preparing start region for level minecraft:the_end (Seed: -626835324857557083)
                                    [number:protected] => 167
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:35] [Server thread/INFO]:
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:37] [Server thread/INFO]: Preparing spawn area: 4%
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:37] [Server thread/INFO]:
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:37] [Server thread/INFO]: Preparing spawn area: 8%
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:37] [Server thread/INFO]:
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:38] [Server thread/INFO]: Preparing spawn area: 12%
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:38] [Server thread/INFO]:
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:38] [Server thread/INFO]: Preparing spawn area: 16%
                                    [number:protected] => 171
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:38] [Server thread/INFO]:
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:38] [Server thread/INFO]: Preparing spawn area: 20%
                                    [number:protected] => 172
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:38] [Server thread/INFO]:
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:38] [Server thread/INFO]: Preparing spawn area: 24%
                                    [number:protected] => 173
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:38] [Server thread/INFO]:
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:38] [Server thread/INFO]: Preparing spawn area: 28%
                                    [number:protected] => 174
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:38] [Server thread/INFO]:
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:38] [Server thread/INFO]: Preparing spawn area: 32%
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:38] [Server thread/INFO]:
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:38] [Server thread/INFO]: Preparing spawn area: 36%
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:38] [Server thread/INFO]:
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:38] [Server thread/INFO]: Preparing spawn area: 40%
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:38] [Server thread/INFO]:
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:39] [Server thread/INFO]: Preparing spawn area: 44%
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:39] [Server thread/INFO]:
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:39] [Server thread/INFO]: Preparing spawn area: 48%
                                    [number:protected] => 179
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:39] [Server thread/INFO]:
                )

            [179] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:39] [Server thread/INFO]: Preparing spawn area: 52%
                                    [number:protected] => 180
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:39] [Server thread/INFO]:
                )

            [180] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:39] [Server thread/INFO]: Preparing spawn area: 56%
                                    [number:protected] => 181
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:39] [Server thread/INFO]:
                )

            [181] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:39] [Server thread/INFO]: Preparing spawn area: 60%
                                    [number:protected] => 182
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:39] [Server thread/INFO]:
                )

            [182] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:40] [Server thread/INFO]: Preparing spawn area: 64%
                                    [number:protected] => 183
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:40] [Server thread/INFO]:
                )

            [183] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:40] [Server thread/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 184
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:40] [Server thread/INFO]:
                )

            [184] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:40] [Server thread/INFO]: Preparing spawn area: 72%
                                    [number:protected] => 185
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:40] [Server thread/INFO]:
                )

            [185] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:40] [Server thread/INFO]: Preparing spawn area: 76%
                                    [number:protected] => 186
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:40] [Server thread/INFO]:
                )

            [186] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:40] [Server thread/INFO]: Preparing spawn area: 80%
                                    [number:protected] => 187
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:40] [Server thread/INFO]:
                )

            [187] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:40] [Server thread/INFO]: Preparing spawn area: 84%
                                    [number:protected] => 188
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:40] [Server thread/INFO]:
                )

            [188] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:40] [Server thread/INFO]: Preparing spawn area: 88%
                                    [number:protected] => 189
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:40] [Server thread/INFO]:
                )

            [189] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:41] [Server thread/INFO]: Preparing spawn area: 92%
                                    [number:protected] => 190
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:41] [Server thread/INFO]:
                )

            [190] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:41] [Server thread/INFO]: Preparing spawn area: 96%
                                    [number:protected] => 191
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:41] [Server thread/INFO]:
                )

            [191] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:41] [Server thread/INFO]: Preparing spawn area: 100%
                                    [number:protected] => 192
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:41] [Server thread/INFO]:
                )

            [192] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:41] [Server thread/INFO]: Time elapsed: 64810 ms
                                    [number:protected] => 193
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:41] [Server thread/INFO]:
                )

            [193] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:41] [Server thread/INFO]: [Essentials] Enabling Essentials v2.16.0.3
                                    [number:protected] => 194
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:41] [Server thread/INFO]:
                )

            [194] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:42] [Server thread/INFO]: Attempting to convert old kits in config.yml to new kits.yml
                                    [number:protected] => 195
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:42] [Server thread/INFO]:
                )

            [195] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:42] [Server thread/INFO]: No kits found to migrate.
                                    [number:protected] => 196
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:42] [Server thread/INFO]:
                )

            [196] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:42] [Server thread/INFO]: [Essentials] Starting Essentials ban format conversion
                                    [number:protected] => 197
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:42] [Server thread/INFO]:
                )

            [197] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:42] [Server thread/INFO]: [Essentials] Found 2 files to convert...
                                    [number:protected] => 198
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:42] [Server thread/INFO]:
                )

            [198] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:42] [Server thread/INFO]: [Essentials] Converted 0/2
                                    [number:protected] => 199
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:42] [Server thread/INFO]:
                )

            [199] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:42] [Server thread/INFO]: [Essentials] Ban format update complete.
                                    [number:protected] => 200
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:42] [Server thread/INFO]:
                )

            [200] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:42] [Server thread/INFO]: [Essentials] Starting usermap repair
                                    [number:protected] => 201
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:42] [Server thread/INFO]:
                )

            [201] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:42] [Server thread/INFO]: [Essentials] Reading: 0.00%
                                    [number:protected] => 202
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:42] [Server thread/INFO]:
                )

            [202] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:42] [Server thread/INFO]: [Essentials] Completed usermap repair.
                                    [number:protected] => 203
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:42] [Server thread/INFO]:
                )

            [203] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:43] [Server thread/INFO]: [Essentials] Using 1.8.3+ BlockStateMeta provider as mob spawner provider.
                                    [number:protected] => 204
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:43] [Server thread/INFO]:
                )

            [204] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:43] [Server thread/INFO]: [Essentials] Using 1.13+ flat spawn egg provider as spawn egg provider.
                                    [number:protected] => 205
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:43] [Server thread/INFO]:
                )

            [205] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:52] [Server thread/INFO]: [Essentials] Using 1.9+ BasePotionData provider as potion meta provider.
                                    [number:protected] => 206
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:52] [Server thread/INFO]:
                )

            [206] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:53] [Server thread/INFO]: Loaded 17746 items from items.json.
                                    [number:protected] => 207
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:53] [Server thread/INFO]:
                )

            [207] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:53] [Server thread/INFO]: Using locale en_US
                                    [number:protected] => 208
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:53] [Server thread/INFO]:
                )

            [208] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:54] [Server thread/INFO]: [Essentials] Using Spigot 1.7.10+ ServerListPingEvent iterator
                                    [number:protected] => 209
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:54] [Server thread/INFO]:
                )

            [209] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:54] [Server thread/INFO]: [Essentials] Starting Metrics. Opt-out using the global bStats config.
                                    [number:protected] => 210
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:54] [Server thread/INFO]:
                )

            [210] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:54] [Server thread/INFO]: [Essentials] Using superperms-based permissions.
                                    [number:protected] => 211
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:54] [Server thread/INFO]:
                )

            [211] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:54] [Server thread/INFO]: [EssentialsSpawn] Enabling EssentialsSpawn v2.16.0.3
                                    [number:protected] => 212
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:54] [Server thread/INFO]:
                )

            [212] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:54] [Server thread/INFO]: [EssentialsGeoIP] Enabling EssentialsGeoIP v2.16.0.3
                                    [number:protected] => 213
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:54] [Server thread/INFO]:
                )

            [213] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:55] [Server thread/INFO]: [EssentialsGeoIP] This product includes GeoLite2 data created by MaxMind, available from http://www.maxmind.com/.
                                    [number:protected] => 214
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:55] [Server thread/INFO]:
                )

            [214] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:55] [Server thread/INFO]: [EssentialsChat] Enabling EssentialsChat v2.16.0.3
                                    [number:protected] => 215
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:55] [Server thread/INFO]:
                )

            [215] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:55] [Server thread/INFO]: [AuthMe] Enabling AuthMe v5.5.0-SNAPSHOT-b2116
                                    [number:protected] => 216
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:55] [Server thread/INFO]:
                )

            [216] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:57] [Server thread/INFO]: [AuthMe] SQLite Setup finished
                                    [number:protected] => 217
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:57] [Server thread/INFO]:
                )

            [217] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:57] [Server thread/INFO]: [AuthMe] No supported permissions system found! Permissions are disabled!
                                    [number:protected] => 218
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:57] [Server thread/INFO]:
                )

            [218] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:58] [Server thread/INFO]: [AuthMe] [LICENSE] This product includes GeoLite2 data created by MaxMind, available at https://www.maxmind.com
                                    [number:protected] => 219
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:58] [Server thread/INFO]:
                )

            [219] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:58] [Server thread/INFO]: [AuthMe] Hooked successfully into Essentials
                                    [number:protected] => 220
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:58] [Server thread/INFO]:
                )

            [220] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:58] [Server thread/INFO]: [AuthMe] Essentials spawn file not found: \'/aternos/server/plugins/Essentials/spawn.yml\'
                                    [number:protected] => 221
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:58] [Server thread/INFO]:
                )

            [221] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:58] [Server thread/WARN]: [AuthMe] WARNING! The protectInventory feature requires ProtocolLib! Disabling it...
                                    [number:protected] => 222
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:58] [Server thread/WARN]:
                )

            [222] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:59] [Server thread/INFO]: [AuthMe] Development builds are available on our jenkins, thanks to FastVM.io
                                    [number:protected] => 223
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:59] [Server thread/INFO]:
                )

            [223] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:59] [Server thread/INFO]: [AuthMe] Do you want a good vps for your game server? Look at our sponsor FastVM.io leader as virtual server provider!
                                    [number:protected] => 224
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:59] [Server thread/INFO]:
                )

            [224] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:59] [Server thread/INFO]: [AuthMe] AuthMe 5.5.0-SNAPSHOT build n.2116 correctly enabled!
                                    [number:protected] => 225
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:59] [Server thread/INFO]:
                )

            [225] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:59] [Server thread/INFO]: [EssentialsXMPP] Enabling EssentialsXMPP v2.16.0.3
                                    [number:protected] => 226
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:59] [Server thread/INFO]:
                )

            [226] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:59] [Server thread/WARN]: config broken for xmpp
                                    [number:protected] => 227
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:59] [Server thread/WARN]:
                )

            [227] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:24:59] [Server thread/INFO]: Server permissions file permissions.yml is empty, ignoring it
                                    [number:protected] => 228
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:24:59] [Server thread/INFO]:
                )

            [228] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:25:01] [Server thread/INFO]: Done (92.247s)! For help, type "help"
                                    [number:protected] => 229
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:25:01] [Server thread/INFO]:
                )

            [229] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:25:01] [Server thread/INFO]: Starting GS4 status listener
                                    [number:protected] => 230
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:25:01] [Server thread/INFO]:
                )

            [230] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:25:01] [Query Listener #1/INFO]: Query running on **.**.**.**:10695
                                    [number:protected] => 231
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:25:01] [Query Listener #1/INFO]:
                )

            [231] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:25:27] [Server thread/WARN]: [Essentials] Task #15 for Essentials v2.16.0.3 generated an exception
                                    [number:protected] => 232
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.NullPointerException: null
                                    [number:protected] => 233
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.earth2me.essentials.xmpp.XMPPManager.updatePresence(XMPPManager.java:148) ~[?:?]
                                    [number:protected] => 234
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.earth2me.essentials.xmpp.EssentialsXMPP.updatePresence(EssentialsXMPP.java:109) ~[?:?]
                                    [number:protected] => 235
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.earth2me.essentials.xmpp.EssentialsXMPPPlayerListener$1.run(EssentialsXMPPPlayerListener.java:31) ~[?:?]
                                    [number:protected] => 236
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_13_R2.scheduler.CraftTask.run(CraftTask.java:81) ~[minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                    [number:protected] => 237
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_13_R2.scheduler.CraftScheduler.mainThreadHeartbeat(CraftScheduler.java:392) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                    [number:protected] => 238
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.b(MinecraftServer.java:889) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                    [number:protected] => 239
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R2.DedicatedServer.b(DedicatedServer.java:417) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                    [number:protected] => 240
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:831) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                    [number:protected] => 241
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.run(MinecraftServer.java:729) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                    [number:protected] => 242
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 243
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:25:27] [Server thread/WARN]:
                )

            [232] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:27:34] [Server thread/WARN]: [Essentials] Task #26 for Essentials v2.16.0.3 generated an exception
                                    [number:protected] => 244
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.NullPointerException: null
                                    [number:protected] => 245
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.earth2me.essentials.xmpp.XMPPManager.updatePresence(XMPPManager.java:144) ~[?:?]
                                    [number:protected] => 246
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.earth2me.essentials.xmpp.EssentialsXMPP.updatePresence(EssentialsXMPP.java:109) ~[?:?]
                                    [number:protected] => 247
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.earth2me.essentials.xmpp.EssentialsXMPPPlayerListener$2.run(EssentialsXMPPPlayerListener.java:51) ~[?:?]
                                    [number:protected] => 248
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_13_R2.scheduler.CraftTask.run(CraftTask.java:81) ~[minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                    [number:protected] => 249
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_13_R2.scheduler.CraftScheduler.mainThreadHeartbeat(CraftScheduler.java:392) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                    [number:protected] => 250
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.b(MinecraftServer.java:889) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                    [number:protected] => 251
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R2.DedicatedServer.b(DedicatedServer.java:417) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                    [number:protected] => 252
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:831) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                    [number:protected] => 253
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.run(MinecraftServer.java:729) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                    [number:protected] => 254
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 255
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:27:34] [Server thread/WARN]:
                )

            [233] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:27:34] [Server thread/WARN]: handleDisconnection() called twice
                                    [number:protected] => 256
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:27:34] [Server thread/WARN]:
                )

            [234] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [11:27:49] [Server thread/WARN]: [Essentials] Task #33 for Essentials v2.16.0.3 generated an exception
                                    [number:protected] => 257
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.NullPointerException: null
                                    [number:protected] => 258
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.earth2me.essentials.xmpp.XMPPManager.updatePresence(XMPPManager.java:148) ~[?:?]
                                    [number:protected] => 259
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.earth2me.essentials.xmpp.EssentialsXMPP.updatePresence(EssentialsXMPP.java:109) ~[?:?]
                                    [number:protected] => 260
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at com.earth2me.essentials.xmpp.EssentialsXMPPPlayerListener$1.run(EssentialsXMPPPlayerListener.java:31) ~[?:?]
                                    [number:protected] => 261
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_13_R2.scheduler.CraftTask.run(CraftTask.java:81) ~[minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                    [number:protected] => 262
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_13_R2.scheduler.CraftScheduler.mainThreadHeartbeat(CraftScheduler.java:392) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                    [number:protected] => 263
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.b(MinecraftServer.java:889) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                    [number:protected] => 264
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R2.DedicatedServer.b(DedicatedServer.java:417) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                    [number:protected] => 265
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:831) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                    [number:protected] => 266
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.run(MinecraftServer.java:729) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                    [number:protected] => 267
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 268
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [11:27:49] [Server thread/WARN]:
                )

        )

    [iterator:protected] => 235
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [11:22:58] [main/INFO]: Loaded 0 recipes
[11:22:59] [Server thread/INFO]: Starting minecraft server version 1.13.2
[11:22:59] [Server thread/INFO]: Loading properties
[11:22:59] [Server thread/INFO]: Default game type: SURVIVAL
[11:23:00] [Server thread/INFO]: This server is running CraftBukkit version git-Spigot-b0f4c22-a2dd0e3 (MC: 1.13.2) (Implementing API version 1.13.2-R0.1-SNAPSHOT)
[11:23:01] [Server thread/INFO]: Server Ping Player Sample Count: 12
[11:23:01] [Server thread/INFO]: Using 4 threads for Netty based IO
[11:23:01] [Server thread/INFO]: Debug logging is disabled
[11:23:01] [Server thread/INFO]: Generating keypair
[11:23:03] [Server thread/INFO]: Starting Minecraft server on *:10695
[11:23:03] [Server thread/INFO]: Using epoll channel type
[11:23:29] [Server thread/INFO]: [Essentials] Loading Essentials v2.16.0.3
[11:23:29] [Server thread/INFO]: [EssentialsSpawn] Loading EssentialsSpawn v2.16.0.3
[11:23:29] [Server thread/INFO]: [EssentialsGeoIP] Loading EssentialsGeoIP v2.16.0.3
[11:23:29] [Server thread/INFO]: [EssentialsChat] Loading EssentialsChat v2.16.0.3
[11:23:29] [Server thread/INFO]: [AuthMe] Loading AuthMe v5.5.0-SNAPSHOT-b2116
[11:23:29] [Server thread/INFO]: [EssentialsXMPP] Loading EssentialsXMPP v2.16.0.3
[11:23:29] [Server thread/WARN]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
[11:23:29] [Server thread/WARN]: The server will make no attempt to authenticate usernames. Beware.
[11:23:29] [Server thread/WARN]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
[11:23:29] [Server thread/WARN]: To change this, set "online-mode" to "true" in the server.properties file.
[11:23:29] [Server thread/INFO]: Preparing level "world"
[11:23:30] [Server thread/INFO]: Reloading ResourceManager: Default, bukkit
[11:23:33] [Server thread/INFO]: Loaded 524 recipes
[11:23:35] [Server thread/INFO]: -------- World Settings For [world] --------
[11:23:35] [Server thread/INFO]: Experience Merge Radius: 3.0
[11:23:35] [Server thread/INFO]: Mob Spawn Range: 8
[11:23:35] [Server thread/INFO]: Cactus Growth Modifier: 100%
[11:23:35] [Server thread/INFO]: Cane Growth Modifier: 100%
[11:23:35] [Server thread/INFO]: Melon Growth Modifier: 100%
[11:23:35] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[11:23:35] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[11:23:35] [Server thread/INFO]: Sapling Growth Modifier: 100%
[11:23:35] [Server thread/INFO]: Beetroot Growth Modifier: 100%
[11:23:35] [Server thread/INFO]: Carrot Growth Modifier: 100%
[11:23:35] [Server thread/INFO]: Potato Growth Modifier: 100%
[11:23:35] [Server thread/INFO]: Wheat Growth Modifier: 100%
[11:23:35] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[11:23:35] [Server thread/INFO]: Vine Growth Modifier: 100%
[11:23:35] [Server thread/INFO]: Cocoa Growth Modifier: 100%
[11:23:35] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
[11:23:35] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[11:23:35] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[11:23:35] [Server thread/INFO]: Random Lighting Updates: false
[11:23:35] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Desert: 14357617 Igloo: 14357618 Jungle: 14357619 Swamp: 14357620 Monument: 10387313Ocean: 14357621 Shipwreck: 165745295 Slime: 987234911
[11:23:35] [Server thread/INFO]: Max TNT Explosions: 100
[11:23:35] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[11:23:35] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[11:23:35] [Server thread/INFO]: Item Despawn Rate: 6000
[11:23:35] [Server thread/INFO]: Item Merge Radius: 2.5
[11:23:35] [Server thread/INFO]: Arrow Despawn Rate: 1200
[11:23:35] [Server thread/INFO]: View Distance: 10
[11:23:35] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[11:23:35] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[11:23:36] [Server thread/INFO]: -------- World Settings For [world_nether] --------
[11:23:36] [Server thread/INFO]: Experience Merge Radius: 3.0
[11:23:36] [Server thread/INFO]: Mob Spawn Range: 8
[11:23:36] [Server thread/INFO]: Cactus Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Cane Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Melon Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Sapling Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Beetroot Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Carrot Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Potato Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Wheat Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Vine Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Cocoa Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
[11:23:36] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[11:23:36] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[11:23:36] [Server thread/INFO]: Random Lighting Updates: false
[11:23:36] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Desert: 14357617 Igloo: 14357618 Jungle: 14357619 Swamp: 14357620 Monument: 10387313Ocean: 14357621 Shipwreck: 165745295 Slime: 987234911
[11:23:36] [Server thread/INFO]: Max TNT Explosions: 100
[11:23:36] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[11:23:36] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[11:23:36] [Server thread/INFO]: Item Despawn Rate: 6000
[11:23:36] [Server thread/INFO]: Item Merge Radius: 2.5
[11:23:36] [Server thread/INFO]: Arrow Despawn Rate: 1200
[11:23:36] [Server thread/INFO]: View Distance: 10
[11:23:36] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[11:23:36] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[11:23:36] [Server thread/INFO]: -------- World Settings For [world_the_end] --------
[11:23:36] [Server thread/INFO]: Experience Merge Radius: 3.0
[11:23:36] [Server thread/INFO]: Mob Spawn Range: 8
[11:23:36] [Server thread/INFO]: Cactus Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Cane Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Melon Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Sapling Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Beetroot Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Carrot Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Potato Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Wheat Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Vine Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Cocoa Growth Modifier: 100%
[11:23:36] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
[11:23:36] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[11:23:36] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[11:23:36] [Server thread/INFO]: Random Lighting Updates: false
[11:23:36] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Desert: 14357617 Igloo: 14357618 Jungle: 14357619 Swamp: 14357620 Monument: 10387313Ocean: 14357621 Shipwreck: 165745295 Slime: 987234911
[11:23:36] [Server thread/INFO]: Max TNT Explosions: 100
[11:23:36] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[11:23:36] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[11:23:36] [Server thread/INFO]: Item Despawn Rate: 6000
[11:23:36] [Server thread/INFO]: Item Merge Radius: 2.5
[11:23:36] [Server thread/INFO]: Arrow Despawn Rate: 1200
[11:23:36] [Server thread/INFO]: View Distance: 10
[11:23:36] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[11:23:36] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[11:23:36] [Server thread/INFO]: Preparing start region for level minecraft:overworld (Seed: -626835324857557083)
[11:23:37] [Server thread/INFO]: Preparing spawn area: 4%
[11:23:37] [Server thread/INFO]: Preparing spawn area: 8%
[11:23:38] [Server thread/INFO]: Preparing spawn area: 12%
[11:23:38] [Server thread/INFO]: Preparing spawn area: 16%
[11:23:38] [Server thread/INFO]: Preparing spawn area: 20%
[11:23:39] [Server thread/INFO]: Preparing spawn area: 24%
[11:23:39] [Server thread/INFO]: Preparing spawn area: 28%
[11:23:40] [Server thread/INFO]: Preparing spawn area: 32%
[11:23:40] [Server thread/INFO]: Preparing spawn area: 36%
[11:23:40] [Server thread/INFO]: Preparing spawn area: 40%
[11:23:41] [Server thread/INFO]: Preparing spawn area: 44%
[11:23:42] [Server thread/INFO]: Preparing spawn area: 48%
[11:23:43] [Server thread/INFO]: Preparing spawn area: 52%
[11:23:44] [Server thread/INFO]: Preparing spawn area: 56%
[11:23:44] [Server thread/INFO]: Preparing spawn area: 60%
[11:23:44] [Server thread/INFO]: Preparing spawn area: 64%
[11:23:44] [Server thread/INFO]: Preparing spawn area: 68%
[11:23:44] [Server thread/INFO]: Preparing spawn area: 72%
[11:23:44] [Server thread/INFO]: Preparing spawn area: 76%
[11:23:44] [Server thread/INFO]: Preparing spawn area: 80%
[11:23:44] [Server thread/INFO]: Preparing spawn area: 84%
[11:23:45] [Server thread/INFO]: Preparing spawn area: 88%
[11:23:45] [Server thread/INFO]: Preparing spawn area: 92%
[11:23:45] [Server thread/INFO]: Preparing spawn area: 96%
[11:24:04] [Server thread/INFO]: Preparing spawn area: 100%
[11:24:04] [Server thread/INFO]: Preparing start region for level minecraft:the_nether (Seed: -626835324857557083)
[11:24:13] [Server thread/INFO]: Preparing spawn area: 4%
[11:24:14] [Server thread/INFO]: Preparing spawn area: 8%
[11:24:15] [Server thread/INFO]: Preparing spawn area: 12%
[11:24:16] [Server thread/INFO]: Preparing spawn area: 16%
[11:24:18] [Server thread/INFO]: Preparing spawn area: 20%
[11:24:19] [Server thread/INFO]: Preparing spawn area: 24%
[11:24:20] [Server thread/INFO]: Preparing spawn area: 28%
[11:24:21] [Server thread/INFO]: Preparing spawn area: 32%
[11:24:21] [Server thread/INFO]: Preparing spawn area: 36%
[11:24:22] [Server thread/INFO]: Preparing spawn area: 40%
[11:24:22] [Server thread/INFO]: Preparing spawn area: 44%
[11:24:23] [Server thread/INFO]: Preparing spawn area: 48%
[11:24:24] [Server thread/INFO]: Preparing spawn area: 52%
[11:24:24] [Server thread/INFO]: Preparing spawn area: 56%
[11:24:25] [Server thread/INFO]: Preparing spawn area: 60%
[11:24:26] [Server thread/INFO]: Preparing spawn area: 64%
[11:24:26] [Server thread/INFO]: Preparing spawn area: 68%
[11:24:27] [Server thread/INFO]: Preparing spawn area: 72%
[11:24:27] [Server thread/INFO]: Preparing spawn area: 76%
[11:24:28] [Server thread/INFO]: Preparing spawn area: 80%
[11:24:29] [Server thread/INFO]: Preparing spawn area: 84%
[11:24:31] [Server thread/INFO]: Preparing spawn area: 88%
[11:24:32] [Server thread/INFO]: Preparing spawn area: 92%
[11:24:34] [Server thread/INFO]: Preparing spawn area: 96%
[11:24:35] [Server thread/INFO]: Preparing spawn area: 100%
[11:24:35] [Server thread/INFO]: Preparing start region for level minecraft:the_end (Seed: -626835324857557083)
[11:24:37] [Server thread/INFO]: Preparing spawn area: 4%
[11:24:37] [Server thread/INFO]: Preparing spawn area: 8%
[11:24:38] [Server thread/INFO]: Preparing spawn area: 12%
[11:24:38] [Server thread/INFO]: Preparing spawn area: 16%
[11:24:38] [Server thread/INFO]: Preparing spawn area: 20%
[11:24:38] [Server thread/INFO]: Preparing spawn area: 24%
[11:24:38] [Server thread/INFO]: Preparing spawn area: 28%
[11:24:38] [Server thread/INFO]: Preparing spawn area: 32%
[11:24:38] [Server thread/INFO]: Preparing spawn area: 36%
[11:24:38] [Server thread/INFO]: Preparing spawn area: 40%
[11:24:39] [Server thread/INFO]: Preparing spawn area: 44%
[11:24:39] [Server thread/INFO]: Preparing spawn area: 48%
[11:24:39] [Server thread/INFO]: Preparing spawn area: 52%
[11:24:39] [Server thread/INFO]: Preparing spawn area: 56%
[11:24:39] [Server thread/INFO]: Preparing spawn area: 60%
[11:24:40] [Server thread/INFO]: Preparing spawn area: 64%
[11:24:40] [Server thread/INFO]: Preparing spawn area: 68%
[11:24:40] [Server thread/INFO]: Preparing spawn area: 72%
[11:24:40] [Server thread/INFO]: Preparing spawn area: 76%
[11:24:40] [Server thread/INFO]: Preparing spawn area: 80%
[11:24:40] [Server thread/INFO]: Preparing spawn area: 84%
[11:24:40] [Server thread/INFO]: Preparing spawn area: 88%
[11:24:41] [Server thread/INFO]: Preparing spawn area: 92%
[11:24:41] [Server thread/INFO]: Preparing spawn area: 96%
[11:24:41] [Server thread/INFO]: Preparing spawn area: 100%
[11:24:41] [Server thread/INFO]: Time elapsed: 64810 ms
[11:24:41] [Server thread/INFO]: [Essentials] Enabling Essentials v2.16.0.3
[11:24:42] [Server thread/INFO]: Attempting to convert old kits in config.yml to new kits.yml
[11:24:42] [Server thread/INFO]: No kits found to migrate.
[11:24:42] [Server thread/INFO]: [Essentials] Starting Essentials ban format conversion
[11:24:42] [Server thread/INFO]: [Essentials] Found 2 files to convert...
[11:24:42] [Server thread/INFO]: [Essentials] Converted 0/2
[11:24:42] [Server thread/INFO]: [Essentials] Ban format update complete.
[11:24:42] [Server thread/INFO]: [Essentials] Starting usermap repair
[11:24:42] [Server thread/INFO]: [Essentials] Reading: 0.00%
[11:24:42] [Server thread/INFO]: [Essentials] Completed usermap repair.
[11:24:43] [Server thread/INFO]: [Essentials] Using 1.8.3+ BlockStateMeta provider as mob spawner provider.
[11:24:43] [Server thread/INFO]: [Essentials] Using 1.13+ flat spawn egg provider as spawn egg provider.
[11:24:52] [Server thread/INFO]: [Essentials] Using 1.9+ BasePotionData provider as potion meta provider.
[11:24:53] [Server thread/INFO]: Loaded 17746 items from items.json.
[11:24:53] [Server thread/INFO]: Using locale en_US
[11:24:54] [Server thread/INFO]: [Essentials] Using Spigot 1.7.10+ ServerListPingEvent iterator
[11:24:54] [Server thread/INFO]: [Essentials] Starting Metrics. Opt-out using the global bStats config.
[11:24:54] [Server thread/INFO]: [Essentials] Using superperms-based permissions.
[11:24:54] [Server thread/INFO]: [EssentialsSpawn] Enabling EssentialsSpawn v2.16.0.3
[11:24:54] [Server thread/INFO]: [EssentialsGeoIP] Enabling EssentialsGeoIP v2.16.0.3
[11:24:55] [Server thread/INFO]: [EssentialsGeoIP] This product includes GeoLite2 data created by MaxMind, available from http://www.maxmind.com/.
[11:24:55] [Server thread/INFO]: [EssentialsChat] Enabling EssentialsChat v2.16.0.3
[11:24:55] [Server thread/INFO]: [AuthMe] Enabling AuthMe v5.5.0-SNAPSHOT-b2116
[11:24:57] [Server thread/INFO]: [AuthMe] SQLite Setup finished
[11:24:57] [Server thread/INFO]: [AuthMe] No supported permissions system found! Permissions are disabled!
[11:24:58] [Server thread/INFO]: [AuthMe] [LICENSE] This product includes GeoLite2 data created by MaxMind, available at https://www.maxmind.com
[11:24:58] [Server thread/INFO]: [AuthMe] Hooked successfully into Essentials
[11:24:58] [Server thread/INFO]: [AuthMe] Essentials spawn file not found: \'/aternos/server/plugins/Essentials/spawn.yml\'
[11:24:58] [Server thread/WARN]: [AuthMe] WARNING! The protectInventory feature requires ProtocolLib! Disabling it...
[11:24:59] [Server thread/INFO]: [AuthMe] Development builds are available on our jenkins, thanks to FastVM.io
[11:24:59] [Server thread/INFO]: [AuthMe] Do you want a good vps for your game server? Look at our sponsor FastVM.io leader as virtual server provider!
[11:24:59] [Server thread/INFO]: [AuthMe] AuthMe 5.5.0-SNAPSHOT build n.2116 correctly enabled!
[11:24:59] [Server thread/INFO]: [EssentialsXMPP] Enabling EssentialsXMPP v2.16.0.3
[11:24:59] [Server thread/WARN]: config broken for xmpp
[11:24:59] [Server thread/INFO]: Server permissions file permissions.yml is empty, ignoring it
[11:25:01] [Server thread/INFO]: Done (92.247s)! For help, type "help"
[11:25:01] [Server thread/INFO]: Starting GS4 status listener
[11:25:01] [Query Listener #1/INFO]: Query running on **.**.**.**:10695
[11:25:27] [Server thread/WARN]: [Essentials] Task #15 for Essentials v2.16.0.3 generated an exception
java.lang.NullPointerException: null
at com.earth2me.essentials.xmpp.XMPPManager.updatePresence(XMPPManager.java:148) ~[?:?]
at com.earth2me.essentials.xmpp.EssentialsXMPP.updatePresence(EssentialsXMPP.java:109) ~[?:?]
at com.earth2me.essentials.xmpp.EssentialsXMPPPlayerListener$1.run(EssentialsXMPPPlayerListener.java:31) ~[?:?]
at org.bukkit.craftbukkit.v1_13_R2.scheduler.CraftTask.run(CraftTask.java:81) ~[minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
at org.bukkit.craftbukkit.v1_13_R2.scheduler.CraftScheduler.mainThreadHeartbeat(CraftScheduler.java:392) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
at net.minecraft.server.v1_13_R2.MinecraftServer.b(MinecraftServer.java:889) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
at net.minecraft.server.v1_13_R2.DedicatedServer.b(DedicatedServer.java:417) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:831) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
at net.minecraft.server.v1_13_R2.MinecraftServer.run(MinecraftServer.java:729) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
[11:27:34] [Server thread/WARN]: [Essentials] Task #26 for Essentials v2.16.0.3 generated an exception
java.lang.NullPointerException: null
at com.earth2me.essentials.xmpp.XMPPManager.updatePresence(XMPPManager.java:144) ~[?:?]
at com.earth2me.essentials.xmpp.EssentialsXMPP.updatePresence(EssentialsXMPP.java:109) ~[?:?]
at com.earth2me.essentials.xmpp.EssentialsXMPPPlayerListener$2.run(EssentialsXMPPPlayerListener.java:51) ~[?:?]
at org.bukkit.craftbukkit.v1_13_R2.scheduler.CraftTask.run(CraftTask.java:81) ~[minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
at org.bukkit.craftbukkit.v1_13_R2.scheduler.CraftScheduler.mainThreadHeartbeat(CraftScheduler.java:392) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
at net.minecraft.server.v1_13_R2.MinecraftServer.b(MinecraftServer.java:889) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
at net.minecraft.server.v1_13_R2.DedicatedServer.b(DedicatedServer.java:417) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:831) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
at net.minecraft.server.v1_13_R2.MinecraftServer.run(MinecraftServer.java:729) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
[11:27:34] [Server thread/WARN]: handleDisconnection() called twice
[11:27:49] [Server thread/WARN]: [Essentials] Task #33 for Essentials v2.16.0.3 generated an exception
java.lang.NullPointerException: null
at com.earth2me.essentials.xmpp.XMPPManager.updatePresence(XMPPManager.java:148) ~[?:?]
at com.earth2me.essentials.xmpp.EssentialsXMPP.updatePresence(EssentialsXMPP.java:109) ~[?:?]
at com.earth2me.essentials.xmpp.EssentialsXMPPPlayerListener$1.run(EssentialsXMPPPlayerListener.java:31) ~[?:?]
at org.bukkit.craftbukkit.v1_13_R2.scheduler.CraftTask.run(CraftTask.java:81) ~[minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
at org.bukkit.craftbukkit.v1_13_R2.scheduler.CraftScheduler.mainThreadHeartbeat(CraftScheduler.java:392) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
at net.minecraft.server.v1_13_R2.MinecraftServer.b(MinecraftServer.java:889) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
at net.minecraft.server.v1_13_R2.DedicatedServer.b(DedicatedServer.java:417) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:831) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
at net.minecraft.server.v1_13_R2.MinecraftServer.run(MinecraftServer.java:729) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
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
                                            [text:protected] => [11:22:59] [Server thread/INFO]: Starting minecraft server version 1.13.2
                                            [number:protected] => 2
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [11:22:59] [Server thread/INFO]:
                        )

                    [counter:protected] => 1
                    [label:protected] => Minecraft version
                    [value:protected] => 1.13.2
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginRuntimeProblem Object
                (
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [11:25:27] [Server thread/WARN]: [Essentials] Task #15 for Essentials v2.16.0.3 generated an exception
                                            [number:protected] => 232
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => java.lang.NullPointerException: null
                                            [number:protected] => 233
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.earth2me.essentials.xmpp.XMPPManager.updatePresence(XMPPManager.java:148) ~[?:?]
                                            [number:protected] => 234
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.earth2me.essentials.xmpp.EssentialsXMPP.updatePresence(EssentialsXMPP.java:109) ~[?:?]
                                            [number:protected] => 235
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at com.earth2me.essentials.xmpp.EssentialsXMPPPlayerListener$1.run(EssentialsXMPPPlayerListener.java:31) ~[?:?]
                                            [number:protected] => 236
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.craftbukkit.v1_13_R2.scheduler.CraftTask.run(CraftTask.java:81) ~[minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                            [number:protected] => 237
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.craftbukkit.v1_13_R2.scheduler.CraftScheduler.mainThreadHeartbeat(CraftScheduler.java:392) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                            [number:protected] => 238
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.b(MinecraftServer.java:889) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                            [number:protected] => 239
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R2.DedicatedServer.b(DedicatedServer.java:417) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                            [number:protected] => 240
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:831) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                            [number:protected] => 241
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_13_R2.MinecraftServer.run(MinecraftServer.java:729) [minecraft_server.jar:git-Spigot-b0f4c22-a2dd0e3]
                                            [number:protected] => 242
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                            [number:protected] => 243
                                        )

                                )

                            [level:protected] => WARN
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [11:25:27] [Server thread/WARN]:
                        )

                    [counter:protected] => 3
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution Object
                                (
                                    [pluginName:protected] => Essentials
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution Object
                                (
                                    [pluginName:protected] => Essentials
                                )

                        )

                    [iterator:protected] => 0
                    [pluginName:protected] => Essentials
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.13.2", $analysis[0]->getMessage());

        $this->assertEquals("The plugin 'Essentials' has a problem while running.", $analysis[1]->getMessage());
        $this->assertEquals("Install a different version of the plugin 'Essentials'.", $analysis[1][0]->getMessage());
        $this->assertEquals("Remove the plugin 'Essentials'.", $analysis[1][1]->getMessage());

    }
}