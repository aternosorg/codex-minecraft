<?php

class SpigotChunkLoadExceptionTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/spigot-chunk-load-exception.log");
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
                                    [text:protected] => [15:29:52] [Server thread/INFO]: Starting minecraft server version 1.8.8
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:52] [Server thread/INFO]:
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:52] [Server thread/INFO]: Loading properties
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:52] [Server thread/INFO]:
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:52] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:52] [Server thread/INFO]:
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:52] [Server thread/INFO]: This server is running CraftBukkit version git-Spigot-db6de12-18fbb24 (MC: 1.8.8) (Implementing API version 1.8.8-R0.1-SNAPSHOT)
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:52] [Server thread/INFO]:
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:53] [Server thread/INFO]: Server Ping Player Sample Count: 12
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:53] [Server thread/INFO]:
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:53] [Server thread/INFO]: Using 4 threads for Netty based IO
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:53] [Server thread/INFO]:
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:53] [Server thread/INFO]: Debug logging is disabled
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:53] [Server thread/INFO]:
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:53] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:53] [Server thread/INFO]:
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:53] [Server thread/INFO]: Starting Minecraft server on *:10114
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:53] [Server thread/INFO]:
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:53] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:53] [Server thread/INFO]:
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:54] [Server thread/INFO]: Set PluginClassLoader as parallel capable
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:54] [Server thread/INFO]:
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [MotdManager] Loading MotdManager v1.41-b20
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [WorldEdit] Loading WorldEdit v6.1.7;dd00bb1
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [AdminFun] Loading AdminFun v2.5.0
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [HackReporter] Loading HackReporter v3.6.7
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [ClearChat] Loading ClearChat v1.4
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [ClearLag] Loading ClearLag v3.0.0
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [ItemFrameClicker] Loading ItemFrameClicker v1.3
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [Parties] Loading Parties v2.5.2
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [EpicRename] Loading EpicRename v3.5
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [NametagEdit] Loading NametagEdit v2.4
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [HolographicDisplays] Loading HolographicDisplays v2.3.2
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [WorldGuard] Loading WorldGuard v6.1
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [TreasureChest] Loading TreasureChest v8.4.5
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [SkinsRestorer] Loading SkinsRestorer v13.6.1
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [NoPlugins] Loading NoPlugins v6.9.1
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [Shopkeepers] Loading Shopkeepers v2.2.1
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [MaxBans] Loading MaxBans v2.7
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [Duels] Loading Duels v3.2.3
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [PermissionsEx] Loading PermissionsEx v1.23.4
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/WARN]: [PermissionsEx] This server is in offline mode. Unless this server is configured to integrate with a supported proxy (see http://dft.ba/-8ous), UUIDs *may not be stable*!
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/WARN]:
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [SignEditor] Loading SignEditor v1.3.3
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [ChatEx] Loading ChatEx v1.6
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [StaffChat] Loading StaffChat v1.6
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [SuperVanish] Loading SuperVanish v6.1.0
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [ChairStairs] Loading ChairStairs v1.1
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [MinkFreeze] Loading MinkFreeze v1.8
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [TitleManager] Loading TitleManager v2.1.3
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [ArmorStandTools] Loading ArmorStandTools v3.2.0
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [GadgetsMenu] Loading GadgetsMenu v4.3.7
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: [AuthMe] Loading AuthMe v5.4.0-b1877
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/WARN]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/WARN]:
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/WARN]: The server will make no attempt to authenticate usernames. Beware.
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/WARN]:
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/WARN]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/WARN]:
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/WARN]: To change this, set "online-mode" to "true" in the server.properties file.
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/WARN]:
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: **** Beginning UUID conversion, this may take A LONG time ****
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: -------- World Settings For [world] --------
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Anti X-Ray: true
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Engine Mode: 1
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Hidden Blocks: [14, 15, 16, 21, 48, 49, 54, 56, 73, 74, 82, 129, 130]
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Replace Blocks: [1, 5]
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Mob Spawn Range: 8
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Structure Info Saving: true
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Sending up to 10 chunks per packet
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Max Entity Collisions: 8
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Custom Map Seeds: Village: 10387312 Feature: 14357617
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Chunks to Grow per Tick: 650
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Clear tick list: false
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: -------- World Settings For [world_nether] --------
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Anti X-Ray: true
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Engine Mode: 1
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Hidden Blocks: [14, 15, 16, 21, 48, 49, 54, 56, 73, 74, 82, 129, 130]
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Replace Blocks: [1, 5]
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Mob Spawn Range: 8
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Structure Info Saving: true
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Sending up to 10 chunks per packet
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Max Entity Collisions: 8
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Custom Map Seeds: Village: 10387312 Feature: 14357617
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Chunks to Grow per Tick: 650
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Clear tick list: false
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: -------- World Settings For [world_the_end] --------
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Anti X-Ray: true
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Engine Mode: 1
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Hidden Blocks: [14, 15, 16, 21, 48, 49, 54, 56, 73, 74, 82, 129, 130]
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Replace Blocks: [1, 5]
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Mob Spawn Range: 8
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 134
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Structure Info Saving: true
                                    [number:protected] => 135
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Sending up to 10 chunks per packet
                                    [number:protected] => 136
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Max Entity Collisions: 8
                                    [number:protected] => 137
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Custom Map Seeds: Village: 10387312 Feature: 14357617
                                    [number:protected] => 138
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Chunks to Grow per Tick: 650
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Clear tick list: false
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:55] [Server thread/INFO]: Preparing start region for level 0 (Seed: -5518745152200966848)
                                    [number:protected] => 150
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:56] [Server thread/INFO]: Preparing spawn area: 13%
                                    [number:protected] => 151
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:56] [Server thread/INFO]:
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:56] [Server thread/ERROR]: Encountered an unexpected exception
                                    [number:protected] => 152
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.NullPointerException
                                    [number:protected] => 153
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.NBTTagCompound.a(SourceFile:406) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 154
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.NBTTagCompound.load(SourceFile:70) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 155
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.NBTTagCompound.a(SourceFile:406) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 156
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.NBTTagCompound.load(SourceFile:70) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 157
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.NBTTagCompound.a(SourceFile:406) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 158
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.NBTTagCompound.load(SourceFile:70) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 159
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:84) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 160
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:53) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 161
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:43) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 162
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.ChunkRegionLoader.loadChunk(ChunkRegionLoader.java:70) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 163
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOProvider.callStage1(ChunkIOProvider.java:25) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 164
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOProvider.callStage1(ChunkIOProvider.java:1) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 165
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.util.AsynchronousExecutor.skipQueue(AsynchronousExecutor.java:336) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 166
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.util.AsynchronousExecutor.getSkipQueue(AsynchronousExecutor.java:295) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 167
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOExecutor.syncChunkLoad(ChunkIOExecutor.java:16) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 168
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:115) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 169
                                )

                            [18] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:97) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 170
                                )

                            [19] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.MinecraftServer.k(MinecraftServer.java:369) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 171
                                )

                            [20] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.MinecraftServer.a(MinecraftServer.java:333) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 172
                                )

                            [21] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.DedicatedServer.init(DedicatedServer.java:263) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 173
                                )

                            [22] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at net.minecraft.server.v1_8_R3.MinecraftServer.run(MinecraftServer.java:525) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                    [number:protected] => 174
                                )

                            [23] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 175
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:56] [Server thread/ERROR]:
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:56] [Server thread/ERROR]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2019-02-27_15.29.56-server.txt
                                    [number:protected] => 176
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:56] [Server thread/ERROR]:
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:56] [Server thread/INFO]: Stopping server
                                    [number:protected] => 177
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:56] [Server thread/INFO]:
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:56] [Server thread/INFO]: Saving players
                                    [number:protected] => 178
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:56] [Server thread/INFO]:
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:56] [Server thread/INFO]: Saving worlds
                                    [number:protected] => 179
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:56] [Server thread/INFO]:
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:56] [Server thread/INFO]: Saving chunks for level \'world\'/Overworld
                                    [number:protected] => 180
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:56] [Server thread/INFO]:
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:56] [Server thread/INFO]: Saving chunks for level \'world_nether\'/Nether
                                    [number:protected] => 181
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:56] [Server thread/INFO]:
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [15:29:56] [Server thread/INFO]: Saving chunks for level \'world_the_end\'/The End
                                    [number:protected] => 182
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                    [prefix:protected] => [15:29:56] [Server thread/INFO]:
                )

        )

    [iterator:protected] => 159
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [15:29:52] [Server thread/INFO]: Starting minecraft server version 1.8.8
[15:29:52] [Server thread/INFO]: Loading properties
[15:29:52] [Server thread/INFO]: Default game type: SURVIVAL
[15:29:52] [Server thread/INFO]: This server is running CraftBukkit version git-Spigot-db6de12-18fbb24 (MC: 1.8.8) (Implementing API version 1.8.8-R0.1-SNAPSHOT)
[15:29:53] [Server thread/INFO]: Server Ping Player Sample Count: 12
[15:29:53] [Server thread/INFO]: Using 4 threads for Netty based IO
[15:29:53] [Server thread/INFO]: Debug logging is disabled
[15:29:53] [Server thread/INFO]: Generating keypair
[15:29:53] [Server thread/INFO]: Starting Minecraft server on *:10114
[15:29:53] [Server thread/INFO]: Using epoll channel type
[15:29:54] [Server thread/INFO]: Set PluginClassLoader as parallel capable
[15:29:55] [Server thread/INFO]: [MotdManager] Loading MotdManager v1.41-b20
[15:29:55] [Server thread/INFO]: [WorldEdit] Loading WorldEdit v6.1.7;dd00bb1
[15:29:55] [Server thread/INFO]: [AdminFun] Loading AdminFun v2.5.0
[15:29:55] [Server thread/INFO]: [HackReporter] Loading HackReporter v3.6.7
[15:29:55] [Server thread/INFO]: [ClearChat] Loading ClearChat v1.4
[15:29:55] [Server thread/INFO]: [ClearLag] Loading ClearLag v3.0.0
[15:29:55] [Server thread/INFO]: [ItemFrameClicker] Loading ItemFrameClicker v1.3
[15:29:55] [Server thread/INFO]: [Parties] Loading Parties v2.5.2
[15:29:55] [Server thread/INFO]: [EpicRename] Loading EpicRename v3.5
[15:29:55] [Server thread/INFO]: [NametagEdit] Loading NametagEdit v2.4
[15:29:55] [Server thread/INFO]: [HolographicDisplays] Loading HolographicDisplays v2.3.2
[15:29:55] [Server thread/INFO]: [WorldGuard] Loading WorldGuard v6.1
[15:29:55] [Server thread/INFO]: [TreasureChest] Loading TreasureChest v8.4.5
[15:29:55] [Server thread/INFO]: [SkinsRestorer] Loading SkinsRestorer v13.6.1
[15:29:55] [Server thread/INFO]: [NoPlugins] Loading NoPlugins v6.9.1
[15:29:55] [Server thread/INFO]: [Shopkeepers] Loading Shopkeepers v2.2.1
[15:29:55] [Server thread/INFO]: [MaxBans] Loading MaxBans v2.7
[15:29:55] [Server thread/INFO]: [Duels] Loading Duels v3.2.3
[15:29:55] [Server thread/INFO]: [PermissionsEx] Loading PermissionsEx v1.23.4
[15:29:55] [Server thread/WARN]: [PermissionsEx] This server is in offline mode. Unless this server is configured to integrate with a supported proxy (see http://dft.ba/-8ous), UUIDs *may not be stable*!
[15:29:55] [Server thread/INFO]: [SignEditor] Loading SignEditor v1.3.3
[15:29:55] [Server thread/INFO]: [ChatEx] Loading ChatEx v1.6
[15:29:55] [Server thread/INFO]: [StaffChat] Loading StaffChat v1.6
[15:29:55] [Server thread/INFO]: [SuperVanish] Loading SuperVanish v6.1.0
[15:29:55] [Server thread/INFO]: [ChairStairs] Loading ChairStairs v1.1
[15:29:55] [Server thread/INFO]: [MinkFreeze] Loading MinkFreeze v1.8
[15:29:55] [Server thread/INFO]: [TitleManager] Loading TitleManager v2.1.3
[15:29:55] [Server thread/INFO]: [ArmorStandTools] Loading ArmorStandTools v3.2.0
[15:29:55] [Server thread/INFO]: [GadgetsMenu] Loading GadgetsMenu v4.3.7
[15:29:55] [Server thread/INFO]: [AuthMe] Loading AuthMe v5.4.0-b1877
[15:29:55] [Server thread/WARN]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
[15:29:55] [Server thread/WARN]: The server will make no attempt to authenticate usernames. Beware.
[15:29:55] [Server thread/WARN]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
[15:29:55] [Server thread/WARN]: To change this, set "online-mode" to "true" in the server.properties file.
[15:29:55] [Server thread/INFO]: **** Beginning UUID conversion, this may take A LONG time ****
[15:29:55] [Server thread/INFO]: Preparing level "world"
[15:29:55] [Server thread/INFO]: -------- World Settings For [world] --------
[15:29:55] [Server thread/INFO]: Anti X-Ray: true
[15:29:55] [Server thread/INFO]: Engine Mode: 1
[15:29:55] [Server thread/INFO]: Hidden Blocks: [14, 15, 16, 21, 48, 49, 54, 56, 73, 74, 82, 129, 130]
[15:29:55] [Server thread/INFO]: Replace Blocks: [1, 5]
[15:29:55] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[15:29:55] [Server thread/INFO]: Cactus Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Cane Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Melon Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Sapling Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Wheat Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
[15:29:55] [Server thread/INFO]: Mob Spawn Range: 8
[15:29:55] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[15:29:55] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[15:29:55] [Server thread/INFO]: Random Lighting Updates: false
[15:29:55] [Server thread/INFO]: Structure Info Saving: true
[15:29:55] [Server thread/INFO]: Sending up to 10 chunks per packet
[15:29:55] [Server thread/INFO]: Max Entity Collisions: 8
[15:29:55] [Server thread/INFO]: Custom Map Seeds: Village: 10387312 Feature: 14357617
[15:29:55] [Server thread/INFO]: Max TNT Explosions: 100
[15:29:55] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[15:29:55] [Server thread/INFO]: Item Merge Radius: 2.5
[15:29:55] [Server thread/INFO]: Item Despawn Rate: 6000
[15:29:55] [Server thread/INFO]: Arrow Despawn Rate: 1200
[15:29:55] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[15:29:55] [Server thread/INFO]: View Distance: 10
[15:29:55] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[15:29:55] [Server thread/INFO]: Chunks to Grow per Tick: 650
[15:29:55] [Server thread/INFO]: Clear tick list: false
[15:29:55] [Server thread/INFO]: Experience Merge Radius: 3.0
[15:29:55] [Server thread/INFO]: -------- World Settings For [world_nether] --------
[15:29:55] [Server thread/INFO]: Anti X-Ray: true
[15:29:55] [Server thread/INFO]: Engine Mode: 1
[15:29:55] [Server thread/INFO]: Hidden Blocks: [14, 15, 16, 21, 48, 49, 54, 56, 73, 74, 82, 129, 130]
[15:29:55] [Server thread/INFO]: Replace Blocks: [1, 5]
[15:29:55] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[15:29:55] [Server thread/INFO]: Cactus Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Cane Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Melon Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Sapling Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Wheat Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
[15:29:55] [Server thread/INFO]: Mob Spawn Range: 8
[15:29:55] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[15:29:55] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[15:29:55] [Server thread/INFO]: Random Lighting Updates: false
[15:29:55] [Server thread/INFO]: Structure Info Saving: true
[15:29:55] [Server thread/INFO]: Sending up to 10 chunks per packet
[15:29:55] [Server thread/INFO]: Max Entity Collisions: 8
[15:29:55] [Server thread/INFO]: Custom Map Seeds: Village: 10387312 Feature: 14357617
[15:29:55] [Server thread/INFO]: Max TNT Explosions: 100
[15:29:55] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[15:29:55] [Server thread/INFO]: Item Merge Radius: 2.5
[15:29:55] [Server thread/INFO]: Item Despawn Rate: 6000
[15:29:55] [Server thread/INFO]: Arrow Despawn Rate: 1200
[15:29:55] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[15:29:55] [Server thread/INFO]: View Distance: 10
[15:29:55] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[15:29:55] [Server thread/INFO]: Chunks to Grow per Tick: 650
[15:29:55] [Server thread/INFO]: Clear tick list: false
[15:29:55] [Server thread/INFO]: Experience Merge Radius: 3.0
[15:29:55] [Server thread/INFO]: -------- World Settings For [world_the_end] --------
[15:29:55] [Server thread/INFO]: Anti X-Ray: true
[15:29:55] [Server thread/INFO]: Engine Mode: 1
[15:29:55] [Server thread/INFO]: Hidden Blocks: [14, 15, 16, 21, 48, 49, 54, 56, 73, 74, 82, 129, 130]
[15:29:55] [Server thread/INFO]: Replace Blocks: [1, 5]
[15:29:55] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[15:29:55] [Server thread/INFO]: Cactus Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Cane Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Melon Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Sapling Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Wheat Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[15:29:55] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16
[15:29:55] [Server thread/INFO]: Mob Spawn Range: 8
[15:29:55] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[15:29:55] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[15:29:55] [Server thread/INFO]: Random Lighting Updates: false
[15:29:55] [Server thread/INFO]: Structure Info Saving: true
[15:29:55] [Server thread/INFO]: Sending up to 10 chunks per packet
[15:29:55] [Server thread/INFO]: Max Entity Collisions: 8
[15:29:55] [Server thread/INFO]: Custom Map Seeds: Village: 10387312 Feature: 14357617
[15:29:55] [Server thread/INFO]: Max TNT Explosions: 100
[15:29:55] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[15:29:55] [Server thread/INFO]: Item Merge Radius: 2.5
[15:29:55] [Server thread/INFO]: Item Despawn Rate: 6000
[15:29:55] [Server thread/INFO]: Arrow Despawn Rate: 1200
[15:29:55] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[15:29:55] [Server thread/INFO]: View Distance: 10
[15:29:55] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[15:29:55] [Server thread/INFO]: Chunks to Grow per Tick: 650
[15:29:55] [Server thread/INFO]: Clear tick list: false
[15:29:55] [Server thread/INFO]: Experience Merge Radius: 3.0
[15:29:55] [Server thread/INFO]: Preparing start region for level 0 (Seed: -5518745152200966848)
[15:29:56] [Server thread/INFO]: Preparing spawn area: 13%
[15:29:56] [Server thread/ERROR]: Encountered an unexpected exception
java.lang.NullPointerException
at net.minecraft.server.v1_8_R3.NBTTagCompound.a(SourceFile:406) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.NBTTagCompound.load(SourceFile:70) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.NBTTagCompound.a(SourceFile:406) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.NBTTagCompound.load(SourceFile:70) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.NBTTagCompound.a(SourceFile:406) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.NBTTagCompound.load(SourceFile:70) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:84) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:53) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:43) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.ChunkRegionLoader.loadChunk(ChunkRegionLoader.java:70) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOProvider.callStage1(ChunkIOProvider.java:25) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOProvider.callStage1(ChunkIOProvider.java:1) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at org.bukkit.craftbukkit.v1_8_R3.util.AsynchronousExecutor.skipQueue(AsynchronousExecutor.java:336) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at org.bukkit.craftbukkit.v1_8_R3.util.AsynchronousExecutor.getSkipQueue(AsynchronousExecutor.java:295) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOExecutor.syncChunkLoad(ChunkIOExecutor.java:16) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:115) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:97) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.MinecraftServer.k(MinecraftServer.java:369) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.MinecraftServer.a(MinecraftServer.java:333) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.DedicatedServer.init(DedicatedServer.java:263) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at net.minecraft.server.v1_8_R3.MinecraftServer.run(MinecraftServer.java:525) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
[15:29:56] [Server thread/ERROR]: This crash report has been saved to: /aternos/server/./crash-reports/crash-2019-02-27_15.29.56-server.txt
[15:29:56] [Server thread/INFO]: Stopping server
[15:29:56] [Server thread/INFO]: Saving players
[15:29:56] [Server thread/INFO]: Saving worlds
[15:29:56] [Server thread/INFO]: Saving chunks for level \'world\'/Overworld
[15:29:56] [Server thread/INFO]: Saving chunks for level \'world_nether\'/Nether
[15:29:56] [Server thread/INFO]: Saving chunks for level \'world_the_end\'/The End
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
                                            [text:protected] => [15:29:52] [Server thread/INFO]: Starting minecraft server version 1.8.8
                                            [number:protected] => 1
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [15:29:52] [Server thread/INFO]:
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
                                            [text:protected] => [15:29:56] [Server thread/ERROR]: Encountered an unexpected exception
                                            [number:protected] => 152
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => java.lang.NullPointerException
                                            [number:protected] => 153
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.NBTTagCompound.a(SourceFile:406) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 154
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.NBTTagCompound.load(SourceFile:70) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 155
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.NBTTagCompound.a(SourceFile:406) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 156
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.NBTTagCompound.load(SourceFile:70) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 157
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.NBTTagCompound.a(SourceFile:406) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 158
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.NBTTagCompound.load(SourceFile:70) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 159
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:84) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 160
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:53) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 161
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.NBTCompressedStreamTools.a(NBTCompressedStreamTools.java:43) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 162
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.ChunkRegionLoader.loadChunk(ChunkRegionLoader.java:70) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 163
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOProvider.callStage1(ChunkIOProvider.java:25) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 164
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOProvider.callStage1(ChunkIOProvider.java:1) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 165
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.util.AsynchronousExecutor.skipQueue(AsynchronousExecutor.java:336) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 166
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.util.AsynchronousExecutor.getSkipQueue(AsynchronousExecutor.java:295) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 167
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at org.bukkit.craftbukkit.v1_8_R3.chunkio.ChunkIOExecutor.syncChunkLoad(ChunkIOExecutor.java:16) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 168
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:115) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 169
                                        )

                                    [18] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.ChunkProviderServer.getChunkAt(ChunkProviderServer.java:97) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 170
                                        )

                                    [19] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.MinecraftServer.k(MinecraftServer.java:369) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 171
                                        )

                                    [20] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.MinecraftServer.a(MinecraftServer.java:333) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 172
                                        )

                                    [21] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.DedicatedServer.init(DedicatedServer.java:263) ~[minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 173
                                        )

                                    [22] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at net.minecraft.server.v1_8_R3.MinecraftServer.run(MinecraftServer.java:525) [minecraft_server.jar:git-Spigot-db6de12-18fbb24]
                                            [number:protected] => 174
                                        )

                                    [23] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                            [number:protected] => 175
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                            [prefix:protected] => [15:29:56] [Server thread/ERROR]:
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