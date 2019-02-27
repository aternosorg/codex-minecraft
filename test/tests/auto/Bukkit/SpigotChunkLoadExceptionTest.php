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
                    [prefix:protected] => [15:29:52] [Server thread/INFO]:
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
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:52] [Server thread/INFO]:
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
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:52] [Server thread/INFO]:
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
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:52] [Server thread/INFO]:
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
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:53] [Server thread/INFO]:
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
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:53] [Server thread/INFO]:
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
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:53] [Server thread/INFO]:
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
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:53] [Server thread/INFO]:
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
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:53] [Server thread/INFO]:
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
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:53] [Server thread/INFO]:
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
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:54] [Server thread/INFO]:
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
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/WARN]:
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
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/WARN]:
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
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/WARN]:
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
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/WARN]:
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
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/WARN]:
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
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [140] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [141] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [142] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [143] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [144] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [145] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [146] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [147] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [148] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [149] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:55] [Server thread/INFO]:
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
                )

            [150] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:56] [Server thread/INFO]:
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
                )

            [151] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:56] [Server thread/ERROR]:
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
                )

            [152] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:56] [Server thread/ERROR]:
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
                )

            [153] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:56] [Server thread/INFO]:
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
                )

            [154] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:56] [Server thread/INFO]:
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
                )

            [155] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:56] [Server thread/INFO]:
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
                )

            [156] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:56] [Server thread/INFO]:
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
                )

            [157] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:56] [Server thread/INFO]:
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
                )

            [158] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [15:29:56] [Server thread/INFO]:
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
                    [label:protected] => Minecraft version
                    [value:protected] => 1.8.8
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [15:29:52] [Server thread/INFO]:
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
                        )

                    [counter:protected] => 1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\ChunkLoadExceptionProblem Object
                (
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => world
                                    [relativePath:protected] => 1
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [15:29:56] [Server thread/ERROR]:
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
                        )

                    [counter:protected] => 1
                )

        )

    [iterator:protected] => 1
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));
    }
}