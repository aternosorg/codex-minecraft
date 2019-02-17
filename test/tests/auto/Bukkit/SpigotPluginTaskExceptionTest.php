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
                    [prefix:protected] => [11:22:58] [main/INFO]:
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
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:22:59] [Server thread/INFO]:
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
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:22:59] [Server thread/INFO]:
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
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:22:59] [Server thread/INFO]:
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
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:00] [Server thread/INFO]:
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
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:01] [Server thread/INFO]:
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
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:01] [Server thread/INFO]:
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
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:01] [Server thread/INFO]:
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
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:01] [Server thread/INFO]:
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
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:03] [Server thread/INFO]:
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
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:03] [Server thread/INFO]:
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
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:29] [Server thread/INFO]:
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
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:29] [Server thread/INFO]:
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
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:29] [Server thread/INFO]:
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
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:29] [Server thread/INFO]:
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
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:29] [Server thread/INFO]:
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
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:29] [Server thread/INFO]:
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
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:29] [Server thread/WARN]:
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
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:29] [Server thread/WARN]:
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
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:29] [Server thread/WARN]:
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
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:29] [Server thread/WARN]:
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
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:29] [Server thread/INFO]:
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
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:30] [Server thread/INFO]:
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
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:33] [Server thread/INFO]:
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
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:35] [Server thread/INFO]:
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
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:36] [Server thread/INFO]:
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
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:37] [Server thread/INFO]:
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
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:37] [Server thread/INFO]:
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
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:38] [Server thread/INFO]:
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
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:38] [Server thread/INFO]:
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
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:38] [Server thread/INFO]:
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
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:39] [Server thread/INFO]:
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
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:39] [Server thread/INFO]:
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
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:40] [Server thread/INFO]:
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
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:40] [Server thread/INFO]:
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
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:40] [Server thread/INFO]:
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
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:41] [Server thread/INFO]:
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
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:42] [Server thread/INFO]:
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
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:43] [Server thread/INFO]:
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
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:44] [Server thread/INFO]:
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
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:44] [Server thread/INFO]:
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
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:44] [Server thread/INFO]:
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
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:44] [Server thread/INFO]:
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
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:44] [Server thread/INFO]:
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
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:44] [Server thread/INFO]:
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
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:44] [Server thread/INFO]:
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
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:44] [Server thread/INFO]:
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
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:45] [Server thread/INFO]:
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
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:45] [Server thread/INFO]:
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
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:23:45] [Server thread/INFO]:
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
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:04] [Server thread/INFO]:
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
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:04] [Server thread/INFO]:
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
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:13] [Server thread/INFO]:
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
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:14] [Server thread/INFO]:
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
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:15] [Server thread/INFO]:
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
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:16] [Server thread/INFO]:
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
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:18] [Server thread/INFO]:
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
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:19] [Server thread/INFO]:
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
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:20] [Server thread/INFO]:
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
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:21] [Server thread/INFO]:
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
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:21] [Server thread/INFO]:
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
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:22] [Server thread/INFO]:
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
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:22] [Server thread/INFO]:
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
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:23] [Server thread/INFO]:
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
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:24] [Server thread/INFO]:
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
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:24] [Server thread/INFO]:
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
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:25] [Server thread/INFO]:
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
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:26] [Server thread/INFO]:
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
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:26] [Server thread/INFO]:
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
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:27] [Server thread/INFO]:
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
                )

            [159] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:27] [Server thread/INFO]:
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
                )

            [160] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:28] [Server thread/INFO]:
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
                )

            [161] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:29] [Server thread/INFO]:
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
                )

            [162] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:31] [Server thread/INFO]:
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
                )

            [163] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:32] [Server thread/INFO]:
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
                )

            [164] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:34] [Server thread/INFO]:
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
                )

            [165] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:35] [Server thread/INFO]:
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
                )

            [166] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:35] [Server thread/INFO]:
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
                )

            [167] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:37] [Server thread/INFO]:
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
                )

            [168] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:37] [Server thread/INFO]:
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
                )

            [169] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:38] [Server thread/INFO]:
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
                )

            [170] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:38] [Server thread/INFO]:
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
                )

            [171] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:38] [Server thread/INFO]:
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
                )

            [172] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:38] [Server thread/INFO]:
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
                )

            [173] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:38] [Server thread/INFO]:
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
                )

            [174] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:38] [Server thread/INFO]:
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
                )

            [175] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:38] [Server thread/INFO]:
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
                )

            [176] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:38] [Server thread/INFO]:
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
                )

            [177] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:39] [Server thread/INFO]:
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
                )

            [178] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:39] [Server thread/INFO]:
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
                )

            [179] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:39] [Server thread/INFO]:
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
                )

            [180] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:39] [Server thread/INFO]:
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
                )

            [181] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:39] [Server thread/INFO]:
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
                )

            [182] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:40] [Server thread/INFO]:
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
                )

            [183] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:40] [Server thread/INFO]:
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
                )

            [184] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:40] [Server thread/INFO]:
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
                )

            [185] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:40] [Server thread/INFO]:
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
                )

            [186] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:40] [Server thread/INFO]:
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
                )

            [187] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:40] [Server thread/INFO]:
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
                )

            [188] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:40] [Server thread/INFO]:
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
                )

            [189] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:41] [Server thread/INFO]:
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
                )

            [190] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:41] [Server thread/INFO]:
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
                )

            [191] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:41] [Server thread/INFO]:
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
                )

            [192] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:41] [Server thread/INFO]:
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
                )

            [193] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:41] [Server thread/INFO]:
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
                )

            [194] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:42] [Server thread/INFO]:
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
                )

            [195] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:42] [Server thread/INFO]:
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
                )

            [196] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:42] [Server thread/INFO]:
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
                )

            [197] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:42] [Server thread/INFO]:
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
                )

            [198] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:42] [Server thread/INFO]:
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
                )

            [199] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:42] [Server thread/INFO]:
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
                )

            [200] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:42] [Server thread/INFO]:
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
                )

            [201] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:42] [Server thread/INFO]:
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
                )

            [202] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:42] [Server thread/INFO]:
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
                )

            [203] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:43] [Server thread/INFO]:
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
                )

            [204] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:43] [Server thread/INFO]:
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
                )

            [205] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:52] [Server thread/INFO]:
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
                )

            [206] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:53] [Server thread/INFO]:
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
                )

            [207] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:53] [Server thread/INFO]:
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
                )

            [208] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:54] [Server thread/INFO]:
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
                )

            [209] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:54] [Server thread/INFO]:
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
                )

            [210] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:54] [Server thread/INFO]:
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
                )

            [211] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:54] [Server thread/INFO]:
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
                )

            [212] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:54] [Server thread/INFO]:
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
                )

            [213] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:55] [Server thread/INFO]:
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
                )

            [214] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:55] [Server thread/INFO]:
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
                )

            [215] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:55] [Server thread/INFO]:
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
                )

            [216] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:57] [Server thread/INFO]:
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
                )

            [217] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:57] [Server thread/INFO]:
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
                )

            [218] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:58] [Server thread/INFO]:
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
                )

            [219] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:58] [Server thread/INFO]:
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
                )

            [220] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:58] [Server thread/INFO]:
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
                )

            [221] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:58] [Server thread/WARN]:
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
                )

            [222] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:59] [Server thread/INFO]:
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
                )

            [223] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:59] [Server thread/INFO]:
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
                )

            [224] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:59] [Server thread/INFO]:
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
                )

            [225] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:59] [Server thread/INFO]:
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
                )

            [226] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:59] [Server thread/WARN]:
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
                )

            [227] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:24:59] [Server thread/INFO]:
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
                )

            [228] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:25:01] [Server thread/INFO]:
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
                )

            [229] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:25:01] [Server thread/INFO]:
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
                )

            [230] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:25:01] [Query Listener #1/INFO]:
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
                )

            [231] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:25:27] [Server thread/WARN]:
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
                )

            [232] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:27:34] [Server thread/WARN]:
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
                )

            [233] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:27:34] [Server thread/WARN]:
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
                )

            [234] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [11:27:49] [Server thread/WARN]:
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
            [0] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginRuntimeProblem Object
                (
                    [pluginName:protected] => Essentials
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
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [11:25:27] [Server thread/WARN]:
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
                        )

                    [counter:protected] => 3
                )

        )

    [iterator:protected] => 0
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));
    }
}