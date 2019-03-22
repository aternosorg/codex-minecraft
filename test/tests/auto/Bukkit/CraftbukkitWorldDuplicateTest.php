<?php

class CraftbukkitWorldDuplicateTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/craftbukkit-world-duplicate.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\CraftBukkitLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:46] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:46] [main/INFO]: Loaded 0 recipes
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:46] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:46] [Server thread/INFO]: Starting minecraft server version 1.13.2
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:46] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:46] [Server thread/INFO]: Loading properties
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:46] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:46] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:46] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:46] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:47] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:47] [Server thread/INFO]: Starting Minecraft server on *:10990
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:47] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:47] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:48] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:48] [Server thread/INFO]: This server is running CraftBukkit version git-Bukkit-8b1588e (MC: 1.13.2) (Implementing API version 1.13.2-R0.1-SNAPSHOT)
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/INFO]: [Itemizer] Loading Itemizer v3.4
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/INFO]: [WorldEdit] Loading WorldEdit v7.0.0-beta-05;6bbf29b
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/INFO]: [Creep] Loading Creep v4.0
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/INFO]: [SkinsRestorer] Loading SkinsRestorer v13.6.1
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/INFO]: [Punishmental] Loading Punishmental v5.1
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/INFO]: [AdminEssentials] Loading AdminEssentials v1.1.5
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/INFO]: [AdminFun] Loading AdminFun v2.5.0
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/INFO]: [SimpleRename] Loading SimpleRename v10.7.5
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/INFO]: [WurmBarbecue] Loading WurmBarbecue v2.5.1
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/INFO]: [NametagEdit] Loading NametagEdit v4.4.0
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/INFO]: [Multiverse-Core] Loading Multiverse-Core v3.0.0-SNAPSHOT-b760
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/INFO]: [WorldGuard] Loading WorldGuard v7.0.0-beta-03;e51a220
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/INFO]: [EliteMobs] Loading EliteMobs v6.7.0
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/INFO]: [ChopTree3] Loading ChopTree3 v4.0.0
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/WARN]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/WARN]: The server will make no attempt to authenticate usernames. Beware.
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/WARN]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/WARN]: To change this, set "online-mode" to "true" in the server.properties file.
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:58] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:58] [Server thread/INFO]: Reloading ResourceManager: Default, bukkit
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:14:59] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:14:59] [Server thread/INFO]: Loaded 524 recipes
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:00] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:00] [Server thread/INFO]: Preparing start region for level minecraft:overworld (Seed: 1451100598147509339)
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:01] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:01] [Server thread/INFO]: Preparing spawn area: 4%
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:02] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:02] [Server thread/INFO]: Preparing spawn area: 8%
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:02] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:02] [Server thread/INFO]: Preparing spawn area: 12%
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:02] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:02] [Server thread/INFO]: Preparing spawn area: 16%
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:03] [Server thread/INFO]: Preparing spawn area: 20%
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:03] [Server thread/INFO]: Preparing spawn area: 24%
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:03] [Server thread/INFO]: Preparing spawn area: 28%
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:03] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:03] [Server thread/INFO]: Preparing spawn area: 32%
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:04] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:04] [Server thread/INFO]: Preparing spawn area: 36%
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:04] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:04] [Server thread/INFO]: Preparing spawn area: 40%
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:04] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:04] [Server thread/INFO]: Preparing spawn area: 44%
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:04] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:04] [Server thread/INFO]: Preparing spawn area: 48%
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:04] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:04] [Server thread/INFO]: Preparing spawn area: 52%
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:04] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:04] [Server thread/INFO]: Preparing spawn area: 56%
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:05] [Server thread/INFO]: Preparing spawn area: 60%
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:05] [Server thread/INFO]: Preparing spawn area: 64%
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:05] [Server thread/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:05] [Server thread/INFO]: Preparing spawn area: 72%
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:05] [Server thread/INFO]: Preparing spawn area: 76%
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:05] [Server thread/INFO]: Preparing spawn area: 80%
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:05] [Server thread/INFO]: Preparing spawn area: 84%
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:06] [Server thread/INFO]: Preparing spawn area: 88%
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:06] [Server thread/INFO]: Preparing spawn area: 92%
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:06] [Server thread/INFO]: Preparing spawn area: 96%
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:06] [Server thread/INFO]: Preparing spawn area: 100%
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:06] [Server thread/INFO]: Preparing start region for level minecraft:the_nether (Seed: 7868728471670565575)
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:06] [Server thread/INFO]: Preparing spawn area: 4%
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:06] [Server thread/INFO]: Preparing spawn area: 8%
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:06] [Server thread/INFO]: Preparing spawn area: 12%
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:06] [Server thread/INFO]: Preparing spawn area: 16%
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:06] [Server thread/INFO]: Preparing spawn area: 20%
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:07] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:07] [Server thread/INFO]: Preparing spawn area: 24%
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:07] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:07] [Server thread/INFO]: Preparing spawn area: 28%
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:07] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:07] [Server thread/INFO]: Preparing spawn area: 32%
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:07] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:07] [Server thread/INFO]: Preparing spawn area: 36%
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:07] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:07] [Server thread/INFO]: Preparing spawn area: 40%
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:07] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:07] [Server thread/INFO]: Preparing spawn area: 44%
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:07] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:07] [Server thread/INFO]: Preparing spawn area: 48%
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:07] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:07] [Server thread/INFO]: Preparing spawn area: 52%
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:08] [Server thread/INFO]: Preparing spawn area: 56%
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:08] [Server thread/INFO]: Preparing spawn area: 60%
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:08] [Server thread/INFO]: Preparing spawn area: 64%
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:08] [Server thread/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:08] [Server thread/INFO]: Preparing spawn area: 72%
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:08] [Server thread/INFO]: Preparing spawn area: 76%
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:08] [Server thread/INFO]: Preparing spawn area: 80%
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:08] [Server thread/INFO]: Preparing spawn area: 84%
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:08] [Server thread/INFO]: Preparing spawn area: 88%
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 92%
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 96%
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 100%
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing start region for level minecraft:the_end (Seed: 1451100598147509339)
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 4%
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 8%
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 12%
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 16%
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 20%
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 24%
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 28%
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 32%
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 36%
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 40%
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 44%
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 48%
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 52%
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 56%
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 60%
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 64%
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 68%
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 72%
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 76%
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 80%
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 84%
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 88%
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 92%
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 96%
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Preparing spawn area: 100%
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: Time elapsed: 9197 ms
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:09] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:09] [Server thread/INFO]: [Itemizer] Enabling Itemizer v3.4
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:10] [Server thread/INFO]: [WorldEdit] Enabling WorldEdit v7.0.0-beta-05;6bbf29b
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:10] [Server thread/INFO]: [WorldEdit] Using com.sk89q.worldedit.bukkit.adapter.impl.Spigot_v1_13_R2_2 as the Bukkit adapter
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:12] [Server thread/INFO]: WEPIF: Using the Bukkit Permissions API.
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:12] [Server thread/INFO]: [Creep] Enabling Creep v4.0
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:12] [Server thread/INFO]: Creep version 4.0 is now enabled.
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:12] [Server thread/INFO]: [SkinsRestorer] Enabling SkinsRestorer v13.6.1
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:13] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:13] [Server thread/INFO]: [AdminFun] Enabling AdminFun v2.5.0
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:14] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:14] [Server thread/INFO]: [SimpleRename] Enabling SimpleRename v10.7.5
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:14] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:14] [Server thread/INFO]: SimpleRename enabled!
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:14] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:14] [Server thread/INFO]: [WurmBarbecue] Enabling WurmBarbecue v2.5.1
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:15] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:15] [Server thread/INFO]: [WurmBarbecue] Done checking defaults!
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:19] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:19] [Server thread/INFO]: [WurmBarbecue] Done loading cooking melting recipes!
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:19] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:19] [Server thread/INFO]: [WurmBarbecue] You are now able to use "WurmBarbecue" optimized for minecraft version 2.5.1 !
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:19] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:19] [Server thread/INFO]: [NametagEdit] Enabling NametagEdit v4.4.0
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:19] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:19] [Server thread/INFO]: [Multiverse-Core] Enabling Multiverse-Core v3.0.0-SNAPSHOT-b760
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:20] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:20] [Server thread/WARN]: [Multiverse-Core] Exception while loading value for color
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:20] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:20] [Server thread/WARN]: [Multiverse-Core] Exception while loading value for color
                                    [number:protected] => 126
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:20] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:20] [Server thread/INFO]: World hell is a duplicate of another world and has been prevented from loading. Please delete the uid.dat file from hell\'s world directory if you want to be able to load the duplicate world.
                                    [number:protected] => 127
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:20] [Server thread/ERROR]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:20] [Server thread/ERROR]: [Multiverse-Core] The world \'hell\' could NOT be loaded because the server didn\'t like it!
                                    [number:protected] => 128
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:20] [Server thread/ERROR]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:20] [Server thread/ERROR]: [Multiverse-Core] We don\'t really know why this is. Contact the developer of your server software!
                                    [number:protected] => 129
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:20] [Server thread/ERROR]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:20] [Server thread/ERROR]: [Multiverse-Core] Server version info: git-Bukkit-8b1588e (MC: 1.13.2)
                                    [number:protected] => 130
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:20] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:20] [Server thread/INFO]: [Multiverse-Core] 3 - World(s) loaded.
                                    [number:protected] => 131
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:20] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:20] [Server thread/INFO]: [Multiverse-Core] Version 3.0.0-SNAPSHOT-b760 (API v22) Enabled - By Rigby, fernferret, lithium3141, main-- and dumptruckman
                                    [number:protected] => 132
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [18:15:20] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [18:15:20] [Server thread/INFO]: [WorldGuard] Enabling WorldGuard v7.0.0-beta-03;e51a220
                                    [number:protected] => 133
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 133
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [18:14:46] [main/INFO]: Loaded 0 recipes
[18:14:46] [Server thread/INFO]: Starting minecraft server version 1.13.2
[18:14:46] [Server thread/INFO]: Loading properties
[18:14:46] [Server thread/INFO]: Default game type: SURVIVAL
[18:14:46] [Server thread/INFO]: Generating keypair
[18:14:47] [Server thread/INFO]: Starting Minecraft server on *:10990
[18:14:47] [Server thread/INFO]: Using epoll channel type
[18:14:48] [Server thread/INFO]: This server is running CraftBukkit version git-Bukkit-8b1588e (MC: 1.13.2) (Implementing API version 1.13.2-R0.1-SNAPSHOT)
[18:14:58] [Server thread/INFO]: [Itemizer] Loading Itemizer v3.4
[18:14:58] [Server thread/INFO]: [WorldEdit] Loading WorldEdit v7.0.0-beta-05;6bbf29b
[18:14:58] [Server thread/INFO]: [Creep] Loading Creep v4.0
[18:14:58] [Server thread/INFO]: [SkinsRestorer] Loading SkinsRestorer v13.6.1
[18:14:58] [Server thread/INFO]: [Punishmental] Loading Punishmental v5.1
[18:14:58] [Server thread/INFO]: [AdminEssentials] Loading AdminEssentials v1.1.5
[18:14:58] [Server thread/INFO]: [AdminFun] Loading AdminFun v2.5.0
[18:14:58] [Server thread/INFO]: [SimpleRename] Loading SimpleRename v10.7.5
[18:14:58] [Server thread/INFO]: [WurmBarbecue] Loading WurmBarbecue v2.5.1
[18:14:58] [Server thread/INFO]: [NametagEdit] Loading NametagEdit v4.4.0
[18:14:58] [Server thread/INFO]: [Multiverse-Core] Loading Multiverse-Core v3.0.0-SNAPSHOT-b760
[18:14:58] [Server thread/INFO]: [WorldGuard] Loading WorldGuard v7.0.0-beta-03;e51a220
[18:14:58] [Server thread/INFO]: [EliteMobs] Loading EliteMobs v6.7.0
[18:14:58] [Server thread/INFO]: [ChopTree3] Loading ChopTree3 v4.0.0
[18:14:58] [Server thread/WARN]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
[18:14:58] [Server thread/WARN]: The server will make no attempt to authenticate usernames. Beware.
[18:14:58] [Server thread/WARN]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
[18:14:58] [Server thread/WARN]: To change this, set "online-mode" to "true" in the server.properties file.
[18:14:58] [Server thread/INFO]: Preparing level "world"
[18:14:58] [Server thread/INFO]: Reloading ResourceManager: Default, bukkit
[18:14:59] [Server thread/INFO]: Loaded 524 recipes
[18:15:00] [Server thread/INFO]: Preparing start region for level minecraft:overworld (Seed: 1451100598147509339)
[18:15:01] [Server thread/INFO]: Preparing spawn area: 4%
[18:15:02] [Server thread/INFO]: Preparing spawn area: 8%
[18:15:02] [Server thread/INFO]: Preparing spawn area: 12%
[18:15:02] [Server thread/INFO]: Preparing spawn area: 16%
[18:15:03] [Server thread/INFO]: Preparing spawn area: 20%
[18:15:03] [Server thread/INFO]: Preparing spawn area: 24%
[18:15:03] [Server thread/INFO]: Preparing spawn area: 28%
[18:15:03] [Server thread/INFO]: Preparing spawn area: 32%
[18:15:04] [Server thread/INFO]: Preparing spawn area: 36%
[18:15:04] [Server thread/INFO]: Preparing spawn area: 40%
[18:15:04] [Server thread/INFO]: Preparing spawn area: 44%
[18:15:04] [Server thread/INFO]: Preparing spawn area: 48%
[18:15:04] [Server thread/INFO]: Preparing spawn area: 52%
[18:15:04] [Server thread/INFO]: Preparing spawn area: 56%
[18:15:05] [Server thread/INFO]: Preparing spawn area: 60%
[18:15:05] [Server thread/INFO]: Preparing spawn area: 64%
[18:15:05] [Server thread/INFO]: Preparing spawn area: 68%
[18:15:05] [Server thread/INFO]: Preparing spawn area: 72%
[18:15:05] [Server thread/INFO]: Preparing spawn area: 76%
[18:15:05] [Server thread/INFO]: Preparing spawn area: 80%
[18:15:05] [Server thread/INFO]: Preparing spawn area: 84%
[18:15:06] [Server thread/INFO]: Preparing spawn area: 88%
[18:15:06] [Server thread/INFO]: Preparing spawn area: 92%
[18:15:06] [Server thread/INFO]: Preparing spawn area: 96%
[18:15:06] [Server thread/INFO]: Preparing spawn area: 100%
[18:15:06] [Server thread/INFO]: Preparing start region for level minecraft:the_nether (Seed: 7868728471670565575)
[18:15:06] [Server thread/INFO]: Preparing spawn area: 4%
[18:15:06] [Server thread/INFO]: Preparing spawn area: 8%
[18:15:06] [Server thread/INFO]: Preparing spawn area: 12%
[18:15:06] [Server thread/INFO]: Preparing spawn area: 16%
[18:15:06] [Server thread/INFO]: Preparing spawn area: 20%
[18:15:07] [Server thread/INFO]: Preparing spawn area: 24%
[18:15:07] [Server thread/INFO]: Preparing spawn area: 28%
[18:15:07] [Server thread/INFO]: Preparing spawn area: 32%
[18:15:07] [Server thread/INFO]: Preparing spawn area: 36%
[18:15:07] [Server thread/INFO]: Preparing spawn area: 40%
[18:15:07] [Server thread/INFO]: Preparing spawn area: 44%
[18:15:07] [Server thread/INFO]: Preparing spawn area: 48%
[18:15:07] [Server thread/INFO]: Preparing spawn area: 52%
[18:15:08] [Server thread/INFO]: Preparing spawn area: 56%
[18:15:08] [Server thread/INFO]: Preparing spawn area: 60%
[18:15:08] [Server thread/INFO]: Preparing spawn area: 64%
[18:15:08] [Server thread/INFO]: Preparing spawn area: 68%
[18:15:08] [Server thread/INFO]: Preparing spawn area: 72%
[18:15:08] [Server thread/INFO]: Preparing spawn area: 76%
[18:15:08] [Server thread/INFO]: Preparing spawn area: 80%
[18:15:08] [Server thread/INFO]: Preparing spawn area: 84%
[18:15:08] [Server thread/INFO]: Preparing spawn area: 88%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 92%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 96%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 100%
[18:15:09] [Server thread/INFO]: Preparing start region for level minecraft:the_end (Seed: 1451100598147509339)
[18:15:09] [Server thread/INFO]: Preparing spawn area: 4%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 8%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 12%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 16%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 20%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 24%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 28%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 32%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 36%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 40%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 44%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 48%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 52%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 56%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 60%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 64%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 68%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 72%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 76%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 80%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 84%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 88%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 92%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 96%
[18:15:09] [Server thread/INFO]: Preparing spawn area: 100%
[18:15:09] [Server thread/INFO]: Time elapsed: 9197 ms
[18:15:09] [Server thread/INFO]: [Itemizer] Enabling Itemizer v3.4
[18:15:10] [Server thread/INFO]: [WorldEdit] Enabling WorldEdit v7.0.0-beta-05;6bbf29b
[18:15:10] [Server thread/INFO]: [WorldEdit] Using com.sk89q.worldedit.bukkit.adapter.impl.Spigot_v1_13_R2_2 as the Bukkit adapter
[18:15:12] [Server thread/INFO]: WEPIF: Using the Bukkit Permissions API.
[18:15:12] [Server thread/INFO]: [Creep] Enabling Creep v4.0
[18:15:12] [Server thread/INFO]: Creep version 4.0 is now enabled.
[18:15:12] [Server thread/INFO]: [SkinsRestorer] Enabling SkinsRestorer v13.6.1
[18:15:13] [Server thread/INFO]: [AdminFun] Enabling AdminFun v2.5.0
[18:15:14] [Server thread/INFO]: [SimpleRename] Enabling SimpleRename v10.7.5
[18:15:14] [Server thread/INFO]: SimpleRename enabled!
[18:15:14] [Server thread/INFO]: [WurmBarbecue] Enabling WurmBarbecue v2.5.1
[18:15:15] [Server thread/INFO]: [WurmBarbecue] Done checking defaults!
[18:15:19] [Server thread/INFO]: [WurmBarbecue] Done loading cooking melting recipes!
[18:15:19] [Server thread/INFO]: [WurmBarbecue] You are now able to use "WurmBarbecue" optimized for minecraft version 2.5.1 !
[18:15:19] [Server thread/INFO]: [NametagEdit] Enabling NametagEdit v4.4.0
[18:15:19] [Server thread/INFO]: [Multiverse-Core] Enabling Multiverse-Core v3.0.0-SNAPSHOT-b760
[18:15:20] [Server thread/WARN]: [Multiverse-Core] Exception while loading value for color
[18:15:20] [Server thread/WARN]: [Multiverse-Core] Exception while loading value for color
[18:15:20] [Server thread/INFO]: World hell is a duplicate of another world and has been prevented from loading. Please delete the uid.dat file from hell\'s world directory if you want to be able to load the duplicate world.
[18:15:20] [Server thread/ERROR]: [Multiverse-Core] The world \'hell\' could NOT be loaded because the server didn\'t like it!
[18:15:20] [Server thread/ERROR]: [Multiverse-Core] We don\'t really know why this is. Contact the developer of your server software!
[18:15:20] [Server thread/ERROR]: [Multiverse-Core] Server version info: git-Bukkit-8b1588e (MC: 1.13.2)
[18:15:20] [Server thread/INFO]: [Multiverse-Core] 3 - World(s) loaded.
[18:15:20] [Server thread/INFO]: [Multiverse-Core] Version 3.0.0-SNAPSHOT-b760 (API v22) Enabled - By Rigby, fernferret, lithium3141, main-- and dumptruckman
[18:15:20] [Server thread/INFO]: [WorldGuard] Enabling WorldGuard v7.0.0-beta-03;e51a220
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
                    [value:protected] => 1.13.2
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [18:14:46] [Server thread/INFO]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [18:14:46] [Server thread/INFO]: Starting minecraft server version 1.13.2
                                            [number:protected] => 2
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\WorldDuplicateProblem Object
                (
                    [worldName:protected] => hell
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => hell/uid.dat
                                    [relativePath:protected] => 1
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution Object
                                (
                                    [path:protected] => hell
                                    [relativePath:protected] => 1
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [18:15:20] [Server thread/INFO]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [18:15:20] [Server thread/INFO]: World hell is a duplicate of another world and has been prevented from loading. Please delete the uid.dat file from hell\'s world directory if you want to be able to load the duplicate world.
                                            [number:protected] => 127
                                        )

                                )

                            [level:protected] => INFO
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

        $this->assertEquals("Minecraft version: 1.13.2", $analysis[0]->getMessage());

        $this->assertEquals("World 'hell' is a duplicate of another world and has been prevented from loading.", $analysis[1]->getMessage());
        $this->assertEquals("Delete the file 'hell/uid.dat'.", $analysis[1][0]->getMessage());
        $this->assertEquals("Delete the file 'hell'.", $analysis[1][1]->getMessage());

    }
}